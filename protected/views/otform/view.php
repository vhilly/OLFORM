<?php
$this->breadcrumbs=array(
	'Otforms'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'Update Otform','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete Otform','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);
$otFrom = CHtml::encode($model->start_time);
$otTo = CHtml::encode($model->end_time);
$otDiff = strtotime($otTo) - strtotime($otFrom);
$totalHours = floor($otDiff / 3600);
$mins = floor(($otDiff / 60) % 60);
if ($model->status == 0)
  $a = "Waiting for TL/SV Approval"; 
if ($model->status == 1)
  $a = "Waiting for OM Approval"; 
if ($model->status == 2)
  $a = "Waiting for HR Approval"; 
if ($model->status == 3)
  $a = "Approved"; 
if ($model->status == 4)
  $a = "Disapproved";
?>

<link rel="stylesheet" type="text/css" href="css/otform.css">
<h3>View O.T. Form</h3>
	<table border=1 id="otform_table_table">
	<thead>
	<tr>
		<td>Name</td>
		<td>Date</td>
		<td>From</td>
		<td>To</td>
		<td>No. of Hours</td>
		<td>Remarks</td>
	</tr>
	</thead>
	<tbody>
	<tr>
    <td><?php echo "{$model->users0->profile->firstname} {$model->users0->profile->lastname}";?></td>
		<td><?php echo $model->date;?></td>
		<td><?php echo $model->start_time;?></td>
		<td><?php echo $model->end_time;?></td>
		<td><?php echo $totalHours;?></td>
		<td><?php echo $model->remarks;?></td>
	</tr>
	</tbody>
	</table>
	<br>
	<b>Approved by:</b>
	<br><br>
	Team Leader / Supervisor: <?php echo $model->tl_sv;?>
	<br>
	Operations Manager: <?php echo $model->om;?>
	<br>
	HR Manager: <?php echo $model->hr;?>
<br><br>
	Status: <b><?php echo $a;?></b>
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
