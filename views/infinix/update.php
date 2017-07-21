<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Infinix */

$this->title = 'Update Infinix: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Infinixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="infinix-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
