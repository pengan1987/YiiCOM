<?php
/* @var $this ComputerController */
/* @var $model Computer */

$this->breadcrumbs=array(
	'Computers'=>array('index'),
	$model->Id=>array('view','id'=>$model->Id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Computer', 'url'=>array('index')),
	array('label'=>'Create Computer', 'url'=>array('create')),
	array('label'=>'View Computer', 'url'=>array('view', 'id'=>$model->Id)),
	array('label'=>'Manage Computer', 'url'=>array('admin')),
);
?>

<h1>Update Computer <?php echo $model->Id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>