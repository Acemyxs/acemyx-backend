<?php

class __Mustache_f84b35d01eaff0082def3a02b32f36cd extends Mustache_Template
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
        $buffer .= $indent . '<div id="wdm-activeusers-individual" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '        <div class="row">
';
        $buffer .= $indent . '            <div class="filter-selector col-12 col-md-3 mb-1">
';
        $buffer .= $indent . '                <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC93e9ebab241e3e6bd5310f5c89d07dd($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $value = $context->find('cohortfilters');
        $buffer .= $this->section7e691c1bc715706d3653cb2d1763a9bd($context, $indent, $value);
        $buffer .= $indent . '            <div class="filter-selector col-12 col-md-3 mb-1">
';
        $buffer .= $indent . '                <label>';
        $value = $context->find('str');
        $buffer .= $this->section4e8b20a9fe6d8f29751db4d6458c169e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <button type="button" class="btn dropdown-toggle edwiserreports-calendar" data-toggle="dropdown" id="filter-dropdown" aria-expanded="false">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionC48b1ed39c6e06f864d9aaa18493d5c4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </button>
';
        $buffer .= $indent . '                <div class="dropdown-menu dropdown-scrollable" aria-labelledby="filter-dropdown" role="menu">
';
        $buffer .= $indent . '                    <div class="dropdown-calendar"></div>
';
        $buffer .= $indent . '                    <div class="dropdown-body">
';
        $buffer .= $indent . '                        <a class="dropdown-item active" role="menuitem" data-value="last7days" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->sectionC48b1ed39c6e06f864d9aaa18493d5c4($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" data-value="weekly" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->section1a820dc2f0b751bbacad031e7035500e($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" data-value="monthly" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->sectionD51af92dfda0bf8ff3577714a367ae9a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                        <a class="dropdown-item" role="menuitem" data-value="yearly" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->section2a6165708677f5d28dd0412b7ad9970a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                        <a class="dropdown-item custom" role="menuitem" href="javascript:void(0)">
';
        $buffer .= $indent . '                            <input class="border-0 p-0 bg-transparent flatpickr" placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section99891200e02cb04315d9b8dfb8f49fcc($context, $indent, $value);
        $buffer .= '" 0="data-input" />
';
        $buffer .= $indent . '                        </a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="filter-selector col-12 table-length-input ml-auto mb-3">
';
        $buffer .= $indent . '                <label>';
        $value = $context->find('str');
        $buffer .= $this->section8a2c784fd569d549e00d0c1c816934f3($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/length')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="table-responsive">
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/activeuserstable')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $value = $context->find('export');
        $buffer .= $this->sectionEd7b45b2a830fae50424a158af1f3481($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('setactive');
        $buffer .= $this->section52ae84c2ab9c05d2f043ee60ca785cb8($context, $indent, $value);

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

    private function sectionA50277f4ed3935e4b7761dd0425156fc(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                            <option value="';
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

    private function section7e691c1bc715706d3653cb2d1763a9bd(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                <div class="filter-selector col-12 col-md-2 mb-1">
';
                $buffer .= $indent . '                    <label>';
                $value = $context->find('str');
                $buffer .= $this->section7896e029ec4b5b2ebff98a9ecfe2332d($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    <select class="cohort-select form-control singleselect" name="cohort-select">
';
                $value = $context->find('values');
                $buffer .= $this->sectionA50277f4ed3935e4b7761dd0425156fc($context, $indent, $value);
                $buffer .= $indent . '                    </select>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e8b20a9fe6d8f29751db4d6458c169e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' date, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' date, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC48b1ed39c6e06f864d9aaa18493d5c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' last7days, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' last7days, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a820dc2f0b751bbacad031e7035500e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastweek, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastweek, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD51af92dfda0bf8ff3577714a367ae9a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastmonth, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastmonth, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a6165708677f5d28dd0412b7ad9970a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastyear, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastyear, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99891200e02cb04315d9b8dfb8f49fcc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' customdate, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' customdate, local_edwiserreports ';
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

    private function sectionEd7b45b2a830fae50424a158af1f3481(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '        <div class="pull-right px-5">
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportreports')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
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

}
