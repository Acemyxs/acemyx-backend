<?php

class __Mustache_c2948f367d1d488e86b4ac1a2203ef13 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<article
';
        $buffer .= $indent . '    id="p';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    class="forum-post-container my-2"
';
        $buffer .= $indent . '    data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    data-region="post"
';
        $buffer .= $indent . '    data-target="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-target"
';
        $buffer .= $indent . '    tabindex="0"
';
        $buffer .= $indent . '    aria-labelledby="post-header-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '    aria-describedby="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '>
';
        $buffer .= $indent . '    <div
';
        $buffer .= $indent . '        class="position-relative mb-2 forum-post focus-target ';
        $value = $context->find('unread');
        $buffer .= $this->section3ed6c5fc72aa7724e442457028079947($context, $indent, $value);
        $buffer .= ' ';
        $value = $context->find('firstpost');
        $buffer .= $this->section21f91dd58d78aa33caec1006870d7c95($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '        aria-label=\'';
        $value = $context->find('str');
        $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
        $buffer .= '\'
';
        $buffer .= $indent . '        data-post-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-content="forum-post"
';
        $buffer .= $indent . '    >
';
        $buffer .= $indent . '        ';
        $value = $context->find('isfirstunread');
        $buffer .= $this->section8385bd492ccda898f38e149a71c97f98($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('author');
            $buffer .= $this->section577818303161eb9080691fbc5beee425($context, $indent, $value);
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '        <div class="d-flex flex-column w-100"  data-region-content="forum-post-core">
';
        $buffer .= $indent . '            <header id="post-header-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="mb-2 pb-2 forum-post-header d-flex align-items-center">
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('author');
            $buffer .= $this->section4f06ffa13c52cc3baedf90463f194989($context, $indent, $value);
        }
        $buffer .= $indent . '                <div class="d-flex flex-column">
';
        $value = $context->find('parentauthorname');
        $buffer .= $this->section51540e8b9c4cbf19759c5b16fc544ea7($context, $indent, $value);
        $blockFunction = $context->findInBlock('subjectheading');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $value = $context->find('subject');
            $buffer .= $this->sectionB35f0606ceefc07b6d76f9662f5422e8($context, $indent, $value);
        }
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $buffer .= $indent . '                        <div class="forum-post-details" tabindex="-1">
';
            $buffer .= $indent . '                            ';
            $value = $context->findDot('html.authorsubheading');
            $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
            $buffer .= '
';
            $value = $context->findDot('html.authorsubheading');
            if (empty($value)) {
                
                $buffer .= $indent . '                                ';
                if ($parent = $this->mustache->loadPartial('core/time_element')) {
                    $context->pushBlockContext(array(
                        'elementid' => array($this, 'blockB271b05d99926cf71f42fc2fdaf098b4'),
                        'timestampval' => array($this, 'block0f58c85b5accd62eb904cca306ac20c3'),
                        'userdateformatval' => array($this, 'block3f659631444eecbe92f0647acc7c31ef'),
                    ));
                    $buffer .= $parent->renderInternal($context, $indent);
                    $context->popBlockContext();
                }
            }
            $buffer .= '                        </div>
';
        }
        $value = $context->find('isprivatereply');
        $buffer .= $this->section9a46bd84d9e652d7d1b9c08301486bb6($context, $indent, $value);
        $value = $context->find('hasreplycount');
        $buffer .= $this->sectionFcc066a9bc7cebded25a4bc3d67960ff($context, $indent, $value);
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </header>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '            <div class="d-flex body-content-container">
';
        $buffer .= $indent . '                <div class="mr-3 d-sm-none d-md-block" style="width: 60px; flex-shrink: 0"></div>
';
        $buffer .= $indent . '                <div class="w-100 content-alignment-container">
';
        $buffer .= $indent . '                    <div id="post-content-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="post-content-container mb-2">
