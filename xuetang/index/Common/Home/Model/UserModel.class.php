<?php
namespace Home\Model;
use Think\Model;
// ������ϵͳ�Զ����ɣ�����������;
class UserModel extends Model {
	/*��½����ֵ
	0.û�и��û�,
	1.�������,
	2.ok
	*/
	//��ͨ	�û�����ѯ
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

   }//�����ѯ
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

   }//�ֻ���ѯ
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
   	/*ע�᷵��ֵ
	0.ok,
	1.�˺��Ѵ���,
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
    /**��ע�᷵��ֵ
	0.ok,
	1.�˺��Ѵ���,
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
    /*ע�᷵��ֵ
	0.ok,
	1.�˺��Ѵ���,
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