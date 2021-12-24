<?php
#通过Trait水平扩展PHP类功能
// trait Power
// {
//     protected function gas()
//     {
//         return '汽油';
//     }
//     protected function battery()
//     {
//         return '电池';
//     }
// }
// class Car
// {
//     use Power;
//     public function drive()
//     {
//         echo "动力来源:".$this->gas().PHP_EOL;
//         echo "汽车启动...".PHP_EOL;
//     }
// }
// $car = new Car();
// $car->drive();
//同名方法重写的优先级依次是：使用 Trait 的类 > Trait > 父类
#使用多个 Trait
trait Power
{
    protected function gas()
    {
        return '汽油';
    }

    protected function battery()
    {
        return '电池';
    }
}

trait Engine
{
    protected function three()
    {
        return '三缸发动机';
    }

    protected function four()
    {
        return '四缸发动机';
    }
}

class Car
{
    use Power, Engine;

    public function drive()
    {
        // 设置动力来源
        echo "动力来源：" . $this->gas() . PHP_EOL;
        echo "发送机：" . $this->four() . PHP_EOL;
        echo "汽车启动..." . PHP_EOL;
    }
}

$car = new Car();
$car->drive();
// class Car
// {
//     use Power, Engine {
//         Engine::printText insteadof Power;
//     }

//     public function drive()
//     {
//         // 设置动力来源
//         $this->gas();
//         $this->four();
//         $this->printText();
//         echo "汽车启动..." . PHP_EOL;
//     }
// }

// trait Component
// {
//     use Power, Engine {
//         Engine::printText insteadof Power;
//         Power::printText as printPower;
//         Engine::printText as printEngine;
//     }

//     protected function init()
//     {
//         $this->gas();
//         $this->four();
//     }
// }