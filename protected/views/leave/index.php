<?php
/* @var $this LeaveController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Leaves',
);

$this->menu=array(
	array('label'=>'Create Leave', 'url'=>array('create')),
	array('label'=>'Manage Leave', 'url'=>array('admin')),
);
?>

<h1>Submitted Leave Form(s)</h1>

<?php 
$this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'label' => 'Apply For New Leave',
        'size' => 'large',
        'type' => 'info',
        'url' => Yii::app()->createUrl('leave/create')
    )
);
?>

<br>
<br>

<?php
 $box = $this->beginWidget(
    'bootstrap.widgets.TbBox',
    array(
        'title' => 'List',
        'headerIcon' => 'icon-th-list',
        'htmlOptions' => array('class' => 'bootstrap-widget-table')
    )
);
?>

<table class="table table-stripped table-bordered" >
  <tr>
	  <th>Name</th>
	  <th>Date of Filing</th>
	  <th>Position</th>
	  <th>Leave Type</th>
    <th>Reason</th>
	  <th>Date of Leave</th>
	  <th>Supervisor 1</th>
	  <th>Supervisor 2</th>
	  <th>Operations Manager</th>
	  <th>HR Manager</th>
	  <th>Status</th>
  <?php if(Yii::app()->user->checkAccess('Team Lead') || Yii::app()->user->checkAccess('Supervisor')):?>
	  <th>Supervisor 1 Approval</th>
	  <th>Supervisor 2 Approval</th>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('Manager')):?>
	  <th>OM Manager's Approval</th>
  <?php endif?>
  <?php if(Yii::app()->user->checkAccess('HR Manager')):?>
	  <th>HR Manager's Approval</th>
  <?php endif?>
  </tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>
<?php $this->endWidget(); ?>
