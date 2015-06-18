<?php

namespace app\models\hrd;
//use yii\data\ActiveDataProvider;
use kartik\builder\Form;
use Yii;

/**
 * This is the model class for table "{{%maxi_b0001}}".
 *
 * @property string $BRG_ID
 * @property string $BRG_NM
 */
class Status extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */



    public static function getDb()
    {
        /* Author -ptr.nov- : HRD | Dashboard I */
        return \Yii::$app->db2;
    }

    public static function tableName()
    {
        return '{{%b0009}}';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['STS_ID'], 'required'],
            [['STS_ID'], 'string', 'max' => 5],
            [['STS_NM'], 'string', 'max' => 30],
            // [['PEN_ID','PEN_NM','TGL_MASUK','TGL_KELUAR','NILAI'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'STS_ID' => Yii::t('app', 'Status.ID'),
            'STS_NM' => Yii::t('app', 'Status'),
            'STS_COLOR' => Yii::t('app', 'Status'),
            'DEP_DCRP' => Yii::t('app', 'Description'),
            'SORT' => Yii::t('app', 'Sorting'),
        ];
    }
}


