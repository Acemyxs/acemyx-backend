<?php

class __Mustache_60e983f470121efc1fde5b22ffadb98b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form id="groupeditform" action="index.php" method="post">
';
        $buffer .= $indent . '    <div class="container-fluid groupmanagementtable">
';
        $buffer .= $indent . '        <div class="row rtl-compatible justify-items-between">
';
        $buffer .= $indent . '            <div class="col-md-6 mb-1 pl-0">
';
        $buffer .= $indent . '                <input type="hidden" name="id" value="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <label for="groups">
';
        $buffer .= $indent . '                        <span id="groupslabel" class="badge badge-secondary">
';
        $buffer .= $indent . '                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.78168 19.25H13.2183C13.7828 19.25 14.227 18.7817 14.1145 18.2285C13.804 16.7012 12.7897 14 9.5 14C6.21031 14 5.19605 16.7012 4.88549 18.2285C4.773 18.7817 5.21718 19.25 5.78168 19.25Z"></path>
';
        $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.75 14C17.8288 14 18.6802 16.1479 19.0239 17.696C19.2095 18.532 18.5333 19.25 17.6769 19.25H16.75"></path>
';
        $buffer .= $indent . '                                <circle cx="9.5" cy="7.5" r="2.75" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M14.75 10.25C16.2688 10.25 17.25 9.01878 17.25 7.5C17.25 5.98122 16.2688 4.75 14.75 4.75"></path>
';
        $buffer .= $indent . '                            </svg>
