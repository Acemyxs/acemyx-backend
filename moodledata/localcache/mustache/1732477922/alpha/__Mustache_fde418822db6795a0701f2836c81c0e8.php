<?php

class __Mustache_fde418822db6795a0701f2836c81c0e8 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('activities');
        $buffer .= $this->section794402c1652d7b226f79f3da6698a690($context, $indent, $value);
        $buffer .= $indent . '
';

        return $buffer;
    }

    private function section2c81f415962d0923c85914fee9b99c47(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checkactivity, completion, {{{modname}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checkactivity, completion, ';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85c6106adc0ba7b33c9045e748980c01(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'select, completion';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'select, completion';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf4b6350942883ccd70a54a277bfcd80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="custom-control custom-switch mb-2">
                <input class="custom-control-input" type="checkbox" id="selectactivity_{{cmid}}" name="cmid[]" data-section="{{sectionnumber}}" value="{{cmid}}" aria-label="{{#str}}checkactivity, completion, {{{modname}}}{{/str}}">
                <label class="custom-control-label" for="selectactivity_{{cmid}}">
                    {{#str}}select, completion{{/str}} {{modname}}
                </label>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="custom-control custom-switch mb-2">
';
                $buffer .= $indent . '                <input class="custom-control-input" type="checkbox" id="selectactivity_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="cmid[]" data-section="';
                $value = $this->resolveValue($context->find('sectionnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section2c81f415962d0923c85914fee9b99c47($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <label class="custom-control-label" for="selectactivity_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->section85c6106adc0ba7b33c9045e748980c01($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </label>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF01e2d3c0307b2bdf80d31dde5a980ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{{completionstatus.icon}}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->findDot('completionstatus.icon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section794402c1652d7b226f79f3da6698a690(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="row my-1 p-2 no-gutters border rounded">
    <div class="activityinstance col-6">
        <div class="mod-indent-outer"></div>
        <div>
            {{#canmanage}}
            <div class="custom-control custom-switch mb-2">
                <input class="custom-control-input" type="checkbox" id="selectactivity_{{cmid}}" name="cmid[]" data-section="{{sectionnumber}}" value="{{cmid}}" aria-label="{{#str}}checkactivity, completion, {{{modname}}}{{/str}}">
                <label class="custom-control-label" for="selectactivity_{{cmid}}">
                    {{#str}}select, completion{{/str}} {{modname}}
                </label>
            </div>
            {{/canmanage}}
            <a href="{{url}}" class="activityinstance-title">
                <img src="{{icon}}" class="activityicon" alt=" " role="presentation" />
                <span class="activity-name ml-2">{{{modname}}}</span>
            </a>
        </div>
    </div>
    <div class="activity-completionstatus col-6" id="completionstatus_{{cmid}}">
        <div class="d-inline-flex align-items-center">
            {{#completionstatus.icon}}
                {{{completionstatus.icon}}}
            {{/completionstatus.icon}}
            {{^completionstatus.icon}}
                <span class="ml-3"></span>
            {{/completionstatus.icon}}
            <span class="text-muted muted ml-2">{{{completionstatus.string}}}</span>
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
                
                $buffer .= $indent . '<div class="row my-1 p-2 no-gutters border rounded">
';
                $buffer .= $indent . '    <div class="activityinstance col-6">
';
                $buffer .= $indent . '        <div class="mod-indent-outer"></div>
';
                $buffer .= $indent . '        <div>
';
                $value = $context->find('canmanage');
                $buffer .= $this->sectionFf4b6350942883ccd70a54a277bfcd80($context, $indent, $value);
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="activityinstance-title">
';
                $buffer .= $indent . '                <img src="';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="activityicon" alt=" " role="presentation" />
';
                $buffer .= $indent . '                <span class="activity-name ml-2">';
                $value = $this->resolveValue($context->find('modname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '            </a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="activity-completionstatus col-6" id="completionstatus_';
                $value = $this->resolveValue($context->find('cmid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '        <div class="d-inline-flex align-items-center">
';
                $value = $context->findDot('completionstatus.icon');
                $buffer .= $this->sectionF01e2d3c0307b2bdf80d31dde5a980ad($context, $indent, $value);
                $value = $context->findDot('completionstatus.icon');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <span class="ml-3"></span>
';
                }
                $buffer .= $indent . '            <span class="text-muted muted ml-2">';
                $value = $this->resolveValue($context->findDot('completionstatus.string'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
