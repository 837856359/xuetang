<?php

include("../modules/user/views/user/header.php");

//use yii\grid\GridView;  //这是必须的；

use yii\widgets\LinkPager;



?>





	<?php

include("../modules/user/views/user/left.php");

?>

<!-----------------------------------左侧导航----------------------------------->

					

<!----------------------------------------------------------------------------->

                              

<!------------------------------主要内容---------------------------------------->



<link href="css/list_files/videojs/videojs/video-js.css" rel="stylesheet">

<link href="css/list_files/style.css" rel="stylesheet">

<script src="css/list_files/videojs/videojs/video.js"></script> 



				<div class="main-content">

					<div id="breadcrumbs" class="breadcrumbs">

    <script type="text/javascript">	

		document.getElementById('addquestion1').style.display = "block";

        document.getElementById('question').style.display = "block";

        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

    </script>

    <ul class="breadcrumb">

        <li style="float:left; margin-top:6px;">

            <i class="icon-home home-icon"></i>

            <a href="http://172.27.0.200/newexam/index.php?r=Home/index">首页</a>

        </li>

        <li class="active" style="float:left; margin-top:10px;">视频管理</li>

    </ul>

    <div id="nav-search" class="nav-search">

        <form class="form-search">

            <span class="input-icon">

                <input id="nav-search-input" class="nav-search-input" autocomplete="off" placeholder="Search ..." type="text">

                <i class="icon-search nav-search-icon"></i>

            </span>

        </form>

    </div>

</div>



<div id="result">

<div class="page-header">

    

    <a href="index.php?r=user/video/add"><button class="btn btn-grey" style="margin-left:12px;">导入视频</button></a>

	

</div>

<!-- <form action="" method="post">

<div class="page-header">

     <div class="col-xs-3">

    <p>章节:</p>

    <input id="form-field-4" class="input-large" placeholder="请输入知识点名称" type="text">

   </div>



    <p>&nbsp;</p>

    <button class="btn btn-purple btn-sm" type="button" onclick="DoEdit()">

        Search

        <i class="icon-search icon-on-right bigger-110"></i>

    </button>



</div>

</form>-->



  <form action="index.php?r=user/video/list" method="post">

<div class="page-header">

     <div class="col-xs-3">

    <p>章节:</p>

    <input id="form-field-4" class="input-large" name="search" placeholder="请输入知识点名称" type="text">

   </div>



    <p>&nbsp;</p>

    <button class="btn btn-purple btn-sm" type="submit">

        Search

        <i class="icon-search icon-on-right bigger-110"></i>

    </button>



</div>

</form>



