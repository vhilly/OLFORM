<?php
$this->breadcrumbs=array(
	'Otforms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'View Otform','url'=>array('view','id'=>$model->id)),
	);
	?>

	<h3>Update O.T Form <?php echo $model->id; ?></h3>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>
