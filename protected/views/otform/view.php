<?php
$this->breadcrumbs=array(
	'Otforms'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Update Otform','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Otform','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
?>

<h1>View O.T Form</h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'start_time',
		'end_time',
		'remarks',
		'date',
		'date_submitted',
		'tl',
		'sv',
		'status',
),
)); ?>
