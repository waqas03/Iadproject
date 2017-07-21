<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Samsung */

$this->title = 'Update Samsung: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Samsungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Name]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="samsung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
