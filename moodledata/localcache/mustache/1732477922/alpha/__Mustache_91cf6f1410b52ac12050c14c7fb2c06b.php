<?php

class __Mustache_91cf6f1410b52ac12050c14c7fb2c06b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<footer id="s-page-footer" class="wrapper-page ';
        $value = $context->find('footercenter');
        $buffer .= $this->sectionD48c49af31da8c58ebf1b33f5bb1ae89($context, $indent, $value);
        $buffer .= '" ';
        $value = $context->find('footerbgimg');
        $buffer .= $this->sectionB937d135a85d443fac01fab45908da77($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('footercustomcss');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <div class="';
        $value = $context->find('isfrontpage');
        if (empty($value)) {
            
            $buffer .= 'wrapper-fw';
        }
        $buffer .= ' ';
        $value = $context->find('isfrontpage');
        $buffer .= $this->section81636657c9d6f9133e14c1fe49987043($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('footerblock1');
        $buffer .= $this->section7c9f93418ed20dc0958b2984104644b3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footerblock2');
        $buffer .= $this->section4a5bfb5c8c17d3449f947bdacd94ec99($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('footerblock3');
        $buffer .= $this->sectionD9b4f77ed1c1f6bd6cc0d688377412e4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-footer--icons w-100">
';
        $buffer .= $indent . '            <ul class="rui-footer--contact">
';
        $value = $context->find('website');
        $buffer .= $this->section357d9911507fddc660d30395dd60813e($context, $indent, $value);
        $value = $context->find('mobile');
        $buffer .= $this->sectionE61186e754bfc5f22d2b4cf39558b826($context, $indent, $value);
        $value = $context->find('mail');
        $buffer .= $this->sectionFa240c133e0bd3a97a26af1f57e8bf6e($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('showsociallist');
        $buffer .= $this->sectionDe6b35a7ee73a46692711aa49c56b148($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-footer-copy rui-footer-content">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('footercopy'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('showfooterbuttons');
        $buffer .= $this->section6085d5163234fa8646c5716dbd15716f($context, $indent, $value);
        $buffer .= $indent . '        <div class="tool_usertours-resettourcontainer">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</footer>
';
        $buffer .= $indent . '
';
        $value = $this->resolveValue($context->findDot('output.standard_end_of_body_html'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('displaycustomalert');
        $buffer .= $this->section2522b73afcc251c96e50e744d0138d46($context, $indent, $value);
        $value = $context->find('closecustomalert');
        $buffer .= $this->sectionC539810d7aa2372637a50f6922bc550a($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('hiddensidebar');
        if (empty($value)) {
            
            $value = $context->find('showmycoursesbox');
            $buffer .= $this->section6a98fd3ca9956b56967ac899327e0eb3($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener("DOMContentLoaded", function() {
';
        $buffer .= $indent . '    var links = document.querySelectorAll(\'a[target="_blank"]\');
';
        $buffer .= $indent . '    links.forEach(function(link) {
';
        $buffer .= $indent . '        link.setAttribute(\'aria-describedby\', \'';
        $value = $context->find('str');
        $buffer .= $this->section276ee829ae8e96f25c4239724a8fbe16($context, $indent, $value);
        $buffer .= '\');
';
        $buffer .= $indent . '    });
';
        $buffer .= $indent . '});
';
        $buffer .= $indent . '</script>';

        return $buffer;
    }

    private function sectionD48c49af31da8c58ebf1b33f5bb1ae89(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'text-center';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'text-center';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB937d135a85d443fac01fab45908da77(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-image: url(\'{{{footerbgimg}}}\');" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="background-image: url(\'';
                $value = $this->resolveValue($context->find('footerbgimg'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81636657c9d6f9133e14c1fe49987043(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'wrapper-xl';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'wrapper-xl';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c9f93418ed20dc0958b2984104644b3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-footer-content rui-footer-block--1 text-left">
                <div class="mb-5">
                    {{{ footerblock1 }}}
                </div>
            </div>
            <hr class="rui-footer-hr--1" />
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-footer-content rui-footer-block--1 text-left">
';
                $buffer .= $indent . '                <div class="mb-5">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('footerblock1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <hr class="rui-footer-hr--1" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a5bfb5c8c17d3449f947bdacd94ec99(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-footer-content rui-footer-block--2">
                {{{ footerblock2 }}}
            </div>
            <hr class="rui-footer-hr--2" />
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-footer-content rui-footer-block--2">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footerblock2'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <hr class="rui-footer-hr--2" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD9b4f77ed1c1f6bd6cc0d688377412e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-footer-content  rui-footer-block--3">
                {{{ footerblock3 }}}
            </div>
            <hr class="rui-footer-hr--3" />
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-footer-content  rui-footer-block--3">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('footerblock3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <hr class="rui-footer-hr--3" />
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section357d9911507fddc660d30395dd60813e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 12C15.25 16.5 13.2426 19.25 12 19.25C10.7574 19.25 8.75 16.5 8.75 12C8.75 7.5 10.7574 4.75 12 4.75C13.2426 4.75 15.25 7.5 15.25 12Z"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12H12H19"></path>
                        </svg>
                        <a class="ml-1" href="{{cwebsiteurl}}">{{{website}}}</a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                            <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 12C15.25 16.5 13.2426 19.25 12 19.25C10.7574 19.25 8.75 16.5 8.75 12C8.75 7.5 10.7574 4.75 12 4.75C13.2426 4.75 15.25 7.5 15.25 12Z"></path>
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 12H12H19"></path>
';
                $buffer .= $indent . '                        </svg>
';
                $buffer .= $indent . '                        <a class="ml-1" href="';
                $value = $this->resolveValue($context->find('cwebsiteurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('website'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE61186e754bfc5f22d2b4cf39558b826(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.2502 19.25H8.75C7.64543 19.25 6.75 18.3546 6.75 17.25V6.75C6.75 5.64543 7.64543 4.75 8.75 4.75H15.2502C16.3548 4.75 17.2502 5.64543 17.2502 6.75V17.25C17.2502 18.3546 16.3548 19.25 15.2502 19.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M11.75 16.75H12.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                        <span class="ml-1">{{{mobile}}}</span>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                            <path d="M15.2502 19.25H8.75C7.64543 19.25 6.75 18.3546 6.75 17.25V6.75C6.75 5.64543 7.64543 4.75 8.75 4.75H15.2502C16.3548 4.75 17.2502 5.64543 17.2502 6.75V17.25C17.2502 18.3546 16.3548 19.25 15.2502 19.25Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                            <path d="M11.75 16.75H12.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                        </svg>
';
                $buffer .= $indent . '                        <span class="ml-1">';
                $value = $this->resolveValue($context->find('mobile'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa240c133e0bd3a97a26af1f57e8bf6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 6.5L12 12.25L18.5 6.5"></path>
                        </svg>
                        <a class="ml-1" href="mailto:{{mail}}">{{{mail}}}</a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 7.75C4.75 6.64543 5.64543 5.75 6.75 5.75H17.25C18.3546 5.75 19.25 6.64543 19.25 7.75V16.25C19.25 17.3546 18.3546 18.25 17.25 18.25H6.75C5.64543 18.25 4.75 17.3546 4.75 16.25V7.75Z"></path>
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.5 6.5L12 12.25L18.5 6.5"></path>
';
                $buffer .= $indent . '                        </svg>
';
                $buffer .= $indent . '                        <a class="ml-1" href="mailto:';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('mail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0cc5ef3b20978ee6fd3fa25cd279b3e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'd-flex justify-content-center';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'd-flex justify-content-center';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCc6ceb914ddd16402ae44fe1dcb31742(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            <a href="{{facebook}}" target="_blank" class="text-decoration-none facebook">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('facebook'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="text-decoration-none facebook">
';
                $buffer .= $indent . '                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                    <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc42aee21235e0853b04e8e0edd087d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            <a href="{{twitter}}" target="_blank" class="text-decoration-none twitter">
                                <svg width="24" height="25" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2856 18.172L31.2216 8H29.1048L21.3424 16.8304L15.1472 8H8L17.3704 21.3544L8 32.02H10.1168L18.3088 22.6928L24.8528 32.02H32M10.8808 9.5632H14.1328L29.1032 30.5336H25.8504" fill="currentColor"/>
                                </svg>
                            </a>
                        </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('twitter'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="text-decoration-none twitter">
';
                $buffer .= $indent . '                                <svg width="24" height="25" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                    <path d="M22.2856 18.172L31.2216 8H29.1048L21.3424 16.8304L15.1472 8H8L17.3704 21.3544L8 32.02H10.1168L18.3088 22.6928L24.8528 32.02H32M10.8808 9.5632H14.1328L29.1032 30.5336H25.8504" fill="currentColor"/>
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB4270a052330b5d6bc8abed987ce0638(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            <a href="{{linkedin}}" target="_blank" class="text-decoration-none linkedin">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.039,19.043H16.078V14.4c0-1.106-.023-2.53-1.544-2.53-1.544,0-1.78,1.2-1.78,2.449v4.722H9.792V9.5h2.845v1.3h.039a3.12,3.12,0,0,1,2.808-1.542c3,0,3.556,1.975,3.556,4.546v5.238ZM6.447,8.194A1.72,1.72,0,1,1,8.168,6.473,1.719,1.719,0,0,1,6.447,8.194ZM7.932,19.043H4.963V9.5H7.932ZM20.521,2H3.476A1.458,1.458,0,0,0,2,3.441V20.559A1.458,1.458,0,0,0,3.476,22H20.518A1.463,1.463,0,0,0,22,20.559V3.441A1.464,1.464,0,0,0,20.518,2Z" fill="currentColor" />
                                </svg>
                            </a>
                        </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('linkedin'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="text-decoration-none linkedin">
';
                $buffer .= $indent . '                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
';
                $buffer .= $indent . '                                    <path d="M19.039,19.043H16.078V14.4c0-1.106-.023-2.53-1.544-2.53-1.544,0-1.78,1.2-1.78,2.449v4.722H9.792V9.5h2.845v1.3h.039a3.12,3.12,0,0,1,2.808-1.542c3,0,3.556,1.975,3.556,4.546v5.238ZM6.447,8.194A1.72,1.72,0,1,1,8.168,6.473,1.719,1.719,0,0,1,6.447,8.194ZM7.932,19.043H4.963V9.5H7.932ZM20.521,2H3.476A1.458,1.458,0,0,0,2,3.441V20.559A1.458,1.458,0,0,0,3.476,22H20.518A1.463,1.463,0,0,0,22,20.559V3.441A1.464,1.464,0,0,0,20.518,2Z" fill="currentColor" />
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90ccdd67fb44f1b296972f9f1cf29ced(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            <a href="{{youtube}}" target="_blank" class="text-decoration-none youtube">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.006 19.012H11.986C11.924 19.012 5.721 19 4.156 18.575C3.29543 18.3432 2.62335 17.6707 2.392 16.81C2.11058 15.2224 1.97469 13.6123 1.986 12C1.97873 10.385 2.11831 8.77271 2.403 7.183C2.64071 6.32151 3.30983 5.64595 4.169 5.4C5.691 5 11.723 5 11.979 5H12C12.063 5 18.282 5.012 19.831 5.437C20.6898 5.67001 21.3605 6.3411 21.593 7.2C21.8834 8.79354 22.0197 10.4113 22 12.031C22.007 13.644 21.8671 15.2543 21.582 16.842C21.3477 17.7016 20.6752 18.3726 19.815 18.605C18.295 19.008 12.262 19.012 12.006 19.012ZM10.006 9.005L10.001 15.005L15.213 12.005L10.006 9.005Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('youtube'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="text-decoration-none youtube">
';
                $buffer .= $indent . '                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                    <path d="M12.006 19.012H11.986C11.924 19.012 5.721 19 4.156 18.575C3.29543 18.3432 2.62335 17.6707 2.392 16.81C2.11058 15.2224 1.97469 13.6123 1.986 12C1.97873 10.385 2.11831 8.77271 2.403 7.183C2.64071 6.32151 3.30983 5.64595 4.169 5.4C5.691 5 11.723 5 11.979 5H12C12.063 5 18.282 5.012 19.831 5.437C20.6898 5.67001 21.3605 6.3411 21.593 7.2C21.8834 8.79354 22.0197 10.4113 22 12.031C22.007 13.644 21.8671 15.2543 21.582 16.842C21.3477 17.7016 20.6752 18.3726 19.815 18.605C18.295 19.008 12.262 19.012 12.006 19.012ZM10.006 9.005L10.001 15.005L15.213 12.005L10.006 9.005Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE74754e7d1db1d10dca6873a8ef3478e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li>
                            <a href="{{instagram}}" target="_blank" class="text-decoration-none instagram">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.002 21.041C9.54195 21.041 9.25195 21.028 8.29195 20.986C7.54332 20.9614 6.80439 20.8092 6.10695 20.536C4.90026 20.0664 3.94609 19.1119 3.47695 17.905C3.21426 17.205 3.07257 16.4655 3.05795 15.718C3.00195 14.76 3.00195 14.446 3.00195 12.005C3.00195 9.538 3.01495 9.25 3.05795 8.295C3.07289 7.54853 3.21457 6.81001 3.47695 6.111C3.94558 4.90253 4.9013 3.94718 6.10995 3.479C6.8086 3.21521 7.5473 3.07315 8.29395 3.059C9.24895 3.005 9.56295 3.005 12.002 3.005C14.482 3.005 14.767 3.018 15.712 3.059C16.4605 3.07327 17.2012 3.21531 17.902 3.479C19.1103 3.94771 20.0658 4.90288 20.535 6.111C20.8021 6.8202 20.9445 7.57026 20.956 8.328C21.012 9.286 21.012 9.59901 21.012 12.039C21.012 14.479 20.998 14.799 20.956 15.746C20.9411 16.4942 20.799 17.2344 20.536 17.935C20.0656 19.1427 19.11 20.0976 17.902 20.567C17.2022 20.8292 16.4631 20.9709 15.716 20.986C14.761 21.041 14.448 21.041 12.002 21.041ZM11.968 4.588C9.52195 4.588 9.26795 4.6 8.31295 4.643C7.74294 4.65056 7.17843 4.75575 6.64395 4.954C5.85471 5.25601 5.23018 5.878 4.92495 6.666C4.72517 7.2063 4.61996 7.77698 4.61395 8.353C4.56095 9.322 4.56095 9.576 4.56095 12.005C4.56095 14.405 4.56995 14.696 4.61395 15.659C4.62291 16.2292 4.72805 16.7938 4.92495 17.329C5.23063 18.1165 5.85505 18.738 6.64395 19.04C7.17807 19.2396 7.7428 19.3448 8.31295 19.351C9.28095 19.407 9.53595 19.407 11.968 19.407C14.421 19.407 14.675 19.395 15.622 19.351C16.1924 19.3441 16.7573 19.2389 17.292 19.04C18.0764 18.7354 18.6969 18.1153 19.002 17.331C19.2014 16.7903 19.3065 16.2193 19.313 15.643H19.324C19.367 14.687 19.367 14.432 19.367 11.989C19.367 9.54601 19.356 9.289 19.313 8.334C19.304 7.76446 19.1988 7.20052 19.002 6.666C18.6976 5.88058 18.077 5.2593 17.292 4.954C16.7574 4.75475 16.1924 4.64953 15.622 4.643C14.655 4.588 14.402 4.588 11.968 4.588ZM12.002 16.624C10.1319 16.6252 8.44537 15.4997 7.72882 13.7725C7.01226 12.0452 7.40686 10.0563 8.72858 8.73347C10.0503 7.4106 12.0388 7.01428 13.7667 7.72934C15.4946 8.4444 16.6215 10.13 16.622 12C16.6192 14.5511 14.553 16.619 12.002 16.624ZM12.002 8.998C10.3451 8.998 9.00195 10.3412 9.00195 11.998C9.00195 13.6549 10.3451 14.998 12.002 14.998C13.6588 14.998 15.002 13.6549 15.002 11.998C14.9981 10.3427 13.6572 9.00185 12.002 8.998ZM16.802 8.28501C16.2074 8.2828 15.7269 7.79959 15.728 7.20501C15.7291 6.61043 16.2114 6.12901 16.806 6.12901C17.4005 6.12901 17.8828 6.61042 17.884 7.205C17.8842 7.49187 17.7702 7.76703 17.5672 7.96968C17.3642 8.17234 17.0888 8.2858 16.802 8.28501Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('instagram'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" target="_blank" class="text-decoration-none instagram">
';
                $buffer .= $indent . '                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                    <path d="M12.002 21.041C9.54195 21.041 9.25195 21.028 8.29195 20.986C7.54332 20.9614 6.80439 20.8092 6.10695 20.536C4.90026 20.0664 3.94609 19.1119 3.47695 17.905C3.21426 17.205 3.07257 16.4655 3.05795 15.718C3.00195 14.76 3.00195 14.446 3.00195 12.005C3.00195 9.538 3.01495 9.25 3.05795 8.295C3.07289 7.54853 3.21457 6.81001 3.47695 6.111C3.94558 4.90253 4.9013 3.94718 6.10995 3.479C6.8086 3.21521 7.5473 3.07315 8.29395 3.059C9.24895 3.005 9.56295 3.005 12.002 3.005C14.482 3.005 14.767 3.018 15.712 3.059C16.4605 3.07327 17.2012 3.21531 17.902 3.479C19.1103 3.94771 20.0658 4.90288 20.535 6.111C20.8021 6.8202 20.9445 7.57026 20.956 8.328C21.012 9.286 21.012 9.59901 21.012 12.039C21.012 14.479 20.998 14.799 20.956 15.746C20.9411 16.4942 20.799 17.2344 20.536 17.935C20.0656 19.1427 19.11 20.0976 17.902 20.567C17.2022 20.8292 16.4631 20.9709 15.716 20.986C14.761 21.041 14.448 21.041 12.002 21.041ZM11.968 4.588C9.52195 4.588 9.26795 4.6 8.31295 4.643C7.74294 4.65056 7.17843 4.75575 6.64395 4.954C5.85471 5.25601 5.23018 5.878 4.92495 6.666C4.72517 7.2063 4.61996 7.77698 4.61395 8.353C4.56095 9.322 4.56095 9.576 4.56095 12.005C4.56095 14.405 4.56995 14.696 4.61395 15.659C4.62291 16.2292 4.72805 16.7938 4.92495 17.329C5.23063 18.1165 5.85505 18.738 6.64395 19.04C7.17807 19.2396 7.7428 19.3448 8.31295 19.351C9.28095 19.407 9.53595 19.407 11.968 19.407C14.421 19.407 14.675 19.395 15.622 19.351C16.1924 19.3441 16.7573 19.2389 17.292 19.04C18.0764 18.7354 18.6969 18.1153 19.002 17.331C19.2014 16.7903 19.3065 16.2193 19.313 15.643H19.324C19.367 14.687 19.367 14.432 19.367 11.989C19.367 9.54601 19.356 9.289 19.313 8.334C19.304 7.76446 19.1988 7.20052 19.002 6.666C18.6976 5.88058 18.077 5.2593 17.292 4.954C16.7574 4.75475 16.1924 4.64953 15.622 4.643C14.655 4.588 14.402 4.588 11.968 4.588ZM12.002 16.624C10.1319 16.6252 8.44537 15.4997 7.72882 13.7725C7.01226 12.0452 7.40686 10.0563 8.72858 8.73347C10.0503 7.4106 12.0388 7.01428 13.7667 7.72934C15.4946 8.4444 16.6215 10.13 16.622 12C16.6192 14.5511 14.553 16.619 12.002 16.624ZM12.002 8.998C10.3451 8.998 9.00195 10.3412 9.00195 11.998C9.00195 13.6549 10.3451 14.998 12.002 14.998C13.6588 14.998 15.002 13.6549 15.002 11.998C14.9981 10.3427 13.6572 9.00185 12.002 8.998ZM16.802 8.28501C16.2074 8.2828 15.7269 7.79959 15.728 7.20501C15.7291 6.61043 16.2114 6.12901 16.806 6.12901C17.4005 6.12901 17.8828 6.61042 17.884 7.205C17.8842 7.49187 17.7702 7.76703 17.5672 7.96968C17.3642 8.17234 17.0888 8.2858 16.802 8.28501Z" fill="currentColor"></path>
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d2f57ac44949f7e6f3d04ae54193cf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{customsocialicon}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('customsocialicon'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe6b35a7ee73a46692711aa49c56b148(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-footer--box w-100 {{#footercenter}}text-center{{/footercenter}}">
                <ul class="rui-footer--social {{#footercenter}}d-flex justify-content-center{{/footercenter}}">
                    {{#facebook}}
                        <li>
                            <a href="{{facebook}}" target="_blank" class="text-decoration-none facebook">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.00195 12.002C2.00312 16.9214 5.58036 21.1101 10.439 21.881V14.892H7.90195V12.002H10.442V9.80204C10.3284 8.75958 10.6845 7.72064 11.4136 6.96698C12.1427 6.21332 13.1693 5.82306 14.215 5.90204C14.9655 5.91417 15.7141 5.98101 16.455 6.10205V8.56104H15.191C14.7558 8.50405 14.3183 8.64777 14.0017 8.95171C13.6851 9.25566 13.5237 9.68693 13.563 10.124V12.002H16.334L15.891 14.893H13.563V21.881C18.8174 21.0506 22.502 16.2518 21.9475 10.9611C21.3929 5.67041 16.7932 1.73997 11.4808 2.01722C6.16831 2.29447 2.0028 6.68235 2.00195 12.002Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    {{/facebook}}

                    {{#twitter}}
                        <li>
                            <a href="{{twitter}}" target="_blank" class="text-decoration-none twitter">
                                <svg width="24" height="25" viewBox="0 0 39 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.2856 18.172L31.2216 8H29.1048L21.3424 16.8304L15.1472 8H8L17.3704 21.3544L8 32.02H10.1168L18.3088 22.6928L24.8528 32.02H32M10.8808 9.5632H14.1328L29.1032 30.5336H25.8504" fill="currentColor"/>
                                </svg>
                            </a>
                        </li>
                    {{/twitter}}

                    {{#linkedin}}
                        <li>
                            <a href="{{linkedin}}" target="_blank" class="text-decoration-none linkedin">
                                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none">
                                    <path d="M19.039,19.043H16.078V14.4c0-1.106-.023-2.53-1.544-2.53-1.544,0-1.78,1.2-1.78,2.449v4.722H9.792V9.5h2.845v1.3h.039a3.12,3.12,0,0,1,2.808-1.542c3,0,3.556,1.975,3.556,4.546v5.238ZM6.447,8.194A1.72,1.72,0,1,1,8.168,6.473,1.719,1.719,0,0,1,6.447,8.194ZM7.932,19.043H4.963V9.5H7.932ZM20.521,2H3.476A1.458,1.458,0,0,0,2,3.441V20.559A1.458,1.458,0,0,0,3.476,22H20.518A1.463,1.463,0,0,0,22,20.559V3.441A1.464,1.464,0,0,0,20.518,2Z" fill="currentColor" />
                                </svg>
                            </a>
                        </li>
                    {{/linkedin}}

                    {{#youtube}}
                        <li>
                            <a href="{{youtube}}" target="_blank" class="text-decoration-none youtube">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.006 19.012H11.986C11.924 19.012 5.721 19 4.156 18.575C3.29543 18.3432 2.62335 17.6707 2.392 16.81C2.11058 15.2224 1.97469 13.6123 1.986 12C1.97873 10.385 2.11831 8.77271 2.403 7.183C2.64071 6.32151 3.30983 5.64595 4.169 5.4C5.691 5 11.723 5 11.979 5H12C12.063 5 18.282 5.012 19.831 5.437C20.6898 5.67001 21.3605 6.3411 21.593 7.2C21.8834 8.79354 22.0197 10.4113 22 12.031C22.007 13.644 21.8671 15.2543 21.582 16.842C21.3477 17.7016 20.6752 18.3726 19.815 18.605C18.295 19.008 12.262 19.012 12.006 19.012ZM10.006 9.005L10.001 15.005L15.213 12.005L10.006 9.005Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    {{/youtube}}

                    {{#instagram}}
                        <li>
                            <a href="{{instagram}}" target="_blank" class="text-decoration-none instagram">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.002 21.041C9.54195 21.041 9.25195 21.028 8.29195 20.986C7.54332 20.9614 6.80439 20.8092 6.10695 20.536C4.90026 20.0664 3.94609 19.1119 3.47695 17.905C3.21426 17.205 3.07257 16.4655 3.05795 15.718C3.00195 14.76 3.00195 14.446 3.00195 12.005C3.00195 9.538 3.01495 9.25 3.05795 8.295C3.07289 7.54853 3.21457 6.81001 3.47695 6.111C3.94558 4.90253 4.9013 3.94718 6.10995 3.479C6.8086 3.21521 7.5473 3.07315 8.29395 3.059C9.24895 3.005 9.56295 3.005 12.002 3.005C14.482 3.005 14.767 3.018 15.712 3.059C16.4605 3.07327 17.2012 3.21531 17.902 3.479C19.1103 3.94771 20.0658 4.90288 20.535 6.111C20.8021 6.8202 20.9445 7.57026 20.956 8.328C21.012 9.286 21.012 9.59901 21.012 12.039C21.012 14.479 20.998 14.799 20.956 15.746C20.9411 16.4942 20.799 17.2344 20.536 17.935C20.0656 19.1427 19.11 20.0976 17.902 20.567C17.2022 20.8292 16.4631 20.9709 15.716 20.986C14.761 21.041 14.448 21.041 12.002 21.041ZM11.968 4.588C9.52195 4.588 9.26795 4.6 8.31295 4.643C7.74294 4.65056 7.17843 4.75575 6.64395 4.954C5.85471 5.25601 5.23018 5.878 4.92495 6.666C4.72517 7.2063 4.61996 7.77698 4.61395 8.353C4.56095 9.322 4.56095 9.576 4.56095 12.005C4.56095 14.405 4.56995 14.696 4.61395 15.659C4.62291 16.2292 4.72805 16.7938 4.92495 17.329C5.23063 18.1165 5.85505 18.738 6.64395 19.04C7.17807 19.2396 7.7428 19.3448 8.31295 19.351C9.28095 19.407 9.53595 19.407 11.968 19.407C14.421 19.407 14.675 19.395 15.622 19.351C16.1924 19.3441 16.7573 19.2389 17.292 19.04C18.0764 18.7354 18.6969 18.1153 19.002 17.331C19.2014 16.7903 19.3065 16.2193 19.313 15.643H19.324C19.367 14.687 19.367 14.432 19.367 11.989C19.367 9.54601 19.356 9.289 19.313 8.334C19.304 7.76446 19.1988 7.20052 19.002 6.666C18.6976 5.88058 18.077 5.2593 17.292 4.954C16.7574 4.75475 16.1924 4.64953 15.622 4.643C14.655 4.588 14.402 4.588 11.968 4.588ZM12.002 16.624C10.1319 16.6252 8.44537 15.4997 7.72882 13.7725C7.01226 12.0452 7.40686 10.0563 8.72858 8.73347C10.0503 7.4106 12.0388 7.01428 13.7667 7.72934C15.4946 8.4444 16.6215 10.13 16.622 12C16.6192 14.5511 14.553 16.619 12.002 16.624ZM12.002 8.998C10.3451 8.998 9.00195 10.3412 9.00195 11.998C9.00195 13.6549 10.3451 14.998 12.002 14.998C13.6588 14.998 15.002 13.6549 15.002 11.998C14.9981 10.3427 13.6572 9.00185 12.002 8.998ZM16.802 8.28501C16.2074 8.2828 15.7269 7.79959 15.728 7.20501C15.7291 6.61043 16.2114 6.12901 16.806 6.12901C17.4005 6.12901 17.8828 6.61042 17.884 7.205C17.8842 7.49187 17.7702 7.76703 17.5672 7.96968C17.3642 8.17234 17.0888 8.2858 16.802 8.28501Z" fill="currentColor"></path>
                                </svg>
                            </a>
                        </li>
                    {{/instagram}}

                    {{#customsocialicon}}
                        {{{customsocialicon}}}
                    {{/customsocialicon}}
                </ul>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-footer--box w-100 ';
                $value = $context->find('footercenter');
                $buffer .= $this->sectionD48c49af31da8c58ebf1b33f5bb1ae89($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                <ul class="rui-footer--social ';
                $value = $context->find('footercenter');
                $buffer .= $this->section0cc5ef3b20978ee6fd3fa25cd279b3e0($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('facebook');
                $buffer .= $this->sectionCc6ceb914ddd16402ae44fe1dcb31742($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('twitter');
                $buffer .= $this->sectionEc42aee21235e0853b04e8e0edd087d0($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('linkedin');
                $buffer .= $this->sectionB4270a052330b5d6bc8abed987ce0638($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('youtube');
                $buffer .= $this->section90ccdd67fb44f1b296972f9f1cf29ced($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('instagram');
                $buffer .= $this->sectionE74754e7d1db1d10dca6873a8ef3478e($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('customsocialicon');
                $buffer .= $this->section1d2f57ac44949f7e6f3d04ae54193cf5($context, $indent, $value);
                $buffer .= $indent . '                </ul>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f491a985ea3d989a611d2145ff442a4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="helplink">{{{ output.page_doc_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="helplink">';
                $value = $this->resolveValue($context->findDot('output.page_doc_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88bdab471494298f45710e9578cdc145(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="supportlink">{{{ output.services_support_link }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="supportlink">';
                $value = $this->resolveValue($context->findDot('output.services_support_link'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b1f51dbdfb1c998471f1e1b9ba38327(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="suportemail">{{{ output.supportemail }}}</div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="suportemail">';
                $value = $this->resolveValue($context->findDot('output.supportemail'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6085d5163234fa8646c5716dbd15716f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-footer--btns-box mt-3">
                <div id="course-footer">{{{ output.course_footer }}}</div>

                <div class="rui-footer-btns">
                    {{# output.page_doc_link }}
                    <div class="helplink">{{{ output.page_doc_link }}}</div>
                    {{/ output.page_doc_link }}

                    {{# output.services_support_link }}
                    <div class="supportlink">{{{ output.services_support_link }}}</div>
                    {{/ output.services_support_link }}

                    {{# output.supportemail }}
                    <div class="suportemail">{{{ output.supportemail }}}</div>
                    {{/ output.supportemail }}

                    {{{ output.standard_footer_html }}}
                </div>

                <div class="rui-debug footer-content-debugging w-100 d-block mt-4 small">{{{ output.debug_footer_html }}}</div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-footer--btns-box mt-3">
';
                $buffer .= $indent . '                <div id="course-footer">';
                $value = $this->resolveValue($context->findDot('output.course_footer'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="rui-footer-btns">
';
                $value = $context->findDot('output.page_doc_link');
                $buffer .= $this->section1f491a985ea3d989a611d2145ff442a4($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.services_support_link');
                $buffer .= $this->section88bdab471494298f45710e9578cdc145($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('output.supportemail');
                $buffer .= $this->section8b1f51dbdfb1c998471f1e1b9ba38327($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->findDot('output.standard_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                <div class="rui-debug footer-content-debugging w-100 d-block mt-4 small">';
                $value = $this->resolveValue($context->findDot('output.debug_footer_html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33eb4998ef9dfe8c0bd1dea103a52ff2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hide_alert';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hide_alert';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5df32c823635343f7f995cd871927699(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'close_once';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'close_once';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2522b73afcc251c96e50e744d0138d46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="customAlert{{customalertid}}" class="rui-custom-alert rui-custom-alert--light alert alert-dismissible {{#closecustomalert}}hide_alert{{/closecustomalert}}" role="alert">
        <div class="rui-custom-alert-content">
            {{{customalerthtml}}}
        </div>
        <button class="rui-custom-alert-close {{#closecustomalert}}close_once{{/closecustomalert}}" type="button" data-dismiss="alert" aria-label="Close">
            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 6.75L6.75 17.25"></path>
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 6.75L17.25 17.25"></path>
            </svg>
        </button>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="customAlert';
                $value = $this->resolveValue($context->find('customalertid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-custom-alert rui-custom-alert--light alert alert-dismissible ';
                $value = $context->find('closecustomalert');
                $buffer .= $this->section33eb4998ef9dfe8c0bd1dea103a52ff2($context, $indent, $value);
                $buffer .= '" role="alert">
';
                $buffer .= $indent . '        <div class="rui-custom-alert-content">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('customalerthtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <button class="rui-custom-alert-close ';
                $value = $context->find('closecustomalert');
                $buffer .= $this->section5df32c823635343f7f995cd871927699($context, $indent, $value);
                $buffer .= '" type="button" data-dismiss="alert" aria-label="Close">
';
                $buffer .= $indent . '            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 6.75L6.75 17.25"></path>
';
                $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 6.75L17.25 17.25"></path>
';
                $buffer .= $indent . '            </svg>
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section09ac58df8b774843b5b1d2dfd9fe8b26(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        $(document).on(\'click\', \'.close_once\', function() {
            localStorage.setItem(\'hideAlert{{customalertid}}\', \'true\');
            $(\'body\').removeClass(\'show-custom-alert\');
        });

        $( document ).ready(function() {
            if (localStorage.getItem(\'hideAlert{{customalertid}}\')) {
                $(\'.hide_alert\').addClass(\'hide\');
            } else {
                $(\'.hide_alert\').addClass(\'show\');
                $(\'body\').addClass(\'show-custom-alert\');
            }
        });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        $(document).on(\'click\', \'.close_once\', function() {
';
                $buffer .= $indent . '            localStorage.setItem(\'hideAlert';
                $value = $this->resolveValue($context->find('customalertid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\', \'true\');
';
                $buffer .= $indent . '            $(\'body\').removeClass(\'show-custom-alert\');
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        $( document ).ready(function() {
';
                $buffer .= $indent . '            if (localStorage.getItem(\'hideAlert';
                $value = $this->resolveValue($context->find('customalertid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\')) {
';
                $buffer .= $indent . '                $(\'.hide_alert\').addClass(\'hide\');
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(\'.hide_alert\').addClass(\'show\');
';
                $buffer .= $indent . '                $(\'body\').addClass(\'show-custom-alert\');
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC539810d7aa2372637a50f6922bc550a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#js}}
        $(document).on(\'click\', \'.close_once\', function() {
            localStorage.setItem(\'hideAlert{{customalertid}}\', \'true\');
            $(\'body\').removeClass(\'show-custom-alert\');
        });

        $( document ).ready(function() {
            if (localStorage.getItem(\'hideAlert{{customalertid}}\')) {
                $(\'.hide_alert\').addClass(\'hide\');
            } else {
                $(\'.hide_alert\').addClass(\'show\');
                $(\'body\').addClass(\'show-custom-alert\');
            }
        });
    {{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('js');
                $buffer .= $this->section09ac58df8b774843b5b1d2dfd9fe8b26($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b88f4e113abc6ec4776ad2b7605d9c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'var onlyShowVisible = !document.querySelector(".mycourses-hidden-filter-checkbox").checked;';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'var onlyShowVisible = !document.querySelector(".mycourses-hidden-filter-checkbox").checked;';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe80c4850853e275d1e5067cba956a0a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '&& (onlyShowVisible ? isVisible : true)';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '&& (onlyShowVisible ? isVisible : true)';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a98fd3ca9956b56967ac899327e0eb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <script>
        function myCoursesList() {
            // Declare variables.
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById(\'myCoursesListSearch\');
            filter = input.value.toUpperCase();
            ul = document.getElementById("myCoursesList");

            if (ul == null) {
                return false;
            }

            li = ul.getElementsByTagName(\'li\');

            if (li == null) {
                return false;
            }

            var onlyShowInProgress = document.querySelector(".mycourses-inprogress-filter-checkbox").checked;
            {{#output.displayfilterhidden}}var onlyShowVisible = !document.querySelector(".mycourses-hidden-filter-checkbox").checked;{{/output.displayfilterhidden}}
            var numItemsShown = 0;
            var isAnyInvisible = false;

            // Loop through all list items, and hide those who don\'t match the search query.
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];

                var isInProgress = a.classList.contains(\'rui-course-list-inprogress\');
                var isVisible = a.classList.contains(\'rui-course-list-visible\');
                var coursesFilter = (onlyShowInProgress ? isInProgress : true) 
                    {{#output.displayfilterhidden}}&& (onlyShowVisible ? isVisible : true){{/output.displayfilterhidden}};

                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1 && coursesFilter) {
                    li[i].style.display = "";
                    numItemsShown++;
                } else {
                    li[i].style.display = "none";
                }
            }

            document.querySelectorAll(\'.rui-sidebar-mycourses .rui-sidebar-nav-text span.rui-drawer-badge\')[0].textContent = numItemsShown;
        }

        const resize_ob = new ResizeObserver(function(entries) {
            window.dispatchEvent(new Event(\'resize\'));
        });

        window.addEventListener("load", (event) => {
            myCoursesList(); 
        });
        // Start observing for resize.
        resize_ob.observe(document.querySelector("#topBar"));
    </script>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <script>
';
                $buffer .= $indent . '        function myCoursesList() {
';
                $buffer .= $indent . '            // Declare variables.
';
                $buffer .= $indent . '            var input, filter, ul, li, a, i, txtValue;
';
                $buffer .= $indent . '            input = document.getElementById(\'myCoursesListSearch\');
';
                $buffer .= $indent . '            filter = input.value.toUpperCase();
';
                $buffer .= $indent . '            ul = document.getElementById("myCoursesList");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if (ul == null) {
';
                $buffer .= $indent . '                return false;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            li = ul.getElementsByTagName(\'li\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            if (li == null) {
';
                $buffer .= $indent . '                return false;
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            var onlyShowInProgress = document.querySelector(".mycourses-inprogress-filter-checkbox").checked;
';
                $buffer .= $indent . '            ';
                $value = $context->findDot('output.displayfilterhidden');
                $buffer .= $this->section4b88f4e113abc6ec4776ad2b7605d9c2($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            var numItemsShown = 0;
';
                $buffer .= $indent . '            var isAnyInvisible = false;
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            // Loop through all list items, and hide those who don\'t match the search query.
';
                $buffer .= $indent . '            for (i = 0; i < li.length; i++) {
';
                $buffer .= $indent . '                a = li[i].getElementsByTagName("a")[0];
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                var isInProgress = a.classList.contains(\'rui-course-list-inprogress\');
';
                $buffer .= $indent . '                var isVisible = a.classList.contains(\'rui-course-list-visible\');
';
                $buffer .= $indent . '                var coursesFilter = (onlyShowInProgress ? isInProgress : true) 
';
                $buffer .= $indent . '                    ';
                $value = $context->findDot('output.displayfilterhidden');
                $buffer .= $this->sectionDe80c4850853e275d1e5067cba956a0a($context, $indent, $value);
                $buffer .= ';
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                txtValue = a.textContent || a.innerText;
';
                $buffer .= $indent . '                if (txtValue.toUpperCase().indexOf(filter) > -1 && coursesFilter) {
';
                $buffer .= $indent . '                    li[i].style.display = "";
';
                $buffer .= $indent . '                    numItemsShown++;
';
                $buffer .= $indent . '                } else {
';
                $buffer .= $indent . '                    li[i].style.display = "none";
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            document.querySelectorAll(\'.rui-sidebar-mycourses .rui-sidebar-nav-text span.rui-drawer-badge\')[0].textContent = numItemsShown;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        const resize_ob = new ResizeObserver(function(entries) {
';
                $buffer .= $indent . '            window.dispatchEvent(new Event(\'resize\'));
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        window.addEventListener("load", (event) => {
';
                $buffer .= $indent . '            myCoursesList(); 
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        // Start observing for resize.
';
                $buffer .= $indent . '        resize_ob.observe(document.querySelector("#topBar"));
';
                $buffer .= $indent . '    </script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section276ee829ae8e96f25c4239724a8fbe16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'doctonewwindow, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'doctonewwindow, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
