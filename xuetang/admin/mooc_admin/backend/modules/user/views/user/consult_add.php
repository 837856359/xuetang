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
        <li>视频管理</li>
        <li class="active">导入视频</li>
</ul></div>

<!--<form action="index.php?r=question/Problems/Save" method="post" enctype="multipart/form-data">
     <br/>
     <input type="hidden" name="MAX_FILE_SIZE" value="">
     <input type="file" name="pic"/>
     <input type="submit" value="上传">
</form>-->
<form class="dropzone dz-clickable" method="post" action="index.php?r=user/user/consult_save" enctype="multipart/form-data">
<div class="page-content">
    <div class="page-header">
            <h1>
                    Form Elements
                    <small>
                            <i class="icon-double-angle-right"></i>
                            Common form elements and layouts
                    </small>
            </h1>
    </div>
<div class="row">
<div class="col-xs-12">
<div class="form-group">
    <label for="form-field-1" class="col-sm-3 control-label no-padding-right">  章节 </label>
    <div class="col-sm-9">
        <select name="post_id" id="one" class="col-xs-10 col-sm-5">
        <option value="0" selected>置顶
        <?php foreach($list as $v){?>
        <option value="<?php echo $v['post_class_id'];?>"><?php echo $v['post_class_name'];?>
        <?php }?>
        </select>
    </div>
</div>
 
<div class="space-4"></div>

    <div class="form-group">
<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> 标题 </label>

<div class="col-sm-9">
 <input type="text" class="col-xs-10 col-sm-5" placeholder="Username" name="title" id="form-field-1">
</div>
 
    </div>
<div class="space-4"></div>
<!-- ck编辑器 -->


</div>
<script type="text/javascript" src="lib/kindeditor/kindeditor-min.js"></script>
<script type="text/javascript" src="lib/kindeditor/lang/zh_CN.js"></script>

<link href="lib/kindeditor/themes/default/default.css" rel="stylesheet">

<script type="text/javascript">
	var editor;
	KindEditor.ready(function(K){
		editor=K.create("#ck",{
			
			allowFileManager:true
			
		})
	})
</script>
    <div class="form-group">
<label for="form-field-1" class="col-sm-3 control-label no-padding-right">  活动内容: </label>

<div class="col-sm-9">
<span><textarea name="ck_content" rows="5" cols="20" id="ck"></textarea></span>
</div>
 
    </div>           
 
 <button class="btn btn-info" type="submit">
<i class="icon-ok bigger-110"></i>
提交
</button>
</div>
</form>
</div>
</div>
</div><script type="text/javascript" src="../assets/list_files/jq.js"></script>
<script>
	function ck_two(){ 
		var one=$("#one").val();
		var three=$("#three option:first").text();
		$("#three").html('<option>'+three+'</option>');
		$.ajax({ 
			url:"index.php?r=user/user/cktwo",
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
			url:"index.php?r=user/user/ckthree",
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



	
</script>
<script src="css/add_files/jq.js"></script>
<script>
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