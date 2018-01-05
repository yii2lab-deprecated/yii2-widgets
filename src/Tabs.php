<?php

namespace yii2lab\widgets;

use yii\base\Widget;
use yii\bootstrap\Nav;
use yii2lab\helpers\MenuHelper;

/**
 * Class Tabs
 *
 * @package yii2lab\widgets
 *
 * @deprecated
 */
class Tabs extends Widget
{

	public $id = 'tabs_navigation';
	
	public function run() {
		$items = MenuHelper::gen('yii2woop\profile\module\helpers\Menu');
		echo Nav::widget([
			'options' => [
				'id' => $this->id,
                'class' => 'nav nav-tabs',
            ],
			'items' => $items,
		]);
	}

}
