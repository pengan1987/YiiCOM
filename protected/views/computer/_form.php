<?php
/* @var $this ComputerController */
/* @var $model Computer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'computer-form',
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
		<?php echo $form->textField($model,'brand',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'brand'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customername'); ?>
		<?php echo $form->textField($model,'customername',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'customername'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'customercell'); ?>
		<?php echo $form->textField($model,'customercell',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'customercell'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avaliablility'); ?>
		<?php echo $form->textField($model,'avaliablility',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'avaliablility'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'model'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'serialnumb'); ?>
		<?php echo $form->textField($model,'serialnumb',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'serialnumb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpu'); ?>
		<?php echo $form->textField($model,'cpu',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpu'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpumodel'); ?>
		<?php echo $form->textField($model,'cpumodel',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'cpumodel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpuspeed'); ?>
		<?php echo $form->textField($model,'cpuspeed',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'cpuspeed'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gcard'); ?>
		<?php echo $form->textField($model,'gcard',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'gcard'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'gcardmodel'); ?>
		<?php echo $form->textField($model,'gcardmodel',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'gcardmodel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ram'); ?>
		<?php echo $form->textField($model,'ram',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'ram'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HardDrive'); ?>
		<?php echo $form->textField($model,'HardDrive',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'HardDrive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HDType'); ?>
		<?php echo $form->textField($model,'HDType',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'HDType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'size'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usbtype'); ?>
		<?php echo $form->textField($model,'usbtype',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'usbtype'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'usbN'); ?>
		<?php echo $form->textField($model,'usbN',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'usbN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DisplayOutput'); ?>
		<?php echo $form->textField($model,'DisplayOutput',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'DisplayOutput'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DVDdrive'); ?>
		<?php echo $form->textField($model,'DVDdrive',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'DVDdrive'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'webcam'); ?>
		<?php echo $form->textField($model,'webcam',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'webcam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'wifi'); ?>
		<?php echo $form->textField($model,'wifi',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'wifi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lan'); ?>
		<?php echo $form->textField($model,'lan',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'lan'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OS'); ?>
		<?php echo $form->textField($model,'OS',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'OS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'OSversion'); ?>
		<?php echo $form->textField($model,'OSversion',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'OSversion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SystemType'); ?>
		<?php echo $form->textField($model,'SystemType',array('size'=>11,'maxlength'=>11)); ?>
		<?php echo $form->error($model,'SystemType'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Pic'); ?>
		<?php echo $form->textField($model,'Pic',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'Pic'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ebay'); ?>
		<?php echo $form->textField($model,'ebay',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ebay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sellingprice'); ?>
		<?php echo $form->textField($model,'sellingprice'); ?>
		<?php echo $form->error($model,'sellingprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'soldprice'); ?>
		<?php echo $form->textField($model,'soldprice',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'soldprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SbaskedforID'); ?>
		<?php echo $form->textField($model,'SbaskedforID',array('size'=>60,'maxlength'=>999)); ?>
		<?php echo $form->error($model,'SbaskedforID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SBasked'); ?>
		<?php echo $form->textField($model,'SBasked',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'SBasked'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpucores'); ?>
		<?php echo $form->textField($model,'cpucores',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cpucores'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'onsale'); ?>
		<?php echo $form->textField($model,'onsale',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'onsale'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'secprice'); ?>
		<?php echo $form->textField($model,'secprice'); ?>
		<?php echo $form->error($model,'secprice'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->