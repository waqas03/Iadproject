<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Android */

$this->title = 'Update Android: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Androids', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="android-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
