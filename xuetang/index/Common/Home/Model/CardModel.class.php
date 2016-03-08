<?php
namespace Home\Model;
use Think\Model;
//帖子 讨论区的模型
class CardModel extends Model {
	//查询帖子表，显示该课程下所有帖子
	public function showCard($cid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id where cid=".$cid);
	}

	//根据id查询该条帖子的详情信息
	public function selCard($card_id){
		return $this->query("select * from card inner join user on card.uid=user.uid where card.card_id=".$card_id);
	}

	//查询出该用户未读的帖子
	public function unRead($cid,$uid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id where card.card_id not in (select card_id from readcard where readcard.uid='$uid') and cid='$cid'");
	}
	//查询出该用户未答复的帖子
	public function unAnswered($cid,$uid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id where card.card_id not in (select card_id from reply where reply.ruid='$uid') and cid='$cid'");
	}
	//显示全部帖子  根据最多回复（活动）排序
	public function comments($cid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id  where cid='$cid' order by reply_num desc");
	}

	//根据最多投票数排序
	public function vote($cid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id  where cid='$cid' order by vote desc");
	}


	//查询下此条帖子是否有回复
	public function selReply($card_id){
		return $this->query("select * from reply where card_id=2");
	}

	//修改帖子表的回复数量
	public function upCard($card_id,$num){
		return $this->query("update card set reply_num='$num' where card_id='$card_id'");
	}
	//查询该单元下的所有帖子
	public function SearchChapCard($ch_id,$cid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id where cid='$cid' and card.kid in (select kid from knowpoint where ch_id='$ch_id')");
	}
	//查询该单元下的所有帖子
	public function SearchKnowCard($kid,$cid){
		return $this->query("select * from card inner join knowpoint on card.kid=knowpoint.kid inner join chapter on knowpoint.ch_id=chapter.ch_id where cid='$cid' and knowpoint.kid='$kid'");
	}
}
?>