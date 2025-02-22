<?php

use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
use kartik\select2\Select2;

/** @var yii\web\View $this */
/** @var ddmtechdev\rbac\models\AuthAssignment $model */
/** @var yii\widgets\ActiveForm $form */

$this->registerJs(
    "
    document.getElementById('access-assignment-form').addEventListener('submit', function (e) {
        var selectedRoles = $('#selected-roles').val(); 
        if (!selectedRoles || selectedRoles.length === 0) {
            alert('Please select at least one role.');
            $('#selected-roles').next('.select2').find('.select2-selection').addClass('is-invalid');
            e.preventDefault();
            e.stopImmediatePropagation();
            return false; 
        } else {
            $('#selected-roles').next('.select2').find('.select2-selection').removeClass('is-invalid');
        }
    });
"
);
?>
<div class="auth-assignment-form">
    <div class="container mt-3">
        <div class="">
            <h5 class="mb-3"><i class="fas fa-user-cog"></i> <?= $this->title ?></h5>
        </div>
        <div class="card shadow-lg" style="border-top: 7px solid #747474;">
            <div class="card-body">
                <?php $form = ActiveForm::begin([
                    'id' => 'access-assignment-form',
                    'method' => 'post',
                    'enableClientValidation' => false,
                    'enableAjaxValidation' => false,
                ]); ?>

                <?= Select2::widget([
                    'name' => 'selected_roles',
                    'value' => $assigned_roles,
                    'data' => $roles,
                    'options' => [
                        'id' => 'selected-roles', 
                        'multiple' => true, 
                        'placeholder' => 'Select ...'
                    ]
                ]); ?>

                <div class="form-group">
                    <?= Html::submitButton('Save', ['class' => 'btn btn-success mt-2']) ?>
                </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
