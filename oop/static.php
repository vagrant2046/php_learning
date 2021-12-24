<?php
//php静态属性和静态方法
#基本使用
// class Car
// {
//     public static $WHEELS = 4;
//     public static function getWheels()
//     {
//         return self::$WHEELS;
//     }
// }
// Car::$WHEELS = 8;
// echo Car::getWheels();
//后期静态绑定
class Car
{
    public static function getClassName()
    {
        return __CLASS__;
    }

    public static function who()
    {
        echo static::getClassName() . PHP_EOL;
    }
}

class LynkCo01 extends Car
{
    public static function getClassName()
    {
        return __CLASS__;
    }
}
Car::who();
LynkCo01::who();