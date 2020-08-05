<?php

use App\Support\Cache;

$cache = Cache::remember('cacheKey', $ttl, function () {
    return 'cache';
});
$smarty->assign('cache', $cache);
$smarty->display();
