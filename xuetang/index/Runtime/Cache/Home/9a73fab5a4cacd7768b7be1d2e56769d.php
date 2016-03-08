<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit"/>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<title><?php echo ($data["cname"]); ?></title>
<meta name="keywords" content="学堂在线, MOOC，慕课，XuetangX, 清华大学，北京大学, 在线教育, 大规模开放式在线课程, 在线学习,"/>
<meta name="description" content="<?php echo ($data["cname"]); ?>" />
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/reset.2d73afda293e.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/index.750c3a8f060d.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/media.14fe4c3798ee.css">
</head>
<body class="course_detail lang_zh-cn">
<header id="header_bootstrap">
<div ng-controller="headerAjaxCtrl">
        <div class="header_top">
                <div class="header_up">
                        <div class="header_up_inner cf">
                                <div class="header_up_left fl cf">
                                        <nav class="fl">
                                                <ul class="cf">
                                                        <li><a href="http://www.bwie.net/" title="北京八维官网" target="_blank">北京八维官网</a></li>
                                                        <li><a title="测评平台" href="http://172.27.0.200/ceping/index/web/" target="_blank">测评平台</a></li>
                                                        <li><a href="http://172.27.0.200/exam/" title="考试平台" target="_blank">考试平台</a></li>
                                                </ul>
                                        </nav>
                                </div>

                                <div class="header_up_right fr">
                                        <div class="app_download cf fl" id="app_download">
                                                <ol class="ol cf">
                                                        <li class="li_ios fl">
                                                                <div class="li_inner_ios">
                                                                        <div class="app_alert_ios">
                                                                                <div class="ios_download"><a class="fl" href="/download/ios">前往下载页面</a></div>
                                                                                <div class="ios_ewm_hd"><img src="/xuetang/Public/img/ios_ewm.png" ></div>
                                                                        </div>
                                                                </div>
                                                        </li>
                                                        <li class="li_android fl">
                                                                <div class="li_inner_android">
                                                                        <div class="app_alert_android">
                                                                                <div class="android_download"><a class="fl" href="/download/android">前往下载页面</a></div>
                                                                                <div class="an_ewm_hd"><img src="/xuetang/Public/img/an_ewm.png" ></div>
                                                                        </div>
                                                                </div>
                                                        </li>
                                                </ol>
                                        </div>
                            <nav class="fr">
                            <ul class="cf">
                                <li><a href="#" title="关于我们">关于我们</a><a> | </a><a href="#" title="About Us">About Us</a></li>
								<li><a href="/about#contact" title="意见反馈">意见反馈</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

                    <div class="header wrap cf">
                            <div class="left fl cf">
                                    <h1 class="fl"><a href="http://172.27.0.200/xuetang/index.php" title="学堂在线"><img src="/xuetang/Public/img/logo.33eba6677473.png" alt="logo" title="学堂在线" /></a></h1>
                                    <nav class="fl">
                                            <ul class="cf">
                                                    <li
                                                            class=""   
                                                    ><a href="   /xuetang/index.php/Home/Courses/index" title="课程">课程</a></li>
                                                    <li             
                                                    ><a href="/xuetang/index.php/Home/Courses/partners" title="院校">院校</a></li>
                                                    <li
                        ><a href="#" title="学堂云">资料库</a></li>
                       <li                   
                                                    ><a href="/xuetang/index.php/Home/Community/index" title="广场">讨论区</a></li>

                                            </ul>
                                    </nav>
                            </div>



                          <?php
 $a =$_SESSION['uid']; if($a){ ?>
                        <div class="right fr">					
                        <ul class="cf pre_login ng-scope" ng-if="!loginAbout.login">
                            <li class="header_register fr"><a ng-click="goToRegister()" href="/xuetang/index.php/Home/Index/loginout" title="退出">退 出</a></li>
                            <li class="header_login_container fr cf">
                        <div class="header_vendor fl">
                        <a  ng-click="loginThird(&#39;/login/weibo/&#39;)" href="#"><img src="/xuetang/Public/img/xl.png" ></a>
                        <!-- <a href="" title="新浪微博">新浪微博</a> -->	
                        </div>
                        <div class="header_vendor fl"><a ng-click="loginThird(&#39;/login/qq/&#39;)" href="#" title="QQ"><img src="/xuetang/Public/img/qq.png" ></a></div>
                        <div class="header_vendor fl"><a ng-click="loginThird(&#39;/login/weixin/&#39;)" href="#" title="微信"><img src="/xuetang/Public/img/wx.png" ></a></div>
                        <div class="header_login fl"><a ng-click="goToLogin()" href="#" title="">欢迎<?php echo (session('username')); ?>登陆</a></div>
                             <?php
 } else{ ?>
        <div class="right fr" >
        <ul class="cf post_login" style="display:none;" >
                <li class="mycourse post_login_list"><a href="/dashboard" title="我的课程" >我的课程</a></li>
                <li class="touxiang post_login_list" drop-down ng-mouseover="dropDown()" ng-mouseout="dropUp()" >
                <a ng-href="/xuetang/Home/dashboard/"><img class="touxiang_img" src="/xuetang/Public/img/default.png"></a>
                        <div class="bubble_dropdown" ng-show="bubbleDropDownList">
                                <span class="bubble_shape"></span>
                                <div class="bubble_inner">
                                        <p><a ng-href="/xuetang/Home/dashboard/" title="我的主页" ><span>g</span>我的主页</a></p>
                                        <p><a ng-href="/index.php/home/dashboard/message?type=mess" title="消息中心" ><span>c</span>消息中心</a></p>
                                        <p><a ng-href="{[loginAbout.logout_url]}" title="退出" ><span>a</span>退出</a></p>
                                </div>
                        </div>
                </li>
                <li class="bell post_login_list">
                    <a ng-click="loginAbout.notification.system.unread = 0" class="name" ng-href="/index.php/home/dashboard/message?type=mess" title="我的消息">
                        <img class="bell_img" src="/xuetang/Public/img/bell.png">
                        <span class="new_message" ng-show="loginAbout.notification.system.unread" ></span>
                    </a>
                </li>
            </ul>
            <ul class="cf pre_login">
                    <li class="header_register fr"><a ng-click="goToRegister()" href="/xuetang/index.php/Home/Index/register" title="注册">注 册</a>
            </li>
                    <li class="header_login_container fr cf">
                            <div class="header_vendor fl"><a  ng-click="loginThird(&#39;/login/weibo/&#39;)" href="#"><img src="/xuetang/Public/img/xl.png" ></a></div>
                            <div class="header_vendor fl"><img src="/xuetang/Public/img/qq.png" ></div>
                            <div class="header_vendor fl"><img src="/xuetang/Public/img/wx.png" ></div>
                            <div class="header_login fl"><a href="/xuetang/index.php/Home/Index/login"><img src="/xuetang/Public/img/dl.png" ></a></div>
                    </li>
            </ul>


                    </div>
                    </div>
                    <?php
 } ?>
            </div>
            <div class="mobile_header">
                <a href="/"><img class="logo fl" src="/xuetang/Public/img/logo.png" alt="logo" title="学堂在线" /></a>
                <ul class="cf fr">
                        <li><a href="/mobile" title="" target="_blank"><img src="/xuetang/Public/img/1.png" alt="" title="" /></a></li>
                        <li><a href="/courses" title="课程"><img src="/xuetang/Public/img/2.png" alt="课程" title="课程" /></a></li>
                        <li><a href="/xuetang/Home/Courses/partners" title="院校"><img src="/xuetang/Public/img/3.png" alt="院校" title="院校" /></a></li>
                        <li><a href="/community" title="广场"><img src="/xuetang/Public/img/4.png" alt="广场" title="广场" /></a></li>
                        <li><a ng-click="goToLogin()" href="" title="登录"><img src="/xuetang/Public/img/5.png" alt="登录" title="登录" /></a></li>
                </ul>
            </div>
    </div>
