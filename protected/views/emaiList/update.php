<?php
/* @var $this EmaiListController */
/* @var $model EmaiList */

$this->breadcrumbs=array(
	'Emai Lists'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List EmaiList', 'url'=>array('index')),
	array('label'=>'Create EmaiList', 'url'=>array('create')),
	array('label'=>'View EmaiList', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage EmaiList', 'url'=>array('admin')),
);
?>

<h1>Update EmaiList <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>