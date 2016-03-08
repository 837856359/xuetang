<?php
namespace Home\Model;
use Think\Model;
class CommunityModel extends Model 
{
	//进入广场页讨论区
    public function index()
	{
        $Post = M("post"); // 实例化User对象
        $value=$Post->join('post_class ON post.post_class_id=post_class.post_class_id')->limit(7)->select();
		return $value;
    }

	//点击查看全部显示活动
	 public function activity($id)
    {    	
		
		$Post = M("post"); // 实例化User对象

		//print_r($show);
		$count=$Post->where("post_class_id=$id")->count();// 查询满足要求的总记录数

		$page_size=8;
		@$page=$_GET['page']?$_GET['page']:1;
		$page_num=ceil($count/$page_size);
		$page_limit=($page-1)*$page_size;
		//print_r($arr);die;

		$paa=($page-1<1)?1:$page-1;
		$pss=($page+1>$page_num)?$page_num:$page+1;
				
		$value=$Post->where("post_class_id=$id")->limit("$page_limit,$page_size")->select();
		$array=array($id,$pas,$paa,$pss,$page_num,$value);

		return $array;
		
	}

	//帖子的详细信息
	public function details($id)
	{
		$Post = M("post"); // 实例化post对象
		//$res=$Post->where("post_id=$id")->select();//所有数据
	    $res=$Post->join(" user ON post.user = user.uid ")->where("post_id=$id")->select();//所有数据
	    //return $res;die;
		
		$User = M('gc_reply'); // 实例化User对象
	
		$again = $User->join(" user ON gc_reply.runame = user.uid ")->where("post_id='$id'")->select();
		
        $replys=$User->query("SELECT COUNT(post_id) as num from  gc_reply where post_id='$id'"); 

        $array=array($res,$replys,$again,$id);
        return $array;
	}
	//处理帖子添加
	public function create($data)
	{		
		$obj = M('post');
		$arr=$obj->add($data);
		return $arr;
	}
}