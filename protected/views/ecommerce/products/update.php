<?php
/* @var $this ProductsController */
/* @var $model ECProduct */

$this->breadcrumbs=array(
	'Ecproducts'=>array('index'),
	$model->product_id=>array('view','id'=>$model->product_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ECProduct', 'url'=>array('index')),
	array('label'=>'Create ECProduct', 'url'=>array('create')),
	array('label'=>'View ECProduct', 'url'=>array('view', 'id'=>$model->product_id)),
	array('label'=>'Manage ECProduct', 'url'=>array('admin')),
);
?>

<h1>Update ECProduct <?php echo $model->product_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>