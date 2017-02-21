<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property integer $regions_id
 * @property string $city_name
 *
 * @property Regions $regions
 * @property Murojaat[] $murojaats
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regions_id'], 'integer'],
            [['city_name'], 'string', 'max' => 255],
            [['regions_id'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['regions_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'regions_id' => 'Regions ID',
            'city_name' => 'City Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasOne(Regions::className(), ['id' => 'regions_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMurojaats()
    {
        return $this->hasMany(Murojaat::className(), ['city_id' => 'id']);
    }
}
