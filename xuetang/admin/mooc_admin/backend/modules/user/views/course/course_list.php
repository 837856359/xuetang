

<?php

include("../modules/user/views/user/header.php");

?>





	<?php

include("../modules/user/views/user/left.php");

?>

<!--左侧导航-->

	<div class="main-content">

					<div id="result">				

<div id="breadcrumbs" class="breadcrumbs">

    <script type="text/javascript">

	

	document.getElementById('addquestion1').style.display = "block";

        document.getElementById('question').style.display = "block";

        try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

    </script>

    <ul class="breadcrumb">

        <li style="float:left; margin-top:6px;">

            <i class="icon-home home-icon"></i>

            <a href="index.php?r=Home/index">首页</a>

        </li>

        <li>基础数据管理</li>

        <li class="active">课程列表</li>

    </ul>

    <div id="nav-search" class="nav-search">

        <form class="form-search">

            <span class="input-icon">

                <input id="nav-search-input" class="nav-search-input" type="text" autocomplete="off" placeholder="Search ...">

                <i class="icon-search nav-search-icon"></i>

            </span>

        </form>

    </div>

</div>

<div id="result">

<div class="page-header">

    

    <a href="index.php?r=user/course/course"><button class="btn btn-grey"  style="margin-left:12px;">添加课程</button></a>

	

</div>

   <form action="index.php?r=user/course/course_list" method="post">

<div class="page-header">

     <div class="col-xs-3">

    <p>课程:</p>

    <input id="form-field-4" class="input-large" name="course" placeholder="请输入课程名称" type="text" value="<?php echo $course;?>"style="width:200px">
    </div>
    <div class="col-xs-3">

    <p>学院:</p>

    <input id="form-field-4" class="input-large" name="college" placeholder="请输入学院名称" type="text" value="<?php echo $college;?>" style="width:200px">
    </div>
    <div class="col-xs-3">

    <p>阶段:</p>

    <input id="form-field-4" class="input-large" name="stage" placeholder="请输入阶段名称" type="text" value="<?php echo $stage;?>" style="width:200px">
    </div>
    <p>&nbsp;</p>

    <button class="btn btn-purple btn-sm" type="submit">

        Search

        <i class="icon-search icon-on-right bigger-110"></i>

    </button>



</div>

