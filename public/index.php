<?php

use App\Support\Cache;

$cache = Cache::remember('cacheKey', function () {
    return 'cache';
});
$smarty->assign('cache', $cache);
$smarty->display();
