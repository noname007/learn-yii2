<?php
	namespace app\components\animal;
	use yii\base\Component;
	use yii\base\Event;
	
	class Cat extends Component{
		public  function  shout(){
			
			echo 'miao miao...<br>';
			$me = new MyEvent();
			$me->message = 'hello event parameter<br>';
			$this->trigger('miao',$me);
		}
	}
	
	class MyEvent extends  Event{
		public $message;
	}