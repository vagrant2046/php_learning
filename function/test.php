<?php
//自定义函数和内置函数
/**
 * 计算两数相加之和
 * @param $a
 * @param $b
 * @return mixed
 */
function add($a, $b) {
    $sum = $a + $b;
    return $sum;
}
var_dump(add(1,2));
//声明参数和返回值类型
/**
 * 计算两数相加之和
 * @param int $a
 * @param int $b
 * @return int
 */
function add2(int $a, int $b): int {
    $sum = $a + $b;
    return $sum;
}
//值传递和引用传递
function add3(int &$a, int $b) {
    $a += $b;
}
$m = 1;
$n = 2;
add3($m, $n);
printf("\$m = %d\n", $m);
//内置函数
// 字符串函数
$str = "Hello, PHP!";
printf("字符串长度: %d\n", strlen($str));
printf("大写格式: %s\n", strtoupper($str));
printf("小写格式: %s\n", strtolower($str));
//数组函数
// 数组函数
$arr = [1, 3, 8, 7, 6];
sort($arr);  // 升序
print_r($arr);
rsort($arr); // 降序
print_r($arr);
printf("数组最大值：%d\n", max($arr));
printf("数组最小值：%d\n", min($arr));
//数学函数
//数学函数
$num = 100;
$n1 = pow(100, 2); // 100的2次方
$n2 = sqrt(100);   // 100的平方根
$n3 = decbin(100);  // 转化为二进制
$n4 = mt_rand(0, 100);  // 生成0-100之间的随机数
//文件系统函数
// 文件系统函数
file_put_contents('test1.txt', '你好，学院君');  // 快速写入内容到文件 test.txt（不存在则自动创建）
$content = file_get_contents('test1.txt');  // 从文件 test.txt 中读取内容
var_dump($content);
$file = fopen('test2.txt', 'w');   // 以写入模式打开文件 test2.txt，不存在则创建自动创建
fwrite($file, '你好，');   // 通过 fwrite 写入内容到文件
fwrite($file, '学院君！');  // 继续写入
fclose($file);  // 关闭这个文件句柄
$file = fopen('test2.txt', 'r');  // 只读模式打开 test2.txt 文件
$content = '';
while (!feof($file)) {    // 还没有到文件末尾，则继续读取
    $content .= fread($file, 1024);   // 通过 fread 读取指定字节内容
}
fclose($file);
var_dump($content);
// 删除上述文件
unlink('test1.txt');
unlink('test2.txt');