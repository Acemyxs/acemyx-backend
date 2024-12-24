<?php

class __Mustache_5114c342f458684ca1190cc4fcd8a9fb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="flex-fill description-inner text-break">
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('intro'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $value = $context->find('hasbuttons');
        $buffer .= $this->sectionA9dbaf7938c82bf4469d68341fb8add1($context, $indent, $value);
        $buffer .= $indent . '    <div class="box generalbox pt-0 pb-3 foldertree">
';
        $buffer .= $indent . '        <div id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" class="filemanager">
';
        $value = $context->find('dir');
        $buffer .= $this->section17f0b91a8686a8a059241d8c764fa56f($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section47ea17f325fa045d6e45fc3e5424d6c3($context, $indent, $value);

        return $buffer;
    }

    private function section852013df32481efe9ecb4378d45678d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{>core/single_button}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/single_button')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA9dbaf7938c82bf4469d68341fb8add1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="container-fluid">
            <div class="row">
                {{#edit_button}}
                    {{>core/single_button}}
                {{/edit_button}}
                {{#download_button}}
                    {{>core/single_button}}
                {{/download_button}}
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="container-fluid">
';
                $buffer .= $indent . '            <div class="row">
';
                $value = $context->find('edit_button');
                $buffer .= $this->section852013df32481efe9ecb4378d45678d0($context, $indent, $value);
                $value = $context->find('download_button');
                $buffer .= $this->section852013df32481efe9ecb4378d45678d0($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17f0b91a8686a8a059241d8c764fa56f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <ul>
                    <li>
                        {{>mod_folder/tree}}
                    </li>
                </ul>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <ul>
';
                $buffer .= $indent . '                    <li>
';
                if ($partial = $this->mustache->loadPartial('mod_folder/tree')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </li>
';
                $buffer .= $indent . '                </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47ea17f325fa045d6e45fc3e5424d6c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    // Init tree JS.
    require([\'mod_folder/folder\'], function(Folder) {
        Folder.initTree(\'{{{id}}}\', \'{{{showexpanded}}}\');
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    // Init tree JS.
';
                $buffer .= $indent . '    require([\'mod_folder/folder\'], function(Folder) {
';
                $buffer .= $indent . '        Folder.initTree(\'';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\', \'';
                $value = $this->resolveValue($context->find('showexpanded'), $context);
                $buffer .= ($value === null ? '' : $value);
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
