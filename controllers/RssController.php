<?php
namespace app\controllers;

use app\common\Feed;

class RssController extends  \yii\web\Controller{
	
	function  actionIndex(){
		Feed::$cacheDir = \Yii::$app->runtimePath;;
		header("Content-type: text/html; charset=utf-8");
		$url = 'http://blog.jobbole.com/feed/';
		$rss = Feed::loadRss($url);
		echo 'Title: ', $rss->title;
		echo 'Description: ', $rss->description;
		echo 'Link: ', $rss->link;
		
		foreach ($rss->item as $item) {
			echo 'Title: ', $item->title;
			echo 'Link: ', $item->link;
			echo 'Timestamp: ', $item->timestamp;
			echo 'Description ', $item->description;
			echo 'HTML encoded content: ', $item->{'content:encoded'};
		}
	}
}