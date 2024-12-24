<?php

class __Mustache_ccd50b88e739028ed987f14b6d8060e6 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="mb-4">
';
        $buffer .= $indent . '    ';
        $value = $context->find('str');
        $buffer .= $this->section99929cffdc69a9a371469c91d3361ae3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <form id="searchform" action="';
        $value = $this->resolveValue($context->find('actionurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="get">
';
        $buffer .= $indent . '        <div class="rui-searchbox" id="form">
';
        $buffer .= $indent . '            <div class="mb-4">
';
        $buffer .= $indent . '                <label for="words">';
        $value = $context->find('str');
        $buffer .= $this->section49b940fd06a798f8e7819beb6403f415($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <input type="hidden" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" name="id">
';
        $buffer .= $indent . '                <input type="text" class="form-control" name="words" id="words" value="';
        $value = $this->resolveValue($context->find('words'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-4">
';
        $buffer .= $indent . '                <label for="phrase">';
        $value = $context->find('str');
        $buffer .= $this->section007601d3829265a079ca4fc9cc9c61ad($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <input type="text" class="form-control" name="phrase" id="phrase" value="';
        $value = $this->resolveValue($context->find('phrase'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-4">
';
        $buffer .= $indent . '                <label for="notwords">';
        $value = $context->find('str');
        $buffer .= $this->section9e965866c64a3fd4d807591d47160622($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                <input type="text" class="form-control" name="notwords" id="notwords" value="';
        $value = $this->resolveValue($context->find('notwords'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('showfullwords');
        $buffer .= $this->sectionF657f2714e19611c43e61138311e509e($context, $indent, $value);
        $buffer .= $indent . '            <div class="alert alert-light mb-1 d-inline-flex align-items-center w-100">
';
        $buffer .= $indent . '                    <div class="custom-control custom-switch">
';
        $buffer .= $indent . '                        <input type="checkbox" class="custom-control-input" id="timefromrestrict" name="timefromrestrict" value="1" ';
        $value = $context->find('datefromchecked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                        <label class="custom-control-label" for="timefromrestrict">
';
        $buffer .= $indent . '                            ';
        $value = $context->find('str');
        $buffer .= $this->sectionFbe692963e46f75b5c02f8b460cba735($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                        </label>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('datefromfields'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromday" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfrommonth" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromyear" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromhour" value="0">
';
        $buffer .= $indent . '                    <input type="hidden" name="hfromminute" value="0">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="alert alert-light mb-1 d-inline-flex align-items-center w-100">
';
        $buffer .= $indent . '                    <div class="d-inline-flex align-items-center">
';
        $buffer .= $indent . '                        <div class="custom-control custom-switch">
';
        $buffer .= $indent . '                            <input type="checkbox" class="custom-control-input" name="timetorestrict" value="1" ';
        $value = $context->find('datetochecked');
        $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
        $buffer .= '>
';
        $buffer .= $indent . '                            <label class="custom-control-label" for="timetorestrict">
';
        $buffer .= $indent . '                                ';
        $value = $context->find('str');
        $buffer .= $this->section2493ad2b2fd563c6bfa895bb8f230388($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                            </label>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('datetofields'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                        <input type="hidden" name="htoday" value="0">
';
        $buffer .= $indent . '                        <input type="hidden" name="htomonth" value="0">
';
        $buffer .= $indent . '                        <input type="hidden" name="htoyear" value="0">
';
        $buffer .= $indent . '                        <input type="hidden" name="htohour" value="0">
';
        $buffer .= $indent . '                        <input type="hidden" name="htominute" value="0">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-4 alert alert-light">
';
        $buffer .= $indent . '                    <label for="menuforumid">';
        $value = $context->find('str');
        $buffer .= $this->sectionC382849062e67f2e28649a8a1c9cee46($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <select name="forumid" id="menuforumid" class="ml-3 custom-select w-100">
';
        $value = $context->find('forumoptions');
        $buffer .= $this->sectionB66cd651c681f46a91963c1886a0a90f($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-4">
';
        $buffer .= $indent . '                    <label for="subject">';
        $value = $context->find('str');
        $buffer .= $this->sectionBf6f0a37d0eced58edee66c901fd1056($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <input type="text" class="form-control" name="subject" id="subject" value="';
        $value = $this->resolveValue($context->find('subject'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="mb-4">
';
        $buffer .= $indent . '                <label for="user">
';
        $buffer .= $indent . '                     <svg class="mr-1" width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                        <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12.25 19.25H6.94953C5.77004 19.25 4.88989 18.2103 5.49085 17.1954C6.36247 15.7234 8.23935 14 12.25 14"></path>
';
        $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.75 17.75L16 19.25L19.25 14.75"></path>
';
        $buffer .= $indent . '                    </svg>
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section51faccaed472b4f1632c8c743dfad925($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </label>
';
        $buffer .= $indent . '                <input type="text" class="form-control" name="user" id="user" value="';
        $value = $this->resolveValue($context->find('user'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $value = $context->find('guestuser');
        if (empty($value)) {
            
            $buffer .= $indent . '            <div class="mb-4 alert alert-light">
';
            $buffer .= $indent . '                    <div class="custom-control custom-switch">
';
            $buffer .= $indent . '                        <input type="checkbox" class="custom-control-input" name="starredonly" id="starredonly" value="1" ';
            $value = $context->find('starredonly');
            $buffer .= $this->section51d7c9c652ced0161cb587bacd669266($context, $indent, $value);
            $buffer .= '>
';
            $buffer .= $indent . '                        <label class="custom-control-label" for="starredonly">
';
            $buffer .= $indent . '                            ';
            $value = $context->find('str');
            $buffer .= $this->section2b8fc408019c137c241ddf40b74c0cd9($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                        </label>
';
            $buffer .= $indent . '                    </div>
';
            $buffer .= $indent . '            </div>
';
        }
        $value = $context->find('tagsenabled');
        $buffer .= $this->sectionCf3e696489bb7b84a3245ca4b8fe90f5($context, $indent, $value);
        $buffer .= $indent . '            <div>
';
        $buffer .= $indent . '                <button type="submit" class="btn btn-primary">';
        $value = $context->find('str');
        $buffer .= $this->sectionF47c768210ceecaea95768df40cb4c27($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section5bbeb9aacfbb213a2fb8b9ce41fd0b3c($context, $indent, $value);

        return $buffer;
    }

    private function section99929cffdc69a9a371469c91d3361ae3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforumintro, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchforumintro, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section49b940fd06a798f8e7819beb6403f415(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchwords, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchwords, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section007601d3829265a079ca4fc9cc9c61ad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchphrase, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchphrase, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e965866c64a3fd4d807591d47160622(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchnotwords, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchnotwords, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ae13f3791f0313566f45cfad7756f8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchfullwords, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchfullwords, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF657f2714e19611c43e61138311e509e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="mb-4">
                    <label for="fullwords">{{#str}}searchfullwords, forum{{/str}}</label>
                    <input type="text" class="form-control" name="fullwords" id="fullwords" value="{{fullwords}}">
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="mb-4">
';
                $buffer .= $indent . '                    <label for="fullwords">';
                $value = $context->find('str');
                $buffer .= $this->section6ae13f3791f0313566f45cfad7756f8d($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                    <input type="text" class="form-control" name="fullwords" id="fullwords" value="';
                $value = $this->resolveValue($context->find('fullwords'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51d7c9c652ced0161cb587bacd669266(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbe692963e46f75b5c02f8b460cba735(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchdatefrom, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchdatefrom, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2493ad2b2fd563c6bfa895bb8f230388(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchdateto, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchdateto, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC382849062e67f2e28649a8a1c9cee46(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchwhichforums, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchwhichforums, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e2875c627d2dbad7c957250bbb623f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB66cd651c681f46a91963c1886a0a90f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <option value="{{value}}" {{#selected}}selected{{/selected}}>{{name}}</option>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf6f0a37d0eced58edee66c901fd1056(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchsubject, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchsubject, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51faccaed472b4f1632c8c743dfad925(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchuser, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchuser, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b8fc408019c137c241ddf40b74c0cd9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'starredonly, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'starredonly, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb6da1fe320dce42229d2fdcb83f7edf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchtags, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchtags, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe1e84055fb6df0789fd9e4e1de855d2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <option value="{{value}}" {{#selected}}selected{{/selected}}>{{{text}}}</option>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->section9e2875c627d2dbad7c957250bbb623f7($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf3e696489bb7b84a3245ca4b8fe90f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="mb-4">
                        <label class="mr-3" for="tags">
                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <circle cx="15" cy="9" r="1" fill="currentColor"></circle>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.75H19.25V12L12.5535 18.6708C11.7544 19.4668 10.4556 19.445 9.68369 18.6226L5.28993 13.941C4.54041 13.1424 4.57265 11.8895 5.36226 11.1305L12 4.75Z"></path>
                            </svg>
                            {{#str}}searchtags, forum{{/str}}
                        </label>
                        <select class="custom-select" name="tags[]"
                                id="tags" multiple>
                            {{#tagoptions}}
                                <option value="{{value}}" {{#selected}}selected{{/selected}}>{{{text}}}</option>
                            {{/tagoptions}}
                        </select>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="mb-4">
';
                $buffer .= $indent . '                        <label class="mr-3" for="tags">
';
                $buffer .= $indent . '                            <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                <circle cx="15" cy="9" r="1" fill="currentColor"></circle>
';
                $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 4.75H19.25V12L12.5535 18.6708C11.7544 19.4668 10.4556 19.445 9.68369 18.6226L5.28993 13.941C4.54041 13.1424 4.57265 11.8895 5.36226 11.1305L12 4.75Z"></path>
';
                $buffer .= $indent . '                            </svg>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->sectionFb6da1fe320dce42229d2fdcb83f7edf($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </label>
';
                $buffer .= $indent . '                        <select class="custom-select" name="tags[]"
';
                $buffer .= $indent . '                                id="tags" multiple>
';
                $value = $context->find('tagoptions');
                $buffer .= $this->sectionAe1e84055fb6df0789fd9e4e1de855d2($context, $indent, $value);
                $buffer .= $indent . '                        </select>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF47c768210ceecaea95768df40cb4c27(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'searchforums, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'searchforums, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bbeb9aacfbb213a2fb8b9ce41fd0b3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'jquery\'], function($) {
    var toggleDateFields = function(prefix, disabled) {
        $(\'#searchform select[name^=\' + prefix + \']\').prop(\'disabled\', disabled);
        $(\'#searchform input[name^=h\' + prefix + \']\').val(disabled ? 1 : 0);
    };

    toggleDateFields(\'from\', !$("#searchform input[name=\'timefromrestrict\']").prop(\'checked\'));
    $("#searchform input[name=\'timefromrestrict\']").click(function() {
        toggleDateFields(\'from\', !this.checked);
    });

    toggleDateFields(\'to\', !$("#searchform input[name=\'timetorestrict\']").prop(\'checked\'));
    $("#searchform input[name=\'timetorestrict\']").click(function() {
        toggleDateFields(\'to\', !this.checked);
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'jquery\'], function($) {
';
                $buffer .= $indent . '    var toggleDateFields = function(prefix, disabled) {
';
                $buffer .= $indent . '        $(\'#searchform select[name^=\' + prefix + \']\').prop(\'disabled\', disabled);
';
                $buffer .= $indent . '        $(\'#searchform input[name^=h\' + prefix + \']\').val(disabled ? 1 : 0);
';
                $buffer .= $indent . '    };
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    toggleDateFields(\'from\', !$("#searchform input[name=\'timefromrestrict\']").prop(\'checked\'));
';
                $buffer .= $indent . '    $("#searchform input[name=\'timefromrestrict\']").click(function() {
';
                $buffer .= $indent . '        toggleDateFields(\'from\', !this.checked);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    toggleDateFields(\'to\', !$("#searchform input[name=\'timetorestrict\']").prop(\'checked\'));
';
                $buffer .= $indent . '    $("#searchform input[name=\'timetorestrict\']").click(function() {
';
                $buffer .= $indent . '        toggleDateFields(\'to\', !this.checked);
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
