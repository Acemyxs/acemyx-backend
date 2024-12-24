<?php

class __Mustache_d4b82b302fb58fa2acf2640186d6b675 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="rui-login-layout 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionFae2e673aab9f27c06408ea1443e7dfd($context, $indent, $value);
        $buffer .= ' 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $buffer .= 'rui-login-layout-simple';
        }
        $buffer .= ' 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlogooutside');
        $buffer .= $this->section2f8037f28a0eb1fa35d2b2c37d3c9283($context, $indent, $value);
        $buffer .= ' 
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout1');
        $buffer .= $this->sectionC1e15dfdcabb04e68c281485556042d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout2');
        $buffer .= $this->sectionD0da84c782719be6e34d02bb0f01be84($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout3');
        $buffer .= $this->section18b534f24a03a4391946c1f51b854472($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout4');
        $buffer .= $this->sectionD876a3aff3d0c0634f093d41158002e9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ';
        $value = $context->find('loginlayout5');
        $buffer .= $this->section29ff704ed8f80fea4ffde99c6c0ba9ab($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        ">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '         
';
        $buffer .= $indent . '            <div class="rui-login-top-btn">
';
        $buffer .= $indent . '            ';
        $value = $context->find('stringbacktologin');
        $buffer .= $this->section9f48dfc736b93f2446ed93a0ab0ec617($context, $indent, $value);
        $buffer .= ' <a href="';
        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '/login/index.php" class="btn-link--clean">';
        $value = $context->find('str');
        $buffer .= $this->sectionB15dee8971ab065bf4d6402b60d852be($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionF03205806acd4805b2ca566b70bd5ece($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlogooutside');
        $buffer .= $this->section93eda96c67fe3c522d17cf43f3738924($context, $indent, $value);
        $buffer .= $indent . '           
';
        $value = $context->find('loginhtmlcontent1');
        $buffer .= $this->section9af015534f92cf92a3c39bceedf7c70c($context, $indent, $value);
        $buffer .= $indent . '            
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section87eed43a4c7ce7f9757971add7ae41e6($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionC49deff370f5e814734f8b6533c8b227($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <div class="rui-login-box">
';
        $buffer .= $indent . '                        <div class="rui-login-content">
';
        $value = $context->find('cansignup');
        $buffer .= $this->section41dceb7889e645458ff3eba891e83789($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="rui-loginpage-intro">
';
        $value = $context->find('loginlogooutside');
        if (empty($value)) {
            
            $buffer .= $indent . '                                <div class="rui-loginpage-intro-logo">
';
            $value = $context->find('customloginlogo');
            $buffer .= $this->section6c072c14762a6021e28735866d3e0f2c($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('customloginlogo');
            if (empty($value)) {
                
                $value = $context->find('logourl');
                $buffer .= $this->section2a449439473fd9f25676a994079ac7d5($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('logourl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                        <a href="';
                    $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"><h2>';
                    $value = $this->resolveValue($context->find('sitename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h2></a>
';
                }
            }
            $buffer .= $indent . '                                </div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('signupintrotext');
        $buffer .= $this->section67ef4755112035c8605c907d4c2f0d20($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayout1');
        $buffer .= $this->section69e891721fe46ac3a11ce9cc672ff740($context, $indent, $value);
        $buffer .= $indent . '      
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            
';
        $buffer .= $indent . '                            <div class="rui-login-form">
';
        $buffer .= $indent . '                            ';
        $value = $this->resolveValue($context->find('formhtml'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </div><!-- .rui-login-form -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('loginhtmlblockbottom');
        $buffer .= $this->section6c78e87195b48e3cf77d0be39b0004fd($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        if (empty($value)) {
            
            $value = $context->find('loginhtmlcontent3');
            $buffer .= $this->section429f5813542c53298f6bde6def47aeb5($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('loginfootercontent');
            $buffer .= $this->section7ac4641b637b23cd58b8ba904a69a8e5($context, $indent, $value);
        }
        $buffer .= $indent . '                        </div><!-- .rui-login-content -->
';
        $buffer .= $indent . '                    </div><!-- .rui-login-box -->
';
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionDe08041bc61d47b0f5042c8e2913f788($context, $indent, $value);
        $buffer .= $indent . '               
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->sectionFa190b48422a7a2a2be750ff314c319f($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('loginlayoutimg');
        $buffer .= $this->section4850086520087183a238f69e455f8d03($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <button type="button" class="btn btn-xs btn-dark btn--cookie" ';
        $buffer .= ' data-modal="alert"';
        $buffer .= ' data-modal-title-str=\'["cookiesenabled", "core"]\' ';
        $buffer .= ' data-modal-content-str=\'["cookiesenabled_help_html", "core"]\'';
        $buffer .= '>
';
        $buffer .= $indent . '            <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V15"></path>
';
        $buffer .= $indent . '                <circle cx="12" cy="9" r="1" fill="currentColor"></circle>
';
        $buffer .= $indent . '                <circle cx="12" cy="12" r="7.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '            </svg>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <span class="ml-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionFcb729cc74d31bce5e3746aa60b79a2e($context, $indent, $value);
        $buffer .= '</span></button>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </div><!-- .login layout -->
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $value = $context->find('maintenance');
        $buffer .= $this->section128d442a28c8f2f0055c18c9484d9700($context, $indent, $value);
        $buffer .= $indent . '        
';
        $value = $this->resolveValue($context->find('logincustomfooterhtml'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';

        return $buffer;
    }

    private function sectionFae2e673aab9f27c06408ea1443e7dfd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout-img';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout-img';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f8037f28a0eb1fa35d2b2c37d3c9283(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login--logo-outsite';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login--logo-outsite';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC1e15dfdcabb04e68c281485556042d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--1';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--1';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD0da84c782719be6e34d02bb0f01be84(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--2';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--2';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section18b534f24a03a4391946c1f51b854472(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--3';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--3';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD876a3aff3d0c0634f093d41158002e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--4';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--4';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29ff704ed8f80fea4ffde99c6c0ba9ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'rui-login-layout--5';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'rui-login-layout--5';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f48dfc736b93f2446ed93a0ab0ec617(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="rui-login-calabel mr-2">{{{stringbacktologin}}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="rui-login-calabel mr-2">';
                $value = $this->resolveValue($context->find('stringbacktologin'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB15dee8971ab065bf4d6402b60d852be(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'login';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'login';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF03205806acd4805b2ca566b70bd5ece(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-wrapper">
                <div class="rui-login-top-wrapper">
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-wrapper">
';
                $buffer .= $indent . '                <div class="rui-login-top-wrapper">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC336dc80046e60a9736cf2f88c76e24c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="rui-login-top">';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="rui-login-top">';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9f02bdab39bdb326c592eb1133254d23(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'dark-mode-logo';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'dark-mode-logo';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section873cd556d58ed3a3a108eaa8803cb7b7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2><img src="{{customlogindmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" /></h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2><img src="';
                $value = $this->resolveValue($context->find('customlogindmlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-custom-dmlogo ml-2 img-fluid" /></h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6eace7c02b06d79590c468bc2f3beb1c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{ config.wwwroot }}}">
                            <h2><img src="{{customloginlogo}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid" /></h2>
                            {{#customlogindmlogo}}<h2><img src="{{customlogindmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" /></h2>{{/customlogindmlogo}}
                        </a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            <h2><img src="';
                $value = $this->resolveValue($context->find('customloginlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid" /></h2>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('customlogindmlogo');
                $buffer .= $this->section873cd556d58ed3a3a108eaa8803cb7b7($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61f6d5cf2eaec4c82a99c54a99247079(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{ config.wwwroot }}}"><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></a>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c8015515e366bc886d44cbfc72bd0fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section93eda96c67fe3c522d17cf43f3738924(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-logo-container my-6">
            {{#loginlayoutimg}}<div class="rui-login-top">{{/loginlayoutimg}}
                <div class="{{#customlogindmlogo}}dark-mode-logo{{/customlogindmlogo}}">
                    {{#customloginlogo}}
                        <a href="{{{ config.wwwroot }}}">
                            <h2><img src="{{customloginlogo}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid" /></h2>
                            {{#customlogindmlogo}}<h2><img src="{{customlogindmlogo}}" alt="{{sitename}}" class="rui-custom-dmlogo ml-2 img-fluid" /></h2>{{/customlogindmlogo}}
                        </a>
                    {{/customloginlogo}}

                    {{^customloginlogo}}
                        {{#logourl}}
                        <a href="{{{ config.wwwroot }}}"><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></a>
                        {{/logourl}}

                        {{^logourl}}
                        <a href="{{{ config.wwwroot }}}"><h1 class="rui-login-logo-name">{{sitename}}</h1></a>
                        {{/logourl}}
                    {{/customloginlogo}}
                </div>
            {{#loginlayoutimg}}</div>{{/loginlayoutimg}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-logo-container my-6">
';
                $buffer .= $indent . '            ';
                $value = $context->find('loginlayoutimg');
                $buffer .= $this->sectionC336dc80046e60a9736cf2f88c76e24c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                <div class="';
                $value = $context->find('customlogindmlogo');
                $buffer .= $this->section9f02bdab39bdb326c592eb1133254d23($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('customloginlogo');
                $buffer .= $this->section6eace7c02b06d79590c468bc2f3beb1c($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('customloginlogo');
                if (empty($value)) {
                    
                    $value = $context->find('logourl');
                    $buffer .= $this->section61f6d5cf2eaec4c82a99c54a99247079($context, $indent, $value);
                    $buffer .= $indent . '
';
                    $value = $context->find('logourl');
                    if (empty($value)) {
                        
                        $buffer .= $indent . '                        <a href="';
                        $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                        $buffer .= ($value === null ? '' : $value);
                        $buffer .= '"><h1 class="rui-login-logo-name">';
                        $value = $this->resolveValue($context->find('sitename'), $context);
                        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                        $buffer .= '</h1></a>
';
                    }
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            ';
                $value = $context->find('loginlayoutimg');
                $buffer .= $this->section9c8015515e366bc886d44cbfc72bd0fd($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9af015534f92cf92a3c39bceedf7c70c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-html-1">                           
                {{{loginhtmlcontent1}}}
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-html-1">                           
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('loginhtmlcontent1'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section87eed43a4c7ce7f9757971add7ae41e6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '    
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC49deff370f5e814734f8b6533c8b227(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-wrapper row no-gutters align-items-center justify-content-center w-100">
                <div class="rui-login-container row no-gutters">

            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-wrapper row no-gutters align-items-center justify-content-center w-100">
';
                $buffer .= $indent . '                <div class="rui-login-container row no-gutters">
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section78c7558fe34a1190743ac70d6d336ab2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' tocreatenewaccount ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' tocreatenewaccount ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section41dceb7889e645458ff3eba891e83789(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="sr-only">
                                    <a href="{{signupurl}}">{{#str}} tocreatenewaccount {{/str}}</a>
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="sr-only">
';
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->find('signupurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section78c7558fe34a1190743ac70d6d336ab2($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c072c14762a6021e28735866d3e0f2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <a href="{{{ config.wwwroot }}}"><h2><img src="{{customloginlogo}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></h2></a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><h2><img src="';
                $value = $this->resolveValue($context->find('customloginlogo'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></h2></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a449439473fd9f25676a994079ac7d5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{ config.wwwroot }}}"><h2><img src="{{logourl}}" title="{{sitename}}" alt="{{sitename}}" class="rui-login-logo img-fluid"/></h2></a>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->findDot('config.wwwroot'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"><h2><img src="';
                $value = $this->resolveValue($context->find('logourl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="';
                $value = $this->resolveValue($context->find('sitename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="rui-login-logo img-fluid"/></h2></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67ef4755112035c8605c907d4c2f0d20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-loginpage-intro-content mb-3 text-center">
                                {{{signupintrotext}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-loginpage-intro-content mb-3 text-center">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('signupintrotext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5ec0ef964cbebfa8c7dcd77488186442(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-loginpage-intro-content mb-3">
                                    {{{signuptext}}}
                                    <hr class="hr-small" />
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-loginpage-intro-content mb-3">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('signuptext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                    <hr class="hr-small" />
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section69e891721fe46ac3a11ce9cc672ff740(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                {{#signuptext}}
                                <div class="rui-loginpage-intro-content mb-3">
                                    {{{signuptext}}}
                                    <hr class="hr-small" />
                                </div>
                                {{/signuptext}}
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('signuptext');
                $buffer .= $this->section5ec0ef964cbebfa8c7dcd77488186442($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c78e87195b48e3cf77d0be39b0004fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-login-bottom-block">
                                {{{loginhtmlblockbottom}}}
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-login-bottom-block">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('loginhtmlblockbottom'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section429f5813542c53298f6bde6def47aeb5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-login-html-3">
                                    {{{loginhtmlcontent3}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-login-html-3">
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('loginhtmlcontent3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7ac4641b637b23cd58b8ba904a69a8e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="rui-login-footer-content text-center mb-2">
                                    <hr class="hr-small" />
                                    {{{loginfootercontent}}}
                                </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="rui-login-footer-content text-center mb-2">
';
                $buffer .= $indent . '                                    <hr class="hr-small" />
';
                $buffer .= $indent . '                                    ';
                $value = $this->resolveValue($context->find('loginfootercontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6805e4127e972f05f79e04be5066fd0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <div class="rui-login-additional-content">
                            {{{signuptext}}}
                            </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <div class="rui-login-additional-content">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('signuptext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDe08041bc61d47b0f5042c8e2913f788(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="rui-login-bg-container" style="background-image: url(\'{{loginbg}}\');">
                        {{#signuptext}}
                            <div class="rui-login-additional-content">
                            {{{signuptext}}}
                            </div>
                        {{/signuptext}}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="rui-login-bg-container" style="background-image: url(\'';
                $value = $this->resolveValue($context->find('loginbg'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');">
';
                $value = $context->find('signuptext');
                $buffer .= $this->section6805e4127e972f05f79e04be5066fd0f($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa190b48422a7a2a2be750ff314c319f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7dd0a32e070997cd4a447ecaffac7c20(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="rui-login-footer rui-login-footer-content">
                    {{{loginhtmlcontent3}}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="rui-login-footer rui-login-footer-content">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('loginhtmlcontent3'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63427a69a12256f4850639985299f025(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="rui-login-footer text-center">
                {{{loginfootercontent}}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="rui-login-footer text-center">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('loginfootercontent'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4850086520087183a238f69e455f8d03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="rui-login-wrapper">
                {{#loginhtmlcontent3}}
                <div class="rui-login-footer rui-login-footer-content">
                    {{{loginhtmlcontent3}}}
                </div>
                {{/loginhtmlcontent3}}

                {{#loginfootercontent}}
                <div class="rui-login-footer text-center">
                {{{loginfootercontent}}}
                </div>
                {{/loginfootercontent}}
                
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="rui-login-wrapper">
';
                $value = $context->find('loginhtmlcontent3');
                $buffer .= $this->section7dd0a32e070997cd4a447ecaffac7c20($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('loginfootercontent');
                $buffer .= $this->section63427a69a12256f4850639985299f025($context, $indent, $value);
                $buffer .= $indent . '                
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb729cc74d31bce5e3746aa60b79a2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'cookiesnotice';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'cookiesnotice';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0f57f9988f6ef94f3119d4e15f5b78b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'sitemaintenance, core_admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'sitemaintenance, core_admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section128d442a28c8f2f0055c18c9484d9700(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="rui-maintenance alert alert-warning wrapper-md my-4 p-5">
            <h2>{{#str}}sitemaintenance, core_admin{{/str}}</h2>
            <div class="rui-maintenance-desc">
                {{{maintenance}}}
            </div>
        </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="rui-maintenance alert alert-warning wrapper-md my-4 p-5">
';
                $buffer .= $indent . '            <h2>';
                $value = $context->find('str');
                $buffer .= $this->sectionA0f57f9988f6ef94f3119d4e15f5b78b($context, $indent, $value);
                $buffer .= '</h2>
';
                $buffer .= $indent . '            <div class="rui-maintenance-desc">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('maintenance'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
