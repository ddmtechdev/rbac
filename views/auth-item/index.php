<?php

use ddmtechdev\rbac\models\AuthItem;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var vendor\ddmtechdev\rbac\models\searches\AuthItemSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Roles & Permissions';
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-index">
    <div class="container mt-3">
        <div class="">
            <h5 class="mb-3"><?= $this->title ?></h5>
            <p>
                <?= Html::a('+ Create Permission', ['create', 'role' => 2], ['class' => 'btn btn-success btn-sm']) ?>
                <?= Html::a('+ Create Role', ['create', 'role' => 1], ['class' => 'btn btn-success btn-sm']) ?>
            </p>
        </div>
        <div class="card shadow-lg" style="border-top: 7px solid #747474;">
            <div class="card-body">
                <?= GridView::widget([
                    'dataProvider' => $dataProvider,
                    'tableOptions' => ['class' => 'table table-sm table-bordered table-hover'],
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],

                        'name',
                        [
                            'attribute' => 'type',
                            'format' => 'raw',
                            'value' => function ($model) {
                                return $model->type == 1 ? '<span class="">Role</span>' : '<span class="">Permission</span>';
                            }
                        ],
                        'rule_name',
                        'description:ntext',
                        [
                            'class' => ActionColumn::className(),
                            'template' => '{dropdown}',
                            'buttons' => [
                                'dropdown' => function ($url, $model, $key) {
                                    return '<div class="btn-group">
                                                <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Actions
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>' . Html::a('Edit', Url::to(['update', 'name' => $model->name]), ['class' => 'dropdown-item']) . '</li>
                                                    <li>' . Html::a('Delete', Url::to(['delete', 'name' => $model->name]), [
                                                        'class' => 'dropdown-item',
                                                        'data-confirm' => 'Are you sure you want to delete this item?',
                                                        'data-method' => 'post',
                                                    ]) . '</li>
                                                </ul>
                                            </div>';
                                },
                            ],
                        ],
                    ],
                ]); ?>
            </div>
        </div>
    </div>
</div>
