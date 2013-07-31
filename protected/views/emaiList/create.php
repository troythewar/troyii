<?php
/* @var $this EmaiListController */
/* @var $model EmaiList */

$this->breadcrumbs=array(
	'Emai Lists'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EmaiList', 'url'=>array('index')),
	array('label'=>'Manage EmaiList', 'url'=>array('admin')),
);
?>

<h1>Create EmaiList</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>