<?php

class __Mustache_e2211e75a3bda93e6b5a9aa43aa76f7b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="edwiser_plugins_recommendation container">
';
        $value = $context->find('error');
        $buffer .= $this->section41c38f401750ccb318c90e05474d80ac($context, $indent, $value);
        $value = $context->find('has');
        $buffer .= $this->sectionBb66ac9bd96b962244eecf0c82fd3796($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section41c38f401750ccb318c90e05474d80ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{error}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('error'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5deab4a3af37db1068e56b249067f8c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' knowmore, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' knowmore, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4521e99037d014a5d778e9b7678f8af5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li class="recommendation-item p-3 {{cardclass}}">
          <div class="card card-shadow h-100">
            <div class="card-header cover">
              <img class="cover-image" src="{{image}}" alt="...">
            </div>
            <div class="card-block">
              <h3 class="card-title">{{title}}</h3>
              <p class="card-text">{{description}}</p>
            </div>
            <div class="px-5 pb-5">
              <a target="_blank" href="{{purchaseurl}}" class="btn btn-warning text-white card-link">{{#str}} knowmore, block_edwiser_site_monitor {{/str}}</a>
            </div>
          </div>
        </li>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li class="recommendation-item p-3 ';
                $value = $this->resolveValue($context->find('cardclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="card card-shadow h-100">
';
                $buffer .= $indent . '            <div class="card-header cover">
';
                $buffer .= $indent . '              <img class="cover-image" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="...">
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="card-block">
';
                $buffer .= $indent . '              <h3 class="card-title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h3>
';
                $buffer .= $indent . '              <p class="card-text">';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</p>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="px-5 pb-5">
';
                $buffer .= $indent . '              <a target="_blank" href="';
                $value = $this->resolveValue($context->find('purchaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-warning text-white card-link">';
                $value = $context->find('str');
                $buffer .= $this->sectionD5deab4a3af37db1068e56b249067f8c($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb66ac9bd96b962244eecf0c82fd3796(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <ul class="recommendation-list blocks row">
        {{#plugins}}
        <li class="recommendation-item p-3 {{cardclass}}">
          <div class="card card-shadow h-100">
            <div class="card-header cover">
              <img class="cover-image" src="{{image}}" alt="...">
            </div>
            <div class="card-block">
              <h3 class="card-title">{{title}}</h3>
              <p class="card-text">{{description}}</p>
            </div>
            <div class="px-5 pb-5">
              <a target="_blank" href="{{purchaseurl}}" class="btn btn-warning text-white card-link">{{#str}} knowmore, block_edwiser_site_monitor {{/str}}</a>
            </div>
          </div>
        </li>
        {{/plugins}}
    </ul>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <ul class="recommendation-list blocks row">
';
                $value = $context->find('plugins');
                $buffer .= $this->section4521e99037d014a5d778e9b7678f8af5($context, $indent, $value);
                $buffer .= $indent . '    </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
