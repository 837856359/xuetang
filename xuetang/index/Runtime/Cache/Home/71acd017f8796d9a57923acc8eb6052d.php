<?php if (!defined('THINK_PATH')) exit();?>
	本项目制作团队
	1402phpA班委会
	项目经理：张俊龙
	技术总监：彭亮
	项目组负责人：任志博
	项目组骨干成员：
	姚琪
	张彦慧
	杨明
	许力文
	左文丽

<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="八维学堂, MOOC，慕课, 大规模开放式在线课程, 在线学习,">
<meta name="description" content="八维学堂是免费公开的MOOC（大规模开放在线课程）平台，是国家教育部MOOC研究中心官方合作平台，致力于通过来自国内外一流名校开设的免费网络学习课程，为公众提供系统的高等教育，让每一个中国人都有机会享受优质教育资源。通过和清华大学在线教育研究中心、以及国内外知名大学的紧密合作，八维学堂将不断增加课程的种类和丰富程度。">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>八维学堂-八维教育指定的官方中文慕课(MOOC)平台</title>
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/reset.2d73afda293e.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/index.750c3a8f060d.css">
 
</head>
<body class="index lang_zh-cn">
<header id="header_bootstrap" class="ng-scope">
	<div id="py_header_data" class="hide" data-ajax="/header_ajax" data-blurajax="/check_register_params" data-loginsubmit="/v2/login_ajax" data-emailregistersubmit="/v2/create_account" data-phoneregistersubmit="/create_account_with_phone" data-phonecode="/phone/validate" data-code=""></div>
	<div ng-controller="headerAjaxCtrl" class="ng-scope">
		<div class="header_top">
			<div class="header_up">
				<div class="header_up_inner cf">
					<div class="header_up_left fl cf">
						<nav class="fl">
							<ul class="cf">
								<li><a href="http://www.bwie.com/" title="北京八维官网" target="_blank">北京八维官网</a></li>
								<li><a title="#" href="http://172.27.0.200/ceping/index/web/" target="_blank">测评平台</a></li>
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
											<div class="ios_download"><a class="fl" href="#>前往下载页面</a></div>
											<div class="ios_ewm_hd"><img src="/xuetang/Public/js/ios_ewm.1e84ea1a056f.png"></div>
										</div>
									</div>
								</li>
								<li class="li_android fl">
									<div class="li_inner_android">
										<div class="app_alert_android">
											<div class="android_download"><a class="fl" href="#">前往下载页面</a></div>
											<div class="an_ewm_hd"><img src="/xuetang/Public/js/an_ewm.4aa88ce8cf00.png"></div>
										</div>
									</div>
								</li>
							</ol>
						</div>
						<nav class="fr">
							<ul class="cf">
                                <li><a href="#" title="招募老师">招募老师</a></li>
                                <li><a href="#" title="关于我们">关于我们</a><a> | </a><a href="#" title="About Us">About Us</a></li>
								<li><a href="#" title="意见反馈">意见反馈</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>

			<div class="header wrap cf">
				<div class="left fl cf">
					<h1 class="fl"><a href="http://172.27.0.200/xuetang/index.php" title="八维学堂"><img src="/xuetang/Public/js/logo.33eba6677473.png" alt="logo" title="八维学堂"></a></h1>
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
 $a =$_SESSION['uid']; if($a!=""){ ?>
									 <div class="right fr">					
						   <ul class="cf pre_login ng-scope" ng-if="!loginAbout.login">
						   <li class="header_register fr"><a ng-click="goToRegister()" href="/xuetang/index.php/Home/Index/loginout" title="退出">退 出</a></li>
							<li class="header_login_container fr cf">
								<div class="header_vendor fl">
								<a  ng-click="loginThird(&#39;/login/weibo/&#39;)" href="<?php echo ($code_url); ?>"><img src="/xuetang/Public/img/xl.png" ></a>
								<!-- <a href="" title="新浪微博">新浪微博</a> -->	
								</div>
								<div class="header_vendor fl"><a ng-click="loginThird(&#39;/login/qq/&#39;)" href="#" title="QQ"><img src="/xuetang/Public/img/qq.png" ></a></div>
								<div class="header_vendor fl"><a ng-click="loginThird(&#39;/login/weixin/&#39;)" href="#" title="微信"><img src="/xuetang/Public/img/wx.png" ></a></div>
 <div class="header_login fl"><a ng-click="goToLogin()" href="#" title="">欢迎<?php echo (session('username')); ?>登陆</a></div>
                                 <?php
 } else{ ?>
									 <div class="right fr">					
						   <ul class="cf pre_login ng-scope" ng-if="!loginAbout.login">
							<li class="header_register fr"><a ng-click="goToRegister()" href="/xuetang/index.php/Home/Index/register" title="注册">注 册</a></li>
							<li class="header_login_container fr cf">
								<div class="header_vendor fl">
								<a  ng-click="loginThird(&#39;/login/weibo/&#39;)" href="<?php echo ($code_url); ?>"><img src="/xuetang/Public/img/xl.png" ></a>
								<!-- <a href="" title="新浪微博">新浪微博</a> -->	
								</div>
								<div class="header_vendor fl"><a ng-click="loginThird(&#39;/login/qq/&#39;)" href="#" title="QQ"><img src="/xuetang/Public/img/qq.png" ></a></div>
								<div class="header_vendor fl"><a ng-click="loginThird(&#39;/login/weixin/&#39;)" href="#" title="微信"><img src="/xuetang/Public/img/wx.png" ></a></div>
                                <div class="header_login fl" ><a ng-click="goToLogin()" href="/xuetang/index.php/Home/Index/login" title="登录"><img src="/xuetang/Public/img/dl.png" ></a></div>
                                 <?php
 } ?> 
								

							</li>
						</ul>
				</div>
			</div>
		</div>

		<div class="mobile_header">
			<a href="172.27.0.200/xuetang"><img class="logo fl" src="/xuetang/Public/js/logo.33eba6677473.png" alt="logo" title="八维学堂"></a>
			<ul class="cf fr">
				<li><a href="#" title="" target="_blank"><img src="/xuetang/Public/js/1.a0d94a6f45ad.png" alt="" title=""></a></li>
				<li><a href="#" title="课程"><img src="/xuetang/Public/js/2.1948c266bf3f.png" alt="课程" title="课程"></a></li>
				<li><a href="#" title="院校"><img src="/xuetang/Public/js/3.e32a463a04a5.png" alt="院校" title="院校"></a></li>
				<li><a href="#" title="广场"><img src="/xuetang/Public/js/4.12a66edecc8c.png" alt="广场" title="广场"></a></li>
                                <li><a ng-click="goToLogin()" href="/xuetang/Index/login" title="登录"><img src="/xuetang/Public/js/5.7fdc93241166.png" alt="登录" title="登录"></a></li>
			</ul>
		</div>
	</div>