';
        $buffer .= $indent . '                        ';
        $value = $this->resolveValue($context->find('message'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $value = $context->find('isdeleted');
        if (empty($value)) {
            
            $value = $context->find('haswordcount');
            $buffer .= $this->sectionA99169f3251649e7c8f9862cd994efed($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('attachments');
            $buffer .= $this->sectionB306e4067909c929106dbff70f7ebee5($context, $indent, $value);
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        ';
            $value = $this->resolveValue($context->findDot('html.taglist'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
            $buffer .= $indent . '
';
            $value = $context->find('attachments');
            $buffer .= $this->section14245b58568421c206072ba1d4461c17($context, $indent, $value);
            $buffer .= $indent . '
';
            $value = $context->find('readonly');
            if (empty($value)) {
                
                $buffer .= $indent . '                            <div class="d-flex flex-wrap">
';
                $value = $context->findDot('html.rating');
                $buffer .= $this->section2d6c7e9be52e5da3b888613064e24463($context, $indent, $value);
                $blockFunction = $context->findInBlock('actions');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                    <div
';
                    $buffer .= $indent . '                                        class="w-100 post-actions d-flex align-items-center justify-content-md-end justify-content-lg-start flex-wrap mx-0 mt-2 mb-0"
';
                    $buffer .= $indent . '                                        data-region="post-actions-container"
';
                    $buffer .= $indent . '                                        role="menubar"
';
                    $buffer .= $indent . '                                        aria-label=\'';
                    $value = $context->find('str');
                    $buffer .= $this->section2d7e7bb37b1c76e06dcc1842169465b6($context, $indent, $value);
                    $buffer .= '\'
';
                    $buffer .= $indent . '                                        aria-controls="p';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                    >
';
                    $value = $context->find('capabilities');
                    $buffer .= $this->sectionAbd3f285c794158ddf70df170ab48224($context, $indent, $value);
                    $buffer .= $indent . '                                    </div>
';
                }
                $buffer .= $indent . '                            </div>
';
            }
            $buffer .= $indent . '
';
            $buffer .= $indent . '                        <div class="forum-post-footer">';
            $blockFunction = $context->findInBlock('footer');
            if (is_callable($blockFunction)) {
                $buffer .= call_user_func($blockFunction, $context);
            }
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '
';
        $blockFunction = $context->findInBlock('replies');
        if (is_callable($blockFunction)) {
            $buffer .= call_user_func($blockFunction, $context);
        } else {
            $buffer .= $indent . '        <div data-region="replies-container">
';
            $value = $context->find('hasreplies');
            $buffer .= $this->section0a2c07c1fe68076348109b9df6691419($context, $indent, $value);
            $buffer .= $indent . '        </div>
';
        }
        $buffer .= $indent . '</article>
';

        return $buffer;
    }

    private function section3ed6c5fc72aa7724e442457028079947(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unread';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unread';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21f91dd58d78aa33caec1006870d7c95(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'firstpost starter';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'firstpost starter';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d7e7bb37b1c76e06dcc1842169465b6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' postbyuser, mod_forum, {"post": "{{subject}}", "user": "{{author.fullname}}"} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' postbyuser, mod_forum, {"post": "';
                $value = $this->resolveValue($context->find('subject'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '", "user": "';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"} ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8385bd492ccda898f38e149a71c97f98(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a id="unread" aria-hidden="true"></a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a id="unread" aria-hidden="true"></a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9676b028b46e3df83a3055c6a32599ed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' memberofgroup, group, {{name}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' memberofgroup, group, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE103d4001a9c5c8aed5c9292425b5842(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{name}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa137d9a0483a973f864d0b0a7afe3c7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <a href="{{urls.group}}" class="badge badge-link badge-light" role="button" aria-label="{{#str}} memberofgroup, group, {{name}}{{/str}}" title="{{#str}} memberofgroup, group, {{name}}{{/str}}">
                                                <img
                                                    class="rounded icon mr-1"
                                                    src="{{{.}}}"
                                                    alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                    aria-hidden="true"
                                                    title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                >
                                                <span class="group-name">{{name}}</span>
                                            </a>
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <a href="';
                $value = $this->resolveValue($context->findDot('urls.group'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="badge badge-link badge-light" role="button" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section9676b028b46e3df83a3055c6a32599ed($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                                <img
';
                $buffer .= $indent . '                                                    class="rounded icon mr-1"
';
                $buffer .= $indent . '                                                    src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-hidden="true"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                <span class="group-name">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</span>
';
                $buffer .= $indent . '                                            </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section557c2b83ee0fcee56234daf383cfd21f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="mb-2 ml-auto d-flex justify-content-end align-items-end">
                                        {{#urls.image}}
                                            <a href="{{urls.group}}" class="badge badge-link badge-light" role="button" aria-label="{{#str}} memberofgroup, group, {{name}}{{/str}}" title="{{#str}} memberofgroup, group, {{name}}{{/str}}">
                                                <img
                                                    class="rounded icon mr-1"
                                                    src="{{{.}}}"
                                                    alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                    aria-hidden="true"
                                                    title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                >
                                                <span class="group-name">{{name}}</span>
                                            </a>
                                        {{/urls.image}}
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="mb-2 ml-auto d-flex justify-content-end align-items-end">
';
                $value = $context->findDot('urls.image');
                $buffer .= $this->sectionBa137d9a0483a973f864d0b0a7afe3c7($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3bdd870c012a16afaac0e6bd120ab33b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div class="badge badge-info">
                                            <img class="rounded icon mr-3"
                                                src="{{{.}}}"
                                                alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                            <span>{{#str}} pictureof, core, {{name}} {{/str}}</span>
                                        </div>                                       
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div class="badge badge-info">
';
                $buffer .= $indent . '                                            <img class="rounded icon mr-3"
';
                $buffer .= $indent . '                                                src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                            >
';
                $buffer .= $indent . '                                            <span>';
                $value = $context->find('str');
                $buffer .= $this->sectionE103d4001a9c5c8aed5c9292425b5842($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                        </div>                                       
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE744cec165e9e8ec26a1c5d3c8bcd1d8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    {{#urls.group}}
                                    <div class="mb-2 ml-auto d-flex justify-content-end align-items-end">
                                        {{#urls.image}}
                                            <a href="{{urls.group}}" class="badge badge-link badge-light" role="button" aria-label="{{#str}} memberofgroup, group, {{name}}{{/str}}" title="{{#str}} memberofgroup, group, {{name}}{{/str}}">
                                                <img
                                                    class="rounded icon mr-1"
                                                    src="{{{.}}}"
                                                    alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                    aria-hidden="true"
                                                    title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                >
                                                <span class="group-name">{{name}}</span>
                                            </a>
                                        {{/urls.image}}
                                    {{/urls.group}}
                                    {{^urls.group}}
                                        
                                        {{#urls.image}}
                                        <div class="badge badge-info">
                                            <img class="rounded icon mr-3"
                                                src="{{{.}}}"
                                                alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                            <span>{{#str}} pictureof, core, {{name}} {{/str}}</span>
                                        </div>                                       
                                        {{/urls.image}}
                                    
                                    {{/urls.group}}
                                    </div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->findDot('urls.group');
                $buffer .= $this->section557c2b83ee0fcee56234daf383cfd21f($context, $indent, $value);
                $value = $context->findDot('urls.group');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                        
';
                    $value = $context->findDot('urls.image');
                    $buffer .= $this->section3bdd870c012a16afaac0e6bd120ab33b($context, $indent, $value);
                    $buffer .= $indent . '                                    
';
                }
                $buffer .= $indent . '                                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section577818303161eb9080691fbc5beee425(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

                        {{#groups}}
                                    {{#urls.group}}
                                    <div class="mb-2 ml-auto d-flex justify-content-end align-items-end">
                                        {{#urls.image}}
                                            <a href="{{urls.group}}" class="badge badge-link badge-light" role="button" aria-label="{{#str}} memberofgroup, group, {{name}}{{/str}}" title="{{#str}} memberofgroup, group, {{name}}{{/str}}">
                                                <img
                                                    class="rounded icon mr-1"
                                                    src="{{{.}}}"
                                                    alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                    aria-hidden="true"
                                                    title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                >
                                                <span class="group-name">{{name}}</span>
                                            </a>
                                        {{/urls.image}}
                                    {{/urls.group}}
                                    {{^urls.group}}
                                        
                                        {{#urls.image}}
                                        <div class="badge badge-info">
                                            <img class="rounded icon mr-3"
                                                src="{{{.}}}"
                                                alt="{{#str}} pictureof, core, {{name}} {{/str}}"
                                                title="{{#str}} pictureof, core, {{name}} {{/str}}"
                                            >
                                            <span>{{#str}} pictureof, core, {{name}} {{/str}}</span>
                                        </div>                                       
                                        {{/urls.image}}
                                    
                                    {{/urls.group}}
                                    </div>
                                {{/groups}}

                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $value = $context->find('groups');
                $buffer .= $this->sectionE744cec165e9e8ec26a1c5d3c8bcd1d8($context, $indent, $value);
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD3a99ebfecb94beea6e88f9141126424(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' pictureof, core, {{author.fullname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' pictureof, core, ';
                $value = $this->resolveValue($context->findDot('author.fullname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3744fb2e8854a286cce24a44e5b82cc9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <img
                                    class="rounded w-100"
                                    src="{{{.}}}"
                                    alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                    aria-hidden="true"
                                    title="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                >
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <img
';
                $buffer .= $indent . '                                    class="rounded w-100"
';
                $buffer .= $indent . '                                    src="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    alt="';
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                    aria-hidden="true"
';
                $buffer .= $indent . '                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD3a99ebfecb94beea6e88f9141126424($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                >
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f06ffa13c52cc3baedf90463f194989(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="mb-0 mr-3" style="width: 60px;">
                            {{#urls.profileimage}}
                                <img
                                    class="rounded w-100"
                                    src="{{{.}}}"
                                    alt="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                    aria-hidden="true"
                                    title="{{#str}} pictureof, core, {{author.fullname}} {{/str}}"
                                >
                            {{/urls.profileimage}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="mb-0 mr-3" style="width: 60px;">
';
                $value = $context->findDot('urls.profileimage');
                $buffer .= $this->section3744fb2e8854a286cce24a44e5b82cc9($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbc21c36d03664580b5227e5ce50ba02(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' inreplyto, mod_forum, {{.}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' inreplyto, mod_forum, ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section51540e8b9c4cbf19759c5b16fc544ea7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="sr-only">{{#str}} inreplyto, mod_forum, {{.}} {{/str}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->sectionBbc21c36d03664580b5227e5ce50ba02($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6d1a6d8c04275f4ed00475868e070da5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'forum-post-unread font-weight-bold';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'forum-post-unread font-weight-bold';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB35f0606ceefc07b6d76f9662f5422e8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div {{!
                            }}class="{{#unread}}forum-post-unread font-weight-bold{{/unread}} forum-post-core-subject" {{!
                            }}data-region-content="forum-post-core-subject" {{!
                            }}data-reply-subject="{{replysubject}}" {{!
                            }}>

                                {{$subject}}<h5 class="my-0" title="{{{subject}}}"><span class="d-inline-block text-truncate font-weight-bold" style="max-width: 600px;" title="{{subject}}">{{{subject}}}</span></h5>{{/subject}}

                            </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div ';
                $buffer .= 'class="';
                $value = $context->find('unread');
                $buffer .= $this->section6d1a6d8c04275f4ed00475868e070da5($context, $indent, $value);
                $buffer .= ' forum-post-core-subject" ';
                $buffer .= 'data-region-content="forum-post-core-subject" ';
                $buffer .= 'data-reply-subject="';
                $value = $this->resolveValue($context->find('replysubject'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $buffer .= '>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                ';
                $blockFunction = $context->findInBlock('subject');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= '<h5 class="my-0" title="';
                    $value = $this->resolveValue($context->find('subject'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"><span class="d-inline-block text-truncate font-weight-bold" style="max-width: 600px;" title="';
                    $value = $this->resolveValue($context->find('subject'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '">';
                    $value = $this->resolveValue($context->find('subject'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '</span></h5>';
                }
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBe063bea9e3828a4ceaa260d495c44b9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedaydatetime, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedaydatetime, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA308eba18ba8e2ab8f95747bd19a5e97(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'postisprivatereply, forum';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'postisprivatereply, forum';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a46bd84d9e652d7d1b9c08301486bb6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="privatereplyinfo badge badge-dark mt-1">
                        {{#str}}postisprivatereply, forum{{/str}}
                        </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="privatereplyinfo badge badge-dark mt-1">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionA308eba18ba8e2ab8f95747bd19a5e97($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section97736c50c16d72b49b1eb58fe3695bea(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numberofreplies, mod_forum, {{replycount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numberofreplies, mod_forum, ';
                $value = $this->resolveValue($context->find('replycount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcc066a9bc7cebded25a4bc3d67960ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="sr-only">{{#str}} numberofreplies, mod_forum, {{replycount}} {{/str}}</span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="sr-only">';
                $value = $context->find('str');
                $buffer .= $this->section97736c50c16d72b49b1eb58fe3695bea($context, $indent, $value);
                $buffer .= '</span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC5bb1649427fd639aeb93fcd9f945e21(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' numwords, core, {{wordcount}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' numwords, core, ';
                $value = $this->resolveValue($context->find('wordcount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA99169f3251649e7c8f9862cd994efed(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <p class="mt-3 mb-0 badge badge-info"><small>{{#str}} numwords, core, {{wordcount}} {{/str}}</small></p>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <p class="mt-3 mb-0 badge badge-info"><small>';
                $value = $context->find('str');
                $buffer .= $this->sectionC5bb1649427fd639aeb93fcd9f945e21($context, $indent, $value);
                $buffer .= '</small></p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section276cb37c59a636c58d4c95f526f34076(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' attachmentname, mod_forum, {{filename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' attachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63f7f582e0283c9cd8898a1aa8039d60(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' addtoportfolio, core_portfolio ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' addtoportfolio, core_portfolio ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC95b897453b8a2454a363ea092e35f3e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' t/portfolioadd, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' t/portfolioadd, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB2b54d92018ac7ab55a683cf86e8349e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0da9044249cd16a1e32bca9034750cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <div>{{{.}}}</div>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <div>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section76800365720c72010a8bcb0cfb85ca0b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                <div class="attachedimages">
                                    <img
                                        src="{{{url}}}"
                                        alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                        style="max-width: 100%"
                                    >
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                <div class="attachedimages">
';
                $buffer .= $indent . '                                    <img
';
                $buffer .= $indent . '                                        src="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        alt="';
                $value = $context->find('str');
                $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                        style="max-width: 100%"
';
                $buffer .= $indent . '                                    >
';
                $value = $context->findDot('urls.export');
                $buffer .= $this->sectionB2b54d92018ac7ab55a683cf86e8349e($context, $indent, $value);
                $value = $context->findDot('html.plagiarism');
                $buffer .= $this->sectionA0da9044249cd16a1e32bca9034750cc($context, $indent, $value);
                $buffer .= $indent . '                                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB306e4067909c929106dbff70f7ebee5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{#isimage}}
                                <div class="attachedimages">
                                    <img
                                        src="{{{url}}}"
                                        alt="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                        style="max-width: 100%"
                                    >
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} addtoportfolio, core_portfolio {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            {{/isimage}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isimage');
                $buffer .= $this->section76800365720c72010a8bcb0cfb85ca0b($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section96fdf38a3da828f079856309b8856872(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{icon}}, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('icon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE4582362bca17629710ca07a1cd978e3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' exportattachmentname, mod_forum, {{filename}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' exportattachmentname, mod_forum, ';
                $value = $this->resolveValue($context->find('filename'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB6b635ad82ef0b91da378a60e35749bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                        <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                        <a href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionE4582362bca17629710ca07a1cd978e3($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                                            ';
                $value = $context->find('pix');
                $buffer .= $this->sectionC95b897453b8a2454a363ea092e35f3e($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                        </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section14245b58568421c206072ba1d4461c17(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            {{^isimage}}
                                <div class="attachments">
                                    <a
                                        href="{{{url}}}"
                                        aria-label="{{#str}} attachmentname, mod_forum, {{filename}} {{/str}}"
                                    >
                                        {{#pix}} {{icon}}, core {{/pix}} {{filename}}
                                    </a>
                                    {{#urls.export}}
                                        <a href="{{{.}}}" title="{{#str}} exportattachmentname, mod_forum, {{filename}} {{/str}}">
                                            {{#pix}} t/portfolioadd, core {{/pix}}
                                        </a>
                                    {{/urls.export}}
                                    {{#html.plagiarism}}
                                        <div>{{{.}}}</div>
                                    {{/html.plagiarism}}
                                </div>
                            {{/isimage}}
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('isimage');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div class="attachments">
';
                    $buffer .= $indent . '                                    <a
';
                    $buffer .= $indent . '                                        href="';
                    $value = $this->resolveValue($context->find('url'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                        aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section276cb37c59a636c58d4c95f526f34076($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                    >
';
                    $buffer .= $indent . '                                        ';
                    $value = $context->find('pix');
                    $buffer .= $this->section96fdf38a3da828f079856309b8856872($context, $indent, $value);
                    $buffer .= ' ';
                    $value = $this->resolveValue($context->find('filename'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                    $buffer .= $indent . '                                    </a>
';
                    $value = $context->findDot('urls.export');
                    $buffer .= $this->sectionB6b635ad82ef0b91da378a60e35749bf($context, $indent, $value);
                    $value = $context->findDot('html.plagiarism');
                    $buffer .= $this->sectionA0da9044249cd16a1e32bca9034750cc($context, $indent, $value);
                    $buffer .= $indent . '                                </div>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d6c7e9be52e5da3b888613064e24463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                    <div class="mt-2 forum-post-rating">{{{.}}}</div>
                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                    <div class="mt-2 forum-post-rating">';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAe37fdeec206de815fa124c8b1578fdb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' reply, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' reply, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC874ef7c26d6a8a9d6e6d38294699816(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="mb-2">
                                                {{$replyoutput}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.reply}}}"
                                                        class="btn btn-primary btn-sm"
                                                        data-post-id="{{id}}"
                                                        data-action="collapsible-link"
                                                        data-can-reply-privately="{{canreplyprivately}}"
                                                        title="{{#str}} reply, mod_forum {{/str}}"
                                                        aria-label="{{#str}} reply, mod_forum {{/str}}"
                                                        role="menuitem"
                                                    >
                                                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 15.25V6.75H8.75"></path>
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 7L6.75 17.25"></path>
                                                        </svg>
                                                        <span class="d-none d-md-flex ml-md-2">{{#str}} reply, mod_forum {{/str}}</span>
                                                    </a>
                                                {{/replyoutput}}
                                            </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="mb-2">
';
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                                    <a
';
                    $buffer .= $indent . '                                                        data-region="post-action"
';
                    $buffer .= $indent . '                                                        href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        class="btn btn-primary btn-sm"
';
                    $buffer .= $indent . '                                                        data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        data-action="collapsible-link"
';
                    $buffer .= $indent . '                                                        data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        role="menuitem"
';
                    $buffer .= $indent . '                                                    >
';
                    $buffer .= $indent . '                                                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
                    $buffer .= $indent . '                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 15.25V6.75H8.75"></path>
';
                    $buffer .= $indent . '                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 7L6.75 17.25"></path>
';
                    $buffer .= $indent . '                                                        </svg>
';
                    $buffer .= $indent . '                                                        <span class="d-none d-md-flex ml-md-2">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '</span>
';
                    $buffer .= $indent . '                                                    </a>
';
                }
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8a4896e3a4bc0c41e73503c6ebf7749(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    {{$replyoutput}}
                                                        <a
                                                            href="{{{urls.reply}}}"
                                                            class="btn btn-primary btn-sm mb-2"
                                                            data-post-id="{{id}}"
                                                            data-can-reply-privately="{{canreplyprivately}}"
                                                            title="{{#str}} reply, mod_forum {{/str}}"
                                                            aria-label="{{#str}} reply, mod_forum {{/str}}"
                                                            role="menuitem"
                                                        >
                                                            {{#str}} reply, mod_forum {{/str}}
                                                        </a>
                                                    {{/replyoutput}}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $blockFunction = $context->findInBlock('replyoutput');
                if (is_callable($blockFunction)) {
                    $buffer .= call_user_func($blockFunction, $context);
                } else {
                    $buffer .= $indent . '                                                        <a
';
                    $buffer .= $indent . '                                                            href="';
                    $value = $this->resolveValue($context->findDot('urls.reply'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            class="btn btn-primary btn-sm mb-2"
';
                    $buffer .= $indent . '                                                            data-post-id="';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            data-can-reply-privately="';
                    $value = $this->resolveValue($context->find('canreplyprivately'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                            role="menuitem"
';
                    $buffer .= $indent . '                                                        >
';
                    $buffer .= $indent . '                                                            ';
                    $value = $context->find('str');
                    $buffer .= $this->sectionAe37fdeec206de815fa124c8b1578fdb($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                        </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionFcb5abb8e3c94408fa1d289b5ef3f447(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markread, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section72bb0480a24e4802532bd551116de49e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-primary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                    <a
';
                $buffer .= $indent . '                                                        data-region="post-action"
';
                $buffer .= $indent . '                                                        href="';
                $value = $this->resolveValue($context->findDot('urls.markasread'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                        class="btn btn-primary btn-sm mb-2"
';
                $buffer .= $indent . '                                                        role="menuitem"
';
                $buffer .= $indent . '                                                        title="';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb5abb8e3c94408fa1d289b5ef3f447($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                        aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb5abb8e3c94408fa1d289b5ef3f447($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    >
';
                $buffer .= $indent . '                                                        ';
                $value = $context->find('str');
                $buffer .= $this->sectionFcb5abb8e3c94408fa1d289b5ef3f447($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                    </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section31d13d35264fbc819e59cd4918196342(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' markunread, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' markunread, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98f186b4194d310a3c5acea950493131(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-primary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-secondary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markunread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markunread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('unread');
                $buffer .= $this->section72bb0480a24e4802532bd551116de49e($context, $indent, $value);
                $value = $context->find('unread');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                                    <a
';
                    $buffer .= $indent . '                                                        data-region="post-action"
';
                    $buffer .= $indent . '                                                        href="';
                    $value = $this->resolveValue($context->findDot('urls.markasunread'), $context);
                    $buffer .= ($value === null ? '' : $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        class="btn btn-secondary btn-sm mb-2"
';
                    $buffer .= $indent . '                                                        role="menuitem"
';
                    $buffer .= $indent . '                                                        title="';
                    $value = $context->find('str');
                    $buffer .= $this->section31d13d35264fbc819e59cd4918196342($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                        aria-label="';
                    $value = $context->find('str');
                    $buffer .= $this->section31d13d35264fbc819e59cd4918196342($context, $indent, $value);
                    $buffer .= '"
';
                    $buffer .= $indent . '                                                    >
';
                    $buffer .= $indent . '                                                        ';
                    $value = $context->find('str');
                    $buffer .= $this->section31d13d35264fbc819e59cd4918196342($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                                    </a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c38fbb8f8f3e49e4120d021d07feb2f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktopost, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permanentlinktopost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section763a3604c774c34d64897ef31abbb560(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permalink, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permalink, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section84d24acf563d2d90d7ff75200dac7730(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.75 13.25L18 12C19.6569 10.3431 19.6569 7.65685 18 6V6C16.3431 4.34315 13.6569 4.34315 12 6L10.75 7.25"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.25 10.75L6 12C4.34315 13.6569 4.34315 16.3431 6 18V18C7.65685 19.6569 10.3431 19.6569 12 18L13.25 16.75"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.25 9.75L9.75 14.25"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} permalink, mod_forum {{/str}}</span>
                                                </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.view'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-secondary btn-sm"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section7c38fbb8f8f3e49e4120d021d07feb2f($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.75 13.25L18 12C19.6569 10.3431 19.6569 7.65685 18 6V6C16.3431 4.34315 13.6569 4.34315 12 6L10.75 7.25"></path>
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.25 10.75L6 12C4.34315 13.6569 4.34315 16.3431 6 18V18C7.65685 19.6569 10.3431 19.6569 12 18L13.25 16.75"></path>
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.25 9.75L9.75 14.25"></path>
';
                $buffer .= $indent . '                                                    </svg>
';
                $buffer .= $indent . '                                                    <span class="d-none d-md-flex ml-md-2">';
                $value = $context->find('str');
                $buffer .= $this->section763a3604c774c34d64897ef31abbb560($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0fb7958d41ca7a880e19a003139c431d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' permanentlinktoparentpost, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' permanentlinktoparentpost, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCf5fdc3805ec5d1701e4bc484d707b5c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' parent, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' parent, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6a38a6876ee7e03f9376591d97e5eece(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.75 19.25H19.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 15.25V4.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.25 8.25L12 4.75L8.75 8.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} parent, mod_forum {{/str}}</span>
                                                </a>
                                                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-secondary btn-sm"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0fb7958d41ca7a880e19a003139c431d($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                                        <path d="M4.75 19.25H19.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                        <path d="M12 15.25V4.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                        <path d="M15.25 8.25L12 4.75L8.75 8.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                    </svg>
';
                $buffer .= $indent . '                                                    <span class="d-none d-md-flex ml-md-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionCf5fdc3805ec5d1701e4bc484d707b5c($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD08a060cc097f193c29c5510c81c4ca5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section598c61011c6b895ac51b097c054b4862(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="ml-2 mb-2 rui-forum-edit-buttons">
                                                {{#controlreadstatus}}
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-primary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-secondary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markunread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markunread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{/controlreadstatus}}

                                                {{#view}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.75 13.25L18 12C19.6569 10.3431 19.6569 7.65685 18 6V6C16.3431 4.34315 13.6569 4.34315 12 6L10.75 7.25"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.25 10.75L6 12C4.34315 13.6569 4.34315 16.3431 6 18V18C7.65685 19.6569 10.3431 19.6569 12 18L13.25 16.75"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.25 9.75L9.75 14.25"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} permalink, mod_forum {{/str}}</span>
                                                </a>
                                                {{/view}}

                                                {{#urls.viewparent}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.75 19.25H19.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 15.25V4.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.25 8.25L12 4.75L8.75 8.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} parent, mod_forum {{/str}}</span>
                                                </a>
                                                {{/urls.viewparent}}

                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.edit}}}"
                                                    class="btn btn-outline-secondary btn-sm"
                                                    role="menuitem"
                                                    title="{{#str}} edit, mod_forum {{/str}}"
                                                    aria-label="{{#str}} edit, mod_forum {{/str}}"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 19.25H13.75"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} edit, mod_forum {{/str}}</span>
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="ml-2 mb-2 rui-forum-edit-buttons">
';
                $value = $context->find('controlreadstatus');
                $buffer .= $this->section98f186b4194d310a3c5acea950493131($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('view');
                $buffer .= $this->section84d24acf563d2d90d7ff75200dac7730($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->findDot('urls.viewparent');
                $buffer .= $this->section6a38a6876ee7e03f9376591d97e5eece($context, $indent, $value);
                $buffer .= $indent . '
';
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.edit'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-outline-secondary btn-sm"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD08a060cc097f193c29c5510c81c4ca5($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionD08a060cc097f193c29c5510c81c4ca5($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 19.25H13.75"></path>
';
                $buffer .= $indent . '                                                    </svg>
';
                $buffer .= $indent . '                                                    <span class="d-none d-md-flex ml-md-2">';
                $value = $context->find('str');
                $buffer .= $this->sectionD08a060cc097f193c29c5510c81c4ca5($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0066cb1b087bd9f8c261a80ff7434d10(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' prune, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' prune, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC36ff59cd1e0b7e84db9da6f69d4208e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.split}}}"
                                                    class="btn btn-outline-secondary btn-sm"
                                                    role="menuitem"
                                                    title="{{#str}} prune, mod_forum {{/str}}"
                                                    aria-label="{{#str}} prune, mod_forum {{/str}}"
                                                >
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.25 8C9.25 9.24264 8.24264 10.25 7 10.25C5.75736 10.25 4.75 9.24264 4.75 8C4.75 6.75736 5.75736 5.75 7 5.75C8.24264 5.75 9.25 6.75736 9.25 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9.25 16C9.25 17.2426 8.24264 18.25 7 18.25C5.75736 18.25 4.75 17.2426 4.75 16C4.75 14.7574 5.75736 13.75 7 13.75C8.24264 13.75 9.25 14.7574 9.25 16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9 15L19.25 6.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9 9L19.25 16.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} prune, mod_forum {{/str}}</span>
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.split'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-outline-secondary btn-sm"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section0066cb1b087bd9f8c261a80ff7434d10($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section0066cb1b087bd9f8c261a80ff7434d10($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
';
                $buffer .= $indent . '                                                        <path d="M9.25 8C9.25 9.24264 8.24264 10.25 7 10.25C5.75736 10.25 4.75 9.24264 4.75 8C4.75 6.75736 5.75736 5.75 7 5.75C8.24264 5.75 9.25 6.75736 9.25 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                        <path d="M9.25 16C9.25 17.2426 8.24264 18.25 7 18.25C5.75736 18.25 4.75 17.2426 4.75 16C4.75 14.7574 5.75736 13.75 7 13.75C8.24264 13.75 9.25 14.7574 9.25 16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                        <path d="M9 15L19.25 6.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                        <path d="M9 9L19.25 16.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
';
                $buffer .= $indent . '                                                    </svg>
';
                $buffer .= $indent . '                                                    <span class="d-none d-md-flex ml-md-2">';
                $value = $context->find('str');
                $buffer .= $this->section0066cb1b087bd9f8c261a80ff7434d10($context, $indent, $value);
                $buffer .= '</span>
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC033b8edefb34009ad7ec794e2a13909(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' delete, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' delete, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCb35041d6357df22527ab671ae022032(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.delete}}}"
                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                    role="menuitem"
                                                    title="{{#str}} delete, mod_forum {{/str}}"
                                                    aria-label="{{#str}} delete, mod_forum {{/str}}"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7.75H19"></path>
                                                    </svg>
                                                </a>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.delete'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-outline-danger btn-sm btn-icon"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->sectionC033b8edefb34009ad7ec794e2a13909($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC033b8edefb34009ad7ec794e2a13909($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
';
                $buffer .= $indent . '                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7.75H19"></path>
';
                $buffer .= $indent . '                                                    </svg>
';
                $buffer .= $indent . '                                                </a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7d97d1fc11291c5b96a7298e63784fe6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9244b7b3baeff9b11e9af85050c86770(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                                            <div class="ml-md-auto mb-2">
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.export}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} addtoportfolio, core_portfolio {{/str}}"
                                                    aria-label="{{#str}} addtoportfolio, core_portfolio {{/str}}"
                                                    role="menuitem"
                                                >
                                                    {{#str}} addtoportfolio, core_portfolio {{/str}}
                                                </a>
                                            </div>
                                            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                                            <div class="ml-md-auto mb-2">
';
                $buffer .= $indent . '                                                <a
';
                $buffer .= $indent . '                                                    data-region="post-action"
';
                $buffer .= $indent . '                                                    href="';
                $value = $this->resolveValue($context->findDot('urls.export'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    class="btn btn-secondary btn-sm"
';
                $buffer .= $indent . '                                                    title="';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '                                                    role="menuitem"
';
                $buffer .= $indent . '                                                >
';
                $buffer .= $indent . '                                                    ';
                $value = $context->find('str');
                $buffer .= $this->section63f7f582e0283c9cd8898a1aa8039d60($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                                                </a>
';
                $buffer .= $indent . '                                            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAbd3f285c794158ddf70df170ab48224(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

                                            {{#reply}}
                                            <div class="mb-2">
                                                {{$replyoutput}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.reply}}}"
                                                        class="btn btn-primary btn-sm"
                                                        data-post-id="{{id}}"
                                                        data-action="collapsible-link"
                                                        data-can-reply-privately="{{canreplyprivately}}"
                                                        title="{{#str}} reply, mod_forum {{/str}}"
                                                        aria-label="{{#str}} reply, mod_forum {{/str}}"
                                                        role="menuitem"
                                                    >
                                                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.25 15.25V6.75H8.75"></path>
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 7L6.75 17.25"></path>
                                                        </svg>
                                                        <span class="d-none d-md-flex ml-md-2">{{#str}} reply, mod_forum {{/str}}</span>
                                                    </a>
                                                {{/replyoutput}}
                                            </div>
                                            {{/reply}}
                                            {{^reply}}
                                                {{#selfenrol}}
                                                    {{$replyoutput}}
                                                        <a
                                                            href="{{{urls.reply}}}"
                                                            class="btn btn-primary btn-sm mb-2"
                                                            data-post-id="{{id}}"
                                                            data-can-reply-privately="{{canreplyprivately}}"
                                                            title="{{#str}} reply, mod_forum {{/str}}"
                                                            aria-label="{{#str}} reply, mod_forum {{/str}}"
                                                            role="menuitem"
                                                        >
                                                            {{#str}} reply, mod_forum {{/str}}
                                                        </a>
                                                    {{/replyoutput}}
                                                {{/selfenrol}}
                                            {{/reply}}
  
                                            {{#edit}}
                                            <div class="ml-2 mb-2 rui-forum-edit-buttons">
                                                {{#controlreadstatus}}
                                                {{#unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasread}}}"
                                                        class="btn btn-primary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{^unread}}
                                                    <a
                                                        data-region="post-action"
                                                        href="{{{urls.markasunread}}}"
                                                        class="btn btn-secondary btn-sm mb-2"
                                                        role="menuitem"
                                                        title="{{#str}} markunread, mod_forum {{/str}}"
                                                        aria-label="{{#str}} markunread, mod_forum {{/str}}"
                                                    >
                                                        {{#str}} markunread, mod_forum {{/str}}
                                                    </a>
                                                {{/unread}}
                                                {{/controlreadstatus}}

                                                {{#view}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.view}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktopost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16.75 13.25L18 12C19.6569 10.3431 19.6569 7.65685 18 6V6C16.3431 4.34315 13.6569 4.34315 12 6L10.75 7.25"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.25 10.75L6 12C4.34315 13.6569 4.34315 16.3431 6 18V18C7.65685 19.6569 10.3431 19.6569 12 18L13.25 16.75"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.25 9.75L9.75 14.25"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} permalink, mod_forum {{/str}}</span>
                                                </a>
                                                {{/view}}

                                                {{#urls.viewparent}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{.}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    aria-label="{{#str}} permanentlinktoparentpost, mod_forum {{/str}}"
                                                    role="menuitem"
                                                >
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M4.75 19.25H19.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M12 15.25V4.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M15.25 8.25L12 4.75L8.75 8.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} parent, mod_forum {{/str}}</span>
                                                </a>
                                                {{/urls.viewparent}}

                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.edit}}}"
                                                    class="btn btn-outline-secondary btn-sm"
                                                    role="menuitem"
                                                    title="{{#str}} edit, mod_forum {{/str}}"
                                                    aria-label="{{#str}} edit, mod_forum {{/str}}"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.75 19.25L9 18.25L18.2929 8.95711C18.6834 8.56658 18.6834 7.93342 18.2929 7.54289L16.4571 5.70711C16.0666 5.31658 15.4334 5.31658 15.0429 5.70711L5.75 15L4.75 19.25Z"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.25 19.25H13.75"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} edit, mod_forum {{/str}}</span>
                                                </a>
                                            {{/edit}}

                                            {{#split}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.split}}}"
                                                    class="btn btn-outline-secondary btn-sm"
                                                    role="menuitem"
                                                    title="{{#str}} prune, mod_forum {{/str}}"
                                                    aria-label="{{#str}} prune, mod_forum {{/str}}"
                                                >
                                                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M9.25 8C9.25 9.24264 8.24264 10.25 7 10.25C5.75736 10.25 4.75 9.24264 4.75 8C4.75 6.75736 5.75736 5.75 7 5.75C8.24264 5.75 9.25 6.75736 9.25 8Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9.25 16C9.25 17.2426 8.24264 18.25 7 18.25C5.75736 18.25 4.75 17.2426 4.75 16C4.75 14.7574 5.75736 13.75 7 13.75C8.24264 13.75 9.25 14.7574 9.25 16Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9 15L19.25 6.75" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                        <path d="M9 9L19.25 16.25" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                                    </svg>
                                                    <span class="d-none d-md-flex ml-md-2">{{#str}} prune, mod_forum {{/str}}</span>
                                                </a>
                                            {{/split}}
                                            {{#delete}}
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.delete}}}"
                                                    class="btn btn-outline-danger btn-sm btn-icon"
                                                    role="menuitem"
                                                    title="{{#str}} delete, mod_forum {{/str}}"
                                                    aria-label="{{#str}} delete, mod_forum {{/str}}"
                                                >
                                                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24">
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6.75 7.75L7.59115 17.4233C7.68102 18.4568 8.54622 19.25 9.58363 19.25H14.4164C15.4538 19.25 16.319 18.4568 16.4088 17.4233L17.25 7.75"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 7.5V6.75C9.75 5.64543 10.6454 4.75 11.75 4.75H12.25C13.3546 4.75 14.25 5.64543 14.25 6.75V7.5"></path>
                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7.75H19"></path>
                                                    </svg>
                                                </a>
                                            {{/delete}}

                                            {{#edit}}
                                            </div>
                                            {{/edit}}

                                            {{#export}}
                                            <div class="ml-md-auto mb-2">
                                                <a
                                                    data-region="post-action"
                                                    href="{{{urls.export}}}"
                                                    class="btn btn-secondary btn-sm"
                                                    title="{{#str}} addtoportfolio, core_portfolio {{/str}}"
                                                    aria-label="{{#str}} addtoportfolio, core_portfolio {{/str}}"
                                                    role="menuitem"
                                                >
                                                    {{#str}} addtoportfolio, core_portfolio {{/str}}
                                                </a>
                                            </div>
                                            {{/export}}
                                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $value = $context->find('reply');
                $buffer .= $this->sectionC874ef7c26d6a8a9d6e6d38294699816($context, $indent, $value);
                $value = $context->find('reply');
                if (empty($value)) {
                    
                    $value = $context->find('selfenrol');
                    $buffer .= $this->sectionE8a4896e3a4bc0c41e73503c6ebf7749($context, $indent, $value);
                }
                $buffer .= $indent . '  
';
                $value = $context->find('edit');
                $buffer .= $this->section598c61011c6b895ac51b097c054b4862($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('split');
                $buffer .= $this->sectionC36ff59cd1e0b7e84db9da6f69d4208e($context, $indent, $value);
                $value = $context->find('delete');
                $buffer .= $this->sectionCb35041d6357df22527ab671ae022032($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('edit');
                $buffer .= $this->section7d97d1fc11291c5b96a7298e63784fe6($context, $indent, $value);
                $buffer .= $indent . '
';
                $value = $context->find('export');
                $buffer .= $this->section9244b7b3baeff9b11e9af85050c86770($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2f96b8da113d76c894e7520ea1c4794f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    {{> mod_forum/forum_discussion_post }}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('mod_forum/forum_discussion_post')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                    ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0a2c07c1fe68076348109b9df6691419(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#replies}}
                    {{> mod_forum/forum_discussion_post }}
                {{/replies}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('replies');
                $buffer .= $this->section2f96b8da113d76c894e7520ea1c4794f($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    public function blockB271b05d99926cf71f42fc2fdaf098b4($context)
    {
        $indent = $buffer = '';
        $buffer .= 'created-';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block0f58c85b5accd62eb904cca306ac20c3($context)
    {
        $indent = $buffer = '';
        $value = $this->resolveValue($context->find('timecreated'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
    
        return $buffer;
    }

    public function block3f659631444eecbe92f0647acc7c31ef($context)
    {
        $indent = $buffer = '';
        $value = $context->find('str');
        $buffer .= $this->sectionBe063bea9e3828a4ceaa260d495c44b9($context, $indent, $value);
    
        return $buffer;
    }
}
