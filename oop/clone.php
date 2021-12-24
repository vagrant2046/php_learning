<?php
$carA = new stdClass();
$carA->brand = '奔驰';
$carA->power = '汽油';
$carB = $carA;
$carB->brand = '宝马';
var_dump($carA);
var_dump($carB);