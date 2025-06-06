<?php

class __Mustache_f462ad45bcf8e50be70d840a39d8f22e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div
';
        $buffer .= $indent . '    class="dropdown ';
        $buffer .= ' ';
        $blockFunction = $context->findInBlock('dropdownclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= ' ';
            $buffer .= ' ';
            $value = $context->find('classes');
            $buffer .= $this->section52e09049519c3f09a23b20979bf67d85($context, $indent, $value);
            $buffer .= ' ';
            $buffer .= ' ';
        }
        $buffer .= '"
';
        $buffer .= $indent . '    id="';
        $blockFunction = $context->findInBlock('dropdownid');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('dropdownid');
            $buffer .= $this->section5851aa9ef2803f3a4bcc89fb492924cb($context, $indent, $value);
            $value = $context->find('dropdownid');
            if (empty($value)) {
                
                $buffer .= 'dropdownDialog_';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            }
        }
        $buffer .= '"
';
        $blockFunction = $context->findInBlock('extras');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('extras');
            $buffer .= $this->sectionAec6262422a8955fda62903c12967944($context, $indent, $value);
        }
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <button
';
        $buffer .= $indent . '        class="';
        $value = $context->find('buttonclasses');
        $buffer .= $this->sectionFe58129659f43ea74a70a4f82001ef85($context, $indent, $value);
        $buffer .= ' btn--dialog"
';
        $buffer .= $indent . '        type="button"
';
        $buffer .= $indent . '        id="';
        $value = $context->find('buttonid');
        $buffer .= $this->sectionEd84f5d2b8db249baf2cdb6dbe318d57($context, $indent, $value);
        $value = $context->find('buttonid');
        if (empty($value)) {
            
            $buffer .= 'dropdownDialog';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '        data-toggle="dropdown"
';
        $buffer .= $indent . '        aria-haspopup="true"
';
        $buffer .= $indent . '        aria-expanded="false"
';
        $buffer .= $indent . '        data-for="dropdowndialog_button"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V15"></path>
';
        $buffer .= $indent . '            <circle cx="12" cy="9" r="1" fill="currentColor"></circle>
';
        $buffer .= $indent . '            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="dropdown-menu ';
        $buffer .= ' dropright ';
        $buffer .= ' ';
        $blockFunction = $context->findInBlock('dialogclasses');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= ' ';
            $buffer .= ' ';
            $value = $context->find('dialogclasses');
            $buffer .= $this->section36e09cca9d3830e2d54a45b4da0da3eb($context, $indent, $value);
            $buffer .= ' ';
            $buffer .= ' ';
        }
        $buffer .= '"
';
        $buffer .= $indent . '        aria-labelledby="';
        $value = $context->find('buttonid');
        $buffer .= $this->sectionEd84f5d2b8db249baf2cdb6dbe318d57($context, $indent, $value);
        $value = $context->find('buttonid');
        if (empty($value)) {
            
            $buffer .= 'dropdownDialog';
            $value = $this->resolveValue($context->find('uniqid'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        }
        $buffer .= '"
';
        $buffer .= $indent . '        data-for="dropdowndialog_dialog"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        <span class="badge badge-xs badge-light">';
        $blockFunction = $context->findInBlock('buttoncontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $this->resolveValue($context->find('buttoncontent'), $context);
            $buffer .= ($value === null ? '' : $value);
        }
        $buffer .= '</span>
';
        $buffer .= $indent . '        <div data-for="dropdowndialog_content">
';
        $blockFunction = $context->findInBlock('dialogcontent');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '                ';
            $value = $this->resolveValue($context->find('dialogcontent'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section70c62d45b958aef5d8cdce4802b5c3cc($context, $indent, $value);

        return $buffer;
    }

    private function section52e09049519c3f09a23b20979bf67d85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{classes}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('classes'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5851aa9ef2803f3a4bcc89fb492924cb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{dropdownid}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('dropdownid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAec6262422a8955fda62903c12967944(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{attribute}}="{{value}}"
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('attribute'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe58129659f43ea74a70a4f82001ef85(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{buttonclasses}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('buttonclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEd84f5d2b8db249baf2cdb6dbe318d57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{buttonid}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('buttonid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section36e09cca9d3830e2d54a45b4da0da3eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{dialogclasses}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('dialogclasses'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section70c62d45b958aef5d8cdce4802b5c3cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core/local/dropdown/dialog\'], function(Module) {
        Module.init(\'#\' + \'{{$ dropdownid }}{{!
            }}{{#dropdownid}}{{dropdownid}}{{/dropdownid}}{{!
            }}{{^dropdownid}}dropdownDialog_{{uniqid}}{{/dropdownid}}{{!
        }}{{/ dropdownid }}\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core/local/dropdown/dialog\'], function(Module) {
';
                $buffer .= $indent . '        Module.init(\'#\' + \'';
                $blockFunction = $context->findInBlock('dropdownid');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $value = $context->find('dropdownid');
                    $buffer .= $this->section5851aa9ef2803f3a4bcc89fb492924cb($context, $indent, $value);
                    $value = $context->find('dropdownid');
                    if (empty($value)) {
                        
                        $buffer .= 'dropdownDialog_';
                        $value = $this->resolveValue($context->find('uniqid'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    }
                }
                $buffer .= '\');
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
