<h4>Installation</h4>

1.  Run command: php composer require ddmtechdev/rbac:@dev
2.  Run migration: php yii migrate/up --migrationPath=@vendor/ddmtechdev/rbac/migrations
3.  Open common/config/main.php and add this inside:
<code>
    'modules' => [
        'rbac' => [
            'class' => 'ddmtechdev\rbac\Module',
        ],
        ...
    ],
</code>
4.  Open console/config/main.php and add this inside:
<code>
    'controllerMap' => [
        'rbac-seeder' => [
            'class' => 'ddmtechdev\rbac\console\RbacSeeder',
        ],
        ...
    ],
</code>
5.  Open composer.json and add this inside:
<code>
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ddmtechdev/rbac.git"
        }
        ...
    ]
    ...
    "autoload": {
        "psr-4": {
            "ddmtechdev\\rbac\\": ""
        }
        ...
    },
</code>