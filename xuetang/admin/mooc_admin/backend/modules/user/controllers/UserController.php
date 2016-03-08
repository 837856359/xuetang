<?php
      

namespace backend\modules\user\controllers;
use Yii;
use backend\modules\user\models\User;
use backend\modules\user\models\UserSeach;
use backend\modules\user\controllers\BaseController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\PHPExcel;
use yii\data\Pagination;
use app\models\Comment;
use yii\data\ArrayDataProvider;


header("Content-Type:text/html;charset=utf8");
/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
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

    /**
     * Lists all User models.
     * @return mixed
     */

    //rbac
    //public function __construct(){
    //	parent::__init();
    //	 echo $this->id;
	//	 $url=Yii::$app->request->getHostInfo().Yii::$app->request->url;
	//	 $newa = substr(substr($url,strrpos($url,'/')),1);
	//	 echo $newa;
   // }
    //后台登录页面
    public function actionIndex()
    {
    /*if(!isset($_SESSION['uid'])){
    		 echo "<script>alert('很抱歉，您没有登录，不能访问');location.href='http://www.xuetang.com/admin/mooc_admin/backend/web/index.php?r=user/user/login'; </script>";
             die;
    	}
    	*/
        return $this->render('index');
    }
    public function actionLogin(){	
    	return $this->render('login');
    }
    //判断登录
    public function actionMaain(){
    	$name=$_POST['name'];
    	$pwd=md5($_POST['pwd']);
    	$sql="select * from think_user where account='$name'"; 
        $one= Yii::$app->db->createCommand($sql)->queryAll();
        if($one){
	        $sql2="select * from think_user where account='$name' and password='$pwd'"; 
	        $one2= Yii::$app->db->createCommand($sql2)->queryAll();
	        if($one2){
	        	//Yii::app()->session['name']=$name;
	        	$session = Yii::$app->session;
			$session->set('uid',$one2[0]['id']);
			$session->set('nickname',$one2[0]['nickname']);
			
	        	//$_SESSION['nickname']=$one2[0]['nickname'];
	        	$sql="select * from think_role_user inner join think_access on think_role_user.role_id=think_access.role_id inner join think_node on think_access.node_id=think_node.id where think_role_user.user_id=".$one2[0]['id'];
            	$arr=Yii::$app->db->createCommand($sql)->queryAll();
            	foreach ($arr as $key => $value) {
            		$data[]=$value['name'];
            	}
            	$session->set('data',$data);
echo 0;
	        }else{
	        	echo 2;
	        }
        }else{
        	echo 1;
        }
    }
    /*session
    public function actionSes(){
    	header("Content-type:text/html;charset=utf-8");   
    	$id=$_SESSION['uid'];
    	$sql2="select * from think_role_user inner join think_access on think_role_user.role_id=think_access.role_id inner join think_node on think_access.node_id=think_node.id where think_role_user.user_id='$id'"; 
	    $one2= Yii::$app->db->createCommand($sql2)->queryAll();
	    print_r($one2);

    }*/
    //退出登录
     public function actionLogout()
    {		header("content-type:text/html;charset=utf8");
      		$session = Yii::$app->session;
			$session->destroy();
			echo "<script>alert('退出成功');location.href='index.php?r=user/user/login';</script>";
    }
	//添加模板
	public function actionAdd()
    {
      	
        $sql='select * from chapter'; 
        $one= Yii::$app->db->createCommand($sql)->queryAll();

        $sql='select c_id,c_name from college'; 
        $college= Yii::$app->db->createCommand($sql)->queryAll();
        $sql1='select * from stage'; 
        $stage= Yii::$app->db->createCommand($sql1)->queryAll();
        return $this->render('add',["one"=>$one,'college'=>$college,'stage'=>$stage]);
    }


