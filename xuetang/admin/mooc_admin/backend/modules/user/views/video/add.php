<?php
include("../modules/user/views/user/header.php");
?>			
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
	<center>
      <form action="index.php?r=login/updatepass" method="post">
		您当前的用户是:<input id="username" name="username" value="jiaowu" type="text"><br>
		请您输入新密码:<input id="password" name="password" type="password"><br>
                		<button id="testClick" class="btn btn-lg btn-success" type="submit">确认修改</button>
                	  </form>
	  </center>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------>
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
    <link rel="stylesheet" type="text/css" href="/static/css/uploadify.css">
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="http://172.27.0.200/newexam/index.php?r=Home/index">首页</a>
        </li>
        <li>视频管理</li>
        <li class="active">导入视频</li>
</ul></div>

<!--<form action="index.php?r=question/Problems/Save" method="post" enctype="multipart/form-data">
     <br/>
     <input type="hidden" name="MAX_FILE_SIZE" value="">
     <input type="file" name="pic"/>
     <input type="submit" value="上传">
</form>-->
<form class="dropzone dz-clickable" method="post" action="index.php?r=user/video/save" enctype="multipart/form-data">
<div class="dz-default dz-message"><br>
    <span>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">学院:</font>
<div class="col-xs-2" style="margin-left:100px;">
                
                <select name="c_id" id="one" class="form-control" onchange="ck_two()">
								<option value="0" selected>置顶
							<?php foreach ($college as $one):?>
								<option value="<?php echo $one['c_id']?>"><?php echo $one['c_name']?>
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
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">阶段:</font>
<div class="col-xs-2" style="margin-left:100px;">
                
                <select  class="form-control" name="sid" id='four' onchange="ck_four()">
								<option value="0" selected>请选择
					<?php foreach ($stage as $stage): ?>
						<option value="<?php echo $stage['sid']?>"><?php echo $stage['s_name'];?>
					<?php endforeach ?>
								
				</select>	
                </div>

</span><br><br>

<span>
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">课程:</font>

<div class="col-xs-2" style="margin-left:100px;">
                
                <select  class="form-control" name="sid" id='five' onchange='ck_chapter()'>
								<option value="0" selected>请选择
					<?php foreach ($stage as $stage): ?>
						<option value="<?php //echo $stage['sid']?>"><?php //echo $stage['s_name'];?>
					<?php endforeach ?>
								
				</select>
                </div>

</span><br><br>
<span>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">章节:</font>
<div class="col-xs-2" style="margin-left:100px;">
                
                <select name="ch_id" id="chapter" class="form-control" onchange="">
								<option value="0" selected>置顶
							<?php foreach ($one as $one):?>
								<option value="<?php //echo $one['ch_id']?>"><?php //echo $one['ch_name']?>
							<?php endforeach;?>
				</select>
                </div>

</span><br><br>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">知识点:</font>
<div class="col-xs-2" style="margin-left:100px;">
    <textarea rows="2" cols="60" name='know'></textarea>
 </div>

</span><br><br>
 
<span class="bigger-120 bolder">
 <font style="margin-left:-60%; color:#000; font-family:黑体; font-size:18px; font-weight:normal;margin-right:6px;"  size="5">视频:</font>
    <div class="col-xs-2" style="   margin-left:100px;">
<div id="video_queue"></div>
<input id="video_upload" name="video_upload" type="file" multiple="true">
</div></span>
<br>
<input type='hidden' value="+response+" name='path' id='path'> 
 
<button class="btn btn-info" type="submit">
<i class="icon-ok bigger-110"></i>
提交
</button>

</div><br>
</form>
</div>
<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
<script src="/static/js/jquery.uploadify.min.js" type="text/javascript"></script>
<script>
	function ck_two(){ 
		var one=$("#one").val();
		var three=$("#three option:first").text();
		$("#three").html('<option>'+three+'</option>');
		$.ajax({ 
			url:"index.php?r=user/video/cktwo",
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
		var two=$("#two").val();
		$.ajax({ 
			url:"index.php?r=user/video/ckthree",
			data:{"two":two},
			dataType:"json",
			type:"post",
			success:function(msg){ 
				var str="<option >请选择";
				for(var i=0; i<msg.length;i++){ 
					str+="<option value="+msg[i].cid+" >"+msg[i].cname+"";	
				}
				$("#three").html(str);
			}
		})
	}
	//查询课程
	function ck_four(){
		var sid=$("#four").val();
		var mid=$("#two").val();
		$.ajax({ 
			url:"index.php?r=user/video/ckfour",
			data:{"sid":sid,'mid':mid},
			dataType:"json",
			type:"post",
			success:function(msg){ 
				var str="<option >请选择";
				for(var i=0; i<msg.length;i++){ 
					str+="<option value="+msg[i].cid+" >"+msg[i].cname+"";
						
				}
				//alert(str);
				$("#five").html(str);
			}
		})

	}
	//查询章节
	function ck_chapter(){
		var cid=$("#five").val();
		$.ajax({ 
			url:"index.php?r=user/video/ckchapter",
			data:{"cid":cid},
			dataType:"json",
			type:"post",
			success:function(msg){ 

				var str="<option >请选择";
				for(var i=0; i<msg.length;i++){ 
					str+="<option value="+msg[i].ch_id+" >"+msg[i].ch_name+"";
				}
				//alert(str);
				$("#chapter").html(str);
			}
		})
	}
		<?php $timestamp = time();?>
		$(function() {
			var path="";
			$('#video_upload').uploadify({
				//$('#video_upload').val(fileObj.name.replace(/.*[\u4e00-\u9fa5]+.*$/,new Date().getTime()+'.mp4'));
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
                'buttonText'     : '<div style="color:white;">上传视频</div>', //按钮上的文字  
				'swf'      : '/static/images/uploadify.swf',
				'uploader' :  'index.php?r=user/video/add_video',

				'queueSizeLimit': 8,                   //一个队列上传文件数限制
				'removeCompleted' : false,         //完成时是否清除队列 默认true
                onUploadSuccess: function (event, response, status) { 
					path+=response+'*';
	                //alert(path)
	                //$("#video_queue").append("<img src='"+response+"' width='100' height='100'>");
	                //$("form").append("<input type='hidden' value="+response+" name='path'> ");
	                $('#path').val(path);
                                    
                },  		
        
            });
    
		});
 


	
</script>
<?php
include("../modules/user/views/user/footer.php");
?>
