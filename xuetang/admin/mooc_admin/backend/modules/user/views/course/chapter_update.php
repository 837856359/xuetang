<?php
include("../modules/user/views/user/header.php");
?>

	<?php
include("../modules/user/views/user/left.php");
?>
<!-----------------------------------左侧导航----------------------------------->
					

<!------------------------------主要内容---------------------------------------->
				<div class="main-content">
					<div id="result">
<div id="breadcrumbs" class="breadcrumbs">
    <script type="text/javascript">
	document.getElementById('addquestion1').style.display = "block";
        document.getElementById('question').style.display = "block";
        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        function file_change(e)
        {
	    document.getElementById("file_name").value = e;
        }
    </script>
    <style>
    *{margin:0;padding:0;}
    input{border:none;border:1px solid #CCC;vertical-align:middle; }
    .input {height:24px; line-height:24px; border-right:none; width:150px;}
    .liulan {width:50px;height:26px;background:url(/jscss/demoimg/201206/bgimg.jpg) no-repeat; cursor:pointer;}
    .files{	position:absolute; left:202px; top:52px; heigth:26px;cursor:pointer;
                     filter: Alpha(opacity=0);    
                             -moz-opacity:0;    
                             opacity:0;  
                    } 
   </style>
    
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="http://172.27.0.200/newexam/index.php?r=Home/index">首页</a>
        </li>
        <li>基础数据管理</li>
        <li class="active">章节修改</li>
</ul></div>
<form class="dropzone dz-clickable" method="post" action="index.php?r=user/course/chapter_update_save" enctype="multipart/form-data">
<div class="dz-default dz-message"><br>

 <span>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">学院:</font>
<div class="col-xs-2" style="margin-left:100px;">
                
                <select name="c_id" id="one" class="form-control" onchange="ck_two()">
								<option value="0" selected>置顶
							<?php foreach ($college as $college):?>
								<option value="<?php echo $college['c_id']?>"><?php echo $college['c_name']?>
							<?php endforeach;?>
				</select>
                </div>

</span><br><br>
<span>
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">专业:</font>
<div class="col-xs-2" style="margin-left:100px;">
                
                <select name="mid" id="two"  class="form-control"  onchange="ck_three()">
								<option value="0" selected>请选择
				</select>	
                </div>

</span><br><br>
<span>

<span>
<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">阶段:</font>
<div class="col-xs-2" style="margin-left:100px;">
                
                <select  class="form-control" id="three" onchange="ck_four()" name="sid">
								<option value="0" selected>请选择
								
				</select>	
                </div>

</span><br><br>

<span>
<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">课程:</font>

<div class="col-xs-2" style="margin-left:100px;">
                
                <select  class="form-control" id="four" name="cid">
								<option value="0" selected>请选择
								
				</select>
                </div>

</span><br><br>

<span>
<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">章节:</font>

<div class="col-xs-2" style="margin-left:100px;">
               <input type="text" name="ch_name" value="<?php echo $data[0]['ch_name']?>" class="form-control">
               <input type="hidden" name="ch_id" value="<?php echo $data[0]['ch_id']?>">
                </div>
</span><br><br>
<span>
<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">简介:</font>

<div class="col-xs-2" style="margin-left:100px;">
    <textarea name="notice" class="form-control"><?php echo $data[0]['notice']?></textarea>
               
                </div>
</span><br><br>

</span><br>

<span>
<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">是否完结:</font>

<div class="col-xs-2" style="margin-left:100px;">
               <input <?php if($course[0]['end_status']==1){echo "checked";}?> type="radio" name="num" value="1" class="form-radio"><font size="3">是</font>              <input <?php if($course[0]['end_status']==0){echo "checked";}?> type="radio" name="num" value="0" class="form-radio"><font size="3">否</font>
                </div>

</span><br><br>


<button class="btn btn-info" type="submit">
<i class="icon-ok bigger-110"></i>
提交
</button>

</div><br>
</form>
</div>
<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
<script>
    function ck_two(){ 
		var one=$("#one").val();
                //alert(one);
		//alert(one);
		var three=$("#three option:first").text();
		$("#three").html('<option>'+three+'</option>');
		$.ajax({ 
			url:"index.php?r=user/course/cktwo",
			data:{"one":one},
			dataType:"json",
			type:"post",
			success:function(msg){
				var str="<option >请选择";
				for(var i=0; i<msg.length;i++){
					str+="<option value="+msg[i].m_id+" >"+msg[i].m_name+"";	
				}
				$("#two").html(str);
			}
		})
	}
    function ck_three(){ 
		$.ajax({ 
			url:"index.php?r=user/course/ckthree",
			dataType:"json",
			type:"post",
			success:function(msg){
				var str="<option >请选择";
				for(var i=0; i<msg.length;i++){
					str+="<option value="+msg[i].sid+" >"+msg[i].s_name+"";	
				}
				$("#three").html(str);
			}
		})
	}

     	function ck_four(){ 
		var one=$("#one").val();
                var two=$("#two").val();
                var three=$("#three").val();
		$.ajax({ 
			url:"index.php?r=user/course/ckfour",
			data:"one="+one+"&two="+two+"&three="+three,
			dataType:"json",
			type:"post",
			success:function(msg){ 
				var str="<option >请选择";
				for(var i=0; i<msg.length;i++){ 
					str+="<option value="+msg[i].cid+" >"+msg[i].cname+"";	
				}
				$("#four").html(str);
			}
		})
	}
function bianda(){
    $('#bianda').html("<image src='/images/test/guize.png' width='600'  style='margin-left:25px;' onclick='bianxiao()'/>");
}
function bianxiao(){
     $('#bianda').html("<image src='/images/test/guize.png' width='300'  style='margin-left:25px;cursor:crosshair' onclick='bianda()'/>");
}
</script>				</div><!-- /.main-content -->
<!------------------------------------------------------------------------------>

		<?php
include("../modules/user/views/user/footer.php");
?>