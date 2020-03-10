<?php
/**
 * User: TheCodeholic
 * Date: 3/7/2020
 * Time: 9:18 AM
 */

namespace app\modules\api\controllers;


use app\modules\api\models\LoginForm;
use app\modules\api\resources\UserResource;
use Yii;
use yii\base\InvalidArgumentException;
use yii\filters\Cors;
use yii\rest\Controller;
use yii\web\UnauthorizedHttpException;

/**
 * Class UserController
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\modules\api\controllers
 */
class UserController extends Controller
{
    public function behaviors()
    {
        return array_merge(parent::behaviors(), [
            'cors' => Cors::class
        ]);
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            throw new InvalidArgumentException('You are already authenticated');
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post(), '') && $model->login()) {
            return $model->getUser();
        }

        Yii::$app->response->statusCode = 422;
        return [
            'errors' => $model->errors
        ];
    }

    public function actionData()
    {
        $headers = Yii::$app->request->headers;
        if (!isset($headers['Authorization'])){
            throw new UnauthorizedHttpException();
        }
        $accessToken = explode(" ", $headers['Authorization'])[1];
        $user = UserResource::findIdentityByAccessToken($accessToken);
        if (!$user){
            throw new UnauthorizedHttpException();
        }
        return $user;
    }
}
