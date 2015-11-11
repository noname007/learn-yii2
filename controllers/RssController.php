<?php
namespace app\controllers;

use app\common\Feed;
// use yii\widgets\LinkPager;
use yii\data\ArrayDataProvider;


class RssController extends  \yii\web\Controller{
	
	function  actionIndex(){
// 		Feed::$cacheDir = \Yii::$app->runtimePath;;
// 		header("Content-type: text/html; charset=utf-8");
// 		$url = 'http://blog.jobbole.com/feed/';
// 		$rss = Feed::loadRss($url);
// 		echo 'ddddddddd';
// 		echo \Yii::$app->formatter->asDate('2014-01-01', 'long'); // 输出: January 1, 2014
// 		echo PHP_EOL,'<br>';
// 		echo \Yii::$app->formatter->asDate('2014-01-01', 'short');
// 		echo \Yii::$app->formatter->asUrl("www.baidu.com");
// 		echo PHP_EOL,'<br>';
// 		echo \Yii::$app->formatter->asPercent(0.125, 2); // 输出: 12.50%
// 		echo \Yii::$app->formatter->asEmail('cebe@example.com'); // 输出: <a href="mailto:cebe@example.com">cebe@example.com</a>
// 		echo \Yii::$app->formatter->asBoolean(true); // 输出: Yes
// 		// 也可处理null值的输出显示:
// 		echo \Yii::$app->formatter->asDate(null); // 输出: (Not set)
		
// 		$data  = [
// 			[1,2,3,4,5],
// 			[2,3,34,4,],
// 			[11,56,7,8,9],
// 			[1,],
// 			[11,56,7,8,9],
// 		];
// 		$provider = new ArrayDataProvider([
// 				'allModels' => $data,
// 				'pagination' => [
// 						'pageSize' => 10,
// 				],
// 				'sort' => [
// 						'attributes' => ['id', 'name'],
// 				],
// 		]);
// 		$posts = $provider->getModels();
// 		$res =  ListView::widget([
// 				'dataProvider' => $provider,
// // 				'itemView' => 'login',
// 		]);
		
// 		var_dump($res);
		return $this->render('index',['good'=>1,]);
	}
}