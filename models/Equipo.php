<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "equipo".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $ubicacion_id
 * @property integer $monitor_id
 * @property integer $so_id
 * @property integer $memoria_id
 * @property integer $disco_duro_id
 * @property integer $procesador_id
 * @property integer $fabricante_id
 * @property integer $modelo_id
 * @property string $serial
 * @property string $direccion_ip
 * @property integer $estado_id
 * @property integer $responsable
 */
class Equipo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'equipo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'ubicacion_id', 'monitor_id', 'so_id', 'memoria_id', 'disco_duro_id', 'procesador_id', 'fabricante_id', 'modelo_id', 'serial', 'direccion_ip', 'estado_id', 'responsable'], 'required'],
            [['ubicacion_id', 'monitor_id', 'so_id', 'memoria_id', 'disco_duro_id', 'procesador_id', 'fabricante_id', 'modelo_id', 'estado_id', 'responsable'], 'integer'],
            [['nombre'], 'string', 'max' => 100],
            [['serial', 'direccion_ip'], 'string', 'max' => 50],
            [['nombre'], 'unique'],
            [['serial'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nombre' => Yii::t('app', 'Nombre Equipo'),
            'ubicacion_id' => Yii::t('app', 'Ubicación'),
            'monitor_id' => Yii::t('app', 'Monitor'),
            'so_id' => Yii::t('app', 'Sistema Operativo'),
            'memoria_id' => Yii::t('app', 'Memoria ID'),
            'disco_duro_id' => Yii::t('app', 'Disco Duro ID'),
            'procesador_id' => Yii::t('app', 'Procesador ID'),
            'fabricante_id' => Yii::t('app', 'Fabricante ID'),
            'modelo_id' => Yii::t('app', 'Modelo ID'),
            'serial' => Yii::t('app', 'Serial'),
            'direccion_ip' => Yii::t('app', 'Direccion Ip'),
            'estado_id' => Yii::t('app', 'Estado ID'),
            'responsable' => Yii::t('app', 'Responsable'),
        ];
    }
}
