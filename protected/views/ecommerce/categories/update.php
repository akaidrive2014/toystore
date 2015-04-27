<?php
/* @var $this CategoriesController */
/* @var $model ECCategory */

$this->breadcrumbs=array(
	'Eccategories'=>array('index'),
	$model->category_id=>array('view','id'=>$model->category_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ECCategory', 'url'=>array('index')),
	array('label'=>'Create ECCategory', 'url'=>array('create')),
	array('label'=>'View ECCategory', 'url'=>array('view', 'id'=>$model->category_id)),
	array('label'=>'Manage ECCategory', 'url'=>array('admin')),
);
?>

<h1>Update ECCategory <?php echo $model->category_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>