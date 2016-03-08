<?php if (!defined('THINK_PATH')) exit();?><!--
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
-->
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}</style>
<meta charset="utf-8">
<meta name="keywords" content="八维学堂, MOOC，慕课, 大规模开放式在线课程, 在线学习,">
<meta name="description" content="八维学堂是免费公开的MOOC（大规模开放在线课程）平台，是国家教育部MOOC研究中心官方合作平台，致力于通过来自国内外一流名校开设的免费网络学习课程，为公众提供系统的高等教育，让每一个中国人都有机会享受优质教育资源。通过和清华大学在线教育研究中心、以及国内外知名大学的紧密合作，八维学堂将不断增加课程的种类和丰富程度。">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<title>八维学堂-八维教育指定的官方中文慕课(MOOC)平台</title>
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/reset.2d73afda293e.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/index.750c3a8f060d.css">
<link rel="stylesheet" type="text/css" href="/xuetang/Public/js/media.14fe4c3798ee.css">
<!--[if lt IE 9]>
<script type="text/javascript" src="/static/js/html5shiv.0ce8f355891c.js"></script>
<![endif]-->
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

<div id="carousel" style="display:none;">
    <ul class="carousel_wrap">
        <li class="carousel_item" data-bg-width="1920" data-bg="#" data-img="#">
           <img src="/xuetang/Public/zce_js/banner.png">
        </li>
    </ul>
</div>
<div class="bg_hui pb_50">
	<section class="wrap index_title">
		<h2></h2>
		<p>免费学习最好的课程！选择感兴趣的领域，加入课堂，开始学习吧！</p>
	</section>
	<section class="wrap index_kc_list" id="index_kc_list">
		<ul class="cf">
			<li class="cloud">
				<div class="title">
					<a class="title_a" href="#" title="" target="_blank"><i><img src="/xuetang/Public/zce_js/zce_1.png" alt="云计算" title="云计算"></i><p>云计算</p></a>
				</div>
				<ol>
					<li class="first">
						<strong>入门</strong>
						<a href="#" title="" target="_blank" >编程入门</a>
						<a href="#" title="" target="_blank" >数据结构</a>
					</li>
					<li class="second">
						<strong>进阶</strong>
						<a href="#" title="" target="_blank" >SaaS应用开发</a>
						<a href="#" title="" target="_blank" >软件工程</a>
					</li>
					<li class="third">
						<strong>探索</strong>
						<a href="#" title="" target="_blank" >Linux</a>
						<a href="#" title="" target="_blank" >移动应用开发</a>
					</li>
				</ol>
				<p><a href="#" title="" target="_blank">7门课程<i></i></a></p>
			</li>
			<li class="data">
				<div class="title">
					<a class="title_a" href="#" title="" target="_blank"><i><img src="/xuetang/Public/zce_js/zce_2.png" alt="数据分析" title="数据分析"></i><p>数据科学</p></a>
				</div>
				<ol>
					<li class="first">
						<strong>入门</strong>
						<a href="#" title="" target="_blank" >建模思维</a>
						<a href="#" title="" target="_blank" >统计</a>
						<a href="#" title="" target="_blank" >概率</a>
					</li>
					<li class="second">
						<strong>进阶</strong>
						<a href="#" title="" target="_blank" >统计分析</a>
						<a href="#" title="" target="_blank"  >机器学习</a>
					</li>
					<li class="third">
						<strong>探索</strong>
						<a href="#" title="" target="_blank"  >R</a>
						<a href="#" title="" target="_blank"  >分析框架</a>
						<a href="#" title="" target="_blank"  >数据隐私</a>
					</li>
				</ol>
				<p><a href="#" title="" target="_blank">9门课程<i></i></a></p>
