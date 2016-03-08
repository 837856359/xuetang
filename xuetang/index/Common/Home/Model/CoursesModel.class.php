<?php
// 课程首页的model
namespace Home\Model;
use Think\Model;
class CoursesModel extends Model {
	//课程表，教师表，学院表三表联查
	function courseList(){
		$course = M("course")->join("course_chapter on course.cid=course_chapter.cid")->join("teacher on course_chapter.cid=teacher.cid")->join("college on teacher.c_id=college.c_id")->select();
		return $course;
	}
	function page_courses($page_what,$page_size,$where)
	{
		$page_start = ($page_what-1)*$page_size;
		$sql = "SELECT course.*,teacher.name,teacher.job,college.* FROM course INNER JOIN teacher ON course.teacher_id = teacher.id INNER JOIN college on course.c_id = college.c_id";
		if(!empty($where))
		{
			$sql .= " where course.c_id = '".$where."'";
		}
		$sql .= " limit ".$page_start.",".$page_size."";
		$course = M('course')->query($sql);
		return $course;
	}
	//获取给定ID课程
	public function get_course($id,$type)
	{
		if($type == 2)
		{
			$course = M('course')->join("teacher on course.teacher_id=teacher.id")->join("college on course.c_id=college.c_id")->where('course.cid = \''.$id.'\'')->find();
			$course['course_id'] = $id;
			return $course;
		}
		elseif($type == 3)
		{
			$course = M('course')->join("teacher on course.teacher_id=teacher.id")->join("college on course.c_id=college.c_id")->where('course.c_id = \''.$id['c_id'].'\' and course.sid = \''.$id['s_id'].'\'')->select();
			//return M('course')->getLastSql();
			$course['course_id'] = $id;
			return $course;
		}
	}
 //搜索功能循环显示
		//查询学科分类  循环显示
		function xk_model(){
			  $xk = $this->query("select * from major");
			  return $xk;
		}
		//查询学院  循环显示
		function xy_model (){
			$xy = $this->query("select * from college limit 4");
			//print_r($xy);die;
			foreach($xy as $i=>&$v)
			{
				$v['num'] = M('course')->where('c_id = \''.$v['c_id'].'\'')->count();
			}
			return $xy;
		}
	

  //科学领域搜索后     列表显示
		function kexue_list($m_id){
	
			 $kexue_list=M('major')->join(' course ON course.mid = major.m_id')->join("teacher on teacher.cid=course.cid")->join("college on college.c_id=course.c_id")->where("course.mid='$m_id'")->select();
			 return $kexue_list;
		}
//垂直领域搜索
	   //查询学院下的所有课程 [基础阶段]
		function kc_model($c_id){
			 $kc_model= $this->query("select * from college inner join major on college.c_id=major.c_id inner join course on major.m_id=course.mid inner join teacher on teacher.cid=course.cid where college.c_id='$c_id' and course.sid=1");
			 //echo $this->getLastSql();
                         return $kc_model;
		}
		 //查询学院下的所有课程 [专业阶段]
		function  kc_model_zhuanye($c_id){
			   $zhuanye= $this->query("select * from college inner join major on college.c_id=major.c_id inner join course on major.m_id=course.mid inner join teacher on teacher.cid=course.cid where college.c_id='$c_id' and course.sid=2");
		   return $zhuanye;
		}
		 //查询学院下的所有课程 [高级阶段]
	   function kc_model_gaoji($c_id){
			 $gaoji= $this->query("select * from college inner join major on college.c_id=major.c_id inner join course on major.m_id=course.mid inner join teacher on teacher.cid=course.cid where college.c_id='$c_id' and course.sid=3");
		return $gaoji;
	   }
		//查询学院下的所有课程 [实训阶段]
		function kc_model_shixun($c_id){
			   $kc_model_shixun= $this->query("select * from college inner join major on college.c_id=major.c_id inner join course on major.m_id=course.mid inner join teacher on teacher.cid=course.cid where college.c_id='$c_id' and course.sid=4");
			   return $kc_model_shixun;
		}


}
?>
