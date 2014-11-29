<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Equipos');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="equipo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create {modelClass}', [
    'modelClass' => 'Equipo',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nombre',
            'ubicacion_id',
            'monitor_id',
            'so_id',
            // 'memoria_id',
            // 'disco_duro_id',
            // 'procesador_id',
            // 'fabricante_id',
            // 'modelo_id',
            // 'serial',
            // 'direccion_ip',
            // 'estado_id',
            // 'responsable',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