</li>
			<li class="venture">
				<div class="title">
					<a class="title_a" href="#" title="" target="_blank"><i><img src="/xuetang/Public/zce_js/zce_3.png" alt="创业管理" title="创业管理"></i><p>创业管理</p></a>
				</div>
				<ol>
					<li class="first">
						<strong>入门</strong>
						<a href="#" title="" target="_blank" >用户定位</a>
						<a href="#" title="" target="_blank"  >财务分析</a>
                        <a href="#" title="" target="_blank"  >营销</a>
					</li>
					<li class="second">
						<strong>进阶</strong>
						<a href="#" title="" target="_blank"  >消费决策</a>
						<a href="#" title="" target="_blank"  >全球化</a>
					</li>
					<li class="third">
						<strong>探索</strong>
						<a href="#" title="" target="_blank"  >创新思维</a>
						<a href="#" title="" target="_blank"  >正能量</a>
					</li>
				</ol>
				<p><a href="#" title="" target="_blank">7门课程<i></i></a></p>
			</li>
			<li class="more">
				<div class="title">
					<a class="title_a" href="#" title="" target="_blank"><i><img src="/xuetang/Public/zce_js/zce_5.png" alt="更多选择" title="更多选择"></i><p>更多选择</p></a>
				</div>
				<div class="list">
					<a href="#" title="" target="_blank">生命科学</a>
					<a href="#" title="" target="_blank">计算机</a>
					<a href="#" title="" target="_blank">数据分析</a>
					<a href="#" title="" target="_blank">社会科学</a>
					<a href="#" title="" target="_blank">伦理哲思</a>
					<a href="#" title="" target="_blank">思维训练</a>
				</div>
				<p><a href="#" title="" target="_blank">全部课程<i></i></a></p>
 </li>
		</ul>
	</section>
</div>
<div class="new-courses wrap" id="new-courses">
	<h2>
		<div class="fl"><span>最热课程</span>/ 每周持续更新...</div>
		<ol class="fr cf"><li class="on">最热课程</li><li>近期开课</li><li>最新预告</li></ol>
	</h2>
	<div class="scroll_courses_wrap">
		<div class="scroll_courses cf">
			<ul class="cf">
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image.jpg" alt="" title="">
			<h3>日常思考的科学 Think101x</h3>
			<p><span>
					1天前更新
				</span><span>26995 听课</span><span>4618 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw1.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>Jason Tangen</h4>
					<p>昆士兰大学 认知学 高级讲师</p>
				</div>
			</div>
			<p class="txt">学习更好地思考、辩论和选择。 </p>
			<p class="title"><span>日常思考的科学</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/rw2.jpg" alt="" title="">
			<h3>计算机科学和Python编程导论 6_00_1x</h3>
			<p><span>
					1周前更新
				</span><span>2216 听课</span><span>172 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw2.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>W. Eric L. Grimson</h4>
					<p>麻省理工学院 计算机科学和电机工程系 教授、副校长</p>
				</div>
			</div>
			<p class="txt">本课程将介绍把计算机科学作为工具解决现实世界中的分析问题。 </p>
			<p class="title"><span>计算机科学和Python编程导论</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(1).jpg" alt="" title="">
			<h3>设计的人因与文化（2015春） 70167012X</h3>
			<p><span>
					4天前更新
				</span><span>3932 听课</span><span>182 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/raopl.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>饶培伦(Pei-Luen.Patrick Rau)</h4>
					<p>清华大学 工业工程系 教授</p>
				</div>
			</div>
			<p class="txt">本课程将依托于实际的设计案例和有趣的文化现象，引导学生从文化的视角运用人因学的知识和方法理解什么是以用户为中心的设计理念，掌握科学的设计和评估方法。 </p>
			<p class="title"><span>设计的人因与文化（2015春）</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/uinov8x-378x225.png" alt="" title="">
			<h3>用户创新：创业之路 uinov8x</h3>
			<p><span>
					2周前更新
				</span><span>35000 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw3.png" alt="" title="">
				<div class="js_content fl">
					<h4>Eric von Hippel</h4>
					<p>麻省理工学院 创新与工程系统 教授</p>
				</div>
			</div>
			<p class="txt">解决你的问题。分享你的解决方案。开始你的冒险之旅。</p>
			<p class="title"><span>用户创新：创业之路</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(2).jpg" alt="" title="">
			<h3>文物精品与文化中国（2015春） 00690242X</h3>
			<p><span>
					19小时前更新
				</span><span>7549 听课</span><span>735 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/penglin.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>彭林</h4>
					<p>清华大学 历史系 教授</p>
				</div>
			</div>
			<p class="txt">本课程以精品文物作引子，将学术界探索中华文明的过程作为线索，介绍古代中国在造船、玉器等诸多领域的杰出成就，学生可以藉此获得对文化中国全方位的、直观而深入的认识。 </p>
			<p class="title"><span>文物精品与文化中国（2015春）</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(3).jpg" alt="" title="">
			<h3>中国大国崛起的经济、历史、国际研究分析 THU00022X</h3>
			<p><span>
					18小时前更新
				</span><span>5989 听课</span><span>158 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/ldk1.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>李稻葵</h4>
					<p>清华大学 金融系 弗里曼讲席教授</p>
				</div>
			</div>
			<p class="txt">Will China Rise as a Disruptive Force? Three leading Chinese experts will share their views and provide answers to Chinese critical issues. </p>
			<p class="title"><span>中国大国崛起的经济、历史、国际研究分析</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(4).jpg" alt="" title="">
			<h3>2D动画制作（2015春季班） YunTech001</h3>
			<p><span>
					15小时前更新
				</span><span>5894 听课</span><span>437 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/chenshichang.png" alt="" title="">
				<div class="js_content fl">
					<h4>陈世昌</h4>
					<p>台湾云林科技大学 数位媒体设计系 副教授</p>
				</div>
			</div>
			<p class="txt">本课程将以「趣味、创意、易学、实用」为目标，每次都融合一个小故事为主，每周八个小单元,可以完成1~2个小故事，突破传统的教学方法。 </p>
			<p class="title"><span>2D动画制作（2015春季班）</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/igno101x-378x225.jpg" alt="" title="">
			<h3>无知！ igno101x</h3>
			<p><span>
					2周前更新
				</span><span>4850 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/MichaelSmithson.png" alt="" title="">
				<div class="js_content fl">
					<h4>Michael Smithson</h4>
					<p>澳洲国立大学 心理学研究学院 教授</p>
				</div>
			</div>
			<p class="txt">发掘什么是无知，它起源于哪，人们用它来做什么，以及它在社会和文化中的角色。</p>
			<p class="title"><span>无知！</span></p>
		</div>
	</a>
