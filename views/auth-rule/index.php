<?php

use ddmtechdev\rbac\models\AuthRule;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var vendor\ddmtechdev\rbac\models\searches\AuthRuleSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Rules';
$this->params['breadcrumbs'][] = ['label' => 'User Management', 'url' => ['/user/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-rule-index">
    <div class="container mt-3">
        <div class="">
            <h5 class="mb-3"><i class="fas fa-user-cog"></i> <?= $this->title ?></h5>
            <p>
                <?= Html::a('+ Create Rule', ['create'], ['class' => 'btn btn-success btn-sm']) ?>
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
                        'data:ntext',
                        // 'created_at',
                        // 'updated_at',
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
                                                    <li>' . Html::a('<i class="fas fa-edit"></i> Edit', Url::to(['update', 'name' => $model->name]), ['class' => 'dropdown-item']) . '</li>
                                                    <li>' . Html::a('<i class="fas fa-trash"></i> Delete', Url::to(['delete', 'name' => $model->name]), [
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
