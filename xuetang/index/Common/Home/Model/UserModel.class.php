<?php
namespace Home\Model;
use Think\Model;
// 本类由系统自动生成，仅供测试用途
class UserModel extends Model {
	/*登陆返回值
	0.没有该用户,
	1.密码错误,
	2.ok
	*/
	//普通	用户名查询
   public function mdlogin($name,$pwd){
	  $arr=$this->query("select * from user where username ='$name'");

	  $arr1=$this->query("select * from user where username ='$name'and password='$pwd'");
	  if(empty($arr)){
	   return (0);die;
	  }
	  if(empty($arr1)){
      return (1);die;
	  }else{
		  //ok
	  session('uid',$arr1[0][uid]);
	  session('username',$arr1[0]['username']);
	  return(2);
	  
	   
       
	   //ession('id',''); 
	   }

   }//邮箱查询
      public function mdloginemail($name,$pwd){
	  $arr=$this->query("select * from user where email ='$name'");
	  $arr1=$this->query("select * from user where email ='$name'and email_pwd='$pwd'");
	  if(empty($arr)){
	   return (0);die;
	  }
	  if(empty($arr1)){
      return (1);die;
	  }else{
     //ok 
	 session('uid',$arr1[0][uid]);
	 session('username',$arr1[0]['username']);
	 return(2);
	
	   
	   }

   }//手机查询
      public function mdloginphone($name,$pwd){
	  $arr=$this->query("select * from user where phone ='$name'");
	  $arr1=$this->query("select * from user where phone ='$name'and phone_pwd='$pwd'");
	  if(empty($arr)){
	   return (0);die;
	  }
	  if(empty($arr1)){
      return (1);die;
	  }else{
		  //ok 
	   session('uid',$arr1[0][uid]);
	   session('username',$arr1[0]['username']);
	   return(2);
	   
	  

	   }

   }
   	/*注册返回值
	0.ok,
	1.账号已存在,
	*/
     public function mbzceuser($name){
	  $arr=$this->query("select * from user where username ='$name'");
	  //$_SESSION['id']=$arr[0][id];
	   //
     //return (session('id'));die;
	  if(empty($arr)){
	   return (0);die;
	  }
       else{
	   return(1);
	   }

   }
    /**总注册返回值
	0.ok,
	1.账号已存在,
	*/
      public function zmbzceuser($email){
	  $arr=$this->query("select * from user where email ='$email'");
	  //$_SESSION['id']=$arr[0][id];
	   //
     //return (session('id'));die;
	  if(empty($arr)){
	   return (0);die;
	  }
       else{
	   return(1);
	   }

   }
    /*注册返回值
	0.ok,
	1.账号已存在,
	*/
     public function  mbzcephone($name){
		   //return (123123);die;
	  $arr=$this->query("select * from user where phone ='$name'");
	   if(!empty($arr)){
	   return (1);
	    }
       else{
	   return(0);
	   }
	 
	 }
	  public function mbzceemail($name){
	   $arr=$this->query("select * from user where email ='$name'");
	   if(!empty($arr)){
	   return (1);
	   }
       else{
	   return(0);
	   }
	 
	 }
	 public function mbzcedo($name,$pwd,$email){
     $arr=$this->query("INSERT INTO user(username,password,email,email_pwd,email_activate) VALUES('$name','$pwd','$email','$pwd',1)");
     return($arr);
	 }
	 

}

?>