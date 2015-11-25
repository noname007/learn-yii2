<?php
	namespace app\components\animal;
	use yii\base\Component;
	
	class Mouse extends Component {
		function run($e) {
			echo $e->message;
			echo 'i am running<br>';
		}
	}