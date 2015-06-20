<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\ActiveForm;
use kartik\tabs\TabsX;

/* @var $this yii\web\View */
/* @var $model app\models\system\Dashboard */
?>
<div class="panel panel-default">
    
			<?php
				$StrukturLg = DetailView::widget([
					'model' => $model,
					'attributes' => [
						[	'label'=>'',
							'format'=>'HTML',
							'value'=>Html::img(Yii::getAlias('@path_emp_laptop_public') . '/struktur1.jpg', ['width'=>'900','height'=>'350']),
							//'value'=>Html::img(Yii::getAlias('@path_emp_laptop_public') . '/'. $model->EMP_IMAGE, ['width'=>'100']),
							
						],		
					],
				]);
			
			
			
			
				$content1='test ahhhhhhhhhhhhhhhhhhh';
				$items=[
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> PT. LukisonGroup','content'=>$StrukturLg,
						 'encodeLabels'=>false,
						 'align'=>TabsX::ALIGN_CENTER,
						'active'=>true,
						
					],
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> Visi Misi','content'=>'asdasd',//$content1,
						//active'=>true
					],
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> Peraturan','content'=>'asdasd',//$content1,
						//active'=>true
					],
				];
			
			
			
				echo TabsX::widget([
						'items'=>$items,
						'position'=>TabsX::POS_ABOVE,
						'height'=>TabsX::SIZE_LARGE,//SIZE_MEDIUM,
						'bordered'=>true,
						'bordered'=>true,
						'encodeLabels'=>false,
						'align'=>TabsX::ALIGN_CENTER,
						
					]);	
										
				?>
		
   




<div class="dashboard-view" >

				<?php
								
				$subCorp=[
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> PT.Sarana Sinar Surya',
						'active'=>true,
							'items'=>[
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Struktur',
									'encode'=>false,'content'=>'OK',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Visi/Misi','encode'=>false,
									'content'=>'AAAAA',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Bisnis Proses','encode'=>false,
									'content'=>'AAAAA',
								],									
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Peraturan','encode'=>false,
									'content'=>'AAAAA',
								],	
							],
					],
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> PT.Arta Lipat Ganda',
							'items'=>[
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Struktur',
									'encode'=>false,'content'=>'OK',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Visi/Misi','encode'=>false,
									'content'=>'AAAAA',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Bisnis Proses','encode'=>false,
									'content'=>'AAAAA',
								],									
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Peraturan','encode'=>false,
									'content'=>'AAAAA',
								],	
							],						
					],
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> PT.Efembi Sukses Makmur',
							'items'=>[
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Struktur',
									'encode'=>false,'content'=>'OK',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Visi/Misi','encode'=>false,
									'content'=>'AAAAA',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Bisnis Proses','encode'=>false,
									'content'=>'AAAAA',
								],									
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Peraturan','encode'=>false,
									'content'=>'AAAAA',
								],	
							],							
					],
					[
						'label'=>'<i class="glyphicon glyphicon-home"></i> PT.Gosent',
							'items'=>[
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Struktur',
									'encode'=>false,'content'=>'OK',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Visi/Misi','encode'=>false,
									'content'=>'AAAAA',
								],
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Bisnis Proses','encode'=>false,
									'content'=>'AAAAA',
								],	
								[
									'label'=>'<i class="glyphicon glyphicon-chevron-right"></i> Peraturan','encode'=>false,
									'content'=>'AAAAA',
								],	
							],						
					],
				];
				
				echo TabsX::widget([						
						'items'=>$subCorp,
						'position'=>TabsX::POS_ABOVE,
						'height'=>TabsX::SIZE_TINY,
						'bordered'=>true,
						'encodeLabels'=>false,
						'align'=>TabsX::ALIGN_LEFT,						
					]);
				?>
				</div>
</div>