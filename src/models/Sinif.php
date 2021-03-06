<?php

namespace vendor\ilkerozcn\yii2proje\src\models;

use Yii;

/**
 * This is the model class for table "sinif".
 *
 * @property string $Sinif
 * @property string $Ogretmen
 * @property int $OgrenciSayisi

 *  * @property int $Deneme_sinif_id
 */
class Sinif extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sinif';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Sinif', 'Ogretmen'], 'required'],
            [['Sinif', 'Ogretmen'], 'string'],
            [['Deneme_sinif_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Sinif' => 'Sinif',
            'Ogretmen' => 'Ogretmen',
            'Deneme_sinif_id' => 'Deneme_sinif_id',
        ];
    }
}
