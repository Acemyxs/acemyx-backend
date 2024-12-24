<?php

class __Mustache_a0dc914b52034e6d7c73051400d1909b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block_xp">
';
        $value = $context->find('haswarnings');
        if (empty($value)) {
            
            $buffer .= $indent . '        <p class="mb-2">';
            $value = $context->find('str');
            $buffer .= $this->sectionE4d7f74dd23e7fc2dddb47a9401ef5f7($context, $indent, $value);
            $buffer .= '</p>
';
            $buffer .= $indent . '        <p>';
            $value = $context->find('pix');
            $buffer .= $this->section14fbe4f2dbe2dcf4de3985e4e644c301($context, $indent, $value);
            $value = $context->find('str');
            $buffer .= $this->section13e568e80343457215694979968a0557($context, $indent, $value);
            $buffer .= '</p>
';
        }
        $value = $context->find('haswarnings');
        $buffer .= $this->sectionAb8d69a7769867eef7857ecffc38b305($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE4d7f74dd23e7fc2dddb47a9401ef5f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notecompatibilityissues, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notecompatibilityissues, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14fbe4f2dbe2dcf4de3985e4e644c301(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/valid, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/valid, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13e568e80343457215694979968a0557(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noissuesidentified, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noissuesidentified, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section686a1348a90ee7261abe7b2078c6d216(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' i/invalid, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' i/invalid, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section34d2376750e396b331cb1aa9ff928748(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'learnmore, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'learnmore, block_xp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3ddc1c736e3ffd04434eff0268996fc0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' <a href="{{ . }}" target="_blank" re="noopener noreferer">{{# str }}learnmore, block_xp{{/ str }}</a> ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" re="noopener noreferer">';
                $value = $context->find('str');
                $buffer .= $this->section34d2376750e396b331cb1aa9ff928748($context, $indent, $value);
                $buffer .= '</a> ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29d26506c756c13abd477617469afd0d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="xp-border xp-border-solid xp-border-red-600 xp-rounded xp-bg-red-100 xp-p-4">
                    <div class="xp-font-bold xp-mb-1">
                        {{# pix }} i/invalid, core {{/ pix }}{{ title }}
                    </div>
                    <div>
                        {{ message }}
                        {{# url }} <a href="{{ . }}" target="_blank" re="noopener noreferer">{{# str }}learnmore, block_xp{{/ str }}</a> {{/ url }}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="xp-border xp-border-solid xp-border-red-600 xp-rounded xp-bg-red-100 xp-p-4">
';
                $buffer .= $indent . '                    <div class="xp-font-bold xp-mb-1">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('pix');
                $buffer .= $this->section686a1348a90ee7261abe7b2078c6d216($context, $indent, $value);
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('url');
                $buffer .= $this->section3ddc1c736e3ffd04434eff0268996fc0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb8d69a7769867eef7857ecffc38b305(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p>{{# str }} notecompatibilityissues, block_xp {{/ str }}</p>
        <div class="xp-space-y-4">
            {{#warnings}}
                <div class="xp-border xp-border-solid xp-border-red-600 xp-rounded xp-bg-red-100 xp-p-4">
                    <div class="xp-font-bold xp-mb-1">
                        {{# pix }} i/invalid, core {{/ pix }}{{ title }}
                    </div>
                    <div>
                        {{ message }}
                        {{# url }} <a href="{{ . }}" target="_blank" re="noopener noreferer">{{# str }}learnmore, block_xp{{/ str }}</a> {{/ url }}
                    </div>
                </div>
            {{/warnings}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p>';
                $value = $context->find('str');
                $buffer .= $this->sectionE4d7f74dd23e7fc2dddb47a9401ef5f7($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '        <div class="xp-space-y-4">
';
                $value = $context->find('warnings');
                $buffer .= $this->section29d26506c756c13abd477617469afd0d($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
