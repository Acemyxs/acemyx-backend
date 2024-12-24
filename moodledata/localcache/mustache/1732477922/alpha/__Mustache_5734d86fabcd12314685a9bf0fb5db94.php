<?php

class __Mustache_5734d86fabcd12314685a9bf0fb5db94 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="insight col-12 col-md-6 col-xl-3 mb-5" data-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <div class="insight-wrapper p-4">
';
        $value = $context->find('pro');
        $buffer .= $this->sectionC3c68340945ebae9532d738556aeca2e($context, $indent, $value);
        $buffer .= $indent . '        <div class="insight-image">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('icon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <h5 class="insight-title mb-0">';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h5>
';
        $buffer .= $indent . '        <div class="insight-wrap">
';
        $buffer .= $indent . '        </div>
';
        $value = $context->find('editing');
        $buffer .= $this->sectionD8fd39abd36b81a4f82e285a9252ffe1($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCd4b16dc238bc46ae91dbd0f1332d3bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' unlockthisfeature, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' unlockthisfeature, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section10df26e8f7842d0834ddea68c0c65793(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' upgradetopro, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' upgradetopro, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC784b7ceb53c52f2fb20b6be68ec130c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <a href="{{{upgradelink}}}" class="btn theme-primary-bg text-white ml-2" target="_blank">{{#str}} upgradetopro, local_edwiserreports {{/str}}</a>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('upgradelink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="btn theme-primary-bg text-white ml-2" target="_blank">';
                $value = $context->find('str');
                $buffer .= $this->section10df26e8f7842d0834ddea68c0c65793($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC3c68340945ebae9532d738556aeca2e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="pro-lock">
                {{{pro}}}
            </div>
            <div class="upgrade-to-pro text-white">
                <div class="upgrade-notice text-center">
                    <h4 class="text-white">{{#str}} unlockthisfeature, local_edwiserreports {{/str}}</h4>
                    {{#upgradelink}}
                        <a href="{{{upgradelink}}}" class="btn theme-primary-bg text-white ml-2" target="_blank">{{#str}} upgradetopro, local_edwiserreports {{/str}}</a>
                    {{/upgradelink}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="pro-lock">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('pro'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="upgrade-to-pro text-white">
';
                $buffer .= $indent . '                <div class="upgrade-notice text-center">
';
                $buffer .= $indent . '                    <h4 class="text-white">';
                $value = $context->find('str');
                $buffer .= $this->sectionCd4b16dc238bc46ae91dbd0f1332d3bd($context, $indent, $value);
                $buffer .= '</h4>
';
                $value = $context->find('upgradelink');
                $buffer .= $this->sectionC784b7ceb53c52f2fb20b6be68ec130c($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD8fd39abd36b81a4f82e285a9252ffe1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="card-editing btn-group d-flex">
                <button class="btn bg-secondary move-left" data-id="{{id}}">
                    <i class="fa fa-arrow-left"></i>
                </button>
                <button class="btn bg-secondary move-right" data-id="{{id}}">
                    <i class="fa fa-arrow-right"></i>
                </button>
                <button class="btn bg-secondary edit-hide" data-id="{{id}}">
                    <i class="fa fa-eye"></i>
                </button>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="card-editing btn-group d-flex">
';
                $buffer .= $indent . '                <button class="btn bg-secondary move-left" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <i class="fa fa-arrow-left"></i>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <button class="btn bg-secondary move-right" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <i class="fa fa-arrow-right"></i>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '                <button class="btn bg-secondary edit-hide" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <i class="fa fa-eye"></i>
';
                $buffer .= $indent . '                </button>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