</header>
<div class="course_title">
    <section class="video wrap cf">
            <div class="left fl">
                <?php if($course['video']!=''){ ?>
                <video width="500" controls>
                <!-- Firefox -->
                <source src="<?php echo ($course["video"]); ?>" type="video/ogg" />
                 <!-- Safari/Chrome-->
                  <source src="<?php echo ($course["video"]); ?>" type="video/mp4" />
                 <!-- 如果浏览器不支持video标签，则使用flash -->
                 <embed src="http://blip.tv/play/gcMVgcmBAgA%2Em4v" type="application/x-shockwave-flash"  width="1024" height="798" allowscriptaccess="always" allowfullscreen="true"> </embed>
                </video>
                   <?php }else{ ?>  
                   
                   <img src="<?php if($course['cimg']==''){ echo '/xuetang/Public/img/images_course_image_010.jpg'; }else{ echo $course['cimg']; } ?>">
                     <?php } ?>  
            </div>
            <div class="right fl">
                <h2 id="title1"><?php echo ($course["cname"]); ?></h2>
                <p>简介：<?php echo ($course["intro"]); ?></p>
                <hr size="1" color="#f0f0f0" align="left">
                <div class="cf teacher">
                        <div class="fl">
                                <img src="<?php if($data['t_img']==''){ echo '/xuetang/Public/img/teacher/1451347315133.jpg'; }else{ echo $data[t_img]; } ?>">
                        </div>
                        <div class="fl name">
                                <h3><?php echo ($course["name"]); ?></h3>
                                <p><?php echo ($course["job"]); ?></p>
                        </div>
                </div>
                <div class="cf conRight">
                    <div class="fr cf hide" id="conRight_id">
                        <ol class="fl" id="teacher_nav">
                                        <li></li>
                                        <li></li>
                        </ol>
                        <span class="fl preBtnCircle" id="preBtnCircle">‹</span>
                        <span class="fl nextBtnCircle" id="nextBtnCircle">›</span>
                    </div>
                </div>
            </div>
	</section>
	<section class="wrap apply apply_loading" id="course_data" data-url="/courses/MITx/6_00_1x/2014_T2/about_ajax" data-parameter=" " data-enrollment_start="2015-01-13 16:00:00+00:00" data-enrollment_end="2015-04-22 16:00:00+00:00" data-start="2015-01-25 16:00:00+00:00" data-end="2015-04-22 16:30:00+00:00" data-owner="xuetangX" data-course_id="MITx/6_00_1x/2014_T2" data-serialized="0" data-original_url="" data-enrollment_history_data="[&quot;16\u65e5&quot;, &quot;17\u65e5&quot;, &quot;18\u65e5&quot;, &quot;19\u65e5&quot;, &quot;20\u65e5&quot;, &quot;21\u65e5&quot;, &quot;22\u65e5&quot;, &quot;23\u65e5&quot;, &quot;24\u65e5&quot;, &quot;25\u65e5&quot;]" data-enrollment_history="[12874, 12875, 12875, 12875, 12875, 12875, 12875, 12875, 12875, 12875]" data-enrollment="12875" data-change_enrollment="/change_enrollment" data-ishonorcourse="true" data-iscertificate="false" data-verified_enrollment="/verified_enrollment">
    <h2>每日报名走势</h2>
    <div class="cf">
        <div style="float:right">
        <div class="fl count" >
                <p class="title">已报名人数</p>
                <p class="num"><?php echo ($data["ucount"]); ?></p>
        </div>
        <div class="fl apply_btn">
                <p>
                    <?php if($data['tag'] == '1'): ?><a class="btn_1" id="join_free" data-type="join" href="/xuetang/index.php/Home/Studyadout/syllabus" title="进入课程">进入课程</a>
                    <?php else: ?> 
                    <a class="btn_1" id="join_free" data-type="join" href="/xuetang/index.php/Home/Detail/detail_join" title="加入课程">加入课程</a><?php endif; ?>
                </p>
        </div>
        </div>
        <div data-highcharts-chart="0" class="fl chart" id="chart">
