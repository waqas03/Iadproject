<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sony */

$this->title = 'Add Phones';
$this->params['breadcrumbs'][] = ['label' => 'Sony', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sony-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
