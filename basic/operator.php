<?php
//php运算符
#算术运算符
$a = 32;
$b = 8;
$n1 = $a + $b;
$n2 = $a - $b;
$n3 = $a * $b;
$n4 = $a / $b;
$n5 = $a % $b;
$a += $b;  // 等价于 $a = $a + $b;
printf("%d\n", $a);
$a -= $b;  // 等价于 $a = $a - $b;
printf("%d\n", $a);
$a *= $b;  // 等价于 $a = $a * $b;
printf("%d\n", $a);
$a /= $b;  // 等价于 $a = $a / $b;
printf("%d\n", $a);
$a %= $b;  // 等价于 $a = $a % $b;
printf("%d\n", $a);
//自增/自减运算符
$a = 32;  // 将 $a 恢复为 32
$b = 8;
$a++;  // 等价于 $a += 1;
$b--;  // 等价于 $b -= 1;
printf("a, b = %d, %d\n", $a, $b);
//比较运算符
# 比较运算符
$a = 32;
$b = 8;
var_dump($a == $b);  // false
var_dump($a != $b);  // true
var_dump($a > $b);   // true
# 严格比较
$c = 32;
$d = 32.0;
var_dump($c == $d);  // true
var_dump($c != $d);  // false
var_dump($c === $d); // false
var_dump($c !== $d); // true
var_dump($a == $c);  // true
var_dump($a === $c); // true
//逻辑运算符
if ($a > $b && $a >= $c) {
    // do something...
}
if ($a > $b || $a >= $c) {
    // do something...
}
if (!($a < $b)) {
    // do something...
}
//其他运算符
// 赋值运算符
// 位运算符
// 错误控制运算符
// 执行运算符
// 字符串运算符
// 数组运算符
// 类型运算符
// 运算符优先级