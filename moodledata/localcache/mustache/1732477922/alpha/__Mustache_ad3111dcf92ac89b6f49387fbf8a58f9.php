<?php

class __Mustache_ad3111dcf92ac89b6f49387fbf8a58f9 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="edit_grading_page-contents">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h2>';
        $value = $context->find('str');
        $buffer .= $this->sectionE5c03d678fd28d4bc2ce12ff8be37c8d($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasgradeitems');
        if (empty($value)) {
            
            $value = $context->find('nogradeitems');
            $buffer .= $this->section19999362cd24680d5ad76afbee9e1978($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $value = $context->find('hasgradeitems');
        $buffer .= $this->sectionB1e975afca86fbc7f9495907f92fbe6d($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="mb-5">
';
        $buffer .= $indent . '        <button type="button" class="btn btn-secondary" id="mod_quiz-add_grade_item"
';
        $buffer .= $indent . '                data-quiz-id="';
        $value = $this->resolveValue($context->find('quizid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">';
        $value = $context->find('str');
        $buffer .= $this->section2f298b2bf0486c8922c1ae5075b85cb8($context, $indent, $value);
        $buffer .= '</button>
';
        $value = $context->find('hasgradeitems');
        if (empty($value)) {
            
            $value = $context->find('hasmultiplesections');
            $buffer .= $this->sectionFe2d008a39031bddc12ddd7f92dc42dc($context, $indent, $value);
        }
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section46faa14d1a3d4e04bdd00a6525870de0($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $value = $context->find('hasslots');
        if (empty($value)) {
            
            $value = $context->find('noslots');
            $buffer .= $this->section19999362cd24680d5ad76afbee9e1978($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $value = $context->find('hasslots');
        $buffer .= $this->section11d978f7677fe9ccfef1700237539399($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div>
';
        $value = $context->find('hasgradeitems');
        $buffer .= $this->section32767f4bb15f9c389eb7d4958ec74224($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE5c03d678fd28d4bc2ce12ff8be37c8d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemsetup, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemsetup, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19999362cd24680d5ad76afbee9e1978(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{> core/notification_info}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12d5517e1cc90843a5a2cef9a1c4ddcf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitems, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitems, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63b0a616e5349fce6984869a1897293d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitem, grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitem, grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63671965f51df59333915e40989bcfa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' totalmarks, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' totalmarks, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section517e745f3e01be78cd6fc043117c11fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' actions ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' actions ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c40b7346987afd901b908810163dc21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemnewname, quiz, {{{displayname}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemnewname, quiz, ';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a8f3bb2b81b245dde14f65aad11e6e2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemedit, quiz, {{{displayname}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemedit, quiz, ';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc2304e08ddd7c882749d11387394a9c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/editstring, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/editstring, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section513ee92de3191f72cb91c78d8e5b654b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemdelete, quiz, {{{name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemdelete, quiz, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE72f3151903674a371a612ae65c81b0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/delete, core, {{#str}} gradeitemdelete, quiz, {{{name}}} {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/delete, core, ';
                $value = $context->find('str');
                $buffer .= $this->section513ee92de3191f72cb91c78d8e5b654b($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF37643de9440ef2db1c57ff11bc503d4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr data-quiz-grade-item-id="{{id}}">
                        <th scope="row" class="align-middle font-weight-normal py-1">
                            <span class="inplaceeditable inplaceeditable-text w-100"
                                data-raw-name="{{name}}" data-edit-label="{{#str}} gradeitemnewname, quiz, {{{displayname}}} {{/str}}">
                                    <a href="#" class="quickeditlink w-100" data-action-edit="1" title="{{#str}} gradeitemedit, quiz, {{{displayname}}} {{/str}}">
                                        <span class="displayvalue">{{{displayname}}}</span>
                                        <span class="quickediticon">
                                            {{#pix}}t/editstring, core{{/pix}}
                                        </span>
                                    </a>
                            </span>
                        </th>
                        <td class="align-middle text-right py-1">
                            {{summarks}}
                        </td>
                        <td class="align-middle text-center py-1">
                            {{^isused}}
                                <a href="#" data-action-delete="1">
                                    {{#pix}} t/delete, core, {{#str}} gradeitemdelete, quiz, {{{name}}} {{/str}} {{/pix}}
                                </a>
                            {{/isused}}
                        </td>
                    </tr>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr data-quiz-grade-item-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <th scope="row" class="align-middle font-weight-normal py-1">
';
                $buffer .= $indent . '                            <span class="inplaceeditable inplaceeditable-text w-100"
';
                $buffer .= $indent . '                                data-raw-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-edit-label="';
                $value = $context->find('str');
                $buffer .= $this->section6c40b7346987afd901b908810163dc21($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                    <a href="#" class="quickeditlink w-100" data-action-edit="1" title="';
                $value = $context->find('str');
                $buffer .= $this->section0a8f3bb2b81b245dde14f65aad11e6e2($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                        <span class="displayvalue">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        <span class="quickediticon">
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionBc2304e08ddd7c882749d11387394a9c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </span>
';
                $buffer .= $indent . '                                    </a>
';
                $buffer .= $indent . '                            </span>
';
                $buffer .= $indent . '                        </th>
';
                $buffer .= $indent . '                        <td class="align-middle text-right py-1">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('summarks'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td class="align-middle text-center py-1">
';
                $value = $context->find('isused');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a href="#" data-action-delete="1">
';
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->sectionE72f3151903674a371a612ae65c81b0f($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                </a>
';
                }
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1e975afca86fbc7f9495907f92fbe6d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <table class="generaltable table-responsive" id="mod_quiz-grade-item-list" data-quiz-id="{{quizid}}">
            <caption class="sr-only"> {{#str}} gradeitems, grades {{/str}} </caption>
            <thead>
                <tr>
                    <th scope="col">{{#str}} gradeitem, grades {{/str}}</th>
                    <th scope="col">{{#str}} totalmarks, quiz {{/str}}</th>
                    <th scope="col">{{#str}} actions {{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#gradeitems}}
                    <tr data-quiz-grade-item-id="{{id}}">
                        <th scope="row" class="align-middle font-weight-normal py-1">
                            <span class="inplaceeditable inplaceeditable-text w-100"
                                data-raw-name="{{name}}" data-edit-label="{{#str}} gradeitemnewname, quiz, {{{displayname}}} {{/str}}">
                                    <a href="#" class="quickeditlink w-100" data-action-edit="1" title="{{#str}} gradeitemedit, quiz, {{{displayname}}} {{/str}}">
                                        <span class="displayvalue">{{{displayname}}}</span>
                                        <span class="quickediticon">
                                            {{#pix}}t/editstring, core{{/pix}}
                                        </span>
                                    </a>
                            </span>
                        </th>
                        <td class="align-middle text-right py-1">
                            {{summarks}}
                        </td>
                        <td class="align-middle text-center py-1">
                            {{^isused}}
                                <a href="#" data-action-delete="1">
                                    {{#pix}} t/delete, core, {{#str}} gradeitemdelete, quiz, {{{name}}} {{/str}} {{/pix}}
                                </a>
                            {{/isused}}
                        </td>
                    </tr>
                {{/gradeitems}}
            </tbody>
        </table>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <table class="generaltable table-responsive" id="mod_quiz-grade-item-list" data-quiz-id="';
                $value = $this->resolveValue($context->find('quizid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <caption class="sr-only"> ';
                $value = $context->find('str');
                $buffer .= $this->section12d5517e1cc90843a5a2cef9a1c4ddcf($context, $indent, $value);
                $buffer .= ' </caption>
';
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section63b0a616e5349fce6984869a1897293d($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section63671965f51df59333915e40989bcfa6($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section517e745f3e01be78cd6fc043117c11fc($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                $value = $context->find('gradeitems');
                $buffer .= $this->sectionF37643de9440ef2db1c57ff11bc503d4($context, $indent, $value);
                $buffer .= $indent . '            </tbody>
';
                $buffer .= $indent . '        </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f298b2bf0486c8922c1ae5075b85cb8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' additem, grades';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' additem, grades';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF0e7e094456b3697e3b85cb3d747a733(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemsautosetup, quiz';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemsautosetup, quiz';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFe2d008a39031bddc12ddd7f92dc42dc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <button type="button" class="btn btn-secondary" id="mod_quiz-grades_auto_setup"
                    data-quiz-id="{{quizid}}">{{#str}} gradeitemsautosetup, quiz{{/str}}</button>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <button type="button" class="btn btn-secondary" id="mod_quiz-grades_auto_setup"
';
                $buffer .= $indent . '                    data-quiz-id="';
                $value = $this->resolveValue($context->find('quizid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionF0e7e094456b3697e3b85cb3d747a733($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46faa14d1a3d4e04bdd00a6525870de0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemmarkscheme, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemmarkscheme, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa231170f59d36f0fbd7f0216576a488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numberabbr, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numberabbr, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section722dab7cf8986bedcf4e80c1677ffdee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' question, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' question, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEbaac385654005b70215f731631bace9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' marks, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' marks, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2feb874b1badc97db0e7f0181abc7a03(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6313436f7604afbac7e141c1b21d3664(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <option value="{{id}}"{{#isselected}} selected="selected"{{/isselected}}>{{{choice}}}</option>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <option value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $value = $context->find('isselected');
                $buffer .= $this->section2feb874b1badc97db0e7f0181abc7a03($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('choice'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0e89243daf6dfb6298f02fd86a09a2c9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <tr>
                            <td class="align-middle py-1">{{displaynumber}}</td>
                            <th scope="row" class="align-middle py-1"><label for="grade-item-choice-{{id}}" class="my-1">{{{displayname}}}</label></th>
                            <td class="align-middle text-right py-1">{{maxmark}}</td>
                            <td class="align-middle py-1">
                                <select id="grade-item-choice-{{id}}" class="form-control" data-slot-id="{{id}}">
                                    {{#choices}}
                                        <option value="{{id}}"{{#isselected}} selected="selected"{{/isselected}}>{{{choice}}}</option>
                                    {{/choices}}
                                </select>
                            </td>
                        </tr>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <tr>
';
                $buffer .= $indent . '                            <td class="align-middle py-1">';
                $value = $this->resolveValue($context->find('displaynumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <th scope="row" class="align-middle py-1"><label for="grade-item-choice-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="my-1">';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</label></th>
';
                $buffer .= $indent . '                            <td class="align-middle text-right py-1">';
                $value = $this->resolveValue($context->find('maxmark'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                            <td class="align-middle py-1">
';
                $buffer .= $indent . '                                <select id="grade-item-choice-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-control" data-slot-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('choices');
                $buffer .= $this->section6313436f7604afbac7e141c1b21d3664($context, $indent, $value);
                $buffer .= $indent . '                                </select>
';
                $buffer .= $indent . '                            </td>
';
                $buffer .= $indent . '                        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85ec2181f24fd14576184f520d19e4b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr class="mod_quiz-new-section">
                        <td colspan="4">
                            <h4>{{{displayname}}}</h4>
                        </td>
                    </tr>

                    {{#slots}}
                        <tr>
                            <td class="align-middle py-1">{{displaynumber}}</td>
                            <th scope="row" class="align-middle py-1"><label for="grade-item-choice-{{id}}" class="my-1">{{{displayname}}}</label></th>
                            <td class="align-middle text-right py-1">{{maxmark}}</td>
                            <td class="align-middle py-1">
                                <select id="grade-item-choice-{{id}}" class="form-control" data-slot-id="{{id}}">
                                    {{#choices}}
                                        <option value="{{id}}"{{#isselected}} selected="selected"{{/isselected}}>{{{choice}}}</option>
                                    {{/choices}}
                                </select>
                            </td>
                        </tr>
                    {{/slots}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr class="mod_quiz-new-section">
';
                $buffer .= $indent . '                        <td colspan="4">
';
                $buffer .= $indent . '                            <h4>';
                $value = $this->resolveValue($context->find('displayname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h4>
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $buffer .= $indent . '
';
                $value = $context->find('slots');
                $buffer .= $this->section0e89243daf6dfb6298f02fd86a09a2c9($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section11d978f7677fe9ccfef1700237539399(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <table class="generaltable table-responsive" id="mod_quiz-slot-list" data-quiz-id="{{quizid}}">
            <caption class="sr-only"> {{#str}} gradeitemmarkscheme, quiz {{/str}} </caption>
            <thead>
                <tr>
                    <th scope="col">{{#str}} numberabbr, quiz {{/str}}</th>
                    <th scope="col">{{#str}} question, quiz {{/str}}</th>
                    <th scope="col">{{#str}} marks, quiz {{/str}}</th>
                    <th scope="col">{{#str}} gradeitem, grades {{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#sections}}
                    <tr class="mod_quiz-new-section">
                        <td colspan="4">
                            <h4>{{{displayname}}}</h4>
                        </td>
                    </tr>

                    {{#slots}}
                        <tr>
                            <td class="align-middle py-1">{{displaynumber}}</td>
                            <th scope="row" class="align-middle py-1"><label for="grade-item-choice-{{id}}" class="my-1">{{{displayname}}}</label></th>
                            <td class="align-middle text-right py-1">{{maxmark}}</td>
                            <td class="align-middle py-1">
                                <select id="grade-item-choice-{{id}}" class="form-control" data-slot-id="{{id}}">
                                    {{#choices}}
                                        <option value="{{id}}"{{#isselected}} selected="selected"{{/isselected}}>{{{choice}}}</option>
                                    {{/choices}}
                                </select>
                            </td>
                        </tr>
                    {{/slots}}
                {{/sections}}
            </tbody>
        </table>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <table class="generaltable table-responsive" id="mod_quiz-slot-list" data-quiz-id="';
                $value = $this->resolveValue($context->find('quizid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <caption class="sr-only"> ';
                $value = $context->find('str');
                $buffer .= $this->section46faa14d1a3d4e04bdd00a6525870de0($context, $indent, $value);
                $buffer .= ' </caption>
';
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '                <tr>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->sectionAa231170f59d36f0fbd7f0216576a488($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section722dab7cf8986bedcf4e80c1677ffdee($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->sectionEbaac385654005b70215f731631bace9($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section63b0a616e5349fce6984869a1897293d($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                $value = $context->find('sections');
                $buffer .= $this->section85ec2181f24fd14576184f520d19e4b9($context, $indent, $value);
                $buffer .= $indent . '            </tbody>
';
                $buffer .= $indent . '        </table>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd6e4ee73fdbe97907f63269fc8894e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemsremovealltitle, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemsremovealltitle, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4ab212bc43cb7d3b2a7fe4cd7d4fd95c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gradeitemsremoveall, quiz ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gradeitemsremoveall, quiz ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32767f4bb15f9c389eb7d4958ec74224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <h3>{{#str}} gradeitemsremovealltitle, quiz {{/str}}</h3>
            <button type="button" class="btn btn-danger" id="mod_quiz-grades_reset_all"
                data-quiz-id="{{quizid}}">{{#str}} gradeitemsremoveall, quiz {{/str}}</button>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <h3>';
                $value = $context->find('str');
                $buffer .= $this->sectionBd6e4ee73fdbe97907f63269fc8894e9($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <button type="button" class="btn btn-danger" id="mod_quiz-grades_reset_all"
';
                $buffer .= $indent . '                data-quiz-id="';
                $value = $this->resolveValue($context->find('quizid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section4ab212bc43cb7d3b2a7fe4cd7d4fd95c($context, $indent, $value);
                $buffer .= '</button>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
