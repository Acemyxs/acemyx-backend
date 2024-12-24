<?php

class __Mustache_aaab35420d50ba2540d07fa773bbc751 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<nav class="
';
        $buffer .= $indent . '    xp-text-left
';
        $buffer .= $indent . '    xp-flex-row xp-flex-wrap xp-border-0 xp-border-b xp-border-solid xp-border-gray-100 xp-pb-4 xp-gap-2
';
        $buffer .= $indent . '    lg:xp-space-y-1 lg:xp-flex-col lg:xp-flex-nowrap lg:xp-pb-0 lg:xp-border-b-0 lg:xp-gap-0
';
        $buffer .= $indent . '    ">
';
        $value = $context->find('items');
        $buffer .= $this->section481dc16e1c1ce2bb3bc07b13e0e4c75e($context, $indent, $value);
        $buffer .= $indent . '</nav>';

        return $buffer;
    }

    private function section36e2c56ac6d2c4c0a4b3c6b55f24a00a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            class="lg:xp-w-full xp-no-underline xp-bg-gray-100 xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md xp-gap-1"
            aria-current="page"
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            class="lg:xp-w-full xp-no-underline xp-bg-gray-100 xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md xp-gap-1"
';
                $buffer .= $indent . '            aria-current="page"
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEdae6ddb82010644db2a4345c9648951(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="xp-py-0.5 xp-px-1 xp-normal-case xp-text-2xs xp-inline-block xp-bg-black xp-text-white xp-rounded xp-no-underline xp-font-normal xp-align-middle">XP+</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="xp-py-0.5 xp-px-1 xp-normal-case xp-text-2xs xp-inline-block xp-bg-black xp-text-white xp-rounded xp-no-underline xp-font-normal xp-align-middle">XP+</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section481dc16e1c1ce2bb3bc07b13e0e4c75e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a href="{{ url }}"
            {{#current}}
            class="lg:xp-w-full xp-no-underline xp-bg-gray-100 xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md xp-gap-1"
            aria-current="page"
            {{/current}}
            {{^current}}
            class="lg:xp-w-full xp-no-underline xp-text-gray-600 hover:xp-bg-gray-50 hover:xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md"
            {{/current}}
            >
          <span class="xp-grow xp-truncate">{{ text }}</span>
          {{#addonrequired}}<span class="xp-py-0.5 xp-px-1 xp-normal-case xp-text-2xs xp-inline-block xp-bg-black xp-text-white xp-rounded xp-no-underline xp-font-normal xp-align-middle">XP+</span>{{/addonrequired}}
        </a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $value = $context->find('current');
                $buffer .= $this->section36e2c56ac6d2c4c0a4b3c6b55f24a00a($context, $indent, $value);
                $value = $context->find('current');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            class="lg:xp-w-full xp-no-underline xp-text-gray-600 hover:xp-bg-gray-50 hover:xp-text-gray-900 xp-flex xp-items-center xp-pl-3 xp-pr-2 xp-py-2 xp-text-sm xp-font-medium xp-rounded-md"
';
                }
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '          <span class="xp-grow xp-truncate">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '          ';
                $value = $context->find('addonrequired');
                $buffer .= $this->sectionEdae6ddb82010644db2a4345c9648951($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
