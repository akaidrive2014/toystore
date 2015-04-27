<?php
/* @var $this CategoriesController */
/* @var $model ECCategory */
/* @var $form CActiveForm */
?>

<div class="row">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
	<div class="form-group">
		<div class="col-md-1">
			<?php echo $form->textField($model,'category_id',array('class'=>'form-control','placeholder'=>$model -> getAttributeLabel('category_id'))); ?>
		</div>
		<div class="col-md-5">
			<?php echo $form->textField($model,'category_name',array('size'=>60,'maxlength'=>100,'class'=>'form-control','placeholder'=>$model -> getAttributeLabel('category_name'))); ?>
		</div>
		<div class="col-md-3">
			<?php echo $form->dropDownList($model,'is_active',array("Disabled","Enabled"),array('empty'=>'All Status','class'=>'form-control')); ?>
		</div>
		<div class="col-md-2">
			<?php echo CHtml::submitButton('Search',array('class'=>'btn btn-info')); ?>
		</div>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->