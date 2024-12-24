<?php

class __Mustache_d13d0e172010c172e53e428462819a6b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block_xp">
';
        $buffer .= $indent . '    <p>';
        $value = $context->find('str');
        $buffer .= $this->sectionF8a472b42321feefeffd0c9ab378d6d3($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '    <div class="xp-space-y-4">
';
        $value = $context->find('plugins');
        $buffer .= $this->sectionDa032e1d55f4f43ca1907778e6688033($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF8a472b42321feefeffd0c9ab378d6d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'somefeaturesrequireotherplugins, block_xp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'somefeaturesrequireotherplugins, block_xp';
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

    private function section9e6a04a0d21f386c85dbc59fc90eedcb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' installed, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' installed, block_xp ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa2c470dfe0c014887ff9b0ac7565e59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{# pix }} i/valid, core {{/ pix }}{{# str }} installed, block_xp {{/ str }}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $context->find('pix');
                $buffer .= $this->section14fbe4f2dbe2dcf4de3985e4e644c301($context, $indent, $value);
                $value = $context->find('str');
                $buffer .= $this->section9e6a04a0d21f386c85dbc59fc90eedcb($context, $indent, $value);
                $buffer .= '
';
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

    private function sectionF7cae2b8a99a6449b84648685f1562e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' missing, block_xp ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' missing, block_xp ';
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

    private function sectionDa032e1d55f4f43ca1907778e6688033(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div>
                <div class="xp-font-bold xp-mb-1">{{ name }}</div>
                <div class="xp-text-sm xp-mb-1">{{ description }}</div>
                <div class="xp-flex xp-space-x-4 xp-text-sm">
                    <div>
                        {{# isinstalled }}
                            {{# pix }} i/valid, core {{/ pix }}{{# str }} installed, block_xp {{/ str }}
                        {{/ isinstalled }}
                        {{^ isinstalled }}
                            {{# pix }} i/invalid, core {{/ pix }}{{# str }} missing, block_xp {{/ str }}
                        {{/ isinstalled }}
                    </div>
                    <div>
                        <a href="{{ url }}" target="_blank" re="noopener noreferer">{{# str }}learnmore, block_xp{{/ str }}</a>
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
                
                $buffer .= $indent . '            <div>
';
                $buffer .= $indent . '                <div class="xp-font-bold xp-mb-1">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                <div class="xp-text-sm xp-mb-1">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</div>
';
                $buffer .= $indent . '                <div class="xp-flex xp-space-x-4 xp-text-sm">
';
                $buffer .= $indent . '                    <div>
';
                $value = $context->find('isinstalled');
                $buffer .= $this->sectionBa2c470dfe0c014887ff9b0ac7565e59($context, $indent, $value);
                $value = $context->find('isinstalled');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            ';
                    $value = $context->find('pix');
                    $buffer .= $this->section686a1348a90ee7261abe7b2078c6d216($context, $indent, $value);
                    $value = $context->find('str');
                    $buffer .= $this->sectionF7cae2b8a99a6449b84648685f1562e0($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" re="noopener noreferer">';
                $value = $context->find('str');
                $buffer .= $this->section34d2376750e396b331cb1aa9ff928748($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
