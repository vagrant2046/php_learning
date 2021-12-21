<?php
//匿名函数
$add = function(int $a,int $b):int{
    return $a + $b;
};
$n1 = 1;
$n2 = 2;
$sum = $add($n1,$n2);
echo "$n1 + $n2 = $sum".PHP_EOL;
$sum = call_user_func($add, $n1, $n2);
var_dump($sum);
//可变函数
function multi(int $a,int $b):int{
    return $a * $b;
}
$add = 'multi';
$product = $add($n1,$n2);
//作用域
//匿名函数（或者叫闭包函数）的一个强大功能是支持在函数体中直接引用上下文变量(继承父作用域的变量)，比如在上述代码中，我们可以这样编写匿名函数实现代码：
$n1 = 1;
$n2 = 3;
// 计算两数相加
$add = function () use ($n1, $n2) {
    return $n1 + $n2;
};
// 计算两数相乘
$multi = function () use ($n1, $n2){
    return $n1 * $n2;
};
// 调用匿名函数
$sum = $add();
echo "$n1 + $n2 = $sum" . PHP_EOL;
$product = $multi();
echo "$n1 x $n2 = $product" . PHP_EOL;
//通过 global 声明全局变量
// 计算两数相减
function sub() {
    global $n1, $n2;
    return $n1 - $n2;
}