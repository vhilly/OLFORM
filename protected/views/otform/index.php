<?php
$this->breadcrumbs=array(
	'Otforms',
);
?>

<h1>Submitted O.T. Form/s</h1>

<?php 
$this->widget(
    'bootstrap.widgets.TbButton',
    array(
        'label' => 'Apply For New O.T',
        'size' => 'large',
        'type' => 'info',
        'url' => Yii::app()->createUrl('otform/create')
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
	  <th>Start Time</th>
	  <th>End Time</th>
	  <th>Total Hours</th>
    <th>Remarks</th>
	  <th>Date</th>
	  <th>TL/SV</th>
	  <th>Manager</th>
	  <th>HR Manager</th>
	  <th>Status</th>
    <?php if(Yii::app()->user->checkAccess('Team Lead') || Yii::app()->user->checkAccess('Supervisor')):?>
	  <th>TL/SV's Approval</th>
    <?php endif?>
    <?php if(Yii::app()->user->checkAccess('Manager')):?>
	  <th>Manager's Approval</th>
    <?php endif?>
    <?php if(Yii::app()->user->checkAccess('HR Manager')):?>
	  <th>HR Manager's Approval</th>
    <?php endif?>
	  <th>TL/SV Disapproval Reason</th>
	  <th>OM Disapproval Reason</th>
	  <th>HR Disapproval Reason</th>
  </tr>
<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
</table>
<?php $this->endWidget(); ?>

