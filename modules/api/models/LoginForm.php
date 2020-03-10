<?php

namespace app\modules\api\models;

use app\modules\api\resources\UserResource;
use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 *
 * @property User|null $user This property is read-only.
 *
 */
class LoginForm extends \app\models\LoginForm
{

    /**
     * @return \app\models\User|UserResource|bool|null
     * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = UserResource::findByUsername($this->username);
        }

        return $this->_user;
    }
}
