<?php

namespace ddmtechdev\rbac\controllers;

use Yii;
use ddmtechdev\rbac\models\AuthAssignment;
use ddmtechdev\rbac\models\AuthItem;
use ddmtechdev\rbac\models\searches\AuthAssignmentSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\ArrayHelper;

class AuthAssignmentController extends Controller
{

    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    // public function actionCreate($user_id)
    // {
    //     $model = new AuthAssignment();
    //     $model->user_id = $user_id;

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'item_name' => $model->item_name, 'user_id' => $model->user_id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionGrantAccess($user_id)
    {
        $modelMulti = AuthAssignment::find()->where(['user_id' => $user_id])->all();
        $assigned_roles = ArrayHelper::map($modelMulti, 'item_name', 'item_name');
        $roles = ArrayHelper::map(AuthItem::find()->all(), 'name', 'name');

        if ($this->request->isPost) {
            $auth = Yii::$app->authManager;
            $auth->revokeAll($user_id);
            $post = $this->request->post();
            $selected_roles = $post['selected_roles'];
            if($selected_roles){
                foreach ($selected_roles as $roleName) {
                    $role = $auth->getRole($roleName);
                    if ($role) {
                        $auth->assign($role, $user_id);
                    }
                    else{
                        $permission = $auth->getPermission($roleName);
                        if ($permission) {
                            $auth->assign($permission, $user_id);
                        }
                    }
                }
                $this->refresh();
            }

        }
        $model = new AuthAssignment();
        $model->user_id = $user_id;

        return $this->render('grant-access', [
            'assigned_roles' => $assigned_roles,
            'roles' => $roles,
            'model' => $model,
        ]);;
        
    }
}
