<?php

class __Mustache_0e2cc5eadea9ada34a0b15e716243c97 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="rui-activity-wrapper ';
        $value = $context->find('hasdates');
        $buffer .= $this->section555650c284167b9ed6b5cff628944dae($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('hascompletion');
        $buffer .= $this->section72768f6447cc1358093ce55d642ec085($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('hascompletion');
        if (empty($value)) {
            
            $buffer .= 'rui-activity--hasnotcompletion';
        }
        $buffer .= '">';
        $value = $context->find('hasdates');
        $buffer .= $this->sectionA112ab39f93c2d76342e351c30a96686($context, $indent, $value);
        $value = $context->find('hascompletion');
        $buffer .= $this->section9fe4599111d7604b4accd5991c1600c2($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section555650c284167b9ed6b5cff628944dae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-activity--hasdates';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-activity--hasdates';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72768f6447cc1358093ce55d642ec085(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-activity--hascompletion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-activity--hascompletion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2c08b13150375ae73a0e651873b29cf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core_course/activity_date}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/activity_date')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA112ab39f93c2d76342e351c30a96686(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div data-region="activity-information" data-activityname="{{activityname}}" class="rui-activity-information">
        <div data-region="activity-dates" class="rui-activity-dates">
            <svg class="d-none d-md-flex mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.75 4.75V19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M8.75 12H19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M15.75 8.75L19.25 12L15.75 15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            {{#activitydates}}
                {{>core_course/activity_date}}
            {{/activitydates}}
        </div>
    </div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $buffer .= $indent . '    <div data-region="activity-information" data-activityname="';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-activity-information">
';
                $buffer .= $indent . '        <div data-region="activity-dates" class="rui-activity-dates">
';
                $buffer .= $indent . '            <svg class="d-none d-md-flex mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                <path d="M4.75 4.75V19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                <path d="M8.75 12H19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                <path d="M15.75 8.75L19.25 12L15.75 15.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '            </svg>
';
                $value = $context->find('activitydates');
                $buffer .= $this->sectionB2c08b13150375ae73a0e651873b29cf($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4d533f216f9622c64afd5d00c909083(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'completionrequirements, core_course, {{activityname}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'completionrequirements, core_course, ';
                $value = $this->resolveValue($context->find('activityname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f23ac0a1e8b1dcc1d31a16b462524d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{> core_course/completion_automatic }}
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/completion_automatic')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section15b27f1aac2c356a98408a8b95d0933b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div data-region="completion-info">
                    
                        <div class="rui-completion-badges automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{> core_course/completion_automatic }}
                            {{/completiondetails}}
                        </div>
                    
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div data-region="completion-info">
';
                $buffer .= $indent . '                    
';
                $buffer .= $indent . '                        <div class="rui-completion-badges automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('completiondetails');
                $buffer .= $this->section6f23ac0a1e8b1dcc1d31a16b462524d8($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85975c8d68eb1bd0df771834964cabe7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-completion-info">
            {{#uservisible}}
                <div data-region="completion-info">
                    
                        <div class="rui-completion-badges automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{> core_course/completion_automatic }}
                            {{/completiondetails}}
                        </div>
                    
                </div>
            {{/uservisible}}
        </div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-completion-info">
';
                $value = $context->find('uservisible');
                $buffer .= $this->section15b27f1aac2c356a98408a8b95d0933b($context, $indent, $value);
                $buffer .= $indent . '        </div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6e40cbd085cf0cdcb9a83a3f760ff857(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{> core_course/completion_manual }}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a17344a2f863be2be0649e79d48baba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="{{^isautomatic}}rui-completion-info--manual{{/isautomatic}}">
                <div data-region="completion-info">
                    {{#showmanualcompletion}}
                        {{> core_course/completion_manual }}
                    {{/showmanualcompletion}}
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="';
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    $buffer .= 'rui-completion-info--manual';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                <div data-region="completion-info">
';
                $value = $context->find('showmanualcompletion');
                $buffer .= $this->section6e40cbd085cf0cdcb9a83a3f760ff857($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fe4599111d7604b4accd5991c1600c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{#isautomatic}}
        <div class="rui-completion-info">
            {{#uservisible}}
                <div data-region="completion-info">
                    
                        <div class="rui-completion-badges automatic-completion-conditions" data-region ="completionrequirements" role="list" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                            {{#completiondetails}}
                                {{> core_course/completion_automatic }}
                            {{/completiondetails}}
                        </div>
                    
                </div>
            {{/uservisible}}
        </div>{{/isautomatic}}
        {{^isautomatic}}
            {{#uservisible}}
            <div class="{{^isautomatic}}rui-completion-info--manual{{/isautomatic}}">
                <div data-region="completion-info">
                    {{#showmanualcompletion}}
                        {{> core_course/completion_manual }}
                    {{/showmanualcompletion}}
                </div>
            </div>
            {{/uservisible}}
        {{/isautomatic}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '
';
                $value = $context->find('isautomatic');
                $buffer .= $this->section85975c8d68eb1bd0df771834964cabe7($context, $indent, $value);
                $buffer .= '
';
                $value = $context->find('isautomatic');
                if (empty($value)) {
                    
                    $value = $context->find('uservisible');
                    $buffer .= $this->section1a17344a2f863be2be0649e79d48baba($context, $indent, $value);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
