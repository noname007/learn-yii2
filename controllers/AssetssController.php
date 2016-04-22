<?php

namespace app\controllers;

use app\assets\AppAsset;
class AssetssController extends \yii\web\Controller
{
	public $defaultAction = 'index';
// 	public $layout = '';
    public function actionIndex()
    {
    	$view = $this->getView();
    	$bundle = AppAsset::register($view);
    	
    	
    	$view->beginPage();
    	$view->head() ;
    	$view->beginBody();
    	
    	//return $this->render('//assets/index');
    	
    	
    	var_dump(\Yii::getAlias('@webroot'));
		var_dump(\Yii::getAlias('web'));
    	var_dump(\Yii::getAlias('@web')) ;
    	//string 'E:\eclipsphp-workplace\vr\web' (length=29)
    	//string 'web' (length=3)
		//string '' (length=0)
		
    	
    	
    	
    	
    	
    	
    	
//     	var_dump();
    	
//     	$bundle->registerAssetFiles($view);
//     	return 'fafjsldkfasjf;ljk';
//    
//     	$view->beginPage();
//     	$view->beginBody();
//         echo  $this->renderPartial('//assets/index');
        $view->endBody();
        $view->endPage();
    }

}