</li>
			</ul>
			<ul class="cf">
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(5).jpg" alt="" title="">
			<h3>英语写作指导Ⅱ ColWri2.2x</h3>
			<p><span>
					1周后开课
				</span><span>1003 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/maggie_sokolik_x110.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>Maggie Sokolik</h4>
					<p>  </p>
				</div>
			</div>
			<p class="txt">针对英语语言学习者的写作入门课程，主要关注短文写作、语法使用和自我检查，分为三个部分，这是第Ⅱ部分。 </p>
			<p class="title"><span>英语写作指导Ⅱ</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/miti-378x225.jpg" alt="" title="">
			<h3>从企业视角参与创新生态 MITi.001x</h3>
			<p><span>
					1周后开课
				</span><span>0 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw6.png" alt="" title="">
				<div class="js_content fl">
					<h4>Fiona Murray</h4>
					<p>麻省理工学院  </p>
				</div>
			</div>
			<p class="txt">通过创新生态进行发展的途径</p>
			<p class="title"><span>从企业视角参与创新生态</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/tup3.jpg" alt="" title="">
			<h3>网络技术与应用 UST001</h3>
			<p><span>
					1周后开课
				</span><span>1250 听课</span><span>1 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/sxq.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>沈鑫剡</h4>
					<p>中国人民解放军理工大学  教授</p>
				</div>
			</div>
			<p class="txt">系统介绍网络工作原理，涵盖等级考试三级网络技术和CCNA认证考试内容，通过Cisco Packet Tracer验证教学内容，培养学生网络设计和应用能力。 </p>
			<p class="title"><span>网络技术与应用</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(6).jpg" alt="" title="">
			<h3>大学历史与文化（2015秋） 01030132X_2015X</h3>
			<p><span>
					2周后开课
				</span><span>539 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/IMG_0290.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>白峰杉</h4>
					<p>清华大学文化素质教育基地、清华大学数学科学系  </p>
				</div>
			</div>
			<p class="txt">相信你渴望上大学, 但你了解大学的前世今生吗? 也许你正在读大学, 但你深入思考过大学的意义吗？ 甚至你读过了大学，但你真正理解大学的价值吗？--这门课程就是为你开的! </p>
			<p class="title"><span>大学历史与文化（2015秋）</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(7).jpg" alt="" title="">
			<h3>英语写作指导Ⅲ ColWri2_3x_2015_T1</h3>
			<p><span>
					3周后开课
				</span><span>806 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/maggie_sokolik_x110(1).jpg" alt="" title="">
				<div class="js_content fl">
					<h4>Maggie Sokolik</h4>
					<p>  </p>
				</div>
			</div>
			<p class="txt">针对英语语言学习者的学术写作入门课程，主要关注短文写作、语法使用和自我检查，分为三个部分，这是第Ⅲ部分。 </p>
			<p class="title"><span>英语写作指导Ⅲ</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
