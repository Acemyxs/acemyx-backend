<?php

class __Mustache_26d9fcf250f6de22b2387ff30e70f563 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('summarycard');
        $buffer .= $this->section1db8ff8876058f6e2bc42d22d84e7f99($context, $indent, $value);

        return $buffer;
    }

    private function section84060a849d5d6ad55eea94c6a6695a28(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' category, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' category, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3aa68297f3ad1ede5505e2265a73e428(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="">
                                <span class="summary-card-subtitle font-weight-bold">{{#str}} category, local_edwiserreports {{/str}} :</span>
                                <span> {{category}} </span>
                            </div>
                            <div class="summary-card-title font-weight-bold">
                                {{coursename}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="">
';
                $buffer .= $indent . '                                <span class="summary-card-subtitle font-weight-bold">';
                $value = $context->find('str');
                $buffer .= $this->section84060a849d5d6ad55eea94c6a6695a28($context, $indent, $value);
                $buffer .= ' :</span>
';
                $buffer .= $indent . '                                <span> ';
                $value = $this->resolveValue($context->find('category'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </span>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="summary-card-title font-weight-bold">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('coursename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe6cd97793b497a1aba7c06ebb59eeca(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' active, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' active, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA04929a2bcbdbe1b65b534886e1925e7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <span class="text-success p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background: #e8f8e5;"> {{#str}} active, local_edwiserreports {{/str}} </span>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <span class="text-success p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background: #e8f8e5;"> ';
                $value = $context->find('str');
                $buffer .= $this->sectionCe6cd97793b497a1aba7c06ebb59eeca($context, $indent, $value);
                $buffer .= ' </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8714cf5ef55ce42c95f3185751d4cba8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notactive, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notactive, local_edwiserreports ';
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

    private function sectionEa42e3ef585d67108c115ea007b70575(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="">
                                <span class="summary-card-title font-weight-bold">{{learnername}}</span>
                                {{#isactive}}
                                    <span class="text-success p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background: #e8f8e5;"> {{#str}} active, local_edwiserreports {{/str}} </span>
                                {{/isactive}}
                                {{^isactive}}
                                    <span class="text-danger p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background-color: #f7e8e6;"> {{#str}} notactive, local_edwiserreports {{/str}}</span>
                                {{/isactive}}
                            </div>
                            <div class="">
                                <span class="summary-card-subtitle font-weight-bold"> {{#str}} lastaccess, local_edwiserreports {{/str}} : </span>
                                <span class="ml-2"> {{lastaccess}} </span>
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="">
';
                $buffer .= $indent . '                                <span class="summary-card-title font-weight-bold">';
                $value = $this->resolveValue($context->find('learnername'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $value = $context->find('isactive');
                $buffer .= $this->sectionA04929a2bcbdbe1b65b534886e1925e7($context, $indent, $value);
                $value = $context->find('isactive');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                    <span class="text-danger p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background-color: #f7e8e6;"> ';
                    $value = $context->find('str');
                    $buffer .= $this->section8714cf5ef55ce42c95f3185751d4cba8($context, $indent, $value);
                    $buffer .= '</span>
';
                }
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div class="">
';
                $buffer .= $indent . '                                <span class="summary-card-subtitle font-weight-bold"> ';
                $value = $context->find('str');
                $buffer .= $this->sectionF1ad50b86182247e377f2b687f4f39da($context, $indent, $value);
                $buffer .= ' : </span>
';
                $buffer .= $indent . '                                <span class="ml-2"> ';
                $value = $this->resolveValue($context->find('lastaccess'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </span>
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf94db8fd0be8de572198cce02156ce4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="summary-header pb-4" style="border-bottom: 1px solid #D9D9D9;">
                    <div class="summary-header-wrap">
                        {{{customheaderinfo}}}

                        {{#course}}
                            <div class="">
                                <span class="summary-card-subtitle font-weight-bold">{{#str}} category, local_edwiserreports {{/str}} :</span>
                                <span> {{category}} </span>
                            </div>
                            <div class="summary-card-title font-weight-bold">
                                {{coursename}}
                            </div>
                        {{/course}}
                        {{#learner}}
                            <div class="">
                                <span class="summary-card-title font-weight-bold">{{learnername}}</span>
                                {{#isactive}}
                                    <span class="text-success p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background: #e8f8e5;"> {{#str}} active, local_edwiserreports {{/str}} </span>
                                {{/isactive}}
                                {{^isactive}}
                                    <span class="text-danger p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background-color: #f7e8e6;"> {{#str}} notactive, local_edwiserreports {{/str}}</span>
                                {{/isactive}}
                            </div>
                            <div class="">
                                <span class="summary-card-subtitle font-weight-bold"> {{#str}} lastaccess, local_edwiserreports {{/str}} : </span>
                                <span class="ml-2"> {{lastaccess}} </span>
                            </div>
                        {{/learner}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="summary-header pb-4" style="border-bottom: 1px solid #D9D9D9;">
';
                $buffer .= $indent . '                    <div class="summary-header-wrap">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('customheaderinfo'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $value = $context->find('course');
                $buffer .= $this->section3aa68297f3ad1ede5505e2265a73e428($context, $indent, $value);
                $value = $context->find('learner');
                $buffer .= $this->sectionEa42e3ef585d67108c115ea007b70575($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fafdffa0da54eef47c8dd6cdb9a1606(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mr-3 ml-3">
                            <span class="summary-card-subtitle font-weight-bold">{{title}} : </span>
                            <span> {{data}} </span>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="mr-3 ml-3">
';
                $buffer .= $indent . '                            <span class="summary-card-subtitle font-weight-bold">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' : </span>
';
                $buffer .= $indent . '                            <span> ';
                $value = $this->resolveValue($context->find('data'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' </span>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8a9a31b9c5ce24bf798c0e15f3db692c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="col-12 col-lg-2 col-md-4 d-flex">
                            <div class="insight-image">
                                {{{icon}}}
                            </div>
                            <div>
                                <div class="pl-2 mb-0" style=\'color:#3AAA9E;font-size: 24px;line-height: 24px;\'>{{data}}</div>
                                <div class="pl-2">{{title}}</div>
                            </div>
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="col-12 col-lg-2 col-md-4 d-flex">
';
                $buffer .= $indent . '                            <div class="insight-image">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                            <div>
';
                $buffer .= $indent . '                                <div class="pl-2 mb-0" style=\'color:#3AAA9E;font-size: 24px;line-height: 24px;\'>';
                $value = $this->resolveValue($context->find('data'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                                <div class="pl-2">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
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

    private function section1db8ff8876058f6e2bc42d22d84e7f99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

    <div class="summary-card mt-2 mb-5" style="border: 1px solid #F98012;border-radius: 5px;">
        <div class="summary-card-wrapper p-4">
            {{#header}}
                <div class="summary-header pb-4" style="border-bottom: 1px solid #D9D9D9;">
                    <div class="summary-header-wrap">
                        {{{customheaderinfo}}}

                        {{#course}}
                            <div class="">
                                <span class="summary-card-subtitle font-weight-bold">{{#str}} category, local_edwiserreports {{/str}} :</span>
                                <span> {{category}} </span>
                            </div>
                            <div class="summary-card-title font-weight-bold">
                                {{coursename}}
                            </div>
                        {{/course}}
                        {{#learner}}
                            <div class="">
                                <span class="summary-card-title font-weight-bold">{{learnername}}</span>
                                {{#isactive}}
                                    <span class="text-success p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background: #e8f8e5;"> {{#str}} active, local_edwiserreports {{/str}} </span>
                                {{/isactive}}
                                {{^isactive}}
                                    <span class="text-danger p-1 pl-2 pr-2 ml-3" style="border-radius: 3px;background-color: #f7e8e6;"> {{#str}} notactive, local_edwiserreports {{/str}}</span>
                                {{/isactive}}
                            </div>
                            <div class="">
                                <span class="summary-card-subtitle font-weight-bold"> {{#str}} lastaccess, local_edwiserreports {{/str}} : </span>
                                <span class="ml-2"> {{lastaccess}} </span>
                            </div>
                        {{/learner}}
                    </div>
                </div>
            {{/header}}

            <div class="summary-body pb-4 pt-4" style="border-bottom: 1px solid #D9D9D9;">
                <div class="summary-body-wrap row">
                    {{#body}}
                        <div class="mr-3 ml-3">
                            <span class="summary-card-subtitle font-weight-bold">{{title}} : </span>
                            <span> {{data}} </span>
                        </div>
                    {{/body}}
                </div>
            </div>

            <div class="summary-footer pt-4">
                <div class="summary-footer-wrap row">
                    {{#footer}}
                        <div class="col-12 col-lg-2 col-md-4 d-flex">
                            <div class="insight-image">
                                {{{icon}}}
                            </div>
                            <div>
                                <div class="pl-2 mb-0" style=\'color:#3AAA9E;font-size: 24px;line-height: 24px;\'>{{data}}</div>
                                <div class="pl-2">{{title}}</div>
                            </div>
                        </div>
                    {{/footer}}
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
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="summary-card mt-2 mb-5" style="border: 1px solid #F98012;border-radius: 5px;">
';
                $buffer .= $indent . '        <div class="summary-card-wrapper p-4">
';
                $value = $context->find('header');
                $buffer .= $this->sectionEf94db8fd0be8de572198cce02156ce4($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="summary-body pb-4 pt-4" style="border-bottom: 1px solid #D9D9D9;">
';
                $buffer .= $indent . '                <div class="summary-body-wrap row">
';
                $value = $context->find('body');
                $buffer .= $this->section6fafdffa0da54eef47c8dd6cdb9a1606($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="summary-footer pt-4">
';
                $buffer .= $indent . '                <div class="summary-footer-wrap row">
';
                $value = $context->find('footer');
                $buffer .= $this->section8a9a31b9c5ce24bf798c0e15f3db692c($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
