<?php

include("../modules/user/views/user/header.php");

?>





    <?php

include("../modules/user/views/user/left.php");

?>

<!-----------------------------------左侧导航--------------------------------- -->

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

<div style="padding:20px;">

    <form action="index.php?r=user/exam/save_up" method="post" enctype="multipart/form-data">

        <font size="4">学院:</font>(必选)&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="aler_xueyuan" onchange="check_xueyuan(this)"  name='type' style="height: 30px;">
                        <option value="0" selected>置顶</option>
                        <?php foreach($one as $val) { ?>
                        <option value="<?php echo $val['c_id'] ?> "><?php echo $val['c_name'] ?></option>
                        <?php } ?>
                </select>
       <br><br>
       <font size="4">专业:</font>(必选)&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="formselect-2" onchange="check_zhuanye(this)"  name='type' style="height: 30px;">
                        <option value="0" selected>置顶</option> 
                </select>
       <br><br>
       <font size="4">阶段:</font>(必选)&nbsp;&nbsp;&nbsp;&nbsp;
                <select id="formselect-3"   name='type' onchange="check_jieduan(this)" style="height: 30px;">
                        <option value="0" aaa='' selected="true">置顶</option>
                        <?php foreach($stage as $val) { ?>
                        <option value="<?php echo $val['sid'] ?> "><?php echo $val['s_name'] ?></option>
                        <?php } ?>
                </select>
       <br><br>

        <div class="col-xs-3" style="padding:0;">

            <select class="form-control" id="field1" name="kid">

                <?php foreach($k_list as $list){?>

                <option value="<?php echo $list['kid']?>"><?php echo $list['know']?></option>

                <?php }?>

            </select>

        </div>

        <div class="col-xs-9">&nbsp;</div>

        <br />

        <br />

        <input type="file" name="pic"/>

        <br />

        <button class="btn btn-info" type="submit">

            <i class="icon-ok bigger-110"></i>

            提交

        </button>

        <br />

        <a href="index.php?r=user/exam/down_moban">

        <button class="btn btn-group-lg " type="button">

            <i class="icon-folder-open bigger-110"></i>

            下载录题模版

        </button>

        </a><br /><br />

        <font color="red">如果没有录题模版，请先下载录题模版之后再上传试题！</form>

    </form>

</div>

<script src="../web/css/jquery.js"></script>
<script>
function check_zhuanye(ts)
{
    var cid = $(ts).val();
    $.ajax({ 
            url:"index.php?r=user/exam/ckthree",
            data:{"c_id":cid},
            dataType:"json",
            type:"post",
            success:function(msg){
                var str="<option >请选择";
                for(var i=0; i<msg.length;i++){
                    str+="<option value="+msg[i].sid+" >"+msg[i].s_name+"";    
                }
                $("#formselect-3").html(str);
            }
        })
}
function check_jieduan(ts)
{
    var c_id = $("#aler_xueyuan").val();
    var cid = $("#formselect-2").val();
    var sid = $(ts).val();
    $.ajax({ 
            url:"index.php?r=user/exam/ckone",
            data:{"c_id":c_id,"cid":cid,"sid":sid},
            dataType:"json",
            type:"post",
            success:function(msg){
                var str="<option >请选择";
                for(var i=0; i<msg.length;i++){
                    str+="<option value="+msg[i].kid+" >"+msg[i].know+"";    
                }
                $("#field1").html(str);
            }
        }) 
}
function check_xueyuan(ts){
    var c_id = $(ts).val();
    $.ajax({ 
            url:"index.php?r=user/exam/cktwo",
            data:{"c_id":c_id},
            dataType:"json",
            type:"post",
            success:function(msg){
                var str="<option >请选择";
                for(var i=0; i<msg.length;i++){
                    str+="<option value="+msg[i].m_id+" >"+msg[i].m_name+"";    
                }
                $("#formselect-2").html(str);
            }
        })    
}
</script>

<?php

include("../modules/user/views/user/footer.php");

?>

