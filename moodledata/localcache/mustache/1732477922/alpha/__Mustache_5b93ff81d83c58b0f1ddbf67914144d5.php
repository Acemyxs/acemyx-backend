<?php

class __Mustache_5b93ff81d83c58b0f1ddbf67914144d5 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('messageserror');
        $buffer .= $this->sectionEe4a748c863864f96fa99ae54bb8cfb6($context, $indent, $value);
        $value = $context->find('messagessuccess');
        $buffer .= $this->section82944dadca8709fe826f9e365063d3e4($context, $indent, $value);
        $value = $context->find('messageswarning');
        $buffer .= $this->sectionA5f732fc92c79feae20c6f6e590c7db6($context, $indent, $value);
        $value = $context->find('messagesinfo');
        $buffer .= $this->section8cc80b38caaa57affb95dc73d9a9fdb4($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="subscription-overview" class="box">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h2>';
        $value = $context->find('str');
        $buffer .= $this->sectionA18509658d31e2f72d6ff31b44aecf73($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '
';
        $value = $context->find('messageshtml');
        $buffer .= $this->sectionA97f407b0e34e274cc4ac571ddd8f7f3($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('subscription');
        $buffer .= $this->section3f1be8652a947d9b7230328447539538($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div id="notifications-overview" class="box">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section4b6f3eed782cfca60dae7123b821d6e3($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $value = $context->find('registered');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $context->find('str');
            $buffer .= $this->sectionBb92120e1c852e8644c4b9cec2c6a6c0($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $value = $context->find('notifications');
        $buffer .= $this->section124c5b0a0436847696c6b89c56502f06($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('notifications');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $context->find('str');
            $buffer .= $this->section51e2b1bf21623be2f77b763a35bff732($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionEe4a748c863864f96fa99ae54bb8cfb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_error}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_error')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82944dadca8709fe826f9e365063d3e4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_success}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_success')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA5f732fc92c79feae20c6f6e590c7db6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_warning}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_warning')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8cc80b38caaa57affb95dc73d9a9fdb4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{> core/notification_info}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA18509658d31e2f72d6ff31b44aecf73(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' mobileappsubscription, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' mobileappsubscription, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA97f407b0e34e274cc4ac571ddd8f7f3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{{message}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section725aaaf132e75bed7fd8f354abe33745(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' name ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' name ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0b257672dfa14e719ae30834047be479(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' description ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' description ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section811e71da5b2a217beaf84818cc9ec398(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscriptioncreated, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subscriptioncreated, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE90ba376c343ddb2f8220ed53d42c9c3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedate ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedate ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBfe17400443d2e0ea5c66442facc32db(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timecreated}}, {{#str}} strftimedate {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timecreated'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $context->find('str');
                $buffer .= $this->sectionE90ba376c343ddb2f8220ed53d42c9c3($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF24e883ac9e24545a023a648abda5fa7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscriptionexpiration, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subscriptionexpiration, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8aa812fa2956eaeebb85772a6246c7d9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{expiretime}}, {{#str}} strftimedate {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('expiretime'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $context->find('str');
                $buffer .= $this->sectionE90ba376c343ddb2f8220ed53d42c9c3($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5db7b1859bfe13878a4cf4a75e1eda4b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <dt>{{# str }} subscriptionexpiration, tool_mobile {{/ str }}</dt><dd>{{#userdate}} {{expiretime}}, {{#str}} strftimedate {{/str}} {{/userdate}}</dd>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <dt>';
                $value = $context->find('str');
                $buffer .= $this->sectionF24e883ac9e24545a023a648abda5fa7($context, $indent, $value);
                $buffer .= '</dt><dd>';
                $value = $context->find('userdate');
                $buffer .= $this->section8aa812fa2956eaeebb85772a6246c7d9($context, $indent, $value);
                $buffer .= '</dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBb92120e1c852e8644c4b9cec2c6a6c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscriptionregister, tool_mobile, {{ appsportalurl }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subscriptionregister, tool_mobile, ';
                $value = $this->resolveValue($context->find('appsportalurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFebdaaa59b6bd9b5b7593a6bdec31a4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscriptionfeatures, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subscriptionfeatures, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAebcfa28015f84c1960af75ea0c2bbae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="progress">
                <div class="progress-bar progress-bar-animated {{barclass}}" role="progressbar" style="width: 100%" aria-valuenow="{{status}}" aria-valuemin="0" aria-valuemax="{{limit}}">{{humanstatus}}
                </div>
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="progress">
';
                $buffer .= $indent . '                <div class="progress-bar progress-bar-animated ';
                $value = $this->resolveValue($context->find('barclass'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" role="progressbar" style="width: 100%" aria-valuenow="';
                $value = $this->resolveValue($context->find('status'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-valuemin="0" aria-valuemax="';
                $value = $this->resolveValue($context->find('limit'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('humanstatus'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section95f508c3cbc720b7a0b076664191752d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <dt>{{{description}}}</dt><dd>
        {{#showbar}}
            <div class="progress">
                <div class="progress-bar progress-bar-animated {{barclass}}" role="progressbar" style="width: 100%" aria-valuenow="{{status}}" aria-valuemin="0" aria-valuemax="{{limit}}">{{humanstatus}}
                </div>
            </div>
        {{/showbar}}
        {{^showbar}}
            {{humanstatus}}
        {{/showbar}}
        </dd>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <dt>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</dt><dd>
';
                $value = $context->find('showbar');
                $buffer .= $this->sectionAebcfa28015f84c1960af75ea0c2bbae($context, $indent, $value);
                $value = $context->find('showbar');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            ';
                    $value = $this->resolveValue($context->find('humanstatus'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                }
                $buffer .= $indent . '        </dd>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d19e5a386ab5f3ddf52d5f6aba24337(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <span class="badge badge-{{type}}">{{message}}</span>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <span class="badge badge-';
                $value = $this->resolveValue($context->find('type'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('message'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAad706cf337a3d61b852d4903d36b2d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <dl>
    {{^limit}}
        <dt>{{{description}}}</dt><dd>{{{humanstatus}}}</dd>
    {{/limit}}
    {{#limit}}
        <dt>{{{description}}}</dt><dd>
        {{#showbar}}
            <div class="progress">
                <div class="progress-bar progress-bar-animated {{barclass}}" role="progressbar" style="width: 100%" aria-valuenow="{{status}}" aria-valuemin="0" aria-valuemax="{{limit}}">{{humanstatus}}
                </div>
            </div>
        {{/showbar}}
        {{^showbar}}
            {{humanstatus}}
        {{/showbar}}
        </dd>
    {{/limit}}
    {{#message}}
        <span class="badge badge-{{type}}">{{message}}</span>
    {{/message}}
    </dl>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <dl>
';
                $value = $context->find('limit');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <dt>';
                    $value = $this->resolveValue($context->find('description'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</dt><dd>';
                    $value = $this->resolveValue($context->find('humanstatus'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</dd>
';
                }
                $value = $context->find('limit');
                $buffer .= $this->section95f508c3cbc720b7a0b076664191752d($context, $indent, $value);
                $value = $context->find('message');
                $buffer .= $this->section7d19e5a386ab5f3ddf52d5f6aba24337($context, $indent, $value);
                $buffer .= $indent . '    </dl>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDa9f95b7dc1c0180b5608dbf417e4a24(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' subscriptionsseemore, tool_mobile, {{ appsportalurl }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' subscriptionsseemore, tool_mobile, ';
                $value = $this->resolveValue($context->find('appsportalurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section94791489abac91ae55e6918da94a1e68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{# str }} subscriptionsseemore, tool_mobile, {{ appsportalurl }} {{/ str }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $context->find('str');
                $buffer .= $this->sectionDa9f95b7dc1c0180b5608dbf417e4a24($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3f1be8652a947d9b7230328447539538(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <dl class="list-narrow">
        <dt>{{# str }} name {{/ str }}</dt><dd>{{name}}</dd>
        <dt>{{# str }} description {{/ str }}</dt><dd>{{description}}</dd>
        <dt>{{# str }} subscriptioncreated, tool_mobile {{/ str }}</dt><dd>{{#userdate}} {{timecreated}}, {{#str}} strftimedate {{/str}} {{/userdate}}</dd>
        {{#expiretime}}
        <dt>{{# str }} subscriptionexpiration, tool_mobile {{/ str }}</dt><dd>{{#userdate}} {{expiretime}}, {{#str}} strftimedate {{/str}} {{/userdate}}</dd>
        {{/expiretime}}
    </dl>

    {{^registered}}
    {{# str }} subscriptionregister, tool_mobile, {{ appsportalurl }} {{/ str }}
    {{/registered}}

    <h3>{{# str }} subscriptionfeatures, tool_mobile {{/ str }}</h3>

    {{#features}}
    <dl>
    {{^limit}}
        <dt>{{{description}}}</dt><dd>{{{humanstatus}}}</dd>
    {{/limit}}
    {{#limit}}
        <dt>{{{description}}}</dt><dd>
        {{#showbar}}
            <div class="progress">
                <div class="progress-bar progress-bar-animated {{barclass}}" role="progressbar" style="width: 100%" aria-valuenow="{{status}}" aria-valuemin="0" aria-valuemax="{{limit}}">{{humanstatus}}
                </div>
            </div>
        {{/showbar}}
        {{^showbar}}
            {{humanstatus}}
        {{/showbar}}
        </dd>
    {{/limit}}
    {{#message}}
        <span class="badge badge-{{type}}">{{message}}</span>
    {{/message}}
    </dl>
    {{/features}}

    {{#registered}}
    {{# str }} subscriptionsseemore, tool_mobile, {{ appsportalurl }} {{/ str }}
    {{/registered}}

    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <dl class="list-narrow">
';
                $buffer .= $indent . '        <dt>';
                $value = $context->find('str');
                $buffer .= $this->section725aaaf132e75bed7fd8f354abe33745($context, $indent, $value);
                $buffer .= '</dt><dd>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dd>
';
                $buffer .= $indent . '        <dt>';
                $value = $context->find('str');
                $buffer .= $this->section0b257672dfa14e719ae30834047be479($context, $indent, $value);
                $buffer .= '</dt><dd>';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dd>
';
                $buffer .= $indent . '        <dt>';
                $value = $context->find('str');
                $buffer .= $this->section811e71da5b2a217beaf84818cc9ec398($context, $indent, $value);
                $buffer .= '</dt><dd>';
                $value = $context->find('userdate');
                $buffer .= $this->sectionBfe17400443d2e0ea5c66442facc32db($context, $indent, $value);
                $buffer .= '</dd>
';
                $value = $context->find('expiretime');
                $buffer .= $this->section5db7b1859bfe13878a4cf4a75e1eda4b($context, $indent, $value);
                $buffer .= $indent . '    </dl>
';
                $buffer .= $indent . '
';
                $value = $context->find('registered');
                if (empty($value)) {
                    
                    $buffer .= $indent . '    ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionBb92120e1c852e8644c4b9cec2c6a6c0($context, $indent, $value);
                    $buffer .= '
';
                }
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <h3>';
                $value = $context->find('str');
                $buffer .= $this->sectionFebdaaa59b6bd9b5b7593a6bdec31a4c($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '
';
                $value = $context->find('features');
                $buffer .= $this->sectionAad706cf337a3d61b852d4903d36b2d8($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('registered');
                $buffer .= $this->section94791489abac91ae55e6918da94a1e68($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b6f3eed782cfca60dae7123b821d6e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notifications, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notifications, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97d13ffced0808547425bb1c406c3d41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> core/notification_error}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/notification_error')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf2db25be7143b6faad69f1538c16a22(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationscurrentactivedevices, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationscurrentactivedevices, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc0189090d7ff3ad42f9f40ab335c573(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'year, form';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'year, form';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAd37108bd4c0154c84915ce3f726c9f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'month';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'month';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section50f12a75a7782ff62955727b6fdfb46c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notificationssentnotifications, tool_mobile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notificationssentnotifications, tool_mobile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4e13a45ab5a0958bee54bb65b80b68ef(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notificationsactivedevices, tool_mobile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notificationsactivedevices, tool_mobile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7dbbcb122227458a4a4537d53914279e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notificationsnewdevices, tool_mobile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notificationsnewdevices, tool_mobile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBc315146ed6b057feb0cf3c4b21c19bc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'notificationsignorednotifications, tool_mobile';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'notificationsignorednotifications, tool_mobile';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEabd588be875d251d0f44daa9775696a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <tr>
                <td class="text-center">{{year}}</td>
                <td class="text-center">{{month}}</td>
                <td class="text-center">{{sentnotifications}}</td>
                <td class="text-center">{{activedevices}}</td>
                <td class="text-center">{{newdevices}}</td>
                <td class="text-center">{{ignorednotifications}}</td>
            </tr>
           ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <td class="text-center">';
                $value = $this->resolveValue($context->find('year'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="text-center">';
                $value = $this->resolveValue($context->find('month'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="text-center">';
                $value = $this->resolveValue($context->find('sentnotifications'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="text-center">';
                $value = $this->resolveValue($context->find('activedevices'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="text-center">';
                $value = $this->resolveValue($context->find('newdevices'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '                <td class="text-center">';
                $value = $this->resolveValue($context->find('ignorednotifications'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $buffer .= $indent . '            </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17edd11e96e52eb3de0705d5c8094103(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationsseemore, tool_mobile, {{ appsportalurl }} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationsseemore, tool_mobile, ';
                $value = $this->resolveValue($context->find('appsportalurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section800891d312a83a0660239fae5fa8e75f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{# str }} notificationsseemore, tool_mobile, {{ appsportalurl }} {{/ str }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    ';
                $value = $context->find('str');
                $buffer .= $this->section17edd11e96e52eb3de0705d5c8094103($context, $indent, $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section124c5b0a0436847696c6b89c56502f06(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

    {{#ignorednotificationswarning}}
        {{> core/notification_error}}
    {{/ignorednotificationswarning}}

    <dl>
        <dt>{{# str }} notificationscurrentactivedevices, tool_mobile {{/ str }}</dt><dd>{{currentactivedevices}}</dd>
    </dl>

    <table id="notificationstable" class="generaltable fullwidth">
        <thead>
            <tr>
                <th class="text-center" scope="col">{{#str}}year, form{{/str}}</th>
                <th class="text-center" scope="col">{{#str}}month{{/str}}</th>
                <th class="text-center" scope="col">{{#str}}notificationssentnotifications, tool_mobile{{/str}}</th>
                <th class="text-center" scope="col">{{#str}}notificationsactivedevices, tool_mobile{{/str}}</th>
                <th class="text-center" scope="col">{{#str}}notificationsnewdevices, tool_mobile{{/str}}</th>
                <th class="text-center" scope="col">{{#str}}notificationsignorednotifications, tool_mobile{{/str}}</th>
            </tr>
        </thead>
        <tbody>
            {{#notifications.monthly}}
            <tr>
                <td class="text-center">{{year}}</td>
                <td class="text-center">{{month}}</td>
                <td class="text-center">{{sentnotifications}}</td>
                <td class="text-center">{{activedevices}}</td>
                <td class="text-center">{{newdevices}}</td>
                <td class="text-center">{{ignorednotifications}}</td>
            </tr>
           {{/notifications.monthly}}
        </tbody>
    </table>

    {{#registered}}
    {{# str }} notificationsseemore, tool_mobile, {{ appsportalurl }} {{/ str }}
    {{/registered}}

    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $value = $context->find('ignorednotificationswarning');
                $buffer .= $this->section97d13ffced0808547425bb1c406c3d41($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <dl>
';
                $buffer .= $indent . '        <dt>';
                $value = $context->find('str');
                $buffer .= $this->sectionEf2db25be7143b6faad69f1538c16a22($context, $indent, $value);
                $buffer .= '</dt><dd>';
                $value = $this->resolveValue($context->find('currentactivedevices'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</dd>
';
                $buffer .= $indent . '    </dl>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <table id="notificationstable" class="generaltable fullwidth">
';
                $buffer .= $indent . '        <thead>
';
                $buffer .= $indent . '            <tr>
';
                $buffer .= $indent . '                <th class="text-center" scope="col">';
                $value = $context->find('str');
                $buffer .= $this->sectionEc0189090d7ff3ad42f9f40ab335c573($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th class="text-center" scope="col">';
                $value = $context->find('str');
                $buffer .= $this->sectionAd37108bd4c0154c84915ce3f726c9f7($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th class="text-center" scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section50f12a75a7782ff62955727b6fdfb46c($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th class="text-center" scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section4e13a45ab5a0958bee54bb65b80b68ef($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th class="text-center" scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section7dbbcb122227458a4a4537d53914279e($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                <th class="text-center" scope="col">';
                $value = $context->find('str');
                $buffer .= $this->sectionBc315146ed6b057feb0cf3c4b21c19bc($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '            </tr>
';
                $buffer .= $indent . '        </thead>
';
                $buffer .= $indent . '        <tbody>
';
                $value = $context->findDot('notifications.monthly');
                $buffer .= $this->sectionEabd588be875d251d0f44daa9775696a($context, $indent, $value);
                $buffer .= $indent . '        </tbody>
';
                $buffer .= $indent . '    </table>
';
                $buffer .= $indent . '
';
                $value = $context->find('registered');
                $buffer .= $this->section800891d312a83a0660239fae5fa8e75f($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51e2b1bf21623be2f77b763a35bff732(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' notificationsmissingwarning, tool_mobile ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' notificationsmissingwarning, tool_mobile ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
