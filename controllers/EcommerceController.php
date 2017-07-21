<?php


namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\Signinform;
use app\models\ContactForm;


class EcommerceController extends Controllers{



	public function actionSigninform()
	{

      $model = new Signinform;


      if($model->load(yii::$app->request->post()&&$model->validation())) 
      {

           

      }
    

      	return $this->render('signinform',['model'=>$model]);
      
	}
} 

?>