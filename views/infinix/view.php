<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Infinix */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Infinixes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="infinix-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Name',
            'Price',
            'Description:ntext',
            'Ratings',
            'status:ntext',
        ],
    ]) ?>

</div>
