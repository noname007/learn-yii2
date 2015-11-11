<?php
namespace app\controllers;

use app\common\Feed;

class RssController extends  \yii\web\Controller{
	
	function  actionIndex(){
		Feed::$cacheDir = \Yii::$app->runtimePath;;
		header("Content-type: text/html; charset=utf-8");
		$url = 'http://blog.jobbole.com/feed/';
		$rss = Feed::loadRss($url);
		
		echo $this->render('index',['items'=>$rss->item,'title'=>$rss->title]);
	}
}