<?php
$this->breadcrumbs=array(
	'Otforms'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List Otform','url'=>array('index')),
array('label'=>'Create Otform','url'=>array('create')),
array('label'=>'Update Otform','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Otform','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Otform','url'=>array('admin')),
);
?>

<h1>View Otform #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'employee_id',
		'start_time',
		'end_time',
		'total_hours',
		'remarks',
		'date',
		'date_submitted',
		'tl',
		'sv',
		'status',
),
)); ?>
