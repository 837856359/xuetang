<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
//课程进度 控制器
class CourserateController extends Controller{
	//显示进度的页面
	public function rate(){
		//header("location:../Courseinfo/info");
		$cid=$_SESSION['cid'];
		$uid=$_SESSION['uid'];
		//显示主题范围
		$model=D('chapter');
		$arr=$model->where('cid='.$cid)->select();
		//print_r($arr);die;
		foreach($arr as $k=>$v){
			$ch_id=$v['ch_id'];
			$knowpoint=D('knowpoint');
			$info=$knowpoint->where('ch_id='.$ch_id)->select();
			
			foreach($info as $key=>$val){
				//$arr[$k]['know'][$key]=$val['know'];
				$arr[$k]['know'][$val['kid']]['know']=$val['know'];
				$a=M("question")->where("kid=".$val['kid'])->select();
				foreach($a as $x=>$l){
					$a[$x]['scores']=M("score")->where("qid=".$l['qid']." and uid=".$uid)->select();
				}
				$arr[$k]['know'][$val['kid']]['question']=$a;
			}
		}
		//echo "<pre>";print_r($arr);die;
		$this->assign("arr",$arr);
		//课程名称
		$data=M("course")->where("cid='$cid'")->select();
		$cname=$data[0]['cname'];
		$this->assign("cname",$cname);
		$this->display();
	}
	
}
?>