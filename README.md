<h4>Installation</h4>

1.  Run command: php composer require ddmtechdev/rbac:@dev
2.  Run migration: php yii migrate/up --migrationPath=@vendor/ddmtechdev/rbac/migrations
3.  Open console/config/main.php and add this inside the modules array:
    'modules' => [
        'rbac' => [
            'class' => 'ddmtechdev\rbac\Module',
        ],
    ],
4.  Open backend/config/main.php and add this inside the modules array:
    'modules' => [
        'rbac' => [
            'class' => 'ddmtechdev\rbac\Module',
        ],
    ],