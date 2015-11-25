<?php
	namespace app\controllers;
	use yii\web\Controller;
	use \yii\base\Event;
	use app\components\animal\Dog;
	use app\behaviors\Behavior1;
	
	class AnimalController extends Controller{
		public function actionIndex()
		{
			
			$dog = new Dog();
			$behavior1 = new Behavior1();
			$dog->attachBehavior('beh1', $behavior1);
// 			$dog->detachBehavior('beh1'); //解绑行为
			$dog->eat();
// 			$dog->look();
// // 			echo $dog->height;//@see Componet::__get  本类的属性，行为类属性
// 			$dog->eat();
// 			echo '======================event<br>';
// 			$dog->trigger('wang');
			
			
		}
	}