<div style="position: relative; overflow: hidden; width: 500px; height: 180px; text-align: left; line-height: normal; z-index: 0; left: 0.5px; top: 0px;float:left;" id="highcharts-0" class="highcharts-container">
    <style type="text/css">
    html,body,h1,h2,h3,h4,h5,h6 {
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 0px auto;
        margin-bottom: 80px;
    }
    .chart-wrapper {
        background: #fff;
        padding: 15px;
        max-width: 600px;
        margin: 0px auto 0px auto;
        box-sizing: border-box;
        overflow: auto;
        /*在手机，支持图表区域的滚动  -webkit-overflow-scrolling: touch*/
        overflow-scrolling: touch;
        -webkit-overflow-scrolling: touch;
    }
    h2 {
        margin: 20px 0px;
    }
    .chart-wrapper canvas {
        min-width: 70%;
        height: 150px;
    }
    .chart-title,
    .chart-wrapper + small {
        margin-left: 15px;
    }
    </style>
    <script src="/xuetang/Public/js/Chart.js-master/Chart.js?"></script>
    <!--[if lte IE 8]>
    <script src="ie/excanvas.js"></script>
    <script>
    Chart.defaults.global.animation = false;
    //这里主要是为<=IE8做降级处理，因为动画在IE8效果很差
    </script>
    <![endif]-->									
    <div class="container" style="float:left">
        <div class="chart-wrapper" >
            <canvas id="sales-volume-chart"></canvas>
        </div>
        <small>单位：万辆</small>						
