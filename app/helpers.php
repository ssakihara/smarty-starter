<?php
/**
 * 指定のディレクトリ配下のファイル配列を返す
 * @param string $dir ディレクトリのパス
 * @param string $extension 限定する拡張子
 * @return array ファイル名配列
 */
if (!function_exists('globs')) {
    function globs(string $dir, string $extension = 'php')
    {
        $files = glob(rtrim($dir, '/') . '/*');
        $list = [];
        foreach ($files as $file) {
            if (is_file($file)) {
                $list[] = $file;
            }
            if (is_dir($file)) {
                $list = array_merge($list, globs($file, $extension));
            }
        }
        $pattern = '/\.' . $extension . '$/';
        $list = array_filter($list, function ($var) use ($pattern) {
            return preg_match($pattern, $var);
        });
        return $list;
    }
}
