<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthItem $model */

$this->title = 'Update '.$role_type.': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Roles & Persmissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-item-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
