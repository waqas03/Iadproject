<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Samsung */

$this->title = 'Add phones';
$this->params['breadcrumbs'][] = ['label' => 'Samsung', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="samsung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
