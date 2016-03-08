
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

<form method="post" 
action="index.php?r=user/user/add_file" method="post" 
enctype="multipart/form-data">

知识点:					
                <select id="form-field-select-1" name="kid">
				   <?php foreach($mo as $mo):?>
						<option value="<?php echo $mo['kid']?>"><?php echo $mo['know']?>
				   <?php endforeach;?>
                </select>
               		

<input type="hidden" name="type" value="1">
  

<br><br><br>
问题：<input type="text" name="question">
<br><br>
选项：<input type="text" name="selects">
<br><br>
答案：<input type="text" name="answer">
<br><br>
分数：<input type="text" name="score">
<br><br>

<button class="btn btn-info" type="submit">
<i class="icon-ok bigger-110"></i>
提交
</button>
</span>
</div><br>
</form>

</div>
</div>
<script src="css/index_files/jq.js"></script>
<script>
function bianda(){
    $('#bianda').html("<image src='/images/test/guize.png' width='600'  style='margin-left:25px;' onclick='bianxiao()'/>");
}
function bianxiao(){
     $('#bianda').html("<image src='/images/test/guize.png' width='300'  style='margin-left:25px;cursor:crosshair' onclick='bianda()'/>");
}
</script>

<?php
include("../modules/user/views/user/footer.php");
?>