<img src="/xuetang/Public/zce_js/nrv1.jpg" alt="" title="">
			<h3>妇女健康和权益 WomensHealth</h3>
			<p><span>
					1个月后开课
				</span><span>1 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/fub1.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>Anne Firth Murray</h4>
					<p>斯坦福大学 人类生物学 顾问教授</p>
				</div>
			</div>
			<p class="txt">本课程对妇女健康和权益进行综述，从婴儿阶段、儿童时期，再到青少年、生育年龄到老年阶段均有涉及。 </p>
			<p class="title"><span>妇女健康和权益</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/mox1.png" alt="" title="">
			<h3>人体解剖学 ana101x</h3>
			<p><span>
					2个月后开课
				</span><span>0 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw1.png" alt="" title="">
				<div class="js_content fl">
					<h4>John Yuen</h4>
					<p>香港理工大学 生物医学家 </p>
				</div>
			</div>
			<p class="txt">本课程将从六个医疗专业的角度，以现实的中风案例带你探索人体结构。</p>
			<p class="title"><span>人体解剖学</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/images_course_image(8).jpg" alt="" title="">
			<h3>大学化学（先修课） AP000001X</h3>
			<p><span>
					2个月后开课
				</span><span>2678 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/lq.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>李强</h4>
					<p>清华大学 化学系 教授</p>
				</div>
			</div>
			<p class="txt">化学是认识物质世界的重要窗口，是一门“中心的科学”。对于未来以研究物质世界为主要任务的理工科同学而言，打好坚实的化学基础，对建立完整的知识体系，培养多角度思考、分析和解决问题的能力，定会有莫大的帮助。 </p>
			<p class="title"><span>大学化学（先修课）</span></p>
		</div>
	</a>
</li>
			</ul>
			<ul class="cf">
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/rm1.jpg" alt="" title="">
			<h3>清华大学研究生学位论文答辩(2015) THESIS2015X</h3>
			<p><span>
					2分钟前更新
				</span><span>20 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/qh1.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>清华大学研究生院</h4>
					<p>  </p>
				</div>
			</div>
			<p class="txt">2014年清华大学首次将研究生答辩以MOOC形式发布于学堂在线平台，今年将迎来第二次研究生答辩视频。期待您继续关注。</p>
			<p class="title"><span>清华大学研究生学位论文答辩(2015)</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/gt1.jpg.jpg" alt="" title="">
			<h3>中国古代礼仪文明（上） 00690212X</h3>
			<p><span>
					23小时前更新
				</span><span>30 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw13.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>彭林</h4>
					<p>清华大学 历史系 教授</p>
				</div>
			</div>
			<p class="txt">中国是传承千年的礼仪之邦，中国文化的核心是礼。本课程讲通过大量的文献材料，深入浅出地讲授中国古代礼仪文明的基本框架。</p>
			<p class="title"><span>中国古代礼仪文明（上）</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/tp1.jpg" alt="" title="">
			<h3>思考食物 Chem181x</h3>
			<p><span>
					5天前更新
				</span><span>43 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw14.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>Dr. Ariel Fenster</h4>
					<p>  </p>
				</div>
			</div>
			<p class="txt">本门课程将提供一个科学框架，让你更好理解食物，理解一直以来食物对健康和社会的影响。</p>
			<p class="title"><span>思考食物</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/adc1.jpg" alt="" title="">
			<h3>自然灾害 ATOC185x</h3>
			<p><span>
					5天前更新
				</span><span>27 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw16.png" alt="" title="">
				<div class="js_content fl">
					<h4>John Gyakum</h4>
					<p>  </p>
				</div>
			</div>
			<p class="txt">本门课程将探索不同类型自然灾害背后的科学原理，以及人类在控制、预测这些灾害方面的可为与不可为。</p>
			<p class="title"><span>自然灾害</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/qc1.jpg" alt="" title="">
			<h3>汽车造型设计二维表达 30150303X</h3>
			<p><span>
					6天前更新
				</span><span>77 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw17.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>王波</h4>
					<p>清华大学 汽车系 副教授</p>
				</div>
			</div>
			<p class="txt">想知道炫酷的汽车草图、效果图都是怎么画出来的吗？跟着我们一起学习吧！</p>
			<p class="title"><span>汽车造型设计二维表达</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/tup2.jpg" alt="" title="">
			<h3>地质学与工程地质(2015年秋) 40040152X</h3>
			<p><span>
					1周前更新
				</span><span>53 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/rw18.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>徐文杰</h4>
					<p>清华大学 水利系 副教授</p>
				</div>
			</div>
			<p class="txt">地球是人类的家园。人类文明发展与利用和改造地球密不可分。本课程将介绍地质学基本知识及工程地质分析原理和方法，从而在大规模工程建设中更好地利用和保护好地球！</p>
			<p class="title"><span>地质学与工程地质(2015年秋)</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/tup5.jpg" alt="" title="">
			<h3>数据结构(2015秋) 30240184X</h3>
			<p><span>
					6天前更新
				</span><span>171 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/junhuideng.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>邓俊辉</h4>
					<p>清华大学 计算机系 副教授</p>
				</div>
			</div>
			<p class="txt">本课程旨在围绕各类数据结构的设计与实现，揭示其中的规律原理与方法技巧；同时针对算法设计及其性能分析，使学生了解并掌握主要的套路与手段。 </p>
			<p class="title"><span>数据结构(2015秋)</span></p>
		</div>
	</a>
