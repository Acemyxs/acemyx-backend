<?php

class __Mustache_43489bc0a7170af501110936856f97e1 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="core-filter-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="filter-group" data-table-region="';
        $value = $this->resolveValue($context->find('tableregionid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-table-course-id="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-filterverb="2">
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter_match')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div data-filterregion="filters">
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter_row')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="d-flex mt-2 flex-wrap" data-filterregion="actions">
';
        $buffer .= $indent . '        <button type="button" class="btn btn-sm btn-outline-primary mb-2 mb-md-0" data-filteraction="add">
';
        $buffer .= $indent . '            <span class="rui-btn--icon">
';
        $buffer .= $indent . '                <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 12C4.75 7.99594 7.99594 4.75 12 4.75V4.75C16.0041 4.75 19.25 7.99594 19.25 12V12C19.25 16.0041 16.0041 19.25 12 19.25V19.25C7.99594 19.25 4.75 16.0041 4.75 12V12Z"></path>
';
        $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8.75003V15.25"></path>
';
        $buffer .= $indent . '                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.25 12L8.75 12"></path>
';
        $buffer .= $indent . '                </svg>
';
        $buffer .= $indent . '            </span>
';
        $buffer .= $indent . '            <span class="ml-2">';
        $value = $context->find('str');
        $buffer .= $this->section9f9dc7d43a97be21504a672741f55f49($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '        </button>
';
        $buffer .= $indent . '        <button data-filteraction="reset" type="button" class="btn btn-sm btn-outline-secondary ml-auto mr-md-2 mb-2 mb-md-0">';
        $value = $context->find('str');
        $buffer .= $this->sectionE550d61cd11549b2619f8efbfe0a720d($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '        <button data-filteraction="apply" type="button" class="btn btn-sm btn-primary mb-2 mb-md-0 mx-0">';
        $value = $context->find('str');
        $buffer .= $this->section0e692956fee884d8b737113618bf432e($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('core/datafilter/filter_types')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section9f9dc7d43a97be21504a672741f55f49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'addcondition';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'addcondition';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE550d61cd11549b2619f8efbfe0a720d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'clearfilters';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'clearfilters';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e692956fee884d8b737113618bf432e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'applyfilters';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'applyfilters';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
