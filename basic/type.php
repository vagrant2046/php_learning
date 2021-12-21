<?php
//php基本数据类型
//字符串类型定义
$name = "laravel";
$author = 'king';
//字符串类型的判断
if (is_string($name)) {
    echo '$name 是字符串' . PHP_EOL;
}
if (is_string($author)) {
    echo '$author 是字符串' . PHP_EOL;
}
//查看变量类型
var_dump($name);
//单引号和双引号的区别
if (is_string($name)) {
    echo "\"$name\" 是字符串" . PHP_EOL;
}
if (is_string($author)) {
    echo "'$author' 也是字符串" . PHP_EOL;
}
//数字类型
$age = 18;
var_dump($age);
echo "当前系统PHP整型有效值范围:" . PHP_INT_MIN . "~" . PHP_INT_MAX . PHP_EOL;
//浮点型
$price = 99.00;
var_dump($price);
//布尔类型
$publish = true;
var_dump($publish);
//基本数据类型之间的转化
$str = "123";
$int = 2020;
$float = 99.0;
$bool = false;
var_dump((int) $str);
var_dump((bool) $str);
var_dump((string) $str);
var_dump((bool) $str);
var_dump((int) $float);
var_dump((string) $float);
var_dump((string) $bool);
var_dump((int) $bool);