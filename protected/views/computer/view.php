<?php
/* @var $this ComputerController */
/* @var $model Computer */

$this->breadcrumbs=array(
	'Computers'=>array('index'),
	$model->Id,
);

$this->menu=array(
	array('label'=>'List Computer', 'url'=>array('index')),
	array('label'=>'Create Computer', 'url'=>array('create')),
	array('label'=>'Update Computer', 'url'=>array('update', 'id'=>$model->Id)),
	array('label'=>'Delete Computer', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->Id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Computer', 'url'=>array('admin')),
);
?>

<h1>View Computer #<?php echo $model->Id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'brand',
		'customername',
		'customercell',
		'avaliablility',
		'year',
		'type',
		'model',
		'serialnumb',
		'cpu',
		'cpumodel',
		'cpuspeed',
		'gcard',
		'gcardmodel',
		'ram',
		'HardDrive',
		'HDType',
		'size',
		'usbtype',
		'usbN',
		'DisplayOutput',
		'DVDdrive',
		'webcam',
		'wifi',
		'lan',
		'OS',
		'OSversion',
		'SystemType',
		'Pic',
		'Id',
		'ebay',
		'sellingprice',
		'soldprice',
		'SbaskedforID',
		'SBasked',
		'cpucores',
		'onsale',
		'secprice',
	),
)); ?>
