<?php

class CategoriesController extends EcommerceController
{
	public $idName = "ECCategory";

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	/*public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}*/

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$this->forceAjaxRequest();
		$model=new ECCategory;

		// Uncomment the following line if AJAX validation is needed
		$this->performAjaxValidation($model);

		if(isset($_POST['ECCategory']))
		{
			$model->attributes=$_POST['ECCategory'];
			if($model->validate()){
				if($model->save()){
					exit(json_encode(array(
						"success"=>true
					)));
				}	
			}else{
				exit(CActiveForm::validate($model));
			}
		}
		
		$parent_id = isset($_GET['parent_id']) ? $_GET['parent_id'] : 0 ;
		
		$this->renderPartial('_form',array(
			'model'=>$model,
			'title'=>'Create New Category',
			'parent_id'=>$parent_id
		),FALSE,TRUE);
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$this->forceAjaxRequest();
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ECCategory']))
		{
			$model->attributes=$_POST['ECCategory'];
			if($model->validate()){
				if($model->save()){
					exit(json_encode(array(
						"success"=>true
					)));
				}	
			}else{
				exit(CActiveForm::validate($model));
			}
		}

		$this->renderPartial('_form',array(
			'model'=>$model,
			'title'=>'Edit Category'
		),FALSE,TRUE);
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
		$this->redirect(array('admin'));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ECCategory('search');
		$model->unsetAttributes();  // clear any default values
		$model->dbCriteria->condition='parent_id=0';
		if(isset($_GET['ECCategory']))
			$model->attributes=$_GET['ECCategory'];

		$this->render('admin',array(
			'title'=>'Manage Categories',
			'model'=>$model,
			'level'=>'level2',
			'category_id'=>0
		));
	}
	
	public function actionChilds($category_id,$name){
		$model=new ECCategory('search');
		$model->unsetAttributes();  // clear any default values
		$model->dbCriteria->condition="parent_id={$category_id}";
		if(isset($_GET['ECCategory']))
			$model->attributes=$_GET['ECCategory'];

		$this->render('admin',array(
			'title'=>'Manage Categories',
			'model'=>$model,
			'level'=>'level3',
			'category_id'=>$category_id
		));
	}
	
	public function actionLevel3($category_id,$name){
		$model=new ECCategory('search');
		$model->unsetAttributes();  // clear any default values
		$model->dbCriteria->condition="parent_id={$category_id}";
		if(isset($_GET['ECCategory']))
			$model->attributes=$_GET['ECCategory'];

		$this->render('admin',array(
			'title'=>'Manage Categories',
			'model'=>$model,
			'level'=>'level3',
			'category_id'=>$category_id
		));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ECCategory the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ECCategory::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ECCategory $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']===$this->idName.'-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
