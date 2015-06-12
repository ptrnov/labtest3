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
        return '{{%employe}}';
    }
	
	public function getEmploye()
	{
		return $this->hasOne(Employe::className(), ['EMP_ID' => 'id']);
	}
	
	public function getEmployedata()
	{
		return $this->hasOne(Employedata::className(), ['EMP_ID' => 'EMP_ID']);
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
            [['EMP_IMAGE'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'EMP_ID' => Yii::t('app', 'Brg  ID'),
            'EMP_NM' => Yii::t('app', 'Brg  Nm'),
			//'employedata.EMP_ALAMAT' => Yii::t('app', 'Alamat'),
        ];
    }
	 
	 public function getFormAttribs() 
	 {
        return [
            'EMP_ID'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter username...']],
            'EMP_NM'=>['type'=>Form::INPUT_TEXT, 'options'=>['placeholder'=>'Enter password...']],
            'EMP_IMGAGE'=>['type'=>Form::INPUT_TEXT],
           // 'actions'=>['type'=>Form::INPUT_RAW, 'value'=>Html::submitButton('Submit', ['class'=>'btn btn-primary'])];
        ];
    }   
	public function getimageurl()
   {
      // return your image url here
      //return \Yii::$app->request->BaseUrl.'/upload_img/'.$this->IMG_IMAGE;
   }
     
}


