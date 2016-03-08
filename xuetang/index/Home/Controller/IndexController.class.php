<?php
namespace Home\Controller;
use Think\Controller;
header("Content-Type:text/html;charset=utf-8");
class IndexController extends Controller {
	//主页面展示
    public function index(){
        
        //查询最热课程
        $kec          = D('College')->kec();
        //查询前三学院
        $college      = D('College')->get_college();

        //查询全部课程
        $num		  = D('College')->get_all_course();
        //查询更多学院
        $more_college = D('College')->get_more_college();
        foreach($college as $i=>$v)
        {
                $course_num = D('College')->get_course($v['c_id']);
                $course_arr = D('College')->get_course_level($v['c_id']);
                $college[$i]['course_num'] = $course_num;
                $college[$i]['course_arr'] = $course_arr;
        }

        $this->assign('num',$num);
        $this->assign('kec',$kec);
        $this->assign('college',$college);
        $this->assign('more_college',$more_college);
        $this->display("index");
    }
	
//登陆
	public function login(){
		  
		  //require '/indexendor/SaeTOAuthV2.class.php';
		 //   $gg = dirname(dirname(dirname(__FILE__)));
		   // import("vendor.SaeTOAuthV2",dirname(dirname(dirname(__FILE__))));
		  //  $o = new SaeTOAuthV2( C('WB_AKEY') , C('WB_SKEY') ); 
		  //  $code_url = $o->getAuthorizeURL( C('WB_CALLBACK_URL') );
		  //  $this->assign('code_url',$code_url);
		  
		//echo $_SERVER['REQUEST_URI'];die;
		
		$this->display("login");
	}
	  public function register(){
              
              
	   if(isset($_GET['uid'])==true) $this->assign('uid',$_GET['uid']);  //邀请者id

       $this->display("register");
    }

