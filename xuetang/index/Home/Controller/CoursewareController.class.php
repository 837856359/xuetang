<?php



/*

 * 功能 课件页面

 * 作者 杨帅伟

 * 版本 1.0

 * 日期 2015/06/25

 * 邮箱 w13240325613@163.com

 */



namespace Home\Controller;

use Think\Controller;

header("content-type:text/html;charset=utf-8");



//课件 控制器

class CoursewareController extends Controller{

	public function head(){

		$cid=$_SESSION['cid'];

		//echo $cid;die;

		//课程名称

		$data=M("course")->where("cid='$cid'")->select();

		$cname=$data[0]['cname'];

		$this->assign("cname",$cname);

	}

	//显示课件的页面

	public function ware(){

		

		$cid=$_SESSION['cid'];//传入课程id

		$model=D('chapter');

		$arr=$model->where('cid='.$cid)->select();//查询课程

		//print_r($arr);die;

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

		$this->assign('cname',$cname);

		$zhang=$model->where('ch_id='.$chid[0])->select();//查询章节

		$this->assign('zhang',$zhang);

		$this->assign('arr',$arr);

		$keys = array_keys($arr[0]['know']);

		$info = M('video')->where('kid='.$keys[0])->find();

		//echo $info['num'];die;
		$this->assign('num',$info['num']);

		//print_r($arr);die;

		$this->display("ware");//显示课件页面

	}

	

	public function get_video_url(){

		$k_id = $_POST['k_id'];

		//获取当前时间戳
		$new_date=time();

		//echo $new_date;die;

		$info = M('video')->where('kid='.$k_id)->find();

		if($new_date-$info['time']>60||$info['time']==''){

			$data['num']=$info['num']?$info['num']+1:1;
			$data['time']=$new_date;

			M('video')->where('kid='.$k_id)->save($data);
		}

		$info = M('video')->where('kid='.$k_id)->find();
		//print_r($info);die;
		$arr['video_path'] = $info['video_path'];

		$arr['num'] = $info['num'];

		echo json_encode($arr);

	}

	



	//课件详情页面

	public function detail(){

		

		//显示title头部

		$titleid=$_GET['id'];//传入详情id   kid

		$point=D('knowpoint');

		$title=$point->where('kid='.$titleid)->select();

	

		

		

		$cid=$_SESSION['cid'];//传入课程id

		//print_r($cid);die;

		$model=D('chapter');

		$arr=$model->where('cid='.$cid)->select();//查询课程

		//print_r($arr);die;

		foreach($arr as $k=>$v){



			$ch_id=$v['ch_id'];

			$knowpoint=D('knowpoint');

			$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节

			

			foreach($info as $key=>$val){

				$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容

			}

			

		}



		//print_r($title);die;

		$this->assign('title',$title);
		//print_r($title);die;

		$this->assign('arr',$arr);

		$this->head();

		$this->display('detail');

	}



	public function question(){

		

		//显示title头部

		

		$kid=$_GET['kid'];

		

		$point=D('knowpoint');

		$title=$point->where('kid='.$kid)->select();

		

		$cid=$_SESSION['cid'];//传入课程id

		$model=D('chapter');

		$arr=$model->where('cid='.$cid)->select();//查询课程

		//print_r($arr);die;

		foreach($arr as $k=>$v){



			$ch_id=$v['ch_id'];

			$knowpoint=D('knowpoint');

			$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节

			

			foreach($info as $key=>$val){

				$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容

			}

			

		}

		

		

		$app=D('question');

		$ques=$app->where('kid='.$kid)->select();

		//$sql ="select selects from question where qid=1";

		//$aa=$app->query($sql);

		

		$new_cart = unserialize(stripslashes($ques[0]['selects']));

		//print_r($new_cart);die;

		$this->assign('ques',$ques);

		$this->assign('new_cart',$new_cart);

		$this->assign('title',$title);
		//print_r($title);die;
		$this->assign('arr',$arr);

		$this->head();

		$this->display('waredetail1');

	}





