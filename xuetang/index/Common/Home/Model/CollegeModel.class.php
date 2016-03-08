<?php
namespace Home\Model;
use Think\Model;
class CollegeModel extends Model {
	//根据ID排名查询前三条学院
	Public function get_college()
	{
		$sql = "SELECT college.c_name,college.c_id,college.img,college.xyjianjie,college.Principal,course.cname FROM college INNER JOIN major ON college.c_id = major.c_id INNER JOIN course on college.c_id = course.c_id group by c_name order by c_id asc limit 3";
		$college = M('college')->query($sql);
		return $college;
	}
	//查询热门课程
	Public function kec()
	{
		$kec=M("college")->query("SELECT cname,sid,cid,intro,intro,cimg,people,addtime,video,college.c_id,c_name FROM course INNER JOIN college on course.c_id=college.c_id ORDER BY people DESC LIMIT 8");
		return $kec;
	}
	//查询全部课程
	public function get_all_course()
	{
		$course_all = M('course')->count();
		return $course_all;
	}
	//根据给定学院ID获取课程数量
	public function get_course($id)
	{
		//$sql = "SELECT COUNT(*) as num FROM course WHERE c_id = '".$id."'";
		$num = M('course')->where('c_id=\''.$id.'\'')->count();
		return $num;
	}
	/*根据给定学院ID获取该学院基础，专业，高级阶段对应课程*/
	public function get_course_level($id)
	{
		//查询所有课程。
		/*$arr = M('course')->where('c_id=\''.$id.'\'')->field('cname,sid')->select();
		return $arr;*/
		//分组查询，每个阶段查询代表课程
		$sql = "SELECT cname,sid,cimg,cid FROM course WHERE c_id = '".$id."' group by sid";
		$arr = M('course')->query($sql);
		foreach($arr as $i=>$v)
		{
			$stage_arr = $this->get_stage($v['sid']);
			$arr[$i]['stage_name'] = $stage_arr['s_name'];
			$arr[$i]['stage_id'] = $stage_arr['sid'];
		}
		return $arr;
	}

	public function get_stages($id)
	{
		$stage = M('stage')->select();
		foreach($stage as $i=>&$v)
		{
			$v['num'] = M('course')->where('c_id = \''.$id.'\' and sid = \''.$v['sid'].'\'')->count(); 
		}
		return $stage;
	}
	public function get_all_courses($id)
	{
		$sql = "SELECT course.*,teacher.job,teacher.name FROM course LEFT JOIN teacher ON course.teacher_id = teacher.id WHERE course.c_id =$id";
		//echo $this->getLastSql();
                $arr = M('course')->query($sql);
		return $arr;
	}
	//根据给定ID获取阶段数据
	public function get_stage($id)
	{
		$arr = M('stage')->where("sid = '".$id."'")->find();
		return $arr;
	}
	//查询更多学院
	Public function get_more_college()
	{
		$sql = "SELECT college.c_name,college.c_id,college.img FROM college ORDER BY c_id asc limit 3,5";
		$college = M('college')->query($sql);
		return $college;
	}



}
?>