<h1>🔐 RBAC Module Installation Guide</h1>
<p>Follow this guide to install and configure the <strong>ddmtechdev/rbac</strong> module in your Yii2 application.</p>

<hr>

<h2>📌 Installation Steps</h2>

<h3>1️⃣ Install the Package</h3>
<p>Run the following command to install the RBAC module via Composer:</p>
<pre><code>php composer require ddmtechdev/rbac:@dev</code></pre>

<h3>2️⃣ Run Migrations</h3>
<p>Apply the necessary database migrations:</p>
<pre><code>php yii migrate/up --migrationPath=@vendor/ddmtechdev/rbac/migrations</code></pre>

<h3>3️⃣ Configure the Application</h3>
<p>Modify your <code>common/config/main.php</code> file and add the following inside the <code>modules</code> array:</p>
<pre><code>
'modules' => [
    'rbac' => [
        'class' => 'ddmtechdev\rbac\Module',
    ],
    ...
],
</code></pre>

<h3>4️⃣ Configure the Console Application</h3>
<p>Modify your <code>console/config/main.php</code> file and add the following inside the <code>controllerMap</code> array:</p>
<pre><code>
'controllerMap' => [
    'rbac-seeder' => [
        'class' => 'ddmtechdev\rbac\console\RbacSeeder',
    ],
    ...
],
</code></pre>

<h3>5️⃣ Add Repository & Autoloading</h3>
<p>To ensure proper loading of the module, open <code>composer.json</code> and update it as follows:</p>

<h4>📌 Add Repository</h4>
<pre><code>
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/ddmtechdev/rbac.git"
    }
    ...
]
</code></pre>

<h4>📌 Configure Autoloading</h4>
<pre><code>
"autoload": {
    "psr-4": {
        "ddmtechdev\\rbac\\": ""
    }
    ...
},
</code></pre>

<hr>

<h2>✅ Final Steps</h2>
<ul>
    <li>🔹 <strong>Flush cache</strong> (to apply changes):</li>
    <pre><code>php yii cache/flush-all</code></pre>
    <li>🔹 <strong>Run RBAC seeder</strong> (to initialize roles & permissions):</li>
    <pre><code>php yii rbac-seeder/init</code></pre>
    <li>🔹 <strong>Restart the web server</strong> (if necessary)</li>
    <li>🔹 <strong>Access the RBAC module</strong> via your configured routes</li>
</ul>

<hr>

<h2>🎉 Your RBAC Module is Now Installed & Configured!</h2>
<p>If you encounter any issues, check the logs or verify that dependencies are correctly installed. 🚀</p>
