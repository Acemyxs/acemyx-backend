<?php

class __Mustache_46cc03fee9cc2a8e5df6e69986af9f76 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="profileeditor mt-3">
';
        $buffer .= $indent . '    <a tabindex="0" role="button" class="btn btn-sm btn-secondary" data-action="editcategory">
';
        $buffer .= $indent . '        <svg class="mr-2" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
        $buffer .= $indent . '            <path d="M4.75 6.75V8.25C4.75 9.35457 5.64543 10.25 6.75 10.25H8.25C9.35457 10.25 10.25 9.35457 10.25 8.25V6.75C10.25 5.64543 9.35457 4.75 8.25 4.75H6.75C5.64543 4.75 4.75 5.64543 4.75 6.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '            <path d="M14.75 7H19.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '            <path d="M17 4.75L17 9.25" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '            <path d="M4.75 15.75V17.25C4.75 18.3546 5.64543 19.25 6.75 19.25H8.25C9.35457 19.25 10.25 18.3546 10.25 17.25V15.75C10.25 14.6454 9.35457 13.75 8.25 13.75H6.75C5.64543 13.75 4.75 14.6454 4.75 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '            <path d="M13.75 15.75V17.25C13.75 18.3546 14.6454 19.25 15.75 19.25H17.25C18.3546 19.25 19.25 18.3546 19.25 17.25V15.75C19.25 14.6454 18.3546 13.75 17.25 13.75H15.75C14.6454 13.75 13.75 14.6454 13.75 15.75Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
';
        $buffer .= $indent . '        </svg>
