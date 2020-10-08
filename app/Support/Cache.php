<?php

namespace App\Support;

class Cache
{
    protected static $key = null;

    protected static $ttl = 10;

    protected static $repository = null;

    public static function boot(): void
    {
        if (!defined('APP_KEY')) {
            throw new \Exception('APP_KEY is nof defined');
        }

        if (APP_KEY === '') {
            throw new \Exception('APP_KEY is nof found');
        }

        static::$key = APP_KEY;
        static::$repository = new \Memcached();
        static::$repository->addServer(MEMCACHE_SERVER, MEMCACHE_SERVER_PORT);
    }

    /**
     * キャッシュがあれば取得する
     * なければ、callback関数を実行しキャッシュさせる.
     * @param string   $key      キャッシュキー
     * @param int      $ttl      キャッシュ保存時間[minutes]
     * @param \Closure $callback キャッシュがないときに実行される関数
     * @return mixed キャッシュされた文字列
     */
    public static function remember($key, \Closure $callback, $ttl = null)
    {
        if (defined('APP_ENV')) {
            if (APP_ENV !== 'production') {
                return $callback();
            }
        }

        if (static::$repository === null) {
            static::boot();
        }

        if ($ttl === null) {
            $ttl = static::$ttl;
        }

        $value = unserialize(static::$repository->get(static::$key . $key));

        if ($value) {
            return $value;
        }

        $value = $callback();
        static::$repository->set(static::$key . $key, serialize($value), $ttl * 60);
        return $value;
    }
}
