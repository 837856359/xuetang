
<?php
include("../modules/user/views/user/header.php");
?>


	<?php
include("../modules/user/views/user/left.php");
?>
<!-----------------------------------左侧导航------------------------------------>
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
        <li class="active">老师列表</li>
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
    
    <a href="index.php?r=user/teacher/add_teacher"><button class="btn btn-grey"  style="margin-left:12px;">添加老师</button></a>
	
</div>
  <form action="index.php?r=user/course/chapter_list" method="post" >
<div class="page-header">
     <div class="col-xs-3">
    <p>老师:</p>
    <input id="form-field-4" class="input-large" name="search" placeholder="请输入章节名称" type="text">
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
						<td align="center">序号</td>
						<td  align="center"><a href="#" onclick="Recycles()">删</a><input  type="checkbox" onclick="SelectAll()"></td>
                                                <td class="hidden-480" align="center">老师名字</td>
						<td align="center">老师级别</td>
                                                <td class="hidden-480" align="center">学院</td>
						<td class="hidden-480" align="center">阶段</td>
                                                <td class="hidden-480" align="center">头像</td>
						<td class="hidden-480" align="center" width="100">添加时间</td>
						<td align="center">操作</td>
					</tr>
				</thead>
				<tbody>	
                   	<?php foreach($two as $two){?>
                					<tr>
						<td align="center"><a href="#"><?php echo $two['id'];?></a></td>
						<td class="center">
								<label>
                                      <input class="ace" name="box[]" id="checkboxid" value="<?php echo $two['id'];?>" type="checkbox">
								<span class="lbl"></span>
							</label>
						</td>
						<td class="hidden-480" width="200" align="center">
							<?php echo $two['name']?>			
						</td> 
						<td class="hidden-480" width="200" align="center">
							<?php echo $two['job']?>			
						</td> 
						<td class="hidden-480" width="200" align="center">							
							<?php echo $cllege[$two['c_id']];?>
						</td>
						<td class="hidden-480" width="200" align="center">							
							<?php echo $two['t_id'];?>
						</td>
                                                <td class="hidden-480" width="200" align="center">							
                                                    <img src="<?php  if($two["t_img"]==''){?>/xuetang/Public/img/teacher/1451347315133.jpg<?php }else{echo $two['t_img'];}?>" width="100px"height="100px">
						</td>
                                                <td class="hidden-480" width="200" align="center">
							
							<?php echo $two['addtime'];?>			
						</td>   
						<td class="hidden-480" width="200" align="center">
							
						    	<a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm('确定将这道题删除？'))Recycle(<?php echo $two['id'];?>)">删除	</a>
                                                        <a href="index.php?r=user/teacher/teacher_update&id=<?php echo$two['id']; ?>" class="btn btn-xs btn-danger margin0">修改	</a>
						</td> 


	             <?php }?>
				</tbody>
			</table>
   
        
		</div>
</div>
 <div>
        <?php echo $pagenum;?>
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
function Recycles() {
	//alert("fgfh");
        alert(123);
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
	   data:{"pid":arr,'sta':2},
	   type:"post",
	   success:function(e){

		    if(e==1){
					alert('批量回收成功！');
					location.href='index.php?r=user/course/chapter_list';
                    }else{
					
					 alert('批量回收失败！');
			         location.href='index.php?r=user/course/chapter_list';

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
	   url:"index.php?r=user/teacher/teacher_del",
	   data:{"qid":id},
	   type:"post",
	   success:function(e){
               //alert(e);
		    if(e==1){
			    alert('删除成功！');
			    location.href='index.php?r=user/teacher/teacher_list';
			}else{
			
			 alert('删除失败！');
			    location.href='index.php?r=user/teacher/teacher_list';
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