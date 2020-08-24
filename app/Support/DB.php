<?php

namespace App\Support;

use PDO;

class DB
{
    static $dbh = null;

    public static function boot(
        $host = DB_HOST,
        $dbname = DB_DATABASE,
        $user = DB_USERNAME,
        $password = DB_PASSWORD,
        $port = DB_PORT
    ) {
        $dsn = "pgsql:dbname=${dbname} host=${host} port=${port}";
        self::$dbh = new PDO($dsn, $user, $password);
    }

    public static function query($sql)
    {
        if (is_null(self::$dbh)) {
            self::boot();
        }
        return self::$dbh->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
