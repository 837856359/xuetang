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

class VideoController extends BaseController{

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



	/*public function actionList(){

	

	//普通列表

		if(!empty($_GET['pag'])){

	       $pag=$_GET['pag'];

	   	}else{

	       $pag=1; 

	   	}

	   	$sql="select count(*) from knowpoint";

       	$two= Yii::$app->db->createCommand($sql)->queryAll();

       	//获取数据总数

       	$num=$two[0]['count(*)'];

       	//每页显示条数

       	$page=10;             

       	//总页数

        $sum=ceil($num/$page); 

        $page_limit=($pag-1)*$page;

        $sql2="select knowpoint.kid,course.cname,chapter.ch_name,knowpoint.know from knowpoint,chapter,course where knowpoint.ch_id=chapter.ch_id and chapter.cid=course.cid order by knowpoint.kid desc limit $page_limit,$page";

        $know_info= Yii::$app->db->createCommand($sql2)->queryAll();

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

        $str="";

        $str.='<ul id="pagination-flickr">';

        $str.='<li><a href="index.php?r=user/video/list&pag=1">首页</a></li>';

        $str.="<li><a href='index.php?r=user/video/list&pag="."$up"."'>上一页</a></li>";

        $one=$pag-1;

        $two=$pag+1;

        if($pag<=1){

            $str.="<li><a href='index.php?r=user/video/list&pag=1'>1</a></li>";

            $str.="<li><a href='index.php?r=user/video/list&pag=2'>2</a></li>";

            $str.="<li><a href='index.php?r=user/video/list&pag=3'>3</a></li>";

        }else if($two>=$sum){

            $one=$sum-1;

            $two=$sum-2;

            $str.="<li><a href='index.php?r=user/video/list&pag="."$two"."'>".$two."</a></li>";

            $str.="<li><a href='index.php?r=user/video/list&pag="."$one"."'>".$one."</a></li>";

            $str.="<li><a href='index.php?r=user/video/list&pag="."$sum"."'>".$sum."</a></li>";

        }else{

            $str.="<li><a href='index.php?r=user/video/list&pag="."$one"."'>".$one."</a></li>";

            $str.="<li><a href='index.php?r=user/video/list&pag="."$pag"."'>".$pag."</a></li>";

            $str.="<li><a href='index.php?r=user/video/list&pag="."$two"."'>".$two."</a></li>";

        }

        $str.="<li><a href='index.php?r=user/video/list&pag="."$down"."'>下一页</a></li>";

        $str.="<li><a href='index.php?r=user/video/list&pag="."$sum"."'>末页</a></li>";

        $str.="</ul>";

        //echo $str;die;

        foreach ($know_info as $key => $val) {

        	$kid=$val['kid'];

        	$sql3="select video_id,video_name,video_path from video where kid=$kid";

        	$video_info= Yii::$app->db->createCommand($sql3)->queryAll();

        	if($video_info){

        		$know_info[$key]['video']=$video_info;

        	}else{

        		$know_info[$key]['video']="暂无视频";

        	}

        }

	if($num==0){

		$str="";

	}

        return $this->render('list',["vide_list"=>$know_info,"str"=>$str]);

		

 

    }*/

	

