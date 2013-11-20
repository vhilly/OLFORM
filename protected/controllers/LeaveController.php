<?php

class LeaveController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
      'rights',
			#'accessControl', // perform access control for CRUD operations
			#'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
/*
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
*/
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
    $this->layout='//layouts/main';
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Leave;
    $this->layout='//layouts/main';
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
    $lt=CHtml::listData(LeaveType::model()->findAll(),'id','name'); 
    $user = User::model()->findByPk(Yii::app()->user->id);
    $pid  = $user->profile->position_id; 
    //$position = "SELECT * FROM position";
    //$command=Yii::app()->db->createCommand($position);
    //$command->execute();
    //$command->queryAll();
//  print_r($command);  
 		$pos = Position::model()->findByPk($pid);
		if(isset($_POST['Leave']))
		{
 #     print_r($_POST);die();
			$model->attributes=$_POST['Leave'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}
		$this->render('create',compact('model','lt','pos'));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Leave']))
		{
			$model->attributes=$_POST['Leave'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
    $criteria=array();
    $this->layout = "//layouts/main";
    $uid = User::model()->findByPk(Yii::app()->user->id);
    //$logId = $uid->profile->department_id;
    $show_all=false;
    if(Yii::app()->user->checkAccess('Supervisor') || Yii::app()->user->checkAccess('Team Lead') || Yii::app()->user->checkAccess('Manager') || Yii::app()->user->checkAccess('HR Manager')){
      $show_all=true;
    }

    if(!$show_all){
      $criteria=new CDbCriteria(array(                    
          'condition'=>'employee_id='.Yii::app()->user->id
      ));
    }
   //
   // echo "$logId";
		$dataProvider=new CActiveDataProvider('Leave',array(
        'criteria'=>$criteria,
           #array(
           # 'with'=>'deparment',
           # 'condition'=>'d.id=:department_id',
           # 'params'=>array(':deparment_id'=>$logId)	,
           # 'join'=>'INNER JOIN department d ON d.id=e.department_id',
           #),
      )
    );
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Leave('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Leave']))
			$model->attributes=$_GET['Leave'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

public function actionApprove ()
{
  $error=0;
  $id=isset($_POST['id']) ? $_POST['id']:'3233';
  $type=isset($_POST['type']) ? $_POST['type']:'';
  $user=isset($_POST['user']) ? $_POST['user']:'';
  $lv=Leave::model()->findByPk($id);
  if($lv){
    $lv->status=$type;
    if(Yii::app()->user->checkAccess('Manager'))
      $lv->om=$user;
    if(Yii::app()->user->checkAccess('HR Manager'))
      $lv->hrm=$user;
    if(Yii::app()->user->checkAccess('Supervisor'))
      $lv->sv1=$user;
      $lv->sv2=$user;
    if(Yii::app()->user->checkAccess('Team Lead'))
      $lv->tl=$user;
  #    $otform->tl=Yii::app()->user->id;
    if($lv->save())
      $error++;
  }else{
      $error++;
  }
  echo json_encode(compact('error'));
}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Leave the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Leave::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Leave $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='leave-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
