
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
        <li class="active" style="float:left; margin-top:10px;">题目管理</li>
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

<script type="text/javascript" charset="utf8" src="media/js/jquery.js"></script>
<script type="text/javascript" charset="utf8" src="media/js/jquery.dataTables.js"></script>
<script>
	jQuery(function($) {
		$('#example').dataTable();  
		$('#table_id').DataTable();
})	
</script>
<div id="result">
<div class="page-header">
    <a>&nbsp;</a>
    
	<form action="index.php?r=user/exam/down_know" method="post" class="col-xs-6" style="padding-left: 0;">
        <div class="col-xs-5">
            &nbsp;
            <select class="form-control" name="kid">
                <?php foreach($k_list as $list){?>
                <option value="<?php echo $list['kid']?>"><?php echo $list['know']?></option>
                <?php }?>
            </select>
        </div>
        <div class="col-xs-2">
        <button class="btn btn-info"  type="submit" style="margin-left:12px;">导出试卷</button>
        </div>
        <div class="col-xs-2">
            <a href="index.php?r=user/exam/up_exam"><button class="btn btn-grey" type="button" style="margin-left:12px;">导入试卷</button></a>
        </div>
    </form>
    <br />
    <br />
</div>

    <form action="index.php?r=user/exam/index_list" method="post">
<div class="page-header">
     <div class="col-xs-3">
    <p>问题:</p>
    <input id="form-field-4" class="input-large" name="search" placeholder="请输入试题名称" type="text">
   </div>

    <p>&nbsp;</p>
    <button class="btn btn-purple btn-sm" type="submit">
        Search
        <i class="icon-search icon-on-right bigger-110"></i>
    </button>

</div>
</form>
<div id="searchs">

       <div class="table-responsive" id="table-responsive">
			<table id="" class="table table-striped table-bordered table-hover">
				<thead>                                   
					<tr>
						<td align="center">序号</td>
						<td  align="center" width="100">
							
								<a href="#" onclick="Recycles()">批量删除</a><input  type="checkbox" onclick="SelectAll()">
                                                                
							
							
						</td>
					<td class="hidden-480" align="center">知识点</td>

						<td align="center">试题名称</td>
                       <td class="hidden-480" align="center">选项</td>
						<td class="hidden-480" align="center">答案</td>
						<td class="hidden-480" align="center">类型</td>
						
						<td class="hidden-480" align="center" width="100">添加时间</td>
						<td align="center">操作</td>
					</tr>
				</thead>
				<tbody>	
                   	<?php foreach($two as $two){?>
                					<tr>
						<td align="center" width="100"><a href="#"><?php echo $two['qid'];?></a>-10173</td>
						<td class="center">
								<label>
                                      <input class="ace" name="box[]" id="checkboxid" value="<?php echo $two['qid'];?>" type="checkbox">
								<span class="lbl"></span>
							</label>
						</td>
						<td class="hidden-480" width="200" align="center">
							<?php echo $two['know']?>			
						</td> 
						<td class=""  align="center" width="200">
							<?php echo $two['question']?>			
						</td> 
						<td class="hidden-480" width="200" align="center">							
							<?php 
								if($two['type']!=4){
									foreach($two['selects'] as $k=>$v){
										$v = str_replace("<", "&lt", $v);
										if($two['type'] ==3){
											if($v == 1){
												echo "对<br>";
											}else if($v == 0){
												echo "错<br>";
											}
										}else{
											echo $v."<br>";
										}
									 
									}
								}else{
									echo "";
								}
								
							?>
						</td>
						<td class="hidden-480" width="200" align="center">	
						<?php 	
							
							foreach($two['answer'] as $k=>$v){
								$v  = str_replace("<", "&lt", $v);
								if($two['type'] ==3){
									if($v == 1){
										echo "对";
									}else{
										echo "错";
									}
								}else{
									echo $v."<br>";
								}
								
								
								
							}?>					
							
						</td>
						<td  class="hidden-480" width="200" align="center">
						<?php if($two['type']==1){
							echo "单选题";
						}else if($two['type']==2){
							echo "多选题";
						}else if($two['type']==3){
							echo "判断题";
						}else if($two['type']==4){
							echo "填空题";
						}

						?>	
						
						</td>
                         <td class="hidden-480" width="200" align="center">
							
							<?php echo $two['add_time'];?>			
						</td>               

                       
						<td class="hidden-480" width="200" align="center">
							
						    <a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm('确定将这道题删除？'))Recycle(<?php echo $two['qid'];?>)">删除	</a>
							<a href="index.php?r=user/exam/edit&qid=<?php echo $two['qid'];?>" class="btn btn-xs btn-danger margin0" >修改	</a>
						</td> 


	             <?php }?>
				</tbody>
			</table>
		</div>