</div>
<script>
    function lineChart() {
        var ctx = document.getElementById('sales-volume-chart').getContext("2d")
        var data = {
            labels: [<?php echo ($date_time_str); ?>],
            datasets: [{
                label: "",
                fillColor: "rgba(220,220,220,0.2)",
                strokeColor: "rgba(0,102,51,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#339933",
                pointHighlightFill: "#339933",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [<?php echo ($num_str); ?>]
            }]
        };
        // var salesVolumeChart = new Chart(ctx).Line(data);
        var salesVolumeChart = new Chart(ctx).Line(data, {
            // 小提示的圆角
            // tooltipCornerRadius: 0,
            // 折线的曲线过渡，0是直线，默认0.4是曲线
            bezierCurveTension: 0,
            // bezierCurveTension: 0.4,
            // 关闭曲线功能
            bezierCurve: false,
            // 背景表格显示
            // scaleShowGridLines : false,
            // 点击的小提示
            tooltipTemplate: "<%if (label){%><%=label%> 报名人数：<%}%><%= value %>人",
            //自定义背景小方格、y轴每个格子的单位、起始坐标
            scaleOverride: true,
            scaleSteps: 10,
            // scaleStepWidth: Math.ceil(Math.max.apply(null,data.datasets[0].data) / 0.1),
            scaleStepWidth: 10,
            scaleStartValue: 0

        });
    }


    function barChart() {
        var ctx = document.getElementById('sales-volume-bar-chart').getContext("2d")
        var data = {
            labels: ["2014-10", "2014-11", "2014-12", "2015-1", "2015-2", "2015-3"],
            datasets: [{
                label: "",
                fillColor: "rgba(153,204,153,0.5)",
                strokeColor: "rgba(0,102,51,1)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#338033",
                pointHighlightFill: "#338033",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: [1.27, 1.30, 1.30, 1.41, 1.04, 1.29]
            }]
        };
        var salesVolumeChart = new Chart(ctx).Bar(data, {
            // 点击的小提示
            tooltipTemplate: "<%if (label){%><%=label%> 销量：<%}%><%= value %>万辆"
        });
    }

    // 启动
    setTimeout(function() {
        // 避免IE7-8 调用getContext报错，使用setTimeout
        lineChart()
        barChart()
    }, 0)
    // 在手机测试，canvas中的动画看起来很卡，性能很差
    // PC上还不错
    if (/Mobile/i.test(navigator.userAgent)) {
        //针对手机，性能做一些降级，看起来就不会那么卡了
        Chart.defaults.global.animationSteps = Chart.defaults.global.animationSteps / 6
        Chart.defaults.global.animationEasing = "linear"
    }
    </script>   
    </div>
</section>
</div>
<article class="wrap cf">
    <div class="left fl">
        <section>
                <h2>课程简介</h2>
                <p><?php echo ($data["intro"]); ?></p>
        </section>
        <section id="course_list">
            <h2>课程单元</h2>
            <div class="content" style="max-height:600px;">
                <?php if(is_array($unit)): foreach($unit as $key=>$k): if($data['tag'] == 1 ): ?><a class="btn_1" data-type="join" href="/xuetang/index.php/Home/Courseware/ware"title="<?php echo ($k["ch_name"]); ?>"><?php echo ($k["ch_name"]); ?> </a><br /><br />
                <?php else: ?>
<a class="btn_1" id="join_free" data-type="join" href="/xuetang/index.php/Home/Detail/detail_join" title="<?php echo ($k["ch_name"]); ?>"><?php echo ($k["ch_name"]); ?></a><br /><?php endif; endforeach; endif; ?>
            </div>
        </section>
    </div>
    <div class="right fl">
            <section class="kcxx">
                    <div class="time">
                            <p>
                                <span>8</span>周课时
                                <span>5</span>小时/周
                            </p>
                            <p></p>
                    </div>
                    <h2>知识储备</h2>
                    <p></p>
            </section>
            <h3>授课老师</h3>
            <ul id="list">
                <li>
                    <div class="tc cf">
                            <img class="fl"  src="<?php if($data['t_img']==''){ echo '/xuetang/Public/img/teacher/1451347315133.jpg'; }else{ echo $data[t_img]; } ?>">
                            <div class="fl">
                                    <h4><?php echo ($data["name"]); ?></h4>
                                    <p><?php echo ($data["job"]); ?></p>
                            </div>
                    </div>
                </li>
            </ul>
    </div>
    </article>
    <div class="bootr wrap">
        <section class="new-courses-ref" id="new-courses-ref">
        <div class="h2">相关课程</div>
        <div class="scroll_courses_wrap_ref">
            <div class="scroll_courses_ref cf">
                <ul class="cf">
                    <div class="container-fulid">
                        <div class="row" id="courseref_content">