	public function actionList(){

		$where = 'where knowpoint.ch_id=chapter.ch_id and chapter.cid=course.cid';

        $search_params = '';

        if (isset($_REQUEST['search'])) {

            $search = $_REQUEST['search'];

            if (isset($_GET['search'])) {

                $search = base64_decode($search);

            }

            $where .= " and knowpoint.know like '%$search%'";

            $search = base64_encode($search);

            $search_params = '&search=' . $search;

        }

        

        #总记录数

        $sql = "select count(*) from knowpoint,chapter,course $where";

        $count = Yii::$app->db->createCommand($sql)->queryScalar();

        $listRows = 20;

        $pages = ceil($count / $listRows);

        if (isset($_GET['p'])) {

            $page = $_GET['p'];

        } else {

            $page = 1;

        }

        //偏移量

        $firstRow = ($page - 1) * $listRows;



        $sql = "select knowpoint.kid,course.cname,chapter.ch_name,knowpoint.know from knowpoint,chapter,course $where order by knowpoint.kid desc limit $firstRow,$listRows";

        $know_info = Yii::$app->db->createCommand($sql)->queryAll();



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

        $str .= "<li><a href='index.php?r=user/video/list&p=1" . $search_params . "'>&laquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/video/list&p=$uppage" . $search_params . "'>&lsaquo;</a></li>";



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

                $str .= "<li><a href='index.php?r=user/video/list&p=$i" . $search_params . "'>$i</a></li>";

            }

        }



        $str .= "<li><a href='index.php?r=user/video/list&p=$downpage" . $search_params . "'>&rsaquo;</a></li>";

        $str .= "<li><a href='index.php?r=user/video/list&p=$pages" . $search_params . "'>&raquo;</a></li>";

        $str .= "</ul></div>";

		foreach ($know_info as $key => $val) {

        	$kid=$val['kid'];

        	$sql3="select video_id,video_name,video_path,num from video where kid=$kid";

        	$video_info= Yii::$app->db->createCommand($sql3)->queryAll();

        	if($video_info){

        		$know_info[$key]['video']=$video_info;

        	}else{

        		$know_info[$key]['video']="暂无视频";

        	}

        }



		if($count==0){

			$str="";

		}
        //print_r($know_info);die;
		return $this->render('list',["vide_list"=>$know_info,"str"=>$str]);



	}





    //视频添加

    public function actionAdd()

    {

      	

        $sql='select * from chapter'; 

        $one= Yii::$app->db->createCommand($sql)->queryAll();



        $sql='select c_id,c_name from college'; 

        $college= Yii::$app->db->createCommand($sql)->queryAll();

        $sql1='select * from stage'; 

        $stage= Yii::$app->db->createCommand($sql1)->queryAll();

        //print_r($stage);die;

        return $this->render('add',["one"=>$one,'college'=>$college,'stage'=>$stage]);

    }

    //批量删除

	public function actionDelall(){

		//echo 11;die;

		$id=Yii::$app->request->post('kid');

		//print_r($id);die;

		$kid=implode(",",$id);

		

		$sql="delete from knowpoint where kid in ($kid)";

		$data=Yii::$app->db->createCommand($sql)->query();



		if($data){

			echo 1;

		}else{

			echo 0; 

		}



	}

	//删除

	public function actionDel(){



		$id=Yii::$app->request->post('kid');

		$sql="delete from knowpoint where kid='$id'";

		$data=Yii::$app->db->createCommand($sql)->query();

		if($data){

			echo 1;

		}else{

			echo 0; 

		}

		

	}

	//视频查询

	public function actionSearch(){

		

		$str=$_POST['str'];

		

		$sql="select knowpoint.kid,course.cname,chapter.ch_name,knowpoint.know from knowpoint,chapter,course where knowpoint.ch_id=chapter.ch_id and chapter.cid=course.cid and knowpoint.know like '%$str%' order by knowpoint.kid desc";

		

		

		$data=Yii::$app->db->createCommand($sql)->queryAll();



		foreach ($data as $key => $val) {

        	$kid=$val['kid'];

        	$sql3="select video_id,video_name,video_path from video where kid=$kid";

        	$video_info= Yii::$app->db->createCommand($sql3)->queryAll();

        	if($video_info){

        		$data[$key]['video']=$video_info;

        	}else{

        		$data[$key]['video']="暂无视频";

        	}

        }

        exit(json_encode($data));

		//print_r($data);

		//exit(json_encode($data));		

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



        $sql="select * from course where sid='$two'"; 

		$three= Yii::$app->db->createCommand($sql)->queryAll();

		//print_r($three);die;

		echo json_encode($three);

       

    }

    public function actionCkfour()

    {

        $sid=$_POST['sid'];

        $mid=$_POST['mid'];

        $sql="select * from course where mid='$mid' and sid='$sid'"; 

		$four= Yii::$app->db->createCommand($sql)->queryAll();

		//print_r($three);die;

		echo json_encode($four);

       

    }

    public function actionCkchapter()

    {

        $cid=$_POST['cid'];

        $sql="select * from chapter where cid='$cid'"; 

		$chapter_info= Yii::$app->db->createCommand($sql)->queryAll();

		//print_r($three);die;

		echo json_encode($chapter_info);

       

    }

    public function actionAdd_video(){

		set_time_limit(0);

        //获取文件名

        $filename=$_FILES['Filedata']['name'];

        //获取后缀名

        $lastname=substr($filename,strrpos($filename,'.'));

        //windows文件上传后保存的目录

		//$targetFolder = '/uploads/video'; 

        //linux文件上传后保存的目录

        $targetFolder = '/xuetang/uploads/video';

		$verifyToken = md5('unique_salt' . $_POST['timestamp']);

		if (!empty($_FILES) && $_POST['token'] == $verifyToken) {

            //文件上传临时保存的目录文件

			$tempFile = $_FILES['Filedata']['tmp_name'];

                        //htdocs/mooc

            //网站根目录/上传后的目录

			$targetPath = $_SERVER['DOCUMENT_ROOT']. $targetFolder;

                        //echo $targetPath;die;

            //上传后保存的文件名

			$targetFile = rtrim($targetPath,'/') . '/' . time().$lastname;

            //支持上传格式

			$fileTypes = array('mp4','qlv','3gp','avi','flv');

			$fileParts = pathinfo($_FILES['Filedata']['name']);

			if (in_array($fileParts['extension'],$fileTypes)) {

				//move_uploaded_file($tempFile,$targetFile);

                //将文件从临时目录转存到自己的目录

				move_uploaded_file($tempFile,iconv("UTF-8","gb2312", $targetFile));

                //返回文件名

				echo $targetFile;

			} else {

				echo 'Invalid file type.';

			}

		}

	}

    public function actionXiazai(){

            $path = $_GET['vedio_path'];

            $filename = substr($path,strrpos($path,"/")+1);

            $path=$_SERVER['DOCUMENT_ROOT'].$path;

            $path = iconv("gb2312","utf-8//IGNORE",$path);

            $filename = iconv("gb2312","utf-8//IGNORE",$filename);

            //echo $filename;die;   

            //文件类型

            header('Content-type:mp4/wmv/avi/flv');

            //激活一个下载的窗口  (文件名)

            header("Content-Disposition: attachment; filename=$filename");

            //读文件

            readfile($path);





    }

    //执行添加

   public function actionSave(){

        $know=$_POST['know'];

        $addtime=date("Y-m-d H:i:s");

        $path=$_POST['path'];

        $ch_id=$_POST['ch_id'];

        $path=rtrim($path,'*');

        $arr=explode('*',$path); 

        

        foreach ($arr as $key => $val) {

        	//$video=substr($val,strpos($val,'/')+1);      	

        	//$video_path=substr($video,strpos($video,'/'));

        	$video_path=  str_replace($_SERVER['DOCUMENT_ROOT'],'',$path);

            

        	$video_name=substr($video_path,strrpos($video_path,'/')+1);

            //$video_path=substr($video_path,0,strrpos($video_path,'+'));

            $video_path='http://172.18.8.125/video/'.$video_name;

            //echo $video_path;die;

        	//echo $video_name;

        	$video_info[$key]['video_path']=$video_path;

        	$video_info[$key]['video_name']=$video_name;

        }

           

        if(!empty($video_info)){       

			$sql="insert into knowpoint (know,ktime,ch_id) VALUES ('$know','$addtime','$ch_id')";

			//echo $sql;die;

			if(Yii::$app->db->createCommand($sql)->query()){

				$sql1="select * from knowpoint where know='$know' order by kid desc limit 1";

				//echo $sql1;die;

				$know_info=Yii::$app->db->createCommand($sql1)->queryAll();;

				$kid=$know_info['0']['kid'];

				foreach ($video_info as $key => $val) {

		        	//$video_info[$key]['kid']=$kid;

		        	$video_name=$video_info[$key]['video_name'];

		        	$video_path=$video_info[$key]['video_path'];

		        	$sql2="insert into video (video_name,video_path,kid) values('$video_name','$video_path','$kid')";

                    //echo $sql2;die;

		        	$res=Yii::$app->db->createCommand($sql2)->query();

		        	

		        }

		        if($res){

		        	echo "<script>alert('ok');location.href='index.php?r=user/video/list'</script>";

		        }else{

		        	echo "<script>alert('no')</script>";

		        }

		        //print_r($video_info);

				

			}      

        }else{

            echo "<script>alert('no')</script>";

        }

        

    }

}

