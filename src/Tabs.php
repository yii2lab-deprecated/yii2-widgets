<?php

namespace yii2lab\widgets;

use Yii;
use yii\base\Widget;
use yii\helpers\Url;

class Tabs extends Widget
{

	public $id = 'tabs_navigation';
	public $actions;
	public $current;
	public $baseLang;
	public $isCompact = false;
	public $baseUrl;

	public function run()
	{
		$baseUrl = !empty($this->baseUrl) ? '/' . $this->baseUrl . '/' : '';
		$currentUrl = Yii::$app->request->url;
		?>
		<ul class="nav nav-tabs" id="<?= $this->id ?>">
			<?php foreach($this->actions as $action) { ?>
				<li class="<?= $currentUrl == $baseUrl . $action ? 'active' : '' ?>">
					<a href="<?php echo Url::to([$baseUrl . $action])?>">
						<?= Yii::t($this->baseLang, $action . '_icon') ?>
						<?php if(!$this->isCompact) {
							echo t($this->baseLang, $action . '_title');
						} ?>
					</a>
				</li>
			<?php } ?>
		</ul>
		<?php
	}

}
