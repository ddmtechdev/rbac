<?php

use yii\db\Migration;

class m250221_030530_rbac_init extends Migration
{
    public function up()
    {
        $auth = Yii::$app->authManager;

        // Create roles
        $admin = $auth->createRole('admin');
        $user = $auth->createRole('user');
        
        $auth->add($admin);
        $auth->add($user);
        
        // Assign admin role to first user (adjust as needed)
        $auth->assign($admin, 1);
    }

    public function down()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); // Remove all roles and permissions
    }
}