';
        $buffer .= $indent . '                            <span class="ml-1">';
        $value = $context->find('str');
        $buffer .= $this->section07b3ceab8d7100ef826c28857d1522f3($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                        <span id="thegrouping">&nbsp;</span>
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <select name="groups[]" multiple="multiple" id="groups" size="15" class="form-control input-block-level">
';
        $value = $context->find('groups');
        $buffer .= $this->section72cc482fd3e8dee0a7d0dc78f1e0b774($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <h4 class="mt-2"> ';
        $value = $context->find('str');
        $buffer .= $this->section2624c09db93165c3ce1e7311917a656d($context, $indent, $value);
        $buffer .= ' </h4>
';
        $buffer .= $indent . '                <div class="form-group form-group-btns mb-3">
';
        $buffer .= $indent . '                    <button type="submit" name="action" id="updatemembers" value="updatemembers" class="btn btn-xs btn-secondary">';
        $value = $context->find('str');
        $buffer .= $this->section9db7e4bc5f16a36de19bce56d85d3992($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                    <button type="submit" name="action" id="showeditgroupsettingsform" value="showgroupsettingsform" ';
        $value = $context->find('editgroupsettingsdisabled');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= ' class="btn btn-xs btn-secondary">';
        $value = $context->find('str');
        $buffer .= $this->section6ab1c7d796f353151ef9c76d9867de3b($context, $indent, $value);
        $buffer .= '</button>
';
        $value = $context->find('messagingsettingsvisible');
        $buffer .= $this->section22bbba911c54b075e48ecea8175fc267($context, $indent, $value);
        $buffer .= $indent . '                    <button type="submit" name="action" id="deletegroup" value="deletegroup" ';
        $value = $context->find('deletegroupdisabled');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= ' class="btn btn-xs btn-danger">';
        $value = $context->find('str');
        $buffer .= $this->sectionFa414baa85f4ddc5dd8b84320c171be9($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                <h4 class="mt-2"> ';
        $value = $context->find('str');
        $buffer .= $this->section1dfadd0d566ad41f42e477433a011ff3($context, $indent, $value);
        $buffer .= ' </h4>
';
        $buffer .= $indent . '                <div class="form-group form-group-btns mb-3">
';
        $buffer .= $indent . '                    <button type="submit" name="action" id="showcreateorphangroupform" value="showcreateorphangroupform" class="btn btn-sm btn-primary">';
        $value = $context->find('str');
        $buffer .= $this->section933f680f21c30185ea1285a27f349637($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                    <button type="submit" name="action" id="showautocreategroupsform" value="showautocreategroupsform" class="btn btn-sm btn-outline-secondary">';
        $value = $context->find('str');
        $buffer .= $this->sectionE981309a9c88fdbff700badad9299c05($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                    <button type="submit" name="action" id="showimportgroups" value="showimportgroups" class="btn btn-sm btn-secondary">';
        $value = $context->find('str');
        $buffer .= $this->section7e3c70b3235cd3c658aeb2583c3e5b15($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="col-md-6 mb-1 pr-0">
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <label for="members" class="d-inline-flex">
';
        $buffer .= $indent . '                        <span id="memberslabel" class="badge badge-secondary">
';
        $buffer .= $indent . '                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '                                <circle cx="12" cy="8" r="3.25" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></circle>
';
        $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12.25 19.25H6.94953C5.77004 19.25 4.88989 18.2103 5.49085 17.1954C6.36247 15.7234 8.23935 14 12.25 14"></path>
';
        $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 14.75V19.25"></path>
';
        $buffer .= $indent . '                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 17L14.75 17"></path>
';
        $buffer .= $indent . '                            </svg>
';
        $buffer .= $indent . '                            <span id="memberslabel" class="ml-1">';
        $value = $context->find('str');
        $buffer .= $this->sectionAdadf327cc0a1dc31d7c65f510e500c8($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                        <span id="thegroup" class="badge">';
        $value = $this->resolveValue($context->find('selectedgroup'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '                    </label>
';
        $buffer .= $indent . '                    <select size="15" multiple="multiple" class="form-control input-block-level" id="members" name="user">
';
        $value = $context->find('members');
        $buffer .= $this->section8acbe6c2f8103e914f8b951f316baa93($context, $indent, $value);
        $buffer .= $indent . '                    </select>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="form-group">
';
        $buffer .= $indent . '                    <button type="submit" value="showaddmembersform" class="btn btn-secondary" ';
        $value = $context->find('addmembersdisabled');
        $buffer .= $this->section2eb10691007c92bdff260da6f5c039fd($context, $indent, $value);
        $buffer .= ' name="action" id="showaddmembersform">';
        $value = $context->find('str');
        $buffer .= $this->section4e12385a6e0170839a40c14d8de6b906($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->sectionC40f688cf06da1349f353e773d4b4474($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->sectionF1104fcb415faab24e03ced68d4d426e($context, $indent, $value);

        return $buffer;
    }

    private function section07b3ceab8d7100ef826c28857d1522f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'groups';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'groups';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72cc482fd3e8dee0a7d0dc78f1e0b774(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <option value="{{value}}" {{#selected}}selected="selected"{{/selected}} title="{{{text}}}">{{{text}}}</option>
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
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= ' title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2624c09db93165c3ce1e7311917a656d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' withselected, group ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' withselected, group ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9db7e4bc5f16a36de19bce56d85d3992(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'showmembersforgroup, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'showmembersforgroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2eb10691007c92bdff260da6f5c039fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disabled="disabled"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disabled="disabled"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ab1c7d796f353151ef9c76d9867de3b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'editgroupsettings, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'editgroupsettings, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f159f09ae308dbaa74e7f165f170308(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'disablemessagingaction, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'disablemessagingaction, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5c2cdc05e17a0ea6324898e52c70fe8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'enablemessagingaction, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'enablemessagingaction, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section22bbba911c54b075e48ecea8175fc267(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <button type="submit" name="action" id="disablemessaging" value="disablemessaging" class="btn btn-xs btn-warning" disabled="disabled">{{#str}}disablemessagingaction, group{{/str}}</button>
                    <button type="submit" name="action" id="enablemessaging" value="enablemessaging" class="btn btn-xs btn-success" disabled="disabled">{{#str}}enablemessagingaction, group{{/str}}</button>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <button type="submit" name="action" id="disablemessaging" value="disablemessaging" class="btn btn-xs btn-warning" disabled="disabled">';
                $value = $context->find('str');
                $buffer .= $this->section8f159f09ae308dbaa74e7f165f170308($context, $indent, $value);
                $buffer .= '</button>
';
                $buffer .= $indent . '                    <button type="submit" name="action" id="enablemessaging" value="enablemessaging" class="btn btn-xs btn-success" disabled="disabled">';
                $value = $context->find('str');
                $buffer .= $this->sectionA5c2cdc05e17a0ea6324898e52c70fe8($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFa414baa85f4ddc5dd8b84320c171be9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'deleteselectedgroup, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'deleteselectedgroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dfadd0d566ad41f42e477433a011ff3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' manageactions, group ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' manageactions, group ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section933f680f21c30185ea1285a27f349637(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'creategroup, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'creategroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE981309a9c88fdbff700badad9299c05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'autocreategroups, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'autocreategroups, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7e3c70b3235cd3c658aeb2583c3e5b15(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'importgroups, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'importgroups, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdadf327cc0a1dc31d7c65f510e500c8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'membersofselectedgroup, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'membersofselectedgroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2cb0a3589070fc889c1feff1a27a7713(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <option value="{{value}}" title="{{text}}">{{{text}}}</option>
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
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8acbe6c2f8103e914f8b951f316baa93(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <optgroup label="{{role}}">
                                {{#rolemembers}}
                                    <option value="{{value}}" title="{{text}}">{{{text}}}</option>
                                {{/rolemembers}}
                            </optgroup>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <optgroup label="';
                $value = $this->resolveValue($context->find('role'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('rolemembers');
                $buffer .= $this->section2cb0a3589070fc889c1feff1a27a7713($context, $indent, $value);
                $buffer .= $indent . '                            </optgroup>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e12385a6e0170839a40c14d8de6b906(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'adduserstogroup, group';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'adduserstogroup, group';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC40f688cf06da1349f353e773d4b4474(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\', \'core/yui\'], function($) {
        $("#groups").change(function() {
            M.core_group.membersCombo.refreshMembers();
        });
        M.core_group.init_index(Y, "{{wwwroot}}", {{courseid}});
        var undeletableGroups = JSON.parse(\'{{{undeletablegroups}}}\');
        M.core_group.groupslist(Y, undeletableGroups);
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\', \'core/yui\'], function($) {
';
                $buffer .= $indent . '        $("#groups").change(function() {
';
                $buffer .= $indent . '            M.core_group.membersCombo.refreshMembers();
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '        M.core_group.init_index(Y, "';
                $value = $this->resolveValue($context->find('wwwroot'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", ';
                $value = $this->resolveValue($context->find('courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '        var undeletableGroups = JSON.parse(\'';
                $value = $this->resolveValue($context->find('undeletablegroups'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        M.core_group.groupslist(Y, undeletableGroups);
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF1104fcb415faab24e03ced68d4d426e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_group/index\'], (module) => module.init());
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_group/index\'], (module) => module.init());
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
