<?php

namespace App\Smarty;

use Smarty as SmartyBase;

class Smarty extends SmartyBase
{
    public function __construct(
        $template_dir = __DIR__ . '/../../templates',
        $compile_dir = __DIR__ . '/../../templates_c'
    ) {
        parent::__construct();
        $this->template_dir = $template_dir;
        $this->compile_dir = $compile_dir;
        $this->escape_html = true;
    }

    public function display($template = null, $cache_id = null, $compile_id = null, $parent = null)
    {
        if ($template === null) {
            $path = str_replace(PROJECT_ROOT, '', $_SERVER['SCRIPT_FILENAME']);
            $template = substr(preg_replace('/\.php$/', '.tpl', $path), 1);
        }

        return parent::display($template, $cache_id, $compile_id, $parent);
    }
}
