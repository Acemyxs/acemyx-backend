// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.
/**
 * Course Activity Completion report page.
 *
 * @package     local_edwiserreports
 * @author      Yogesh Shirsath
 * @copyright   2022 Wisdmlabs <support@wisdmlabs.com>
 * @license     http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
define('local_edwiserreports/reports/courseactivitycompletion', [
    'jquery',
    'core/ajax',
    'core/notification',
    'local_edwiserreports/common',
    'local_edwiserreports/defaultconfig',
    'local_edwiserreports/select2',
    'local_edwiserreports/flatpickr'
], function(
    $,
    ajax,
    Notification,
    common,
    CFG
) {

    /**
     * Selector
     */
    var SELECTOR = {
        PAGE: '#courseactivitycompletion',
        SEARCH: '#courseactivitycompletion .table-search-input input',
        LENGTH: '#courseactivitycompletion .length-select',
        COURSE: '#courseactivitycompletion .course-select',
        SUMMARY: '#courseactivitycompletion .summary-card',
        CM: '#courseactivitycompletion .cm-select',
        GROUP: '#courseactivitycompletion .group-select',
        TABLE: '#courseactivitycompletion table',
        FORMFILTER: '#courseactivitycompletion .download-links [name="filter"]',
        DATE: '.edwiserreports-calendar',
        DATEMENU: '.edwiserreports-calendar + .dropdown-menu',
        DATEITEM: '.edwiserreports-calendar + .dropdown-menu .dropdown-item',
        DATEPICKER: '.edwiserreports-calendar + .dropdown-menu .dropdown-calendar',
        DATEPICKERINPUT: '.edwiserreports-calendar + .dropdown-menu .flatpickr'
    };

    /**
     * Flat picker object.
     */
    let flatpickr = null;

    /**
     * Datatable object.
     */
    var dataTable = null;

    /**
     * Filter object.
     */
    var filter = {
        course: null,
        cm: 0,
        group: 0,
        enrolment: 'all'
    };

    /**
     * All promises.
     */
    var PROMISE = {
        /**
         * Get course activities summary table data based on filters.
         * @param {Object} filter Filter data
         * @returns {PROMISE}
         */
        GET_DATA: function(filter) {
            return $.ajax({
                url: CFG.requestUrl,
                type: CFG.requestType,
                dataType: CFG.requestDataType,
                data: {
                    action: 'get_courseactivitycompletion_data',
                    secret: M.local_edwiserreports.secret,
                    lang: $('html').attr('lang'),
                    data: JSON.stringify(filter)
                },
            });
        },
        /**
         * Get summary card data.
         *
         * @param   {object}   filter    Filter object
         * @returns {PROMISE}
         */
        GET_SUMMARY_CARD_DATA: function(filter) {
            return ajax.call([{
                methodname: 'local_edwiserreports_get_summary_card_data',
                args: {
                    report: "\\local_edwiserreports\\reports\\courseactivitycompletion",
                    filters: JSON.stringify(filter)
                }
            }], false)[0];
        }
    };

    /**
     * Initialize datable.
     */
    function initializeDatatable() {
        common.loader.show(SELECTOR.PAGE);

        // Updated export filter values.
        $(SELECTOR.FORMFILTER).val(JSON.stringify(filter));
        let statuses = [
            `<span class="danger-tag">${M.util.get_string('notyetstarted', 'core_completion')}</span>`,
            `<span class="success-tag">${M.util.get_string('completed', 'core_completion')}</span>`,
            `<span class="warning-tag">${M.util.get_string('inprogress', 'core_completion')}</span>`
        ];
        PROMISE.GET_DATA(filter)
            .done(function(response) {
                if (dataTable !== null) {
                    dataTable.destroy();
                    dataTable = null;
                }
                dataTable = $(SELECTOR.TABLE).DataTable({
                    data: response,
                    paging: true,
                    deferRendering: true,
                    columnDefs: [
                        {className: "fixed-column", targets: 0},
                        {className: "text-left", targets: [0, 1, 2]},
                        {className: "text-right", targets: "_all"}
                    ],
                    columns: [
                        {data: 'learner',
                        width: "4rem"
                    },
                        {data: 'email'},
                        {
                            data: 'status',
                            render: function(data) {
                                return statuses[data];
                            },
                            width: "4rem"
                        },
                        {
                            data: 'completedon'
                        },
                        {data: 'grade'},
                        {
                            data: 'gradedon',
                            width: "8rem"
                        },
                        {
                            data: 'firstaccess',
                            width: "10rem"
                        },
                        {
                            data: 'lastaccess',
                            width: "10rem"
                        },
                        {data: 'visits'},
                        {
                            data: 'timespent',
                        }
                    ],
                    dom: '<"edwiserreports-table"i<t><"table-pagination"p>>',
                    language: {
                        info: M.util.get_string('tableinfo', 'local_edwiserreports'),
                        infoEmpty: M.util.get_string('infoempty', 'local_edwiserreports'),
                        emptyTable: M.util.get_string('emptytable', 'local_edwiserreports'),
                        zeroRecords: M.util.get_string('zerorecords', 'local_edwiserreports'),
                        paginate: {
                            previous: "&#9666",
                            next: "&#9656"
                        }
                    },
                    drawCallback: function() {
                        common.stylePaginationButton(this);
                        common.loader.hide(SELECTOR.PAGE);
                    }
                });
                dataTable.columns(0).search($(SELECTOR.SEARCH).val());
                dataTable.page.len($(SELECTOR.LENGTH).val()).draw();
            })
            .fail(function(ex) {
                Notification.exception(ex);
                common.loader.hide(SELECTOR.PAGE);
            });
    }

    /**
     * After Select Custom date get active users details.
     */
    function customDateSelected() {
        let date = $(SELECTOR.DATEPICKERINPUT).val(); // Y-m-d format
        let dateAlternate = $(SELECTOR.DATEPICKERINPUT).next().val().replace("to", "-"); // D M Y format
        $(SELECTOR.DATEPICKERINPUT).next().val(dateAlternate);

        /* If correct date is not selected then return false */
        if (!date.includes(" to ")) {
            flatpickr.clear();
            return;
        }

        // Set active class to custom date selector item.
        $(SELECTOR.DATEITEM).removeClass('active');
        $(SELECTOR.DATEITEM + '.custom').addClass('active');

        // Show custom date to dropdown button.
        $(SELECTOR.DATE).html(dateAlternate);

        filter.enrolment = date;
        initializeDatatable();
        common.updateTimeLabel(date);
    }

    /**
     * Reload filters.
     * @param {array} types Types
     * @param {number} course Course id
     */
    function reloadFilter(types, course) {
        common.loader.show(SELECTOR.PAGE);
        common.reloadFilter(
            SELECTOR.PAGE,
            types,
            0,
            course,
            0,
            function() {
                setTimeout(function() {
                    filter.cm = $(SELECTOR.CM).find(`option:first`).attr('value');
                    initializeDatatable();
                }, 500);
            });
    }

    /**
     * Initialize
     */
    function init() {

        filter = JSON.parse($(SELECTOR.FORMFILTER).val());

        // Show time period in table info.
        common.updateTimeLabel('all');

        // Initialize select2.
        $(SELECTOR.COURSE).select2({
            templateResult: function(state) {
                if (!state.id) {
                    return state.text;
                }
                var $state = $(
                    '<span class="pl-3 d-block">' + state.text + '</span>'
                );
                return $state;
            }
        });
        $(SELECTOR.PAGE).find('.singleselect').not(SELECTOR.COURSE).select2();

        flatpickr = $(SELECTOR.DATEPICKERINPUT).flatpickr({
            mode: 'range',
            altInput: true,
            altFormat: "d M Y",
            dateFormat: "Y-m-d",
            maxDate: "today",
            appendTo: $(SELECTOR.DATEPICKER).get(0),
            onOpen: function() {
                $(SELECTOR.DATEMENU).addClass('withcalendar');
                setTimeout(function() {
                    if ($(SELECTOR.DATEMENU).offset().left < $(SELECTOR.PAGE).parent().offset().left) {
                        $(SELECTOR.DATEMENU).css('left', $(SELECTOR.DATEMENU).closest('.filter-selector').css('padding-left'));
                    }
                }, 500);
            },
            onChange: function() {
                if ($(SELECTOR.DATEMENU).offset().left < $(SELECTOR.PAGE).parent().offset().left) {
                    $(SELECTOR.DATEMENU).css('left', $(SELECTOR.DATEMENU).closest('.filter-selector').css('padding-left'));
                }
            },
            onClose: function() {
                $(SELECTOR.DATEMENU).removeClass('withcalendar');
                customDateSelected();
            }
        });

        /* Date selector listener */
        $('body').on('click', SELECTOR.DATEITEM + ":not(.custom)", function() {
            // Set custom selected item as active.
            $(SELECTOR.DATEITEM).removeClass('active');
            $(this).addClass('active');

            // Show selected item on dropdown button.
            $(SELECTOR.DATE).html($(this).text());

            // Clear custom date.
            flatpickr.clear();

            filter.enrolment = $(this).data('value');
            initializeDatatable();
            common.updateTimeLabel(filter.enrolment);
        });

        // Observer course change.
        $('body').on('change', SELECTOR.COURSE, function() {
            filter.course = $(this).val();
            // Fetching summary card data here
            PROMISE.GET_SUMMARY_CARD_DATA(filter)
                .done(function(response) {
                    response = JSON.parse(response);
                    common.refreshSummarycard('group', response, SELECTOR.SUMMARY, function() {
                        //     InitializeDatatable();
                    });
                });

            filter.group = 0;
            reloadFilter(['cm', 'group'], filter.course);
        });

        // Observer cm change.
        $('body').on('change', SELECTOR.CM, function() {
            filter.cm = $(this).val();
            initializeDatatable();
        });

        // Observer group change.
        $('body').on('change', SELECTOR.GROUP, function() {
            filter.group = $(this).val();
            // Fetching summary card data here
            PROMISE.GET_SUMMARY_CARD_DATA(filter)
                .done(function(response) {
                    response = JSON.parse(response);
                    common.refreshSummarycard('group', response, SELECTOR.SUMMARY, function() {
                        //     InitializeDatatable();
                    });
                });

            initializeDatatable();
        });

        // Search in table.
        $('body').on('input', SELECTOR.SEARCH, function() {
            dataTable.columns(0).search(this.value).draw();
        });

        // Observer length change.
        $('body').on('change', SELECTOR.LENGTH, function() {
            if (dataTable === null) {
                initializeDatatable();
                return;
            }
            dataTable.page.len(this.value).draw();
        });

        initializeDatatable();
        common.handleSearchInput();

        // Handle report page capability manager.
        common.handleReportCapability();
    }

    return {
        init: function() {
            $(document).ready(function() {
                init();
            });
        }
    };

});
