<?php

namespace app\controllers;

use app\models\Pages;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

use mdm\admin\models\Assignment;
use yii\web\Response;
use mdm\admin\models\User;

use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

use app\models\LoginForm as Login;
use app\models\Signup;
use app\models\Data;

use mdm\admin\models\form\PasswordResetRequest;
use mdm\admin\models\form\ResetPassword;

use yii\web\NotFoundHttpException;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $model = new Data();
		if (Yii::$app->getUser()->isGuest) {
		    return $this->redirect(['login']);
			$model = new Login();
			if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
				return $this->goBack();
			} else {
				return $this->render('login1', [
					'model' => $model,
				]);
			}
		}else{
            return $this->render('index', [

                'model' => $model,
            ]);
		}
        
    }

    /**
     * Login action.
     *
     * @return Response|string
     */

    public function actionUserAdd()
    {
        $model = new Signup();

        if ($model->load(Yii::$app->request->post())) {
            if($model->signup()) {
                Yii::$app->session->setFlash('success', "Пользователь успешно создан");
                return $this->redirect(['users']);
            }else{
                Yii::$app->session->setFlash('warning', "Пользователь не создан...");
                return $this->redirect(['users']);
            }
        } else {
            return $this->render('users/create', [
                'model' => $model,
            ]);
        }
    }

    public function actionDeleteUser($id)
    {
        $model = User::findOne($id);
        $model->status = 0;
        if($model->delete()){
            Yii::$app->session->setFlash('warning', "Учетная запись: ".$model->username. " -  удалена.");
            return $this->redirect(['users']);
        }
        return $this->redirect(['users']);
    }


    public function actionUsers()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => User::find(),
        ]);

        return $this->render('users/index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->getUser()->isGuest) {
            return $this->goHome();
        }

        $model = new Login();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login2', [
                'model' => $model,
            ]);
        }
    }

    public function Assign($id)
    {
        $items = [Yii::$app->params['USER_GROUP']];
        $model = new Assignment($id);
        $model->assign($items);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        if (isset(Yii::$app->user->id)){
            Yii::$app->user->logout();
            return $this->redirect('index');
        }else{
            return $this->redirect('/login');
        }
    }

    /**
     * Request reset password
     * @return string
     */
    public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequest();
        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->getSession()->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->getSession()->setFlash('error', 'Sorry, we are unable to reset password for email provided.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }

    /**
     * Reset password
     * @return string
     */
    public function actionResetPassword($token)
    {
        try {
            $model = new ResetPassword($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->getRequest()->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->getSession()->setFlash('success', 'New password was saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }


    /**
     * Displays contact page.
     *
     * @return Response|string
     */

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }



    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


}
