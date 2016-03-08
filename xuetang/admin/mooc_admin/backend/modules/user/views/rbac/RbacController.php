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
class RbacController extends BaseController
{
public $enableCsrfValidation = false;
	/*********RBAC权限管理***************************************************************************/
	//管理员添加
	public function actionAdmin_add(){
		$sql="select * from think_role";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('admin_add',['arr'=>$arr]);
	}
	//管理员列表
	public function actionAdmin_list(){
		$sql="select * from think_user order by id desc";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();
		return $this->render('admin_list',['arr'=>$arr]);
	}
	//管理员删除
	public function actionDel_admin(){
		$id=$_POST['id'];
		$sql="delete from think_user where id='$id'";
		$arr=Yii::$app->db->createCommand($sql)->query();
		if($arr){
			echo 1;
		}else{
			echo 2;
		}
	}
	//修改密码
	public function actionUpdate(){
		$id=$_GET['id'];
		$sql="select * from think_user where id='$id'";
		$arr=Yii::$app()->db->createCommand($sql)->queryRow();
		return $this->render('admin_update',["list"=>$arr]);
	}
	public function actionSave_admin(){
		$id=$_POST['id'];
		$nickname=$_POST['nickname'];
		$account=$_POST['account'];
		$password=$_POST['password'];
		$sql="update think_user set nickname='$nickname',account='$account',password='$password' where id='$id'";
        $arr=Yii::$app()->db->createCommand($sql)->query();
        if($arr){
            echo "<script>alert('修改成功');location.href='index.php?r=user/rbac/Admin_list'</script>";
        }else{
            echo "<script>alert('修改失败');location.href='index.php?r=user/rbac/Admin_list'</script>";
        }
	}

	//管理员入库
	public function actionAdmin_ad(){
		
		$name=$_POST['name'];
		$zhanghao=$_POST['zhanghao'];
		$sql="select * from think_user where account ='$zhanghao'";
	
		$arr_select_account = Yii::$app->db->createCommand($sql)->queryAll();
		
		if(!empty($arr_select_account)){
			die(3);
		}
		
		$pwd=md5($_POST['pwd']);
		$juese_id=$_POST['juese_id'];
		$juese_name=trim($_POST['juese_name']);
		$time=time();
		$sql="insert into think_user(account,nickname,password,remark,add_time) values('$zhanghao','$name','$pwd','$juese_name','$time')";
	
        $arr = Yii::$app->db->createCommand($sql)->execute();
        if($arr){
        	$sql2="select * from think_user where account='$zhanghao'";
        	$arr2=Yii::$app->db->createCommand($sql2)->queryAll();
        	$id=$arr2[0]['id'];
        	$sql3="insert into think_role_user(role_id,user_id)values('$juese_id','$id')";
        	$arr3=Yii::$app->db->createCommand($sql3)->query();
        	if($arr3){
        		echo 1;
        	}
        }else{
        	echo 2;
        }
		
	}
	//角色添加
	public function actionRole_add(){
		$sql="select * from think_node where level=2";
        $arr = Yii::$app->db->createCommand($sql)->queryAll();
        $sql2="select * from think_node where level=3";
        $arr2 = Yii::$app->db->createCommand($sql2)->queryAll();			
		return $this->render('role_add',['arr'=>$arr,'arr2'=>$arr2]);
	}
	//角色入库
	public function actionRole_ad(){
		$name=$_POST['name'];
		$text=$_POST['text'];
		$time=time();
		$sql="insert into think_role(name,create_time)values('$name','$time')";
        $arr = Yii::$app->db->createCommand($sql)->query();
        if($arr){
	 		$sql2="select * from think_role where name='$name'";
	        $arr2=Yii::$app->db->createCommand($sql2)->queryAll();
	        $id=$arr2[0]['id'];	       	
			$hello = explode(',',$text);
			for($i=0;$i<count($hello);$i++){
					echo $hello[$i];
			}
        }
	}
	//角色列表
	public function actionRole_list(){
		$sql="select * from think_role";
		$arr=Yii::$app->db->createCommand($sql)->query();
		return $this->render('role_list',['arr'=>$arr]);

	}
	//角色删除
	public function actionShanchu(){
		$id=$_POST['id'];
		$sql="delete from think_role where id='$id'";
		$arr=Yii::$app->db->createCommand($sql)->query();
		if($arr){
        	echo 1;
        }else{
        	echo 2;
        }	
	}
	//权限添加
	public function actionAccess_add(){
		return $this->render('access_add');
	}
	//权限入库
	public function actionAccess_ad(){
		$name=$_POST['name'];
		$coll=$_POST['coll'];
		$sql="insert into think_node(title,name)values('$name','$coll')";
        $arr = Yii::$app->db->createCommand($sql)->query();
        if($arr){
        	echo 1;
        }else{
        	echo 2;
        }	
	}
	//权限列表
	public function actionAccess_list(){
		$sql="select * from think_node";
		$arr=Yii::$app->db->createCommand($sql)->query();
		return $this->render('access_list',['arr'=>$arr]);
	}
	//删除权限
	public function actionDel_node(){
		$id=$_POST['id'];
		$sql="delete from think_node where id='$id'";
		$arr=Yii::$app->db->createCommand($sql)->query();
		if($arr){
        	echo 1;
        }else{
        	echo 2;
        }
	}
	//复选框
	public function actionBox(){
		$id=$_POST['text'];
		$sql="select * from think_node where pid='$id'";
		$arr=Yii::$app->db->createCommand($sql)->queryAll();
		echo print_r($arr);
	}
	public function actionAccess_save(){
		$name=$_POST['name'];
		$id=$_POST['val'];
		$id=explode(",",$id);
		//print_r($id);
		$time=time();
		$sql="insert into think_role(name,create_time)values('$name','$time')";
		$arr=Yii::$app->db->createCommand($sql)->query();
		if($arr){
			$sql2="select * from think_role where name='$name'";
			$arr2=Yii::$app->db->createCommand($sql2)->queryAll();
			$role_id=$arr2[0]['id'];
		    $sql_delete="delete from think_access where role_id=".$role_id;
		    Yii::$app->db->createCommand($sql_delete)->query();
		    $a=0;
			for($i=0;$i<count($id);$i++){
					$sql_level="select * from think_node where id = ".$id[$i];

					$arr_level=Yii::$app->db->createCommand($sql_level)->queryAll();
					$level	= $arr_level[0]['level'];
					$pid	= $arr_level[0]['pid'];
					$sql_insert_access="insert into think_access (role_id,node_id,level,pid) value($role_id,$id[$i],$level,$pid)";
					$res=Yii::$app->db->createCommand($sql_insert_access)->query();
					if($res){
						$a=1;
					}else{
						$a=0;
					}
			}
			if($a){
				echo "成功";
			}else{
				echo "失败";
			}
		
		}else{
			echo "添加失败";
		}

	}

/****************************/	
}





?>
