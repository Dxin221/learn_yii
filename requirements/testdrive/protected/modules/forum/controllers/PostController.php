<?php

class PostController extends Controller
{
    public function actionIndex()
    {
        $this->render('index');
    }

    public function actionCreate()
    {
        echo "<pre>";print_r($this->module);exit;
        echo "<pre>";print_r(Yii::app()->controller->module);exit;
    }
}