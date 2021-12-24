<?php
ini_set('display_errors', 1);
// error_reporting(E_ALL);  // 报告所有错误（默认配置）
// error_reporting(E_ALL ^ E_WARNING);
// set_error_handler("myErrorHandler");

try {
    $content = file_get_contents('https://xueyuanjun.com/error');
} catch (Error $error) {
    var_dump($error);
}
var_dump($content);