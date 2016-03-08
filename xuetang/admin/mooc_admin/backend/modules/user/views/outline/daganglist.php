<?php
include("../modules/user/views/user/header.php");
?>
<?php
include("../modules/user/views/user/left.php");
?>
<!-----------------------------------左侧导航----------------------------------->
<link rel="stylesheet" href="css/list_files/style.css"/>
<div class="main-content">
    <div id="result">				
        <div id="breadcrumbs" class="breadcrumbs">
            <script type="text/javascript">

                document.getElementById('addquestion1').style.display = "block";
                document.getElementById('question').style.display = "block";
                try {
                    ace.settings.check('breadcrumbs', 'fixed')
                } catch (e) {
                }
            </script>
            <ul class="breadcrumb">
                <li style="float:left; margin-top:6px;">
                    <i class="icon-home home-icon"></i>
                    <a href="index.php?r=Home/index">首页</a>
                </li>
                <li>大纲管理</li>
                <li class="active">大纲列表</li>
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
                <a href="index.php?r=user/outline/add_dagang"><button class="btn btn-grey"  style="margin-left:12px;">添加大纲</button></a>

            </div>
            <form action="" method="post">
                <div class="page-header">
                    <div class="col-xs-3">
                        <p>请输入大纲标题:</p>
                        <input id="form-field-4" class="input-large" placeholder="请输入标题" type="text">
                    </div>

                    <p>&nbsp;</p>
                    <button class="btn btn-purple btn-sm" type="button" onclick="DoEdit()">
                        Search
                        <i class="icon-search icon-on-right bigger-110"></i>
                    </button>

                </div>
            </form>
            <script src="css/list_files/jq.js"></script>
            <script src="css/list_files/jquery-1.3.2.js"></script>
            <script src="css/list_files/jquery.paginate.js"></script>
            <script>
                        function DoEdit() {
                            //alert(1);return ;
                            var dagang = $("#form-field-4").val();
                            //alert(dagang);return;
                            $.ajax({
                                url: "index.php?r=user/outline/search_dagang",
                                data: {"user": dagang},
                                type: "post",
                                dataType: "json",
                                success: function (e) {

                                    var str = '<table id="sample-table-1" class="table table-striped table-bordered table-hover">';
                                    str += '<thead><tr><td align="center">序号</td><td  align="center"><a href="#"     onclick="Recycles()">批量删除</a><input  type="checkbox" onclick="SelectAll()"> </td> <td class="hidden-480" align="center">大纲标题</td> <td class="hidden-480" align="center">所属课程</td><td class="hidden-480" align="center" width="100">添加时间</td> <td align="center">操作</td> </tr> </thead><tbody>	';
                                    $.each(e.date, function (i, n) {
                                        str += '<tr> <td align="center"><a href="#">' + n.kid + '</a></td>';
                                        str += '<td class="center"><label><input class="ace" name="box[]" id="checkboxid"  type="checkbox" value=' + n.kid + '><span class="lbl"></span> </label> </td> <td class="hidden-480" width="200" align="center">' + n.know + ' </td><td class="hidden-480" width="200" align="center"> ' + n.cname + '  </td> <td class="hidden-480" width="200" align="center"> ' + n.ktime + '</td><td class="hidden-480" width="200" align="center"><a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if(confirm(\'确定将这道题删除？\'))Recycle(' + n.kid + ')">删除</a><a class="btn btn-xs btn-danger margin0" href="index.php?r=user/outline/dagang_down&file=' + n.video_path + '">下载</a></td></tr>';
                                    });

                                    str += '</table>';
                                    // alert(str);
                                    $('#table-responsive').html(str);
                                }
                            });

                        }



            </script>
            <div class="table-responsive" id="table-responsive">
                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                    <thead>                                   
                        <tr>
                            <td align="center" width="10%">序号</td>
                            <td  align="center" width="10%">
                                <a href="#" onclick="Recycles()">批量删除</a><input  type="checkbox" onclick="SelectAll()">
                            </td>
                            <td class="hidden-480" align="center">大纲标题</td>
                            <td class="hidden-480" align="center">所属课程</td>
                            <td class="hidden-480" align="center" width="100">添加时间</td>
                            <td align="center">操作</td>
                        </tr>
                    </thead>
                    <tbody>	
