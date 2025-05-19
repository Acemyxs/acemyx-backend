<?php

class __Mustache_b8c2b74376427d1cb3bb3aad8edb327d extends Mustache_Template
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
        $buffer .= $indent . '    <div class="report-content" id="learnercourseprogress" data-sesskey="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        <div id="userfilter" class="h-auto mt-2">
';
        $buffer .= $indent . '            <div class="row">
';
        $value = $context->find('learner');
        if (empty($value)) {
            
            $buffer .= $indent . '                    <div class="filter-selector col-12 col-lg-3 col-md-6 mb-3">
';
            $buffer .= $indent . '                        <label>';
            $value = $context->find('str');
            $buffer .= $this->section06961dee46e7496b9449c80a96b32f72($context, $indent, $value);
            $buffer .= '</label>
';
            if ($partial = $this->mustache->loadPartial('local_edwiserreports/filters/students_filter')) {
                $buffer .= $partial->renderInternal($context, $indent . '                        ');
            }
            $buffer .= $indent . '                    </div>
';
        }
        $buffer .= $indent . '
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
        $buffer .= $indent . '                <div class="filter-selector col-12 col-lg-3 col-md-6 mb-3">
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
        $buffer .= $this->section935207dbb135155d9033286c71d96189($context, $indent, $value);
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
        $buffer .= $this->section5a8f34cd3da18b66700847eebed94511($context, $indent, $value);
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
        $buffer .= $this->sectionF1ad50b86182247e377f2b687f4f39da($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->sectionE51f82121917c49ca03cd7dd76c1262f($context, $indent, $value);
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
        $buffer .= $this->section14de77461846ce753ed589eef8bab113($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section4479f3d9bdefd64a47b5c81fe7db276e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </th>
';
        $buffer .= $indent . '                    <th>
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section9871495eaa7da878137cdfac0fdc2ff0($context, $indent, $value);
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
        $value = $context->find('setactive');
        $buffer .= $this->section5522b29e4c6a36f26fdf9dbbee06cacd($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section10e924f6ba1b7998ed02e5c5652d273c($context, $indent, $value);

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

    private function section935207dbb135155d9033286c71d96189(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' course ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' course ';
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

    private function sectionE51f82121917c49ca03cd7dd76c1262f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' progress, core_search ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' progress, core_search ';
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

    private function section14de77461846ce753ed589eef8bab113(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalactivities, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totalactivities, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4479f3d9bdefd64a47b5c81fe7db276e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' completedactivities, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' completedactivities, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9871495eaa7da878137cdfac0fdc2ff0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attemptedactivities, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' attemptedactivities, local_edwiserreports ';
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

    private function section10e924f6ba1b7998ed02e5c5652d273c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
M.local_edwiserreports = {
    secret: \'{{{secret}}}\'
};

M.util.js_pending(\'local_edwiserreports/reports/learnercourseprogress\');
require([\'local_edwiserreports/reports/learnercourseprogress\'], function(amd) {
    amd.init();
    M.util.js_complete(\'local_edwiserreports/reports/learnercourseprogress\');
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
                $buffer .= $indent . 'M.util.js_pending(\'local_edwiserreports/reports/learnercourseprogress\');
';
                $buffer .= $indent . 'require([\'local_edwiserreports/reports/learnercourseprogress\'], function(amd) {
';
                $buffer .= $indent . '    amd.init();
';
                $buffer .= $indent . '    M.util.js_complete(\'local_edwiserreports/reports/learnercourseprogress\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
