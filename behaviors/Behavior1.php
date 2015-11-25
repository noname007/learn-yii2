<?php
	namespace app\behaviors;
	use yii\base\Behavior;
	class Behavior1 extends Behavior{
		public  $height;
		function  eat(){
			echo 'dog eat<br>';
		}
	}