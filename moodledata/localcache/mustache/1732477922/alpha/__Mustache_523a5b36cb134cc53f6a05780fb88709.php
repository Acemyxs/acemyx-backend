<?php

class __Mustache_523a5b36cb134cc53f6a05780fb88709 extends Mustache_Template
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
        $buffer .= $indent . '<div class="panel ed-pro-reports" >
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
        $buffer .= $indent . '    <div class="report-content" id="learnercourseactivities" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '            <div class="row">
';
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section06961dee46e7496b9449c80a96b32f72($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <select class="student-select form-control singleselect">
';
        $buffer .= $indent . '                        <option value="3">Student 1</option>
';
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section4510ae8bfdf7e576cbfb6fa3f3c7c70b($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <select class="course-select form-control singleselect">
';
        $buffer .= $indent . '                        <optgroup label="Biology">
';
        $buffer .= $indent . '                        <option value="1" selected>High School Biology</option>
';
        $buffer .= $indent . '                        </optgroup>
';
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3 ';
        $value = $context->find('sections');
        if (empty($value)) {
            
            $buffer .= 'd-none';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section58f80a32b9d6064ebb6879fdc2e8d451($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/sections_filter')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
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
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3 ';
        $value = $context->find('modules');
        if (empty($value)) {
            
            $buffer .= 'd-none';
        }
        $buffer .= '">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section0ebd96baa03f8c4c501b38953dee335f($context, $indent, $value);
        $buffer .= '</label>
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/modules_filter')) {
            $buffer .= $partial->renderInternal($context, $indent . '                    ');
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-4 mb-3">
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionB67902ed23b9004cdc02ec6821ee6904($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <select class="completion-select form-control singleselect">
';
        $buffer .= $indent . '                            <option value="all">';
        $value = $context->find('str');
        $buffer .= $this->sectionB67902ed23b9004cdc02ec6821ee6904($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                            <option value="completed_y">';
        $value = $context->find('str');
        $buffer .= $this->sectionBf0756cccfa822bd5e7444a0635bd5c2($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                            <option value="completed_n">';
        $value = $context->find('str');
        $buffer .= $this->sectionD89c121e78b2220c3ec75b4b62a14ba0($context, $indent, $value);
        $buffer .= '</option>
';
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
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
        $value = $context->find('export');
        $buffer .= $this->sectionB159b4ead3f83fd9c5751b147c3afd0c($context, $indent, $value);
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
        $buffer .= $this->section0ebd96baa03f8c4c501b38953dee335f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionD98458d8f5357b43d084e448da65cb0d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section99380e31c66dc018fdbb40851d8c070c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section2e9e3fb1a0a1218dc75b87d59d6ba1d0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section7a0c303a4d15a6a30c594ac61bdfb4d0($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section1f1bfb30225a613a5c09d3841dc6425e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section54c2be3cf2fbea901728b277f850713c($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section5301bee913e55d3fb2cd3c473d63625f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section57c7e3e587f6a6642afcca199046c638($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section4e78ab433eeb0a509d5643f44debbb5f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionF1ad50b86182247e377f2b687f4f39da($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section02c010dbfe90af446f66d0a7d1fa206d($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section8a8f14ca405a77fe24f55c8ac3d15481($context, $indent, $value);
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
        $buffer .= $indent . '
';
        $value = $context->find('setactive');
        $buffer .= $this->section5522b29e4c6a36f26fdf9dbbee06cacd($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section70a60062ab546dad8f46fe04bf301056($context, $indent, $value);

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

    private function section06961dee46e7496b9449c80a96b32f72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' learner, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' learner, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4510ae8bfdf7e576cbfb6fa3f3c7c70b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' courseandcategories, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' courseandcategories, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section58f80a32b9d6064ebb6879fdc2e8d451(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' section, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' section, local_edwiserreports ';
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

    private function section0ebd96baa03f8c4c501b38953dee335f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activity, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activity, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB67902ed23b9004cdc02ec6821ee6904(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completionstatus, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completionstatus, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf0756cccfa822bd5e7444a0635bd5c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completed-y, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completed-y, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD89c121e78b2220c3ec75b4b62a14ba0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completed-n, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completed-n, local_edwiserreports ';
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

    private function sectionB159b4ead3f83fd9c5751b147c3afd0c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> local_edwiserreports/exportspro }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/exportspro')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD98458d8f5357b43d084e448da65cb0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' type, core_search ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' type, core_search ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99380e31c66dc018fdbb40851d8c070c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' status ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' status ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2e9e3fb1a0a1218dc75b87d59d6ba1d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completedon, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completedon, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a0c303a4d15a6a30c594ac61bdfb4d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' grade, core_grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' grade, core_grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f1bfb30225a613a5c09d3841dc6425e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradedon, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradedon, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section54c2be3cf2fbea901728b277f850713c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attempts, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' attempts, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5301bee913e55d3fb2cd3c473d63625f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aggregatemax, core_grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aggregatemax, core_grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57c7e3e587f6a6642afcca199046c638(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' aggregatemin, core_grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' aggregatemin, core_grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e78ab433eeb0a509d5643f44debbb5f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' firstaccess, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' firstaccess, local_edwiserreports ';
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

    private function section02c010dbfe90af446f66d0a7d1fa206d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' visits, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' visits, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a8f14ca405a77fe24f55c8ac3d15481(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' timespent, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' timespent, local_edwiserreports ';
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

    private function section70a60062ab546dad8f46fe04bf301056(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.local_edwiserreports = {
    secret: \'{{{secret}}}\'
};

M.util.js_pending(\'local_edwiserreports/reports/learnercourseactivities\');
require([\'local_edwiserreports/reports/learnercourseactivities\'], function(amd) {
    amd.init();
    M.util.js_complete(\'local_edwiserreports/reports/learnercourseactivities\');
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
                $buffer .= $indent . 'M.util.js_pending(\'local_edwiserreports/reports/learnercourseactivities\');
';
                $buffer .= $indent . 'require([\'local_edwiserreports/reports/learnercourseactivities\'], function(amd) {
';
                $buffer .= $indent . '    amd.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'local_edwiserreports/reports/learnercourseactivities\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
