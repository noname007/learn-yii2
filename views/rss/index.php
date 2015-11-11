<?php
	use yii\bootstrap\ButtonDropdown;
	use yii\bootstrap\ButtonGroup;
	use yii\helpers\Url;
	use yii\helpers\Html;
	use yii\web\AssetBundle;
	app\assets\RssAsset::register($this);
	
	$this->title = $title;
	$i = -1;
?>
<div class="container">
	<div class='left' >
		<?php foreach ($items as $k=>$item):?>
			<?php ++$i?>
			<div onclick="this.style.background='grey';css(<?= $i ?>)" class='title'>
				<?=  $item->title; ?>
				<?= \Yii::$app->formatter->asDate((int)($item->timestamp)); ?> 
				<hr>
			</div>
		<?php endforeach;?>
	</div>
	<?php $i = -1;?>
	<div class='right' >
		<?php foreach ($items as $k=>$item):?>
			<?php ++$i?>
		
			<div id='content<?= $i ?>' class='content' name="content" style='display: none'>
					<?= $item->{'content:encoded'};?>
			</div>
		<?php endforeach;?>
	</div>
 </div>
 
 

<script >
		function css(value){
// 			console.log("content"+value)
			var ele = document.getElementById("content"+value);
// 			console.log(ele)
			if(ele.style.display==""){
				ele.style.display="none";
			}else{
				ele.style.display="";//隐藏
				hideother(value);
			}
// 			
// 			ele.getElementByName("content").style.display="";//显
			
		}



		function hideother(value){
				console.log(value);
				var contents = document.getElementsByName("content");
				console.log(contents.length)
				for(var k =0;k < contents.length; ++k){
					
					console.log(k)
					console.log(typeof(contents[k]))
// 					console.log(contents[k])
					
					if(k != value){
						contents[k].style.display="none";
					}
					
// 					console.log(content);
// 					return 
				}
				// 				console.log(typeof(content))
		}
		//暂时不用
		function hide(value){
// // 			console.log(ele)
			document.getElementById("content"+value).style.display="none";//隐藏
		}
	
</script>