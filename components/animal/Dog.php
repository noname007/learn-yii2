<?php
	namespace app\components\animal;
	use app\behaviors\Behavior1;
	use yii\base\Component;
	
	class Dog extends Component{
		public function behaviors()	
		{
			return [
				Behavior1::className()
			];
		}
		function look() {
// 			echo Behavior1::className();
			echo 'i am looking<br>';
		}
	}