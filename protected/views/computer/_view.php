<?php
/* @var $this ComputerController */
/* @var $data Computer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brand')); ?>:</b>
	<?php echo CHtml::encode($data->brand); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customername')); ?>:</b>
	<?php echo CHtml::encode($data->customername); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('customercell')); ?>:</b>
	<?php echo CHtml::encode($data->customercell); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avaliablility')); ?>:</b>
	<?php echo CHtml::encode($data->avaliablility); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('year')); ?>:</b>
	<?php echo CHtml::encode($data->year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('model')); ?>:</b>
	<?php echo CHtml::encode($data->model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('serialnumb')); ?>:</b>
	<?php echo CHtml::encode($data->serialnumb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpu')); ?>:</b>
	<?php echo CHtml::encode($data->cpu); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpumodel')); ?>:</b>
	<?php echo CHtml::encode($data->cpumodel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpuspeed')); ?>:</b>
	<?php echo CHtml::encode($data->cpuspeed); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gcard')); ?>:</b>
	<?php echo CHtml::encode($data->gcard); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gcardmodel')); ?>:</b>
	<?php echo CHtml::encode($data->gcardmodel); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ram')); ?>:</b>
	<?php echo CHtml::encode($data->ram); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HardDrive')); ?>:</b>
	<?php echo CHtml::encode($data->HardDrive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HDType')); ?>:</b>
	<?php echo CHtml::encode($data->HDType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('size')); ?>:</b>
	<?php echo CHtml::encode($data->size); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usbtype')); ?>:</b>
	<?php echo CHtml::encode($data->usbtype); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('usbN')); ?>:</b>
	<?php echo CHtml::encode($data->usbN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DisplayOutput')); ?>:</b>
	<?php echo CHtml::encode($data->DisplayOutput); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DVDdrive')); ?>:</b>
	<?php echo CHtml::encode($data->DVDdrive); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('webcam')); ?>:</b>
	<?php echo CHtml::encode($data->webcam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('wifi')); ?>:</b>
	<?php echo CHtml::encode($data->wifi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lan')); ?>:</b>
	<?php echo CHtml::encode($data->lan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OS')); ?>:</b>
	<?php echo CHtml::encode($data->OS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('OSversion')); ?>:</b>
	<?php echo CHtml::encode($data->OSversion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SystemType')); ?>:</b>
	<?php echo CHtml::encode($data->SystemType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Pic')); ?>:</b>
	<?php echo CHtml::encode($data->Pic); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ebay')); ?>:</b>
	<?php echo CHtml::encode($data->ebay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sellingprice')); ?>:</b>
	<?php echo CHtml::encode($data->sellingprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('soldprice')); ?>:</b>
	<?php echo CHtml::encode($data->soldprice); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SbaskedforID')); ?>:</b>
	<?php echo CHtml::encode($data->SbaskedforID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SBasked')); ?>:</b>
	<?php echo CHtml::encode($data->SBasked); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cpucores')); ?>:</b>
	<?php echo CHtml::encode($data->cpucores); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('onsale')); ?>:</b>
	<?php echo CHtml::encode($data->onsale); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secprice')); ?>:</b>
	<?php echo CHtml::encode($data->secprice); ?>
	<br />

	*/ ?>

</div>