<?php
namespace Home\Controller;//命名空间
use Think\Controller;
//学堂在线之广场
class CommunityController extends Controller 
{
	//进入广场页讨论区
    public function index()
	{
        $model=D('Community');
		$value=$model->index();
		$this->assign('arr',$value);
        $this->display();
    }
	//点击查看全部显示活动
	/* public function activity()
    {
        //接受id
		$id=I('get.id');
		//如果ID为空赋给它1
		if(empty($id)){
			$id=1;
		}
		//echo $id;die;
		$model=D('Community');
		$array=$model->activity($id);
        //print_r($array);
		$this->assign('page',$array[1]);
		$this->assign('arr',$array[0]);
		$this->display();
    }*/
    //点击查看全部显示活动
	 public function activity()
    {    	
    	//接受id
		$id=I('get.id');
		//如果ID为空赋给它1
		if(empty($id)){
			$id=1;
		}
		//echo $id;die;
		$model=D('Community');
		$array=$model->activity($id);

		$this->assign('id',$array[0]);
		$this->assign('page',$array[1]);
		$this->assign('paa',$array[2]);
		$this->assign('pss',$array[3]);
		$this->assign('page_num',$array[4]);
		$this->assign('arr',$array[5]);
		$this->display();
		
	}
 
    //我的发帖
    public function post()
    {
    	//$_SESSION['uid'] = 2;
		//判断是否登录
    	$value =  $_SESSION['uid']; //session
    	//echo $value;die;
    	if(!isset($value)){
    		echo "<script>alert('您还没登录，请登录');history.go(-1)</script>";die;
    	}
    	$this->display();
    }
	//处理帖子添加
	public function create()
    {
    	
		//接收值	
		$id=I('post.post_class_id');//哪类帖子
		$title=I('post.post_title');//标题
		$content=$_POST['post_content'];//内容

		if(empty($title)){
			exit("<script>alert('标题不能为空');history.go(-1)</script>");
		}

		if(empty($content)){
			exit("<script>alert('内容不能为空');history.go(-1)</script>");
		}

		$data['post_title']=$title;
		$data['post_content']=$content;
		$data['post_class_id']=$id;
		$data['user']=$_SESSION['uid'];
		$data['post_addtime']=time();
		//print_r($data);die;
		
		//$data['is_follow']=1;
		$model=D('Community');
		$arr=$model->create($data);
		//添加成功跳转
		if($arr)
		{
			$this->redirect("index.php/Home/Community/activity?id=$id");
		}
    }
   	//帖子的详细信息
	public function post_details()
	{
		$id=I('get.id');//帖子的ID

		$model=D('Community');
	    $array=$model->details($id);

	    $value =  $_SESSION['uid']; //session
	    
	    //该帖子是否被该用户赞过
	    
	    $zan=M('post_zan')->where(" post_id=$id and user_id='$value' ")->find();

	    if(empty($zan)){
	    	$post_zan=0;
	    }else{
	    	$post_zan=1;
	    }

	    $zan_num=M('post_zan')->where(" post_id = '$id' ")->count();
	   
		/*$this->assign('arr',$res);
		$this->assign('li',$replys);	 
		$this->assign('lists',$again);
		$this->assign('page',$show);// 赋值分页输出
		$this->assign("id",$id);*/
		$this->assign('arr',$array[0]);
		$this->assign('li',$array[1]);	 
		$this->assign('lists',$array[2]);
		//$this->assign('page',$array[3]);// 赋值分页输出
		$this->assign("id",$array[3]);
		$this->assign("zan",$post_zan);
		$this->assign("zan_num",$zan_num);
		$this->display('post_details');
	}
//添加回复内容
    public function repay_con()
    {
       $User = M("gc_reply"); // 实例化User对象
	   $data['content']=$_POST['content'];
	   $data['post_id']=$_POST['post_id'];
	   $data['rtime']=time();
	   $data['runame']=$_SESSION['uid']; //登录的用户名称
	   $add=$User->add($data);
       if($add);echo 200;
     }   
//点赞
    public  function haveclick(){
	   
	   $data['post_id']=$_POST['post_id1'];
	   $value =  $_SESSION['uid']; //session
	   
	   $data['user_id']=$value;

	   $res=M('post_zan')->add($data);

	   if($res);echo 200;	   
	}
//取消赞
    public  function cancelclick(){
	   $post_id1=$_POST['post_id1'];

	   $value =  $_SESSION['uid']; //session
	   
	   $ress=M('post_zan')->where(" post_id = '$post_id1' and user_id='$value' ")->delete();

	   if($ress);echo 2000;		
	} 
}