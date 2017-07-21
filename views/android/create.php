<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Android */

$this->title = 'Create Android';
$this->params['breadcrumbs'][] = ['label' => 'Androids', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="android-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
