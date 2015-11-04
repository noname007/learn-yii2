<?php
namespace  app\common;
use yii\base\ActionFilter;

class RequestFilter extends ActionFilter{
	
	public  $check = false;
	
	function  beforeAction($action){
		echo __CLASS__;
		debug_print_backtrace();
		if($this->check){
			print('check property========================');
		}
		return false;
	}
}