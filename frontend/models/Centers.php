<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "centers".
 *
 * @property integer $id
 * @property string $center_name
 * @property string $phone_number
 * @property integer $regions_id
 * @property integer $city_id
 * @property string $adress
 * @property string $service_id
 *
 * @property City $city
 * @property Regions $regions
 */
class Centers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'centers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regions_id', 'city_id'], 'integer'],
            [['center_name', 'phone_number', 'adress'], 'string', 'max' => 255],
            [['city_id'], 'exist', 'skipOnError' => true, 'targetClass' => City::className(), 'targetAttribute' => ['city_id' => 'id']],
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
            'center_name' => 'Center Name',
            'phone_number' => 'Phone Number',
            'regions_id' => 'Regions ID',
            'city_id' => 'City ID',
            'adress' => 'Adress',
            'service_id' => 'Service ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(City::className(), ['id' => 'city_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRegions()
    {
        return $this->hasOne(Regions::className(), ['id' => 'regions_id']);
    }
}
