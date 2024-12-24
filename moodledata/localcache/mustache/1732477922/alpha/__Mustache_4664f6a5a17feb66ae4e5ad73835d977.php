<?php

class __Mustache_4664f6a5a17feb66ae4e5ad73835d977 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<div id="block_xp_rules_page_loading_success" style="display: none">
';
        $buffer .= $indent . '    <script>
';
        $buffer .= $indent . '        (function() {
';
        $buffer .= $indent . '            try {
';
        $buffer .= $indent . '                var elerror = document.getElementById(\'block_xp_rules_page_loading_error\');
';
        $buffer .= $indent . '                elerror && elerror.remove && elerror.remove();
';
        $buffer .= $indent . '            } catch (err) {
';
        $buffer .= $indent . '                console.log(err);
';
        $buffer .= $indent . '            }
';
        $buffer .= $indent . '        })();
';
        $buffer .= $indent . '    </script>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }
}