	public function logindo(){
          $name=$_POST["dluname"];
		  $pwd=MD5($_POST["pwd"]);
		 //print_r($name);print_r($pwd);die;
           $obj=D('user');
				//判断用户账号类型
				//是否为邮箱
					/*返回值
					5.没有该用户,
					6.密码错误,
					2.ok
					*/
				 $zhengzhe="/^\w+@\w+(\.)\w+$/";
				 If(preg_match($zhengzhe,$name)){
				  $arr=$obj->mdloginemail($name,$pwd);//print_r($arr);
					  //echo (123123123);die;
					  if($arr=="0"){
					  echo 5 ;die;
					  }
					  if($arr=="1"){
					  echo 6 ;die;
					  }
					   if($arr=="2"){
						 //  session('username') = $arr['username'];
					   //登陆成功!模板已设置session
					   //redirect('index', 3, '登陆成功,页面跳转中');
					  echo 2 ;die;
					  }
				  }
				 
				 //是否为手机号
					/*返回值
					3.没有该用户,
					4.密码错误,
					2.ok
					*/
				 $zhengzhe1="/^1[3,5,8]\d{9}$/";
				 If(preg_match($zhengzhe1,$name)){
                $arr=$obj->mdloginphone($name,$pwd);//print_r($arr);
					  if($arr=="0"){
					  echo 3 ;die;
					  }
					  if($arr=="1"){
					  echo 4 ;die;
					  }
					   if($arr=="2"){
					   //登陆成功!模板已设置session
					  // redirect('index', 3, '登陆成功,页面跳转中');
					  echo 2 ;die;
					  }

				   }
				   	/*返回值
					0.没有该用户,
					1.密码错误,
					2.ok
					*/
				  if($name!="" and $pwd!=""){
					  $arr=$obj->mdlogin($name,$pwd);//print_r($arr);
					  if($arr=="0"){
					  echo 0 ;die;
					  }
					  if($arr=="1"){
					  echo 1 ;die;
					  }
					   if($arr=="2"){
					    //redirect('index', 3, '登陆成功,页面跳转中');
					   //登陆成功!模板已设置session
					  echo 2 ;die;
					  }
				  }


	}
	/*注册*/
	/*返回值
	0.ok,
	1.账号已存在,
	*/
  function zcedo1(){
		 $name=$_POST['username'];
		 $obj=D('user');
		 $arr=$obj->mbzceuser($name);
		if($arr=="1"){
		   echo 1 ;
		   }
			if($arr=="0"){
		   echo 0 ;
		   }
		}
  function zcedo2(){
		 $name=$_POST['phone_number'];
		 $obj=D('user');
                 //正则判断
      		     /*返回值:::0.ok,3.账号ok,*/
			     /*发送值:::3.ok,2.账号已存在,*/
         $zhengzhe="/^\w+@\w+(\.)\w+$/";
		 If(preg_match($zhengzhe,$name)){
				     $arr=$obj->mbzceemail($name);
				      //print_r($arr);die;
					  if($arr=="0"){
					  echo 3;die;
					  }
					  if($arr=="1"){
					  echo 2;die;
					  }
		 }
			 //正则判断
	                 //是否为手机号
					 /*
					 非空echo 1;
					 */
		 $zhengzhe1="/^1[3,5,8]\d{9}$/";
		 If(preg_match($zhengzhe1,$name)){
		           $arr=$obj->mbzcephone($name);
                      if($arr==""){
					  echo 0;die;
					  }
					  if($arr=="1"){
					  echo 1;die;
					  }
				
				 }
         else{
		 echo 4;die;
		 }
	}
	function yaoqm(){
       $name=$_POST['phone_number'];//print_r($name)
       $obj=D('user');
	     $zhengzhe="/^\w+@\w+(\.)\w+$/";
		 If(preg_match($zhengzhe,$name)){
				     $arr=$obj->mbzceemail($name);
				      //print_r($arr);die;
					  if($arr=="1"){
					  echo 1;
					  }
				      if($arr=="0"){
                        //判断有没有cookie/session
						 if(cookie('str')=="" or cookie('email')!=$name ){
							 echo 0;
							$str = substr(md5(time()), 0, 6);
							setcookie('str',$str,time()+180);
							/*设置与cookie想配对的邮箱*/
							setcookie('email',$name,time()+180);
							/**/
							 //print_R(cookie('str'));
						    sendMail("$name","学堂网邀请码","学堂网邀请码为----(<h1>$str</h1>)------请你尽快前往注册页面输入");
		                    //cookie('str',$str);
                            
						   }else{
							echo 5; 
							}
                       }			
				  }		
		 }
		function yzm(){
		 $email=$_POST['phone_number'];
		 $name=$_POST['validate'];//print_r($name);die;
		 if(cookie('str')==$name && cookie('email')==$email){
		 echo 1;
		 }else{
		 echo 0;
		 }
		}
      function pwd(){
	  $pwd=$_POST['pwd'];//echo $pwd;
			  if($pwd==""){
			  echo 0;
			  die;
			  }
			  if($pwd!=""){
				     $zhengzhe="/^[a-z]\w{5,17}$/i";
						If(preg_match($zhengzhe,$pwd)){
						  echo 1;
						  }else{
						  echo 2;
						  }
				  }
	  }
	  /**
      此处代码为二次修改BUG,
	  即,前台ajax异步造成信息不能及时反馈.
	  将前台onsubmit改为提交onclick
	  时间15年7月20~22号
	  */
	  function zcdo(){
		  $name=$_POST["username"];
          $email=$_POST["phone_number"];
          $pwd1=$_POST["pwd"]; /*验证完成后需要$pwd=md5($pwd1)*/
          $validate=$_POST["validate"];
          $test_pwd=$_POST["test_pwd"];
		  /**
		   1.用户名为空:
		   2.邮箱为空:
		   3.邀请码为空:
		   4.密码为空:
		   5.输入密码为空:
		   6.两次密码不一致: 注::1~6是防止用户禁点js后自己用表单提交,
		   7.用户名已存在:
		   8.用户名可以使用:    前台无需判断
		   9.账号不符合邮箱规则.die;掉:
		   10.账号唯一          前台无需判断
		   11.账号不唯一;不能注册
		   12.邀请码错误;
		   13.密码符合规则      前台无需判断
		   14.密码不符合规则 
           15.账号注册成功      前台直接跳转
		   16.账号注册失败 ;

		  */
      // print_R($name);print_R($email);print_R($pwd);print_R($validate);print_R($test_pwd);die;
        if($name==""){
		echo 1;
		die;
		}
		 if($email==""){
		echo 2;
		die;
		}
		 if($validate==""){
		echo 3;
		die;
		}
		 if($pwd1==""){
		echo 4;
		die;
		}
		 if($test_pwd==""){
		echo 5;
		die;
		}
		if($test_pwd!=$pwd1){
		echo 6;
		die;
		}
		/*判断用户名无需正则*/
		if($name!=""){
		 $obj=D('user');
		 $arr=$obj->mbzceuser($name);
		  if($arr=="1"){
		   echo 7 ;
		   die;
		   }
		  if($arr=="0"){
		   //echo 8 ;
		   true;
		   }
		
		}
		/*判断账号*/
		if($email!=""){
		 $obj1=D('user');
         $zhengzhe="/^\w+@\w+(\.)\w+$/";
		 If(preg_match($zhengzhe,$email)){
           $arr=$obj->zmbzceuser($email);
		    if($arr=="1"){
			echo 11;die;
			  }
			if($arr=="0"){
			//echo 10;
			true;
			  }
		 }else{
			 echo 9;
			 die;
		    }
		}
		/*判断邀请码*/
		if(cookie('str')!=$validate or cookie('email')!=$email){
		echo 12;die;
		}
		/*判断密码是否符合规则*/
	    $zhengzhe="/^[a-z]\w{5,17}$/i";
		If(preg_match($zhengzhe,$pwd1)){
		  /*如果符合规则*/
          $pwd=md5($pwd1);
		  //echo 13;
		  true;
		  }
		  else{
		  echo 14;die;
		  }


          //print_R($name);print_R($email);print_R($pwd);die;
		/*---------邀请注册start---------*/
		if(isset($_POST['uid'])){
			if($arr = M('users')->add($_POST)){
				//邀请人的id
				$uid = unserialize($_POST['uid']);	
				$data['uid'] = $uid['uid'];
				$data['ini_uid'] = mysql_insert_id();
				$data['reg_time'] = time();
				if(M('invite_register')->add($data)){
					$url="http://ucenter.lltoy.com/index.php/home/Index/xt_insetdata?key=123456&=xt_webname=xtzx&xt_username=$name&email=$email";
					file_get_contents($url);//TODO添加成功
					redirect('login', 3, '注册成功,页面跳转中');	
				}else{
					redirect('Index', 3, '注册失败,页面跳转中');
				}
			}
		}else{
		/*---------邀请注册end---------*/

			 if($name!="" && $email!="" && $pwd!=""){
			  $obj=D('user');
			  $arr=$obj->mbzcedo($name,$pwd,$email);
					if($arr!=""){
							 /*ucentre下面是*/
							$url="http://ucenter.lltoy.com/index.php/home/Index/xt_insetdata?key=123456&=xt_webname=xtzx&xt_username=$name&email=$email";
							file_get_contents($url);
							 /*ucentre上面是*/
					 session('username',$name);
                     echo 15; 
					// redirect('login', 3, '注册成功,页面跳转中');	  
					} 
			 }
			 else{
				 echo 16; 
				 //redirect('Index', 3, '注册失败,页面跳转中');
			 }
		} 

	  }
	  //退出
	  function loginout(){
		   unset($_SESSION['uid']); 
		   unset($_SESSION['username']); 
		   $this->display("index");
	  //模板层设置的session
	  //session('uid',$arr1[0][uid]); 
	  //session('username',$arr1[0]['username']);
	  }
 }
    
?>