</form>



       <div class="table-responsive">

			<table id="sample-table-1" class="table table-striped table-bordered table-hover">

				<thead>                                   

					<tr>

						<td align="center" width="10%">序号</td>

						<td  align="center" width="5%"><input  type="checkbox" onclick="SelectAll()"></td>

                                                <td class="hidden-480" align="center">课程名称</td>

                                                <td class="hidden-480" align="center">学院</td>

						<td class="hidden-480" align="center">阶段</td>

						<td class="hidden-480" align="center" width="100">添加时间</td>

                        <td class="hidden-480" align="center">是否最热</td>

                        <td class="hidden-480" align="center">是否最新</td>

                        <td class="hidden-480" align="center">是否推荐</td>

                        <td class="hidden-480" align="center">排序</td>

						<td align="center">课程简介</td>

						<td align="center">操作</td>

					</tr>

				</thead>

				<tbody>	

                   	<?php foreach($two as $two){?>

                					<tr>

						<td align="center"><a href="#"><?php echo $two['cid'];?></a>-10173</td>

						<td class="center">

								<label>

                                      <input class="ace" name="box[]" id="checkboxid" value="<?php echo $two['cid'];?>" type="checkbox">

								<span class="lbl"></span>

							</label>

						</td>

						<td class="hidden-480" width="200" align="center">

							<?php echo $two['cname']?>			

						</td> 

						<td class="hidden-480" width="200" align="center">							

							<?php echo $two['c_name'];?>

						</td>

						<td class="hidden-480" width="200" align="center">							

							<?php echo $two['s_name'];?>

						</td>



                         <td class="hidden-480" width="200" align="center">

							<?php echo $two['addtime'];?>			

						</td> 

                        <td class="hidden-480" align="center">

                            <?php

                                if($two['is_hot'] == 1){

                                    echo "<a href='javascript:void(0)' status='1' type='is_hot' cid='".$two['cid']."' >√</a>";

                                }else{

                                    echo "<a href='javascript:void(0)' status='0' type='is_hot' cid='".$two['cid']."'>×</a>";

                                }

                            ?>

						</td> 

                        <td class="hidden-480" align="center">

                            <?php

                                if($two['is_new'] == 1){

                                    echo "<a href='javascript:void(0)' status='1' type='is_new' cid='".$two['cid']."'>√</a>";

                                }else{

                                    echo "<a href='javascript:void(0)' status='0' type='is_new' cid='".$two['cid']."'>×</a>";

                                }

                            ?>

						</td> 

                        <td class="hidden-480" align="center">

                            <?php

                                if($two['is_recommend'] == 1){

                                    echo "<a href='javascript:void(0)' status='1' type='is_recommend' cid='".$two['cid']."'>√</a>";

                                }else{

                                    echo "<a href='javascript:void(0)' status='0' type='is_recommend' cid='".$two['cid']."'>×</a>";

                                }	

                            ?>

						</td> 

                        <td class="hidden-480" align="center">

                            <input type="text" value="<?php echo $two['sort']?>" style="width:40px;" />	

						</td> 

						<td class="hidden-480" width="200" align="center">

							<?php echo mb_strlen($two['intro'],'utf-8') > 20 ? mb_substr($two['intro'],0,20,'utf-8').'...' : $two['intro'] ;?>			

						</td> 

						<td class="hidden-480" width="200" align="center">

							

						    	<a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm('确定将这道题删除？'))Recycle(<?php echo $two['cid'];?>)">删除	</a>	

                                                        <a href="index.php?r=user/course/course_up&id=<?php echo $two['cid']; ?>" class="btn btn-xs btn-danger margin0">修改	</a>

						</td> 





	             <?php }?>

                <script src="/static/js/jquery-1.7.2.min.js"></script>

                 <script>

                 $(function(){

                     $("#sample-table-1").find('a').bind('click',function(){

                         var status = $(this).attr('status');

                         var cid = $(this).attr('cid');

                         var type = $(this).attr('type');

                         var that = $(this);

                         $.ajax({

                             url:'index.php?r=user/course/upd_status',

                             type:'post',

                             data:{'type':type,'cid':cid,'status':status},

                             dataType:'text',

                             success:function(rst){

                                 if(rst == 1){

                                    if(status == 1){

                                        that.attr('status',0);

                                        that.html("×");

                                    }else{

                                        that.attr('status',1);

                                        that.html("√");

                                    }

                                 }

                             }

                         })

                     })

                 })

                 </script>









				<!-- <?php if($result=array()){?>

				<?php echo "暂无数据......";?>

				<?php }else{?> -->

              <!--  <?php foreach($result as $k=>$v){?>

					<tr>

						<td align="center"><a href="#"><?php echo $k+1?></a>-<?php echo $v["qid"]?></td>

						<td class="center">

								<label>

                                      <input class="ace" type="checkbox" name="box[]" id="checkboxid" value="<?php echo $v['qid']?>">

								<span class="lbl"></span>

							</label>

						</td>

                                    <td width="300">

									<?php 

									if($v['type']=="阅读理解"){

										//Print_r($v['question']);die;										

										echo $v[0]['question'];

										echo $v[1]['question'];

										echo $v[2]['question'];

										echo $v[3]['question'];

										echo $v[4]['question'];



									}

									if($v['type']=="完形填空" || $v['type']=="阅读理解"){

										//Print_r($v['question']);die;

										echo $v[0]['question'];

									}else{

										echo $v['question'];

									}

                                    ?></td>                                   

                                    <td class="hidden-480" width="200">

									<ul>

										<?php

										if($v['type']=="阅读理解"  || $v['type']=="完形填空"){

											foreach($v as $kks=>$vvs){

												if(is_int($kks)){

													$num = $kks+1;

													echo "<li>$num.".$vvs['select'][0]."</li>";

													echo "<li>&nbsp;&nbsp;&nbsp;".$vvs['select'][1]."</li>";

													echo "<li>&nbsp;&nbsp;&nbsp;".$vvs['select'][2]."</li>";

													echo "<li>&nbsp;&nbsp;&nbsp;".$vvs['select'][3]."</li>";

													echo "<br />";

												}	

											}

										}



										if($v['type']=="选择题"){

											//print_r($v['select']);die;

											//echo $v['select'];

													$num = $k+1;

													echo "<li>$num.".$v['select'][0]."</li>";

													echo "<li>&nbsp;&nbsp;&nbsp;".$v['select'][1]."</li>";

													echo "<li>&nbsp;&nbsp;&nbsp;".$v['select'][2]."</li>";

													echo "<li>&nbsp;&nbsp;&nbsp;".$v['select'][3]."</li>";

													echo "<br />";

										}



										if($v['type']=="判断题"){

											echo '错（×）    对（√）';

										}	

										?>

									</ul>

						</td>

						<td class="hidden-480"  width="200">							

							<ul>

								<?php

									if($v['type']=="阅读理解"  || $v['type']=="完形填空"){

										foreach($v as $kka=>$vva){

											if(is_int($kka)){

												$num = $kka+1;

												echo "<li>$num.".$vva['answer']."</li>";

											}

										}	

									}

									

									if($v['type']=="选择题"){

										echo $v['answer'][0];

									}

									if($v['type']=="填空题"){

										//print_R($v['answer']);die;

											echo $v['answer'];

									}



									if($v['type']=="判断题"){

										

										if($aa=$v['answer'][0]==1){

											echo "对（√）";

										}else{

											echo "错（×）";

										}

									}

								?>

							</ul>

						</td>

						<td align="center" width="100">

							<?php 

							  echo $v['type'];

							?>

						</td>

						<td class="hidden-480" align="center" width="100">

							<span class="label label-sm label-warning"><?php echo $v['kname']?></span>

						</td>

						<td class="hidden-480" align="center">

							<span class="label label-sm label-warning"><?php echo $v['add_time']?></span>

						</td>

						<td align="center">

							<div class="visible-md visible-lg hidden-sm hidden-xs btn-group box" style="width:75px;">

								

								<?php echo "

					<a href='index.php?r=question/Problems/Edit&id=".$v['qid']."' class='but-left'>

								<button class='btn btn-xs btn-info margin0'>

								<i class='icon-edit bigger-120'></i>

								</button>

								</a>";?>

								<a href='#' style="float:left;">

                                <button class='btn btn-xs btn-danger margin0' onclick="if(confirm('确定要删除吗？'))Recycle(<?php echo $v['qid']?>)">

                                <i class='icon-trash bigger-120'></i></button>

                                </a>

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

                                    <?php }?>-->

									<!-- <?php }?> -->

				</tbody>

			</table>

   

        

		</div>

