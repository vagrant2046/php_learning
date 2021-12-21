<?php

//声明为变量的好处是一次声明，多次使用
$greeting = 'hello php';
echo $greeting . PHP_EOL;
printf("%s\n", $greeting);

//运行时修改变量值
$greeting = "hello world";
echo $greeting . PHP_EOL;

/*
* 变量命名规则
* 以 $ 开头
* $ 后面中文、字母、下划线、数字（不能以数字开头）
*/
$greeting2 = 'hello';
$_greeting = 'hello';
$greet_2 = 'hello';
$你好 = '你好';
//错误的几个示例
// greeting = 'hello';
// $2greeting = 'hello';
// $greeting-2 = 'hello';

//变量名大小写敏感
$greeting = 'hello 1';
$Greeting = 'hello 2';
echo $greeting . PHP_EOL;
echo $Greeting . PHP_EOL;

//可变变量
$greeting = 'hello world!';
$varName = 'greeting';
echo $$varName . PHP_EOL;;

//常量
define("LANGUAGE",'PHP');
const FRAMEWORK = 'lARAVEL';
echo LANGUAGE . PHP_EOL .FRAMEWORK;