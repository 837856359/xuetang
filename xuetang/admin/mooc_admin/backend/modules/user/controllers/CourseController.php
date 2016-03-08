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

class CourseController extends BaseController

{

    public $enableCsrfValidation = false; 

    //显示课程列表、

/*public function beforeAction($action)

{

    

        //Yii::$app->beforeAction();

         $con=$this->id;

         $url=Yii::$app->request->getHostInfo().Yii::$app->request->url;

         $newa = substr(substr($url,strrpos($url,'/')),1);

         $stat=array_key_exists('uid', $_SESSION);

         if($stat!=1){

            echo "<script>alert('请您先登录');location.href='index.php?r=user/user/login';</script>";

         }else{

            $id=$_SESSION['uid'];

            $sql="select * from think_role_user inner join think_access on think_role_user.role_id=think_access.role_id inner join think_node on think_access.node_id=think_node.id where think_role_user.user_id='$id'";

            $arr=Yii::$app->db->createCommand($sql)->queryAll();

            for($i=0;$i<count($arr);$i++){

                $data[]=$arr[$i]['name'];

            }

            if(!in_array($newa, $data)){

                echo "<script>alert('您没有此访问权限');</script>";

                die;

            }else{

                $this->actionCourse_list();

            }

            //header("location:index.php?r=user/$con/$newa");



         }



}

*/

