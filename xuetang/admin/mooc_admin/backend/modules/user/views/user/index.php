<?php
include("../modules/user/views/user/header.php");
?>
<?php
include("../modules/user/views/user/left.php");
?>
<!-----------------------------------左侧导航----------------------------------->
                     
<!------------------------------主要内容---------------------------------------->
				<div class="main-content">
					
<div class="breadcrumbs" id="breadcrumbs">
    <script type="text/javascript">
	try {
	    ace.settings.check('breadcrumbs', 'fixed')
	} catch (e) {
	}
    </script>
    <ul class="breadcrumb houtai">
	<li>
	    <i class="icon-home home-icon"></i>
	    <a href="#">后台</a>
	</li>
	<li class="active">首页</li>
    </ul><!-- .breadcrumb -->
</div> 


<!-------公告 start --------->
<div class="page-content">
    <div class="alert alert-block alert-success">
	<button class="close" data-dismiss="alert" type="button">X</button>
	<i class="icon-ok green"></i>&nbsp;&nbsp;
	认真&nbsp;&nbsp;&nbsp;&nbsp;负责&nbsp;&nbsp;&nbsp;&nbsp;勤奋&nbsp;&nbsp;&nbsp;&nbsp;严格&nbsp;&nbsp;&nbsp;&nbsp;	<strong class="green"></strong>
	——八维的工作作风.	
    </div>
    <div class="row">
	<!--  公告  -->
	<div class="col-sm-12"> 
	    <div class="widget-box">
		<div class="widget-header">
		    <h5>
			<i class="icon-volume-down"></i>
			公告
		    </h5>
		    <div class="widget-toolbar">
			<a data-action="settings" href="#" data-toggle="modal" data-target="#noticeModal">
			    <i class="icon-cog"></i>
			</a>
			<a data-action="settings" href="#" data-toggle="modal" data-target="#mynoticeModal">
			    <i class="icon-plus"></i>
			</a>
			<a data-action="reload" href="#">
			    <i class="icon-refresh"></i>
			</a>
			<a data-action="collapse" href="#">
			    <i class="icon-chevron-up"></i>
			</a>
		    </div>
		</div>
		<div class="widget-body">
		    <div class="widget-main">
			<div id="myCarousel" class="carousel slide">
			    <!-- Carousel items -->
			    <div class="carousel-inner">
									</div>
				<!-- Carousel nav -->
				<div class="center">
				    <div id="pager">    
						    
					</div>
				</div>
			    </div>
			</div>
		    </div>
		</div>
	    </div>

		<!-- noticeModal start-->
		<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
				<h4 class="modal-title" id="myModalLabel">管理公告</h4>
			  </div>
			  <div class="modal-body">
								  </div>
			  <div class="modal-footer">
				<div class="center">
					<div id="pager">    
						    
					</div>
				</div> 
			  </div>
			</div>
		  </div>
		</div>
		<!-- noticeModal end-->






	    <!-- Modal -->
	    <div class="modal fade" id="mynoticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
		    <div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
			    <h4 class="modal-title" id="myModalLabel">添加公告</h4>
			</div>
			<div class="modal-body">
			    <form method="post" action="index.php?r=Home/addnotice" id="notice">
				标题：<input name="title" data-provide="typeahead" type="text"><br><br>
				内容：<textarea name="content" rows="5" cols="22" data-provide="typeahead"></textarea>
			    </form>
			</div>
			<div class="modal-footer">
			    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
			    <button type="submit" class="btn btn-primary" form="notice">发布</button>
			</div>
		    </div>
	</div>
</div>
<!-------公告 end --------->


	    <!-- 快捷键 -->
	    <div class="col-sm-12"> 
<div class="widget-box">
    <div class="widget-header">
	<h5>快捷操作</h5>
	<div class="widget-toolbar">

	    <a data-action="reload" href="#">
		<i class="icon-refresh"></i>
	    </a>

	    <a data-action="collapse" href="#">
		<i class="icon-chevron-up"></i>
	    </a>

	    <a data-action="close" href="#">
		<i class="icon-remove"></i>
	    </a>
	</div>
	<div class="widget-toolbar">
	    <a data-action="settings" href="javascript:void();" class="icon-plus" data-toggle="modal" data-target="#myModaladd">
		新增
	    </a>
	    <a data-action="settings" href="javascript:void();" class="icon-wrench" data-toggle="modal" data-target="#myModallist">
		管理
	    </a>
	</div>
    </div>

    <div class="widget-body"><div class="widget-body-inner" style="display: block;">
	    <div class="widget-main" id="widget-main">
		<p class="">
		    		</p>
	    </div>
	</div></div>
