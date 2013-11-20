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

<link rel="stylesheet" type="text/css" href="css/otform.css">
<h3>View O.T Form</h3>
	<table border=1 id="otform_table_table">
	<thead>
	<tr>
		<td>Date</td>
		<td>From</td>
		<td>To</td>
		<td>TOTAL No.</td>
		<td>Remarks</td>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td><?php echo $model->date;?></td>
		<td><?php echo $model->start_time;?></td>
		<td><?php echo $model->end_time;?></td>
		<td>Total Hours</td>
		<td><?php echo $model->remarks;?></td>
	</tr>
	</tbody>
	</table>
	<br>
	<b>Approved by:</b>
	<br><br>
	Team Leader: <?php echo $model->tl;?>
	<br>
	Supervisor: <?php echo $model->sv;?>
<br><br>
	Status: <?php echo $model->status?>
<br><br>
<?php /*$this->widget('bootstrap.widgets.TbDetailView',array(
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
)); */?>