	public function answer(){

		

		$xuan=$_POST['xuan'];

		$kid=$_POST['kid'];//echo $kid;获取知识点ID

		$qid=$_POST['qid'];//echo $qid;die;//获取问题的ID

		$question=D('question');



		$sql ="select answer from question where kid=".$kid;

		$aa=$question->query($sql);

		

		//print_r($aa);die;



		$new_cart = unserialize(stripslashes($aa[0]['answer']));

		

		//print_r($new_cart);die;



		if(empty($xuan)){

			

			echo "<script>alert('选项不可为空');history.go(-1)</script>";

		}else{

		

			

			if($xuan==$new_cart[0]){

			

				

				$score=D('score');	

				$quee=$score->where('qid='.$qid)->select();

				//print_r($quee);



				if($quee){

					

					$quescore=$question->where('qid='.$qid)->select();//查询该问题的分数

					//print_r($quescore);die;

					$score_one=$quescore[0]['score'];

					//echo $quee[0]['score_one']."<br>";

					$sid=$quee[0]['s_id'];

					//echo $sid;die;

					M('score')->query("update score set score_one='$score_one'  where s_id='$sid'");



					$cid=$_SESSION['cid'];//传入课程id

					$model=D('chapter');

					$arr=$model->where('cid='.$cid)->select();//查询课程

					//print_r($arr);die;

					foreach($arr as $k=>$v){



						$ch_id=$v['ch_id'];

						$knowpoint=D('knowpoint');

						$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节

						

						foreach($info as $key=>$val){

							$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容

						}

						

					}

					

				

					$ques=$question->where('kid='.$kid)->select();

					//$sql ="select selects from question where qid=1";

					//$aa=$app->query($sql);

					

					$new_que = unserialize(stripslashes($ques[0]['selects']));

					//print_r($new_cart);die;

					$this->assign('ques',$ques);

					$this->assign('new_que',$new_que);

					$this->assign('new_cart',$new_cart);

					$this->assign('arr',$arr);

					$this->head();

					$this->display('waredetail2');



				}else{

					

					$data['qid']=$qid;

					$data['uid']=$_SESSION['uid'];

					$data['score_one']=1;

					if($score->data($data)->add()){

						

						$cid=$_SESSION['cid'];//传入课程id

						$model=D('chapter');

						$arr=$model->where('cid='.$cid)->select();//查询课程

						//print_r($arr);die;

						foreach($arr as $k=>$v){



							$ch_id=$v['ch_id'];

							$knowpoint=D('knowpoint');

							$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节

							

							foreach($info as $key=>$val){

								$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容

							}

							

						}

						

						

						

						$ques=$question->where('kid='.$kid)->select();

						

						//print_r($ques);die;

						

						$new_cart = unserialize(stripslashes($ques[0]['selects']));

						//print_r($new_cart);die;

					

						$this->assign('ques',$ques);

						$this->assign('new_que',$new_que);

						$this->assign('new_cart',$new_cart);

						$this->assign('arr',$arr);

						$this->head();

						$this->display('waredetail2');



					}else{

						

						echo "<script>alert('提交答案失败');history.go(-1)</script>";

					}



				}



			}else{

				

					$cid=$_SESSION['cid'];//传入课程id

					$model=D('chapter');

					$arr=$model->where('cid='.$cid)->select();//查询课程

					//print_r($arr);die;

					foreach($arr as $k=>$v){



						$ch_id=$v['ch_id'];

						$knowpoint=D('knowpoint');

						$info=$knowpoint->where('ch_id='.$ch_id)->select();//查询章节

						

						foreach($info as $key=>$val){

							$arr[$k]['know'][$val['kid']]=$val['know'];//键值对应内容

						}

						

					}

					

				

					$ques=$question->where('kid='.$kid)->select();

					//$sql ="select selects from question where qid=1";

					//$aa=$app->query($sql);

					

					$new_que = unserialize(stripslashes($ques[0]['selects']));

					//print_r($new_cart);die;

					$this->assign('ques',$ques);

					$this->assign('new_que',$new_que);

					$this->assign('new_cart',$new_cart);

					$this->assign('arr',$arr);

					$this->head();

					$this->display('waredetail4');



				

			}

		}

	}

	

}

?>