<?php foreach ($two as $two) { ?>
                            <tr>
                                <td align="center"><a href="#"><?php echo $two['kid']; ?></a></td>
                                <td class="center">
                                    <label>
                                        <input class="ace" name="box[]" id="checkboxid" value="<?php echo $two['kid']; ?>" type="checkbox">
                                        <span class="lbl"></span>
                                    </label>
                                </td>
                                <td class="hidden-480" width="200" align="center">							
                                    <?php echo $two['know']; ?>
                                </td>
                                <td class="hidden-480" width="200" align="center">
                                    <?php echo $two['cname']; ?>
                                </td>
                                <td class="hidden-480" width="200" align="center">
    <?php echo $two['ktime']; ?>
                                </td> 
                                <td class="hidden-480" width="200" align="center">

                                    <a href="javascript:void(0)" class="btn btn-xs btn-danger margin0" onclick="if (confirm('确定将这道题删除？'))
                                                Recycle(<?php echo $two['kid']; ?>)">删除	</a>
                                    <a class="btn btn-xs btn-danger margin0" href="index.php?r=user/outline/dagang_down&file=<?php echo $two['video_path']; ?>">下载</a></td>
                            </tr>
<?php } ?>
                    </tbody>
                </table>
                <div style='float:right; margin-right: 60px;'>
                            <?php
                                echo $str2; 
                            ?>
                </div>
                <div style='margin-bottom: 100px;'></div>

            </div>
        </div>

        <script type="text/javascript">
        </script>

<!--<script src="admin/mooc_admin/backend/assets/list_files/jquery-1.7.2.min.js"></script>-->
        <script type="text/javascript">
            //全选/反选
            function SelectAll() {
                var checkboxs = document.getElementsByName("box[]");
                for (var i = 0; i < checkboxs.length; i++) {
                    var e = checkboxs[i];
                    e.checked = !e.checked;
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
                var j = 0;
                arr = [];
                var checke = document.getElementsByName('box[]');
                for (var i = 0; i < checke.length; i++) {
                    if (checke[i].checked == true) {
                        arr[j++] = checke[i].value;
                    }
                }
                $.ajax({
                    url: "index.php?r=user/outline/recycles",
                    data: {"qid": arr},
                    type: "post",
                    success: function (e) {
                        if (e == 1) {
                            alert('批量删除成功！');
                            location.href = 'index.php?r=user/outline/dagang_list';
                        } else {

                            alert('批量删除失败！');
                            location.href = 'index.php?r=user/outline/dagang_list';

                        }
                    }
                });

            }
            /*
             * 方法名：Dohui
             *功能： 将题目添加到回收站
             * 参数：kid（int）----题目的ID
             * 返回值：1/0  1成功0失败
             */
            function Recycle(id) {
                $.ajax({
                    type: "POST",
                    url: "index.php?r=user/outline/list_del",
                    data: "kid=" + id,
                    success: function (e) {
                        //alert(e);
                        if (e == 1) {
                            alert('删除成功！');
                            location.href = 'index.php?r=user/outline/dagang_list';
                        } else {

                            alert('删除失败！');
                            location.href = 'index.php?r=user/outline/dagang_list';
                        }
                    }
                });
            }
            /*
             * ajax查询
             */
            function search() {
                var question = $("#form-field-4").val();
                var type = $("#form-field-select-1").val();
                var tiku = $("#form-field-select-2").val();
                $.ajax({
                    url: "index.php?r=question/problems/search",
                    data: {"question": question, "type": type, "tiku": tiku},
                    type: "post",
                    success: function (e) {
                        $('#result').html(e);
                    }
                });
            }

        </script>
        <?php
        include("../modules/user/views/user/footer.php");
        ?>