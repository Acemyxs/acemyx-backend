<?php

class __Mustache_66b12a28ec8fdb4886e1b452e5b61f9c extends Mustache_Template
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
        $buffer .= $indent . '<div class="panel ed-pro-reports">
';
        $buffer .= $indent . '
';
        $value = $context->find('pro');
        $buffer .= $this->section87de58ed1d04de448dde2897cdab2351($context, $indent, $value);
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/report-page-header')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="report-content" id="studentengagement" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '            <div class="row">
';
        $value = $context->find('cohortfilters');
        $buffer .= $this->section88f4f3f440776061f72691cf7388e1b0($context, $indent, $value);
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC6844d68809f8f99aeb3595400d02ace($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/courses_filter')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $value = $context->find('groups');
        $buffer .= $this->section6cd0a560de609c75e006358d95fc3872($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/summary/summary-card')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionC93e9ebab241e3e6bd5310f5c89d07dd($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/search')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionB2990e620fb25d42baf62279a6296865($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <select class="inactive-select form-control singleselect">
';
        $buffer .= $indent . '                        <option value="0">';
        $value = $context->find('str');
        $buffer .= $this->section976285933abed83411267d6843658cc5($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                        <option value="1">';
        $value = $context->find('str');
        $buffer .= $this->sectionBd5118aded4cbeecb9e9a55d03d670d1($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                        <option value="2">';
        $value = $context->find('str');
        $buffer .= $this->section290aa35d500af82835a318d22c4474c9($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                        <option value="3">';
        $value = $context->find('str');
        $buffer .= $this->section5d3ec66217815f6a900f0c5699d35d3e($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                        <option value="4">';
        $value = $context->find('str');
        $buffer .= $this->sectionCfb74eccce6db82b0cb34297af56e14a($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="filter-selector col-12 table-length-input ml-auto mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section8a2c784fd569d549e00d0c1c816934f3($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/datatable/length')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportspro')) {
            $buffer .= $partial->renderInternal($context, $indent . '                ');
        }
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <table class="table">
';
        $buffer .= $indent . '            <thead>
';
        $buffer .= $indent . '                <tr>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section6aae00b0fc2bd93ef46ea5dff4aec31e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section15b73b4c5ca8028bc3fd836fe2656362($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section6c05e1ab22bb99a059e933817bbb7837($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section1ad76cc7067bc2f4631ea3d95af651f2($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section0bffa56c60c380cc8442878334c2f761($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section0530e14c38345211e41da52a98a5288e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionA639a0509edaa33270fabdfa52ec78ef($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionB9dae99531e53e570b192acb239e9e66($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionA1a7c214e75972f61a5b161261a83a52($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section178102c032d591490cbe15723c271a5f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section619c3dfba634dcf75dd615433b4fe625($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionD063bb661338d3b3305c6f1ff732ff2b($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section01c26e997cee8b781a86eb198bdc6205($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section9586abce5dd7098fcf7f2ca992f5c7a7($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section65c98d6a021d3ba26aea776c22bd114c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionC6367d5f153f8f98270f261129d09576($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                </tr>
';
        $buffer .= $indent . '            </thead>
';
        $buffer .= $indent . '        </table>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('setactive');
        $buffer .= $this->section5522b29e4c6a36f26fdf9dbbee06cacd($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section937e7727a80d98a38bfc53a5015976d2($context, $indent, $value);

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

    private function section10df26e8f7842d0834ddea68c0c65793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' upgradetopro, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' upgradetopro, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29380441546882881fb921097cdc6209(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{{upgradelink}}}" class="btn theme-primary-bg text-white ml-2 d-inline" target="_blank">{{#str}} upgradetopro, local_edwiserreports {{/str}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('upgradelink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn theme-primary-bg text-white ml-2 d-inline" target="_blank">';
                $value = $context->find('str');
                $buffer .= $this->section10df26e8f7842d0834ddea68c0c65793($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdb5c363976c7f0c78eed0655b26491f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' proreportupgrademsg, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' proreportupgrademsg, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87de58ed1d04de448dde2897cdab2351(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="upgrade-to-pro text-white">
            <div class="upgrade-notice text-center pt-5 mt-5">
                <h4 class="text-white d-inline">{{#str}} unlockthisfeature, local_edwiserreports {{/str}}</h4>
                {{#upgradelink}}
                    <a href="{{{upgradelink}}}" class="btn theme-primary-bg text-white ml-2 d-inline" target="_blank">{{#str}} upgradetopro, local_edwiserreports {{/str}}</a>
                {{/upgradelink}}
                <br>
                <div class=\'mt-4\'>
                    <div class="text-white d-inline text-center"> {{#str}} proreportupgrademsg, local_edwiserreports {{/str}} </div>
                </div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="upgrade-to-pro text-white">
';
                $buffer .= $indent . '            <div class="upgrade-notice text-center pt-5 mt-5">
';
                $buffer .= $indent . '                <h4 class="text-white d-inline">';
                $value = $context->find('str');
                $buffer .= $this->sectionCd4b16dc238bc46ae91dbd0f1332d3bd($context, $indent, $value);
                $buffer .= '</h4>
';
                $value = $context->find('upgradelink');
                $buffer .= $this->section29380441546882881fb921097cdc6209($context, $indent, $value);
                $buffer .= $indent . '                <br>
';
                $buffer .= $indent . '                <div class=\'mt-4\'>
';
                $buffer .= $indent . '                    <div class="text-white d-inline text-center"> ';
                $value = $context->find('str');
                $buffer .= $this->sectionEdb5c363976c7f0c78eed0655b26491f($context, $indent, $value);
                $buffer .= ' </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
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

    private function section88f4f3f440776061f72691cf7388e1b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
                        <label>{{#str}} cohort, local_edwiserreports {{/str}}</label>
                        {{> local_edwiserreports/filters/cohorts_filter }}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
                $buffer .= $indent . '                        <label>';
                $value = $context->find('str');
                $buffer .= $this->section7896e029ec4b5b2ebff98a9ecfe2332d($context, $indent, $value);
                $buffer .= '</label>
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/cohorts_filter')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
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

    private function section6cd0a560de609c75e006358d95fc3872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
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
                
                $buffer .= $indent . '                    <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
                $buffer .= $indent . '                        <label>';
                $value = $context->find('str');
                $buffer .= $this->sectionCa768ca37ed6a1a230e593909d466b3d($context, $indent, $value);
                $buffer .= '</label>
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/groups_filter')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
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

    private function sectionB2990e620fb25d42baf62279a6296865(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inactive, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' inactive, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section976285933abed83411267d6843658cc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' allusers, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' allusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd5118aded4cbeecb9e9a55d03d670d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' since1week, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' since1week, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section290aa35d500af82835a318d22c4474c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' since2weeks, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' since2weeks, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d3ec66217815f6a900f0c5699d35d3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' since1month, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' since1month, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCfb74eccce6db82b0cb34297af56e14a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' since1year, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' since1year, local_edwiserreports ';
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

    private function section6aae00b0fc2bd93ef46ea5dff4aec31e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' student, core_grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' student, core_grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15b73b4c5ca8028bc3fd836fe2656362(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' email, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' email, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c05e1ab22bb99a059e933817bbb7837(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' status, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' status, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ad76cc7067bc2f4631ea3d95af651f2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastaccesson, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastaccesson, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bffa56c60c380cc8442878334c2f761(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrolledcourses, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enrolledcourses, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0530e14c38345211e41da52a98a5288e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inprogresscourse, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' inprogresscourse, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA639a0509edaa33270fabdfa52ec78ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completecourse, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completecourse, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9dae99531e53e570b192acb239e9e66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completionprogress, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completionprogress, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1a7c214e75972f61a5b161261a83a52(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalgrade, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totalgrade, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section178102c032d591490cbe15723c271a5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timespentonlms, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' timespentonlms, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section619c3dfba634dcf75dd615433b4fe625(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timespentoncourse, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' timespentoncourse, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD063bb661338d3b3305c6f1ff732ff2b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activitiescompleted, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activitiescompleted, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section01c26e997cee8b781a86eb198bdc6205(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' visitsoncourse, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' visitsoncourse, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9586abce5dd7098fcf7f2ca992f5c7a7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completedassign, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completedassign, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65c98d6a021d3ba26aea776c22bd114c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completedquiz, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completedquiz, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC6367d5f153f8f98270f261129d09576(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completedscorm, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completedscorm, local_edwiserreports ';
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

    private function section937e7727a80d98a38bfc53a5015976d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.local_edwiserreports = {
    secret: \'{{{secret}}}\'
};

M.util.js_pending(\'local_edwiserreports/reports/studentengagement\');
require([\'local_edwiserreports/reports/studentengagement\'], function(amd) {
    amd.init();
    M.util.js_complete(\'local_edwiserreports/reports/studentengagement\');
});
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
                $buffer .= $indent . '
';
                $buffer .= $indent . 'M.util.js_pending(\'local_edwiserreports/reports/studentengagement\');
';
                $buffer .= $indent . 'require([\'local_edwiserreports/reports/studentengagement\'], function(amd) {
';
                $buffer .= $indent . '    amd.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'local_edwiserreports/reports/studentengagement\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
