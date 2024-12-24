<?php

class __Mustache_cb7e9b5533fd41f2731719e3f2a4972c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('disabled');
        if (empty($value)) {
            
            $buffer .= $indent . '    <a href="';
            $value = $this->resolveValue($context->find('url'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" id="';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '" class="btn btn-sm btn-secondary" ';
            $value = $context->find('attributes');
            $buffer .= $this->sectionFfa84c60ffaeca4e2848b955ec713562($context, $indent, $value);
            $buffer .= ' data-toggle="tooltip" data-placement="top" title="';
            $value = $this->resolveValue($context->find('text'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" aria-label="';
            $value = $this->resolveValue($context->find('text'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '">
';
            $buffer .= $indent . '        <svg width="18" height="18" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor">
';
            $buffer .= $indent . '            <path d="M6 12h12.5m0 0l-6-6m6 6l-6 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
            $buffer .= $indent . '        </svg>
';
            $buffer .= $indent . '    </a>
';
            $value = $context->find('hasactions');
            $buffer .= $this->section193ac8288144ab8766a418c22811fbde($context, $indent, $value);
        }
        $value = $context->find('disabled');
        $buffer .= $this->sectionE3ad5d2af26c54b598fe1efb095021d3($context, $indent, $value);

        return $buffer;
    }

    private function sectionFfa84c60ffaeca4e2848b955ec713562(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{name}}="{{value}}" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section193ac8288144ab8766a418c22811fbde(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/actions }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3ad5d2af26c54b598fe1efb095021d3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <span class="currentlink btn btn-sm btn-secondary" {{#attributes}} {{name}}="{{value}}" {{/attributes}}></span>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <span class="currentlink btn btn-sm btn-secondary" ';
                $value = $context->find('attributes');
                $buffer .= $this->sectionFfa84c60ffaeca4e2848b955ec713562($context, $indent, $value);
                $buffer .= '></span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
