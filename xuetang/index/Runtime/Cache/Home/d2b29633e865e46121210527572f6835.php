<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn" xmlns:wb="http://open.weibo.com/wb"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
<meta charset="utf-8">
<meta name="google-site-verification" content="e8WA0xc4_f57hKZBCIhOBrVMQhWVTgCLDry1AY_Ga-w">
<meta name="keywords" content="八维学堂, MOOC，慕课，88888,, 大规模开放式在线课程, 在线学习,">
<meta name="description" content="八维学堂是免费公开的MOOC（大规模开放在线课程）平台，是国家教育部MOOC研究中心官方合作平台，致力于通过来自国内外一流名校开设的免费网络学习课程，为公众提供系统的高等教育，让每一个中国人都有机会享受优质教育资源。通过和清华大学在线教育研究中心、以及国内外知名大学的紧密合作，学堂在线将不断增加课程的种类和丰富程度。">
<meta name="renderer" content="webkit">
<meta property="qc:admins" content="27433770036055416706375">
<meta name="apple-itunes-app" content="#">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>八维学堂-八维教育指定的官方中文慕课(MOOC)平台</title>
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/reset.2d73afda293e.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/index.750c3a8f060d.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/media.14fe4c3798ee.css">
</head>
<body class="search_page lang_zh-cn">
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
<article>
	<div class="wrap">
		<div class="search_wrap">
			<section class="search_web cf" id="search">
				<div class="left fl">
					<div class="search">
						<input class="text" type="text" value="" autocomplete="off" placeholder="查找课程名称、课程代码、关键词..."/>
						<span>全部课程</span>
						<i></i>
					</div>
					<div class="search_re_wrap"><a class="search_re" href="javascript:" title=""></a></div>
				</div>
				<div class="right fr">
					<span></span><label for="zj">课  程  列  表  展  示</label>
				</div>
				<section class="win">
					<div class="win_in">
						<h2>学科分类</h2>
						<div class="czly">             
                            <!--<a href="#" title="" data-id="0">全部学科 </a>-->  
							<a class="cloud" href="/xuetang/index.php/Home/Courses/index" title="" data-id="2">全部学科</a>
                            <?php foreach($xk as $val){ ?>

								<a class="cloud"  style="margin-bottom: 5px" href="/xuetang/index.php/Home/Courses/kexueSearch/m_id/<?php echo ($val["m_id"]); ?>" title=""  id="xk_name" onclick="xueke(<?php echo $val['m_id'] ?>);" data-id="2"><?php echo $val["m_name"] ?> </a>
                            <?php  } ?>
                            <div style="clear:both;"></div>
						<h2>垂直领域</h2>
						<div class="czly">

                            <?php  foreach($xy as $value){ ?>

                            <a class="data" href="/xuetang/index.php/Home/Courses/chuizhi_search/c_id/<?php echo ($value["c_id"]); ?>" title="" data-id="2"><?php echo ($value["c_name"]); ?> ( <?php echo ($value["num"]); ?>门课 )</a>
							<?php  } ?>

						</div>
					</div>
				</section>
			</section>
		</div>
		<section>
