<?php
$this->breadcrumbs=array(
	'Otforms'=>array('index'),
	'Create',
);
/*
$this->menu=array(
array('label'=>'List Otform','url'=>array('index')),
array('label'=>'Manage Otform','url'=>array('admin')),
);
*/
?>

<h1>O.T Form Application</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
