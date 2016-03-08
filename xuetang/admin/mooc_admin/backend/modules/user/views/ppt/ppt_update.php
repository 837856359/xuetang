<?php

include("../modules/user/views/user/header.php");

//use yii\grid\GridView;  //这是必须的；

use yii\widgets\LinkPager;



?>





<?php

include("../modules/user/views/user/left.php");

?>

    <!-----------------------------------左侧导航----------------------------------->


<head>
    <style>
        tr{height: 50px;}
    </style>
</head>
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

            <li class="active" style="float:left; margin-top:10px;">PPT修改</li>

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



            <a href="index.php?r=user/ppt/ppt_add"><button class="btn btn-grey" style="margin-left:12px;">PPT添加</button></a>



        </div>




<table style="margin-left: 30px;">
    <tr style="height: 40px;">
        <form action="index.php?r=user/ppt/upp_ppt" method="post" enctype="multipart/form-data">

            <input type="hidden" value="<?php echo $id;?>" name="p_id">

        <td>PPT名称:</td>
        <td><input type="text" name="p_title" value="<?php echo $data['p_title'];?>" style="width: 250px;" ></td>
    </tr>
    <tr >
        <td>所属学院:</td>
        <td><select name="c_id"  style="width: 250px;">
                <?php foreach($college as $v){ ?>
                <option value="<?php echo $v['c_id']?>"<?php if($data['c_id']==$v['c_id']){ echo "selected";}?> ><?php echo $v['c_name']?></option>  <?php } ?>
            </select>

           </td>
    </tr>
    <tr>
        <td>单元名称:</td>
        <td>
            <select name="ch_id"  style="width: 250px;">
                <?php foreach($chapter as $v){ ?>
                    <option value="<?php echo $v['ch_id']?>"<?php if($data['ch_id']==$v['ch_id']){ echo "selected";}?> ><?php echo $v['ch_name']?></option>  <?php } ?>
            </select>

        </td>
    </tr>
    <tr>
        <td>准确名称:</td>
        <td><input type="text" name="p_desc" value="<?php echo $data['notice'];?>" style="width: 250px;" ></td>
    </tr>
    <tr>
        <td>所属系:</td>
        <td>
            <select name="m_id"  style="width: 250px;">
            <?php foreach($major as $v){ ?>
                <option value="<?php echo $v['m_id']?>"<?php if($data['m_id']==$v['m_id']){ echo "selected";}?> ><?php echo $v['m_name']?></option>  <?php } ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>PPT链接:</td>
        <td><input type="text"  name="link" value="<?php echo $data['link'];?>" style="width: 250px;" ><input id="hide" type="button" value="修改" onclick="up_link()">
            <input type="file"  name="myfile" id="up_file" style=" display: none" style="width: 250px;">

        </td>
    </tr>
    <tr style="" align="center">
        <td style="margin-left: 200px;"><input type="submit" class="btn btn-info" value="提交修改" ></td>
        <td><input type="reset"  class="btn btn-info"  value="重置"></td>
    </tr>

    </form>
</table>

        <script src="/static/js/jquery-1.7.2.min.js"></script>

        <script type="text/javascript">

        </script>

    </div><!-- /.main-content -->
    <script>
        function up_link()
        {
            $("#hide").hide()
           $("#link").hide();
           $("#up_file").show();
        }

    </script>
    <!------------------------------------------------------------------------------>

<?php

include("../modules/user/views/user/footer.php");

?>