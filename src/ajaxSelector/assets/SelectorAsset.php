<?php

namespace yii2lab\widgets\ajaxSelector\assets;

use Yii;
use yii\web\AssetBundle;
use yii2lab\helpers\yii\FileHelper;

class SelectorAsset extends AssetBundle
{
	public $sourcePath = '@yii2lab/widgets/ajaxSelector/assets/dist';
	public $js = [
		'js/main.js',
	];
	public $depends = [
		'yii2lab\misc\assets\MainAsset',
		'yii2lab\misc\assets\RestApiAsset',
	];
}
