
<?php
include("../modules/user/views/user/header.php");
?>

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
    <ul class="breadcrumb">
        <li>
            <i class="icon-home home-icon"></i>
            <a href="http://172.27.0.200/newexam/index.php?r=Home/index">首页</a>
        </li>
        <li>视频管理</li>
        <li class="active">导入视频</li>
</ul></div>

<!--<form action="index.php?r=question/Problems/Save" method="post" enctype="multipart/form-data">
     <br/>
     <input type="hidden" name="MAX_FILE_SIZE" value="">
     <input type="file" name="pic"/>
     <input type="submit" value="上传">
</form>-->


<div style="margin-left:30px; margin-top:30px">


<form method="post" action="index.php?r=user/exam/add_file" enctype="multipart/form-data" onsubmit="return fun()">
	<font size="4">知识点：</font>(必选)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 <select id="form-field-select-1" name="kid">
				   <?php 
                    foreach($mo as $mo){
                        if($arr['kid'] == $mo['kid']){?>
                            <option value="<?php echo $mo['kid']?>" selected><?php echo $mo['know']?>
                        <?php
                        }else{?>
                          <option value="<?php echo $mo['kid']?>"><?php echo $mo['know']?>  
                    <?php    }
                    }
                    ?>

						
				   
                </select>
	<br><br>
	
        
          <label for="form-field-8"><font size="4">题目：</font>(必选)</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="text" id="form-field-8" name="question"  placeholder="请输入题目" style="width: 343px; height: 30px;" value="<?php echo $arr['question']?>" />
	<br><br>		

            <font size="4">试题类型：</font>(必选)&nbsp;&nbsp;&nbsp;&nbsp;
            
                <select id="form-field-select-2"  name='type' style="width: 343px; height: 30px;">
                        <?php
                            if($arr["type"] == 1){?>
                                <option value="1" selected>单选题</option> 
                                <option value="2">多选题</option>
                                <option value="3">判断题</option>
                                <option value="4">填空题</option>
                        <?php   
                             }else if($arr["type"] == 2){?>
                                <option value="1" >单选题</option> 
                                <option value="2" selected>多选题</option>
                                <option value="3">判断题</option>
                                <option value="4">填空题</option>
                        <?php
                            } else if($arr["type"] == 3){?>
                                <option value="1" >单选题</option>   
                                <option value="2">多选题</option>
                                <option value="3" selected>判断题</option>
                                <option value="4">填空题</option>
                        <?php 
                            } else if($arr["type"] == 4){?>
                             <option value="1" >单选题</option>    
                            <option value="2">多选题</option>
                            <option value="3">判断题</option>
                            <option value="4" selected>填空题</option>
                        <?php }?>
                       
                       
                </select>
       
       <br><br>
            <label for="form-field-8"><font size="4">选项：</font>(必选)</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <textarea id="form-field-9" name="selects"  placeholder="请输入选项（注意：两两选项之间用#@#隔开并以#@#结尾，格式如下：1#@#2#@#3#@#4#@#）" style="width: 343px; height: 150px;" ><?php echo $selects;?></textarea>
         <br><br>    
       <label for="form-field-8"><font size="4">标准答案：</font>(必选)</label>&nbsp;&nbsp;&nbsp;
                <textarea id="form-field-10" name="answer"  placeholder="请输入选项（注意：如果是多选题的答案和多个填空题的答案，格式如下：1#@#2#@#3#@#4#@#）" style="width: 343px; height: 150px; margin-top:5px;"><?php echo $answer;?></textarea>
        <br><br>
        <input type="hidden" value="edit" name='edit'>
         <input type="hidden" value="<?php echo $arr['qid']?>" name='qid'>
		<button class="btn btn-info" type="submit" onclick="check()" >
		<i class="icon-ok bigger-110"></i>
		确认修改
		</button>
         
  
</form>
</div>
</div>
<script src="css/index_files/jq.js"></script>
<script>
aaa=false;
/*
*验证表单不为空
*/
function check(){
	//alert(123)
	var kid = document.getElementById('form-field-select-1').value;
	var question = document.getElementById('form-field-8').value;
	var type = document.getElementById('form-field-select-2').value;
	var selects = document.getElementById('form-field-9').value;
	var answer = document.getElementById('form-field-10').value;

	/*var kid      = $("#form-field-select-1").val();
	var question = $("#form-field-8").val();
	var type     = $("#form-field-select-2").val();
	var selects  = $("#form-field-9").val();
	var answer   = $("#form-field-10").val();*/


	if(kid==''){
            alert("知识点不能为空");	
            aaa=false;	
        }else if(question==''){
            alert("问题名称不能为空");	
            aaa=false;
        }else if(type==''){
             alert("试题类型不能为空");	
             aaa=false;
        }else if(selects==''){    
             if(type!='4'){
                alert("选项不能为空");    
                aaa=false;
            }else{
                aaa=true;    
            } 
            
        }else if(answer==''){
            alert("答案不能为空");	
            aaa=false; 
        }else{
			aaa=true;
		}
}

/*
*提交表单验证
*/
function fun(){
	if(aaa == false){
		return false;
	}else{
		return true;
	}
}

</script>

<?php
include("../modules/user/views/user/footer.php");
?>