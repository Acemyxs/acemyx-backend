<?php

class __Mustache_6016600c10619be56086970255c8ce37 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $this->resolveValue($context->find('notice'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('bfs');
        $buffer .= $this->section5b169892972b33c9d768481fc9dc832b($context, $indent, $value);
        $buffer .= $indent . '<div class="mx-4">
';
        if ($partial = $this->mustache->loadPartial('local_edwiserreports/navigation')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<div class="edwiserreports-header position-relative mb-5 mx-4">
';
        $buffer .= $indent . '    <div class="edwiserreport-title theme-1-color text-left">
';
        $buffer .= $indent . '        <h2 class="m-0">';
        $value = $context->find('str');
        $buffer .= $this->section24c39844773e91bb74dfbc3330da341c($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '        <label class="h5 selected-period theme-1-bg text-white">';
        $value = $context->find('str');
        $buffer .= $this->section1772da8ea9ca2c6bc8f5c94f9031071e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="ml-auto filter-wrapper text-right mt-2">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="filter-selector d-inline-block ml-1">
';
        $buffer .= $indent . '            <label>';
        $value = $context->find('str');
        $buffer .= $this->section4e8b20a9fe6d8f29751db4d6458c169e($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '            <button type="button" class="btn dropdown-toggle text-left edwiserreports-calendar" data-toggle="dropdown" aria-expanded="false">
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionC48b1ed39c6e06f864d9aaa18493d5c4($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </button>
';
        $buffer .= $indent . '            <div class="dropdown-menu" aria-labelledby="filter-dropdown" role="menu">
';
        $buffer .= $indent . '                <div class="dropdown-calendar"></div>
';
        $buffer .= $indent . '                <div class="dropdown-body">
';
        $buffer .= $indent . '                    <a class="dropdown-item active" role="menuitem" data-value="last7days" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->sectionC48b1ed39c6e06f864d9aaa18493d5c4($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    <a class="dropdown-item" role="menuitem" data-value="weekly" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->section1a820dc2f0b751bbacad031e7035500e($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    <a class="dropdown-item" role="menuitem" data-value="monthly" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->sectionD51af92dfda0bf8ff3577714a367ae9a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    <a class="dropdown-item" role="menuitem" data-value="yearly" href="javascript:void(0)">';
        $value = $context->find('str');
        $buffer .= $this->section2a6165708677f5d28dd0412b7ad9970a($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    <a class="dropdown-item custom" role="menuitem" href="javascript:void(0)">
';
        $buffer .= $indent . '                        <input class="border-0 p-0 bg-transparent flatpickr" placeholder="';
        $value = $context->find('str');
        $buffer .= $this->section99891200e02cb04315d9b8dfb8f49fcc($context, $indent, $value);
        $buffer .= '" 0="data-input" />
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('topinsights');
        $buffer .= $this->sectionBe5224a016abe7705bea30c0e6dcb041($context, $indent, $value);
        $buffer .= $indent . '<div id="wdm-edwiserreports" class="row mx-0" data-editing="';
        $value = $this->resolveValue($context->find('editing'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $value = $context->find('showwhatsnew');
        $buffer .= $this->sectionBa22d8af929eeea2717ba84ce4e15113($context, $indent, $value);
        $value = $context->find('canmanagecustomreports');
        $buffer .= $this->section5fa3ca8e856ff726456d3284ee7a0f9e($context, $indent, $value);
        $value = $context->find('blocks');
        $buffer .= $this->section2830d0d94e4b46c2d2475725618ea2a4($context, $indent, $value);
        $value = $context->find('canmanagecustomreports');
        $buffer .= $this->section5fa3ca8e856ff726456d3284ee7a0f9e($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionBaa9be1f2acb406296ab6bc892e6fe96($context, $indent, $value);
        $value = $context->find('setactive');
        $buffer .= $this->section52ae84c2ab9c05d2f043ee60ca785cb8($context, $indent, $value);

        return $buffer;
    }

    private function section5b169892972b33c9d768481fc9dc832b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> local_edwiserreports/black_friday_sale }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/black_friday_sale')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section24c39844773e91bb74dfbc3330da341c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' dashboard, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' dashboard, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1772da8ea9ca2c6bc8f5c94f9031071e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' loading, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' loading, local_edwiserreports ';
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

    private function sectionBe5224a016abe7705bea30c0e6dcb041(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> local_edwiserreports/insights/insights }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/insights/insights')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa22d8af929eeea2717ba84ce4e15113(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> local_edwiserreports/whatsnew }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/whatsnew')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
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

    private function section5fa3ca8e856ff726456d3284ee7a0f9e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="col-12 mb-5">
            <a href="{{customreportseditlink}}" class="btn theme-primary-bg text-white pull-right">
                <i class="icon fa fa-plus fa-fw " aria-hidden="true"></i>
                {{#str}} createcustomreports, local_edwiserreports {{/str}}
            </a>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="col-12 mb-5">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('customreportseditlink'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn theme-primary-bg text-white pull-right">
';
                $buffer .= $indent . '                <i class="icon fa fa-plus fa-fw " aria-hidden="true"></i>
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionF5f0221875981173e67a62ee8a47a443($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7651fd7f97f824db493c7664aad70595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' block-hidden ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' block-hidden ';
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

    private function section0b5359f836d861423be468d6eac51775(Mustache_Context $context, $indent, $value)
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
                
                $buffer .= $indent . '                                    <a href="';
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

    private function section424e088ba70b940c31b51f2aabfee151(Mustache_Context $context, $indent, $value)
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
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="upgrade-to-pro text-white">
';
                $buffer .= $indent . '                            <div class="upgrade-notice text-center pt-5 mt-5">
';
                $buffer .= $indent . '                                <h4 class="text-white d-inline">';
                $value = $context->find('str');
                $buffer .= $this->sectionCd4b16dc238bc46ae91dbd0f1332d3bd($context, $indent, $value);
                $buffer .= '</h4>
';
                $value = $context->find('upgradelink');
                $buffer .= $this->section0b5359f836d861423be468d6eac51775($context, $indent, $value);
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ce72087569ad181034e4eaff796d387(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' more, core_calendar ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' more, core_calendar ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section785cb0a23bfb328356452d0b5e20cc3a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a href="{{{.}}}" class="dropdown-item m-0">{{#str}} more, core_calendar {{/str}}</a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="dropdown-item m-0">';
                $value = $context->find('str');
                $buffer .= $this->section1ce72087569ad181034e4eaff796d387($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2afb59a96f187296ad7d00a2cc14e399(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{> local_edwiserreports/download_buttons }}
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/download_buttons')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82b26fa11e0a4ee0c6ed9975fc217290(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="dropdown blockoptions">
                                        <button role="button" type="button" class="btn" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v theme-primary-text"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            {{# morelink }}
                                                <a href="{{{.}}}" class="dropdown-item m-0">{{#str}} more, core_calendar {{/str}}</a>
                                            {{/ morelink }}
                                            <!-- item-->
                                            {{# downloadlinks }}
                                                {{> local_edwiserreports/download_buttons }}
                                            {{/ downloadlinks }}
                                        </div>
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="dropdown blockoptions">
';
                $buffer .= $indent . '                                        <button role="button" type="button" class="btn" data-toggle="dropdown">
';
                $buffer .= $indent . '                                            <i class="fa fa-ellipsis-v theme-primary-text"></i>
';
                $buffer .= $indent . '                                        </button>
';
                $buffer .= $indent . '                                        <div class="dropdown-menu dropdown-menu-right" style="">
';
                $value = $context->find('morelink');
                $buffer .= $this->section785cb0a23bfb328356452d0b5e20cc3a($context, $indent, $value);
                $buffer .= $indent . '                                            <!-- item-->
';
                $value = $context->find('downloadlinks');
                $buffer .= $this->section2afb59a96f187296ad7d00a2cc14e399($context, $indent, $value);
                $buffer .= $indent . '                                        </div>
';
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18eb21f382d041eb1aa46cbc2ca4b433(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pr-1 ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pr-1 ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3a889c52de9e85331b718ab1c55b8257(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="pro-lock {{#editing}} pr-1 {{/editing}}">
                                    {{{pro}}}
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="pro-lock ';
                $value = $context->find('editing');
                $buffer .= $this->section18eb21f382d041eb1aa46cbc2ca4b433($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('pro'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5aa6eaa7ae1f27321eb938ed8165b08e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{> local_edwiserreports/blocksettingdropdown }}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/blocksettingdropdown')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDd39dce0de50813e8aa6a13cfb5ad347(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="table-responsive">
                                <table class="table customreportdata w-full"></table>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="table-responsive">
';
                $buffer .= $indent . '                                <table class="table customreportdata w-full"></table>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cdf55110fcc0b946b6c3fc489a8f630(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tableinfo, local_edwiserreports';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tableinfo, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67c2dedebe1ffff33995648f8f6667fe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'infoempty, local_edwiserreports';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'infoempty, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e527203868ad3ff3a078b5fe341fbf7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nodata, local_edwiserreports';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nodata, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6ec352f9398b40af8f4c28ba0522840(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'zerorecords, local_edwiserreports';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'zerorecords, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6082c1f5941a12f77083512a9a2e6a62(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'previous';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'previous';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa8bb7b1bb267b8cc98d38fe4bf9f047(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'next';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'next';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd7c9f52cbaddd94520a2097600eeff9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                require([
                    \'jquery\',
                    \'core/ajax\',
                    \'local_edwiserreports/common\',
                    \'local_edwiserreports/variables\',
                    \'local_edwiserreports/customreportsblock\'
                ], function(
                    $,
                    ajax,
                    common,
                    V,
                    customreportsblock
                ) {
                    var tableId = \'#{{{id}}} table.customreportdata\';
                    var searchTable = \'#{{{id}}}  .table-search-input input\';

                    /**
                    * Selectors list.
                    */
                    let SELECTOR = {
                        TABLE: \'.edwiserreports-table\',
                        FILTER: \'.table-filter\',
                        PAGINATION: \'.table-pagination\',
                        PAGINATIONITEM: \'.paginate_button\'
                    };

                    $(document).ready(function() {
                        common.loader.show(tableId);
                        var getCustomReportsData = ajax.call([{
                            methodname: \'local_edwiserreports_get_customreports_data\',
                            args: {
                                params: JSON.stringify({{{params}}})
                            }
                        }]);

                        getCustomReportsData[0].done(function(response) {
                            if (response.success) {
                                var data = JSON.parse(response.data);
                                var table = $(tableId).DataTable({
                                    columns: data.columns,
                                    dom: \'<"edwiserreports-table"<"table-wrapper"t><"table-pagination"p>>\',
                                    data: data.reportsdata,
                                    bInfo: false,
                                    lengthChange: false,
                                    language: {
                                        info: "{{#str}}tableinfo, local_edwiserreports{{/str}}",
                                        infoEmpty: "{{#str}}infoempty, local_edwiserreports{{/str}}",
                                        emptyTable: "{{#str}}nodata, local_edwiserreports{{/str}}",
                                        zeroRecords: "{{#str}}zerorecords, local_edwiserreports{{/str}}",
                                        paginate: {
                                            previous: "{{#str}}previous{{/str}}",
                                            next: "{{#str}}next{{/str}}"
                                        }
                                    },
                                    drawCallback: function() {
                                        common.stylePaginationButton(this);
                                    }
                                });

                                // Search in table.
                                $(\'body\').on(\'input\', searchTable, function() {
                                    table.search(this.value).draw();
                                });
                            }
                            common.loader.hide(tableId);
                        });
                    });
                });
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                require([
';
                $buffer .= $indent . '                    \'jquery\',
';
                $buffer .= $indent . '                    \'core/ajax\',
';
                $buffer .= $indent . '                    \'local_edwiserreports/common\',
';
                $buffer .= $indent . '                    \'local_edwiserreports/variables\',
';
                $buffer .= $indent . '                    \'local_edwiserreports/customreportsblock\'
';
                $buffer .= $indent . '                ], function(
';
                $buffer .= $indent . '                    $,
';
                $buffer .= $indent . '                    ajax,
';
                $buffer .= $indent . '                    common,
';
                $buffer .= $indent . '                    V,
';
                $buffer .= $indent . '                    customreportsblock
';
                $buffer .= $indent . '                ) {
';
                $buffer .= $indent . '                    var tableId = \'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' table.customreportdata\';
';
                $buffer .= $indent . '                    var searchTable = \'#';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '  .table-search-input input\';
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    /**
';
                $buffer .= $indent . '                    * Selectors list.
';
                $buffer .= $indent . '                    */
';
                $buffer .= $indent . '                    let SELECTOR = {
';
                $buffer .= $indent . '                        TABLE: \'.edwiserreports-table\',
';
                $buffer .= $indent . '                        FILTER: \'.table-filter\',
';
                $buffer .= $indent . '                        PAGINATION: \'.table-pagination\',
';
                $buffer .= $indent . '                        PAGINATIONITEM: \'.paginate_button\'
';
                $buffer .= $indent . '                    };
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    $(document).ready(function() {
';
                $buffer .= $indent . '                        common.loader.show(tableId);
';
                $buffer .= $indent . '                        var getCustomReportsData = ajax.call([{
';
                $buffer .= $indent . '                            methodname: \'local_edwiserreports_get_customreports_data\',
';
                $buffer .= $indent . '                            args: {
';
                $buffer .= $indent . '                                params: JSON.stringify(';
                $value = $this->resolveValue($context->find('params'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ')
';
                $buffer .= $indent . '                            }
';
                $buffer .= $indent . '                        }]);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        getCustomReportsData[0].done(function(response) {
';
                $buffer .= $indent . '                            if (response.success) {
';
                $buffer .= $indent . '                                var data = JSON.parse(response.data);
';
                $buffer .= $indent . '                                var table = $(tableId).DataTable({
';
                $buffer .= $indent . '                                    columns: data.columns,
';
                $buffer .= $indent . '                                    dom: \'<"edwiserreports-table"<"table-wrapper"t><"table-pagination"p>>\',
';
                $buffer .= $indent . '                                    data: data.reportsdata,
';
                $buffer .= $indent . '                                    bInfo: false,
';
                $buffer .= $indent . '                                    lengthChange: false,
';
                $buffer .= $indent . '                                    language: {
';
                $buffer .= $indent . '                                        info: "';
                $value = $context->find('str');
                $buffer .= $this->section6cdf55110fcc0b946b6c3fc489a8f630($context, $indent, $value);
                $buffer .= '",
';
                $buffer .= $indent . '                                        infoEmpty: "';
                $value = $context->find('str');
                $buffer .= $this->section67c2dedebe1ffff33995648f8f6667fe($context, $indent, $value);
                $buffer .= '",
';
                $buffer .= $indent . '                                        emptyTable: "';
                $value = $context->find('str');
                $buffer .= $this->section9e527203868ad3ff3a078b5fe341fbf7($context, $indent, $value);
                $buffer .= '",
';
                $buffer .= $indent . '                                        zeroRecords: "';
                $value = $context->find('str');
                $buffer .= $this->sectionB6ec352f9398b40af8f4c28ba0522840($context, $indent, $value);
                $buffer .= '",
';
                $buffer .= $indent . '                                        paginate: {
';
                $buffer .= $indent . '                                            previous: "';
                $value = $context->find('str');
                $buffer .= $this->section6082c1f5941a12f77083512a9a2e6a62($context, $indent, $value);
                $buffer .= '",
';
                $buffer .= $indent . '                                            next: "';
                $value = $context->find('str');
                $buffer .= $this->sectionBa8bb7b1bb267b8cc98d38fe4bf9f047($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        }
';
                $buffer .= $indent . '                                    },
';
                $buffer .= $indent . '                                    drawCallback: function() {
';
                $buffer .= $indent . '                                        common.stylePaginationButton(this);
';
                $buffer .= $indent . '                                    }
';
                $buffer .= $indent . '                                });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                // Search in table.
';
                $buffer .= $indent . '                                $(\'body\').on(\'input\', searchTable, function() {
';
                $buffer .= $indent . '                                    table.search(this.value).draw();
';
                $buffer .= $indent . '                                });
';
                $buffer .= $indent . '                            }
';
                $buffer .= $indent . '                            common.loader.hide(tableId);
';
                $buffer .= $indent . '                        });
';
                $buffer .= $indent . '                    });
';
                $buffer .= $indent . '                });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section655c1e404c48f1e7da2bafc777068d85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#js}}
                require([
                    \'jquery\',
                    \'core/ajax\',
                    \'local_edwiserreports/common\',
                    \'local_edwiserreports/variables\',
                    \'local_edwiserreports/customreportsblock\'
                ], function(
                    $,
                    ajax,
                    common,
                    V,
                    customreportsblock
                ) {
                    var tableId = \'#{{{id}}} table.customreportdata\';
                    var searchTable = \'#{{{id}}}  .table-search-input input\';

                    /**
                    * Selectors list.
                    */
                    let SELECTOR = {
                        TABLE: \'.edwiserreports-table\',
                        FILTER: \'.table-filter\',
                        PAGINATION: \'.table-pagination\',
                        PAGINATIONITEM: \'.paginate_button\'
                    };

                    $(document).ready(function() {
                        common.loader.show(tableId);
                        var getCustomReportsData = ajax.call([{
                            methodname: \'local_edwiserreports_get_customreports_data\',
                            args: {
                                params: JSON.stringify({{{params}}})
                            }
                        }]);

                        getCustomReportsData[0].done(function(response) {
                            if (response.success) {
                                var data = JSON.parse(response.data);
                                var table = $(tableId).DataTable({
                                    columns: data.columns,
                                    dom: \'<"edwiserreports-table"<"table-wrapper"t><"table-pagination"p>>\',
                                    data: data.reportsdata,
                                    bInfo: false,
                                    lengthChange: false,
                                    language: {
                                        info: "{{#str}}tableinfo, local_edwiserreports{{/str}}",
                                        infoEmpty: "{{#str}}infoempty, local_edwiserreports{{/str}}",
                                        emptyTable: "{{#str}}nodata, local_edwiserreports{{/str}}",
                                        zeroRecords: "{{#str}}zerorecords, local_edwiserreports{{/str}}",
                                        paginate: {
                                            previous: "{{#str}}previous{{/str}}",
                                            next: "{{#str}}next{{/str}}"
                                        }
                                    },
                                    drawCallback: function() {
                                        common.stylePaginationButton(this);
                                    }
                                });

                                // Search in table.
                                $(\'body\').on(\'input\', searchTable, function() {
                                    table.search(this.value).draw();
                                });
                            }
                            common.loader.hide(tableId);
                        });
                    });
                });
            {{/js}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->sectionAd7c9f52cbaddd94520a2097600eeff9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2830d0d94e4b46c2d2475725618ea2a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="{{{extraclasses}}} mb-5 edwiserReport-block {{# hiddenblock }} block-hidden {{/ hiddenblock}}" data-block="{{id}}">
            <div id="{{id}}" data-sesskey="{{sesskey}}" data-blockname="{{name}}">
                <div class="panel m-0 pt-0 px-0 pb-3">
                    {{#pro}}
                        <div class="upgrade-to-pro text-white">
                            <div class="upgrade-notice text-center pt-5 mt-5">
                                <h4 class="text-white d-inline">{{#str}} unlockthisfeature, local_edwiserreports {{/str}}</h4>
                                {{#upgradelink}}
                                    <a href="{{{upgradelink}}}" class="btn theme-primary-bg text-white ml-2 d-inline" target="_blank">{{#str}} upgradetopro, local_edwiserreports {{/str}}</a>
                                {{/upgradelink}}
                            </div>
                        </div>
                    {{/pro}}
                    <div class="panel-header p-3 d-flex">
                        <div class="panel-background"></div>
                        <div class="panel-title theme-1-text p-0">
                            <strong class="mb-1">
                                {{{name}}}
                                <a href="javascript:void(0)" data-title="{{info}}" class="small panel-help" data-toggle="tooltip" data-trigger="hover" data-placement="top">
                                    {{{infoicon}}}
                                </a>
                            </strong>
                        </div>
                        <div class="row p-0 ml-auto mr-0">
                            {{^pro}}
                                {{# hasmenu}}
                                    <div class="dropdown blockoptions">
                                        <button role="button" type="button" class="btn" data-toggle="dropdown">
                                            <i class="fa fa-ellipsis-v theme-primary-text"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" style="">
                                            {{# morelink }}
                                                <a href="{{{.}}}" class="dropdown-item m-0">{{#str}} more, core_calendar {{/str}}</a>
                                            {{/ morelink }}
                                            <!-- item-->
                                            {{# downloadlinks }}
                                                {{> local_edwiserreports/download_buttons }}
                                            {{/ downloadlinks }}
                                        </div>
                                    </div>
                                {{/ hasmenu}}
                            {{/pro}}
                            {{#pro}}
                                <div class="pro-lock {{#editing}} pr-1 {{/editing}}">
                                    {{{pro}}}
                                </div>
                            {{/pro}}
                            {{# editopt }}
                                {{> local_edwiserreports/blocksettingdropdown }}
                            {{/ editopt }}
                        </div>
                    </div>
                    <div class="panel-body px-3 py-0">
                        <div class="block-filters position-relative pb-1">{{{ filters }}}</div>
                        {{{ blockview }}}
                        {{#iscustomblock}}
                            <div class="table-responsive">
                                <table class="table customreportdata w-full"></table>
                            </div>
                        {{/iscustomblock}}
                    </div>
                </div>
            </div>
        </div>
        {{#iscustomblock}}
            {{#js}}
                require([
                    \'jquery\',
                    \'core/ajax\',
                    \'local_edwiserreports/common\',
                    \'local_edwiserreports/variables\',
                    \'local_edwiserreports/customreportsblock\'
                ], function(
                    $,
                    ajax,
                    common,
                    V,
                    customreportsblock
                ) {
                    var tableId = \'#{{{id}}} table.customreportdata\';
                    var searchTable = \'#{{{id}}}  .table-search-input input\';

                    /**
                    * Selectors list.
                    */
                    let SELECTOR = {
                        TABLE: \'.edwiserreports-table\',
                        FILTER: \'.table-filter\',
                        PAGINATION: \'.table-pagination\',
                        PAGINATIONITEM: \'.paginate_button\'
                    };

                    $(document).ready(function() {
                        common.loader.show(tableId);
                        var getCustomReportsData = ajax.call([{
                            methodname: \'local_edwiserreports_get_customreports_data\',
                            args: {
                                params: JSON.stringify({{{params}}})
                            }
                        }]);

                        getCustomReportsData[0].done(function(response) {
                            if (response.success) {
                                var data = JSON.parse(response.data);
                                var table = $(tableId).DataTable({
                                    columns: data.columns,
                                    dom: \'<"edwiserreports-table"<"table-wrapper"t><"table-pagination"p>>\',
                                    data: data.reportsdata,
                                    bInfo: false,
                                    lengthChange: false,
                                    language: {
                                        info: "{{#str}}tableinfo, local_edwiserreports{{/str}}",
                                        infoEmpty: "{{#str}}infoempty, local_edwiserreports{{/str}}",
                                        emptyTable: "{{#str}}nodata, local_edwiserreports{{/str}}",
                                        zeroRecords: "{{#str}}zerorecords, local_edwiserreports{{/str}}",
                                        paginate: {
                                            previous: "{{#str}}previous{{/str}}",
                                            next: "{{#str}}next{{/str}}"
                                        }
                                    },
                                    drawCallback: function() {
                                        common.stylePaginationButton(this);
                                    }
                                });

                                // Search in table.
                                $(\'body\').on(\'input\', searchTable, function() {
                                    table.search(this.value).draw();
                                });
                            }
                            common.loader.hide(tableId);
                        });
                    });
                });
            {{/js}}
        {{/iscustomblock}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="';
                $value = $this->resolveValue($context->find('extraclasses'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' mb-5 edwiserReport-block ';
                $value = $context->find('hiddenblock');
                $buffer .= $this->section7651fd7f97f824db493c7664aad70595($context, $indent, $value);
                $buffer .= '" data-block="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <div id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-sesskey="';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-blockname="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                <div class="panel m-0 pt-0 px-0 pb-3">
';
                $value = $context->find('pro');
                $buffer .= $this->section424e088ba70b940c31b51f2aabfee151($context, $indent, $value);
                $buffer .= $indent . '                    <div class="panel-header p-3 d-flex">
';
                $buffer .= $indent . '                        <div class="panel-background"></div>
';
                $buffer .= $indent . '                        <div class="panel-title theme-1-text p-0">
';
                $buffer .= $indent . '                            <strong class="mb-1">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                <a href="javascript:void(0)" data-title="';
                $value = $this->resolveValue($context->find('info'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="small panel-help" data-toggle="tooltip" data-trigger="hover" data-placement="top">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('infoicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </a>
';
                $buffer .= $indent . '                            </strong>
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="row p-0 ml-auto mr-0">
';
                $value = $context->find('pro');
                if (empty($value)) {
                    
                    $value = $context->find('hasmenu');
                    $buffer .= $this->section82b26fa11e0a4ee0c6ed9975fc217290($context, $indent, $value);
                }
                $value = $context->find('pro');
                $buffer .= $this->section3a889c52de9e85331b718ab1c55b8257($context, $indent, $value);
                $value = $context->find('editopt');
                $buffer .= $this->section5aa6eaa7ae1f27321eb938ed8165b08e($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="panel-body px-3 py-0">
';
                $buffer .= $indent . '                        <div class="block-filters position-relative pb-1">';
                $value = $this->resolveValue($context->find('filters'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('blockview'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $value = $context->find('iscustomblock');
                $buffer .= $this->sectionDd39dce0de50813e8aa6a13cfb5ad347($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $value = $context->find('iscustomblock');
                $buffer .= $this->section655c1e404c48f1e7da2bafc777068d85($context, $indent, $value);
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