<style type="text/css">

	.black{

font:white;

border:1px solid #333;

box-shadow: 0 1px 2px #8b8b8b inset,0 -1px 0 #3d3d3d inset,0 -2px 3px #8b8b8b inset;

background: -webkit-linear-gradient(top,#656565,#4c4c4c);

background: -moz-linear-gradient(top,#656565,#4a4a4a);

background: linear-gradient(top,#656565,#4a4a4a);

}

</style>

<div id="searchs">

<div id="my_video" style="display:none;position: fixed; top: 20%; left: 35%; width: 640px; height: 400px; background-color: ; z-index:1001;" >

<input type="button" value="关闭播放器" class="black" style="float:right;" onclick="close_video()">

<video id='video' src='' class="video-js vjs-default-skin" controls preload="auto" width="560" height="380" poster="" data-setup="{}" ></video>

</div>

<!-- 视频列表 -->

     <div class="table-responsive" id="video_table">

			<table id="sample-table-1" class="table table-striped table-bordered table-hover">

				<thead>                                   

					<tr>

						<td align="center" width="10%">序号</td>

						<td class="center" align="center" width="10%">

							<label>

								<input class="ace" onclick="SelectAll()" type="checkbox">

                                               

								<span class="lbl"></span>

								

								

							</label>

							<a href="#" onclick="Recycles()" >全部删除</a>

						</td>

						 <td class="hidden-480" align="center">课程</td>

						 <td width="100" align="center">

							

							章节：

						</td>

						<td width="100" align="center">

							

							知识点

						</td>

                                               

						<td class="hidden-480" align="center" >视频</td>



						<td class="hidden-480" align="center" >点击量</td>

						

						<td align="center" width="10%">操作</td>

					</tr>

				</thead>

				

				<tbody id='content'>	

				

				<?php foreach($vide_list as $v){?>

                	<tr>

						<td align="center"><a href="#"><?php echo $v['kid'];?></a>-10173</td>

						<td class="center">

								<label>

                                      <input class="ace" name="box[]" id="checkboxid" value="<?php echo $v['kid'];?>" type="checkbox">

								<span class="lbl"></span>

							</label>

						</td>

						<td class="hidden-480" width="200" align="center">

							<?php echo $v['cname']?>			

						</td> 

						<td class="hidden-480" width="200" align="center">							

							<?php echo $v['ch_name']?>

						</td>

						<td class="hidden-480" width="200" align="center">							

							<?php echo $v['know']?>

						</td>



                         <td class="hidden-480" width="200" align="center">

							<?php

								if(is_array($v['video'])){

									foreach($v['video'] as $key=>$val){

										echo "<a href='javascript:void(0)' onclick='look(".'"'.$val['video_path'].'"'.")'>视频播放</a> &nbsp&nbsp";

										echo "<a href='index.php?r=user/video/xiazai&vedio_path=".$val['video_path']."'>下载</a><br>";			

									}

								}else{

									echo $v['video'];

								}

							?>

										

						</td>               

						        

						<td class="hidden-480" width="200" align="center">							

							<?php echo $v['video'][0]['num']==''?0:$v['video'][0]['num'];?>

						</td>

						<td align="center">

							<div class="visible-md visible-lg hidden-sm hidden-xs btn-group box" style="width:130px;">

								



                                <a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm('确定将这道题删除？'))Recycle(<?php echo $v['kid'];?>)" >删除

                               

							<div class="visible-xs visible-sm hidden-md hidden-lg">

								<div class="inline position-relative">

									<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">

										<i class="icon-cog icon-only bigger-110"></i>

									</button>

									<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">

										<li>

											<a class="tooltip-info" title="" data-rel="tooltip" href="#" data-original-title="View">

												<span class="blue">

													<i class="icon-zoom-in bigger-120"></i>

												</span>

											</a>

										</li>

										<li>

											<a class="tooltip-success" title="" data-rel="tooltip" href="#" data-original-title="Edit">

												<span class="green">

													<i class="icon-edit bigger-120"></i>

												</span>

											</a>

										</li>

										<li>

											<a class="tooltip-error" title="" data-rel="tooltip" href="#" data-original-title="Delete">

												<span class="red">

													<i class="icon-trash bigger-120"></i>

												</span>

											</a>

										</li>

									</ul>

								</div>

							</div>

                          </div>

						</td>

					</tr>

				<?php }?>

                        

                </tbody>

			</table>



			<!-- 分页--> 

     

		</div>

	<div style="float: right;"><?php echo $str?></div>



</div>



<script src="css/list_files/jq.js"></script>



<script type="text/javascript">

//全选/反选

function SelectAll() {

 var checkboxs=document.getElementsByName("box[]");

 for (var i=0;i<checkboxs.length;i++) {

  var e=checkboxs[i];

  e.checked=!e.checked;

 }

}

/*

 * 方法名：Dels

 *功能： 对题目的批量回收

 * 参数：qid（array）----题目的ID

 * 返回值：1/0  1成功0失败

 */

function Recycles(){

  var j=0;

  arr=[];

  var checke=document.getElementsByName('box[]');

  for(var i=0;i<checke.length;i++){

      if(checke[i].checked == true){

          arr[j++]=checke[i].value;

      }

  }

 // alert(arr);

  $.ajax({

	   url:"index.php?r=user/video/delall",

	   data:{"kid":arr},

	   type:"post",

	   success:function(e){

		   //alert(e);

		   

		    if(e==1){

			    alert('批量删除成功！');

			    location.href='index.php?r=user/video/list';

            }

		

		}

	 });



}

/*

 * 方法名：Dohui

 *功能： 将题目添加到回收站

 * 参数：qid（int）----题目的ID

 * 返回值：1/0  1成功0失败

 */

function Recycle(id){

	//alert(id);

	

     $.ajax({

	   url:"index.php?r=user/video/del",

	   data:{"kid":id},

	   type:"post",

	   success:function(e){

             // alert(e);

		    if(e==1){

			   alert('删除成功！');

			   location.href='index.php?r=user/video/list';

			}

		}

	 });

	 

}

/*

 * ajax查询

 */

function DoEdit(){

    var str1=$("#form-field-4").val();

    var str="";

    if(str1==''){

    	alert('请输入知识点名称');

    }else{

    	$.ajax({

	       	url:"index.php?r=user/video/search",

	        data:{"str":str1},

	        type:"post",

	        dataType:'json',

	        success:function(msg){

	        	//alert(msg);

	        	$.each(msg,function(i){

	        		var video="";

	        		var j=0;

	        		str+="<tr>";

	        	 	str+="<td align='center'><a href='#''>"+msg[i]['kid']+"</a>-10173</td>";

	        	 	str+="<td class='center'><label><input class='ace' name='box[]' id='checkboxid' value="+msg[i]['kid']+" type='checkbox'><span class='lbl'></span></label></td>";

	        	 	str+="<td class='hidden-480' width='200' align='center'>"+msg[i]['c_name']+"</td>";

					str+="<td class='hidden-480' width='200' align='center'>"+msg[i]['ch_name']+"</td>";		

					str+="<td class='hidden-480' width='200' align='center'>"+msg[i]['know']+"</td>";

					if(msg[i]['video'] == "暂无视频"){

						video="<td class='hidden-480' width='200' align='center'>"+msg[i]['video']+"</td>";

					}else{

						video="<td class='hidden-480' width='200' align='center'>";

						for(j=0;j<msg[i]['video'].length;j++){

							//alert(msg[i]['video'][j]);

							video+="<a href='javascript:void(0)' onclick='look("+'"'+msg[i]['video'][j]['video_path']+'"'+")'>"+msg[i]['video'][j]['video_name']+"</a>&nbsp&nbsp";

							video+="<a href='index.php?r=user/video/xiazai&vedio_path="+msg[i]['video'][j]['video_path']+"'>下载</a><br>";

						}

						video+="</td>";

					}	

					str+=video;	

 					str+="<td align='center'><div class='visible-md visible-lg hidden-sm hidden-xs btn-group box' style='width:130px;'>";

					str+="<a href='javascript:void(0)' class='btn btn-xs btn-danger margin0' onclick="+'"'+"if(confirm('确定将这道题删除？'))Recycle("+msg[i]['kid']+")"+'"'+" >删除</a>";	  								

					str+="<div class='visible-xs visible-sm hidden-md hidden-lg'>";

					str+="<div class='inline position-relative'>";		

					str+="<button class='btn btn-minier btn-primary dropdown-toggle' data-toggle='dropdown'><i class='icon-cog icon-only bigger-110'></i></button>";			

					str+="<ul class='dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close'>";			

					str+="<li><a class='tooltip-info' title='' data-rel='tooltip' href='#' data-original-title='View'>";			

					str+="<span class='blue'><i class='icon-zoom-in bigger-120'></i></span></a></li>";			

					str+="<li><a class='tooltip-success' title='' data-rel='tooltip' href='#' data-original-title='Edit'>";			

					str+="<span class='green'><i class='icon-edit bigger-120'></i></span></a></li>";			

					str+="<li><a class='tooltip-error' title='' data-rel='tooltip' href='#' data-original-title='Delete'>";						

					str+="<span class='red'><i class='icon-trash bigger-120'></i></span></a></li>";			

					str+="</ul></div></div></div></td>";

					str+="</tr>";	

																										

							

	        	})

	        	

	        	//alert(str);

	           $('#content').html(str);

	        }



    	})

		

    }

    

}

function look(path){

	$('#video_html5_api').attr('src',path);	

	$('#my_video').show();

	

}

function close_video(){

	$('#video_html5_api').attr('src',"");	

	$('#my_video').hide();

}

</script>

				</div><!-- /.main-content -->

<!------------------------------------------------------------------------------>

<?php

include("../modules/user/views/user/footer.php");

?>