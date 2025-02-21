<?php
namespace ddmtechdev\rbac;

use yii\base\Module as BaseModule;

class Module extends BaseModule
{
    public $controllerNamespace = 'ddmtechdev\rbac\controllers';

    public function init()
    {
        parent::init();
    }
}