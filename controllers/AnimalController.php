<?php
	namespace app\controllers;
	use yii\web\Controller;
	use \yii\base\Event;
	use app\components\animal\Dog;

	class AnimalController extends Controller{
		public function actionIndex()
		{
			
			$dog = new Dog();
			$dog->look();
// 			echo $dog->height;//@see Componet::__get  本类的属性，行为类属性
			$dog->eat();
			
			
		}
	}