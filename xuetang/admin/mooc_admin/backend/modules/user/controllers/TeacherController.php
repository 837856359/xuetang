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



header("content-type:text/html;charset=utf-8");



/**

 * UserController implements the CRUD actions for User model.

 */

class TeacherController extends BaseController {



    public $enableCsrfValidation = false;



    public function behaviors() {

        return [

            'verbs' => [

                'class' => VerbFilter::className(),

                'actions' => [

                    'delete' => ['post'],

                ],

            ],

        ];

    }

    //讲师列表

    public function actionTeacher_list() {

        

		//echo $search_params;die;

		#总记录数

        

        $cllege= array('','软件工程学院',

        '传媒学院','移动通信学院','云计算学院','建筑学院',

        '网络工程学院','国际经贸学院','高翻学院','游戏学院','专业基础课程','公共基础课程');



        $sql = "select count(*) num from teacher";

        $count = Yii::$app->db->createCommand($sql)->queryScalar();

        $listRows = 10;

        $pages = ceil($count / $listRows);

        if (isset($_GET['p'])) {

            $page = $_GET['p'];

        } else {

            $page = 1;

        }

        //偏移量

        $firstRow = ($page - 1) * $listRows;



        $sql = "select * from teacher  limit $firstRow,$listRows";

        //echo $sql;die;

        $one = Yii::$app->db->createCommand($sql)->queryAll();

	//	print_r($one);die;



        #页码

        $uppage = $page - 1;

        if ($uppage <= 1) {

            $uppage = 1;

        }

        $downpage = $page + 1;

        if ($downpage >= $pages) {

            $downpage = $pages;

        }

        $str = "<div style='width:100%;text-align:right;'><ul class='pagination' style='margin-top:0;'>";

        $str .= "<li><a href='index.php?r=user/teacher/teacher_list&p=1'>&laquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/teacher/teacher_list&p=$uppage'>&lsaquo;</a></li>";



        $page_start = $page >= 10 ? $page - 8 : 1;



        if ($pages > 10) {

            $page_end = 10;

            $page_end = $page >= 10 ? $page + 1 : $page_end;

            if ($page_end >= $pages) {

                $page_end = $pages;

                $page_start = $pages - 9;

            }

        } else {

            $page_end = $pages;

        }

        for ($i = $page_start; $i <= $page_end; $i++) {

            if ($page == $i) {

                $str .= "<li class='active disabled'><a href='javascript:void(0)'>$i</a></li>";

            } else {

                $str .= "<li><a href='index.php?r=user/teacher/teacher_list&p=$i" . $search_params . "'>$i</a></li>";

            }

        }



        $str .= "<li><a href='index.php?r=user/teacher/teacher_list&p=$downpage" . $search_params . "'>&rsaquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/teacher/teacher_list&p=$pages

		" . $search_params . "'>&raquo;</a></li>";

        $str .= "</ul></div>";

	if($count==0){

		$str="";

	}

        return $this->render('teacher_list',["two"=>$one,"pagenum"=>$str,'cllege'=>$cllege]);

    }

    



    //讲师添加

    public function actionDo_add() {

        

        $c_id = $_POST['c_id'];

       

        $job = $_POST['job'];

        $name = $_POST['name'];

        $t_img = str_replace($_SERVER['DOCUMENT_ROOT'],'', $_POST['t_img']);


        $sql = "insert into teacher(name,job,t_img,c_id) values('$name','$job','$t_img','$c_id')";

       

        if (Yii::$app->db->createCommand($sql)->query()) {

            echo "<script>alert('添加成功');location.href='index.php?r=user/teacher/add_teacher';</script>";

        }else{

            echo "<script>alert('添加成功');location.href='index.php?r=user/teacher/add_teacher';</script>";

        }

    }

    public function actionTeacher_check()
    {
        $name = $_GET['name'];
        $sql = "select * from teacher where name = '$name'";
        $row = Yii::$app->db->createCommand($sql)->queryAll();
        if($row)
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
    }
    

    #添加头像

    public function actionAdd_tou(){

		$targetFolder = '/xuetang/Public/img/teacher'; 

		$verifyToken = md5('unique_salt' . $_POST['timestamp']);

		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {

			$tempFile = $_FILES['Filedata']['tmp_name'];

                        ///htdocs/mooc

			$targetPath = $_SERVER['DOCUMENT_ROOT']. $targetFolder;

                        //echo $targetPath;die;

			//$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];

			$targetFile = rtrim($targetPath,'/') . '/' . time().rand(100,999).'.jpg';

			$fileTypes = array('jpg','jpeg','gif','png'); // File extensions

			$fileParts = pathinfo($_FILES['Filedata']['name']);

			if (in_array($fileParts['extension'],$fileTypes)) {

				//move_uploaded_file($tempFile,$targetFile);

				move_uploaded_file($tempFile, $targetFile);

				echo $targetFile;

			} else {

				echo 'Invalid file type.';

			}

		}

	}

    

    public function actionCktwo() {

        $one = $_POST['one'];

        //print_r($one);die;

        $sql = "select * from major where c_id='$one'";

        $two = Yii::$app->db->createCommand($sql)->queryAll();

        //print_r($two);die;

        echo json_encode($two);

    }



