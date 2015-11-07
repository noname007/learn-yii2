<?php
	use app\common\HelloWidget;
	$this->title = 'Rss';
	echo $good;
	
	// HelloWidget 必须要有	message属性才行 
// 	echo  HelloWidget::widget(['message' => 'Good morning']);
	echo  HelloWidget::widget(['m' => 'Good morning']);

