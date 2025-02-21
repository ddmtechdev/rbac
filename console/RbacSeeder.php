<?php
namespace ddmtechdev\rbac\console;
use ddmtechdev\rbac\models\AuthAssignment;
use ddmtechdev\rbac\models\AuthItem;
use ddmtechdev\rbac\models\AuthItemChild;
use ddmtechdev\rbac\models\AuthRule;
use Yii;
use yii\console\Controller;

class RbacSeeder extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;

        // Create permissions
        $manageUsers = $auth->createPermission('manageUsers');
        $manageUsers->description = 'Manage users';
        $auth->add($manageUsers);

        // Assign permission to admin
        $admin = $auth->getRole('admin');
        $auth->addChild($admin, $manageUsers);

        echo "✅ RBAC seeding completed.\n";
    }
}
