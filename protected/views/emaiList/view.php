<?php
/* @var $this EmaiListController */
/* @var $model EmaiList */

$this->breadcrumbs=array(
	'Emai Lists'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List EmaiList', 'url'=>array('index')),
	array('label'=>'Create EmaiList', 'url'=>array('create')),
	array('label'=>'Update EmaiList', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete EmaiList', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EmaiList', 'url'=>array('admin')),
);
?>

<h1>View EmaiList #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'useremail',
		'info',
	),
)); ?>
