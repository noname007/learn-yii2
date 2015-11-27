<?php

namespace app\controllers;
use yii\di\Container;
use yii\di\yii\di;

class TestController extends \yii\web\Controller
{

    public function actionContainer()
    {
        $container = new Container();
        //使用容器更像是使用一个配置文件，解决依赖
        $container->set('app\controllers\Driver','app\controllers\ManDriver');
        $car = $container->get('app\controllers\Car');
        $car->run();
    }


}

interface Driver{
	public  function  drive();
}

class ManDriver implements Driver{
	function drive() {
		echo 'i am old man';
	}
}

class Car{
	private $driver = NULL;
	function __construct(Driver $driver) {
		$this->driver= $driver;
	}
	public function run(){
		$driver = $this->driver;
		$driver->drive();
	}
}
