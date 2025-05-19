<?php

class __Mustache_815b4bf6a4dd977462f891c16bf82533 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="managecompetencies">
';
        $buffer .= $indent . '<div class="mt-4">
';
        $value = $context->find('navigation');
        $buffer .= $this->section6d4af991aa56073211a0edc4e22533f1($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<table class="generaltable fullwidth managecompetencies position-relative my-2">
';
        $buffer .= $indent . '    <caption>';
        $value = $context->find('str');
        $buffer .= $this->sectionD2d4838929bb78948eb74df67b503e3c($context, $indent, $value);
        $buffer .= '</caption>
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->sectionB1fd7686b4a34b4e8fd3eb33036c7c1e($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section8ed303db86c24a1b6bfe4c5a8f2ef600($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section90c1d8099fef946d3189832d85e9dda0($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section4df404defbaa4e47c852157743964c8c($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody class="drag-parentnode">
';
        $value = $context->find('competencyframeworks');
        $buffer .= $this->sectionBaafe4c82d15d9e6abaf7a28bb2193d1($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $value = $context->find('competencyframeworks');
        if (empty($value)) {
            
            $buffer .= $indent . '<div class="alert alert-danger">
';
            $buffer .= $indent . '    ';
            $value = $context->find('str');
            $buffer .= $this->sectionEaca76ed9ff59609806f9d3323451d7b($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '</div>
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section4397656d6dd7e35a606293764e4f2b32($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section6d4af991aa56073211a0edc4e22533f1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{.}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD2d4838929bb78948eb74df67b503e3c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'listcompetencyframeworkscaption, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'listcompetencyframeworkscaption, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB1fd7686b4a34b4e8fd3eb33036c7c1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competencyframeworkname, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'competencyframeworkname, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ed303db86c24a1b6bfe4c5a8f2ef600(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'competencies, core_competency';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'competencies, core_competency';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section90c1d8099fef946d3189832d85e9dda0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'category, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'category, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4df404defbaa4e47c852157743964c8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'actions, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDf976870e5dbb97c0ac7298e3aa37fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'hiddenhint, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'hiddenhint, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd3b4bf865abc6ce6b96cc2301a00c9b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'edit';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'edit';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5dff071e27fd422844ff835665ff6b34(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/edit, core,';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/edit, core,';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF714faa893b35e525f964fc3dc4236af(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/copy, core,';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/copy, core,';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBf623b389543c67317818195dc1f9292(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'duplicate';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'duplicate';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8b9fdcbda8f439d1ebf3c4dc3a0405bb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/delete, core,';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/delete, core,';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f92e409dad2d31675245b12b8825d4e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'delete';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'delete';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8312ed582aa21ef8e917315187133779(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul title="{{#str}}edit{{/str}}" class="competencyframeworkactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown dropdown-menu">
                        <li class="dropdown-item">
                            <a href="{{pluginbaseurl}}/editcompetencyframework.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">
                                {{#pix}}t/edit, core,{{/pix}} {{#str}}edit{{/str}}
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a data-action="duplicatecompetencyframework" href="#" data-frameworkid="{{id}}">
                                {{#pix}}t/copy, core,{{/pix}} {{#str}}duplicate{{/str}}
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a data-action="deletecompetencyframework" href="#" data-frameworkid="{{id}}">
                                {{#pix}}t/delete, core,{{/pix}} {{#str}}delete{{/str}}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul title="';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '" class="competencyframeworkactions">
';
                $buffer .= $indent . '                <li>
';
                $buffer .= $indent . '                    <a href="#">';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '</a><b class="caret"></b>
';
                $buffer .= $indent . '                    <ul class="dropdown dropdown-menu">
';
                $buffer .= $indent . '                        <li class="dropdown-item">
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/editcompetencyframework.php?id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('pix');
                $buffer .= $this->section5dff071e27fd422844ff835665ff6b34($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionAd3b4bf865abc6ce6b96cc2301a00c9b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li class="dropdown-item">
';
                $buffer .= $indent . '                            <a data-action="duplicatecompetencyframework" href="#" data-frameworkid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('pix');
                $buffer .= $this->sectionF714faa893b35e525f964fc3dc4236af($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionBf623b389543c67317818195dc1f9292($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                        <li class="dropdown-item">
';
                $buffer .= $indent . '                            <a data-action="deletecompetencyframework" href="#" data-frameworkid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                ';
                $value = $context->find('pix');
                $buffer .= $this->section8b9fdcbda8f439d1ebf3c4dc3a0405bb($context, $indent, $value);
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->section8f92e409dad2d31675245b12b8825d4e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                        </li>
';
                $buffer .= $indent . '                    </ul>
';
                $buffer .= $indent . '                </li>
';
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBaafe4c82d15d9e6abaf7a28bb2193d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr class="drag-samenode" data-frameworkid="{{id}}">
            <td><span class="drag-handlecontainer"></span><span><a href="{{pluginbaseurl}}/competencies.php?competencyframeworkid={{id}}&amp;pagecontextid={{pagecontextid}}">{{{shortname}}} ({{idnumber}})</a></span> {{^visible}}{{#str}}hiddenhint, tool_lp{{/str}}{{/visible}}</td>
            <td>{{competenciescount}}</td>
            <td>{{contextnamenoprefix}}</td>
            <td>
            {{#canmanage}}
            <ul title="{{#str}}edit{{/str}}" class="competencyframeworkactions">
                <li>
                    <a href="#">{{#str}}edit{{/str}}</a><b class="caret"></b>
                    <ul class="dropdown dropdown-menu">
                        <li class="dropdown-item">
                            <a href="{{pluginbaseurl}}/editcompetencyframework.php?id={{id}}&amp;pagecontextid={{pagecontextid}}">
                                {{#pix}}t/edit, core,{{/pix}} {{#str}}edit{{/str}}
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a data-action="duplicatecompetencyframework" href="#" data-frameworkid="{{id}}">
                                {{#pix}}t/copy, core,{{/pix}} {{#str}}duplicate{{/str}}
                            </a>
                        </li>
                        <li class="dropdown-item">
                            <a data-action="deletecompetencyframework" href="#" data-frameworkid="{{id}}">
                                {{#pix}}t/delete, core,{{/pix}} {{#str}}delete{{/str}}
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            {{/canmanage}}
            </td>
        </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr class="drag-samenode" data-frameworkid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <td><span class="drag-handlecontainer"></span><span><a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/competencies.php?competencyframeworkid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&amp;pagecontextid=';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('shortname'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' (';
                $value = $this->resolveValue($context->find('idnumber'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ')</a></span> ';
                $value = $context->find('visible');
                if (empty($value)) {
                    
                    $value = $context->find('str');
                    $buffer .= $this->sectionDf976870e5dbb97c0ac7298e3aa37fe6($context, $indent, $value);
                }
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('competenciescount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td>';
                $value = $this->resolveValue($context->find('contextnamenoprefix'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '            <td>
';
                $value = $context->find('canmanage');
                $buffer .= $this->section8312ed582aa21ef8e917315187133779($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEaca76ed9ff59609806f9d3323451d7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'nocompetencyframeworks, tool_lp';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'nocompetencyframeworks, tool_lp';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4397656d6dd7e35a606293764e4f2b32(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS.
require([\'tool_lp/frameworkactions\',
         \'tool_lp/menubar\'],
        function(actionsMod, menubar) {

    actionsMod.init({{pagecontextid}});

    menubar.enhance(\'.competencyframeworkactions\', {
        "[data-action=\'deletecompetencyframework\']": actionsMod.deleteHandler,
        "[data-action=\'duplicatecompetencyframework\']": actionsMod.duplicateHandler,
    });
});

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '// Initialise the JS.
';
                $buffer .= $indent . 'require([\'tool_lp/frameworkactions\',
';
                $buffer .= $indent . '         \'tool_lp/menubar\'],
';
                $buffer .= $indent . '        function(actionsMod, menubar) {
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    actionsMod.init(';
                $value = $this->resolveValue($context->find('pagecontextid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    menubar.enhance(\'.competencyframeworkactions\', {
';
                $buffer .= $indent . '        "[data-action=\'deletecompetencyframework\']": actionsMod.deleteHandler,
';
                $buffer .= $indent . '        "[data-action=\'duplicatecompetencyframework\']": actionsMod.duplicateHandler,
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
