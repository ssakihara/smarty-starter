<?php
/**
 * auto_prepend_file で最初に読み込むべきファイル
 */

$bootstrap = glob(__DIR__ . '/bootstrap/*');
foreach ($bootstrap as $path) {
    require_once $path;
}
