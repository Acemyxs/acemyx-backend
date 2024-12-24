<?php

class __Mustache_c1b06a6c0bee1bdc6b65c2641cb33dbe extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div style="background-color: #F3F3F3; width: 100%; height: 100%">
';
        $buffer .= $indent . '    <div class="navbar" style="background-color: #F3F3F3; width: 90%; max-width: 700px; margin-left: auto; margin-right: auto; padding-top: 15px; padding-bottom: 15px; margin-bottom: 0; font-size: 12px; text-align: left;">
';
        $buffer .= $indent . '        <a target="_blank" href="';
        $value = $this->resolveValue($context->find('courselink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" style="color: #8e8e8e;">';
        $value = $this->resolveValue($context->find('coursename'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        &raquo;
';
        $buffer .= $indent . '        <a target="_blank" href="';
        $value = $this->resolveValue($context->find('forumindexlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" style="color: #8e8e8e;">';
        $value = $context->find('str');
        $buffer .= $this->section18736ac7a7e3e335e3a7c814340188f4($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        &raquo;
';
        $buffer .= $indent . '        <a target="_blank" href="';
        $value = $this->resolveValue($context->find('forumviewlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" style="color: #8e8e8e;">';
        $value = $this->resolveValue($context->find('forumname'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</a>
';
        $value = $context->find('showdiscussionname');
        $buffer .= $this->sectionE3339fbf5857fe77b58860a675613232($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div style="padding: 0 0 15px 0; background-color: #F3F3F3; width: 100%; height: 100%">
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('mod_forum/forum_post_email_htmlemail_body')) {
            $buffer .= $partial->renderInternal($context, $indent . '        ');
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="unsubscribelink" style="width: 100%; margin-top: 30px; margin-bottom: 30px; text-align: center; font-size: 11px; line-height: 2;">
';
        $value = $context->find('unsubscribeforumlink');
        $buffer .= $this->sectionB834a257b865781b11745347db761956($context, $indent, $value);
        $value = $context->find('unsubscribediscussionlink');
        $buffer .= $this->sectionD1ff1012c40f38d18057b26e774e415c($context, $indent, $value);
        $buffer .= $indent . '            <a href="';
        $value = $this->resolveValue($context->find('forumindexlink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" style="color: #959595; text-decoration: none;">';
        $value = $context->find('str');
        $buffer .= $this->sectionFa8d7498858197168f261ad446f1cf7b($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section18736ac7a7e3e335e3a7c814340188f4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' forums, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' forums, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3339fbf5857fe77b58860a675613232(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        &raquo;
        <a target="_blank" href="{{{ discussionlink }}}" style="color: #8e8e8e;">{{{ discussionname }}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        &raquo;
';
                $buffer .= $indent . '        <a target="_blank" href="';
                $value = $this->resolveValue($context->find('discussionlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="color: #8e8e8e;">';
                $value = $this->resolveValue($context->find('discussionname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE1ed522570dbfad6cb06bd2fffa2fc3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribe, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unsubscribe, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB834a257b865781b11745347db761956(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{ unsubscribeforumlink }}}" style="color: #959595; text-decoration: none;">{{# str }} unsubscribe, forum {{/ str }}</a>&nbsp;&nbsp;&nbsp;
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('unsubscribeforumlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="color: #959595; text-decoration: none;">';
                $value = $context->find('str');
                $buffer .= $this->sectionE1ed522570dbfad6cb06bd2fffa2fc3f($context, $indent, $value);
                $buffer .= '</a>&nbsp;&nbsp;&nbsp;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f36a3a60538d683b50728e4edf76b18(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unsubscribediscussion, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unsubscribediscussion, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1ff1012c40f38d18057b26e774e415c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a href="{{{ unsubscribediscussionlink }}}" style="color: #959595; text-decoration: none;">{{# str }} unsubscribediscussion, forum {{/ str }}</a>&nbsp;&nbsp;&nbsp;
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('unsubscribediscussionlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="color: #959595; text-decoration: none;">';
                $value = $context->find('str');
                $buffer .= $this->section4f36a3a60538d683b50728e4edf76b18($context, $indent, $value);
                $buffer .= '</a>&nbsp;&nbsp;&nbsp;
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa8d7498858197168f261ad446f1cf7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' digestmailpost, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' digestmailpost, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
