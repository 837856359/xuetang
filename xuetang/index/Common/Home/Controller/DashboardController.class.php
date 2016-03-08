<?php
namespace Home\Controller;
use Think\Controller;
//use Home\Model\UsersModel;
class DashboardController extends Controller {
/*
	方法名：我的课程首页
	操作员：张彪
	创建时间???15/06/24
*/
	
	public function __construct(){
		parent::__construct();
		if(!session('uid')){
			$this->redirect('/index.php/home/index/login');
		}		
	}
	
	
    public function index(){
		
   	/*

		方法名：课程显示
		操作员：周白???
		创建时间???15/06/29
*/  

            $model = M('course');
	    $userid=session('uid');
	    $course='';
	    $sql='';
	    $sqls=M('user')->where("uid='$userid'")->find();
	    print_r($sqls);
	    $sql=M('user')->query("select * from usercourse where uid=$userid ");
		if(!empty($sql)){
			$course_id='';
			foreach( $sql as $k=>$v){
				$course_id .= $v['cid'].',';
			}

			$course_id = trim($course_id,',');
			$course = M('user')->query("select * from course where cid in ($course_id)");
			$count = count($course);
			$this->assign('count',$count);
			$this->assign('course',$course);
		}
		$this->assign('ls',$sqls);
		$this->display();
    }
/*
	方法名：真实姓名添加|修改
	操作员：张彪
	创建时间???15/06/26
*/	
	public function add_name(){
        $username=$_POST['username'];
        $text_reason=$_POST['text_reason'];
		$user_id = session('id');
        if(empty($username)){
			echo "请填写名???";
		}else{
			if(M('user')->execute(" update user set realname = '$username',text_reson=' $text_reason' where uid = $user_id ")){
				echo "200";
			}
		}
    }


/*
	方法名：取消I课程
	操作员：周白???
	创建时间???15/07/09
*/
public function del($cid){	
		$model = M('usercourse');
		if($model->where("cid='".$cid."'")->delete()){
			$this->success('???出成???',U('index.php/Home/Dashboard/index'));
		}else{
			$this->success('???出失???',U('index.php/Home/Dashboard/index'));
		}	
		
    }	

	//???课中
	public function started(){
	   $this->display("started");
    }

	//即将??????
	public function not_yet_started(){
	   $this->display("not_yet_started");
    }

	//已完结的课程
	public function ended(){
	   $this->display("ended");
    }

	//已关注的课程
	public function follow(){
	   $this->display("follow");
    }
	
	
  /*
	方法名：邮箱密码添加
	操作员：张彪
	创建时间???15/06/26
*/

	public function email(){
		$userid=session('uid');
		$sql=M('user')->where("uid='$userid'")->find();
	    $this->assign('lt',$sql)->display();
    }
	

  /*
	方法名：邮箱密码添加处理
	操作员：张彪
	创建时间???15/06/26
*/
  public function email_add_pwd(){
      $userid=session('uid');
      $email_password=$_POST['email_password1'];
      $arr=M('user')->execute("update user set email_password='$email_password' where uid='$userid'");
      echo "<script>alert('添加成功');location.href='http://www.xuetang.com/tp3.2/index.php/Home/Dashboard/email'</script>";
  }

	
/*
	方法名：添加绑定邮箱
	操作员：张彪
	创建时间???15/06/26
*/
	public function email_add_email(){
		$userid=session('uid');
		$user_email=$_POST['email'];
		$arr=M('user')->execute("update user set email='$user_email' where uid='$userid'");
			if(sendMail("$user_email","标题","<a href='http://www.xuetang.com/tp3.2/index.php/Home/Dashboard/email_shou?userid=$userid'>请点击进行激???</a>")){
			echo "<script>alert('邮件发???成???');location.href='http://www.xuetang.com/tp3.2/index.php/Home/Dashboard/email'</script>";
		}
	}
	
