<?php

use App\Smarty\Smarty;

$smarty = new Smarty();

$smarty->setTemplateDir(PROJECT_ROOT . '/templates');
$smarty->setCompileDir(PROJECT_ROOT . '/templates_c');
$smarty->setPluginDir(PROJECT_ROOT . '/plugins/smarty');