</div>

<div>

<?php echo $pagenum;?>

</div>



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

	//alert("fgfh");

  var j=0;

  arr=[];

  var checke=document.getElementsByName('box[]');

  for(var i=0;i<checke.length;i++){

      if(checke[i].checked == true){

          arr[j++]=checke[i].value;

      }

  }

  $.ajax({

	   url:"index.php?r=user/course/recycles",

	   data:{"pid":arr,'sta':1},

	   type:"post",

	   success:function(e){



		    if(e==1){

					alert('批量回收成功！');

					location.href='index.php?r=user/course/course_list';

                    }else{

					

					 alert('批量回收失败！');

			         location.href='index.php?r=user/course/course_list';



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

     $.ajax({

	   url:"index.php?r=user/course/del",

	   data:{"qid":id},

	   type:"post",

	   success:function(e){

               //alert(e);

		    if(e==1){

			    alert('删除成功！');

			    location.href='index.php?r=user/course/course_list';

			}else{

			

			 alert('删除失败！');

			    location.href='index.php?r=user/course/course_list';

			}

		}

	 });

}

/*

 * ajax查询

 */

function search(){

    var question=$("#form-field-4").val();

    var type=$("#form-field-select-1").val();

    var tiku=$("#form-field-select-2").val();

    $.ajax({

        url:"index.php?r=question/problems/search",

        data:{"question":question,"type":type,"tiku":tiku},

        type:"post",

        success:function(e){

            $('#result').html(e);

        }

    });

}



</script>

<?php

include("../modules/user/views/user/footer.php");





?>