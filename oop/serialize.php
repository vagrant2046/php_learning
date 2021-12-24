<?php
#PHP 魔术方法、序列化与对象复制
class Car
{
    protected $brand;
    public static $WHEELS = 4;
    private $aaano;
    public function __call($name, $arguments)
    {
        echo "调用的成员方法不存在" . PHP_EOL;
    }

    public static function __callStatic($name, $arguments)
    {
        echo "调用的静态方法不存在" . PHP_EOL;
    }
    public function __sleep()
    {
        return ['brand', 'aaano'];
    }
    public function __wakeup()
    {
        $this->aaano = 10001;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getNo()
    {
        return $this->aaano;
    }
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}
$car = new Car();
$car->setBrand("领克01");
$string = serialize($car);
file_put_contents("car",$string);
$content = file_get_contents("car");
$object = unserialize($content);
echo "汽车品牌：" . $object->getBrand() . PHP_EOL;
//PHP 魔术方法、序列化与对象复制
echo "汽车No.：" . $object->getNo() . PHP_EOL;
echo "汽车No.：" . $car->get22No() . PHP_EOL;
class Car2
{
    protected $brand;
    public function __invoke($brand)
    {
        $this->brand = $brand;
        echo "hello world -- ". $this->brand . PHP_EOL;;
    }
}
$car = new Car2();
$car('bmw');
