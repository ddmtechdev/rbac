<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthItem $model */

$this->title = 'Create '.$role_type;
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Roles & Persmissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
