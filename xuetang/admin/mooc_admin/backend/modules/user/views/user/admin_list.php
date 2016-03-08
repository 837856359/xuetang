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
        <li class="active" style="float:left; margin-top:10px;">管理员列表</li>
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
    
    <a href="index.php?r=user/user/admin_add"><button class="btn btn-grey" style="margin-left:12px;">管理员添加</button></a>
	
</div>
   <form action="index.php?r=user/ppt/ppt_list" method="post">
<div class="page-header">
     <div class="col-xs-3">
    <p>章节:</p>
    <input id="form-field-4" class="input-large" name="search" placeholder="请输入章节名称" type="text">
   </div>

    <p>&nbsp;</p>
    <button class="btn btn-purple btn-sm" type="submit">
        Search
        <i class="icon-search icon-on-right bigger-110"></i>
    </button>

</div>
</form>
<div id="searchs">

<!-- PPT列表 -->
     <div class="table-responsive" id="table-responsive">
			<table id="sample-table-1" class="table table-striped table-bordered table-hover">
				<thead>                                   
					<tr>
						<td align="center">序号</td>
						 <td class="hidden-480" align="center">姓名</td>
						 <td width="100" align="center">
							
							账号：
						</td>
						<td width="100" align="center">
							
							权限
						</td>
                                               
						<td class="hidden-480" align="center">添加时间</td>
						
						<td align="center">操作</td>
					</tr>
				</thead>
				<tbody>	
				<?php foreach($arr as $v){?>
                					<tr>
						<td align="center"><a href="#"><?php echo $v['id'];?></a>-10173</td>

						<td class="hidden-480" width="200" align="center">
							<?php echo $v['nickname']?>			
						</td> 
						<td class="hidden-480" width="200" align="center">							
							<?php echo $v['account']?>
						</td>
						<td class="hidden-480" width="200" align="center">							
							<?php echo $v['remark']?>
						</td>
                                                <td class="hidden-480" width="200" align="center">							
							<?php echo date('Y-m-d H:i:s',$v['add_time']);?>
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
  var arr=[];
  var checke=document.getElementsByName('box[]');
  for(var i=0;i<checke.length;i++){
      if(checke[i].checked == true){
          arr[j++]=checke[i].value;
      }
  }
 // alert(arr);
  $.ajax({
	   url:"index.php?r=user/ppt/delall_ppt",
	   data:{"p_id":arr},
	   type:"post",
	   success:function(e){
		   //alert(e);
		   
		    if(e==1){
			    alert('批量删除成功！');
			    location.href='index.php?r=user/ppt/ppt_list';
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
	   url:"index.php?r=user/user/del_admin",
	   data:{"id":id},
	   type:"post",
	   success:function(e){
              //alert(e);
		    if(e==1){
			   alert('删除成功！');
			   location.href='index.php?r=user/user/admin_list';
			}else{
				alert("删除失败");
			}
		}
	 });
	 
}
/*
 * ajax查询
 */
function DoEdit(){
    var ppt_search=$("#form-field-4").val();
    $.ajax({
        url:"index.php?r=user/ppt/ppt_search",
        data:{"ppt_search":ppt_search},
        dataType:"json",
        type:"post",
        success:function(x){
            //$('#searchs').html(e);result
             var str='<table id="sample-table-1" class="table table-striped table-bordered table-hover">';
             str+='<thead><tr><td align="center">序号</td><td class="center" align="center"><label><input class="ace" onclick="SelectAll()" type="checkbox"><span class="lbl"></span></label><a href="#" onclick="Recycles()">全部删除</a></td><td class="hidden-480" align="center">学院</td><td width="100" align="center">章节：</td><td width="100" align="center">添加时间</td><td class="hidden-480" align="center">PPT</td><td align="center">操作</td></tr></thead><tbody>';
             $.each(x,function(i,n){
                 str+='<tr> <td align="center"><a href="#">'+n.p_id+'</a></td>';
                 str+='<td class="center"><label><input class="ace" name="box[]" id="checkboxid" value="'+n.p_id+'" type="checkbox"><span class="lbl"></span></label></td><td class="hidden-480" width="200" align="center">'+n.c_name+'</td><td class="hidden-480" width="200" align="center">'+n.ch_name+'</td><td class="hidden-480" width="200" align="center">'+n.addtime+'</td><td class="hidden-480" width="200" align="center">'+n.link+'</td><td align="center"><div class="visible-md visible-lg hidden-sm hidden-xs btn-group box" style="width:75px;"><a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm("确定将这道题删除？"))Recycle('+n.p_id+')" >删除</a><a href="index.php?r=user/user/xiazai&vedio_path=" class="btn btn-xs btn-danger margin0" >下载</a><div class="visible-xs visible-sm hidden-md hidden-lg"><div class="inline position-relative"><button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown"><i class="icon-cog icon-only bigger-110"></i></button><ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close"><li><a class="tooltip-info" title="" data-rel="tooltip" href="#" data-original-title="View"><span class="blue"><i class="icon-zoom-in bigger-120"></i></span></a></li><li><a class="tooltip-success" title="" data-rel="tooltip" href="#" data-original-title="Edit"><span class="green"><i class="icon-edit bigger-120"></i></span></a></li><li><a class="tooltip-error" title="" data-rel="tooltip" href="#" data-original-title="Delete"><span class="red"><i class="icon-trash bigger-120"></i></span></a></li></ul></div></div></div></td></tr></tbody>';
             })
             str+='</table>';
             $('#table-responsive').html(str);
        }
    });
}

</script>
				</div><!-- /.main-content -->
<!------------------------------------------------------------------------------>
<?php
include("../modules/user/views/user/footer.php");
?>