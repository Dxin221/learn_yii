<?php

class DefaultController extends Controller
{
	public function actionIndex()
	{
        echo 1;
        echo "<pre>";print_r(Yii::app()->controller);exit;
        echo "<pre>";print_r(Yii::app()->controller);exit;
		$this->render('index');
	}
}