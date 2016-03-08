<?php
namespace Home\Controller;
use Think\Controller;

//课程信息 控制器
class CourseinfoController extends Controller{
	//显示课程信息的页面
	public function info(){
		$cid=$_SESSION['cid'];
		$num_all = M('chapter')->where('cid = \''.$cid.'\'')->count();
		$page_size = 5;
		$page_all = ceil($num_all/$page_size);
		$page_what = $_GET['page_what']?$_GET['page_what']:1;
		$page_last = $page_what-1>0?$page_what-1:1;
		$page_next = $page_what+1<=$page_all?$page_what+1:$page_all;
		$page = "<div id='pages'>共计".$num_all."章章节,".$page_all."页，目前第".$page_what."页&nbsp;&nbsp;&nbsp;&nbsp;<a href='info?page_what=1'>首页</a><a href='info?page_what=".$page_last."'>上一页</a><a href='info?page_what=".$page_next."'>下一页</a><a href='info?page_what=".$page_all."'>尾页</a></div>";
		$this->assign('page',$page);
		$page_start = ($page_what-1)*$page_size;
		$chapter_name=M('chapter')->where("cid='$cid'")->limit($page_start,$page_size)->select();
		$chapter_other=M('chapter')->where("cid='$cid'")->select();
		$cname=M("course")->getField('cname');
		$this->assign('chapter_name',$chapter_name);
		$this->assign('chapter_other',$chapter_other);
		$this->assign("cname",$cname);
		$this->display("info");
	}
	/*
	处理文件下载
	type:1  提纲下载
		 2	课件下载
		 3	课程代码下载
	*/
	
	public function info_down()
	{
		$file_name = $_GET['file_name'];
		//防止文件名中存在中文造成乱码。
		$file_name=iconv("utf-8","gb2312",$file_name);
		//资料位于网站根目录下的Public中。
		$file_path = $_SERVER['DOCUMENT_ROOT'].'/Public/';
		if($_GET['type'] == 1)
		{
			$file_path .= 'download/';
		}
		elseif($_GET['type'] == 2)
		{
			$file_path .= 'ware/';
		}
		elseif($_GET['type'] == 3)
		{
			$file_path .= 'code/';
		}
		else
		{
			$this->error("错误！");
		}
		$path = $file_path.$file_name;
		if(!file_exists($path))
		{
			$this->error('文件不存在！');
		}
		else
		{
			header('Content-type: application/pdf');
			header('Content-Disposition: attachment;filename="'.$file_name.'"');
			readfile($path);
		}
	}
	
}
?>