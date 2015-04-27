<?php
/* @var $this CategoriesController */
/* @var $model ECCategory */

$this->breadcrumbs=array(
	'Eccategories'=>array('index'),
	$model->category_id,
);

$this->menu=array(
	array('label'=>'List ECCategory', 'url'=>array('index')),
	array('label'=>'Create ECCategory', 'url'=>array('create')),
	array('label'=>'Update ECCategory', 'url'=>array('update', 'id'=>$model->category_id)),
	array('label'=>'Delete ECCategory', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->category_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ECCategory', 'url'=>array('admin')),
);
?>

<h1>View ECCategory #<?php echo $model->category_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'category_id',
		'category_name',
		'is_active',
		'category_description',
		'category_image',
		'seo_title',
		'seo_description',
		'seo_keywords',
		'friendly_url',
	),
)); ?>
