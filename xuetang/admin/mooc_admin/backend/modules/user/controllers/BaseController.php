<?php
      

namespace backend\modules\user\controllers;
use Yii;
use backend\modules\user\models\User;
use backend\modules\user\models\UserSeach;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\PHPExcel;
use yii\data\Pagination;
use app\models\Comment;
use yii\data\ArrayDataProvider;


/**
 * UserController implements the CRUD actions for User model.
 */
class BaseController extends Controller
{
public function init(){
		parent::init();
	}

}