';
        $buffer .= $indent . '        ';
        $value = $context->find('str');
        $buffer .= $this->sectionC4602107c7135258bd790fe827bcb4fa($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '    </a>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="categorieslist">
';
        $value = $context->find('categories');
        $buffer .= $this->section12e524cd27b3a0a971c10d24ea18fc8f($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section0eee9c88637377a906389cfded184b2d($context, $indent, $value);

        return $buffer;
    }

    private function sectionC4602107c7135258bd790fe827bcb4fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'profilecreatecategory, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'profilecreatecategory, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6fbefe13d65ab4df95242666a21911df(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a class="btn btn-sm btn-icon btn-danger" href="{{baseurl}}?action=deletecategory&id={{id}}&sesskey={{sesskey}}">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
                        </svg>
                    </a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a class="btn btn-sm btn-icon btn-danger" href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '?action=deletecategory&id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
';
                $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
';
                $buffer .= $indent . '                        </svg>
';
                $buffer .= $indent . '                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8de664bdbde1877bb3f2991e26edf72(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{> core/action_menu}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context);
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCd50c7b71dd7f8d49927300e4d34e85a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li class="list-group-item d-inline-flex justidy-content-between align-items-center">
                        <h5 class="mb-0">{{{name}}}</h5>
                        <div class="ml-auto">
                            <a class="btn btn-sm btn-icon btn-info" href="#" data-action="editfield" data-id="{{id}}" data-name="{{name}}">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25H13.75"></path>
                                </svg>
                            </a>
                            <a class="btn btn-sm btn-icon btn-danger" href="{{baseurl}}?action=deletefield&id={{id}}&sesskey={{sesskey}}">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
                                </svg>
                            </a>
                            {{^isfirst}}
                                <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movefield&dir=up&amp;sesskey={{sesskey}}">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"></path>
                                    </svg>
                                </a>
                            {{/isfirst}}
                            {{^islast}}
                                <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movefield&dir=down&amp;sesskey={{sesskey}}">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 13.75L12 19.25L6.75 13.75"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.25V4.75"></path>
                                    </svg>
                                </a>
                            {{/islast}}
                        </div>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li class="list-group-item d-inline-flex justidy-content-between align-items-center">
';
                $buffer .= $indent . '                        <h5 class="mb-0">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>
';
                $buffer .= $indent . '                        <div class="ml-auto">
';
                $buffer .= $indent . '                            <a class="btn btn-sm btn-icon btn-info" href="#" data-action="editfield" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
';
                $buffer .= $indent . '                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25H13.75"></path>
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $buffer .= $indent . '                            <a class="btn btn-sm btn-icon btn-danger" href="';
                $value = $this->resolveValue($context->find('baseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '?action=deletefield&id=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '&sesskey=';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
';
                $buffer .= $indent . '                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
';
                $buffer .= $indent . '                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
';
                $buffer .= $indent . '                                </svg>
';
                $buffer .= $indent . '                            </a>
';
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a class="btn btn-sm btn-icon btn-secondary" href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&action=movefield&dir=up&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                    $buffer .= $indent . '                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"></path>
';
                    $buffer .= $indent . '                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"></path>
';
                    $buffer .= $indent . '                                    </svg>
';
                    $buffer .= $indent . '                                </a>
';
                }
                $value = $context->find('islast');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <a class="btn btn-sm btn-icon btn-secondary" href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&action=movefield&dir=down&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
';
                    $buffer .= $indent . '                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 13.75L12 19.25L6.75 13.75"></path>
';
                    $buffer .= $indent . '                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.25V4.75"></path>
';
                    $buffer .= $indent . '                                    </svg>
';
                    $buffer .= $indent . '                                </a>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section62ae4c9d7af2d71e429c29ef579e3016(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <ul class="rui-profilefield list-group mt-2 mx-0">
                {{#fields}}
                    <li class="list-group-item d-inline-flex justidy-content-between align-items-center">
                        <h5 class="mb-0">{{{name}}}</h5>
                        <div class="ml-auto">
                            <a class="btn btn-sm btn-icon btn-info" href="#" data-action="editfield" data-id="{{id}}" data-name="{{name}}">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25H13.75"></path>
                                </svg>
                            </a>
                            <a class="btn btn-sm btn-icon btn-danger" href="{{baseurl}}?action=deletefield&id={{id}}&sesskey={{sesskey}}">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
                                </svg>
                            </a>
                            {{^isfirst}}
                                <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movefield&dir=up&amp;sesskey={{sesskey}}">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"></path>
                                    </svg>
                                </a>
                            {{/isfirst}}
                            {{^islast}}
                                <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movefield&dir=down&amp;sesskey={{sesskey}}">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 13.75L12 19.25L6.75 13.75"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.25V4.75"></path>
                                    </svg>
                                </a>
                            {{/islast}}
                        </div>
                    </li>
                {{/fields}}
            </ul>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <ul class="rui-profilefield list-group mt-2 mx-0">
';
                $value = $context->find('fields');
                $buffer .= $this->sectionCd50c7b71dd7f8d49927300e4d34e85a($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA878346c1c185ae0ea4729e0a7c6063f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'profilenofieldsdefined, admin';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'profilenofieldsdefined, admin';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section12e524cd27b3a0a971c10d24ea18fc8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div data-category-id="{{id}}" id="category-{{id}}" class="mt-2">
    <div>
        <div class="categoryinstance w-100 mt-3 d-inline-flex align-items-center justify-content-between">
            <h4 class="mb-0">
                {{{name}}}
            </h4>

            <div class="ml-auto">
                <a class="ml-3 btn btn-sm btn-icon btn-info" href="#" data-action="editcategory" data-id="{{id}}" data-name="{{name}}">
                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25H13.75"></path>
                    </svg>
                </a>
                {{#candelete}}
                    <a class="btn btn-sm btn-icon btn-danger" href="{{baseurl}}?action=deletecategory&id={{id}}&sesskey={{sesskey}}">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
                        </svg>
                    </a>
                {{/candelete}}
                {{^isfirst}}
                    <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movecategory&dir=up&amp;sesskey={{sesskey}}">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"></path>
                        </svg>
                    </a>
                {{/isfirst}}
                {{^islast}}
                    <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movecategory&dir=down&amp;sesskey={{sesskey}}">
                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 13.75L12 19.25L6.75 13.75"></path>
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.25V4.75"></path>
                        </svg>
                    </a>
                {{/islast}}
            </div>

            <div class="ml-2">
                {{#addfieldmenu}}{{> core/action_menu}}{{/addfieldmenu}}
            </div>
        </div>

    </div>

    <div class="profilefield">
        {{#hasfields}}
            <ul class="rui-profilefield list-group mt-2 mx-0">
                {{#fields}}
                    <li class="list-group-item d-inline-flex justidy-content-between align-items-center">
                        <h5 class="mb-0">{{{name}}}</h5>
                        <div class="ml-auto">
                            <a class="btn btn-sm btn-icon btn-info" href="#" data-action="editfield" data-id="{{id}}" data-name="{{name}}">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25H13.75"></path>
                                </svg>
                            </a>
                            <a class="btn btn-sm btn-icon btn-danger" href="{{baseurl}}?action=deletefield&id={{id}}&sesskey={{sesskey}}">
                                <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 7.75H19"></path>
                                </svg>
                            </a>
                            {{^isfirst}}
                                <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movefield&dir=up&amp;sesskey={{sesskey}}">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"></path>
                                    </svg>
                                </a>
                            {{/isfirst}}
                            {{^islast}}
                                <a class="btn btn-sm btn-icon btn-secondary" href="{{baseurl}}?id={{id}}&action=movefield&dir=down&amp;sesskey={{sesskey}}">
                                    <svg width="20" height="20" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 13.75L12 19.25L6.75 13.75"></path>
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.25V4.75"></path>
                                    </svg>
                                </a>
                            {{/islast}}
                        </div>
                    </li>
                {{/fields}}
            </ul>
        {{/hasfields}}
        {{^hasfields}}
        <div class="alert alert-warning mt-2">{{#str}}profilenofieldsdefined, admin{{/str}}</div>
        {{/hasfields}}
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div data-category-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" id="category-';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="mt-2">
';
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <div class="categoryinstance w-100 mt-3 d-inline-flex align-items-center justify-content-between">
';
                $buffer .= $indent . '            <h4 class="mb-0">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </h4>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="ml-auto">
';
                $buffer .= $indent . '                <a class="ml-3 btn btn-sm btn-icon btn-info" href="#" data-action="editcategory" data-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                    <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
';
                $buffer .= $indent . '                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.25 19.25H13.75"></path>
';
                $buffer .= $indent . '                    </svg>
';
                $buffer .= $indent . '                </a>
';
                $value = $context->find('candelete');
                $buffer .= $this->section6fbefe13d65ab4df95242666a21911df($context, $indent, $value);
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a class="btn btn-sm btn-icon btn-secondary" href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&action=movecategory&dir=up&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                    $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 10.25L12 4.75L6.75 10.25"></path>
';
                    $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 19.25V5.75"></path>
';
                    $buffer .= $indent . '                        </svg>
';
                    $buffer .= $indent . '                    </a>
';
                }
                $value = $context->find('islast');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <a class="btn btn-sm btn-icon btn-secondary" href="';
                    $value = $this->resolveValue($context->find('baseurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '?id=';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '&action=movecategory&dir=down&amp;sesskey=';
                    $value = $this->resolveValue($context->find('sesskey'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">
';
                    $buffer .= $indent . '                        <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
';
                    $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.25 13.75L12 19.25L6.75 13.75"></path>
';
                    $buffer .= $indent . '                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18.25V4.75"></path>
';
                    $buffer .= $indent . '                        </svg>
';
                    $buffer .= $indent . '                    </a>
';
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            <div class="ml-2">
';
                $buffer .= $indent . '                ';
                $value = $context->find('addfieldmenu');
                $buffer .= $this->sectionA8de664bdbde1877bb3f2991e26edf72($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="profilefield">
';
                $value = $context->find('hasfields');
                $buffer .= $this->section62ae4c9d7af2d71e429c29ef579e3016($context, $indent, $value);
                $value = $context->find('hasfields');
                if (empty($value)) {
                    
                    $buffer .= $indent . '        <div class="alert alert-warning mt-2">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionA878346c1c185ae0ea4729e0a7c6063f($context, $indent, $value);
                    $buffer .= '</div>
';
                }
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0eee9c88637377a906389cfded184b2d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_user/edit_profile_fields\'], function(s) {
        s.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_user/edit_profile_fields\'], function(s) {
';
                $buffer .= $indent . '        s.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
