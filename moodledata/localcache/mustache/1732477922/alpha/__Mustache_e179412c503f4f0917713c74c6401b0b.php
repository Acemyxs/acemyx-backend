<?php

class __Mustache_e179412c503f4f0917713c74c6401b0b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid border">
';
        $value = $context->find('zerostate');
        $buffer .= $this->section300fd13a3538cd4aa1f8aa153a1dd93f($context, $indent, $value);
        $buffer .= $indent . '    <div class="container my-3">
';
        $value = $context->find('item');
        $buffer .= $this->section38d869fe03d6e5054e1690424a1f5364($context, $indent, $value);
        $value = $context->find('userview');
        $buffer .= $this->sectionEc95607a336d2660b3082400027b9d0e($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section50148a83b01aa48751ad55475b7ff5da($context, $indent, $value);

        return $buffer;
    }

    private function section90b9dbdf1c31a757dbedb0da10b672a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tradecenter:zero, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tradecenter:zero, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5266cc6e23c055756e0655cd0959e76f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'tradecenterdetail:zero, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'tradecenterdetail:zero, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section300fd13a3538cd4aa1f8aa153a1dd93f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="zero-state mx-auto w-50 text-center my-6">
        <h3>{{#str}}tradecenter:zero, block_stash{{/str}}</h3>
        <p>{{#str}}tradecenterdetail:zero, block_stash{{/str}}</p>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="zero-state mx-auto w-50 text-center my-6">
';
                $buffer .= $indent . '        <h3>';
                $value = $context->find('str');
                $buffer .= $this->section90b9dbdf1c31a757dbedb0da10b672a6($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '        <p>';
                $value = $context->find('str');
                $buffer .= $this->section5266cc6e23c055756e0655cd0959e76f($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section71d7d540d3ef83709707af6023ef9ab3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'participantswithitem, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'participantswithitem, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d097cbacf8fa62afad7e721cbfde19f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'requestswap, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'requestswap, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3d1fdefa21dfc95ea362fdd4bd7e9ce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="list-item my-1">
                    {{{pic}}}
                    {{fullname}}
                    <span>
                        <button
                         class="btn btn-secondary"
                         data-swap data-courseid={{other.courseid}}
                         data-userid="{{id}}"
                         data-itemid="{{item.id}}"
                         data-myuserid="{{other.myuserid}}"
                         >
                            {{#str}}requestswap, block_stash{{/str}}
                        </button>
                    </span>
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="list-item my-1">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('pic'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    <span>
';
                $buffer .= $indent . '                        <button
';
                $buffer .= $indent . '                         class="btn btn-secondary"
';
                $buffer .= $indent . '                         data-swap data-courseid=';
                $value = $this->resolveValue($context->findDot('other.courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                         data-userid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                         data-itemid="';
                $value = $this->resolveValue($context->findDot('item.id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                         data-myuserid="';
                $value = $this->resolveValue($context->findDot('other.myuserid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"
';
                $buffer .= $indent . '                         >
';
                $buffer .= $indent . '                            ';
                $value = $context->find('str');
                $buffer .= $this->section2d097cbacf8fa62afad7e721cbfde19f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </button>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section38d869fe03d6e5054e1690424a1f5364(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="border py-2 px-3">
            <h3 class="h5">{{item.name}}</h3>
            {{>block_stash/item_detail}}
        </div>
        <div class="border my-3 py-3 px-3">
            <p class="font-weight-bold">{{#str}}participantswithitem, block_stash{{/str}}</p>
            <ul class="list-group list-unstyled list-group-flush ml-3">
            {{#users}}
                <li class="list-item my-1">
                    {{{pic}}}
                    {{fullname}}
                    <span>
                        <button
                         class="btn btn-secondary"
                         data-swap data-courseid={{other.courseid}}
                         data-userid="{{id}}"
                         data-itemid="{{item.id}}"
                         data-myuserid="{{other.myuserid}}"
                         >
                            {{#str}}requestswap, block_stash{{/str}}
                        </button>
                    </span>
                </li>
            {{/users}}
            </ul>
        </div>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="border py-2 px-3">
';
                $buffer .= $indent . '            <h3 class="h5">';
                $value = $this->resolveValue($context->findDot('item.name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                if ($partial = $this->mustache->loadPartial('block_stash/item_detail')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="border my-3 py-3 px-3">
';
                $buffer .= $indent . '            <p class="font-weight-bold">';
                $value = $context->find('str');
                $buffer .= $this->section71d7d540d3ef83709707af6023ef9ab3($context, $indent, $value);
                $buffer .= '</p>
';
                $buffer .= $indent . '            <ul class="list-group list-unstyled list-group-flush ml-3">
';
                $value = $context->find('users');
                $buffer .= $this->sectionD3d1fdefa21dfc95ea362fdd4bd7e9ce($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section20de7ce1a1a98d6e671eeadd38f164eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'trade, block_stash';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'trade, block_stash';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc95607a336d2660b3082400027b9d0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="border py-2 px-3">
            <h3 class="h5">{{fullname}}</h3>
            <div>{{{pic}}}</div>
            <div class="py-2">
                <button class="btn btn-secondary" data-swap data-courseid={{other.courseid}} data-userid="{{id}}" data-myuserid="{{other.myuserid}}">{{#str}}trade, block_stash{{/str}}</button>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="border py-2 px-3">
';
                $buffer .= $indent . '            <h3 class="h5">';
                $value = $this->resolveValue($context->find('fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '            <div>';
                $value = $this->resolveValue($context->find('pic'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            <div class="py-2">
';
                $buffer .= $indent . '                <button class="btn btn-secondary" data-swap data-courseid=';
                $value = $this->resolveValue($context->findDot('other.courseid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' data-userid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-myuserid="';
                $value = $this->resolveValue($context->findDot('other.myuserid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section20de7ce1a1a98d6e671eeadd38f164eb($context, $indent, $value);
                $buffer .= '</button>
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

    private function section50148a83b01aa48751ad55475b7ff5da(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require(["block_stash/swap"], function(Swap) {
    Swap.init();
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require(["block_stash/swap"], function(Swap) {
';
                $buffer .= $indent . '    Swap.init();
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
