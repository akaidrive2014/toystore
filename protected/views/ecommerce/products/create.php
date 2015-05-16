<?php
/* @var $this ProductsController */
/* @var $model ECProduct */

$this->breadcrumbs=array(
	'Ecproducts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ECProduct', 'url'=>array('index')),
	array('label'=>'Manage ECProduct', 'url'=>array('admin')),
);
?>

<h1>Create ECProduct</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>