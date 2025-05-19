<?php

class __Mustache_0666259e8b9b89c2e79ca19261ba7e90 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('local_edwiserreports/navigation')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/report-page-header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="wdm-customreports-edit" class="row mx-0">
';
        $buffer .= $indent . '    <input class="hidden" id="wdm_custom_reports_id" value="';
        $value = $this->resolveValue($context->find('reportsid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input class="hidden" id="wdm_custom_reports_fullname" value="';
        $value = $this->resolveValue($context->find('fullname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input class="hidden" id="wdm_custom_reports_shortname" value="';
        $value = $this->resolveValue($context->find('shortname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input class="hidden" id="wdm_custom_reports_downloadenable" value="';
        $value = $this->resolveValue($context->find('downloadenable'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input class="hidden" id="wdm_custom_reports_desktopenable" value="';
        $value = $this->resolveValue($context->find('enabledesktop'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="customreports-block-section w-100 mb-5">
';
        $buffer .= $indent . '        <div class="">
';
        $buffer .= $indent . '            <div class="reports-list-header d-flex">
';
        $buffer .= $indent . '                <h4 class="font-weight-bold"> ';
        $value = $context->find('str');
        $buffer .= $this->section0d8ba4b05003d061a6ff8df6a06a9b21($context, $indent, $value);
        $buffer .= ' </h4>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="reports-list-body">
';
        $buffer .= $indent . '                <div class="pt-4">
';
        $buffer .= $indent . '                    <div class="row pb-3">
';
        $buffer .= $indent . '                        <div class="filter-selector col-12 col-md-3 mb-1">
';
        $buffer .= $indent . '                            <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC93e9ebab241e3e6bd5310f5c89d07dd($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '                            ');
        }
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="reports-list-content d-none justify-content-center align-items-center">
';
        $buffer .= $indent . '                        <div class="table-responsive">
';
        $buffer .= $indent . '                            <table id="cr-list-table" class="datatable table"></table>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div id="wdm-cr-create-header" class="w-100">
';
        $buffer .= $indent . '        <h4 class="font-weight-bold"> ';
        $value = $context->find('str');
        $buffer .= $this->sectionF5f0221875981173e67a62ee8a47a443($context, $indent, $value);
        $buffer .= ' </h4>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="customreports-block-section w-100">
';
        $buffer .= $indent . '        <div class="h-auto mb-5">
';
        $buffer .= $indent . '            <div class="reports-filter-header">
';
        $buffer .= $indent . '                <h4> ';
        $value = $context->find('str');
        $buffer .= $this->section76cd3a44bcf60a413b489ee9c977df62($context, $indent, $value);
        $buffer .= ' </h4>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="reports-filter-body row">
';
        $buffer .= $indent . '                <div class="col-12 col-md-6 col-lg-3 mb-1">
';
        $buffer .= $indent . '                    <select id="wdm-cohort-select" class="custom-field-select form-control singleselect w-full">
';
        $buffer .= $indent . '                        <option value="0">';
        $value = $context->find('str');
        $buffer .= $this->section20c673b8ee72511cb7615ddf20207f50($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('cohorts');
        $buffer .= $this->section7d0803da6bb5684ea544f62d83c2bfe1($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-12 col-md-6 col-lg-3 mb-1">
';
        $buffer .= $indent . '                    <select id="wdm-course-select" class="custom-field-select form-control singleselect w-full">
';
        $buffer .= $indent . '                        <option value="0" ';
        $value = $context->find('allcourses');
        $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
        $buffer .= '>';
        $value = $context->find('str');
        $buffer .= $this->section3f7abe5fbee6a0458d05814b6a8712bc($context, $indent, $value);
        $buffer .= '</option>
';
        $value = $context->find('courses');
        $buffer .= $this->sectionC7e2fb306259ef0f2d0ece658a9bcf96($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $value = $context->find('fields');
        $buffer .= $this->sectionCa487dd9946350ea85c982cf4011b365($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="customreports-block-section w-100">
';
        $buffer .= $indent . '        <div class="h-auto mb-5">
';
        $buffer .= $indent . '            <div class="reports-preview-header">
';
        $buffer .= $indent . '                <h4 class="rp-header">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('fullname');
        $buffer .= $this->sectionE6922901afa7b60d3ce7403587f8d6c3($context, $indent, $value);
        $buffer .= '
';
        $value = $context->find('fullname');
        if (empty($value)) {
            
            $buffer .= $indent . '                        ';
            $value = $context->find('str');
            $buffer .= $this->sectionD1cf79f2fe3dcb66ef8a4f7c0044d074($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '                </h4>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="reports-preview-body">
';
        $buffer .= $indent . '                <div class="">
';
        $buffer .= $indent . '                    <div class="border reports-preview-content loader d-none justify-content-center align-items-center">
';
        $buffer .= $indent . '                        <div class="w-full text-center">
';
        $buffer .= $indent . '                            ';
        $value = $context->find('pix');
        $buffer .= $this->sectionC8244e3ff2e632f5dcf1816fe4378766($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="reports-preview-content d-none justify-content-center align-items-center">
';
        $buffer .= $indent . '                        <div class="table-responsive">
';
        $buffer .= $indent . '                            <table id="cr-preview-table" class="datatable table"></table>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="border reports-preview-content empty d-flex justify-content-center align-items-center">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section77bba815b86ff4381d5f4d039dbc0b8d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="reports-preview-footer py-1 text-right">
';
        $buffer .= $indent . '                <button id="wdm-custom-reports-save" class="btn theme-primary-bg text-white" disabled>
';
        $value = $context->find('isediting');
        $buffer .= $this->section218dcc7bc1571e6c2aac757f23fe4fcb($context, $indent, $value);
        $value = $context->find('isediting');
        if (empty($value)) {
            
            $buffer .= $indent . '                        ';
            $value = $context->find('str');
            $buffer .= $this->sectionD66c69b5b6ccf26c30ac551fe1e8982a($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                <a href="';
        $value = $this->resolveValue($context->find('createnewlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="btn theme-primary-text theme-primary-border">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section877e1e3f494b3915fca9e0845188bb40($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section07de2ef3229b8850ddac6fddba86bb34($context, $indent, $value);
        $value = $context->find('setactive');
        $buffer .= $this->section5522b29e4c6a36f26fdf9dbbee06cacd($context, $indent, $value);

        return $buffer;
    }

    private function section0d8ba4b05003d061a6ff8df6a06a9b21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reportslist, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reportslist, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC93e9ebab241e3e6bd5310f5c89d07dd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' search, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' search, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF5f0221875981173e67a62ee8a47a443(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' createcustomreports, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' createcustomreports, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76cd3a44bcf60a413b489ee9c977df62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reportsfilter, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reportsfilter, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20c673b8ee72511cb7615ddf20207f50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' allcohorts, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' allcohorts, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d0803da6bb5684ea544f62d83c2bfe1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{id}}">{{name}}</option>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f7abe5fbee6a0458d05814b6a8712bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' fulllistofcourses ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' fulllistofcourses ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC7e2fb306259ef0f2d0ece658a9bcf96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{id}}" {{#selected}}selected{{/selected}}>{{{fullname}}}</option>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC87198b06c7ce18b3aeed72afb34afb9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd4b16dc238bc46ae91dbd0f1332d3bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unlockthisfeature, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unlockthisfeature, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47877adcd254a6c5a5d198efe1ae592b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'title="{{#str}} unlockthisfeature, local_edwiserreports {{/str}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'title="';
                $value = $context->find('str');
                $buffer .= $this->sectionCd4b16dc238bc46ae91dbd0f1332d3bd($context, $indent, $value);
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3614f8eb9a181ec2ea1649f1d4940701(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="{{id}} p-2">
                            <div class="checkbox-edwiserreports {{#disabled}}disabled{{/disabled}}" {{#disabled}}title="{{#str}} unlockthisfeature, local_edwiserreports {{/str}}"{{/disabled}}>
                                <input type="checkbox" id="{{id}}" class="custom-field-checkbox" value="{{id}}" {{#selected}}checked{{/selected}} {{#disabled}}disabled{{/disabled}}>
                                <label for="{{id}}" class="checkmark"></label>
                                <label for="{{id}}" class="mb-0">{{text}}</label>
                            </div>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' p-2">
';
                $buffer .= $indent . '                            <div class="checkbox-edwiserreports ';
                $value = $context->find('disabled');
                $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
                $buffer .= '" ';
                $value = $context->find('disabled');
                $buffer .= $this->section47877adcd254a6c5a5d198efe1ae592b($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                                <input type="checkbox" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="custom-field-checkbox" value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('disabled');
                $buffer .= $this->sectionC87198b06c7ce18b3aeed72afb34afb9($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                                <label for="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="checkmark"></label>
';
                $buffer .= $indent . '                                <label for="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="mb-0">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</label>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa487dd9946350ea85c982cf4011b365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="col-12 col-md-6 col-lg-3 mb-1 field-group-wrap" data-key="{{key}}">
                    <div id="{{key}}-field-group" class="field-group w-full p-2 border">
                        {{title}}
                        <i class="fa fa-angle-right pull-right p-1"></i>
                    </div>
                    <div class="field ml-3 mr-3" aria-control="{{key}}-field-group">
                        {{#fieldsarray}}
                        <div class="{{id}} p-2">
                            <div class="checkbox-edwiserreports {{#disabled}}disabled{{/disabled}}" {{#disabled}}title="{{#str}} unlockthisfeature, local_edwiserreports {{/str}}"{{/disabled}}>
                                <input type="checkbox" id="{{id}}" class="custom-field-checkbox" value="{{id}}" {{#selected}}checked{{/selected}} {{#disabled}}disabled{{/disabled}}>
                                <label for="{{id}}" class="checkmark"></label>
                                <label for="{{id}}" class="mb-0">{{text}}</label>
                            </div>
                        </div>
                        {{/fieldsarray}}
                    </div>
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="col-12 col-md-6 col-lg-3 mb-1 field-group-wrap" data-key="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <div id="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-field-group" class="field-group w-full p-2 border">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        <i class="fa fa-angle-right pull-right p-1"></i>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="field ml-3 mr-3" aria-control="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-field-group">
';
                $value = $context->find('fieldsarray');
                $buffer .= $this->section3614f8eb9a181ec2ea1649f1d4940701($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE6922901afa7b60d3ce7403587f8d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1cf79f2fe3dcb66ef8a4f7c0044d074(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reportspreview, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reportspreview, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3502cb8652b5ca94b45d7b52a2201ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loadinghelp, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loadinghelp, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8244e3ff2e632f5dcf1816fe4378766(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/loading, core, {{#str}} loadinghelp, moodle {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/loading, core, ';
                $value = $context->find('str');
                $buffer .= $this->sectionD3502cb8652b5ca94b45d7b52a2201ac($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section77bba815b86ff4381d5f4d039dbc0b8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noreportspreview, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noreportspreview, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44e95b3702e203528dda56deb39d0e05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' updatereports, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' updatereports, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section218dcc7bc1571e6c2aac757f23fe4fcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#str}} updatereports, local_edwiserreports {{/str}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section44e95b3702e203528dda56deb39d0e05($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD66c69b5b6ccf26c30ac551fe1e8982a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' createreports, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' createreports, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section877e1e3f494b3915fca9e0845188bb40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reset, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reset, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section013547b6bf94b213086dfe83eed223be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectcourses, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectcourses, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF2314d0f002d630f63b87ca50632a9da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectcohorts, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectcohorts, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section07de2ef3229b8850ddac6fddba86bb34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'local_edwiserreports/customreportsblock\',
    \'local_edwiserreports/select2\'
], function(
    $,
    customreportsblock
) {

    var courseSelect = $(\'#wdm-course-select\').select2({
        multiple: true,
        closeOnSelect: false,
        placeholder: "{{#str}} selectcourses, local_edwiserreports {{/str}}"
    });

    var cohortSelect = $(\'#wdm-cohort-select\').select2({
        multiple: true,
        closeOnSelect: false,
        placeholder: "{{#str}} selectcohorts, local_edwiserreports {{/str}}"
    });

    courseSelect.val({{{selectedcourses}}}).trigger("change");
    cohortSelect.val({{{selectedcohorts}}}).trigger("change");

    var selectedValues = ["0"];
    $(\'.singleselect\').on(\'change\', function() {
        var values = $(this).val();

        if (JSON.stringify(selectedValues) !== JSON.stringify(values)) {
            var oldIndex = selectedValues.indexOf("0");
            var newIndex = values.indexOf("0");

            switch (true) {
                case (oldIndex == -1 && newIndex > -1):
                    // Assign the selected value
                    values = ["0"];
                    selectedValues = values;
                    $(this).select2(\'val\', values);
                    break;
                case (oldIndex > -1 && newIndex > -1):
                    values.splice(newIndex, 1);

                    // Assign the selected value
                    selectedValues = values;
                    $(this).select2(\'val\', values);
                    break;
            }

            selectedValues = values;
        }
    });

    customreportsblock.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'local_edwiserreports/customreportsblock\',
';
                $buffer .= $indent . '    \'local_edwiserreports/select2\'
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    customreportsblock
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var courseSelect = $(\'#wdm-course-select\').select2({
';
                $buffer .= $indent . '        multiple: true,
';
                $buffer .= $indent . '        closeOnSelect: false,
';
                $buffer .= $indent . '        placeholder: "';
                $value = $context->find('str');
                $buffer .= $this->section013547b6bf94b213086dfe83eed223be($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var cohortSelect = $(\'#wdm-cohort-select\').select2({
';
                $buffer .= $indent . '        multiple: true,
';
                $buffer .= $indent . '        closeOnSelect: false,
';
                $buffer .= $indent . '        placeholder: "';
                $value = $context->find('str');
                $buffer .= $this->sectionF2314d0f002d630f63b87ca50632a9da($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    courseSelect.val(';
                $value = $this->resolveValue($context->find('selectedcourses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ').trigger("change");
';
                $buffer .= $indent . '    cohortSelect.val(';
                $value = $this->resolveValue($context->find('selectedcohorts'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ').trigger("change");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    var selectedValues = ["0"];
';
                $buffer .= $indent . '    $(\'.singleselect\').on(\'change\', function() {
';
                $buffer .= $indent . '        var values = $(this).val();
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        if (JSON.stringify(selectedValues) !== JSON.stringify(values)) {
';
                $buffer .= $indent . '            var oldIndex = selectedValues.indexOf("0");
';
                $buffer .= $indent . '            var newIndex = values.indexOf("0");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            switch (true) {
';
                $buffer .= $indent . '                case (oldIndex == -1 && newIndex > -1):
';
                $buffer .= $indent . '                    // Assign the selected value
';
                $buffer .= $indent . '                    values = ["0"];
';
                $buffer .= $indent . '                    selectedValues = values;
';
                $buffer .= $indent . '                    $(this).select2(\'val\', values);
';
                $buffer .= $indent . '                    break;
';
                $buffer .= $indent . '                case (oldIndex > -1 && newIndex > -1):
';
                $buffer .= $indent . '                    values.splice(newIndex, 1);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    // Assign the selected value
';
                $buffer .= $indent . '                    selectedValues = values;
';
                $buffer .= $indent . '                    $(this).select2(\'val\', values);
';
                $buffer .= $indent . '                    break;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            selectedValues = values;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    customreportsblock.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5522b29e4c6a36f26fdf9dbbee06cacd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> local_edwiserreports/setactivenav }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/setactivenav')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
