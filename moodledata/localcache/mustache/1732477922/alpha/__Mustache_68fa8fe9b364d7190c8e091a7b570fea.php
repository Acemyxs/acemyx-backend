<?php

class __Mustache_68fa8fe9b364d7190c8e091a7b570fea extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="activity-information" data-activityname="';
        $value = $this->resolveValue($context->find('activityname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="activity-information">
';
        $value = $context->find('uservisible');
        $buffer .= $this->section9b8d414f0649a4f969ed140dbbbbb681($context, $indent, $value);
        $buffer .= $indent . '</div>
';

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

    private function section174579750b0c4be1c9d195c889fbc217(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div data-region="completionrequirements" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                    {{> core/local/dropdown/dialog-min }}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div data-region="completionrequirements" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionB4d533f216f9622c64afd5d00c909083($context, $indent, $value);
                $buffer .= '">
';
                if ($partial = $this->mustache->loadPartial('core/local/dropdown/dialog-min')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section550ae7a9ab924ceda62fde89dcd254a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{$ core_course/completion_manual }}
                        {{> core_course/completion_manual }}
                    {{/ core_course/completion_manual }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('core_course/completion_manual');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    if ($partial = $this->mustache->loadPartial('core_course/completion_manual')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                        ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE16d9ff17d9735aa9207c166fb20ff01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#istrackeduser}}
                    {{$ core_course/completion_manual }}
                        {{> core_course/completion_manual }}
                    {{/ core_course/completion_manual }}
                {{/istrackeduser}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istrackeduser');
                $buffer .= $this->section550ae7a9ab924ceda62fde89dcd254a3($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b8d414f0649a4f969ed140dbbbbb681(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div data-region="completion-info">
            {{! Completion dropdown dialog }}
            {{#completiondialog}}
                <div data-region="completionrequirements" aria-label="{{#str}}completionrequirements, core_course, {{activityname}}{{/str}}">
                    {{> core/local/dropdown/dialog-min }}
                </div>
            {{/completiondialog}}

            {{! Manual completion button }}
            {{#showmanualcompletion}}
                {{#istrackeduser}}
                    {{$ core_course/completion_manual }}
                        {{> core_course/completion_manual }}
                    {{/ core_course/completion_manual }}
                {{/istrackeduser}}
            {{/showmanualcompletion}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div data-region="completion-info">
';
                $value = $context->find('completiondialog');
                $buffer .= $this->section174579750b0c4be1c9d195c889fbc217($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('showmanualcompletion');
                $buffer .= $this->sectionE16d9ff17d9735aa9207c166fb20ff01($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
