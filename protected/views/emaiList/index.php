<?php
/* @var $this EmaiListController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Emai Lists',
);

$this->menu=array(
	array('label'=>'Create EmaiList', 'url'=>array('create')),
	array('label'=>'Manage EmaiList', 'url'=>array('admin')),
);
?>

<h1>Emai Lists</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
