<?php

namespace app\models\hrd;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use app\models\hrd\Employe;
use app\models\hrd\Employedata;

/**
 * MaxiprodakSearch represents the model behind the search form about `app\models\maxi\Maxiprodak`.
 */
class EmployeSearch extends Employe
{

	 public $employe;
     public $employedata;
	
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            //[['EMP_ID', 'EMP_NM'], 'safe'],
			// [['employe', 'employedata'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Employe::find()->joinWith(['employedata']);//->select('*');
		
		//$query = Itprogramer::findOne('EMP_ID');
		//$query = Itprogramer::find()
			//->select('employe.*')
			//->leftJoin('employe_data', 'employe_data.EMP_ID = employe.EMP_ID')
			//->where(['order.status' => Order::STATUS_ACTIVE])
			//->with('employe_data')
			//->all();
			
		//echo  \yii\helpers\Json::encode($query);
        $dataProvider = new ActiveDataProvider([
           'query' => $query,
        ]);
		//$dataProvider = new SqlDataProvider([
		//	'sql' => 'SELECT * FROM employe',
		//]);
        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        //$query->andFilterWhere(['like', 'EMP_ID', $this->EMP_ID])
        //    ->andFilterWhere(['like', 'EMP_NM', $this->EMP_NM]);
		//echo  \yii\helpers\Json::encode($dataProvider);
        return $dataProvider;
    }
}
