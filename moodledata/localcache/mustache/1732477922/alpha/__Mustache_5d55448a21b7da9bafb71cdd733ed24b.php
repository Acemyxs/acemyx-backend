<?php

class __Mustache_5d55448a21b7da9bafb71cdd733ed24b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '    <style>
';
        $buffer .= $indent . '        @media only screen {
';
        $buffer .= $indent . '            body {
';
        $buffer .= $indent . '                margin: 0;
';
        $buffer .= $indent . '                -webkit-font-smoothing: antialiased;
';
        $buffer .= $indent . '                width:100% !important;
';
        $buffer .= $indent . '                background-color: #F3F3F3;
';
        $buffer .= $indent . '                -webkit-text-size-adjust:none;
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            .content img {
';
        $buffer .= $indent . '                max-width: 100%;
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    </style>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div style="width: 90%; max-width: 700px; border-radius: 10px; background-color: #fff; padding: 30px; margin-top: 15px; margin-left: auto; margin-right: auto;">
';
        $buffer .= $indent . '    <div class="forum-post" style="background-color: #fff;">
';
        $buffer .= $indent . '        <div class="header">
';
        $buffer .= $indent . '            <div class="topic ';
        $value = $context->find('firstpost');
        $buffer .= $this->section9434d5771c4657afdd045de3a17d59b3($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="picture left" style="margin-bottom: 20px;">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('authorpicture'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="subject" style="font-size: 24px; font-weight: bold; margin-bottom: 10px;">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="author" style="color: #919191">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section4d3e6e6773376ec2e7587a6ccdf608e5($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $value = $context->find('isprivatereply');
        $buffer .= $this->section273c6b4183befbfca17a049fab91c5fc($context, $indent, $value);
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div>
';
        $buffer .= $indent . '            <div class="left side" valign="top">
';
        $value = $context->find('grouppicture');
        $buffer .= $this->section9e6f0beda7f48007c4eaba0fe06566a0($context, $indent, $value);
        $value = $context->find('grouppicture');
        if (empty($value)) {
            
            $buffer .= $indent . '                    &nbsp;
';
        }
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="content" style="margin-top: 20px; margin-bottom: 20px;">
';
        $value = $context->find('attachments');
        $buffer .= $this->section5d58dfd295a87b202fe470a73db4c7a0($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div style="margin-top: 20px; font-size: 16px; line-height: 1.6">';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="commands" style="margin-top: 10px; margin-bottom: 10px; display: inline-flex; align-items: center">
';
        $value = $context->find('firstpost');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <a target="_blank" href="';
            $value = $this->resolveValue($context->find('parentpostlink'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '" style="display:inline-block; margin-bottom: 20px; margin-right: 10px; background-color: #fff; border: 1px solid #DCDCDC; color: #323232; font-size: 12px; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none; word-break: break-all; white-space: normal;">
';
            $buffer .= $indent . '                            ';
            $value = $context->find('str');
            $buffer .= $this->section08cb9137143cabe4f717457d440b51b2($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                        </a>
';
        }
        $value = $context->find('canreply');
        $buffer .= $this->sectionF03faf14b89b41c82466cdcf4625256f($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <div class="link">
';
        $buffer .= $indent . '                    <a target="_blank" href="';
        $value = $this->resolveValue($context->find('permalink'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" style="background-color: #007AFF; color: #fff; font-size: 12px; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none; word-break: break-all; white-space: normal;">
';
        $buffer .= $indent . '                        ';
        $value = $context->find('str');
        $buffer .= $this->section9717eb53ad3b343a31f7f2350a5c3b05($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>';

        return $buffer;
    }

    private function section9434d5771c4657afdd045de3a17d59b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'starter';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6239dd54c1dadeaf5476db1874bed6fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a target=\'_blank\' href=\'';
                $value = $this->resolveValue($context->find('authorlink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\'>';
                $value = $this->resolveValue($context->find('authorfullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE63a53b1895395e45a30eff532a83baf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{ postdate }}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('postdate'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4d3e6e6773376ec2e7587a6ccdf608e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' bynameondate, forum, {
                            "name": {{# quote }}<a target=\'_blank\' href=\'{{{ authorlink }}}\'>{{ authorfullname }}</a>{{/ quote }},
                            "date": {{# quote }}{{ postdate }}{{/ quote }}
                        } ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' bynameondate, forum, {
';
                $buffer .= $indent . '                            "name": ';
                $value = $context->find('quote');
                $buffer .= $this->section6239dd54c1dadeaf5476db1874bed6fc($context, $indent, $value);
                $buffer .= ',
';
                $buffer .= $indent . '                            "date": ';
                $value = $context->find('quote');
                $buffer .= $this->sectionE63a53b1895395e45a30eff532a83baf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        } ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC8e8c40f40ebf9b17e52b5d63f27ff2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postisprivatereply, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postisprivatereply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section273c6b4183befbfca17a049fab91c5fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="privatereplyinfo" style="margin-top: 10px; font-weight: bold;">
                    {{# str }} postisprivatereply, forum {{/ str }}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="privatereplyinfo" style="margin-top: 10px; font-weight: bold;">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionC8e8c40f40ebf9b17e52b5d63f27ff2c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e6f0beda7f48007c4eaba0fe06566a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{{ grouppicture }}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('grouppicture'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d58dfd295a87b202fe470a73db4c7a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="attachments">
                        {{{ attachments }}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="attachments">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('attachments'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section08cb9137143cabe4f717457d440b51b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' parent, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD469667440754f9f1f6f320a0cf89269(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reply, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03faf14b89b41c82466cdcf4625256f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a target="_blank" href="{{{ replylink }}}" style="display:inline-block; background-color: #fff; margin-bottom: 20px; border: 1px solid #007AFF; color: #007AFF; font-size: 12px; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none; word-break: break-all; white-space: normal;">
                            {{# str }} reply, forum {{/ str }}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a target="_blank" href="';
                $value = $this->resolveValue($context->find('replylink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="display:inline-block; background-color: #fff; margin-bottom: 20px; border: 1px solid #007AFF; color: #007AFF; font-size: 12px; font-weight: bold; padding: 10px 20px; border-radius: 5px; text-decoration: none; word-break: break-all; white-space: normal;">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionD469667440754f9f1f6f320a0cf89269($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9717eb53ad3b343a31f7f2350a5c3b05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postincontext, forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postincontext, forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
