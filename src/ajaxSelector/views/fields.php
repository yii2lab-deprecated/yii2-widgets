<?php

use yii\helpers\Html;
use yii2lab\misc\enums\HtmlEnum;
use yii\web\View;
use yii2lab\widgets\ajaxSelector\assets\SelectorAsset;

SelectorAsset::register($this);

/**
 * @var $collection array
 */

foreach($entities as $name => &$entity) {
	if($model->hasProperty($entity['elementName'])) {
		echo $form->field($model, $entity['elementName'])->dropDownList($entity['options'], ['prompt' => $entity['prompt']]);
		unset($entity['options']);
	}
}

$script = '$.ajaxSelector.loadAll('.json_encode($entities).');';

$this->registerJs($script, View::POS_READY);

?>