</div>
	    </div>
	    

       <!-- 数据统计 -->
            <div class="col-sm-6"> 
    
            <div class="widget-box">
                <div class="widget-header widget-header-flat widget-header-small">
                    <h5>
                        <i class="icon-signal"></i>
                        成绩饼状图
                    </h5>
    
                <div class="widget-toolbar no-border">
                    <button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
                    本周
                    <i class="icon-angle-down icon-on-right bigger-110"></i>
                    </button>
                
                            <ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
                            <li class="active">
                                <a href="#" class="blue">
                                <i class="icon-caret-right bigger-110">&nbsp;</i>
                                本周
                                </a>
                            </li>
        
                            <li>
                                <a href="#">
                                <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                上周
                                </a>
                            </li>
        
        
                            <li>
                                <a href="#">
                                <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                本月
                                </a>
                            </li>
        
                            <li>
                                <a href="#">
                                <i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
                                上月
                                </a>
                            </li>
                            </ul>
                        </div>
                        </div>
    
                            <div class="widget-body">
                                <div class="widget-main">
                                <div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative; ">
                                                    <canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 469px; height: 150px;" width="469" height="150"></canvas>
                                <canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 469px; height: 150px;" width="469" height="150"></canvas>
                                
                                        <div class="legend"><div style="position: absolute; width: 82px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div></div></td><td class="legendLabel">social networks</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div></div></td><td class="legendLabel">search engines</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div></div></td><td class="legendLabel">ad campaigns</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div></div></td><td class="legendLabel">direct traffic</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div></div></td><td class="legendLabel">other</td></tr></tbody></table></div></div>
                                <div class="hr hr8 hr-double"></div>
                                <div class="clearfix">
                                    <div class="grid3">
                                    <span class="grey">
                                    <i class="icon-facebook-sign icon-2x blue"></i>
                                    &nbsp; 满分
                                    </span>
                                    <h4 class="bigger pull-right">1,255</h4>
                                </div>
        
                                    <div class="grid3">
                                    <span class="grey">
                                    <i class="icon-twitter-sign icon-2x purple"></i>
                                    &nbsp; 及格
                                    </span>
                                    <h4 class="bigger pull-right">1,941</h4>
                                </div>
                                    <div class="grid3">
                                    <span class="grey">
                                    <i class="icon-pinterest-sign icon-2x red"></i>
                                    &nbsp; 不及格
                                    </span>
                                    <h4 class="bigger pull-right">60</h4>
                                </div>
                                </div>
                            </div><!-- /widget-main -->
                            </div><!-- /widget-body -->
            </div>
    
                        </div>

	    <!-- 新增功能 -->
	    <div class="col-sm-6"> 
                <div class="widget-box">

		    <div class="widget-header">
			<h5>新增功能</h5>
			<div class="widget-toolbar">

				<a data-action="reload" href="#">
				<i class="icon-refresh"></i>
				</a>

				<a data-action="collapse" href="#">
				<i class="icon-chevron-up"></i>
				</a>

				<a data-action="close" href="#">
				<i class="icon-remove"></i>
				</a>
			</div>
			<div class="widget-toolbar"><a data-action="settings" href="javascript:void();" class="icon-plus" data-toggle="modal" data-target="#myProjectadd">
		新增
	    </a>
		</div>
		 
		    </div>
		    <div class="widget-body">
			<div class="widget-main">
			    <table width="500">
				                            
				</table>

			</div>
		    </div>
                </div>
	    </div>

	    

		<!-- 系统信息 -->
	    <div class="col-sm-6"> 
		<div class="widget-box">

		    <div class="widget-header">
			<h5>

			    系统信息

			</h5>
			<div class="widget-toolbar"></div>
		    </div>
		    <div class="widget-body">
			<div class="widget-main">
			    <table>
				<tbody><tr>
				    <td>您的级别：Authority</td>
				</tr>
				<tr>
				    <td>php版本：5.4.15</td>
				</tr>
				<tr>
				    <td>Register_Globals：
					on</td>
				    <td>Magic_Quotes_Gpc:
					on				    </td>
				</tr>
				<tr>
				    <td>支持上传的最大文件：200M</td>
				</tr>
				<tr>
				    <td>是否允许打开远程链接：支持
				    </td>
				</tr>
				<tr>
				    <td>软件版本信息：八维考试系统    版本号：1.0
				    </td>
				</tr>
			    </tbody></table>
			</div>
		    </div>
		</div>
	    </div>
		
	 



				    </div><!-- /.row -->
				    </div><!-- /.page-content -->


				    <script type="text/javascript" src="css/index_files/jquery_1.htm"></script>
