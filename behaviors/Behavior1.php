<?php
	namespace app\behaviors;
	use yii\base\Behavior;
	class Behavior1 extends Behavior{
		public  $height;
		function  eat(){
			echo 'dog eat<br>';
		}
		function  events(){
			return [
					'wang'=>'shout'
			];
		}
		function  shout($event){
			echo 'wangwangwagn <BR>';
		}
	}