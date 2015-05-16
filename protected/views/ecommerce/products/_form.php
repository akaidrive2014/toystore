<?php
$this->avoidDoubleLoadJS();
/* @var $this ProductsController */
/* @var $model ECProduct */
/* @var $form CActiveForm */
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <?php echo $title; ?>
    </div>
    <div class="panel-body form">
        <ul class="nav nav-tabs" id="tabs_a">
            <li class="active">
                <a data-toggle="tab" href="#info"><i class="glyphicon glyphicon-user"></i> <?php echo $this->t('Informastion');?></a>
            </li>
            <li>
                <a data-toggle="tab" href="#price"><i class="glyphicon glyphicon-lock"></i> <?php echo $this->t('Price');?></a>
            </li>
            <li>
                <a data-toggle="tab" href="#categories"><i class="glyphicon glyphicon-lock"></i> <?php echo $this->t('Category');?></a>
            </li>
            <li>
                <a data-toggle="tab" href="#stock"><i class="glyphicon glyphicon-lock"></i> <?php echo $this->t('Stock');?></a>
            </li>
			<li>
                <a data-toggle="tab" href="#images"><i class="glyphicon glyphicon-lock"></i> <?php echo $this->t('Image');?></a>
            </li>
        </ul>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>$this->idName.'-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="tab-content" id="tabs_content_a">
		<div id="info" class="tab-pane fade in active">    
			<div class="row">
				<?php echo $form->labelEx($model,'product_name'); ?>
				<?php echo $form->textField($model,'product_name',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'product_name'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'product_sku'); ?>
				<?php echo $form->textField($model,'product_sku',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'product_sku'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'is_active'); ?>
				<?php echo $form->textField($model,'is_active',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'is_active'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'short_description'); ?>
				<?php echo $form->textArea($model,'short_description',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'short_description'); ?>
			</div>
		</div>
		<div id="price" class="tab-pane fade in">   
			<div class="row">
				<?php echo $form->labelEx($model,'price'); ?>
				<?php echo $form->textField($model,'price',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'price'); ?>
			</div>

			<div class="row">
				<?php echo $form->labelEx($model,'special_price'); ?>
				<?php echo $form->textField($model,'special_price',array('size'=>10,'maxlength'=>10,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'special_price'); ?>
			</div>
		</div>
        <div id="categories" class="tab-pane fade in">
			<div class="row">
				<?php echo $form->labelEx($model,'categories'); ?>
				<?php echo $form->textField($model,'categories',array('size'=>60,'maxlength'=>500,'class'=>'form-control')); ?>
				<?php echo $form->error($model,'categories'); ?>
			</div>
		</div>
		
        <div id="stock" class="tab-pane fade in">   
			<div class="row">
				<?php echo $form->labelEx($model,'stock'); ?>
				<?php echo $form->textField($model,'stock',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'stock'); ?>
			</div>
		</div>

		<div id="images" class="tab-pane fade in">   	
			<div class="row">
				<?php echo $form->labelEx($model,'product_images'); ?>
				<?php echo $form->textField($model,'product_images',array('class'=>'form-control')); ?>
				<?php echo $form->error($model,'product_images'); ?>
			</div>
		</div>
	
	</div>
	<div class="row buttons">
        <?php echo CHtml::Button($model->isNewRecord ? 'Create & Close' : 'Save & Close', array('class' => 'btn btn-success', 'id' => 'save_close')); ?>
        <?php echo CHtml::Button($model->isNewRecord ? 'Create & Continue Edit' : 'Save & Continue Edit', array('class' => 'btn btn-primary', 'id' => 'save_edit')); ?>
        <?php echo CHtml::Button('Cancel', array('class' => 'btn btn-info pull-right', 'id' => "cancel")); ?>
    </div>

	<?php $this->endWidget(); ?>
	</div>
</div><!-- form -->