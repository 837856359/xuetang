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
        <li class="active">角色管理</li>
</ul></div>

<!--<form action="index.php?r=question/Problems/Save" method="post" enctype="multipart/form-data">
     <br/>
     <input type="hidden" name="MAX_FILE_SIZE" value="">
     <input type="file" name="pic"/>
     <input type="submit" value="上传">
</form>-->
<form class="dropzone dz-clickable" method="post" action="">
<div class="dz-default dz-message"><br>
    <span>
<span class="bigger-120 bolder">
               
<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">角色名:</font>
<div class="col-xs-2" style="margin-left:100px;">
      <input type="text" class="form-control" id="user">          
                </div>

</span><br><br>
<div style="float:left">
<span>
<font style="margin-left:-43%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">选择权限:</font><br>
	       <?php foreach ($arr as $one):?>
           
          <input type="checkbox"  id="box" name='level_two[]' value="<?php echo $one['id']?>"><?php echo $one['title']?><br>
            <?php foreach ($arr2 as $two):?>
            <?php if($two['pid']==$one['id']){?>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox"  id="box" name='level_three[]' value="<?php echo $two['id']?>"><?php echo $two['title']?><br>
            <?php } ?>
            <?php endforeach;?>  
        <?php endforeach;?>  

</span><br><br>
<div id="level_three"></div>
<input type="button" value="提交" id="but"  class="btn btn-info">
</div>
</div><br>
</form>
</div>
<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
<script src="/static/js/jquery.uploadify.min.js" type="text/javascript"></script>

<script>
  $("#but").click(function(){
      var name=$("#user").val();
        text = $("input:checkbox[id='box']:checked").map(function(index,elem) {
        return $(elem).val();
        }).get().join(',');
        var val=text;
   $.ajax({
   type: "POST",
   url: "index.php?r=user/rbac/access_save",
   data: "name="+name+"&&val="+val,
   success: function(msg){
    alert(msg);
   }
  });
  })	
</script>
<?php
include("../modules/user/views/user/footer.php");
?>