</li>
				


<li>
	<a href="#" title="" target="_blank">
		<div class="normal">
			<img src="/xuetang/Public/zce_js/tup16.jpg" alt="" title="">
			<h3>模拟电子技术基础(应用部分) 20250064X</h3>
			<p><span>
					1周前更新
				</span><span>129 听课</span><span>0 留言</span></p>
		</div>
		<div class="staff">
			<div class="cf">
				<img class="fl" src="/xuetang/Public/zce_js/nrw7.jpg" alt="" title="">
				<div class="js_content fl">
					<h4>华成英</h4>
					<p>清华大学 自动化系 教授</p>
				</div>
			</div>
			<p class="txt">电子技术的应用“无所不在”。不管哪个领域、哪个行业，为实现现代化、自动化、信息化，就必须配以电子系统。“电子技术基础”课程教授实现电子系统必备的基础知识。 </p>
			<p class="title"><span>模拟电子技术基础(应用部分)</span></p>
		</div>
	</a>
</li>
			</ul>
		</div>
	</div>
	<p><a href="#" title="">显示全部课程（454）…</a></p>
</div>

<section class="wrap start_learning">
	<h2><img src="/xuetang/Public/zce_js/footer_hc.295ea30aaefb.png" alt="喝一杯茶，学个新知识点，很简单！" title="喝一杯茶，学个新知识点，很简单！"></h2>
	<a href="#" title="">开始学习<i></i></a>
</section>

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
                        <p class="first">关注我们</p>
                        <p class="second gz">ABOUT US</p>
                    </a>
                </div>
                <p class="about" id="share">
                    <a class="wb" href="#" title="" target="_blank">微博</a>
                    <a class="wx" href="javascript:" title="">微信</a>
                    <a class="email" href="#" title="" target="_blank">邮件</a>
                </p>
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
        </ul>
    </div>
    <div class="copyright">
        <div class="text fl">
             <p>BieJingBW  2014-2015 北京BW1402phpA</p>
            <p><a href="http://www.miibeian.gov.cn/" title="京ICP备14019655号" target="_blank">京ICP备80080556号</a></p>
        </div>
        <div class="edx_logo cf fr">
            <a href="http://openedx.org/" target="_blank"><img src="/xuetang/Public/zce_js/edx_logo.262fca70a49b.png"></a>
        </div>
    </div>
</footer>

 <script charset="utf-8" src="/xuetang/Public/zce_js/v.js"></script><script src="/xuetang/Public/zce_js/hm.js" async="" defer=""></script><script id="requirejs" src="/xuetang/Public/zce_js/require.2d213b58c463.js"></script>
    <script src="/xuetang/Public/zce_js/appCommon.1c7c3f1b8788.js"></script>
    <script src="/xuetang/Public/zce_js/xuetanganalyse.18e1a992eb60.js"></script>
	 <script src="/xuetang/Public/zce_js/homepage.2ea69a90ea53.js"></script> 
