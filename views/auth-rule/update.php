<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthRule $model */

$this->title = 'Update Rule: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Rules', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auth-rule-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
