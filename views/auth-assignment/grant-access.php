<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthAssignment $model */

$this->title = 'Grant access for: ' . $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-assignment-update">

    <?= $this->render('_form', [
        'assigned_roles' => $assigned_roles,
        'roles' => $roles,
        'model' => $model,
    ]) ?>

</div>
