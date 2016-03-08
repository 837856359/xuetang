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
        <li>管理员列表</li>
        <li class="active">密码修改</li>
</ul></div>
<form class="dropzone dz-clickable" method="post" action="index.php?r=user/rbac/save_admin" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $list['id']?>">
<div class="dz-default dz-message"><br>
    <span>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">姓名:</font>
<div class="col-xs-2" style="margin-left:100px;">
      <input type="text" class="form-control" id="user" name="nickname" value="<?php echo $list['nickname']?>">          
                </div>

</span><br><br>
<span>
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">账号:</font>
<div class="col-xs-2" style="margin-left:100px;">
	<input type="text" class="form-control" id="zhanghao" name="account" value="<?php echo $list['account']?>">  
                </div>

</span><br><br>
<span>

<span>
<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">密码:</font>
<div class="col-xs-2" style="margin-left:100px;">
	<input type="password" class="form-control" id="pwd" name="password" value="<?php echo $list['password']?>"> 	
                </div>

</span><br><br>
<span>

 

<input type="submit" value="修改"  class="btn btn-info"/>

</div><br>
</form>
</div>
<?php
include("../modules/user/views/user/footer.php");
?>