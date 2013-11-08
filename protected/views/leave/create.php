<?php
/* @var $this LeaveController */
/* @var $model Leave */

$this->breadcrumbs=array(
	'Leaves'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Leave', 'url'=>array('index')),
	array('label'=>'Manage Leave', 'url'=>array('admin')),
);
?>
<center>
<table border=2>
<tr><td colspan=2><b><font size=4>APPLICATION FOR LEAVE</font></b></td></tr>

<?php echo $this->renderPartial('_form', compact('model','lt')); ?>
</center>

</table>
