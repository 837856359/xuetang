<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */         

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
class OutlineController extends BaseController
{
    public $enableCsrfValidation = false; 
        public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }
    public function actionSave_doc(){

        $targetFolder = '/xuetang/uploads/doc'; // Relative to the root

        $verifyToken = md5('unique_salt' . $_POST['timestamp']);

        if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
            $tempFile = $_FILES['Filedata']['tmp_name'];
            $targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
            //$name_path=$_FILES['Filedata']['name'];
            $time=time().rand(100,999);
            $name=$time.".doc";
            $targetFile = rtrim($targetPath,'/') . '/' . $name;
            // Validate the file type
            $fileTypes = array('doc','pdf','docx','rtf'); // File extensions
            $fileParts = pathinfo($_FILES['Filedata']['name']);
            if (in_array($fileParts['extension'],$fileTypes)) {
                move_uploaded_file($tempFile,$targetFile);
                echo json_encode($targetFile);
            } else {
                echo 1;
                die;

            }
        }
    }

   //大纲上传
   public function actionSave()
    {
        header("content-type:text/html;charset=utf-8");
        $file=$_POST['url'];
        $course=$_POST['course'];          //课程kidintro
        $intro=$_POST['intro'];          //大纲介绍
        $addtime=date("Y-m-d H:i:s");
        $url=str_replace("\/","/",$file);
        $url2=str_replace($_SERVER['DOCUMENT_ROOT'],"",$url);
        $new_url = substr($url2,0,  strrpos($url2, '.'));
        $k_name = substr($new_url,  strrpos($new_url, '/')+1);
        //echo $new_url;die;
        $sql="insert into outline (know,ktime,ch_id,video_path,k_name) VALUES ('$intro','$addtime','$course','$url2','$k_name')";
        if(Yii::$app->db->createCommand($sql)->query()){

            echo '<script>alert("新的大纲已经添加成功！");location.href="index.php?r=user/outline/dagang_list"</script>';
        }
    else{
echo '<script>alert("大刚添加失败，请重新添加！");location.href="index.php?r=user/outline/add_dagang"</script>';
}
    } 
    //大纲下载
    public function actionDagang_down(){
        header("content-type:text/html;charset=utf-8");
        $file_name=$_SERVER['DOCUMENT_ROOT'].$_GET['file'];
        //echo $file_name;die;
        if(!file_exists($file_name)){
            echo "<script>alert('文件不存在，请重新选择');history.go(-1);</script>";
            die;
        }
        //$file_name=$_SERVER['HTTP_HOST'].$_GET['file'];
        //http://www.xuetang.com/uploads/doc/XuetangDagang1441887530.doc
        //www.xuetang.com/uploads/doc/XuetangDagang1441887530.doc
        //http://www.xuetang.com/uploads/doc/XuetangDagang1441887530.doc
        $name=substr($file_name,35);
        //echo $name;die;
        header("Content-type:application/octet-stream");
        header("Accept-Ranges:bytes");
        header("Accept-Length:".strlen($file_name));
        header('Content-Disposition:attachment;filename='.$name);
        //header("Pragma:no-cache");
        //header("Expires:0");
        readfile($file_name);
        //echo $file_name;
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
        $two=$_POST['two'];
        $sql="select * from course where mid='$two'"; 
		$three= Yii::$app->db->createCommand($sql)->queryAll();
		//print_r($three);die;
		echo json_encode($three);
       
    }
	public function actionCkcourse(){
		$course=$_POST['course'];
		$sql="select * from chapter where cid='$course'";
		$three= Yii::$app->db->createCommand($sql)->queryAll();
		echo json_encode($three);
	}
	//批量删除
	public function actionDelall(){
		//echo 11;
		$id=Yii::$app->request->post('kid');
		//print_r($id);die;
		$kid=implode(",",$id);
		$sql="delete from outline where kid in ($kid)";
		$data=Yii::$app->db->createCommand($sql)->query();

		if($data){
			echo 1;
		}else{
			echo 0; 
		}
	}
//大纲搜索
    public function actionSearch_dagang(){
        $user=Yii::$app->request->post('user');
        $sql="select * from outline inner join course on outline.ch_id=course.cid where know like '%$user%' order by kid desc";
        $aer= Yii::$app->db->createCommand($sql)->queryAll();
        $str['date']=$aer;
        echo json_encode($str);
    }
      //大纲列表
    public function actionDagang_list(){
        if(!empty($_GET['pag'])){
            $pag=$_GET['pag'];
        }else{
               $pag=1; 
        }
        $sql="select count(*) from outline";
        $two= Yii::$app->db->createCommand($sql)->queryAll();
        $num=$two[0]['count(*)'];//获取数据总数
        //echo $num;die;
        $page=10;                 //每页显示条数
        $sum=ceil($num/$page);    //一共多少页
        //echo $sum;die;
        $page_pian=($pag-1)*$page;
        $sql2="select kid,know,ktime,ch_id,video_path,cid,cname from outline inner join course on outline.ch_id=course.cid order by kid desc limit $page_pian,$page";
        $two2= Yii::$app->db->createCommand($sql2)->queryAll();
        
                 //上一页
         if($pag-1<=1){
             $up=1;
         }else{
             $up=$pag-1;
         }
         //下一页
         if($pag+1>=$sum){
             $down=$sum;
         }else{
             $down=$pag+1;
         }
         //$up=123;
         $str="";
         $str.='<ul id="pagination-flickr">';
         $str.='<li><a href="index.php?r=user/outline/dagang_list&pag=1">首页</a></li>';
         $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$up"."'>上一页</a></li>";
         $one=$pag-1;
         $two=$pag+1;
         if($pag<=1){
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag=1'>1</a></li>";
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag=2'>2</a></li>";
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag=3'>3</a></li>";
         }else if($two>=$sum){
             $one=$sum-1;
             $two=$sum-2;
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$two"."'>".$two."</a></li>";
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$one"."'>".$one."</a></li>";
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$sum"."'>".$sum."</a></li>";
         }else{
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$one"."'>".$one."</a></li>";
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$pag"."'>".$pag."</a></li>";
             $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$two"."'>".$two."</a></li>";
         }
         $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$down"."'>下一页</a></li>";
         $str.="<li><a href='index.php?r=user/outline/dagang_list&pag="."$sum"."'>末页</a></li>";
         $str.="</ul>";
	if($num==0){
		$str="";
	}
         //echo $str;die;
         return $this->render('daganglist',["two"=>$two2,"str2"=>$str]);

}

    //大纲单个删除
    public function actionList_del(){
        $id=Yii::$app->request->post('kid');
        $sql="delete from outline where kid='$id'";
        $data=Yii::$app->db->createCommand($sql)->query();
        if($data){
            echo 1;
        }else{
            echo 0;
        }
    }

    //大纲批量删除
    public function actionRecycles(){
        $id=Yii::$app->request->post('qid');
        $kid=implode(",",$id);
        $sql="delete from outline where kid in ($kid)";
        $data=Yii::$app->db->createCommand($sql)->query();
        if($data){
            echo 1;
        }else{
            echo 0;
        }
    }

       public function actionAdd_dagang(){
       
        $sql='select * from chapter'; 
        $one= Yii::$app->db->createCommand($sql)->queryAll();

        $sql='select c_id,c_name from college'; 
        $college= Yii::$app->db->createCommand($sql)->queryAll();
        $sql1='select * from stage'; 
        $stage= Yii::$app->db->createCommand($sql1)->queryAll();
            return $this->render('adddagang',["one"=>$one,'college'=>$college,'stage'=>$stage]);

} 
}

