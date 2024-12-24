<?php

class __Mustache_9bd456d6737ce1b25e7f4dc64080e089 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="ml-auto dropdown">
';
        $value = $context->find('settingsselector');
        $buffer .= $this->section3c1e4d0a1bf4f2a73756b5349861c7a4($context, $indent, $value);
        $value = $context->find('settingsselector');
        if (empty($value)) {
            
            $buffer .= $indent . '        <a href="#" class="';
            $value = $context->findDot('settings.excludetext');
            if (empty($value)) {
                
                $buffer .= 'dropdown-toggle';
            }
            $buffer .= ' btn btn-link ';
            $value = $context->findDot('settings.togglemoreicon');
            $buffer .= $this->sectionE8e03679aed55de44566d9c08754f13e($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '           role="button"
';
            $buffer .= $indent . '           data-toggle="dropdown"
';
            $buffer .= $indent . '           data-boundary="window"
';
            $buffer .= $indent . '           aria-haspopup="true"
';
            $buffer .= $indent . '           tabindex="0"
';
            $buffer .= $indent . '           aria-controls="forum-action-menu-';
            $value = $this->resolveValue($context->find('id'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '-menu"
';
            $buffer .= $indent . '           aria-label="';
            $value = $context->find('str');
            $buffer .= $this->section4c6133ff98512e01b5be00eba924e9bb($context, $indent, $value);
            $buffer .= '"
';
            $buffer .= $indent . '           aria-expanded="false">
';
            $value = $context->findDot('settings.togglemoreicon');
            $buffer .= $this->section714225b5e4564495ebeea5602cb2739d($context, $indent, $value);
            $value = $context->findDot('settings.togglemoreicon');
            if (empty($value)) {
                
                $buffer .= $indent . '                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                    <path d="M5.62117 14.9627L6.72197 15.1351C7.53458 15.2623 8.11491 16.0066 8.05506 16.8451L7.97396 17.9816C7.95034 18.3127 8.12672 18.6244 8.41885 18.7686L9.23303 19.1697C9.52516 19.3139 9.87399 19.2599 10.1126 19.0352L10.9307 18.262C11.5339 17.6917 12.4646 17.6917 13.0685 18.262L13.8866 19.0352C14.1252 19.2608 14.4733 19.3139 14.7662 19.1697L15.5819 18.7678C15.8733 18.6244 16.0489 18.3135 16.0253 17.9833L15.9441 16.8451C15.8843 16.0066 16.4646 15.2623 17.2772 15.1351L18.378 14.9627C18.6985 14.9128 18.9568 14.6671 19.0292 14.3433L19.23 13.4428C19.3025 13.119 19.1741 12.7831 18.9064 12.5962L17.9875 11.9526C17.3095 11.4774 17.1024 10.5495 17.5119 9.82051L18.067 8.83299C18.2284 8.54543 18.2017 8.18538 17.9993 7.92602L17.4363 7.2035C17.2339 6.94413 16.8969 6.83701 16.5867 6.93447L15.5221 7.26794C14.7355 7.51441 13.8969 7.1012 13.5945 6.31908L13.1866 5.26148C13.0669 4.95218 12.7748 4.7492 12.4496 4.75L11.5472 4.75242C11.222 4.75322 10.9307 4.95782 10.8126 5.26793L10.4149 6.31344C10.1157 7.1004 9.27319 7.51683 8.4842 7.26874L7.37553 6.92078C7.0645 6.82251 6.72591 6.93044 6.52355 7.19142L5.96448 7.91474C5.76212 8.17652 5.73771 8.53738 5.90228 8.82493L6.47 9.81487C6.88812 10.5446 6.68339 11.4814 6.00149 11.9591L5.0936 12.5954C4.82588 12.7831 4.69754 13.119 4.76998 13.442L4.97077 14.3425C5.04242 14.6671 5.30069 14.9128 5.62117 14.9627Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                    <path d="M13.5911 10.4089C14.4696 11.2875 14.4696 12.7125 13.5911 13.5911C12.7125 14.4696 11.2875 14.4696 10.4089 13.5911C9.53036 12.7125 9.53036 11.2875 10.4089 10.4089C11.2875 9.53036 12.7125 9.53036 13.5911 10.4089Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                </svg>
';
            }
            $value = $context->findDot('settings.excludetext');
            if (empty($value)) {
                
                $buffer .= $indent . '                ';
                $value = $context->find('str');
                $buffer .= $this->section2f3e1314eee82127f771d153b61eb44a($context, $indent, $value);
                $buffer .= '
';
            }
            $buffer .= $indent . '        </a>
';
        }
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right"
';
        $buffer .= $indent . '         aria-labelledby="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-menu"
';
        $buffer .= $indent . '         data-rel="menu-content"
';
        $buffer .= $indent . '         role="menu"
';
        $buffer .= $indent . '         id="forum-action-menu-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-menu">
';
        $value = $context->findDot('capabilities.favourite');
        $buffer .= $this->section4a3b97bb1bbb533176740a05c75cace4($context, $indent, $value);
        $value = $context->findDot('capabilities.pin');
        $buffer .= $this->section4c92459ba413de5918d4dab379aaf192($context, $indent, $value);
        $value = $context->findDot('capabilities.manage');
        $buffer .= $this->sectionFf9a33e4d11b687d41e5681391452d66($context, $indent, $value);
        $value = $context->findDot('settings.excludesubscription');
        if (empty($value)) {
            
            if ($partial = $this->mustache->loadPartial('forum/discussion_subscription_toggle')) {
                $buffer .= $partial->renderInternal($context, $indent . '            ');
            }
        }
        $value = $context->find('unread');
        $buffer .= $this->sectionAeecc4e637bc420fce137a86a8522e07($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section4c6133ff98512e01b5be00eba924e9bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'togglediscussionmenu, mod_forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'togglediscussionmenu, mod_forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f3e1314eee82127f771d153b61eb44a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' settings, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' settings, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c1e4d0a1bf4f2a73756b5349861c7a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <button class="dropdown-toggle btn btn-secondary"
                data-toggle="dropdown"
                aria-haspopup="true"
                tabindex="0"
                aria-controls="forum-action-menu-{{id}}-menu"
                aria-label="{{#str}}togglediscussionmenu, mod_forum{{/str}}"
                aria-expanded="false">
            {{#str}} settings, mod_forum {{/str}}
        </button>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <button class="dropdown-toggle btn btn-secondary"
';
                $buffer .= $indent . '                data-toggle="dropdown"
';
                $buffer .= $indent . '                aria-haspopup="true"
';
                $buffer .= $indent . '                tabindex="0"
';
                $buffer .= $indent . '                aria-controls="forum-action-menu-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-menu"
';
                $buffer .= $indent . '                aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section4c6133ff98512e01b5be00eba924e9bb($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                aria-expanded="false">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section2f3e1314eee82127f771d153b61eb44a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8e03679aed55de44566d9c08754f13e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'btn-icon colour-inherit text-decoration-none d-flex align-items-center justify-content-center';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'btn-icon colour-inherit text-decoration-none d-flex align-items-center justify-content-center';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section714225b5e4564495ebeea5602cb2739d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z"></path>
                    <path fill="currentColor" d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"></path>
                    <path fill="currentColor" d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"></path>
                </svg>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                    <path fill="currentColor" d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z"></path>
';
                $buffer .= $indent . '                    <path fill="currentColor" d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"></path>
';
                $buffer .= $indent . '                    <path fill="currentColor" d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"></path>
';
                $buffer .= $indent . '                </svg>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a3b97bb1bbb533176740a05c75cace4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_favourite_toggle}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_favourite_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c92459ba413de5918d4dab379aaf192(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> mod_forum/discussion_pin_toggle}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/discussion_pin_toggle')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf9a33e4d11b687d41e5681391452d66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{^istimelocked}}
                {{> forum/discussion_lock_toggle }}
            {{/istimelocked}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('istimelocked');
                if (empty($value)) {
                    
                    if ($partial = $this->mustache->loadPartial('forum/discussion_lock_toggle')) {
                        $buffer .= $partial->renderInternal($context, $indent . '                ');
                    }
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAeecc4e637bc420fce137a86a8522e07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> forum/mark_as_read }}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('forum/mark_as_read')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