<div class="g_modal register_modal g_modal_scroll" id="g_modal" style="z-index: 151; height: 641px;"><div class="g_modal_cell" style="min-height: 750px;"><div class="g_modal_wrap" style="min-height: 750px;"><div id="register_modal" class="ng-scope">
	<div ng-controller="register" class="ng-scope">
		<div class="g_modal_header">
			<!-- ngIf: isDaytime --><img ng-if="isDaytime" src="/xuetang/Public/zce_js/register_header_daytime.gif" class="ng-scope"><!-- end ngIf: isDaytime -->
			<!-- ngIf: !isDaytime -->
		</div>
		<div class="g_modal_body">
			<!-- ngIf: publicData.uname -->
			<div class="ui form select_form_type">
				<center><div class="grouped inline fields">
					<div class="field">
						<div >
							<label>邮箱/手机注册</label>
						</div>
					</div>
				</div></center>
			</div>

	<form action="" method=""   >
			
					<div class="ui form large">

									<div class="field">
										<input style="text-align: left" name="username" id="username" type="text" onblur="text_name()"placeholder="起个霸气的用户名，最多16个字符" >
										<span id="spname" class="error ng-scope"></span>											
									</div>

			

									<div class="field">
										<input style="text-align: left" name="pwd" id="pwd"  type="password" placeholder="填写密码" onclick="mima1()" onblur="mima()">
												<span class="error ng-scope" id="spmima"></span>
									</div>
									<div class="field">
										<input style="text-align: left" name="test_pwd" id="test_pwd" type="password" placeholder="确认密码" onclick="test_mima1()" onblur="test_mima()">
												<span class="error ng-scope" id="sptestmima"></span>
									</div>
					</div>
					<?php if(isset($uid)){ ?><input type="hidden" name="uid" value="<?php echo ($uid); ?>"><?php } ?>
					<div class="btn">
					   <input type="button" value="注册" onclick="sub()">
					</div>

			</form>
			
		</div>




		<div class="g_modal_footer">
			<p class="pt50">使用第三方账号 或 使用学堂账号<a href="/xuetang/index.php/Home/Index/login" ng-click="goToLogin()"> 登录 ›</a></p>
			<div><a href="" title="新浪微博" ng-click="thirdparty(&#39;/register/weibo/&#39;)">r</a></div>
			<div><a href="" title="QQ" ng-click="thirdparty(&#39;/register/qq/&#39;)">p</a></div>
			<div><a href="" title="微信" ng-click="thirdparty(&#39;/register/weixin/&#39;)">B</a></div>
		</div>
	</div>
</div>
<a href="javascript:void(0)"><div class="g_modal_closeBtn" title="关闭" onclick="history.go(-1)"></div></a>
</div></div></div></body></html>
<script type="text/javascript" src="./css/jq.js"></script>
<script type="text/javascript">
function text_name(){
//return false;
var username=$("#username").val();//alert(username);
if(username==""){

$("#spname").html("<font >×用户名不能为空</font>");
return false;
}

    /*注册返回值
	0.ok,
	1.账号已存在,
	*/
 $.ajax({
	 //url:"<?php echo U('Index/login_pro');?>",   
	     url:"/xuetang/index.php/Home/Index/zcedo1",             
         data:{"username":username},
		 type:"post",
		 success:function(e){
			// alert(e);return false;
          if(e=="1"){
		  $("#spname").html("<font >对不起!该账号已存在</font>");
		  //flag=0;
          return false;
		  }
          if(e=="0"){
		  $("#spname").html("<font color='green'>√可以使用该账号</font>");
           return true;
		  }
                }
})

}

