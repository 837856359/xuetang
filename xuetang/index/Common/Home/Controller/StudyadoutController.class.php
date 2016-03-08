<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
//课程进度 控制器
class StudyadoutController extends Controller{

	//教学大纲页面
	public function syllabus(){
        
		$cid=$_SESSION['cid'];//传入课程id
		$type=2;
		$model=D('chapter');
		$arr=$model->field('ch_id,ch_name')->where('cid='.$cid)->select();//查询课程
		//print_r($cid);die;
		foreach($arr as $k=>$v){
			$ch_id=$v['ch_id'];
			$knowpoint=D('knowpoint');
			$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节
			
			foreach($info as $key=>$val){
				$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容
			}
			if($v['is_take']==0||$v['is_take']==2){
				$chid[]=$v['ch_id'];
			}
			
		}      
		$cname = M('course')->where('cid='.$cid)->getField('cname');
        $swf_path = M('outline')->where('ch_id='.$cid)->getField('swf');
		$zhang=$model->where('ch_id='.$chid[0])->select();//查询章节
        $this->assign('swf_path',$swf_path);
        $this->assign('cname',$cname);
		$this->assign('zhang',$zhang);
		$this->assign('arr',$arr);
		$this->assign('type',$type);
		$this->display();//显示课件页面
		
	}

	//教学PPT显示页面
	public function ppt(){
		$cid=$_SESSION['cid'];//传入课程id
	
		$type=3;
		$model=D('chapter');
		$arr=$model->where('cid='.$cid)->select();//查询课程
		//print_r($cid);die;
		foreach($arr as $k=>$v){
			$ch_id=$v['ch_id'];
			$knowpoint=D('knowpoint');
			$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节
			
			foreach($info as $key=>$val){
				$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容
			}
			if($v['is_take']==0||$v['is_take']==2){
				$chid[]=$v['ch_id'];
			}
			
		}
		$cname = M('course')->where('cid='.$cid)->getField('cname');
		$zhang=$model->where('ch_id='.$chid[0])->select();//查询章节
        $new_ch_id = isset($_GET['ch_id']) ? $_GET['ch_id'] : $arr[0]['ch_id'] ;
        $swf_path = M('ppt')->where('ch_id='.$new_ch_id)->getField('swf');
        //print_r($arr);die;
        $this->assign('ch_id',$new_ch_id);
        $this->assign('swf_path',$swf_path);
        $this->assign('cname',$cname);
		$this->assign('zhang',$zhang);
		$this->assign('arr',$arr);
		$this->assign('type',$type);
		$this->display();//显示课件页面
		
	}

    public function sel_swf(){
        $ch_id = $_POST['ch_id'];
        $swf_path = M('ppt')->where('ch_id='.$ch_id)->getField('swf');
        echo $swf_path;
    }

	//试题测试页面
	public function topic(){
		$cid=$_SESSION['cid'];//传入课程id
		$type=4;
		$model=D('chapter');
		$arr=$model->where('cid='.$cid)->select();//查询课程
		//print_r($cid);die;
		foreach($arr as $k=>$v){
			$ch_id=$v['ch_id'];
			$knowpoint=D('knowpoint');
			$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节
			
			foreach($info as $key=>$val){
				$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容
			}
			if($v['is_take']==0||$v['is_take']==2){
				$chid[]=$v['ch_id'];
			}
			
		}
		
		$zhang=$model->where('ch_id='.$chid[0])->select();//查询章节
		$this->assign('zhang',$zhang);
		$this->assign('arr',$arr);
		$this->assign('type',$type);
		$this->display();//显示课件页面
		
	}

	//根据章节id查询对应教程，大纲，ppt，试题
	public function detail(){
		$type = $_GET['type'];
		
		if($type==2){
			$kid = $_GET['id'];
			$knowpoint = M("knowpoint");
			$sql="select kid,dagang from knowpoint where kid=".$kid;
			
			$arr = $knowpoint->query($sql);
			//print_r($arr);die;
			$this->assign("arr",$arr);
			$this->assign("type",$type);
			$this->display("detail");

		}elseif($type==3){
			//echo $type;die;
			$kid = $_GET['id'];
			$knowpoint = M("knowpoint");
			$sql="select kid,ppt_path from knowpoint where kid=".$kid;
			
			$arr = $knowpoint->query($sql);
			//print_r($arr);die;
			$this->assign("arr",$arr);
			$this->assign("type",$type);
			$this->display("detail");

		}elseif($type==4){
			$kid = $_GET['id'];
			$knowpoint = M("knowpoint");
			$sql="select kid,ceshi from knowpoint where kid=".$kid;
			
			$arr = $knowpoint->query($sql);
			//print_r($arr);die;
			$this->assign("arr",$arr);
			$this->assign("type",$type);
			$this->display("detail");
		}
			
	}
}