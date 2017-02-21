<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property integer $id
 * @property string $region_name
 *
 * @property City[] $cities
 * @property Murojaat[] $murojaats
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['region_name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'region_name' => 'Region Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCities()
    {
        return $this->hasMany(City::className(), ['regions_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMurojaats()
    {
        return $this->hasMany(Murojaat::className(), ['regions_id' => 'id']);
    }
}
