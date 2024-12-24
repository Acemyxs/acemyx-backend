<?php

class __Mustache_9ade7f62233b423f71e9c93607ae564e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('posts');
        $buffer .= $this->section7a7579d44a5002e9906fbefdb0680f99($context, $indent, $value);

        return $buffer;
    }

    private function sectionD7a5a1c6d1d09c3ba75453c12ad17e87(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> mod_forum/forum_discussion_threaded_post }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_threaded_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7a7579d44a5002e9906fbefdb0680f99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{< mod_forum/forum_discussion_post }}
        {{$replies}}
            {{! The forumthread class is only added for behat. }}
            <div class="indent forumthread post-replies small" data-region="replies-container">
                {{#replies}}
                    {{> mod_forum/forum_discussion_threaded_post }}
                {{/replies}}
            </div>
        {{/replies}}
    {{/ mod_forum/forum_discussion_post }}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                if ($parent = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $context->pushBlockContext(array(
                        'replies' => array($this, 'block556050a9e219b01d66b41c4232e77379'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function block556050a9e219b01d66b41c4232e77379($context)
    {
        $indent = $buffer = '';
        $buffer .= '            <div class="indent forumthread post-replies small" data-region="replies-container">
';
        $value = $context->find('replies');
        $buffer .= $this->sectionD7a5a1c6d1d09c3ba75453c12ad17e87($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
    
        return $buffer;
    }
}
