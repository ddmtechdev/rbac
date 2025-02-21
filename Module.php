<?php
namespace ddmtechdev\rbac;

use Yii;
use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'ddmtechdev\rbac\controllers';

    public function init()
    {
        parent::init();
        Yii::$app->setComponents([
            'authManager' => [
                'class' => 'yii\rbac\DbManager',
            ],
        ]);
    }
}