<?php
namespace Home\Model;
use Think\Model;
//帖子的回复的模型
class ReplyModel extends Model {
	//查询下此条帖子是否有回复
	public function selReply($card_id){
		return $this->query("select * from reply inner join user on reply.ruid=user.uid where card_id='$card_id'");
	}
	//查询该帖子的回复下的评论
	public function selComments($r_id){
		return $this->query("select * from comment inner join user on comment.cuid=user.uid where r_id='$r_id'");
	}
}
?>