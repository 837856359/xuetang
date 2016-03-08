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

    <link rel="icon" type="image/x-icon" href="http://www.xuetangx.com/static/images/favicon.e0c76d09021e.ico">
    <link rel="stylesheet" type="text/css" href="/xuetang/Public/css/reset.css">
    <link rel="stylesheet" type="text/css" href="/xuetang/Public/css/media.css">
    <link rel="stylesheet" type="text/css" href="/xuetang/Public/css/bbs.css">

<body>
<div style="" class="forum_edit">
<div style="" class="forum_sendpost">
    <div style="" class="wrap cf">
        <div style="" class="left fl">
            <div class="send_post_header">
                <h1>
                    <!-- <a href="<?php echo U('community/activity');?>" class="sendposttitle">讨论区</a> -->
                    <a href="/xuetang/index.php/Home/Community/activity">讨论区</a>
                    <span></span>发布新帖子
                </h1>
            </div>
            <div style="" class="send_post_body">
                <form style="" id="completedpost" action="/xuetang/index.php/Home/Community/create" method="post" onsubmit="return fun()">
                    <h2>帖子分类</h2>
                    <div class="select_post_class">
                     <?php if($_SESSION['uid']==1){ ?>
                        <select name="post_class_id">
                            <option value="1">活动</option>
                            <option value="2">学习分享</option>
                            <option value="3">资讯</option>
                            <option value="4" selected>灌水</option>
                        </select>
                     <?php }else{ ?>
                        <select name="post_class_id">
                            <option value="2">学习分享</option>
                            <option value="4" selected>灌水</option>
                        </select>
                    <?php } ?>
                    </div>
                    <h2>标题</h2>
                    <div>
                    <input class="title_blank" id="titleBlank" name="post_title" placeholder="字数25以内" type="text" style="outline:solid #C0C0C0;outline-width:1px" onblur="fun1()"><span id="biao" ></span>
                    </div>
                    <!-- ck编辑器 -->
                    <h2>内容</h2>
                    <div onload="return onload()" >
                    <textarea name="post_content" id="post_content" onblur="fun2()"></textarea>
                    </div>
                    <span id="nei" ></span>
                    <div class="gotopost">
                        <input class="btn_go_post" id="btnGoPost" value="发布" type="submit">
                    </div>
                </form>
            </div>
        </div>
    <div class="right fl">
    <div class="bulletin">
        <div class="bulletin_board_tag">
            <h2>学堂公告</h2>
        </div>
        <div class="bulletin_board">
            <div class="hello">
            <span class="purple_stick"></span>
            <h3>大家好 \(0^o^0)/ !!!</h3>
            </div>


            <div class="bbc_wrap">
                <p class="bulletin_board_content">欢迎来到学堂在线广场！<br>交学友，看资讯，晒笔记...<br>
在广场：喧闹不可怕，沉默才可怕<br>在广场：沉淀优质内容，分享酸甜苦辣<br>现在开始吧，You are what you MOOC！
<br>
</p>
</div>
<div class="bulletin_board_time fr">
<p>2015-03-31</p>
</div>
</div>
</div>
    <div class="recommend" id="asideFixedtwo">
        <h1>推荐活动</h1>
        <div class="forum_recommend_position">
            <a href="#"><img src="/xuetang/Public/img/yunyingshixishengren.jpg"></a>
        </div>
        <div class="forum_recommend_position">
            <a href="#"><img src="/xuetang/Public/img/supermanlogoefef.jpg"></a>
        </div>
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
<script type="text/javascript" src="/xuetang/Public/js/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jq.js"></script>
<!-- ck -->
<script type="text/javascript"> 
    // 启用 CKEitor 的上传功能，使用了 CKFinder 插件
    CKEDITOR.replace( 'post_content', {
        filebrowserBrowseUrl        : '/xuetang/Public/js/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl   : '/xuetang/Public/js/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl   : '/xuetang/Public/js/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl   : '/xuetang/Public/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl   : '/xuetang/Public/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl   : '/xuetang/Public/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
    });
</script>
<script type="text/javascript">
//alert($);
    function fun1(){
        var titleBlank=$('#titleBlank').val();
        if(titleBlank==''){
            $('#biao').html('<font color=red>非空</font>');
            return false;
        }else if(titleBlank.length>25){
            $('#biao').html('<font color=red>字数不能超过25个</font>');
            return false;
        }else{
            $('#biao').html('<font color=green>√</font>');
            return true;
        }
    }
    function fun2(){
        var contentBlank=CKEDITOR.instances.post_content.getData();
        //alert(contentBlank);
        //var contentBlank=$('#contentBlank').val();
        if(contentBlank==''){
            $('#nei').html('<font color=red>非空</font>');
            return false;
        }else{
            $('#nei').html('<font color=green>√</font>');
            return fun1();
        }
    }
    function fun(){
        return fun1()&&fun2();
    }
</script>