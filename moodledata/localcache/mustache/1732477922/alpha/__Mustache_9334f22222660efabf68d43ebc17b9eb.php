<?php

class __Mustache_9334f22222660efabf68d43ebc17b9eb extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('hascourses');
        $buffer .= $this->section98c5acf2d1e444946565f9563dcc56ba($context, $indent, $value);
        $value = $context->find('hascourses');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="pie-placeholder position-relative mt-50">
';
            $buffer .= $indent . '        ';
            $value = $context->find('pix');
            $buffer .= $this->sectionFbacea4709e6d35d6bf83f8c39056946($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '        <div class="position-absolute w-full" style="top: 45%;">
';
            $buffer .= $indent . '            <div class="alert alert-secondary text-center w-full" role="alert">
';
            $buffer .= $indent . '                ';
            $value = $context->find('str');
            $buffer .= $this->sectionF6c3a10a59317d4e56e72ce041893f9d($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '            </div>
';
            $buffer .= $indent . '        </div>
';
            $buffer .= $indent . '    </div>
';
        }

        return $buffer;
    }

    private function section98c5acf2d1e444946565f9563dcc56ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="insight">
        {{> local_edwiserreports/insight-placeholder }}
    </div>
    <div id="apex-chart-course-progress"></div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="insight">
';
                if ($partial = $this->mustache->loadPartial('local_edwiserreports/insight-placeholder')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div id="apex-chart-course-progress"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFbacea4709e6d35d6bf83f8c39056946(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pie-placeholder, local_edwiserreports';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pie-placeholder, local_edwiserreports';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF6c3a10a59317d4e56e72ce041893f9d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nocourses, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nocourses, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