//显示学院页面
	 public function actionCollege()
    {
        $sql='select * from chapter'; 
        $one= Yii::$app->db->createCommand($sql)->queryAll();

        $sql='select c_id,c_name from college'; 
        $college= Yii::$app->db->createCommand($sql)->queryAll();
        $sql1='select * from stage'; 
        $stage= Yii::$app->db->createCommand($sql1)->queryAll();
        return $this->render('college',["one"=>$one,'college'=>$college,'stage'=>$stage]);
 
    }
	//执行添加学院
	public function actionAdd_college(){
		   
		  $c_name=$_POST['c_name'];
		  $file=$_FILES['img'];
          $hou=substr($file['name'],strrpos($file['name'],'.'));
	      $lu="".time()."_".rand().$hou;
	      @$aa=move_uploaded_file($file["tmp_name"],$lu);
          $img=$lu;
	      $sql="select * from college where c_name='".$c_name."'";
		  //print_r($sql);die;
		  if(Yii::$app->db->createCommand($sql)->queryAll()){
		    //echo "dsfd";
	       echo "<script>alert('college already exist');location.href='index.php?r=user/user/college';</script>";  
		  }else{
		      $sql1="insert into college (c_name,img) values('$c_name','$img')";
			  if(Yii::$app->db->createCommand($sql1)->query()){
			  echo "<script>alert('ok');location.href='index.php?r=user/user/list';</script>";
		  }
		  
		  }

	
	
	}
	//显示课程页面
	 public function actionCourse()
    {
        $sql='select c_id,c_name from college'; 
		$one= Yii::$app->db->createCommand($sql)->queryAll();
		$sql1='select * from stage'; 
		$stage= Yii::$app->db->createCommand($sql1)->queryAll();
        return $this->render('course',["one"=>$one,"stage"=>$stage]);
    }
    //执行课程添加
	public function actionAdd_course(){
		
		//图片 
	  $files=$_FILES['cimg'];
	  $hou1=substr($files['name'],strrpos($files['name'],'.'));
	  $lu1="css/index_files/".time()."_".rand().$hou1;
	  @$aa1=move_uploaded_file($files["tmp_name"],$lu1);
	  // 视频 
	  //print_r($_FILES);die;


	  $file=$_FILES['pic'];
	  $hou=substr($file['name'],strrpos($file['name'],'.'));
	  $lu="video/".time()."_".rand().$hou;
	  @$aa=move_uploaded_file($file["tmp_name"],$lu);
	 
			 if($aa1){
				 if($aa){
				  //echo "sfdsf";die;
					  $cname=$_POST['cname'];
					  $addtime=time();
					  $video=$lu;
					  $cimg=$lu1;
					  $intro=$_POST['intro'];
					  $c_id=$_POST['c_id'];
					  $mid=$_POST['mid'];
					  $sid=$_POST['sid'];
                      
                      $sql="select * from course where cname='".$cname."'";
					  //print_r($sql);die;
						  if(Yii::$app->db->createCommand($sql)->queryAll()){
						     
						  echo "<script>alert('already exist');location.href='index.php?r=user/user/add_course'</script>";
						  
						  }else{

								  $sql="insert into course(cname,addtime,video,c_id,mid,sid,cimg,intro) VALUES ('$cname','$addtime','$video','$c_id','$mid','$sid','$cimg','$intro')";
								  if(Yii::$app->db->createCommand($sql)->query()){
									echo "<script>alert('ok');location.href='index.php?r=user/user/course'</script>";
								  }else{
									 echo "<script>alert('false');location.href='index.php?r=user/user/add_course'</script>";
								  }
						  }
				 }else{
				 
				   echo "<script>alert('video no sucess');location.href='index.php?r=user/user/add_course'</script>";
				 
				 }
			  }else{
				echo "<script>alert('picture no sucess');location.href='index.php?r=user/user/add_course'</script>";
			  }
	
	
	}
  

  //视频列表
   public function actionList()
    {
	
	//普通列表
		$sql="select * from knowpoint ,chapter,college where knowpoint.ch_id=chapter.ch_id and chapter.cid=college.c_id";
		//print_r($sql);die;
		$data=Yii::$app->db->createCommand($sql)->queryAll();	//查询所有视频
//print_r($data);die;
		return $this->render('list',["vide_list"=>$data]);
       //print_r($data);die;


		//分页列表
		/*$sql = 'select * from knowpoint ,chapter,college where knowpoint.ch_id=chapter.ch_id and chapter.cid=college.c_id'; 
		$q = Yii::$app->db->createCommand($sql)->queryAll();

		$pages = new Pagination([
            'totalCount'=>count($q),
        ]);
		
		$list = Yii::$app->db->createCommand($sql." limit ".$pages->limit." offset ".$pages->offset."")->queryAll(); 

		return $this->render('list',array("vide_list"=>$list));*/
 
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


	//下载
	public function actionXiazai(){
           $path = $_GET['vedio_path'];
           // print_r($path);die;
			$filename = substr($path,strrpos($path,"/")+1);
			//文件类型
			header('Content-type: imagepeg');
			//激活一个下载的窗口  (文件名)
			header("Content-Disposition: attachment; filename=$filename");
			//读文件
			readfile($path);
	}

	
/****************************/

//问题页面
     public function actionUpfile()
    {
            $sql="select * from knowpoint";
            $mo = Yii::$app->db->createCommand($sql)->queryAll();
            return $this->render('upfile',['mo'=>$mo]);

	}
	//执行添加题
    public function actionAdd_file()
    {
		
	
		$kid=$_POST['kid'];
		//print_r($kid);die;
		$question=$_POST['question'];
		$selects=$_POST['selects'];
		$answer=$_POST['answer'];
		$type=1;
        $add_time=date("Y-m-d H:i:s");
		$score=$_POST['score'];
        $sql="insert into question (`kid`,`question`,`selects`,`answer`,`type`,`is_hui`,`add_time`,`score`) values('$kid','$question','$selects','$answer','$type','0','$add_time','$score')";
		$sql = rtrim($sql, ",");
		$data=Yii::$app->db->createCommand($sql)->query();
		if($data){
			echo "<script>alert('ok');location.href='index.php?r=user/user/index_list'</script>";
		}else{
			 echo "<script>alert('false');location.href='index.php?r=user/user/add_file'</script>";
		}
				//print_r($_FILES);die;
              /*  if($_FILES['img_url']['name']==''){
                      echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('没有要上传的文件！');location.href='index.php?r=user/user/upfile'</script>";
                      die;
                }
                $name="upl";
                $exp=explode('.',$_FILES['img_url']['name']);
                $extend=end($exp);
                 if($extend=="xlsx"){
                    $extend="xls";
                }
                $new_name=$name.".".$extend;
				//print_r($new_name);die;
                if(in_array($_FILES['img_url']['type'],array('text/plain','application/vnd.ms-excel','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))){//?????
                     $path="doc/";
                     if(!is_dir($path)){
                          mkdir($path);  
                     }
                     move_uploaded_file($_FILES['img_url']['tmp_name'],$path.$new_name);
                }else{
                     echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('请上传文本文件或excel格式的文件
					 ！（.txt/.xls/.xlsx）');location.href='index.php?r=user/user/upfile'</script>";
                     die;    
                }
                if($_FILES['img_url']['type']=="application/vnd.ms-excel" || $_FILES['img_url']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
                    error_reporting('E_ALL');
                    
                    上传文件成功后
                    
                    //所读取的文件
                    $filename = $path.$new_name; 
			include_once('/PHPExcel/PHPExcel/Reader/reader.php');
            $data = new Spreadsheet_Excel_Reader();
			//UTF-8格式
			$data->setOutputEncoding('UTF-8');
			//格式化的xls
			$data->read($filename);
			//print_r($data->sheets);die;
			$i=0;
			$numRows=$data->sheets[0]['numRows'];//行数

			for($l=2;$l<=$numRows;$l++)
			{
				$cells=$data->sheets[0]['cells'][$l];//试题
				//print_r($cells);
				if($cells[1]=='选择题')
				{
					$i++;
					$flag = "select";//试题为选择类型
					$tiku[$i]['que']=$cells[2];//试题问题
				}
			}
				}
				else if($cells[1]=='判断题')
				{
				   $i++;
				   $flag = "judge";//判断
				   $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];
				   $ans[0] = trim($data->sheets[0]['cells'][$l][3])=="对" ?1 :0;
				   $tiku[$i]['sel'] = array(1,0);
				   $tiku[$i]['ans'] = $ans;
				   $tiku[$i]['types'] = "判断题";
					//解决判断题之前的选择题选项中的true和false变为1.0的问题。zhang
						foreach($tiku as $key=>$val)
						{
							foreach($val['sel'] as $k=>$v)
								{   
										if($v==''&&$v!='0')
										{
										unset($tiku[$key]['sel'][$k]);
										}
										else if($v=='1')
											 {
											 $tiku[$key]['sel'][$k]='true';	 
										}else if($v=='0')
										{
										  $tiku[$key]['sel'][$k]='false';
										}   
								}
						}
					// print_r($tiku);die;
				}
				elseif(empty($cells[1]))
				{
						if($flag=='select')
						{
							$tiku[$i]['sel'][]=$cells[3];//试题选项
							if(!empty($cells[4])&&!empty($cells[3]))
							{
								//判断选择题答案里面的true和false
								if($cells[3]=='1')
								{
									$tiku[$i]['ans'][]='true';
								}else if($cells[3]=='0')  
								{
									$tiku[$i]['ans'][]='false';
								}else
								{
									$tiku[$i]['ans'][]=$cells[3];
								}
							}
						}

				}
			

			//print_r($tiku);die;
			if($data->sheets[0]['cells'][2][1]=='选择题'||$data->sheets[0]['cells'][2][1]=="判断题")
			{
				foreach ($tiku as $key => $item) 
				{
					$que=$item['que'];
					$sel=!empty($item['sel'])?serialize($item['sel']):'';
					$ans=serialize($item['ans']);
					if($que!='' && $ans!='')
					{
						//问题答案选项
						$tmpSql.="('".addslashes(htmlspecialchars($que))."','".addslashes($sel)."','".addslashes($ans)."'),";
					}
				}
				//echo $tmpSql;die;
				$sql="insert into question (`question`,`selects`,`answer`) values".$tmpSql;
				$sql = rtrim($sql, ",");
				echo $sql;
				//在yii2.0中执行sql语句进行试题添加


			}*/
						
	}

public function actionIndex_list(){
       
        $sql="select * from question,knowpoint where question.kid=knowpoint.kid"; 
		$two= Yii::$app->db->createCommand($sql)->queryAll();
		//print_r($two);die;
         return $this->render('index_list',["two"=>$two]);

}


   //文件上传
   public function actionSave()
    {
	  $file=$_FILES['pic'];
	  $hou=substr($file['name'],strrpos($file['name'],'.'));
	  $lu="video/".time()."_".rand().$hou;
	  @$aa=move_uploaded_file($file["tmp_name"],$lu);
      if($aa){
		  $cname=$_POST['ch_name'];
		  $addtime=date("Y-m-d H:i:s");
		  $video=$lu;
		  $c_id=$_POST['ch_id'];
		  $sql="insert into knowpoint (know,ktime,video_path,ch_id) VALUES ('$cname','$addtime','$video','$c_id')";
		  if(Yii::$app->db->createCommand($sql)->query()){
			echo "<script>alert('ok');location.href='index.php?r=user/user/add'</script>";
		  }
		 
      }else{
		echo "<script>alert('ok')</script>";
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
        $two=$_POST['two'];

        $sql="select * from course where mid='$two'"; 
		$three= Yii::$app->db->createCommand($sql)->queryAll();
		//print_r($three);die;
		echo json_encode($three);
       
    }
	//批量删除
	public function actionDelall(){
		//echo 11;
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


//咨询添加
	public function actionConsult_add(){
		$sql="select * from post_class";
		$post_list= Yii::$app->db->createCommand($sql)->queryAll();
		//print_r($post_list);die;

		  return $this->render('consult_add',array("list"=>$post_list));
	}

	public function actionConsult_save(){
		$post_class_id=$_POST['post_id'];
		$post_content=$_POST['ck_content'];
	
		$title=$_POST['title'];
		$time=time();
		$sql="insert into post (post_class_id,post_title,post_content,user,post_addtime) values('$post_class_id','$title','$post_content',1,'$time')";
		if(Yii::$app->db->createCommand($sql)->query()){
			echo "<script>alert('success');history.go(-1);</script>";
		 }else{
			echo "<script>alert('faile');history.go(-1);</script>";
		 }

	} 













    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->uid]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->uid]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    
    
    public function actionDagang_list(){
        $sql="select * from question,knowpoint where question.kid=knowpoint.kid"; 
		$two= Yii::$app->db->createCommand($sql)->queryAll();
		//print_r($two);die;
         return $this->render('daganglist',["two"=>$two]);

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
//执行添加题
    public function actionAdd_dagangfile()
    {
		
	
		$kid=$_POST['kid'];
		//print_r($kid);die;
		$question=$_POST['question'];
		$selects=$_POST['selects'];
		$answer=$_POST['answer'];
		$type=1;
        $add_time=date("Y-m-d H:i:s");
		$score=$_POST['score'];
        $sql="insert into question (`kid`,`question`,`selects`,`answer`,`type`,`is_hui`,`add_time`,`score`) values('$kid','$question','$selects','$answer','$type','0','$add_time','$score')";
		$sql = rtrim($sql, ",");
		$data=Yii::$app->db->createCommand($sql)->query();
		if($data){
			echo "<script>alert('ok');location.href='index.php?r=user/user/index_list'</script>";
		}else{
			 echo "<script>alert('false');location.href='index.php?r=user/user/add_file'</script>";
		}
				//print_r($_FILES);die;
              /*  if($_FILES['img_url']['name']==''){
                      echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('没有要上传的文件！');location.href='index.php?r=user/user/upfile'</script>";
                      die;
                }
                $name="upl";
                $exp=explode('.',$_FILES['img_url']['name']);
                $extend=end($exp);
                 if($extend=="xlsx"){
                    $extend="xls";
                }
                $new_name=$name.".".$extend;
				//print_r($new_name);die;
                if(in_array($_FILES['img_url']['type'],array('text/plain','application/vnd.ms-excel','application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'))){//?????
                     $path="doc/";
                     if(!is_dir($path)){
                          mkdir($path);  
                     }
                     move_uploaded_file($_FILES['img_url']['tmp_name'],$path.$new_name);
                }else{
                     echo "<meta http-equiv='Content-Type' content='text/html; charset=utf8'/><script>alert('请上传文本文件或excel格式的文件
					 ！（.txt/.xls/.xlsx）');location.href='index.php?r=user/user/upfile'</script>";
                     die;    
                }
                if($_FILES['img_url']['type']=="application/vnd.ms-excel" || $_FILES['img_url']['type']=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
                    error_reporting('E_ALL');
                    
                    上传文件成功后
                    
                    //所读取的文件
                    $filename = $path.$new_name; 
			include_once('/PHPExcel/PHPExcel/Reader/reader.php');
            $data = new Spreadsheet_Excel_Reader();
			//UTF-8格式
			$data->setOutputEncoding('UTF-8');
			//格式化的xls
			$data->read($filename);
			//print_r($data->sheets);die;
			$i=0;
			$numRows=$data->sheets[0]['numRows'];//行数

			for($l=2;$l<=$numRows;$l++)
			{
				$cells=$data->sheets[0]['cells'][$l];//试题
				//print_r($cells);
				if($cells[1]=='选择题')
				{
					$i++;
					$flag = "select";//试题为选择类型
					$tiku[$i]['que']=$cells[2];//试题问题
				}
			}
				}
				else if($cells[1]=='判断题')
				{
				   $i++;
				   $flag = "judge";//判断
				   $tiku[$i]['que'] = $data->sheets[0]['cells'][$l][2];
				   $ans[0] = trim($data->sheets[0]['cells'][$l][3])=="对" ?1 :0;
				   $tiku[$i]['sel'] = array(1,0);
				   $tiku[$i]['ans'] = $ans;
				   $tiku[$i]['types'] = "判断题";
					//解决判断题之前的选择题选项中的true和false变为1.0的问题。zhang
						foreach($tiku as $key=>$val)
						{
							foreach($val['sel'] as $k=>$v)
								{   
										if($v==''&&$v!='0')
										{
										unset($tiku[$key]['sel'][$k]);
										}
										else if($v=='1')
											 {
											 $tiku[$key]['sel'][$k]='true';	 
										}else if($v=='0')
										{
										  $tiku[$key]['sel'][$k]='false';
										}   
								}
						}
					// print_r($tiku);die;
				}
				elseif(empty($cells[1]))
				{
						if($flag=='select')
						{
							$tiku[$i]['sel'][]=$cells[3];//试题选项
							if(!empty($cells[4])&&!empty($cells[3]))
							{
								//判断选择题答案里面的true和false
								if($cells[3]=='1')
								{
									$tiku[$i]['ans'][]='true';
								}else if($cells[3]=='0')  
								{
									$tiku[$i]['ans'][]='false';
								}else
								{
									$tiku[$i]['ans'][]=$cells[3];
								}
							}
						}

				}
			

			//print_r($tiku);die;
			if($data->sheets[0]['cells'][2][1]=='选择题'||$data->sheets[0]['cells'][2][1]=="判断题")
			{
				foreach ($tiku as $key => $item) 
				{
					$que=$item['que'];
					$sel=!empty($item['sel'])?serialize($item['sel']):'';
					$ans=serialize($item['ans']);
					if($que!='' && $ans!='')
					{
						//问题答案选项
						$tmpSql.="('".addslashes(htmlspecialchars($que))."','".addslashes($sel)."','".addslashes($ans)."'),";
					}
				}
				//echo $tmpSql;die;
				$sql="insert into question (`question`,`selects`,`answer`) values".$tmpSql;
				$sql = rtrim($sql, ",");
				echo $sql;
				//在yii2.0中执行sql语句进行试题添加


			}*/
						
	}
    
}
