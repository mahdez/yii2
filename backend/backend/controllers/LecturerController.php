<?php

namespace backend\controllers;

use Yii;
use backend\models\Lecturer;
use backend\models\LecturerSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * LecturerController implements the CRUD actions for Lecturer model.
 */
class LecturerController extends Controller
{
    /**
     * @inheritdoc
     */
 public function behaviors()
    {
        return [
            
        ];
    }
	

    /**
     * Lists all Lecturer models.
     * @return mixed
     */
    public function actionIndex()
    {
    	$request = Yii::$app->request;
    	$search = $request->get('search',null);
    	
    	//db.course.find({"course_id":"value"});
    	//$query = Course::findAll(["course_id" => $search]);
    	
    	$query = Lecturer::find();
    	if($search != null ){
    		$query->where(["name" =>$search]);
    	}
    	$result = $query->all();
    	
    	echo $search;
    	 
    	return $this->render('index', [
    			'input' => $search,
    			'result' => $result
    	]);
    	
    }

    /**
     * Displays a single Lecturer model.
     * @param integer $_id
     * @return mixed
     */
    public function  actionSave(){
    	$request=Yii::$app->request;
    	$id = $request->get('id',null);
    	$name=$request->get('name',null);
    	$dob=$request->get('dob',null);
    	$gender=$request->get('gender',null);
    	$degree=$request->get('degree',null);
    	$address=$request->get('address',null);
    	$email=$request->get('email',null);
    	$phone_number=$request->get('phone_number',null);
    	
    	
    	$baseUrl=\Yii::getAlias('@web');
    	
    	$model;
    	
    	if($id == null){
    		$model = new Lecturer();
    		//create
    	}else{
    		$model=Lecturer::findOne($id);
    		//update
    	}
    	
    	
    	$model->name=$name;
    	$model->dob=$dob;
    	$model->gender=$gender;
    	$model->degree=$degree;
    	$model->address=$address;
    	$model->email=$email;
    	$model->phone_number=$phone_number;
    
    	
    	if($model->save()){
    		echo"success";
    	}else{
    		echo"unsuccess";
    	}
    	
    	return $this->redirect($baseUrl."/lecturer/index");
    }
  	public function actionDelete(){
  		$request =Yii::$app->request;
  		$id=$request->get('id',null);
  		$baseUrl=\Yii::getAlias('@web');
  		
  		$model = Lecturer::findOne($id);
  		$model->delete();
  		
  		return $this->redirect($baseUrl."/lecturer/index");
  		
  	}
  	public function actionEdit(){
  		$request =Yii::$app->request;
  		$id=$request->get('id',null);
  		
  		$model = Lecturer::findOne($id);
  		return $this->render('edit',[
  				'model'=>$model
  		]);
    }
    public function actionCreate(){
    	return $this->render('create',[
    	
    	]);
    	
    }
}