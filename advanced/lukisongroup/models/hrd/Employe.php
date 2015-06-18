<?php

namespace app\models\hrd;
use kartik\builder\Form;
use Yii;

/**
 * This is the model class for table "{{%maxi_b0001}}".
 *
 * @property string $BRG_ID
 * @property string $BRG_NM
 */
class Employe extends \yii\db\ActiveRecord
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
        return '{{%a0001}}';
    }


    /* Join Class Pendidikan */
	public function getPen()
	{
		return $this->hasOne(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
		//return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
	}

    /* Join Class Coorporation */
    public function getCorpOne()
    {
        return $this->hasOne(Corp::className(), ['CORP_ID' => 'CORP_ID']);
        //return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
    }

    /* Join Class Department */
    public function getDeptOne()
    {
        return $this->hasOne(Dept::className(), ['DEP_ID' => 'DEP_ID']);
        //return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
    }

    /* Join Class Status Employe */
    public function getStatusOne()
    {
        return $this->hasOne(Status::className(), ['STS_ID' => 'EMP_STS']);
        //return $this->hasMany(Pendidikan::className(), ['EMP_ID' => 'EMP_ID']);
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['EMP_ID'], 'required'],
            [['EMP_ID'], 'string', 'max' => 10],
            [['EMP_NM'], 'string', 'max' => 50], 
			//[['employedata.EMP_ALAMAT'], 'string', 'max' => 100],
            [['EMP_AVATAR'], 'string', 'max' => 50],
            [['EMP_IMG'], 'string', 'max' => 50],
			//[['pendidikan.PEN_NM'],'safe'],
        ];
    }

	//public function proc_dashboard($username)
	//{
	
		//return $command = Yii::app()->db2->createCommand('call DashboardLogin($username)')->queryAll();

		//$command->execute();
	//}
	
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EMP_ID' => Yii::t('app', 'Employee.ID'),
            'EMP_NM' => Yii::t('app', 'First Name'),
            'EMP_NM_BLK' => Yii::t('app', 'Last Name'),
            'EMP_STS' => Yii::t('app', 'Status'),
            'EMP_IMG' => Yii::t('app', 'Pic'),
            'EMP_KTP' => Yii::t('app', 'KTP'),
            'EMP_ALAMAT' => Yii::t('app', 'Alamat'),
            'EMP_GENDER' => Yii::t('app', 'Jenis Kelamin'),
            'EMP_TLP' => Yii::t('app', 'Telphone'),
            'EMP_HP' => Yii::t('app', 'Handphone'),
            'EMP_EMAIL' => Yii::t('app', 'Email'),
            'CORP_ID' => Yii::t('app', 'Corp.ID'),
            'DEP_ID' => Yii::t('app', 'Department'),
            'GRP_NM' => Yii::t('app', 'Modul'),
            //join Corp a0001
            'corpOne.CORP_NM' => Yii::t('app', 'Company'),
            //join Dept a0002
            'deptOne.DEP_NM' => Yii::t('app', 'Department'),
            //join Dept a0009
            'statusOne.STS_NM' => Yii::t('app', 'Status'),
        ];
    }
	 
	 public function getFormAttribs() 
	 {
        return [
            'EMP_ID'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter username...']],
            'EMP_NM'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter password...']],
            'EMP_IMG'=>['type'=>Form::INPUT_TEXT],
           // 'actions'=>['type'=>Form::INPUT_RAW, 'value'=>Html::submitButton('Submit', ['class'=>'btn btn-primary'])];
        ];
    }   

}


