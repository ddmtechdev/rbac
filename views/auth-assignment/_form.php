<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthAssignment $model */
/** @var yii\widgets\ActiveForm $form */
?>
<div class="auth-assignment-form">
    <div class="container mt-3">
        <div class="">
            <h5 class="mb-3"><i class="fas fa-user-cog"></i> <?= $this->title ?></h5>
        </div>
        <div class="card shadow-lg" style="border-top: 7px solid #747474;">
            <div class="card-body">
                <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model, 'item_name')->widget(Select2::class, [
                    'data' => [
                        'option1' => 'Option 1',
                        'option2' => 'Option 2',
                        'option3' => 'Option 3',
                    ],
                    'options' => ['multiple' => true, 'placeholder' => 'Select item...'],
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
