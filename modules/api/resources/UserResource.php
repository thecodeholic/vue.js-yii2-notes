<?php
/**
 * User: TheCodeholic
 * Date: 3/7/2020
 * Time: 9:27 AM
 */

namespace app\modules\api\resources;


use app\models\User;

/**
 * Class UserResource
 *
 * @author Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package app\modules\api\resources
 */
class UserResource extends User
{
    public function fields()
    {
        return [
            'id', 'username', 'access_token'
        ];
    }
}
