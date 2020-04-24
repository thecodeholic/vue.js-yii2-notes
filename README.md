

# Vue.js & Yii 2 REST API notes application
_________________________________

FEATURES
-------------------

 - Login
 - Registration
 - Create/Update/Delete personal notes
 - SCSS
 - Several Vue.js layouts
 - Redirect to login page when accessing notes with invalid API access token
 - Redirect to home page when accessing login or registration page with valid API access token

DEMO
-------------------
Vue.js notes demo - https://notes.thecodeholic.com
<br>
Yii2 REST API - https://api.notes.thecodeholic.com


REQUIREMENTS
------------

 - PHP >=5.6.0
 
#### For development you need the following tools
 - [Node.js](https://nodejs.org/en/download/) and npm (For vue.js application you need to have node.js installed)
 - [Composer](https://getcomposer.org/download/)
 - [Postman](https://www.postman.com/downloads/) is optional but helpful tool to test your REST API

INSTALLATION
------------
 1. Clone the project
 1. Go to the project root folder
 1. And run `composer install` 
 1. If you want customize vue.js side, go to the `vuejs` folder 
 1. And run `npm install`

CONFIGURATION
-------------

### Database
1. Create database
2. Create `config/db.local.php` and return the following configuration array.

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=vuejsyii2notes',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- This application was created while recording [the following Youtube tutorial)(https://youtu.be/7vrctmDQYW4)
- If you find it helpful, Give it a star and leave a thumbs up on Youtube Video
- If you loved it, support me by subscribing on my [Youtube channel](http://youtube.com/TheCodeholic).
