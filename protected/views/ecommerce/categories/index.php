<?php
/* @var $this CategoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Eccategories',
);

$this->menu=array(
	array('label'=>'Create ECCategory', 'url'=>array('create')),
	array('label'=>'Manage ECCategory', 'url'=>array('admin')),
);
?>

<h1>Eccategories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
