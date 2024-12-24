<?php

class __Mustache_f3eaa6e8f2fd461310af31b994634e57 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="edwiser_plugins_contactus container">
';
        $buffer .= $indent . '    <form id="contactus_form" method="POST" action="#">
';
        $buffer .= $indent . '        <div class="form-row row">
';
        $buffer .= $indent . '            <div class="form-group col-6">
';
        $buffer .= $indent . '                <label for="firstname">';
        $value = $context->find('str');
        $buffer .= $this->sectionC164382649cfc9a3790aa3736a21b6ba($context, $indent, $value);
        $buffer .= ' <span class="text-danger">*</span>:</label>
';
        $buffer .= $indent . '                <input required name="firstname" type="text" class="form-control" id="firstname" value="';
        $value = $this->resolveValue($context->find('firstname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="form-group col-6">
';
        $buffer .= $indent . '                <label for="lastname">';
        $value = $context->find('str');
        $buffer .= $this->section0c045e9c7bc38a5ca41ef082da77823f($context, $indent, $value);
        $buffer .= ' <span class="text-danger">*</span>:</label>
';
        $buffer .= $indent . '                <input required name="lastname" type="text" class="form-control" id="lastname" value="';
        $value = $this->resolveValue($context->find('lastname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="form-group">
';
        $buffer .= $indent . '            <label for="email">';
        $value = $context->find('str');
        $buffer .= $this->section17d49b3992af544a6558a814b9256e30($context, $indent, $value);
        $buffer .= ' <span class="text-danger">*</span>:</label>
';
        $buffer .= $indent . '            <input required name="email" type="text" class="form-control" id="email" value="';
        $value = $this->resolveValue($context->find('email'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="form-group">
';
        $buffer .= $indent . '            <label for="subject">';
        $value = $context->find('str');
        $buffer .= $this->section521ab84e12445b22e4451fcdff1afd6e($context, $indent, $value);
        $buffer .= ' <span class="text-danger">*</span>:</label>
';
        $buffer .= $indent . '            <input required name="subject" type="text" class="form-control" id="subject">
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="form-group">
';
        $buffer .= $indent . '            <label for="message">';
        $value = $context->find('str');
        $buffer .= $this->sectionB5a5a408ed28206b04a31a99841b1e2c($context, $indent, $value);
        $buffer .= ' <span class="text-danger">*</span>:</label>
';
        $buffer .= $indent . '            <textarea required name="message" class="form-control" id="message"></textarea>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="checkbox">
';
        $buffer .= $indent . '            <label><input required type="checkbox"> ';
        $value = $this->resolveValue($context->find('policy'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <button type="submit" class="btn btn-primary">Submit</button>
';
        $buffer .= $indent . '    </form>
';
        $buffer .= $indent . '    <div id="contactus_form_succes" class="alert alert-icon alert-success alert-block alert-dismissible fade mt-10" role="alert">
';
        $buffer .= $indent . '        <button type="button" class="close" data-dismiss="alert">×</button>
';
        $buffer .= $indent . '        <i class="icon fa fa-check font-size-18" aria-hidden="true"></i>
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->section691fac3f885ace103e7179462bc607de($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionC164382649cfc9a3790aa3736a21b6ba(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' firstname ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' firstname ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0c045e9c7bc38a5ca41ef082da77823f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastname ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastname ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17d49b3992af544a6558a814b9256e30(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' email ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' email ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section521ab84e12445b22e4451fcdff1afd6e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subject, core_hub ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subject, core_hub ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5a5a408ed28206b04a31a99841b1e2c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' message, core_message ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' message, core_message ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section691fac3f885ace103e7179462bc607de(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' emailsuccess, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' emailsuccess, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
