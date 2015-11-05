<?php
namespace  app\common;
use yii\base\ActionFilter;

class RequestFilter extends ActionFilter{
	
	public  $check = false;
	
	function  beforeAction($action){
		echo __CLASS__;
		echo 'app id ',\Yii::$app->id;
		var_dump(\Yii::$app);
// 		debug_print_backtrace();
		if($this->check){
			print('check property========================');
		}
		return false;
	}
}