 /*
	方法名：邮箱??????
	操作员：张彪
	创建时间???15/06/26
*/
	public function email_shou(){
		$uid=$_GET['uid'];
		$res=M('user')->execute("update user set email_activate='1' where uid='$uid'");
		echo "<script>alert('???活成???');location.href='http://www.xuetang.com/tp3.2/index.php/Home/Dashboard/index'</script>";
	}

	
/*
	方法名：绑定手机号首???
	操作员：郝勇???
	创建时间???15/06/28
*/
	public function phone(){
	   $this->display("phone");
    }
	
//短信接口
	public function dxjk(){
		echo 1;
	}
	//短信验证???
	public function dx(){
		$phone=$_POST['phone'];
		$yzm=rand(10000,100000);
		session("yzm",$yzm);
		$yan=$_SESSION['yzm'];
		if($yan){
			$url="http://utf8.sms.webchinese.cn/?Uid=z52033&Key=68bf4daeb3e3d273648e&smsMob='$phone'&smsText=您好，您正在申请学堂在线手机绑定，您的验证码???'$yzm'???";
			if(function_exists('file_get_contents'))
			{
			$file_contents = file_get_contents($url);
			}
			else
			{
			$ch = curl_init();
			$timeout = 5;
			curl_setopt ($ch, CURLOPT_URL, $url);
			curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
			$file_contents = curl_exec($ch);
			curl_close($ch);
			}
			print_r($file_contents);
		}else{
			echo 0;
		}
	
	}
	//绑定手机???
	public function bound_phone(){
		$phone_number=$_POST['phone_number'];
		$validate=$_POST['validate'];
		session('username',"郝勇???");
		$username=$_SESSION['username'];
		$yzm=$_SESSION['yzm'];
		if(!$username){
			$this->redirect("/Home/index/index",10,"请先登录");
		}else{
			if($yzm==$validate){
				$model=D("user");
				$arr=$model->where("username ='".$username."'")->find();				
				if($arr['phone']==""){
					$id=$arr['uid'];
					$arr['phone']=$phone_number;
					$data=$model->where("uid='".$id."'")->field("phone")->filter('strip_tags')->save($arr);
					if($data){
						$this->success("手机号绑定成功！");
					}else{
						$this->error("手机号绑定失败！");
					}
				}else{
					$this->error("该用户已绑定手机号！");
				}
			}else{
				$this->error("验证码有误，请核对后输入???");
			}
		}
	}

/*
	方法名：???请注???
	操作员：李挺
	创建时间???15/06/24
*/
    public function invitees(){
		$uid = session('uid');
		$userData = M('user')->where('uid='.$uid)->find();
		//获取此用户所???请的???有用???
		$iniArr = M('invite_register')->where('uid='.$uid)->select();
		if(!empty($iniArr)){
			$str='';
			foreach($iniArr as $k=>$v){
				$str .= $v['ini_uid'].','; 
			}
			
		//获取被邀请用户的信息
			$str = chop($str,',');
			$userArr = M('user')->query(" select uid,username,addtime from  user where uid in ($str) ");
			$this->assign('userArr',$userArr);
		}

		$this->assign('uid',$userData['ini_code']);
		$this->display("invitees");
		//$iniArr=null;
		//$userArr=null;
    }
	/*
		方法名：消息提示
		操作员：李挺
		创建时间 15/06/26

	*/
	public function message(){
		//站内消息
		$user_id = session('uid');
		if($_GET['type']=='mess'){

			$arrMess = M('message')->where(" issys = 1 and uid= $user_id ")->select();
			$this->assign('arrMess',$arrMess);
			$this->assign('type',$_GET['type']);
			$this->display();
		}
		
		//我的讨论
		if($_GET['type']=='debate'){
			$this->assign('type',$_GET['type']);
			$this->display();
		}
	}

	/*
		方法名：我的讨论-搜索
		操作员：李挺
		创建时间 15/06/26

	*/
	public function searMess(){
		//我发起的讨论
		//  type ???1，表??? mySend    ???2 表示 myJoin
		$uid = session('uid');
		if($_GET['type']==3){
			$arrMess = M('message')->where(" uid= $uid and parent_id = 0 and issys=0")->select();
		}
		
		//参与的讨???
		if($_GET['type']==2){
			$arrMess = M('message')->where(" uid= $uid and issys=0 ")->select();
		}

		if(!empty($arrMess)){
			$count = count($arrMess);//总记录数
			$pageSize = 10;
			$pageAll = ceil($count/$pageSize);//总页???
			$page = $_GET['page'] ? $_GET['page'] : 1;//当前页数
			$pageUp = $page-1>0 ? $page-1 : 1;//上一???
			$pageDown = $page+1 > $pageAll ? $pageAll : $page+1;//下一???
			$offest = ($page-1)*$pageSize;
			
			if($_GET['type']==3){
				$show = $page.'/'.$pageAll." <a href='javascript:;' onclick='mySend(1,3)'> frist </a> <a href='javascript:;' onclick='mySend($pageUp,3)'> <-- </a>  <a href='javascript:;' onclick='mySend($pageDown,3)'>| --> </a>  <a href='javascript:;' onclick='mySend($pageAll,3)'> end </a>";

				$arrMess = M('message')->where(" uid= $uid and parent_id = 0 and issys=0 ")->limit("$offest,$pageSize")->select();
			}

			if($_GET['type']==2){
				$arrMess = M('message')->where(" uid= $uid and issys=0 ")->limit("$offest,$pageSize")->select();
				$show = $page.'/'.$pageAll." <a href='javascript:;' onclick='mySend(1,2)'> frist </a> <a href='javascript:;' onclick='mySend($pageUp,2)'> <-- </a>  <a href='javascript:;' onclick='mySend($pageDown,2)'>| --> </a>  <a href='javascript:;' onclick='mySend($pageAll,2)'> end </a>";

			}		
			$arrMess['page'] = $show;
		}
		echo json_encode($arrMess);
	//	unset($arrMess);
	}
		
	/*
		方法名：我的讨论-删除
		操作员：李挺
		创建时间 15/06/26

	*/
	public function MessDel(){
		$mes_id = $_POST['mes_id']; 
		if(M('message')->where(" mes_id = $mes_id ")->delete()){
			echo 200;	//删除成功
		}else{
			echo 201;	//删除失败
		}
	}


    public function honor(){
	   $this->display("honor");
    }

    public function coupons(){
	   $this->display("coupons");
    }


/*
		方法名：密码修改
		操作员：周白???
		创建时间???15/06/29
*/    public function password_reset(){
	   $this->display("password_reset");
    }
/*
		方法名：密码修改执行修改
		操作员：周白???
		创建时间???15/06/29
*/
public function password_reset1(){
		$model=D("user");
		$userid = session('uid');
		$old_password=md5($_POST["old_password"]);
		$user=$model->query("select * from user where uid='$userid'");
		if($old_password==$user[0]["password"]){
			$new_password2=md5($_POST["new_password2"]);
			
			if($model->execute("update user set password = '".$new_password2."' where uid='$userid'")){		unset($_SESSION['uid']); 
				unset($_SESSION['username']); 
				$this->success('修改成功',U('index.php/Home/Index/index'));

			}
			
		}else{          
			$this->success('旧密码输入有???',U('index.php/Home/Dashboard/password_reset'));
		}
	}

}
