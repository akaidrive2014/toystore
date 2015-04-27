<?php
/* @var $this CategoriesController */
/* @var $model ECCategory */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eccategory-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<style>
#ECCategory-grid table.table>thead>tr>th:last-child{
	width:10%;
}
</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">
					<?php echo $title;?>
					<?php echo CHtml::ajaxLink(
						' <i class="glyphicon glyphicon-plus"></i> Add New ',
						array($this->id.'/create'),
						array('update' => ".form-x",//".content-data-x",
							'beforeSend' => 'function(){
							loading("show");
						}',
							'complete' => 'function(){
								$(".grid-x").hide();
								$(".loading-x").fadeOut("slow",function(){
									$(".form-x").show();
								});
								return false;
						}',
						),
						array('class'=>'btn btn-success pull-right')
					);?>
					<div class="clearfix"></div>
				</div>
				<div class="table-responsive">
					<br>
					<?php echo CHtml::link('<i class="glyphicon glyphicon-search"></i> Search','#',array('class'=>'search-button btn btn-default')); ?>
					<div class="search-form" style="display:none">
						<?php $this->renderPartial('_search',array(
							'model'=>$model,
						)); ?>
					</div><!-- search-form -->

						<?php $this->widget('zii.widgets.grid.CGridView', array(
							'pagerCssClass'=>'text-center',
							'pager' => array(
								'class' => 'CLinkPager',
								'header' => '',
								'selectedPageCssClass'=>'active',
								'nextPageLabel'=>'<i class="fa fa-angle-right"></i>',
								'prevPageLabel'=>'<i class="fa fa-angle-left"></i>',
								'lastPageLabel'=>'<i class="fa fa-angle-double-right"></i>',
								'firstPageLabel'=>'<i class="fa fa-angle-double-left"></i>',
								'htmlOptions'=>array(
									'class'=>'pagination pagination-sm',
									'id'=>FALSE,
								),
							),
							'itemsCssClass'=>'table table-bordered',
							'id'=>$this->idName.'-grid',
							'dataProvider'=>$model->search(),
							//'filter'=>$model,
							'columns'=>array(
								'category_id',
								'category_name',
								'discount_amount',
								'discount_start',
								'discount_end',
								array(
									'name'=>'is_active',
									'header'=>'Status',
									'value'=>'$data->is_active',
									/*'sortable'=>TRUE,
									'filter' => array('a','aa'),*/
								),
								/*array(
									'class'=>'CButtonColumn',
								),*/
								array(
									'class'=>'CButtonColumn',
									'template'=>'{view} {update} {delete}',
									'buttons'=>array(
										  'view' => array(
										  		'options' => array('data-toggle'=>'tooltip','title' => 'Open', 'class' => 'btn btn-info btn-xs'),
						                		'label' => "<i class='fa fa-folder-open-o'></i>",
						                		'imageUrl' => false,
												'click'=>"function(){
													loading('show');
						                           	$('.form-x').load($(this).attr('href'),function(){
						                           		loading('hide')	
														$('.grid-x').hide();
						                           		$('.form-x').show();
						                         	});
																
						                         return false;
						                         }",
											),
										  'update' => array(
										  		'options' => array('data-toggle'=>'tooltip','title' => 'Edit', 'class' => 'btn btn-default btn-xs'),
						                		'label' => "<i class='fa fa-pencil-square-o'></i>",
						                		'imageUrl' => false,
												'click'=>"function(){
													loading('show');
						                           	$('.form-x').load($(this).attr('href'),function(){
						                           		loading('hide')	
														$('.grid-x').hide();
						                           		$('.form-x').show();
						                         	});
																
						                         return false;
						                         }",
											),
								           'delete' => array(
						                		'options' => array('data-toggle'=>'tooltip','title' => 'Delete', 'class' => 'btn btn-danger btn-xs'),
						                		'label' => '<i class="glyphicon glyphicon-remove"></i>',
						                		'imageUrl' => false,
								           ),
									),
									
							   ),	
							),
						)); ?>
				</div>
			</div>
		</div>
	</div>
</div>