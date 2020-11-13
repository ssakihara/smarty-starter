<?php

namespace App\Support;

use PDO;

class DB
{
    public static $dbh = null;

    public static function boot(
        $host = DB_HOST,
        $dbname = DB_DATABASE,
        $user = DB_USERNAME,
        $password = DB_PASSWORD,
        $port = DB_PORT
    ): void {
        $dsn = "pgsql:dbname=${dbname} host=${host} port=${port}";
        self::$dbh = new PDO($dsn, $user, $password);
    }

    public static function query($sql, $param)
    {
        if (self::$dbh === null) {
            self::boot();
        }

        $sth = self::$dbh->prepare($sql);

        foreach ($param as $key => $value) {
            $sth->bindParam(":${key}", $value, PDO::PARAM_STR);
        }
        $sth->execute();

        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function transaction(\Closure $func): void
    {
        if (self::$dbh === null) {
            self::boot();
        }

        self::$dbh->beginTransaction();

        try {
            $func();
            self::$dbh->commit();
        } catch (\Exception $e) {
            self::$dbh->rollBack();
            error_log($e->getMessage());
        }
    }

    public static function fetchColumns($table)
    {
        $result = [];
        $param = ['table_name' => $table];
        $tmp = self::query('SELECT column_name FROM information_schema.columns WHERE table_name = :table_name ORDER BY ordinal_position', $param);
        $result = array_column($tmp, 'column_name');

        return $result;
    }
}
