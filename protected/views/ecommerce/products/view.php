<?php
/* @var $this ProductsController */
/* @var $model ECProduct */

$this->breadcrumbs=array(
	'Ecproducts'=>array('index'),
	$model->product_id,
);

$this->menu=array(
	array('label'=>'List ECProduct', 'url'=>array('index')),
	array('label'=>'Create ECProduct', 'url'=>array('create')),
	array('label'=>'Update ECProduct', 'url'=>array('update', 'id'=>$model->product_id)),
	array('label'=>'Delete ECProduct', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->product_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ECProduct', 'url'=>array('admin')),
);
?>

<h1>View ECProduct #<?php echo $model->product_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'product_id',
		'product_name',
		'product_sku',
		'is_active',
		'short_description',
		'price',
		'special_price',
		'categories',
		'stock',
		'product_images',
	),
)); ?>
