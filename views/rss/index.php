<?php
	use app\common\HelloWidget;
// 	use yii\widgets\ListView;
// 	use yii\widgets\ListView;
	use yii\grid\GridView;
	$this->title = 'Rss';
// 	echo $good;
// 	echo __FUNCTION__;
// 	exit;
	// HelloWidget 必须要有	message属性才行 
// 	echo  HelloWidget::widget(['message' => 'Good morning']);
	echo  HelloWidget::widget(['m' => 'Good morning']);
	
// 	ListView::widget([
// 			'dataProvider' => $provider,
// 			'itemView' => 'login',
// 	]);

	
// 	var_dump($provider);
// 	echo GridView::widget([
// 			'dataProvider' => $provider,
// 	]);
