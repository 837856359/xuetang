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
        <li class="active" style="float:left; margin-top:10px;">角色列表</li>
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
    
    <a href="index.php?r=user/user/role_add"><button class="btn btn-grey" style="margin-left:12px;">角色添加</button></a>
	
</div>

<div id="searchs">

<!-- PPT列表 -->
     <div class="table-responsive" id="table-responsive">
			<table id="sample-table-1" class="table table-striped table-bordered table-hover">
				<thead>                                   
					<tr>
						<td align="center">序号</td>
						 <td class="hidden-480" align="center">角色</td>
                                               
						<td class="hidden-480" align="center">添加时间</td>
						
						<td align="center">操作</td>
					</tr>
				</thead>
				<tbody>	
				<?php foreach($arr as $v){?>
                					<tr>
						<td align="center"><a href="#"><?php echo $v['id'];?></a>-10173</td>

						<td class="hidden-480" width="200" align="center">
							<?php echo $v['name']?>			
						</td> 
                        <td class="hidden-480" width="200" align="center">							
							<?php echo date('Y-m-d H:i:s',$v['create_time']);?>
						</td>

                         
                                                
						        
                        

					
						
						<td align="center">
							<div class="visible-md visible-lg hidden-sm hidden-xs btn-group box" style="width:75px;">
								
								
							
							
								
                                <a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm('确定将此管理员删除？'))Recycle(<?php echo $v['id'];?>)" >删除
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
				<?php }?>
                         
                           </tbody>
			</table>

			
                        
     
		</div>
</div>
<div>
</div>
<script src="/static/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
function Recycle(id){
	//alert(id);
	
     $.ajax({
	   url:"index.php?r=user/user/shanchu",
	   data:{"id":id},
	   type:"post",
	   success:function(e){
              //alert(e);
		    if(e==1){
			   alert('删除成功！');
			   location.href='index.php?r=user/user/role_list';
			}else{
				alert("删除失败");
			}
		}
	 });
	 
}
</script>
				</div><!-- /.main-content -->
<!------------------------------------------------------------------------------>
<?php
include("../modules/user/views/user/footer.php");
?>