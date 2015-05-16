<?php
/* @var $this ProductsController */
/* @var $model ECProduct */

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#ecproduct-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
 

<style>
#<?php echo $this->idName;?>-grid table.table>thead>tr>th:last-child{
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
								'product_id',
								'product_name',
								'product_sku',
								'is_active',
								'short_description',
								'price',
								/*
								'special_price',
								'categories',
								'stock',
								'product_images',
								*/
								array(
									'class'=>'CButtonColumn',
								),
							),
						)); ?>
				</div>
			</div>
		</div>
	</div>
</div>