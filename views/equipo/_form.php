<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Equipo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="equipo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nombre')->textInput(['maxlength' => 100]) ?>

    <?= $form->field($model, 'ubicacion_id')->textInput() ?>

    <?= $form->field($model, 'monitor_id')->textInput() ?>

    <?= $form->field($model, 'so_id')->textInput() ?>

    <?= $form->field($model, 'memoria_id')->textInput() ?>

    <?= $form->field($model, 'disco_duro_id')->textInput() ?>

    <?= $form->field($model, 'procesador_id')->textInput() ?>

    <?= $form->field($model, 'fabricante_id')->textInput() ?>

    <?= $form->field($model, 'modelo_id')->textInput() ?>

    <?= $form->field($model, 'serial')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'direccion_ip')->textInput(['maxlength' => 50]) ?>

    <?= $form->field($model, 'estado_id')->textInput() ?>

    <?= $form->field($model, 'responsable')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
