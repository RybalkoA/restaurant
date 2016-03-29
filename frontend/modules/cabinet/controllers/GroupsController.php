<?php

namespace app\modules\cabinet\controllers;

use Yii;
use common\models\Groups;
use common\models\GroupsSearche;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * GroupsController implements the CRUD actions for Groups model.
 */
class GroupsController extends Controller
{
     public $layout='main4';
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Groups models.
     * @return mixed
     */
    public function actionSearch()
    {
        $searchModel = new GroupsSearche();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
    $model = Groups::find()->all();
        return $this->render('search', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'model' => $model,        ]);
    }

    /**
     * Displays a single Groups model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Groups model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Groups();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Groups model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Groups model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Groups model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Groups the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Groups::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    //Вывод групп которые создал пользователь 
    public function actionMygroups(){
        
        return $this->render('index', [
          'mygroups' => Groups::Mygroups(),
                  ]);
    }
    
    //Вступаем в группу
    public function actionAddfriend($id_group){
             if($id_group){
                 $group=  Groups::findOne($id_group);
                 $friend = new \common\models\Friends;
                 $friend->id_user = Yii::$app->user->id;
                 $friend->id_group = $id_group;
               if($group->autor == Yii::$app->user->id){
                     $friend->status = 100;
                 } 
                 $friend->save();
             }
             if ($group->autor == Yii::$app->user->id ||$friend->save()){
                 \Yii::$app->session->setFlash('success', 'Неудача! Вы уже являетесь администратором этой группы');
             }
                 
             if($group->autor != Yii::$app->user->id){
              if ($friend->save()) {
              \Yii::$app->session->setFlash('success', 'Спасибо! Ваша заявка будет рассмотрнеа администратором группы в ближайшее время');
              } else {
                  \Yii::$app->session->setFlash('success', 'Вы уже вступили в эту группу');
                }
                
             }
       return $this->redirect(['search']);
        
            
    }
}