<div class="modal fade" id="myModaladd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		<h4 class="modal-title" id="myModalLabel">添加快捷操作</h4>
	    </div>
	    <form action="index.php?r=home/add_urls" method="post">
		<div class="modal-body">
		    <table class="table table-striped table-bordered table-hover" id="quick_url">
			<tbody><tr>
			    <td>操作标题</td>
			    <td><input id="qname" name="qname" type="text"></td>			 
			</tr>
			<tr>
			    <td>操作链接</td>
			    <td><input id="qurl" name="qurl" type="text"></td>
			</tr>
		    </tbody></table>
		</div>
		<div class="modal-footer">
		    <button class="btn btn-primary" type="submit">添加</button>
		    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>      
		</div>
	    </form>
	</div>
    </div>
</div>
<div class="modal fade" id="myModallist" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		<h4 class="modal-title" id="myModalLabel">管理快捷操作</h4>
	    </div>

		<div class="modal-body">
		    <table class="table table-striped table-bordered table-hover" id="quick_url">
			<thead>
			    <tr>
				<th>操作名称</th>
				<th class="hidden-480">链接地址</th>
				<th></th>
			    </tr>
			</thead>
			<tbody>
						</tbody>
		    </table>
		</div>
		<div class="modal-footer">
		    <button class="btn btn-primary" type="submit">添加</button>
		    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>      
		</div>
	</div>
    </div>
</div>
<!--添加新增功能-->
<div class="modal fade" id="myProjectadd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
		<h4 class="modal-title" id="myModalLabel">添加新增功能操作</h4>
	    </div>
	    <form action="index.php?r=home/add_project" method="post">
		<div class="modal-body">
		    <table class="table table-striped table-bordered table-hover" id="quick_url">
			<tbody><tr>
			    <td>新增功能名称</td>
			    <td><input id="name" name="name" type="text"></td>			 
			</tr>
			<tr>
			    <td>新增功能链接</td>
			    <td><input id="url" name="url" type="text"></td>
			</tr>
		    </tbody></table>
		</div>
		<div class="modal-footer">
		    <button class="btn btn-primary" type="submit">添加</button>
		    <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>      
		</div>
	    </form>
	</div>
    </div>
</div>
<script>
  /*
    *删除快捷操作
	* @param int qid 链接的id  
	* @param2  object  obj  当前的dom对象
	* date 2014-07-01
  */

  function del_url(qid,obj){
     $.ajax({
	    url:'index.php?r=home/del_url',
		data:{'qid':qid},
		type:'post',
		success:function(e){
		   $(obj).parent().parent().parent().remove();
		}
	 })
  }
	 /*
    *删除快捷操作
	* @param int id 链接的id  
	* @param2  object  obj  当前的dom对象
	* date 2014-07-01
  */
  function del_project(id,obj){
	  //alert(id);
	  if(confirm("您要删除此功能吗？")){
		 $.ajax({
			url:'index.php?r=home/del_project',
			data:{'id':id},
			type:'post',
			success:function(e){
			   $(obj).parent().parent().remove();
			}
		 })
	  }
  }
</script>				</div><!-- /.main-content -->
<!------------------------------------------------------------------------------>
<?php
include("../modules/user/views/user/footer.php");
?>