<?php

class __Mustache_91136d5ae1cd9e7e57ae3cbc770a13c6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($parent = $this->mustache->loadPartial('mod_forum/discussion_favourite_toggle')) {
            $context->pushBlockContext(array(
                'role' => array($this, 'block5abef1143a7da8006c1ca43b345d4215'),
                'favouritecontent' => array($this, 'block891376cdb775de1560e6f134573a800c'),
            ));
            $buffer .= $parent->renderInternal($context, $indent);
            $context->popBlockContext();
        }

        return $buffer;
    }

    private function sectionEa104244b275090b96871a63efc2145c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="text-success btn btn-icon">
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 4.75V19.25" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.2501 8.74994L5.75 15.2501" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M18.2498 15.2503L5.74976 8.75012" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </span>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '        <span class="text-success btn btn-icon">
';
                $buffer .= $indent . '            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                <path d="M12 4.75V19.25" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                <path d="M18.2501 8.74994L5.75 15.2501" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                <path d="M18.2498 15.2503L5.74976 8.75012" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block5abef1143a7da8006c1ca43b345d4215($context)
    {
        $indent = $buffer = '';
        $buffer .= $indent . 'button';
    
        return $buffer;
    }

    public function block891376cdb775de1560e6f134573a800c($context)
    {
        $indent = $buffer = '';
        $value = $context->findDot('userstate.favourited');
        $buffer .= $this->sectionEa104244b275090b96871a63efc2145c($context, $indent, $value);
        $value = $context->findDot('userstate.favourited');
        if (empty($value)) {
            
            $buffer .= $indent . '        <span class="text-light btn btn-icon">
';
            $buffer .= $indent . '            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
            $buffer .= $indent . '                <path d="M12 4.75V19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
            $buffer .= $indent . '                <path d="M18.2501 8.74994L5.75 15.2501" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
            $buffer .= $indent . '                <path d="M18.2498 15.2503L5.74976 8.75012" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
            $buffer .= $indent . '            </svg>
';
            $buffer .= $indent . '        </span>
';
        }
    
        return $buffer;
    }
}