    public function actionCkthree() {

        $sql1 = 'select * from stage';

        $stage = Yii::$app->db->createCommand($sql1)->queryAll();

        //print_r($three);die;

        echo json_encode($stage);

    }



    public function actionCkfour() {

        $one = $_POST['one'];

        $two = $_POST['two'];

        $three = $_POST['three'];

        $sql = "select * from course where mid='$two' and c_id = '$one' and sid = '$three'";

        $three = Yii::$app->db->createCommand($sql)->queryAll();

        //print_r($three);die;

        echo json_encode($three);

    }



    //显示课程页面

    public function actionCourse() {

        $sql = 'select c_id,c_name from college';

        $one = Yii::$app->db->createCommand($sql)->queryAll();

        $sql1 = 'select * from stage';

        $stage = Yii::$app->db->createCommand($sql1)->queryAll();

        $sql2 = "select * from teacher";

        $teacher = Yii::$app->db->createCommand($sql2)->queryAll();

        return $this->render('course', ["one" => $one, "stage" => $stage, "teacher" => $teacher]);

    }



//显示章节添加表单

    public function actionAdd_teacher() {

        $sql = 'select * from chapter';

        $one = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = 'select c_id,c_name from college';

        $college = Yii::$app->db->createCommand($sql)->queryAll();

        //print_r($college);die;

        $sql1 = 'select * from stage';

        $stage = Yii::$app->db->createCommand($sql1)->queryAll();

        //$this->render('college',['one'=>$one]);

        //$this->render('college',$college);

        //$this->render('college',$stage);

        return $this->render('add_teacher', ["one" => $one, 'college' => $college, 'stage' => $stage]);

    }



    public function actionDel() {

        $id = Yii::$app->request->post('qid');

        $sql = "delete from course where cid='$id'";

        $data = Yii::$app->db->createCommand($sql)->query();

        if ($data) {

            echo 1;

        } else {

            echo 0;

        }

    }



    #修改状态



    public function actionUpd_status() {

        $type = Yii::$app->request->post('type');

        $status = Yii::$app->request->post('status');

        $cid = Yii::$app->request->post('cid');

        if ($status == 1) {

            $sql = "update course set $type=0 where cid=$cid";

            $rst = Yii::$app->db->createCommand($sql)->query();

            if ($rst) {

                echo 1;

            } else {

                echo 0;

            }

        } else {

            $sql = "update course set $type=1 where cid=$cid";

            $rst = Yii::$app->db->createCommand($sql)->query();

            if ($rst) {

                echo 1;

            } else {

                echo 0;

            }

        }

    }



    public function actionCh_del() {

        $id = Yii::$app->request->post('qid');

        $sql = "delete from chapter where ch_id='$id'";

        $data = Yii::$app->db->createCommand($sql)->query();

        if ($data) {

            echo 1;

        } else {

            echo 0;

        }

    }



    public function actionRecycles() {

        $id = Yii::$app->request->post('pid');

        $id = implode(',', $id);

        $sta = Yii::$app->request->post('sta');

        if ($sta == 1) {

            $sql = "delete from course where cid in ($id)";

        } else {

            $sql = "delete from chapter where ch_id in ($id)";

        }



        //echo $sql;die;

        $data = Yii::$app->db->createCommand($sql)->query();

        if ($data) {

            echo 1;

        } else {

            echo 0;

        }

    }


    //讲师修改页面
    public function actionTeacher_update() {

        $id = $_GET['id'];

        $sql = "select * from course ";

        $data = Yii::$app->db->createCommand($sql)->queryAll();

        $sql = 'select c_id,c_name from college';

        $one = Yii::$app->db->createCommand($sql)->queryAll();

        $sql1 = 'select * from stage';

        $stage = Yii::$app->db->createCommand($sql1)->queryAll();

        $sql2 = "select * from teacher where id = ".$id;
        $teacher = Yii::$app->db->createCommand($sql2)->queryOne();
        // var_dump($one);var_dump($teacher);

        return $this->render('teacher_update', ["one" => $one, "stage" => $stage, "teacher" => $teacher, "data" => $data]);

    }

    

    public function actionTeacher_up_save(){

            // var_dump($_POST);
            // var_dump($_FILES);
            
            $id=$_POST['id'];

            $c_id=$_POST['c_id'];

            $t_cid=$_POST['mid'];

            $name=$_POST['name'];

            $job = $_POST['job'];

            if(!empty($_FILES))
            {
                echo 1;
            }
            //$intro=$_POST['intro'];

            $teacher=$_POST['teacher'];

            $time = date("Y-m-d H:i:s");

             //$sql="insert into course(c_id,mid,sid,cname,intro,,addtime,,is_hot,is_new,is_recommend,sort) value($cid,$mid,$sid,'$cname','$intro','$cimg','$video','$time','$teacher','$is_hot','$is_new','$is_recommend','$sort')";

            $sql="UPDATE teacher set c_id='$c_id',t_cid='$t_cid',name='$name',job='$job' where id='$id'";

            if(Yii::$app->db->createCommand($sql)->query()){

                echo "<script>alert('修改成功');location.href='index.php?r=user/teacher/teacher_list';</script>";

            }

    }

}

