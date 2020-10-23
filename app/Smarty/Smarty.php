<?php

namespace App\Smarty;

use Smarty as SmartyBase;

class Smarty extends SmartyBase
{
    public function __construct()
    {
        parent::__construct();
        $this->caching = 0;
        $this->escape_html = true;
    }

    public function setCompileDir($dir): void
    {
        $this->compile_dir = $dir;
    }

    public function setPluginDir($dir): void
    {
        $this->addPluginsDir([$dir]);
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
