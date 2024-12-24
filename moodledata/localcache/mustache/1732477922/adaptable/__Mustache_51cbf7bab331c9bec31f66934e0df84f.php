<?php

class __Mustache_51cbf7bab331c9bec31f66934e0df84f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="server_live_status">
';
        $buffer .= $indent . '    <div class="progress-row">
';
        $buffer .= $indent . '        <div class="usage-header">
';
        $buffer .= $indent . '            <label class="progress-name"><i class="fa fa-server" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->section31781fe2bc9417f3ef6c2c16e4addbc8($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="usage-details">
';
        $buffer .= $indent . '            <label class="progress-label" id="esm_cpu_usage_label">';
        $value = $this->resolveValue($context->find('cpu'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%</label>
';
        $buffer .= $indent . '            <span class="command-disabled">';
        $value = $context->findDot('disabled.cpu');
        $buffer .= $this->sectionF037479469cd33a43c044d48de8435b5($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <div class="progress-wrap progress">
';
        $buffer .= $indent . '                <div class="usage-progress-bar progress-bar ';
        $value = $this->resolveValue($context->find('cpucolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="esm_cpu_usage_bar" role="progressbar" style="width: ';
        $value = $this->resolveValue($context->find('cpu'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="progress-row">
';
        $buffer .= $indent . '        <div class="usage-header">
';
        $buffer .= $indent . '            <label class="progress-name"><i class="fa fa-microchip" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->section12716d5b0c13bdae0aebc32a69ee3b63($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="usage-details">
';
        $buffer .= $indent . '            <label class="progress-label" id="esm_memory_usage_label">';
        $value = $this->resolveValue($context->find('memory'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '% (';
        $value = $this->resolveValue($context->find('memoryvalues'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ')</label>
';
        $buffer .= $indent . '            <span class="command-disabled">';
        $value = $context->findDot('disabled.memory');
        $buffer .= $this->sectionD7431806e542fb006a9949e6530f5625($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '            <div class="progress-wrap progress">
';
        $buffer .= $indent . '                <div class="usage-progress-bar progress-bar ';
        $value = $this->resolveValue($context->find('memorycolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="esm_memory_usage_bar" role="progressbar" style="width: ';
        $value = $this->resolveValue($context->find('memory'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="progress-row">
';
        $buffer .= $indent . '        <div class="usage-header">
';
        $buffer .= $indent . '            <label class="progress-name"><i class="fa fa-hdd-o" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->sectionFac1b5a7aad72940639579aef33a05f7($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="usage-details">
';
        $buffer .= $indent . '            <label class="progress-label" id="esm_storage_usage_label">';
        $value = $this->resolveValue($context->find('storage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '% (';
        $value = $this->resolveValue($context->find('storagevalues'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ')</label>
';
        $buffer .= $indent . '            <div class="progress-wrap progress">
';
        $buffer .= $indent . '                <div class="usage-progress-bar progress-bar ';
        $value = $this->resolveValue($context->find('storagecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" id="esm_storage_usage_bar" role="progressbar" style="width: ';
        $value = $this->resolveValue($context->find('storage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="progress-row users">
';
        $buffer .= $indent . '        <div class="usage-header">
';
        $buffer .= $indent . '            <label><i class="fa fa-users" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->section9fa1bfc67245d473c59cb4cb77f15c80($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="usage-details">
';
        $buffer .= $indent . '            <div class="legends">
';
        $buffer .= $indent . '                <div class="activeusers legend">
';
        $buffer .= $indent . '                    <div class="color bg-success"></div>
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section576e851ce66cf72db422a995516ee355($context, $indent, $value);
        $buffer .= '(';
        $value = $this->resolveValue($context->find('active'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ')</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="suspendedusers legend">
';
        $buffer .= $indent . '                    <div class="color bg-warning"></div>
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->sectionE743492bb0a938de840f9c631a3a56e5($context, $indent, $value);
        $buffer .= '(';
        $value = $this->resolveValue($context->find('suspended'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ')</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '                <div class="deletedusers legend">
';
        $buffer .= $indent . '                    <div class="color bg-danger"></div>
';
        $buffer .= $indent . '                    <label>';
        $value = $context->find('str');
        $buffer .= $this->section2c3a5022266c18fd7c161614964c82ec($context, $indent, $value);
        $buffer .= '(';
        $value = $this->resolveValue($context->find('deleted'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ')</label>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            <div class="progress-wrap progress">
';
        $buffer .= $indent . '                <div class="usage-progress-bar progress-bar bg-success" role="progressbar" id="esm_users_active_bar" style="width: ';
        $value = $this->resolveValue($context->find('activepercentage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;"></div>
';
        $buffer .= $indent . '                <div class="usage-progress-bar progress-bar bg-warning" role="progressbar" id="esm_users_suspended_bar" style="width: ';
        $value = $this->resolveValue($context->find('suspendedpercentage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;"></div>
';
        $buffer .= $indent . '                <div class="usage-progress-bar progress-bar bg-danger" role="progressbar" id="esm_users_deleted_bar" style="width: ';
        $value = $this->resolveValue($context->find('deletedpercentage'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '%;"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="progress-row">
';
        $buffer .= $indent . '        <div class="usage-header">
';
        $buffer .= $indent . '            <label><i class="fa fa-user-circle" aria-hidden="true"></i>';
        $value = $context->find('str');
        $buffer .= $this->sectionE14fb5a720d39cd544d63c626f80aa76($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="usage-details">
';
        $buffer .= $indent . '            <label id="esm_live_users_label">';
        $value = $this->resolveValue($context->find('liveusers'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</label>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section31781fe2bc9417f3ef6c2c16e4addbc8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cpu, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cpu, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section520ef1581c656d55d5ddb8189d9be0b4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cpucommandnotallowed, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cpucommandnotallowed, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF037479469cd33a43c044d48de8435b5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} cpucommandnotallowed, block_edwiser_site_monitor {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->section520ef1581c656d55d5ddb8189d9be0b4($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12716d5b0c13bdae0aebc32a69ee3b63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memory, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' memory, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF99a5b8fd29d5d4257edb80d5e6f1c9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memorycommandnotallowed, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' memorycommandnotallowed, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD7431806e542fb006a9949e6530f5625(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{#str}} memorycommandnotallowed, block_edwiser_site_monitor {{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('str');
                $buffer .= $this->sectionF99a5b8fd29d5d4257edb80d5e6f1c9f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFac1b5a7aad72940639579aef33a05f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' storage, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' storage, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9fa1bfc67245d473c59cb4cb77f15c80(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' users, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' users, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section576e851ce66cf72db422a995516ee355(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' activeusers, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' activeusers, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE743492bb0a938de840f9c631a3a56e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' suspendedusers, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' suspendedusers, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2c3a5022266c18fd7c161614964c82ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' deletedusers, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' deletedusers, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE14fb5a720d39cd544d63c626f80aa76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' liveusers, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' liveusers, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
