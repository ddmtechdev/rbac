<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthAssignment $model */

$this->title = 'Update access for: ' . $model->user->username;
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-assignment-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
