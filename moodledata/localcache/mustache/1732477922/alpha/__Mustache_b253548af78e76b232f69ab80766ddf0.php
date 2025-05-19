<?php

class __Mustache_b253548af78e76b232f69ab80766ddf0 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<table class="table w-100 admintable">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section4e8b20a9fe6d8f29751db4d6458c169e($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </th>
';
        $buffer .= $indent . '            <th>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->section9580cf5b027cd4376ef78414b1cca9a9($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </th>
';
        $buffer .= $indent . '            <th>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionC139f94cfd58d9c268a8bd2176815487($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </th>
';
        $buffer .= $indent . '            <th>
';
        $buffer .= $indent . '                ';
        $value = $context->find('str');
        $buffer .= $this->sectionB2359923da58f01851bcadba0cda8e66($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            </th>
';
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('activeusers');
        $buffer .= $this->section2c39bda652b3253e7d2f951b0ca403e8($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';

        return $buffer;
    }

    private function section4e8b20a9fe6d8f29751db4d6458c169e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' date, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' date, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9580cf5b027cd4376ef78414b1cca9a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofactiveusers, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noofactiveusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC139f94cfd58d9c268a8bd2176815487(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofenrolledusers, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noofenrolledusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2359923da58f01851bcadba0cda8e66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' noofcompletedusers, local_edwiserreports ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' noofcompletedusers, local_edwiserreports ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c39bda652b3253e7d2f951b0ca403e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr>
            <td>
                <span class="d-none">{{filter}}</span>
                {{{date}}}
            </td>
            <td>
                <a href="javascript:void(0)" class="w-full text-decoration-none" data-action="activeusers" data-filter="{{filter}}">
                    {{activeusers}}
                </a>
            </td>
            <td>
                <a href="javascript:void(0)" class="w-full text-decoration-none" data-action="enrolments" data-filter="{{filter}}">
                    {{courseenrolment}}
                </a>
            </td>
            <td>
                <a href="javascript:void(0)" class="w-full text-decoration-none" data-action="completions" data-filter="{{filter}}">
                    {{coursecompletion}}
                </a>
            </td>
        </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <span class="d-none">';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('date'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="javascript:void(0)" class="w-full text-decoration-none" data-action="activeusers" data-filter="';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('activeusers'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="javascript:void(0)" class="w-full text-decoration-none" data-action="enrolments" data-filter="';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('courseenrolment'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                <a href="javascript:void(0)" class="w-full text-decoration-none" data-action="completions" data-filter="';
                $value = $this->resolveValue($context->find('filter'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('coursecompletion'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </a>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
