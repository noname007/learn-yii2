<?php
namespace  app\common;

use yii\base\Widget;
use yii\helpers\Html;

class HelloWidget extends Widget{
	
	public  $m ;
	function  init(){
		var_dump(func_get_args());
		parent::init();
		echo '=====================================================init ====================',PHP_EOL;
// 		debug_print_backtrace();
// 		throw \Exception;
		if(is_null($this->m)){
			$m = 'hello world!';
		}
		
	}
	
	function  run(){
		echo '=====================================================run ====================',PHP_EOL;
// 		debug_print_backtrace();
// 		throw new \Exception();
		return Html::encode($this->m);
	}
}