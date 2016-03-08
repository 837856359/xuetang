<?php

include("../modules/user/views/user/header.php");

?>



<!--------------------------------------头部------------------------------->

				<div class="navbar-header pull-right" role="navigation">

                                    

					<ul class="nav ace-nav">

                       

                                        

						<li class="light-blue">

							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<img class="nav-user-photo" src="css/add_files/touxiang.png" alt="Jason's Photo">

								<span class="user-info">

									<small>欢迎光临</small>

									jiaowu								</span>



								<i class="icon-caret-down"></i>

							</a>



							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								

								<li>

									<a href="javascript:">

										<i class="icon-user"></i>

										姓名：jiaowu									</a>

								</li>



								<li><a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">

										<i class="icon-edit"></i>

										修改密码

									</a></li>

	

								<li>

									<a href="http://172.27.0.200/newexam/index.php?r=login/logout">

										<i class="icon-off"></i>

										退出

									</a>

								</li>

							</ul>

						</li>

					</ul> 

                                       <!-- /.ace-nav -->  

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

    <link rel="stylesheet" type="text/css" href="/xuetang/static/css/uploadify.css">

    <ul class="breadcrumb">

        <li>

            <i class="icon-home home-icon"></i>

            <a href="http://172.27.0.200/newexam/index.php?r=Home/index">首页</a>

        </li>

        <li>大纲管理</li>

        <li class="active">添加大纲</li>

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

<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">阶段:</font>

<div class="col-xs-2" style="margin-left:100px;">

                

                <select  class="form-control" name="sid">

								<option value="0" selected>请选择

					<?php foreach ($stage as $stage): ?>

						<option value="<?php echo $stage['sid']?>"><?php echo $stage['s_name'];?>

					<?php endforeach ?>

								

				</select>	

                </div>



</span><br><br>



<span>

<font style="margin-left:-59%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:650px;" size="5">课程:</font>



<div class="col-xs-2" style="margin-left:100px;">

                

                <select  class="form-control" name="sid">

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

                

                <select name="ch_id" id="one" class="form-control" onchange="ck_two()">

								<option value="0" selected>置顶

							<?php foreach ($one as $one):?>

								<option value="<?php //echo $one['ch_id']?>"><?php //echo $one['ch_name']?>

							<?php endforeach;?>

				</select>

                </div>



</span><br><br>

<span class="bigger-120 bolder">

               

<font style="margin-left:-60%;color:#000;font-family:黑体; font-size:18px; font-weight:normal; margin-right:6px;" size="5">大纲介绍:</font>

<div class="col-xs-2" style="margin-left:100px;">

    <textarea rows="2" cols="60"></textarea>

 </div>



</span><br><br>

 

<span class="bigger-120 bolder">

 <font style="margin-left:-60%; color:#000; font-family:黑体; font-size:18px; font-weight:normal;margin-right:6px;"  size="5">大纲:</font>

    <div class="col-xs-2" style="   margin-left:100px;">

<div id="video_queue"></div>

<input id="video_upload" name="video_upload" type="file" multiple="true">

</div></span>

<br>



 

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



		<?php $timestamp = time();?>

		$(function() {

			$('#video_upload').uploadify({

				'formData'     : {

					'timestamp' : '<?php echo $timestamp;?>',

					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'

				},

                                'buttonText'     : '<div style="color:white;">上传章节大纲</div>', //按钮上的文字 

				'swf'      : '/static/images/uploadify.swf',

				'uploader' :  'index.php?r=question/problems/Uploads/upid/<?php //echo Yii::app()->session->sessionID;?>',

                                onUploadSuccess: function (event, response, status) { 



                                    $("#video_queue").append("<img src='"+response+"' width='100' height='100'>");

                                     $("form").append("<input type='hidden' value="+response+" name='url[]'> ");

                                    //$('<li></li>').appendTo('.files').text(response);  

                                },  		

        

                    });

    

		});

 





	

</script>

<?php

include("../modules/user/views/user/footer.php");

?>