<?php
/* @var $this LeaveController */
/* @var $model Leave */

$this->breadcrumbs=array(
	'Leaves'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Leave', 'url'=>array('index')),
	array('label'=>'Create Leave', 'url'=>array('create')),
	array('label'=>'Update Leave', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Leave', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Leave', 'url'=>array('admin')),
);
?>

<h1>View Leave #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employee_id',
		'leave_type_id',
		'reason',
		'start_date',
		'end_date',
		'date_filed',
		'sv1',
		'sv2',
		'om',
		'hrm',
		'remarks',
		'create_date',
		'days_with_pay',
		'days_without_pay',
		'others',
	),
)); ?>
