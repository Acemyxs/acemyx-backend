<?php

class __Mustache_51952a9c078d0a72952fbf2f96061f4f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="btn-group">
';
        $buffer .= $indent . '    <!-- Set as a link to appease Goutte behat. -->
';
        $buffer .= $indent . '    <a href="#" class="btn btn-secondary btn-icon rounded-circle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="';
        $value = $context->find('str');
        $buffer .= $this->sectionCe65cc59832348d184573af1bbb90aa8($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
        $buffer .= $indent . '            <path fill="currentColor" d="M13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12Z"></path>
';
        $buffer .= $indent . '            <path fill="currentColor" d="M13 8C13 8.55228 12.5523 9 12 9C11.4477 9 11 8.55228 11 8C11 7.44772 11.4477 7 12 7C12.5523 7 13 7.44772 13 8Z"></path>
';
        $buffer .= $indent . '            <path fill="currentColor" d="M13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16C11 15.4477 11.4477 15 12 15C12.5523 15 13 15.4477 13 16Z"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '    <div class="dropdown-menu dropdown-menu-right">
';
        $value = $context->find('newcourseurl');
        $buffer .= $this->sectionBa12b583721ebd49196869d56107eff4($context, $indent, $value);
        $value = $context->find('manageurl');
        $buffer .= $this->sectionBcc17d0879ecdc93e2575775c495c662($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionCe65cc59832348d184573af1bbb90aa8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'coursemanagementoptions, my';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'coursemanagementoptions, my';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section45fa045a20a700836bee54f962d54aae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'newcourse, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'newcourse, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa12b583721ebd49196869d56107eff4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="dropdown-item" href="{{newcourseurl}}">{{#str}}newcourse, core{{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('newcourseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->section45fa045a20a700836bee54f962d54aae($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAfcc826bc3fc756a6645e32600fb8b3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'managecourses, core';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'managecourses, core';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBcc17d0879ecdc93e2575775c495c662(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a class="dropdown-item" href="{{manageurl}}">{{#str}}managecourses, core{{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a class="dropdown-item" href="';
                $value = $this->resolveValue($context->find('manageurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionAfcc826bc3fc756a6645e32600fb8b3d($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
