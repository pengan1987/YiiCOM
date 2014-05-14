<?php
/* @var $this PhoneController */
/* @var $model Phone */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'phone-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price'); ?>
		<?php echo $form->textField($model,'price'); ?>
		<?php echo $form->error($model,'price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phonelock'); ?>
		<?php echo $form->textField($model,'phonelock',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'phonelock'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'looks'); ?>
		<?php echo $form->textField($model,'looks',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'looks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colour'); ?>
		<?php echo $form->textField($model,'colour',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'colour'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serialnumb'); ?>
		<?php echo $form->textField($model,'serialnumb',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'serialnumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pic'); ?>
		<?php echo $form->textField($model,'pic',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avaliablity'); ?>
		<?php echo $form->textField($model,'avaliablity',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'avaliablity'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'storage'); ?>
		<?php echo $form->textField($model,'storage',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'storage'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->