</header>


<div class="bg_hui pb_50">
	<section class="wrap index_title">
		<h2></h2>
		<p>免费学习最好的八维课程！选择感兴趣的专业，加入八维课堂，开始学习吧！</p>
	</section>

	<section class="wrap index_kc_list" id="index_kc_list">
		<ul class="cf">
		<?php if(is_array($college)): $i = 0; $__LIST__ = $college;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cloud">
				<div class="title">
					<a class="title_a" href="/xuetang/index.php/Home/Courses/chuizhi_search/c_id/<?php echo ($vo["c_id"]); ?>" title="" target="_blank"><i><img src="/xuetang/Public/img/list_files/<?php echo ($vo["img"]); ?>" title="<?php echo ($vo["c_name"]); ?>"></i><p><?php echo ($vo["c_name"]); ?></p></a>
				</div>
				<ol>
                                    <?php if($vo['c_id']==10){ ?>
                                               <li class="first">
                                                       <strong>大学英语</strong>
                                                       <strong>大学语文</strong>
                                                       <strong>大学数学</strong>
                                               </li>
                                       <?php }else{ ?>  
                                               <li class="first">
                                                       <strong>专业阶段</strong>
                                                       <strong>高级阶段</strong>
                                                       <strong>实训阶段</strong>
                                               </li>
                                        <?php } ?> 
					</ol><?php endforeach; endif; else: echo "" ;endif; ?>   
			</li>		
        </ul>
	</section>
