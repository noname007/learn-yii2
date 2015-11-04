<?php

namespace app\module\controllers;

use yii\web\Controller;
// ref: 
// 		http://www.yiichina.com/doc/guide/2.0/structure-modules
// 		http://www.kancloud.cn/manual/yii2-guide/69690
// http://127.0.0.1:8000/index.php?r=security/default/index
// TODO  怎么路由到这里来的？
// TODO module 如params 成员变量怎么赋值的，
class DefaultController extends Controller
{
    public function actionIndex()
    {
    
//     	var_dump(\Yii::$app->module);
			
		var_dump(\Yii::$app->controller->module);
//     	$module = \Yii::$app->getModule('forum');
//     	var_dump($module);
    	$module = \Yii::$app->getModule('gii'); //一个
    	var_dump($module);
//		return $this->render('index');
    }
}
