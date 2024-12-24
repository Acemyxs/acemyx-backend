<?php

class __Mustache_b8c55a8084b2bf995e44f68bd565ec83 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('modelselector');
        $buffer .= $this->sectionF6b887e35667c182178b20ec7853c0b9($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="insight-container" data-context-id="';
        $value = $this->resolveValue($context->find('contextid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-model-id="';
        $value = $this->resolveValue($context->find('modelid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <h3 class="mb-2">';
        $value = $this->resolveValue($context->find('insightname'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->find('insightdescription'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('noinsights');
        if (empty($value)) {
            
            $value = $context->find('nostaticmodelnotification');
            $buffer .= $this->sectionF24a82a187a9af4b3043a3657cf7c361($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('pagingbar'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            if ($partial = $this->mustache->loadPartial('report_insights/bulk_actions')) {
                $buffer .= $partial->renderInternal($context, $indent . '    ');
            }
            $buffer .= $indent . '
';
            $value = $context->find('predictions');
            $buffer .= $this->sectionA2cc5914d57bbccb4ed3baf5c00ad577($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('multiplepredictions');
            $buffer .= $this->section0432bc7a3a7473f5a3e3bf664143af63($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('pagingbar'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $value = $context->find('noinsights');
        $buffer .= $this->sectionF24a82a187a9af4b3043a3657cf7c361($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF6b887e35667c182178b20ec7853c0b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="mb-2">
        {{> core/single_select}}
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="mb-2">
';
                if ($partial = $this->mustache->loadPartial('core/single_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF24a82a187a9af4b3043a3657cf7c361(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="mt-2">
            {{> core/notification_info}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="mt-2">
';
                if ($partial = $this->mustache->loadPartial('core/notification_info')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF7f7151970b9f36ace6dbb08e12a5912(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'prediction, report_insights';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'prediction, report_insights';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8ede492f71244289f80daa30fdbe3ef2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'table-{{style}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'table-';
                $value = $this->resolveValue($context->find('style'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section81e528574e649667ecc56463dd761fa6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{> core/pix_icon}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/pix_icon')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fa332e8495315fceab8cac8d30dc51b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <caption>
                    {{#str}}prediction, report_insights{{/str}}:
                    <span class="{{#style}}table-{{style}}{{/style}}">
                        {{#outcomeicon}}
                            {{> core/pix_icon}}
                        {{/outcomeicon}}
                        {{predictiondisplayvalue}}
                    </span>
                </caption>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <caption>
';
                $buffer .= $indent . '                    ';
                $value = $context->find('str');
                $buffer .= $this->sectionF7f7151970b9f36ace6dbb08e12a5912($context, $indent, $value);
                $buffer .= ':
';
                $buffer .= $indent . '                    <span class="';
                $value = $context->find('style');
                $buffer .= $this->section8ede492f71244289f80daa30fdbe3ef2($context, $indent, $value);
                $buffer .= '">
';
                $value = $context->find('outcomeicon');
                $buffer .= $this->section81e528574e649667ecc56463dd761fa6($context, $indent, $value);
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('predictiondisplayvalue'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </caption>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b0cbe018b72d3a43c0066361b632caa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <th class="col-1{{^bulkactions}} hidden{{/bulkactions}}">
                            {{{checkboxtoggleall}}}
                        </th>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <th class="col-1';
                $value = $context->find('bulkactions');
                if (empty($value)) {
                    
                    $buffer .= ' hidden';
                }
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('checkboxtoggleall'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1dee8adaf405bfc6db6cbb048fef1653(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'description';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'description';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ad2fdcc9b858451e82e60edfcdcf48d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'actions';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'actions';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCcad375bcaeaf714a2bdc243993f97a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> report_insights/insight}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('report_insights/insight')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2cc5914d57bbccb4ed3baf5c00ad577(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

        <table class="generaltable insights-list mt-3">
            {{#showpredictionheading}}
                <caption>
                    {{#str}}prediction, report_insights{{/str}}:
                    <span class="{{#style}}table-{{style}}{{/style}}">
                        {{#outcomeicon}}
                            {{> core/pix_icon}}
                        {{/outcomeicon}}
                        {{predictiondisplayvalue}}
                    </span>
                </caption>
            {{/showpredictionheading}}
            <thead>
                <tr class="d-flex">
                    {{#multiplepredictions}}
                        <th class="col-1{{^bulkactions}} hidden{{/bulkactions}}">
                            {{{checkboxtoggleall}}}
                        </th>
                    {{/multiplepredictions}}
                    {{^multiplepredictions}}
                        <th class="col-1{{^bulkactions}} hidden{{/bulkactions}}">
                    {{/multiplepredictions}}
                    <th scope="col" class="col-8">{{#str}}description{{/str}}</th>
                    <th scope="col" class="col-3">{{#str}}actions{{/str}}</th>
                </tr>
            </thead>
            <tbody>
                {{#insights}}
                    {{> report_insights/insight}}
                {{/insights}}
            </tbody>
        </table>

    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '        <table class="generaltable insights-list mt-3">
';
                $value = $context->find('showpredictionheading');
                $buffer .= $this->section2fa332e8495315fceab8cac8d30dc51b($context, $indent, $value);
                $buffer .= $indent . '            <thead>
';
                $buffer .= $indent . '                <tr class="d-flex">
';
                $value = $context->find('multiplepredictions');
                $buffer .= $this->section9b0cbe018b72d3a43c0066361b632caa($context, $indent, $value);
                $value = $context->find('multiplepredictions');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <th class="col-1';
                    $value = $context->find('bulkactions');
                    if (empty($value)) {
                        
                        $buffer .= ' hidden';
                    }
                    $buffer .= '">
';
                }
                $buffer .= $indent . '                    <th scope="col" class="col-8">';
                $value = $context->find('str');
                $buffer .= $this->section1dee8adaf405bfc6db6cbb048fef1653($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                    <th scope="col" class="col-3">';
                $value = $context->find('str');
                $buffer .= $this->section2ad2fdcc9b858451e82e60edfcdcf48d($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '                </tr>
';
                $buffer .= $indent . '            </thead>
';
                $buffer .= $indent . '            <tbody>
';
                $value = $context->find('insights');
                $buffer .= $this->sectionCcad375bcaeaf714a2bdc243993f97a5($context, $indent, $value);
                $buffer .= $indent . '            </tbody>
';
                $buffer .= $indent . '        </table>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0432bc7a3a7473f5a3e3bf664143af63(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{> report_insights/bulk_actions}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('report_insights/bulk_actions')) {
                    $buffer .= $partial->renderInternal($context, $indent . '        ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