</div>

<div class="new-courses wrap" id="new-courses">
	<h2>
		<div class="fl"><span>最热课程</span>/ 每周持续更新...</div>
		<ol class="fr cf"><li class="on">最热课程</li>
		</ol>
	</h2>
	<div class="scroll_courses_wrap">
		<div class="scroll_courses cf">
<ul class="cf">	
 <!-- cname,sid,intro,cimg,people,addtime,video,college.c_id,c_name from course inner join college on course.c_id=college.c_id order by people desc limit 8 -->

<?php if(is_array($kec)): foreach($kec as $key=>$vk): ?><li>
	<a href="/xuetang/index.php/Home/Detail/detail_list/cid/<?php echo ($vk["cid"]); ?>" title="" target="_blank">
            <style>.normal1{position:absolute;top:0;left:0;}
                .normal1 img{width:260px;height:182px}
                .normal1 h3{height:50px;line-height:50px;font-size:14px;color:#555;font-weight:bold;text-overflow:ellipsis;white-space:nowrap;width:260px}</style>
		<div class="normal1">
			<img src="<?php if($vk['cimg']==''){ $collage=C('collage'); echo "Public/img/images_course_image_010.jpg";}else{echo $vk['cimg'];}?>" alt="" title="">
			<h3>课程:<?php echo ($vk["cname"]); ?></h3>
			<p><span><?php echo ($vk["c_name"]); ?></span>
				<span><?php echo ($vk["people"]); ?>听课</span></p>
		</div>
	</a>
</li><?php endforeach; endif; ?>		
</ul>
		</div>
	</div>
	<p><a href="/xuetang/index.php/Home/Courses/index" title="">显示全部课程（<?php echo ($num); ?>)</a></p>
</div>

 
<footer>
    <div class="wrap">
        <ul class="cf">
            <li>
                <div class="title">
                    <a href="#" target="_blank">
                        <p class="first">关于我们</p>
                        <p class="second gy">ABOUT US</p>
                    </a>
                </div>
                <p><a href="#" title="">团队介绍</a></p>
                <p><a href="#" title="">联系我们</a></p>
                <p><a href="#" title="" target="_blank">招聘信息</a></p>
                <p><a href="#" title="" target="_blank">常见问题</a></p>
            </li>
            <li>
                <div class="title">
                    <a href="#" target="_blank">
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
                    <a href="#" target="_blank">
                        <p class="first">加入我们</p>
                        <p class="second jr">ABOUT US</p>
                    </a>
                </div>
                <p><a href="#" title="" target="_blank">产品运营</a></p>
                <p><a href="#" title="" target="_blank">资深运维攻城狮</a></p>
                <p><a href="#" title="" target="_blank">iOS开发攻城狮</a></p>
                <p><a href="#" title="" target="_blank">更多</a></p>
            </li>
			 <li>
                <div class="title">
                    <a href="#" target="_blank">
                        <p class="first">联系合作</p>
                        <p class="second jr">ABOUT US</p>
                    </a>
                </div>
                <p><a href="#" title="" target="_blank">产品运营</a></p>
                <p><a href="#" title="" target="_blank">资深运维攻城狮</a></p>
                <p><a href="#" title="" target="_blank">iOS开发攻城狮</a></p>
                <p><a href="#" title="" target="_blank">更多</a></p>
            </li>
        </ul>
    </div>
    <div class="copyright">
        <div class="text fl">
            <p>BieJingBW  2014-2015 北京BW1402phpA</p>
            <p><a href="#" title="京ICP备14019655号" target="_blank">京ICP备80080556号</a></p>
        </div>
        <div class="edx_logo cf fr">
            <a href="#" target="_blank"><img src="/xuetang/Public/js/edx_logo.262fca70a49b.png"></a>
        </div>
    </div>
</footer>
</body></html>