//验证码
function yzm(){
var validate=$("#validate").val();
if(validate==""){
	$("#spyzm").html("<font>不能为空</font>");
	return false;
	}else{
	$.ajax({            
		 url:"/xuetang/index.php/Home/Index/yzm",             
		 data:{"validate":validate},
		 type:"post",
		 success:function(e){ 
		  if(e=="0"){
		  	$("#spyzm").html("<font>验证码错误!!<font>");	
		  	return false;				
		  }
		  if(e=="1"){
		  $("#spyzm").html("<font  color='green'>验证码正确</font>");
			return true;		
		  }
		 }
			})
	    }

}
	function mima1(){
	$("#spmima").html("<font  color='green'>亲!!最少要六位字母数字且字母开头哦!</font>");
	return true;
	}


	function mima(){
	var pwd=$("#pwd").val();//alert(username);
	if(pwd==""){
	$("#spmima").html("<font>不能为空</font>");
	return false;
	}
        $.ajax({
			//url:"<?php echo U('Index/login_pro');?>",   
			url:"/xuetang/index.php/Home/Index/pwd",             
			data:{"pwd":pwd},
		    type:"post",
			success:function(e){
				//alert(e);return false;
				 if(e=="0"){
				 $("#spmima").html("<font>不能为空</font>");
				  return false;
				 }
				 if(e=="2"){
				 $("#spmima").html("<font>不符合规则</font>");
				 return false;
				 }
				 if(e=="1"){
				 $("#spmima").html("<font color='green'>ok!密码成功</font>");
				  return true;
				 }
			}
		
		})	
	}
   function test_mima(){
    var test_pwd=$("#test_pwd").val();//alert(username);
    var pwd=$("#pwd").val();
    if(pwd==""){
	$("#spmima").html("<font>不能为空</font>");
	//flag=0;
	return false;
	}
	if(test_pwd==""){
	$("#sptestmima").html("<font>不能为空</font>");
	//flag=0;
	return false;
	}
	if(test_pwd==pwd){
	$("#sptestmima").html("<font color='green'>ok!密码成功</font>");
	//flag=1;
	 return true;
	}
	else{
	$("#sptestmima").html("<font>密码不一致哦亲!!~~!!</font>");
	//flag=0;
	return false;
	}
   }
   /*总提交*/
   		  /**
		   6.两次密码不一致:
		   7.用户名已存在:
		   8.用户名可以使用: ::前台无需判断
		   9.账号不符合邮箱规则.die;掉:
		   10.账号唯一       ::前台无需判断
		   11.账号不唯一;不能注册
		   12.邀请码错误;
		   13.密码符合规则   ::前台无需判断
		   14.密码不符合规则 
           15.账号注册成功   ::前台直接跳转
		   16.账号注册失败 ;0
		  */
function sub(){
    var username=$("#username").val();
	var phone_number=$("#phone_number").val();
	var validate=$("#validate").val();
	var pwd=$("#pwd").val();
    var test_pwd=$("#test_pwd").val();
     if(username!="" && validate!=""&& pwd!=""&& test_pwd!="" ){
		  if(pwd==test_pwd){
		  $.ajax({
					//url:"<?php echo U('Index/login_pro');?>",   
		url:"/xuetang/index.php/Home/Index/zcdo",             
		data:{"username":username,"pwd":pwd,"test_pwd":test_pwd},
		type:"post",
		success:function(e){
			//alert(e);return false;
			   if(e=="6"){
				   //alert();return false;
					$("#sptestmima").html("<font>密码不一致哦亲!!~~!!</font>"); return false;
				 }
					if(e=="7"){
						//alert(e);return false;
				 $("#spname").html("<font >对不起!该账号已存在</font>");return false;
				 }
				
					if(e=="14"){
						// alert(e);return false;
				$("#spmima").html("<font>不符合规则</font>");return false;
				 }
					if(e=="16"){
						// alert(e);return false;
				 alert("对不起注册失败,请您重新注册");
                 location.href='/xuetang/index.php/Home/Index/register';
				 }
				   
		            if(e=="15"){
						//alert(e);return false;
		           alert("注册成功(●—●)");
             location.href='/xuetang/index.php/Home/Index/index';
		         }

		}
		  
               })
		  }else{
		    alert("两次密码不一致!!");
			return false;
		  }
	 }else{
	 
	 alert("检查您的资料,不能为空哦,");
	 return false;
	 }
}

// 验证码生成  
var captcha_img = $('#captcha-container').find('img')  
var verifyimg = captcha_img.attr("src");  
captcha_img.attr('title', '点击刷新');  
captcha_img.click(function(){  
    if( verifyimg.indexOf('?')>0){  
        $(this).attr("src", verifyimg+'&random='+Math.random());  
    }else{  
        $(this).attr("src", verifyimg.replace(/\?.*$/,'')+'?'+Math.random());  
    }  
}); 
</script>