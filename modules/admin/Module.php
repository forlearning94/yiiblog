<?php

namespace app\modules\admin;

use yii;
use yii\filters\AccessControl;


/**
 * admin module definition class
 */
class Module extends \yii\base\Module
{
    
    
    public $layout = "/admin";

    public $controllerNamespace = 'app\modules\admin\controllers';

    
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'denyCallback' => function($rule, $action)
                {
                    throw new \yii\web\NotFoundHttpException();
                },
                'rules' => [
                    [
                        'allow' => true,
                        'matchCallback' => function($rule, $action)
                        {
                            return Yii::$app->user->identity->isAdmin;
                        }
                    ]
                ]
            ]
        ];
    }


    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }
}