<?php if($view == 'index'): ?><!-- 替换页面-->
<table id="qwe">
<ul class="list_style" id="list_style">
				<?php if(is_array($course)): foreach($course as $key=>$test): ?><li class="cf image_scale"> 
					<div class="img fl" onclick='tu(<?php echo ($value["cid"]); ?>)'> 
						<div class="cover" onclick='tu(<?php echo ($value["cid"]); ?>); return false;'>  
							<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($test["cid"]); ?>" title="点击查看" target="_blank">点击查看
							</a>
						</div> 
						<img height='530' src="<?php if($test['cimg']==''){ echo "/xuetang/Public/img/images_course_image_010.jpg";}else{echo $test['cimg'];}?>" alt="" title="<?php echo ($test["name"]); ?>"> 
					</div> <div class="fl center"> 
					<p class="name"><?php echo ($test["c_name"]); ?>&nbsp;&nbsp;<?php echo ($test["job"]); ?>&nbsp;&nbsp;<?php echo ($test["name"]); ?>
					</p> 
					<h3>
						<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($test["cid"]); ?>" title="<?php echo ($test["cname"]); ?>" target="_blank"><?php echo ($test["cname"]); ?>
						</a>
					</h3> 
					<p class="txt"><?php echo ($test["intro"]); ?> </p> 
				</div>
				<div class="right fl">
					<p class="orange">
						<?php if($test['end_status']==1){ echo "已完结"; }else{ if(!empty($test['num'])){ echo "已连载至第".$test['num']."讲"; }else{ echo "未开课"; } } ?>
					</p> 
					<p class="updata">更新于
						<?php $time_now = time(); $add_time = strtotime($test['addtime']); $time = floor(($time_now-$add_time)/3600); if($time>24 && $time < 720) { $time = floor($time/24).'天'; } elseif($time>=720 && $time < 8640) { $time = floor($time/720).'个月'; } elseif($time>=8640) { $time = '一年'; } else { $time = $time."小时"; } echo $time; ?>
					前</p>
					<p><a>助教在线</a></p>
				</div> 
				</li><?php endforeach; endif; ?>
			</ul>
</table>
<!-- 替换页面--><?php endif; ?>
<?php if($view == 'sel'): if($type == '1'): ?><!-- 替换页面-->
<table id="qwe">
<ul class="list_style" id="list_style">
				<?php if(is_array($course)): foreach($course as $key=>$test): ?><li class="cf image_scale"> 
					<div class="img fl"> 
						<div class="cover">  
							<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($test["course_id"]); ?>" title="点击查看" target="_blank">点击查看
							</a>
						</div> 
						<img src="<?php if($test['cimg']==''){ echo "/xuetang/Public/img/images_course_image_010.jpg";}else{echo $test['cimg'];}?>" alt="" title="<?php echo ($test["name"]); ?>"> 
					</div> <div class="fl center"> 
					<p class="name"><?php echo ($test["c_name"]); ?>&nbsp;&nbsp;<?php echo ($test["job"]); ?>&nbsp;&nbsp;<?php echo ($test["name"]); ?>
					</p> 
					<h3>
						<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($test["course_id"]); ?>" title="<?php echo ($test["cname"]); ?>" target="_blank"><?php echo ($test["cname"]); ?>
						</a>
					</h3> 
					<p class="txt"><?php echo ($test["intro"]); ?> </p> 
				</div>
				<div class="right fl">
					<p class="orange">
						<?php if(!empty($test['num'])){ echo "连载至第".$test['num']."讲"; }else{ echo "未开课"; } ?>
					</p> 
					<p class="updata">更新于
						<?php $time_now = time(); $add_time = $test['cc_addtime']; $time = floor(($time_now-$add_time)/3600); echo $time; ?>
					小时前</p>
					<p><a>助教在线</a></p>
				</div> 
				</li><?php endforeach; endif; ?>
			</ul>
</table>
<!-- 替换页面--><?php endif; ?>

<?php if($type == '2'): ?><!-- 替换页面-->
<table id="qwe">
<ul class="list_style" id="list_style">
				<li class="cf image_scale"> 
					<div class="img fl"> 
						<div class="cover">  
							<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($course["course_id"]); ?>" title="点击查看" target="_blank">点击查看
							</a>
						</div> 
						<img src="<?php if($test['cimg']==''){ echo "/xuetang/Public/img/images_course_image_010.jpg";}else{echo $test['cimg'];}?>" alt="" title="<?php echo ($test["name"]); ?>"> 
					</div> <div class="fl center"> 
					<p class="name"><?php echo ($course["c_name"]); ?>&nbsp;&nbsp;<?php echo ($course["job"]); ?>&nbsp;&nbsp;<?php echo ($course["name"]); ?>
					</p> 
					<h3>
						<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($course["course_id"]); ?>" title="<?php echo ($test["cname"]); ?>" target="_blank"><?php echo ($course["cname"]); ?>
						</a>
					</h3> 
					<p class="txt"><?php echo ($course["intro"]); ?> </p> 
				</div>
				<div class="right fl">
					<p class="orange">
						<?php if(!empty($test['num'])){ echo "连载至第".$test['num']."讲"; }else{ echo "未开课"; } ?>
					</p> 
					<p class="updata">更新于
						<?php $time_now = time(); $add_time = $test['cc_addtime']; $time = floor(($time_now-$add_time)/3600); echo $time; ?>
					小时前</p>
					<p><a>助教在线</a></p>
				</div> 
				</li>
			</ul>
