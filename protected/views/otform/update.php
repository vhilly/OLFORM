<?php
$this->breadcrumbs=array(
	'Otforms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Otform','url'=>array('index')),
	array('label'=>'Create Otform','url'=>array('create')),
	array('label'=>'View Otform','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage Otform','url'=>array('admin')),
	);
	?>

	<h1>Update Otform <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>