<?php if(is_array($about)): foreach($about as $key=>$course): ?><li class="col-md-8 col-sm-12">
        <div class="bootr_ref">
			            
            <style>.normal1{position:absolute;top:0;left:0;}
                .normal1 img{width:260px;height:182px}
                .normal1 h3{height:50px;line-height:50px;font-size:14px;color:#555;font-weight:bold;text-overflow:ellipsis;white-space:nowrap;width:260px}</style>
            <a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($course["cid"]); ?>" title="<?php echo ($course["cname"]); ?>" target="_blank">
            <div class="normal1">
                <img  src="<?php if($course['cimg']==''){ echo "/xuetang/Public/img/images_course_image_010.jpg";}else{ echo $course['cimg']; }?>" alt="" title="">
				
                <div class="ct"><?php echo ($course["cname"]); ?></div>
                <div class="ct_p"><span><?php echo ($course["people"]); ?> 听课</span></div>
            </div>
            <div class="staff">
                <div class="cf">
                    <img class="fl" src="<?php if($course['t_img']==''){ echo '/xuetang/Public/img/teacher/1451347315133.jpg'; }else{ echo $course[t_img]; } ?>" alt="<?php echo ($course["name"]); ?>" title="<?php echo ($course["name"]); ?>">
                    <div class="js_content fl">
                        <h4><?php echo ($course["name"]); ?></h4>
                        <div><?php echo ($course["job"]); ?> </div>
                    </div>
                </div>
                <div class="txt">课程简介：<?php echo ($course["intro"]); ?></div>
                <div class="title"><span><?php echo ($course["cname"]); ?></span></div>	
            </div>	
            </a>
        </div>
    </li><?php endforeach; endif; ?>  
	</div>
                </div>
            </ul>
        </div>
    </div>
    </section>
</div>
 <footer>
    <div class="wrap">
        <ul class="cf">
            <li>
                <div class="title">
                    <a href="#" >
                        <p class="first">关于我们</p>
                        <p class="second gy">ABOUT US</p>
                    </a>
                </div>
                <p><a href="#" title="">团队介绍</a></p>
                <p><a href="#" title="">联系我们</a></p>
                <p><a href="#" title="" >招聘信息</a></p>
                <p><a href="#" title="" >常见问题</a></p>
            </li>
            <li>
                <div class="title">
                    <a href="#" >
                        <p class="first">发现课程</p>
                        <p class="second fx">ABOUT US</p>
                    </a>
                </div>
                <p><a href="#" title="">云计算</a></p>
                <p><a href="#" title="">数据科学</a></p>
                <p><a href="#" title="">创业管理</a></p>
                <p><a href="#" title="">更多</a></p>
            </li>
            <li>
                <div class="title">
                    <a href="#" >
                        <p class="first">关注我们</p>
                        <p class="second gz">ABOUT US</p>
                    </a>
                </div>
                <p class="about" id="share">
                    <a class="wb" href="#" title="" >微博</a>
                    <a class="wx" href="#" title="" >微信</a>
                    <a class="email" href="#" title="" >邮件</a>
                </p>
            </li>
            <li>
                <div class="title">
                    <a href="#" >
                        <p class="first">加入我们</p>
                        <p class="second jr">ABOUT US</p>
                    </a>
                </div>
                <p><a href="#" title="" >产品运营</a></p>
                <p><a href="#" title="" >资深运维攻城狮</a></p>
                <p><a href="#" title="" >iOS开发攻城狮</a></p>
                <p><a href="#" title="" >更多</a></p>
            </li>
        </ul>
    </div>
    <div class="copyright">
        <div class="text fl">
            <p>BieJingBW  2014-2015 北京BW1402phpA</p>
            <p><a href="http://www.miibeian.gov.cn/" title="京ICP备80080556号" >京ICP备80080556号</a></p>
        </div>
        <div class="edx_logo cf fr">
            <a href="#" ><img src="/xuetang/Public/img/edx_logo.png"/></a>
        </div>
    </div>
</footer>
 
</body>
</html>
</body>
</html>