</div>
    <div>
        <?php echo $pagenum;?>
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
	//alert("fgfh");
  var j=0;
  arr=[];
  var checke=document.getElementsByName('box[]');
  for(var i=0;i<checke.length;i++){
      if(checke[i].checked == true){
          arr[j++]=checke[i].value;
      }
  }
  //alert(arr);
  $.ajax({
	   url:"index.php?r=user/exam/recycles",
	   data:{"qid":arr},
	   type:"post",
	   success:function(e){
			//alert(e);
		    if(e==1){
					alert('批量删除成功！');
					location.href='index.php?r=user/exam/index_list';
                    }else{
					
					 alert('批量删除失败！');
			         location.href='index.php?r=user/exam/index_list';

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
	//alert(id)
       $.ajax({
	   url:"index.php?r=user/exam/list_del",
	   data:{"qid":id},
	   type:"post",
	   success:function(e){
           //alert(e);
		  if(e==1){
			    alert('删除成功！');
			    location.href='index.php?r=user/exam/index_list';
			}else{
			
			 alert('删除失败！');
			    location.href='index.php?r=user/exam/index_list';
			}
		}
	 });
}

/*
 * ajax查询
 */

function search(){
    var question=$("#form-field-4").val();
	//alert(question);
    $.ajax({
        url:"index.php?r=user/exam/question_search",
        data:{"question":question},
        type:"post",
		dataType: "json" ,
        success:function(e){
			var str='<table id="sample-table-1" class="table table-striped table-bordered table-hover"><thead><tr><td align="center">序号</td><td  align="center"><a href="#" onclick="Recycles()">批量删除</a><input  type="checkbox" onclick="SelectAll()"></td><td class="hidden-480" align="center">知识点</td><td align="center">试题名称</td> <td class="hidden-480" align="center">选项</td><td class="hidden-480" align="center">答案</td><td class="hidden-480" align="center" width="100">添加时间</td><td align="center">操作</td></tr></thead>';
			str+='<tbody>';
			 $.each(e.date,function(i,n){
			    //str+=n.qid;
				str+="<tr>";	
				str+='<td align="center" width="100"><a href="#">'+n.qid+'</a>-10173</td><td width="100" class="center"><label><input class="ace" name="box[]" id="checkboxid" value='+n.qid+' type="checkbox"><span class="lbl"></span></label></td><td class="hidden-480" width="200" align="center">'+n.know+'</td><td class="hidden-480" width="200" align="center">'+n.question+'</td><td class="hidden-480" width="200" align="center">'+n.selects+'</td><td class="hidden-480" width="200" align="center">'+n.answer+'</td><td class="hidden-480" width="200" align="center">'+n.add_time+'</td><td class="hidden-480" width="200" align="center"><a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm(\'确定将这道题删除？\'))Recycle('+n.qid+')">删除</a></td>';	
				str+="</tr>";
			});
			str+='</tbody>';
			str+='</table>';
			$('#table-responsive').html(str);
		}	
    });
}
</script>
<?php
include("../modules/user/views/user/footer.php");


?>