    public function actionCourse_list(){

	$where = 'where course.c_id = college.c_id and course.sid = stage.sid';
        //var_dump($_REQUEST);exit;
        $search_params = '';

        if (isset($_REQUEST['course'])) {

            $course = $_REQUEST['course'];
            //echo $course;die;
             if (isset($_GET['search'])) {

                $search = base64_decode($search);

            }

            $where.= " and course.cname like '%$course%'";

            //$where.=" order by course.addtime desc"; 

            $search = base64_encode($search);

            $search_params = '&search=' . $search;
            //echo $search_params;die;

        }else{
            $course = '';
        }
        //echo 1;exit;
         if (isset($_REQUEST['college'])) {

            $college = $_REQUEST['college'];
            //echo $course;die;
            if (isset($_GET['search'])) {

                $search = base64_decode($search);

            }

            $where.= " and college.c_name like '%$college%'";

            //$where.=" order by course.addtime desc"; 

            $search = base64_encode($search);

            $search_params = '&search=' . $search;
            //echo $search_params;die;

        }else{
            $college = '';
        }

         if (isset($_REQUEST['stage'])) {

            $stage = $_REQUEST['stage'];
            //echo $course.$college.$stage;die;
            if (isset($_GET['search'])) {

                $search = base64_decode($search);

            }

            $where.= " and stage.s_name like '%$stage%'";

            $where.=" order by course.addtime desc"; 
            //echo $where;die;
            $search = base64_encode($search);

            $search_params = '&search=' . $search;
            
        }else{
            $stage = '';
        }

		//echo $search_params;die;
        //echo $where;die;
		#总记录数

        $sql = "select count(*) num from course,college,stage $where";

        $count = Yii::$app->db->createCommand($sql)->queryScalar();
        //echo $count;exit;
        $listRows = 20;

        $pages = ceil($count / $listRows);

        if (isset($_GET['p'])) {

            $page = $_GET['p'];

        } else {

            $page = 1;

        }

        //偏移量

        $firstRow = ($page - 1) * $listRows;



        $sql = "select * from course,college,stage $where  limit $firstRow,$listRows";

		//echo $sql;die;

        $one = Yii::$app->db->createCommand($sql)->queryAll();

		//print_r($one);die;



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

        $str .= "<li><a href='index.php?r=user/course/course_list&p=1" . $search_params . "'>&laquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/course/course_list&p=$uppage" . $search_params . "'>&lsaquo;</a></li>";



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

                $str .= "<li><a href='index.php?r=user/course/course_list&p=$i" . $search_params . "'>$i</a></li>";

            }

        }



        $str .= "<li><a href='index.php?r=user/course/course_list&p=$downpage" . $search_params . "'>&rsaquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/course/course_list&p=$pages

		" . $search_params . "'>&raquo;</a></li>";

        $str .= "</ul></div>";

	if($count==0){

		$str="";

	}

        return $this->render('course_list',["two"=>$one,"pagenum"=>$str,"course"=>$course,"college"=>$college,"stage"=>$stage]);

    }

    //执行课程添加

    public function actionAdd_image(){

        $targetFolder = '/xuetang/Public/img/course'; // Relative to the root

        $verifyToken = md5('unique_salt' . $_POST['timestamp']);

        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {

	$tempFile = $_FILES['Filedata']['tmp_name'];

	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;

	$targetFile = rtrim($targetPath,'/') . '/' . time().rand(100,999).'.jpg';;

	// Validate the file type

	$fileTypes = array('jpg','jpeg','gif','png'); // File extensions

	$fileParts = pathinfo($_FILES['Filedata']['name']);

        $session = Yii::$app->session;

        $session->open();

        $session->set('language','123');

	if (in_array($fileParts['extension'],$fileTypes)) {

		move_uploaded_file($tempFile,$targetFile);

		echo json_encode($targetFile);

	} else {

		echo 'Invalid file type.';

	}

            }

    }

    public function actionAdd_video(){

        $targetFolder = '/xuetang/uploads/video'; // Relative to the root

        $verifyToken = md5('unique_salt' . $_POST['timestamp']);

        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {

	$tempFile = $_FILES['Filedata']['tmp_name'];

	$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;

	$file_name = time().rand(100,999).'.mp4';

	$targetFile = rtrim($targetPath,'/') . '/' . $file_name;

	// Validate the file type

	$fileTypes = array('mp4','qlv'); // File extensions

	$fileParts = pathinfo($_FILES['Filedata']['name']);

	if (in_array($fileParts['extension'],$fileTypes)) {

		move_uploaded_file($tempFile,$targetFile);

		echo json_encode('http://172.18.8.125/video/'.$file_name);

	} else {

		echo 'Invalid file type.';

	}

            }

    }

    public function actionAdd_course(){

        //print_r($_POST);die;

        //普通数据

            $cid=$_POST['c_id'];

            $mid=$_POST['mid'];

            $sid=$_POST['sid'];

            $cname=$_POST['cname'];

            $intro=$_POST['intro'];

            $cimg = $_POST['cimg'];

            $sort = $_POST['sort'];

            $video = $_POST['video'];

            //$video = '';

            $is_hot=$_POST['is_hot'];

            $is_new=$_POST['is_new'];

            $is_recommend=$_POST['is_recommend'];

            $teacher=$_POST['teacher'];

            $video=str_replace("\/","/",$video);

            $video=str_replace($_SERVER['DOCUMENT_ROOT'],"",$video);

            $cimg=str_replace("\/","/",$cimg);

            $cimg=str_replace($_SERVER['DOCUMENT_ROOT'],"",$cimg);

            $time=date('Y-m-d H:i:s',time());

            //echo $cimg;die;

            $sql="insert into course(c_id,mid,sid,cname,intro,cimg,video,addtime,teacher_id,is_hot,is_new,is_recommend,sort) value($cid,$mid,$sid,'$cname','$intro','$cimg','$video','$time','$teacher','$is_hot','$is_new','$is_recommend','$sort')";

            //echo $sql;die;

            if(Yii::$app->db->createCommand($sql)->query()){

                echo "<script>alert('添加成功');location.href='index.php?r=user/course/course_list';</script>";

            }

	}

        //章节添加

           public function actionAdd_chapter(){

               $cid=$_POST['cid'];

		$teacher=$_POST['teacher'];

                if($_POST['num']==1){

                $sql="update course set end_status=1 where cid=$cid";

                Yii::$app->db->createCommand($sql)->query();

                }

               $notice=$_POST['notice'];

               $ch_name=$_POST['ch_name'];

               $time=date('Y-m-d H:i:s',time());

               $sql="insert into chapter(cid,ch_name,notice,addtime,teacher_id) value('$cid','$ch_name','$notice','$time','$teacher')";

               if(Yii::$app->db->createCommand($sql)->query()){

                echo "<script>alert('添加成功');location.href='index.php?r=user/course/chapter_list';</script>";

            }

           }

     public function actionCktwo()

    {

        $one=$_POST['one'];

		//print_r($one);die;

        $sql="select * from major where c_id='$one'"; 

        $two= Yii::$app->db->createCommand($sql)->queryAll();

        //print_r($two);die;

        echo json_encode($two);

       

    }

     public function actionCkthree()

    {

        $sql1='select * from stage'; 

        $stage= Yii::$app->db->createCommand($sql1)->queryAll();

		//print_r($three);die;

		echo json_encode($stage);

       

    }

    public function actionCkfour(){

        $one=$_POST['one'];

        $two=$_POST['two'];

        $three=$_POST['three'];

        $sql="select * from course where mid='$two' and c_id = '$one' and sid = '$three'"; 

	$three= Yii::$app->db->createCommand($sql)->queryAll();

		//print_r($three);die;

		echo json_encode($three);

    }

	//显示课程页面

    public function actionCourse()

    {

        $sql='select c_id,c_name from college'; 

		$one= Yii::$app->db->createCommand($sql)->queryAll();

		$sql1='select * from stage'; 

		$stage= Yii::$app->db->createCommand($sql1)->queryAll();

                $sql2="select * from teacher";

			$teacher= Yii::$app->db->createCommand($sql2)->queryAll();

        return $this->render('course',["one"=>$one,"stage"=>$stage,"teacher"=>$teacher]);

    }

