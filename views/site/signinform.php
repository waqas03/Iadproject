<?php

use yii\helpers\Html;
//use yii\bootstrap\ActiveForm;

use yii\widgets\ActiveForm;

?>
<form action="" method="post">
<?php    
$form=ActiveForm::begin(); ?>

<?= $form->field($model,'email'); ?>
<?= $form->field($model,'password'); ?>

<?= Html::submitButton('submit',['class'=>'btn btn-success']); ?>

 <?php ActiveForm::end(); ?>
 

</form>