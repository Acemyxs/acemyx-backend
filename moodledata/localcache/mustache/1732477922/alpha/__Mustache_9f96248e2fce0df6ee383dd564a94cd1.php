<?php

class __Mustache_9f96248e2fce0df6ee383dd564a94cd1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="report-header row m-0">
';
        $buffer .= $indent . '    <div class="page-title col-12 col-lg-6 col-md-6 pl-0 text-left">
';
        $buffer .= $indent . '        <h2 class="theme-1-color">';
        $value = $this->resolveValue($context->find('pageheader'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        $value = $context->find('pro');
        $buffer .= $this->section158c6d22bbd72bd5f85bfd760d91b51b($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('pro');
        $buffer .= $this->section3355508efc97681bf2b9bdabfe9818de($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionA4bb4110ffc1803a2c5e7f49a463f958(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showingdatafor, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showingdatafor, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB0b1dc313a24c6da91cd5ae5616d290e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' alltime, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' alltime, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC50142c7347eb918bcc31b1b8cef71f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' proreportdescription, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' proreportdescription, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section158c6d22bbd72bd5f85bfd760d91b51b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        	<label class="selected-period">
                {{#str}} showingdatafor, local_edwiserreports {{/str}}
                <span class="theme-1-bg text-white d-inline-block">
                	{{# str }} alltime, local_edwiserreports {{/ str }}
                </span>
            </label>
			<div>
				<label>{{#str}} proreportdescription, local_edwiserreports {{/str}}</label>
			</div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        	<label class="selected-period">
';
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->sectionA4bb4110ffc1803a2c5e7f49a463f958($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <span class="theme-1-bg text-white d-inline-block">
';
                $buffer .= $indent . '                	';
                $value = $context->find('str');
                $buffer .= $this->sectionB0b1dc313a24c6da91cd5ae5616d290e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </span>
';
                $buffer .= $indent . '            </label>
';
                $buffer .= $indent . '			<div>
';
                $buffer .= $indent . '				<label>';
                $value = $context->find('str');
                $buffer .= $this->sectionC50142c7347eb918bcc31b1b8cef71f7($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '			</div>
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

    private function sectionB463f2e6c009d03dcede5b3c953aca87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' enrollments, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' enrollments, local_edwiserreports ';
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

    private function section3355508efc97681bf2b9bdabfe9818de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
	    <div id="userfilter" class="h-auto mt-2 ml-auto">
	        <div class="row">
	            {{{calendar}}}
	            <div class="filter-selector d-table col-12 col-lg-3 col-md-4">
	                <label>{{#str}} date, local_edwiserreports {{/str}}: {{#str}} enrollments, local_edwiserreports {{/str}}</label>
	                <button type="button" class="btn dropdown-toggle edwiserreports-calendar" data-toggle="dropdown" id="filter-dropdown" aria-expanded="false">
	                    {{# str }} alltime, local_edwiserreports {{/ str }}
	                </button>
	                <div class="dropdown-menu dropdown-scrollable" aria-labelledby="filter-dropdown" role="menu">
	                    <div class="dropdown-calendar"></div>
	                    <div class="dropdown-body">
	                        <a class="dropdown-item active" role="menuitem" data-value="all" href="javascript:void(0)">
	                            {{#str}} alltime, local_edwiserreports {{/str}}
	                        </a>
	                        <a class="dropdown-item" role="menuitem" data-value="last7days" href="javascript:void(0)">
	                            {{#str}} enrolled, local_edwiserreports {{/str}} {{#str}} last7days, local_edwiserreports {{/str}}
	                        </a>
	                        <a class="dropdown-item" role="menuitem" data-value="weekly" href="javascript:void(0)">
	                            {{#str}} enrolled, local_edwiserreports {{/str}} {{#str}} lastweek, local_edwiserreports {{/str}}
	                        </a>
	                        <a class="dropdown-item" role="menuitem" data-value="monthly" href="javascript:void(0)">
	                            {{#str}} enrolled, local_edwiserreports {{/str}} {{#str}} lastmonth, local_edwiserreports {{/str}}
	                        </a>
	                        <a class="dropdown-item" role="menuitem" data-value="yearly" href="javascript:void(0)">
	                            {{#str}} enrolled, local_edwiserreports {{/str}} {{#str}} lastyear, local_edwiserreports {{/str}}
	                        </a>
	                        <a class="dropdown-item custom" role="menuitem" href="javascript:void(0)">
	                            <input class="border-0 p-0 bg-transparent flatpickr" placeholder="{{#str}} customdate, local_edwiserreports {{/str}}" 0="data-input" />
	                        </a>
	                    </div>
	                </div>
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
                
                $buffer .= $indent . '	    <div id="userfilter" class="h-auto mt-2 ml-auto">
';
                $buffer .= $indent . '	        <div class="row">
';
                $buffer .= $indent . '	            ';
                $value = $this->resolveValue($context->find('calendar'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '	            <div class="filter-selector d-table col-12 col-lg-3 col-md-4">
';
                $buffer .= $indent . '	                <label>';
                $value = $context->find('str');
                $buffer .= $this->section4e8b20a9fe6d8f29751db4d6458c169e($context, $indent, $value);
                $buffer .= ': ';
                $value = $context->find('str');
                $buffer .= $this->sectionB463f2e6c009d03dcede5b3c953aca87($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '	                <button type="button" class="btn dropdown-toggle edwiserreports-calendar" data-toggle="dropdown" id="filter-dropdown" aria-expanded="false">
';
                $buffer .= $indent . '	                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionB0b1dc313a24c6da91cd5ae5616d290e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	                </button>
';
                $buffer .= $indent . '	                <div class="dropdown-menu dropdown-scrollable" aria-labelledby="filter-dropdown" role="menu">
';
                $buffer .= $indent . '	                    <div class="dropdown-calendar"></div>
';
                $buffer .= $indent . '	                    <div class="dropdown-body">
';
                $buffer .= $indent . '	                        <a class="dropdown-item active" role="menuitem" data-value="all" href="javascript:void(0)">
';
                $buffer .= $indent . '	                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionB0b1dc313a24c6da91cd5ae5616d290e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	                        </a>
';
                $buffer .= $indent . '	                        <a class="dropdown-item" role="menuitem" data-value="last7days" href="javascript:void(0)">
';
                $buffer .= $indent . '	                            ';
                $value = $context->find('str');
                $buffer .= $this->section25cec4ad62c9b46a80f2159832255fc2($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionC48b1ed39c6e06f864d9aaa18493d5c4($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	                        </a>
';
                $buffer .= $indent . '	                        <a class="dropdown-item" role="menuitem" data-value="weekly" href="javascript:void(0)">
';
                $buffer .= $indent . '	                            ';
                $value = $context->find('str');
                $buffer .= $this->section25cec4ad62c9b46a80f2159832255fc2($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section1a820dc2f0b751bbacad031e7035500e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	                        </a>
';
                $buffer .= $indent . '	                        <a class="dropdown-item" role="menuitem" data-value="monthly" href="javascript:void(0)">
';
                $buffer .= $indent . '	                            ';
                $value = $context->find('str');
                $buffer .= $this->section25cec4ad62c9b46a80f2159832255fc2($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionD51af92dfda0bf8ff3577714a367ae9a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	                        </a>
';
                $buffer .= $indent . '	                        <a class="dropdown-item" role="menuitem" data-value="yearly" href="javascript:void(0)">
';
                $buffer .= $indent . '	                            ';
                $value = $context->find('str');
                $buffer .= $this->section25cec4ad62c9b46a80f2159832255fc2($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section2a6165708677f5d28dd0412b7ad9970a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '	                        </a>
';
                $buffer .= $indent . '	                        <a class="dropdown-item custom" role="menuitem" href="javascript:void(0)">
';
                $buffer .= $indent . '	                            <input class="border-0 p-0 bg-transparent flatpickr" placeholder="';
                $value = $context->find('str');
                $buffer .= $this->section99891200e02cb04315d9b8dfb8f49fcc($context, $indent, $value);
                $buffer .= '" 0="data-input" />
';
                $buffer .= $indent . '	                        </a>
';
                $buffer .= $indent . '	                    </div>
';
                $buffer .= $indent . '	                </div>
';
                $buffer .= $indent . '	            </div>
';
                $buffer .= $indent . '	        </div>
';
                $buffer .= $indent . '	    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
