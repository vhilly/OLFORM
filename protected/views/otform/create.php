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

<h3>O.T. Form Application</h3>


<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>

