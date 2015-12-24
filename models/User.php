<?php

namespace app\models;
use dektrium\user\models\User as BaseUser;
use yii\base\Event;

class User extends BaseUser implements \yii\web\IdentityInterface
{
	
	function  init()
	{
		parent::init();
// 		$this->on(self::BEFORE_REGISTER,[$this,'assignRole']);
		$this->on(self::AFTER_REGISTER,[$this,'assignRole']);
	}
	
	function assignRole(Event $event)
	{
		$auth = \Yii::$app->authManager;
		$authorRole = $auth->getRole('guest');
		$auth->assign($authorRole, $this->getId());
	}
   
}
