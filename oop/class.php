<?php
ini_set("display_errors", "On");

error_reporting(E_ALL | E_STRICT);
//PHP类与对象、访问控制
class Car
{
    #类属性
    const WHEELS = 4;//汽车都是4个轮子
    #访问控制
    public  $seats;   //座位
    public  $doors;   //门
    public  $engine;  //发动机
    public  $brand;   //品牌
    #构造函数
    public function __construct($brand, $seats = 5, $doors = 4, $engine = 1)
    {
        $this->seats = $seats;
        $this->doors = $doors;
        $this->engine = $engine;
        $this->brand = $brand;
    }
    #类方法
    public function getBrand()
    {
        return $this->brand;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;    
    }
    public function drive()
    {
        echo "1.启动引擎..." . PHP_EOL;
        echo "2.挂D档..." . PHP_EOL;
        echo "3.放下手刹..." . PHP_EOL;
        echo "4.踩油门,出发..." . PHP_EOL; 
        printf("5.%s汽车已出发\n", $this->brand);     
    }
    public function close()
    {
        echo "1.踩刹车..." . PHP_EOL;
        echo "2.挂P档..." . PHP_EOL;
        echo "3.拉起手刹..." . PHP_EOL;
        echo "4.关闭引擎..." . PHP_EOL;
        printf("5.%s汽车已熄火\n", $this->brand);
    }   
}
#实例化对象new
// $car = new Car();
// var_dump(Car::WHEELS);
// $car->seats = 5;
// var_dump($car->seats);
// $car->setBrand("奔驰");
// var_dump($car->getBrand());
// $car->drive();
// $car->close();
// $car = new Car("保时捷");
// var_dump($car->getBrand());
// var_dump($car->brand);
#PHP继承、封装与多态
// class Benz extends Car
// {
//     public function __construct($seats = 5, $doors = 4, $engine = 1)
//     {
//       $this->brand = '宝马';
//       parent::__construct($this->brand,$seats,$doors,$engine);
//     }
// }
// $benz = new Benz();
// var_dump($benz->brand);
// $benz->drive();
#封装:不需要关心对象方法的实现细节
#多态
class Benz extends Car
{
    //重写父类实现
    public function drive()
    {
        echo "22已经重写了！";
        //parent::drive(); 
    }
}
// $benz = new Benz('benz');
// $benz->drive();
#类型转换
//不能将父类对象转换为子类对象
class TestCarDrive
{
    public function testDrive(Car $car)
    {
        $car->drive();
    }
    public function testBenzDrive(Benz $benz)
    {
        $benz->drive();
    }
}
$bmw = new Car('bmw');
$benz = new Benz('benz');
$test = new TestCarDrive();
$test->testDrive($benz);
$test->testBenzDrive($bmw);