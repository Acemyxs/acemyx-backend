<?php

class __Mustache_59f5ae46eb6ec7c4ec8b87044bada8cd extends Mustache_Template
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
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="wdm-completion-individual" class="table-responsive" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '        <div class="row mr-2">
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
        $buffer .= $indent . '            <div class="filter-selector col-12 col-lg-3 col-md-4 mb-1">
';
        $buffer .= $indent . '                <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC6844d68809f8f99aeb3595400d02ace($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/courses_filter')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
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
        $buffer .= $indent . '    <table class="table w-100">
';
        $buffer .= $indent . '        <thead>
';
        $buffer .= $indent . '            <tr>
';
        $buffer .= $indent . '                <th>
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section47b67cfeeed66155b85b2b709424317e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section5a8f34cd3da18b66700847eebed94511($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionEa74e7f58bf15431340be15c137bfa0d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionDa40f904b1f8b4e959712b0b617ac19d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionB62018485b3b7ea9ee92806b46549b88($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section1c2e1ae4af58990cc70c620b4321e0ff($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section98073be8795f340a0dd5fadd31b2d1b8($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '                <th class="text-center">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionF1ad50b86182247e377f2b687f4f39da($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </th>
';
        $buffer .= $indent . '            </tr>
';
        $buffer .= $indent . '        </thead>
';
        $buffer .= $indent . '        <tbody></tbody>
';
        $buffer .= $indent . '    </table>
';
        $value = $context->find('export');
        $buffer .= $this->section3b7874a8e2d1cbd02eb8f7d4f6e59e89($context, $indent, $value);
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

    private function sectionC6844d68809f8f99aeb3595400d02ace(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' course, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' course, local_edwiserreports ';
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

    private function section47b67cfeeed66155b85b2b709424317e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' fullname, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' fullname, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a8f34cd3da18b66700847eebed94511(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrolledon, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enrolledon, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEa74e7f58bf15431340be15c137bfa0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrolltype, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enrolltype, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa40f904b1f8b4e959712b0b617ac19d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofvisits, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noofvisits, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB62018485b3b7ea9ee92806b46549b88(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' coursecompletion, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' coursecompletion, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1c2e1ae4af58990cc70c620b4321e0ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completiontime, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completiontime, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98073be8795f340a0dd5fadd31b2d1b8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' grade, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' grade, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1ad50b86182247e377f2b687f4f39da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccess, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastaccess, local_edwiserreports ';
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

}
