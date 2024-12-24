<?php

class __Mustache_3aa2a1987af8e2d5d2bc5fb769e70143 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('local_edwiserreports/navigation')) {
            $buffer .= $partial->renderInternal($context);
        }
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/breadcrumb')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/report-page-header')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<div id="wdm-courseprogress-individual" class="" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '        <div class="row mr-2">
';
        $buffer .= $indent . '        <div class="filter-selector col-12 col-lg-3 col-md-4 mb-1">
';
        $buffer .= $indent . '            <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC93e9ebab241e3e6bd5310f5c89d07dd($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $value = $context->find('cohortfilters');
        $buffer .= $this->section99e24158a85fb30ed71367c5f9fd5b74($context, $indent, $value);
        $value = $context->find('groups');
        $buffer .= $this->section8ca3bc7bc4ca0e5d3f2661357474a232($context, $indent, $value);
        $buffer .= $indent . '        <div class="filter-selector col-12 table-length-input ml-auto mb-3">
';
        $buffer .= $indent . '            <label>';
        $value = $context->find('str');
        $buffer .= $this->section8a2c784fd569d549e00d0c1c816934f3($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/length')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="table-reponsive">
';
        $buffer .= $indent . '        <table class="table admintable w-100">
';
        $buffer .= $indent . '            <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section8d4f0370cb28ea524abadb535516b614($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section25cec4ad62c9b46a80f2159832255fc2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section1b670e7bf557b058183ab2e2d851a72e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        81% - 100%
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        61% - 80%
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        41% - 60%
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        21% - 40%
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        0% - 20%
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </thead>
';
        $buffer .= $indent . '            <tbody>
';
        $value = $context->find('courseprogress');
        $buffer .= $this->section42ca563c718869be93a929f62fc05e12($context, $indent, $value);
        $buffer .= $indent . '            </tbody>
';
        $buffer .= $indent . '        </table>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('export');
        $buffer .= $this->section3b7874a8e2d1cbd02eb8f7d4f6e59e89($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('setactive');
        $buffer .= $this->section52ae84c2ab9c05d2f043ee60ca785cb8($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->sectionBaa9be1f2acb406296ab6bc892e6fe96($context, $indent, $value);

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

    private function section7896e029ec4b5b2ebff98a9ecfe2332d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cohort, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cohort, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section275150a16b09b726d50f14a2eaf665c2(Mustache_Context $context, $indent, $value)
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

    private function section99e24158a85fb30ed71367c5f9fd5b74(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="filter-selector col-12 col-md-2 mb-1">
                <label>{{#str}} cohort, local_edwiserreports {{/str}}</label>
                <select class="cohort-select form-control singleselect" name="cohort-select">
                    {{#values}}
                        <option value="{{id}}">{{name}}</option>
                    {{/values}}
                </select>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="filter-selector col-12 col-md-2 mb-1">
';
                $buffer .= $indent . '                <label>';
                $value = $context->find('str');
                $buffer .= $this->section7896e029ec4b5b2ebff98a9ecfe2332d($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                <select class="cohort-select form-control singleselect" name="cohort-select">
';
                $value = $context->find('values');
                $buffer .= $this->section275150a16b09b726d50f14a2eaf665c2($context, $indent, $value);
                $buffer .= $indent . '                </select>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCa768ca37ed6a1a230e593909d466b3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' group, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' group, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ca3bc7bc4ca0e5d3f2661357474a232(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="filter-selector pro-export-wrapper col-12 col-lg-4 col-md-4 mb-1">
                <label>{{#str}} group, local_edwiserreports {{/str}}</label>
                {{> local_edwiserreports/filters/groups_filter }}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="filter-selector pro-export-wrapper col-12 col-lg-4 col-md-4 mb-1">
';
                $buffer .= $indent . '                <label>';
                $value = $context->find('str');
                $buffer .= $this->sectionCa768ca37ed6a1a230e593909d466b3d($context, $indent, $value);
                $buffer .= '</label>
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/groups_filter')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a2c784fd569d549e00d0c1c816934f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' show, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' show, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8d4f0370cb28ea524abadb535516b614(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' coursename, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' coursename, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section25cec4ad62c9b46a80f2159832255fc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrolled, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enrolled, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1b670e7bf557b058183ab2e2d851a72e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completed, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completed, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42ca563c718869be93a929f62fc05e12(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <tr>
                    <td>
                        <a href="{{courseurl}}" class="w-full course-link">
                            {{{fullname}}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="enrolments" data-minvalue="-1" data-maxvalue="100" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{enrolments}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed" data-minvalue="99" data-maxvalue="100" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{completed100}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed80" data-minvalue="80" data-maxvalue="99" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{completed80}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed60" data-minvalue="60" data-maxvalue="80" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{completed60}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed40" data-minvalue="40" data-maxvalue="60" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{completed40}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed20" data-minvalue="20" data-maxvalue="40" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{completed20}}
                        </a>
                    </td>
                    <td>
                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="incompleted" data-minvalue="-1" data-maxvalue="20" data-courseid="{{id}}" data-coursename="{{fullname}}">
                            {{completed00}}
                        </a>
                    </td>
                </tr>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('courseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="w-full course-link">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="enrolments" data-minvalue="-1" data-maxvalue="100" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('enrolments'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed" data-minvalue="99" data-maxvalue="100" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('completed100'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed80" data-minvalue="80" data-maxvalue="99" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('completed80'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed60" data-minvalue="60" data-maxvalue="80" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('completed60'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed40" data-minvalue="40" data-maxvalue="60" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('completed40'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="completed20" data-minvalue="20" data-maxvalue="40" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('completed20'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                    <td>
';
                $buffer .= $indent . '                        <a href="javascript:void(0)" class="w-full modal-trigger" data-action="incompleted" data-minvalue="-1" data-maxvalue="20" data-courseid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-coursename="';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('completed00'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </td>
';
                $buffer .= $indent . '                </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3b7874a8e2d1cbd02eb8f7d4f6e59e89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="pull-right px-5">
        {{> local_edwiserreports/exportreports }}
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="pull-right px-5">
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportreports')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52ae84c2ab9c05d2f043ee60ca785cb8(Mustache_Context $context, $indent, $value)
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

    private function sectionBaa9be1f2acb406296ab6bc892e6fe96(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.local_edwiserreports = {
    secret: \'{{{secret}}}\'
};
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'M.local_edwiserreports = {
';
                $buffer .= $indent . '    secret: \'';
                $value = $this->resolveValue($context->find('secret'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\'
';
                $buffer .= $indent . '};
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
