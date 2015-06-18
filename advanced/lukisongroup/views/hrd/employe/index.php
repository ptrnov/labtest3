<?php
/*
 * By ptr.nov
 * Load Config CSS/JS
 */
use yii\helpers\Html;
use backend\assets\AppAsset;
use kartik\grid\GridView;
use kartik\widgets\ActiveForm;
use kartik\tabs\TabsX;
use yii\widgets\Breadcrumbs;
use kartik\nav\NavX;
use kartik\sidenav\SideNav;
use yii\bootstrap\NavBar;
AppAsset::register($this);


/* @var $this yii\web\View */
/* @var $searchModel app\models\maxi\MaxiprodakSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Employe');
$this->params['breadcrumbs'][] = $this->title;


/*Employe list Author: -ptr.nov */
    //print_r($dataProvider);
    $tab_employe= GridView::widget([
        'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            /*Author -ptr.nov- image*/

           [
               'attribute' => 'PIC',
                'format' => 'html',
                //'format' => 'image',
                'value'=>function($data){
                            return Html::img(Yii::getAlias('@path_emp') . '/'. $data->EMP_IMG, ['width'=>'20']);
                        },
               // 'value'=>function($data) { return Html::img(Yii::getAlias('@path_emp') . '/'. $data.EMP_IMG, ['width'=>'20']); },
                //'value'=>function($data) { return Html::img('http://192.168.56.101/advanced/lukisongroup/web/upload/image/'.$data->EMP_IMAGE, ['class'=>'img-circle pull-left','width'=>'40']); },
            ],
            'EMP_ID',
            'EMP_NM',
            'EMP_NM_BLK',
            'corpOne.CORP_NM',
            'deptOne.DEP_NM',
            'statusOne.STS_NM',
            ['class' => 'yii\grid\ActionColumn'],
            //['class' => 'yii\grid\CheckboxColumn'],
            //['class' => '\kartik\grid\RadioColumn'],
        ],


        'panel'=>[
            'heading' =>true,// $hdr,//<div class="col-lg-4"><h8>'. $hdr .'</h8></div>',
            'type' =>GridView::TYPE_SUCCESS,//TYPE_WARNING, //TYPE_DANGER, //GridView::TYPE_SUCCESS,//GridView::TYPE_INFO, //TYPE_PRIMARY, TYPE_INFO
            'after'=> Html::a('<i class="glyphicon glyphicon-plus"></i> Add', '#', ['class'=>'btn btn-success']) . ' ' .
                //Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class'=>'btn btn-primary']) . ' ' .
                Html::a('<i class="glyphicon glyphicon-remove"></i> Delete  ', '#', ['class'=>'btn btn-danger'])
        ],
        'hover'=>true, //cursor selec
        'responsive'=>true,
        'bordered'=>true,
        'striped'=>true,

    ]);

/*Employe Profile Author: -ptr.nov */
    //print_r($dataProvider);
    $tab_profile= GridView::widget([
        'dataProvider' => $dataProvider1,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            /*Author -ptr.nov- image*/
            'emp.EMP_ID',
            array(
                'format' => 'html',
                //'format' => 'image',
                // 'value'=>function($data) { return Html::img(Yii::getAlias('@path_emp') . '/'. $data->emp->EMP_IMG, ['width'=>'20']); },
                //'value'=>function($data) { return Html::img('http://192.168.56.101/advanced/lukisongroup/web/upload/image/'.$data->EMP_IMAGE, ['class'=>'img-circle pull-left','width'=>'40']); },
            ),

            'emp.EMP_NM',
            'user.username',
            'emp.EMP_IMG',
            //	'EMP_TLP',
            'NILAI',

            ['class' => 'yii\grid\ActionColumn'],
            ['class' => 'yii\grid\CheckboxColumn'],
            ['class' => '\kartik\grid\RadioColumn'],
        ],


        'panel'=>[
            'heading' =>true,// $hdr,//<div class="col-lg-4"><h8>'. $hdr .'</h8></div>',
            'type' =>GridView::TYPE_SUCCESS,//TYPE_WARNING, //TYPE_DANGER, //GridView::TYPE_SUCCESS,//GridView::TYPE_INFO, //TYPE_PRIMARY, TYPE_INFO
            'after'=> Html::a('<i class="glyphicon glyphicon-plus"></i> Add', '#', ['class'=>'btn btn-success']) . ' ' .
                //Html::submitButton('<i class="glyphicon glyphicon-floppy-disk"></i> Save', ['class'=>'btn btn-primary']) . ' ' .
                Html::a('<i class="glyphicon glyphicon-remove"></i> Delete  ', '#', ['class'=>'btn btn-danger'])
        ],
        'hover'=>true, //cursor selec
        'responsive'=>true,
        'bordered'=>true,
        'striped'=>true,

    ]);
?>

<aside class="main-sidebar">
    <?php

    if (!Yii::$app->user->isGuest) {
        echo SideNav::widget([
            'items' => $side_menu,
            'encodeLabels' => false,
            //'heading' => $heading,
            'type' => SideNav::TYPE_DEFAULT,
            'options' => ['class' => 'sidebar-nav'],
        ]);
    };
    ?>

</aside>


<div class="panel panel-default" style="margin-top: 0px">
     <div class="panel-body">
        <?php
             echo Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]);

            $items=[
                [
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Employe List','content'=>$tab_employe,
                    'active'=>true,

                ],
                [
                    'label'=>'<i class="glyphicon glyphicon-home"></i> Profile','content'=>$tab_profile,
                ],

            ];



            echo TabsX::widget([
                'items'=>$items,
                'position'=>TabsX::POS_ABOVE,
                //'height'=>'100%',
                'bordered'=>true,
                'encodeLabels'=>false,
                'align'=>TabsX::ALIGN_LEFT,

            ]);

        ?>

     </div>
</div>













