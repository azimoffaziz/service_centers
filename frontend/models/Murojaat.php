<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "murojaat".
 *
 * @property integer $id
 * @property string $full_name
 * @property integer $regions_id
 * @property integer $city_id
 * @property string $adress
 * @property string $e_mail
 * @property string $tel_number
 * @property string $sex
 * @property string $birth_date
 * @property string $status
 * @property string $type_mur
 * @property string $text_mur
 *
 * @property City $city
 * @property Regions $regions
 */
class Murojaat extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'murojaat';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['regions_id', 'city_id'], 'integer'],
            [['birth_date'], 'safe'],
            [['text_mur'], 'string'],
            [['full_name', 'adress', 'e_mail', 'sex', 'status', 'type_mur'], 'string', 'max' => 255],
            [['tel_number'], 'string', 'max' => 13],
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
            'full_name' => 'Full Name',
            'regions_id' => 'Regions ID',
            'city_id' => 'City ID',
            'adress' => 'Adress',
            'e_mail' => 'E Mail',
            'tel_number' => 'Tel Number',
            'sex' => 'Sex',
            'birth_date' => 'Birth Date',
            'status' => 'Status',
            'type_mur' => 'Type Mur',
            'text_mur' => 'Text Mur',
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
