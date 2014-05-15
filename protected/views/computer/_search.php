<?php
/* @var $this ComputerController */
/* @var $model Computer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'brand'); ?>
		<?php echo $form->textField($model,'brand',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customername'); ?>
		<?php echo $form->textField($model,'customername',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'customercell'); ?>
		<?php echo $form->textField($model,'customercell',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avaliablility'); ?>
		<?php echo $form->textField($model,'avaliablility',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'year'); ?>
		<?php echo $form->textField($model,'year',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'model'); ?>
		<?php echo $form->textField($model,'model',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'serialnumb'); ?>
		<?php echo $form->textField($model,'serialnumb',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpu'); ?>
		<?php echo $form->textField($model,'cpu',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpumodel'); ?>
		<?php echo $form->textField($model,'cpumodel',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpuspeed'); ?>
		<?php echo $form->textField($model,'cpuspeed',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gcard'); ?>
		<?php echo $form->textField($model,'gcard',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gcardmodel'); ?>
		<?php echo $form->textField($model,'gcardmodel',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ram'); ?>
		<?php echo $form->textField($model,'ram',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HardDrive'); ?>
		<?php echo $form->textField($model,'HardDrive',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HDType'); ?>
		<?php echo $form->textField($model,'HDType',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'size'); ?>
		<?php echo $form->textField($model,'size',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usbtype'); ?>
		<?php echo $form->textField($model,'usbtype',array('size'=>40,'maxlength'=>40)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'usbN'); ?>
		<?php echo $form->textField($model,'usbN',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DisplayOutput'); ?>
		<?php echo $form->textField($model,'DisplayOutput',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DVDdrive'); ?>
		<?php echo $form->textField($model,'DVDdrive',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'webcam'); ?>
		<?php echo $form->textField($model,'webcam',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'wifi'); ?>
		<?php echo $form->textField($model,'wifi',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lan'); ?>
		<?php echo $form->textField($model,'lan',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OS'); ?>
		<?php echo $form->textField($model,'OS',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OSversion'); ?>
		<?php echo $form->textField($model,'OSversion',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SystemType'); ?>
		<?php echo $form->textField($model,'SystemType',array('size'=>11,'maxlength'=>11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Pic'); ?>
		<?php echo $form->textField($model,'Pic',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ebay'); ?>
		<?php echo $form->textField($model,'ebay',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'sellingprice'); ?>
		<?php echo $form->textField($model,'sellingprice'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'soldprice'); ?>
		<?php echo $form->textField($model,'soldprice',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SbaskedforID'); ?>
		<?php echo $form->textField($model,'SbaskedforID',array('size'=>60,'maxlength'=>999)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SBasked'); ?>
		<?php echo $form->textField($model,'SBasked',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cpucores'); ?>
		<?php echo $form->textField($model,'cpucores',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'onsale'); ?>
		<?php echo $form->textField($model,'onsale',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secprice'); ?>
		<?php echo $form->textField($model,'secprice'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->