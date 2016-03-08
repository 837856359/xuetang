<?php if (!defined('THINK_PATH')) exit();?><header id="header_bootstrap" class="ng-scope">
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

<link rel="icon" type="image/x-icon" href="/xuetang/Public/static/images/favicon.e0c76d09021e.ico">

	<link rel="stylesheet" type="text/css" href="/xuetang/Public/css/reset.css">
	
    <link rel="stylesheet" type="text/css" href="/xuetang/Public/css/index.css">
    <link rel="stylesheet" type="text/css" href="/xuetang/Public/css/bbs.css">

<body>
<div class="forum_detail">
<div class="forum_poster_position">
    <section class="po wrap cf">
        <div class="container-fulid">
            <div class="row">
                <div class="left col-md-8 col-sm-10">
                    <div class="poster_position1">
                        <!--<a href="<?php echo U('Community/post_details',array('id'=>$vo['post_id']));?>" target="_blank">-->
						<!-- <a href="/xuetang/index.php/Home/Community/post_details/id/<?php echo ($vo["post_id"]); ?>"> -->
                        <a href="#">
                            <img src="/xuetang/Public/img/lexiangmuke.jpg" alt="" title="写500字换Kindle">

                            <div class="poster_position1_cover">
                                <div class="poster_position1_title">
                                    <span class="ppt1 ppt">写500字换Kindle</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="middle col-md-9 col-sm-14">
                    
                        <div class="poster_position2">
                            <!-- <a href="<?php echo U('Community/post_details',array('id'=>$vo['post_id']));?>" target="_blank"> -->
                            <a href="#">
                                <img src="/xuetang/Public/img/zongzi365-172.jpg" alt="" title="粽子节 ‖ 内有福利">

                                <div class="poster_position2_cover">
                                    <div class="poster_position2_title">
                                        <span class="ppt2 ppt">粽子节 ‖ 内有福利</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    
                        <div class="poster_position3">
                            <!-- <a href="<?php echo U('Community/post_details',array('id'=>$vo['post_id']));?>" target="_blank"> -->
                            <a href="#">
                                <img src="/xuetang/Public/img/bijizhanlanguan3.jpg" alt="" title="学堂笔记展览馆">

                                <div class="poster_position3_cover">
                                    <div class="poster_position3_title">
                                        <span class="ppt3 ppt">学堂笔记展览馆</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                </div>
                <div class="right col-md-7 col-sm-24">
                    <div class="bulletin_board_tag">
                        <h2>学堂公告</h2>
                    </div>
                    <div class="bulletin_board">
                        <div class="hello">
                            <span class="purple_stick"></span>
                            <h3>大家好 \(0^o^0)/ !!!</h3>
                        </div>

                        <div class="bbc_wrap">
                            <p class="bulletin_board_content">欢迎来到学堂在线广场！
<br>
交学友，看资讯，晒笔记...
<br>
在广场：喧闹不可怕，沉默才可怕
<br>
在广场：沉淀优质内容，分享酸甜苦辣
<br>
现在开始吧，You are what you MOOC！
<br>
</p>
                        </div>

                        <div class="bulletin_board_time fr">
                            <p>2015-03-31</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="forum_about">
    <div class="wrap cf">
        <div class="left fl">
            <div class="post_header">
                <h1>讨论区</h1>
               <!--  <a href="<?php echo U('Community/activity');?>" class="view_whole" target="_blank">查看全部</a> -->
               <a href="/xuetang/index.php/Home/Community/activity/">查看全部</a>
                <!--判断登录-->
                
                <!-- <a href="<?php echo U('Community/post');?>" class="post_btn fr"> -->
                <a href="/xuetang/index.php/Home/Community/post" class="post_btn fr">
                    <em>我要发帖</em>
                </a>
               
            </div>
            <div class="post_body">

                    
                  <?php if(is_array($arr)): foreach($arr as $key=>$vo): ?><div class="pb_position b classifynews">
                        <div class="pb_position_header cf">
                            <div class="pb_position_header_left fl">

					<?php if(($vo[post_class_id] == 2)): ?><em><?php echo ($vo["post_class_name"]); ?></em>
							<?php elseif($vo[post_class_id] == 1): ?> 
							<em class="popular_tag">
						<?php echo ($vo["post_class_name"]); ?></em>
						<?php else: ?>
						<em class="popular_tag">
						<?php echo ($vo["post_class_name"]); ?></em><?php endif; ?>
						<!-- <?php echo U('Community/post_details/$vo[post_id]');?> -->
                                <!-- <a target="_self" class="ptitle" href="<?php echo U('Community/post_details',array('id'=>$vo['post_id']));?>"> -->
                                <a target="_self" class="ptitle" href="/xuetang/index.php/Home/Community/post_details/id/<?php echo ($vo["post_id"]); ?>">
                                    <p><?php echo ($vo["post_title"]); ?></p>
                                </a>
                            </div>
                            <p class="last_send_time fr">
							        <?php echo date('Y-m-d H:i:s',$vo[post_addtime]); ?>
							</p>
                        </div>

                        <!-- <div class="pcontentwrap">
                            <p class="pcontent"><?php echo ($vo["post_content"]); ?></p>
                        </div> -->

                        <div class="pref">
                           <!--  <div class="ptag">
                                        <p>精华</p>
                                        <p>推荐</p>
                            </div> -->
                            <div class="pinfo">
                                <p class="popular">   </p>
                            </div>
                        </div>
                    </div><?php endforeach; endif; ?>

            </div>
        </div>
        <div class="right fl" id="asideFixed">
            <h1>推荐活动</h1>
                <div class="forum_recommend_position">
                    <!-- <a target="_blank" href="<?php echo U('Community/post_details',array('id'=>$vo['post_id']));?>"> -->
                    <a href="#">
                        <img src="/xuetang/Public/img/yunyingshixishengren.jpg">
                    </a>
                </div>
                <div class="forum_recommend_position">
                    <!-- <a target="_blank" href="<?php echo U('Community/post_details',array('id'=>$vo['post_id']));?>"> -->
                    <a href="#">
                        <img src="/xuetang/Public/img/supermanlogoefef.jpg">
                    </a>
                </div>
        </div>
    </div>
</div>
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