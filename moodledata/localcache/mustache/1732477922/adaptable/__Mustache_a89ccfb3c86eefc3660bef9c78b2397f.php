<?php

class __Mustache_a89ccfb3c86eefc3660bef9c78b2397f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="edwiser_site_monitor">
';
        $buffer .= $indent . '    <div class="w-p100 d-flex my-10" id="edwiser_site_monitor-section">
';
        $buffer .= $indent . '        <ul class="nav nav-tabs nav-tabs-line border-0 mx-15 w-full" role="tablist">
';
        $buffer .= $indent . '            <li class="nav-item active">
';
        $buffer .= $indent . '                <a class="nav-link active" href="#edwiser_site_monitor_view_live_status" data-container="edwiser_site_monitor_view_live_status" data-toggle="tab">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section2d677d0d1680d8dd34bd9b63b8e6950a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '                <a class="nav-link" href="#edwiser_site_monitor_last_24_hours_usage" data-container="edwiser_site_monitor_last_24_hours_usage" data-toggle="tab">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionCd7010f874da45783e6f522ba09ddfdb($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '                <a class="nav-link" href="#edwiser_site_monitor_plugins" data-container="edwiser_site_monitor_plugins" data-toggle="tab">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section8db460f835368f3cafa1b39bb731d152($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '                <a class="nav-link esm-outline" href="#edwiser_site_monitor_recommendation" data-container="edwiser_site_monitor_recommendation" data-toggle="tab">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->section81c444d4eab58ddb9ad8bfe96c4f8062($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '            <li class="nav-item">
';
        $buffer .= $indent . '                <a class="nav-link" href="#edwiser_site_monitor_contactus" data-container="edwiser_site_monitor_contactus" data-toggle="tab">
';
        $buffer .= $indent . '                    ';
        $value = $context->find('str');
        $buffer .= $this->sectionC4cce458f3d6872f9631c3426ad3eabe($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '                </a>
';
        $buffer .= $indent . '            </li>
';
        $buffer .= $indent . '        </ul>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="tab-content">
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade show active" id="edwiser_site_monitor_view_live_status">
';
        $buffer .= $indent . '            <div class="mt-3 align-items-left justify-content-center flex-column">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('live_status'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade" id="edwiser_site_monitor_last_24_hours_usage">
';
        $buffer .= $indent . '            <div class="mt-3 align-items-center justify-content-center flex-column">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('last_24_hours_usage'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade" id="edwiser_site_monitor_plugins">
';
        $buffer .= $indent . '            <div class="mt-3 align-items-center justify-content-center flex-column">
';
        $buffer .= $indent . '                <div id="page-admin-plugins" class="server-plugins has-loader">
';
        $buffer .= $indent . '                    <a target="_blank" href="';
        $value = $this->resolveValue($context->find('installnewurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class=\'btn btn-secondary\'>';
        $value = $context->find('str');
        $buffer .= $this->sectionEed9165fe8958bd290f8d37e53e4b80f($context, $indent, $value);
        $buffer .= '</a>
';
        $buffer .= $indent . '                    <button class=\'btn btn-secondary refresh-plugin-list\'>';
        $value = $context->find('str');
        $buffer .= $this->section4965efd7790b1aded7ab5a93d5392f6f($context, $indent, $value);
        $buffer .= '</button>
';
        $buffer .= $indent . '                    <label class="lasttimefetched">';
        $value = $this->resolveValue($context->find('lasttime'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '                    <div class="server-plugins-list">
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="edwiser-server-monitor-loader">
';
        $buffer .= $indent . '                        <div class="edwiser-server-monitor-loading-icon">
';
        $buffer .= $indent . '                            <i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true"></i>
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade" id="edwiser_site_monitor_recommendation">
';
        $buffer .= $indent . '            <div class="mt-3 align-items-center justify-content-center flex-column">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('recommendation'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div role="tabpanel" class="tab-pane fade" id="edwiser_site_monitor_contactus">
';
        $buffer .= $indent . '            <div class="mt-3 align-items-center justify-content-center flex-column has-loader">
';
        $buffer .= $indent . '                ';
        $value = $this->resolveValue($context->find('contactus'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                <div class="edwiser-server-monitor-loader">
';
        $buffer .= $indent . '                    <div class="edwiser-server-monitor-loading-icon">
';
        $buffer .= $indent . '                        <i class="fa fa-circle-o-notch fa-spin fa-fw" aria-hidden="true"></i>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2d677d0d1680d8dd34bd9b63b8e6950a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' liveusage, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' liveusage, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd7010f874da45783e6f522ba09ddfdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' last24hoursusage, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' last24hoursusage, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8db460f835368f3cafa1b39bb731d152(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pluginsoverview, core_admin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pluginsoverview, core_admin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81c444d4eab58ddb9ad8bfe96c4f8062(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' recommendation, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' recommendation, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC4cce458f3d6872f9631c3426ad3eabe(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contactus, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contactus, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEed9165fe8958bd290f8d37e53e4b80f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' installnew, block_edwiser_site_monitor ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' installnew, block_edwiser_site_monitor ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4965efd7790b1aded7ab5a93d5392f6f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' checkforupdates, core_plugin ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' checkforupdates, core_plugin ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
