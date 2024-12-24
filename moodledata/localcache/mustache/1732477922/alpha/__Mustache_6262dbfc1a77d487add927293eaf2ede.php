<?php

class __Mustache_6262dbfc1a77d487add927293eaf2ede extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="mt-2 position-relative" data-region="add_random_question_form-container">
';
        $buffer .= $indent . '    <form action="';
        $value = $this->resolveValue($context->find('returnurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" method="POST" id="add_random_question_form" class="mform">
';
        $buffer .= $indent . '        <fieldset id="id_existingcategoryheader">
';
        $buffer .= $indent . '            <legend>';
        $value = $context->find('str');
        $buffer .= $this->section14af05861c11bb8caed26cc42f21439d($context, $indent, $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '            <!-- Question bank -->
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('questionbank'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Select number of random question -->
';
        $buffer .= $indent . '            <label>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section6ebc0ceaa10fd008138f6aca0584f3d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                <select id="menurandomcount" name="randomcount" class="form-control custom-select">
';
        $value = $context->find('randomoptions');
        $buffer .= $this->section31228305e5f36f31cd419223f3cc29e2($context, $indent, $value);
        $buffer .= $indent . '                </select>
';
        $buffer .= $indent . '            </label>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Buttons -->
';
        $buffer .= $indent . '            <div class="modal-footer mt-1" data-region="footer">
';
        $buffer .= $indent . '                <input type="hidden" name="message" value="">
';
        $buffer .= $indent . '                <input type="submit" class="btn btn-primary" name="addrandom" value="';
        $value = $context->find('str');
        $buffer .= $this->sectionD40ab63ec7b789bf292643e66f1ed010($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <input type="submit" class="btn btn-secondary" name="cancel" value="';
        $value = $context->find('str');
        $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        </fieldset>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <fieldset id="id_newcategoryheader">
';
        $buffer .= $indent . '            <legend>';
        $value = $context->find('str');
        $buffer .= $this->sectionE73a9cc43ff921985326ffa860eebc00($context, $indent, $value);
        $buffer .= '</legend>
';
        $buffer .= $indent . '            <!-- New categoryname -->
';
        $buffer .= $indent . '            <div class="mb-3 row fitem">
';
        $buffer .= $indent . '                <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
';
        $buffer .= $indent . '                    <label class="mr-md-2 mb-md-0" for="categoryname">';
        $value = $context->find('str');
        $buffer .= $this->section725aaaf132e75bed7fd8f354abe33745($context, $indent, $value);
        $buffer .= ' </label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-9 d-flex flex-wrap align-items-start felement" data-fieldtype="text">
';
        $buffer .= $indent . '                    <input type="text" class="form-control" id="categoryname" name="categoryname" maxlength="254" size="50">
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Select parent of new category -->
';
        $buffer .= $indent . '            <div class="mb-3 row fitem">
';
        $buffer .= $indent . '                <div class="col-md-3 col-form-label d-flex pb-0 pr-md-0">
';
        $buffer .= $indent . '                    <label class="mr-md-2 mb-md-0" for="parentcategory">';
        $value = $context->find('str');
        $buffer .= $this->section3bbe3fec72e897d59e4a9c8803861cc3($context, $indent, $value);
        $buffer .= ' </label>
';
        $value = $context->find('questioncategoryhelp');
        $buffer .= $this->sectionAe627446a49ca666bd6263dd5f3c4c07($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="col-md-9 d-flex flex-wrap align-items-start felement" data-fieldtype="select">
';
        $buffer .= $indent . '                    <select id="parentcategory" name="parentcategory" class="form-control">
';
        $value = $context->find('questioncategoryoptions');
        $buffer .= $this->section068ecd97b12ef847a35aff228008d8ba($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <!-- Buttons -->
';
        $buffer .= $indent . '            <div class="modal-footer mt-1" data-region="footer">
';
        $buffer .= $indent . '                <input type="submit" class="btn btn-primary" name="newcategory" value="';
        $value = $context->find('str');
        $buffer .= $this->section61d54f908e152f331df742f03c523c80($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '                <input type="submit" class="btn btn-secondary" name="cancel" value="';
        $value = $context->find('str');
        $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </fieldset>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section14af05861c11bb8caed26cc42f21439d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' randomfromexistingcategory, mod_quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' randomfromexistingcategory, mod_quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ebc0ceaa10fd008138f6aca0584f3d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'randomnumber, mod_quiz';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'randomnumber, mod_quiz';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31228305e5f36f31cd419223f3cc29e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <option value="{{value}}">{{name}}</option>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD40ab63ec7b789bf292643e66f1ed010(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addrandomquestion, mod_quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' addrandomquestion, mod_quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE73a9cc43ff921985326ffa860eebc00(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' randomquestionusinganewcategory, mod_quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' randomquestionusinganewcategory, mod_quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section725aaaf132e75bed7fd8f354abe33745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' name ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' name ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bbe3fec72e897d59e4a9c8803861cc3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parentcategory, question ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' parentcategory, question ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe627446a49ca666bd6263dd5f3c4c07(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{>core/help_icon}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/help_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3820ef7ed9041ffb8f3dcb8e937adb11(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <option value="{{value}}">{{{name}}}</option>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section068ecd97b12ef847a35aff228008d8ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <optgroup label="{{label}}">
                                {{#options}}
                                    <option value="{{value}}">{{{name}}}</option>
                                {{/options}}
                            </optgroup>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <optgroup label="';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('options');
                $buffer .= $this->section3820ef7ed9041ffb8f3dcb8e937adb11($context, $indent, $value);
                $buffer .= $indent . '                            </optgroup>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section61d54f908e152f331df742f03c523c80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' createcategoryandaddrandomquestion, mod_quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' createcategoryandaddrandomquestion, mod_quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
