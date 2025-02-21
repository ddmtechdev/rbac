<h4>Installation</h4>

<code>1.  Run command: php composer require ddmtechdev/rbac:@dev
2.  Run migration: php yii migrate/up --migrationPath=@vendor/ddmtechdev/rbac/migrations
3.  Open common/config/main.php and add this inside the modules array:
    'modules' => [
        'rbac' => [
            'class' => 'ddmtechdev\rbac\Module',
        ],
    ],
4.  Open composer.json and add this inside the modules array:: 
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/ddmtechdev/rbac.git"
        }
    ]
</code>