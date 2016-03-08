<?php
namespace Home\Controller;
use Think\Controller;
header("content-type:text/html;charset=utf-8");
//讨论 控制器
class DiscussController extends Controller{
	//左侧所有帖子 封装的方法
	public function left(){
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
		//实例化帖子表
		$card=D("Card");
		//调用model方法
		$data=$card->showCard($cid);
		//echo "<pre>";print_r($data);die;
		//课程名称
		$arr=M("course")->where("cid='$cid'")->select();
		$cname=$arr[0]['cname'];
		$this->assign("cname",$cname);
		$this->assign("data",$data);

	}
	//查询章节下的知识点(公共)
	public function chap(){
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
		//查询出章节
		$model=D('chapter');
		$xly=$model->where('cid='.$cid)->select();
		foreach($xly as $k=>$v){
			$ch_id=$v['ch_id'];
			$knowpoint=D('knowpoint');
			$info=$knowpoint->where('ch_id='.$ch_id)->select();
			//循环显示章节下的知识点
			foreach($info as $key=>$val){
				$xly[$k]['know'][$val['kid']]=$val['know'];
			}
		}
		$this->assign("xly",$xly);
		//echo "<pre>";print_r($xly);die;
	}
	//显示讨论区的页面
	public function discuss(){
		$this->left();
		$this->chap();
		$this->display();
	}
	//添加帖子页面
	function addCard(){
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
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
				$arr[$k]['know'][$val['kid']]=$val['know'];
			}
		}
		$this->chap();
		$this->left();
		$this->assign('arr',$arr);
		$this->display("addcard");
	}

	//添加帖子---主题范围-搜索
	public  function search(){
		$key=$_GET['key'];
		//echo $key;
	}
	//处理添加帖子问题数据
	public function addCardPro(){
		$data=$_POST;
		$data['uid']=$_SESSION['uid'];
		$data['addtime']=date("Y-m-d H:i:s",time());
		$card=M("Card");
		if($card->data($data)->add()){
			echo 1;
		}else{
			echo 0;
		}
	}

	//显示帖子详细内容
	public function cardDetail(){
		//获取帖子的id
		$obj['card_id']=$card_id=$_GET['id'];
		//echo $card_id;die;

		//用户点击时，存放在读帖子表，表示已读过此条帖子
		$read=D("Readcard");
		$obj['uid']=$uid=$_SESSION['uid'];


		//查询数据看该用户是否 已经查看过次帖子   ,没有  则添加
		if(!$read->where("uid='$uid' and card_id='$card_id'")->select()){
			$read->data($obj)->add();
		}
		//该帖子是否被该用户投票
	    $vote=M('card_vote')->where("card_id='$card_id' and vuid='$uid'")->find();
		if(empty($vote)){
	    	$vote=0;
	    }else{
	    	$vote=1;
	    }

		//查看该帖子有多少个投票数
		$vote_num=M('Card_vote')->where("card_id='$card_id'")->count();
		$this->assign("vote",$vote);
		$this->assign("vote_num",$vote_num);
		//实例化model   card
		$card=D("Card");
		$arr=$card->selCard($card_id);
		//echo "<pre>";print_r($arr);
		$this->assign("id",$card_id);
		$this->assign("arr",$arr);
		$this->left();
		$this->chap();
		$this->assign("card_id",$card_id);
		//实例化回复表
		$reply=D("Reply");
		//查询下是否有回复消息
		$replyarr=$reply->selReply($card_id);
		//echo "<pre>";print_r($replyarr);die;
		if($replyarr){
			
			$num=$reply->where("card_id='$card_id'")->count();
			$this->assign("replynum",$num);
			//查询回复是否有评论
			foreach($replyarr as $k=>$v){
				$replyarr[$k]['comment']=$reply->selComments($v['r_id']);
				//该帖子是否被该用户投票
				$replyvote=M('reply_vote')->where("reply_id=".$v['r_id'] ."and uid='$uid'")->find();
				if(empty($replyvote)){
					$replyvote=0;
				}else{
					$replyvote=1;
				}

				//查看该帖子有多少个投票数
				$reply_num=M('reply_vote')->where("reply_id=".$v['r_id'])->count();
				$this->assign("replyvote",$replyvote);
				$this->assign("reply_num",$reply_num);
			}
			//echo "<pre>";print_r($replyarr);die;
			$this->assign("replyarr",$replyarr);

			$this->display("addcomments");
		}else{
			$this->display("addreply");
		}
	}

	//左侧筛选功能  all  1 显示全部  unread  2 未读  unanswered 3 未答复  date 4 最近活动  comments 5 最多活动  votes 6 最多投票
	public  function cardFilter(){
		$uid=$_SESSION['uid'];
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
		//实例化帖子表
		$card=D("Card");
		$key=$_POST['key'];
			if($key==1){
				//显示所有帖子
				$data=$card->showCard($cid);
			}else if($key==2){
				//显示未读帖子
				$data=$card->unRead($cid,$uid);
			}else if($key==3){
				//显示未答复帖子
				$data=$card->unAnswered($cid,$uid);
			}else if($key==4){
				//最近活动（倒序显示帖子）
				$data=$card->showCard($cid);
				
			}else if($key==5){
				//查询出最多活动(回复)
				$data=$card->comments($cid);
			}else if($key==6){
				$data=$card->vote($cid);
			}
			echo json_encode($data);
	}
	

	//测试方法
	public function a(){
		$uid=$_SESSION['uid'];
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
		//实例化帖子表
		$card=D("Card");
		//查询出所有活动
		$data=$card->comments($cid);
		echo "<pre>";
		print_r($data);
	}
	//添加回复到数据库
	public function addReplyPro(){
		$data=$_POST;
		extract($_POST);
		$data['ruid']=$_SESSION['uid'];
		$data['rtime']=date("Y-m-d H:i:s",time());
		//实例化回复表
		$reply=D("Reply");
		if($reply->data($data)->add()){
			$num=$reply->where("card_id='$card_id'")->count();
			$card=D("Card");
			$card->upCard($card_id,$num);
			M("card")->query("update card set reply_num=reply_num+1 where card_id='$card_id'");
			$this->success("回复成功","../../../index.php/Home/Discuss/cardDetail?id=$card_id");
		}else{
			$this->error("回复失败","../../../index.php/Home/Discuss/cardDetail?id=$card_id");
		}
	}
	//添加回复的评论到数据库
	public function addCommentsPro(){
		$data['comments']=$_POST['comments'];
		$data['r_id']=$_POST['r_id'];
		$data['cuid']=$_SESSION['uid'];
		$data['com_time']=date("Y-m-d H:i:s",time());
		$card_id=$_POST['card_id'];
		$comment=D("Comment");
		if($comment->data($data)->add()){
			$this->success("评论成功","../../../index.php/Home/Discuss/cardDetail?id=$card_id");
		}else{
			$this->success("评论失败","../../../index.php/Home/Discuss/cardDetail?id=$card_id");
		}
	}

	//查询该章节下的所有帖子
	public function searchChapterCard(){
		$ch_id=$_POST['ch_id'];
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
		//实例化帖子表
		$card=D("Card");
		$data=$card->SearchChapCard($ch_id,$cid);
		echo json_encode($data);
	}


	//查询该知识点下的所有帖子
	public function searchKnowCard(){
		$kid=$_POST['kid'];
		//获取课程id(session或者cookie)
		$cid=$_SESSION['cid'];
		//实例化帖子表
		$card=D("Card");
		$data=$card->SearchKnowCard($kid,$cid);
		echo json_encode($data);
	}
//投票
    public  function haveclick(){
	  
	   $data['card_id']=$card_id=$_POST['card_id'];
	   //$value =  $_SESSION['var']; //session
	   $data['vuid']=$_SESSION['uid'];
	   $res=M('card_vote')->add($data);
	   if(!$res);
	   M("card")->where("card_id='$card_id'")->setInc("vote",1);
	   echo 200;	   
	}
//取消投票
    public  function cancelclick(){
	   $card_id=$_POST['card_id'];
	   //$value =  $_SESSION['var']; //session
	   $uid=$_SESSION['uid'];
		$ress=M('card_vote')->where("card_id='$card_id' and vuid='$uid'")->delete();
	   if($ress);
	   M("card")->where("card_id='$card_id'")->setDec("vote",1);
	   echo 2000;		
	}
	
}
?>