//显示章节添加表单

	 public function actionChapter()

    {

        $sql='select c_id,c_name from college'; 

        $college= Yii::$app->db->createCommand($sql)->queryAll();

	$sql2="select * from teacher";

        $teacher= Yii::$app->db->createCommand($sql2)->queryAll();

        return $this->render('college',['college'=>$college,"teacher"=>$teacher]);

 

    }

    public function actionChapter_list(){

	$where = 'where course.c_id = college.c_id and course.sid = stage.sid and chapter.cid = course.cid ';

        $search_params = '';

        if (isset($_REQUEST['search'])) {

            $search = $_REQUEST['search'];

            if (isset($_GET['search'])) {

                $search = base64_decode($search);

            }

            $where.= " and chapter.ch_name like '%$search%'";

            $where.=" order by chapter.addtime  desc";

            $search = base64_encode($search);

            $search_params = '&search='. $search;

        }

		#总记录数

        $sql = "select count(*) num from chapter,course,college,stage $where";

        $count = Yii::$app->db->createCommand($sql)->queryScalar();

        $listRows = 20;

        $pages = ceil($count / $listRows);

		//echo $pages;die;

        if (isset($_GET['p'])) {

            $page = $_GET['p'];

        } else {

            $page = 1;

        }

        //偏移量

        $firstRow = ($page - 1) * $listRows;



        $sql = "select * from chapter,course,college,stage $where limit $firstRow,$listRows";

        //echo $sql;

        $one = Yii::$app->db->createCommand($sql)->queryAll();

		//print_r($one);die;



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

        $str .= "<li><a href='index.php?r=user/course/chapter_list&p=1" . $search_params . "'>&laquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/course/chapter_list&p=$uppage" . $search_params . "'>&lsaquo;</a></li>";



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

                $str .= "<li><a href='index.php?r=user/course/chapter_list&p=$i" . $search_params . "'>$i</a></li>";

            }

        }



        $str .= "<li><a href='index.php?r=user/course/chapter_list&p=$downpage" . $search_params . "'>&rsaquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/course/chapter_list&p=$pages

		" . $search_params . "'>&raquo;</a></li>";

        $str .= "</ul></div>";

        return $this->render('chapter_list',["two"=>$one,"pagenum"=>$str]);

    }

    public function actionDel(){

		$id=Yii::$app->request->post('qid');

		$sql="delete from course where cid='$id'";

		$data=Yii::$app->db->createCommand($sql)->query();

		if($data){

			echo 1;

		}else{

			echo 0; 

		}

	}

    

    #修改状态

    public function actionUpd_status(){

        $type = Yii::$app->request->post('type');

        $status = Yii::$app->request->post('status');

        $cid = Yii::$app->request->post('cid');

        if($status == 1){

            $sql="update course set $type=0 where cid=$cid";

            $rst = Yii::$app->db->createCommand($sql)->query();

            if($rst){

                echo 1;

            }else{

                echo 0;

            }

        }else{

            $sql="update course set $type=1 where cid=$cid";

            $rst = Yii::$app->db->createCommand($sql)->query();

            if($rst){

                echo 1;

            }else{

                echo 0;

            }

        }

    }

    

    public function actionCh_del(){

        $id=Yii::$app->request->post('qid');

		$sql="delete from chapter where ch_id='$id'";

		$data=Yii::$app->db->createCommand($sql)->query();

		if($data){

			echo 1;

		}else{

			echo 0; 

		}

    }

    public function actionRecycles(){

            $id=Yii::$app->request->post('pid');

            $id=implode(',',$id);

            $sta=Yii::$app->request->post('sta');

            if($sta==1){

                $sql="delete from course where cid in ($id)";

            }else{

                $sql="delete from chapter where ch_id in ($id)";

            }

		

                //echo $sql;die;

		$data=Yii::$app->db->createCommand($sql)->query();

		if($data){

			echo 1;

		}else{

			echo 0; 

		}

    }

    public function actionChapter_update(){


        $id=$_GET['id'];

        $sql="select * from chapter where ch_id=$id"; 

        $data= Yii::$app->db->createCommand($sql)->queryAll();

        $cid=$data[0]['cid'];

        $college_sql='select c_id,c_name from college'; 

        $college= Yii::$app->db->createCommand($college_sql)->queryAll();

        $course_sql="select * from course where cid=$cid";

        $course= Yii::$app->db->createCommand($course_sql)->queryAll();

        //print_r($data);die;

        return $this->render('chapter_update',["college"=>$college,"course"=>$course,"data"=>$data]);

    }

    public function actionChapter_update_save(){

                $ch_id=$_POST['ch_id'];

                $cid=$_POST['cid'];

                if($_POST['num']==1){

                $sql="update course set end_status=1 where cid=$cid";

                Yii::$app->db->createCommand($sql)->query();

                }

               $notice=$_POST['notice'];

               $ch_name=$_POST['ch_name'];

               $time=date('Y-m-d H:i:s',time());

               $sql="UPDATE chapter set cid=$cid,ch_name='$ch_name',notice='$notice',addtime='$time' WHERE ch_id=$ch_id";

               if(Yii::$app->db->createCommand($sql)->query()){

                echo "<script>alert('修改成功');location.href='index.php?r=user/course/chapter_list';</script>";

            }

    }

    public function actionCourse_up(){

        $where = 'where course.c_id = college.c_id and course.sid = stage.sid and course.mid=major.m_id';

        $id=$_GET['id'];

        $where.= " and course.cid='$id'";

        $data_sql="select * from course,college,stage,major $where";

        $data= Yii::$app->db->createCommand($data_sql)->queryAll();
        //print_r($data);die;
        $sql='select c_id,c_name from college'; 

        $one= Yii::$app->db->createCommand($sql)->queryAll();

        $sql1='select * from stage'; 

        $stage= Yii::$app->db->createCommand($sql1)->queryAll();

        $sql2="select * from teacher";

        $teacher= Yii::$app->db->createCommand($sql2)->queryAll();

        $sql3="select * from major";

        $major= Yii::$app->db->createCommand($sql3)->queryAll();
       // print_r($major);die;
        return $this->render('course_update',["one"=>$one,"stage"=>$stage,"teacher"=>$teacher,"data"=>$data,"major"=>$major]);

    }

    public function actionCourse_up_save(){

            $cid=$_POST['cid'];

            $c_id=$_POST['c_id'];

            $mid=$_POST['mid'];

            $sid=$_POST['sid'];

            $cname=$_POST['cname'];

            $intro=$_POST['intro'];

            $cimg = $_POST['cimg'];

            $sort = $_POST['sort'];

            //$video = $_POST['video'];

            $video = '';

            $is_hot=$_POST['is_hot'];

            $is_new=$_POST['is_new'];

            $is_recommend=$_POST['is_recommend'];

            $teacher=$_POST['teacher'];

             //$sql="insert into course(c_id,mid,sid,cname,intro,,addtime,,is_hot,is_new,is_recommend,sort) value($cid,$mid,$sid,'$cname','$intro','$cimg','$video','$time','$teacher','$is_hot','$is_new','$is_recommend','$sort')";

            $sql="UPDATE course set c_id='$c_id',mid='$mid',sid='$sid',cname='$cname',intro='$intro',addtime='$time',teacher_id='$teacher',is_hot='$is_hot',is_new='$is_new',is_recommend='$is_recommend',sort='$sort' where cid='$cid'";

        

            if(Yii::$app->db->createCommand($sql)->query()){

                echo "<script>alert('修改成功');location.href='index.php?r=user/course/course_list';</script>";

            }

    }

}