</table>
<!-- 替换页面--><?php endif; ?>
<?php if($type == '3'): ?><!-- 替换页面-->
<table id="qwe">
<ul class="list_style" id="list_style">
				<?php if(is_array($course)): foreach($course as $key=>$test): ?><li class="cf image_scale"> 
					<div class="img fl"> 
						<div class="cover">  
							<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($test["course_id"]); ?>" title="点击查看" target="_blank">点击查看
							</a>
						</div> 
						<img src="<?php if($test['cimg']==''){ echo "/xuetang/Public/img/images_course_image_010.jpg";}else{echo $test['cimg'];}?>" alt="" title="<?php echo ($test["name"]); ?>"> 
					</div> <div class="fl center"> 
					<p class="name"><?php echo ($test["c_name"]); ?>&nbsp;&nbsp;<?php echo ($test["job"]); ?>&nbsp;&nbsp;<?php echo ($test["name"]); ?>
					</p> 
					<h3>
						<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($test["course_id"]); ?>" title="<?php echo ($test["cname"]); ?>" target="_blank"><?php echo ($test["cname"]); ?>
						</a>
					</h3> 
					<p class="txt"><?php echo ($test["intro"]); ?> </p> 
				</div>
				<div class="right fl">
					<p class="orange">
						<?php if(!empty($test['num'])){ echo "连载至第".$test['num']."讲"; }else{ echo "未开课"; } ?>
					</p> 
					<p class="updata">更新于
						<?php $time_now = time(); $add_time = $test['cc_addtime']; $time = floor(($time_now-$add_time)/3600); echo $time; ?>
					小时前</p>
					<p><a>助教在线</a></p>
				</div> 
				</li><?php endforeach; endif; ?>
			</ul>
</table>
<!-- 替换页面--><?php endif; endif; ?>
                    <center><p  style="line-height:40px;font-size:18px; "><?php echo ($page); ?></p></center>
                        
			<div class="show_more" id="show_more">
				<a class="btn1" href="javascript:" title="显示更多课程">显示更多课程（<span>452</span>）...</a>
				<a class="btn2" href="javascript:" title="显示下一门课程" style="display:none;" ></a>
			</div>
			<div class="no_data" id="no_data">
				<h3>暂无相关课程</h3>
				<p><a id="find_other" href="javascript:" title="找找其他课程" >找找其他课程</a></p>
			</div>
		</section>
	</div>
</article>
<div class="hide" id="js_xy_course_search"></div>
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
<script src="/xuetang/Public/js/jq.js"></script>
<script>
  //搜索学科
  function xueke(m_id){    //学科ID
      $.ajax({
          url:"<?php echo U('Courses/kexueSearch');?>",
          data:{"xk_name":xk_name},
          type:'get',
          success:function(e){
             // $("#th").html(e);
			 if(e == 1){
				 //alert(1)
			    $("#qwe").html(e);
			 }
			 if(e == 2){
			    alert("暂无数据!!!");
			 }

          }
      })



  }
  function tu(cid)
	{
		 //window.open('/xuetang/index.php/Home/Detail/detail_list/cid/'+cid);
		 window.location.href='/xuetang/index.php/Home/Detail/detail_list/cid/'+cid;
		 //return false;
	}
</script>