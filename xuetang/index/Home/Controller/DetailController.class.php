<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");

class DetailController extends Controller {
	/*
		*显示课程首页
	*/
    public function detail_list(){
		//接值：课程ID
		$cid=$_GET['cid'];
		//print_r($cid);die;
		//echo $cid;die;
		//记课程id的cookie
		cookie('cid',$cid); 
		session('cid',$cid); 
		$model=D('chapter');
		$arr=$model->where('cid='.$cid)->select();//查询课程
		foreach($arr as $k=>$v){
			$ch_id=$v['ch_id'];
			$knowpoint=D('knowpoint');
			$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节
			
			foreach($info as $key=>$val){
				$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容
			}
			
		}
		//print_r($arr);die;
		//echo $cid;die;
		//课程，老师，相关数据查询
		$data=M('major')->join('college ON college.c_id = major.c_id')->join('course ON course.mid = major.m_id')->join('teacher ON teacher.id = course.teacher_id')->where("course.cid='$cid'")->find();
		
		//print_r($data);die;
		//每单元及每单元的知识点
		$unit=M("chapter")->query("select * from course inner join chapter on course.cid=chapter.cid where course.cid='$cid'");

		//相关课程
			//专业id
			$mid=M('course')->field('mid')->where("cid='$cid'")->find();
			$mid=$mid['mid'];

			//查此专业下的课程
			$course = M("course")->join("teacher on teacher.cid=course.cid")->where("mid='$mid' and course.cid!='$cid'")->limit('6')->select();
		$uid=$_SESSION['uid'];
				$join=M('usercourse')->where("cid='$cid' and uid='$uid'")->find();
				if($join){
					$data['tag']=1;
				}else{
					$data['tag']=0;
				}
					
		

					//print_r($data);die;
		//折线图时间日期
		$date_time = array(
			date("Y-m-d",time()-86400*4),
			date("Y-m-d",time()-86400*3),
			date("Y-m-d",time()-86400*2),
			date("Y-m-d",time()-86400),
			date("Y-m-d",time())				
		);

		$date_str = implode("','",$date_time);

		$date_time_str = "'".$date_str."'";
		
		

		//折线图每天报名人数
		$usercourse = M('usercourse');
		$sql = "select count(uid) as num,time from usercourse where cid='$cid' group by time ";
		$num = $usercourse->query($sql);
		//print_r($num);die;
		for($i=0;$i<count($num);$i++){
			if($num[$i]['time']==$date_time[0]){
				$num_arr[0] =  $num[$i]['num'];		
			}else{
				if($num_arr[0]!=0){}else{
				$num_arr[0] = 0;}
			} 
			if($num[$i]['time']==$date_time[1]){
				$num_arr[1] =  $num[$i]['num'];		
			}else{
				if($num_arr[1]!=0){}else{
				$num_arr[1] = 0;}
			} 
			if($num[$i]['time']==$date_time[2]){
				$num_arr[2] =  $num[$i]['num'];		
			}else{
				if($num_arr[2]!=0){}else{
				$num_arr[2] = 0;}
			} 
			if($num[$i]['time']==$date_time[3]){
				$num_arr[3] =  $num[$i]['num'];		
			}else{
				if($num_arr[3]!=0){}else{
				$num_arr[3] = 0;}
			} 
			if($num[$i]['time']==$date_time[4]){
				$num_arr[4] =  $num[$i]['num'];		
			}else{
				if($num_arr[4]!=0){}else{
				$num_arr[4] = 0;}
			} 

		}
		//print_r($num_arr);die;
		$num_str = implode(",",$num_arr);
		//print_r($num_str);die;

		//总人数
		$people_count=M("usercourse")->query("select count(*) as ucount from usercourse where  cid='$cid'");
		$data['ucount']=$people_count[0]['ucount'];

		
		$about = M()->query("select *,(select count(*) from usercourse where cid=a.cid) as num from course a left join teacher b on a.teacher_id=b.id where is_hot=1 limit 6");
		$course = M('course')->query("select * from course a left join teacher b on a.teacher_id=b.id where a.cid=$cid");
		//print_r($course);die;
		$this->assign("date_time_str",$date_time_str);
		$this->assign('about',$about);
		$this->assign('num_str',$num_str);
		
		$this->assign('course',$course[0]);
		$this->assign('unit',$unit);
		$this->assign('data',$data);
		//print_r($data);die;
		$this->assign('arr',$arr);
        $this->display();
    }


	/*
		*加入课程
	*/
	public function detail_join(){
		$cid=$_COOKIE['cid'];
		$uid=$_SESSION['uid'];
		if(empty($uid))
		{
			echo "<script>alert('请先登录!');location.href='../Index/login'</script>";
		}
		else
		{
			$time=date("Y-m-d");
			$sql = "insert into usercourse(uid,cid,time) values('$uid','$cid','$time')";
			$join=M("usercourse")->execute($sql);
			if($join)
			{
				echo "<script>alert('添加成功!');location.href='detail_list?cid=".$cid."'</script>";
			}
			else
			{
				echo "失败！";
			}
		}
	}






}
