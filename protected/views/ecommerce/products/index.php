<?php
/* @var $this ProductsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Ecproducts',
);

$this->menu=array(
	array('label'=>'Create ECProduct', 'url'=>array('create')),
	array('label'=>'Manage ECProduct', 'url'=>array('admin')),
);
?>

<h1>Ecproducts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
