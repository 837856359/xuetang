<?php
include("../modules/user/views/user/header.php");
?>  
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>
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
        <li>权限设置</li>
        <li class="active">权限添加</li>
</ul></div>

<!--<form action="index.php?r=question/Problems/Save" method="post" enctype="multipart/form-data">
     <br/>
     <input type="hidden" name="MAX_FILE_SIZE" value="">
     <input type="file" name="pic"/>
     <input type="submit" value="上传">
</form>-->
<form class="dropzone dz-clickable" method="post" action="index.php?r=user/user/save" enctype="multipart/form-data">
<div class="dz-default dz-message"><br>
    <span>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">权限名称:</font>
<div class="col-xs-2" style="margin-left:100px;">
      <input type="text" class="form-control" id="user">          
                </div>

</span><br><br>
<span>
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">控制器:</font>
<div class="col-xs-2" style="margin-left:100px;">
	<input type="text" class="form-control" id="coll">  
                </div>

</span><br><br>

 
<button class="btn btn-info" type="button" id="but">
<i class="icon-ok bigger-110"></i>
提交
</button>

</div><br>
</form>
</div>
<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
<script>	
function fun1(){
	$("#parent").show();
}
function fun2(){
	$("#parent").hide();
}
  $("#but").click(function(){
    var name=$("#user").val();
    var coll=$("#coll").val();
    if(name==""){
      alert("权限名不能为空");
      return false;
    }
    if(coll==""){
      alert("控制器名不能为空");
      return false;
    }
    $.ajax({
   type: "POST",
   url: "index.php?r=user/rbac/access_ad",
   data: "name="+name+"&&coll="+coll,
   success: function(msg){
  if(msg==1){
        alert("添加成功");
     }else if(msg==2){
        alert("添加失败");
     }else{
      alert("您没有权限，拒绝访问");
     }
   }
  });
}) 

</script>
<?php
include("../modules/user/views/user/footer.php");
?>
