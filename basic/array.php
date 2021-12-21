<?php
//PHP数组：索引数组与关联数组
$nums = [2,4,6,8,10];
$lans = ['php','golang','java'];
// var_dump($nums);
// var_dump($lans);
// print_r($nums);
//增删改查
$fruits = [];
$fruits[] = 'Apple';
$fruits[] = 'Orange';
$fruits[] = 'Pear';
//print_r($fruits);
//var_dump(count($fruits));
//获取指定索引元素值
$fruit = $fruits[0];
$fruits[2] = 'Banana';
unset($fruits[1]);
//print_r($fruits);
//var_dump($fruits[1]);
//动态类型
$book = [
    'Laravel',
    'king',
    2020,
    99.0,
    false
];
//print_r($book);
//关联数组
$book = [
    'name'=>'laravel',
    'author'=>'king',
    'publish_at'=>2020,
    'price'=>99.0,
    'published'=>true
];
print_r($book);
//增删改查