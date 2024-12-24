<?php

class __Mustache_73a44c2bb906fb65f75cf08440f20d35 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('errors');
        $buffer .= $this->section936225a934b36d199939af3fa6bd8aab($context, $indent, $value);
        $value = $context->find('errors');
        if (empty($value)) {
            
            $buffer .= $indent . '<ul class="nav nav-tabs nav-tabs-line border-0 mx-15 mb-10 w-full" role="tablist">
';
            $buffer .= $indent . '    <li class="nav-item">
';
            $buffer .= $indent . '        <a class="nav-link edwiser-plugin-filter ';
            $value = $context->find('hasupdate');
            $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
            $buffer .= '" data-filter=\'update\' href="#">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->section4abe872e027d1522da189f53bd3520ae($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            <span class="badge number number-all">';
            $value = $this->resolveValue($context->find('overviewupdate'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</span>
';
            $buffer .= $indent . '        </a>
';
            $buffer .= $indent . '    </li>
';
            $buffer .= $indent . '    <li class="nav-item">
';
            $buffer .= $indent . '        <a class="nav-link edwiser-plugin-filter ';
            $value = $context->find('hasupdate');
            if (empty($value)) {
                
                $buffer .= 'active';
            }
            $buffer .= '" data-filter=\'all\' href="#">
';
            $buffer .= $indent . '            ';
            $value = $context->find('str');
            $buffer .= $this->section2a243ac085644f4bf301e627ef010eb4($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            <span class="badge number number-all">';
            $value = $this->resolveValue($context->find('overviewall'), $context);
            $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
            $buffer .= '</span>
';
            $buffer .= $indent . '        </a>
';
            $buffer .= $indent . '    </li>
';
            $buffer .= $indent . '</ul>
';
            $buffer .= $indent . '<div class="edwiser-plugin-list">
';
            $buffer .= $indent . '    <table class="generaltable ';
            $value = $context->find('hasupdate');
            $buffer .= $this->section47d66f004044b857c042bbdf70fe2cc2($context, $indent, $value);
            $buffer .= '" id="plugins-control-panel">
';
            $buffer .= $indent . '        <thead>
';
            $buffer .= $indent . '            <tr>
';
            $buffer .= $indent . '                <th class="header displayname" scope="col">';
            $value = $context->find('str');
            $buffer .= $this->section6d74511807b5afa0d6c626232b913294($context, $indent, $value);
            $buffer .= ' </th>
';
            $buffer .= $indent . '                <th class="header version" scope="col">';
            $value = $context->find('str');
            $buffer .= $this->section2fa68c59f3efaccf1c0147273801e02a($context, $indent, $value);
            $buffer .= ' </th>
';
            $buffer .= $indent . '                <th class="header notes" scope="col">';
            $value = $context->find('str');
            $buffer .= $this->section0a1e80a105c25399cec2c609db8a782c($context, $indent, $value);
            $buffer .= ' </th>
';
            $buffer .= $indent . '            </tr>
';
            $buffer .= $indent . '        </thead>
';
            $buffer .= $indent . '        <tbody>
';
            $value = $context->find('list');
            $buffer .= $this->sectionFf3f42e71a0aff4bd4642052740d38ec($context, $indent, $value);
            $buffer .= $indent . '        </tbody>
';
            $buffer .= $indent . '    </table>
';
            $buffer .= $indent . '</div>
';
        }

        return $buffer;
    }

    private function section936225a934b36d199939af3fa6bd8aab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{errors}}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('errors'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4abe872e027d1522da189f53bd3520ae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overviewupdatable, core_plugin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' overviewupdatable, core_plugin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2a243ac085644f4bf301e627ef010eb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' overviewext, core_plugin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' overviewext, core_plugin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section47d66f004044b857c042bbdf70fe2cc2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'update';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'update';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d74511807b5afa0d6c626232b913294(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' displayname, core_plugin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' displayname, core_plugin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fa68c59f3efaccf1c0147273801e02a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' version, core_plugin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' version, core_plugin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a1e80a105c25399cec2c609db8a782c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notes, core_plugin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notes, core_plugin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC317581c3aab31c9ef7b360df40ead0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <th class="pluginname cell c0 lastcol" colspan="6" scope="row">
                    <span id="plugin_type_cell_{{type}}">
                        {{{html}}}
                    </span>
                </th>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <th class="pluginname cell c0 lastcol" colspan="6" scope="row">
';
                $buffer .= $indent . '                    <span id="plugin_type_cell_';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa7eae0e798039935e56b3618e9da674(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{{html}}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('html'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5d54d04ac3ba727c3bb16b55ddecb0e0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{#has}}
                            {{{html}}}
                        {{/has}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('has');
                $buffer .= $this->sectionBa7eae0e798039935e56b3618e9da674($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFf3f42e71a0aff4bd4642052740d38ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr class="{{class}}">
            {{#header}}
                <th class="pluginname cell c0 lastcol" colspan="6" scope="row">
                    <span id="plugin_type_cell_{{type}}">
                        {{{html}}}
                    </span>
                </th>
            {{/header}}
            {{^header}}
                <td class="pluginname cell">
                    <div class="displayname">
                        {{{icon}}}{{displayname}}
                    </div>
                    <div class="componentname">{{component}}</div>
                </td>
                <td class="version cell">
                    <div class="release">{{release}}</div>
                    <div class="versionnumber">{{versiondb}}</div>
                </td>
                <td class="status cell">
                    {{{source}}}
                    {{{actions}}}
                    {{{msg}}}
                    {{{requireby}}}
                    {{{parent}}}
                    {{#update}}
                        {{#has}}
                            {{{html}}}
                        {{/has}}
                    {{/update}}
                </td>
            {{/header}}
            </tr>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <tr class="';
                $value = $this->resolveValue($context->find('class'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $value = $context->find('header');
                $buffer .= $this->sectionC317581c3aab31c9ef7b360df40ead0f($context, $indent, $value);
                $value = $context->find('header');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                <td class="pluginname cell">
';
                    $buffer .= $indent . '                    <div class="displayname">
';
                    $buffer .= $indent . '                        ';
                    $value = $this->resolveValue($context->find('icon'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $value = $this->resolveValue($context->find('displayname'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                    </div>
';
                    $buffer .= $indent . '                    <div class="componentname">';
                    $value = $this->resolveValue($context->find('component'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                </td>
';
                    $buffer .= $indent . '                <td class="version cell">
';
                    $buffer .= $indent . '                    <div class="release">';
                    $value = $this->resolveValue($context->find('release'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                    <div class="versionnumber">';
                    $value = $this->resolveValue($context->find('versiondb'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</div>
';
                    $buffer .= $indent . '                </td>
';
                    $buffer .= $indent . '                <td class="status cell">
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('source'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('actions'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('msg'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('requireby'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('parent'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '
';
                    $value = $context->find('update');
                    $buffer .= $this->section5d54d04ac3ba727c3bb16b55ddecb0e0($context, $indent, $value);
                    $buffer .= $indent . '                </td>
';
                }
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
