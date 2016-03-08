<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7 lte9 lte8 lte7" lang="zh-cn"><![endif]-->
<!--[if IE 8]><html class="ie ie8 lte9 lte8" lang="zh-cn"><![endif]-->
<!--[if IE 9]><html class="ie ie9 lte9" lang="zh-cn"><![endif]-->
<!--[if gt IE 9]><!--><html lang="zh-cn"><!--<![endif]-->

<head dir="ltr">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">











    

  
      <title>
       学堂在线--进度
      </title>
  

  <script type="text/javascript">
    /* immediately break out of an iframe if coming from the marketing website */
    (function(window) {
      if (window.location !== window.top.location) {
        window.top.location = window.location;
      }
    })(this);
  </script>

  <script type="text/javascript" src="/jsi18n/"></script>
  <script type="text/javascript" src="/xuetang/Public/js/jquery.min.js"></script>
  <script type="text/javascript" src="/xuetang/Public/js/user_track_norequire.js"></script>
  <link rel="icon" type="image/x-icon" href="/xuetang/Public/images/favicon.ico" />

  
  

    <link href="/xuetang/Public/css/lms-style-vendor.css" rel="stylesheet" type="text/css" />



  
  

    <link href="/xuetang/Public/css/lms-style-app.css" rel="stylesheet" type="text/css" />



  
  

    <link href="/xuetang/Public/css/lms-style-app-extend1.css" rel="stylesheet" type="text/css" />



  
  

    <link href="/xuetang/Public/css/lms-style-app-extend2.css" rel="stylesheet" type="text/css" />




    
    <script type="text/javascript" src="/xuetang/Public/js/lms-main_vendor.js" charset="utf-8"></script>



  <script>
    window.baseUrl = "/xuetang/Public/";
    (function (require) {
        var urlArgs = "v=555ca34";
      require.config({
          baseUrl: baseUrl,
          urlArgs: urlArgs
      });
    }).call(this, require || RequireJS.require);
  </script>
  <script type="text/javascript" src="/xuetang/Public/js/require-config-lms.js"></script>

  

  

    <link href="/xuetang/Public/css/lms-style-course-vendor.css" rel="stylesheet" type="text/css" />




  

    <link href="/xuetang/Public/css/lms-style-course.css" rel="stylesheet" type="text/css" />






  

    


<link rel="stylesheet" href="/xuetang/Public/css/tu-identity.css" />
<link href="http://s.xuetangx.com/resource/css/googlefonts.css" rel='stylesheet' type='text/css'>
<div id="ieversion"></div>
<div id="ie-banner"></div>

  <div id="tu-header">
    <div class="tu-container">
    </div>
  </div>



  <!--[if lt IE 9]>
    <script src="/xuetang/Public/js/html5shiv.0ce8f355891c.js"></script>
  <![endif]-->

  
  <!-- dummy segment.io -->
<script type="text/javascript">
  var analytics = {
    track: function() { return; },
    trackLink: function() { return; },
    pageview: function() { return; },
    page: function() { return; }
  };
</script>
<!-- end dummy segment.io -->


  <meta name="path_prefix" content="">

  <!-- dummy segment.io -->
<script type="text/javascript">
  var analytics = {
    track: function() { return; },
    trackLink: function() { return; },
    pageview: function() { return; },
    page: function() { return; }
  };
</script>
<!-- end dummy segment.io -->




</head>

<body class="ltr  lang_zh-cn">
  <div class="window-wrap" dir="ltr" style="overflow:hidden;position:relative;">
    <a class="nav-skip" href="#course-info-progress">跳过本内容页</a>

    
<!--[if IE]>
<div class="sr message-accessibility message" id="mathjax-accessibility-message" aria-hidden="true">
	<p class="copy">这个页面采用MathJax技术来显示数学公式。为了使数学式可用，我们建议使用MathPlayer插件。请访问<a href="//www.dessci.com/en/products/mathplayer/download.htm">MathPlayer下载页面</a> 来为你的浏览器下载插件。</p>
</div>
<div class="sr message-accessibility message" id="mathplayer-browser-message" aria-hidden="true">
	<p class="copy">
	 你的浏览器不支持MathPlayer插件。为了使用MathPlayer，请使用IE6到9兼容浏览器。
	 </p>
</div>
<![endif]-->

    












  <header class="global slim" aria-label="全局导航">
  <nav>

  <h1 class="logo">
    <a href="/">
      
  <img src="/xuetang/Public/images/tsinghua-T-logo2.png" height="60" alt="Home Page" id="tsinghua-logo"/>
  <style>
  .home>header{
    background-image: url("/xuetang/Public/images/tsinghua-pano.jpg");
  }
  </style>

    </a>
  </h1>

        <h2>
            <span class="provider">NCTU:</span>
              
           <?php echo ($cname); ?>

        </h2>

    <ol class="left nav-global authenticated">
      
  <li class="nav-global-01">
    <a href="/about">关于我们</a>
  </li>
  <li class="nav-global-02">
    <a href="/courses">查找课程</a>
  </li>

    </ol>
    <ol class="user">
      <li class="primary">
        <a href="/xuetang/index.php/Home/dashboard/index" class="user-link">
          <span class="avatar"></span>
          <span class="sr">控制面板： </span><?php echo (session('username')); ?>
        </a>
      </li>
      <li class="primary">
        <a href="#" class="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr">更多选择下拉列表</span> &#9662;</a>
        <ul class="dropdown-menu" aria-label="More Options" role="menu">
          
          <li><a href="/xuetang/index.php/Home/Index/loginout" role="menuitem">登出</a></li>
        </ul>
      </li>
    </ol>
  </nav>
</header>
<!--[if lte IE 8]>
<div class="ie-banner" aria-hidden="true"><strong>警告:</strong> 你的浏览器不能完全支持全部功能. 我们强烈建议您使用 <a href="https://www.google.com/intl/en/chrome/browser/" target="_blank">Chrome</a> 或 <a href="http://www.mozilla.org/en-US/firefox/new/" target="_blank">Firefox</a>.</div>
<![endif]-->
















    <div class="content-wrapper" id="content">
      


































<nav class="progress wrapper-course-material">
  <div class="course-material">
    <ol class="course-tabs">
        
          <li>
             <a href="/xuetang/index.php/Home/Courseware/ware" class="">
                 课件
             </a>
          </li>
        
          <li>
             <a href="/xuetang/index.php/Home/Courseinfo/info" class="">
                 课程信息
             </a>
          </li>
        
          <li>
             <a href="/xuetang/index.php/Home/Discuss/discuss" class="">
                 讨论区
             </a>
          </li>
        
          <li>
             <a href="/xuetang/index.php/Home/Courserate/rate" class="active">
                 进度
                   <span class="sr">, current location</span>
             </a>
          </li>
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/syllabus">
             教学大纲
             </a>
          </li>
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/ppt">
             PPT
             </a>
          </li>
		  <li>
             <a href="/xuetang/index.php/Home/Studyadout/topic">
             试题检测
             </a>
          </li>
      
    </ol>
  </div>
</nav>



<div class="container">
  <div class="profile-wrapper">

    <div class="course-info" id="course-info-progress" aria-label="课程进度">


      <h1>学生 <?php echo (session('username')); ?>的课程进度</h1>



       

      <div class="chapters">
        <?php if(is_array($arr)): foreach($arr as $key=>$row): ?><section>

          <h2><?php echo ($row["ch_name"]); ?></h2>

          <div class="sections">
			<?php foreach($row['know'] as $key=>$val){ ?>
            <div>
              
              <h3><a href="/courses/NCTU/nctucmszb/2015_T1/courseware/93a9b0e77b4b49e7bccdae4a1e15935b/c0d85adae03641368f5c72830223f086/">
                <?php echo $val['know']; ?>
                </a>
              </h3>
			<div class="scores">
                  <h3 class="no-scores"> 
				
				<?php if($val["question"] != null): ?>问题得分:&nbsp;&nbsp;&nbsp;<?php if(is_array($val['question'])): $i = 0; $__LIST__ = $val['question'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$k): $mod = ($i % 2 );++$i; if($k["scores"] != null): if(is_array($k['scores'])): $i = 0; $__LIST__ = $k['scores'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$xly): $mod = ($i % 2 );++$i; echo ($xly["score_one"]); endforeach; endif; else: echo "" ;endif; ?>
				 <?php else: ?>0<?php endif; ?>
				 /<?php echo ($k["score"]); ?>&nbsp;&nbsp;<?php endforeach; endif; else: echo "" ;endif; ?>
				<?php else: ?> 
				本小节没有问题<?php endif; ?>
				  </h3>
              </div>
		
            </div> <!--End section-->
            <?php } ?>
          </div> <!--End sections-->
        </section> <!--End chapter--><?php endforeach; endif; ?>
      </div> <!--End chapters-->

    </div>
  </div>
</div>

      
    </div>

    
      
  
      

    
        <div class="wrapper-footer">
            <style tyep="text/css">
            cite.intro_data {
                display: none;
            }
            
            .follow_name.name_bold {
                margin-top: 2px;
            }
            
            iframe#sina-btn {
                height: 22px;
                float: right;
                width: 222px;
            }
            
            .outside-app p a,
            .outside-app p a:link:hover,
            .outside-app p a:link:focus,
            .outside-app p a:visited:hover,
            .outside-app p a:visited:focus {
                color: #9b3286;
            }
            
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>a:hover,
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads div.info-wrapper section.handouts ol li .video-download-button>div.hitarea:hover+h4,
            div.info-wrapper section.handouts ol li .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>div.hitarea:hover+h4,
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads div.info-wrapper section.handouts ol li .video-download-button>div.hitarea:focus+h4,
            div.info-wrapper section.handouts ol li .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>div.hitarea:focus+h4,
            .xmodule_display.xmodule_VideoModule div.video .wrapper-downloads .video-download-button>a:focus {
                background: #9b3286;
            }
            
            .light-button:focus:not(:disabled),
            div.history-controls input[type="submit"]:focus:not(:disabled),
            a.light-button:focus:not(:disabled),
            .gray-button:focus:not(:disabled),
            input[type="reset"]:focus:not(:disabled),
            input[type="submit"]:focus:not(:disabled),
            input[type="button"]:focus:not(:disabled),
            button:focus:not(:disabled),
            .button:focus:not(:disabled),
            .xmodule_display.xmodule_LTIModule div.lti .wrapper-lti-link .lti-link .link_lti_new_window:focus:not(:disabled) {
                border: none;
                box-shadow: none;
                text-decoration: none;
            }
            
            .light-button:active:not(:disabled),
            div.history-controls input[type="submit"]:active:not(:disabled),
            a.light-button:active:not(:disabled),
            .gray-button:active:not(:disabled),
            input[type="reset"]:active:not(:disabled),
            input[type="submit"]:active:not(:disabled),
            input[type="button"]:active:not(:disabled),
            button:active:not(:disabled),
            .button:active:not(:disabled),
            .xmodule_display.xmodule_LTIModule div.lti .wrapper-lti-link .lti-link .link_lti_new_window:active:not(:disabled) {
                border: 1px solid #cacaca;
                box-shadow: inset 0 0 8px 4px #c3c3c3, inset 0 0 8px 4px #c3c3c3, 0 1px 1px 0 #eee;
            }
            
            header.global .nav-courseware li .cta:hover,
            header.global .nav-courseware div .cta:hover,
            .view-partial-mktgregister .action.action-register:hover,
            .view-partial-mktgregister .action.access-courseware:hover,
            header.global .nav-courseware li .cta:active,
            header.global .nav-courseware div .cta:active,
            .view-partial-mktgregister .action.action-register:active,
            .view-partial-mktgregister .action.access-courseware:active,
            header.global .nav-courseware li .cta:focus,
            header.global .nav-courseware div .cta:focus,
            .view-partial-mktgregister .action.action-register:focus,
            .view-partial-mktgregister .action.access-courseware:focus {
                background: #9b3286;
            }
            
            header.global .nav-courseware li .cta:focus,
            header.global .nav-courseware div .cta:focus,
            .view-partial-mktgregister .action.action-register:focus,
            .view-partial-mktgregister .action.access-courseware:focus {
                box-shadow: 0 0 6px 0 #9b3286;
            }
            
            header.global ol.user ul.dropdown-menu li>a {
                color: #9b3286;
            }
            
            .slick-header-column.ui-state-default {
                height: 20px;
                line-height: 20px;
            }
            
            div,
            ul,
            ol,
            li,
            span,
            a {
                outline: none!important;
            }
            </style>
            <footer>
                <div class="colophon" style="width:100%;">
                    <nav class="nav-colophon">
                        <ol>
                            <li><a href="/about#about">关于我们</a></li>
                            <li><a href="/about#question">常见问题</a></li>
                            <li><a href="/about#contact">联系我们</a></li>
                        </ol>
                        <div id="weibo-follow-btn">
                            <iframe id="sina-btn" frameborder="0" scrolling="no" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&style=3&uid=3774161214&width=100%&height=24&language=zh_cn"></iframe>
                        </div>
                    </nav>
                </div>
            </footer>
            <script type="text/javascript" charset="utf-8">
            if ("http:" == document.location.protocol) {
                document.getElementById('weibo-follow-btn').innerHTML = '<iframe id="sina-btn" frameborder="0" scrolling="no" src="http://widget.weibo.com/relationship/followbutton.php?btn=red&style=3&uid=5149707292&width=100%&height=24&language=zh_cn"></iframe>';
            }
            </script>
        </div>
        <div id="tu-footer">
            <div class="tu-container">
                <div class="pull-left">
                    <img src="/xuetang/Public/images/logo-tsinghua-studio-white-footer.png" height="60" alt="Home Page" />
                </div>
                <div class="pull-right">
                    <span>地址：北京市海淀区清华科技园 科技大厦A座11层</span>
                    <br/>
                    <span>版权所有：学堂在线</span>
                </div>
            </div>
        </div>
    

  </div>

    
    <script type="text/javascript" src="/xuetang/Public/js/lms-application.js" charset="utf-8"></script>


    
    <script type="text/javascript" src="/xuetang/Public/js/lms-modules.js" charset="utf-8"></script>



  
<script type="text/javascript" src="/xuetang/Public/js/jquery.flot.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.flot.stack.js"></script>
<script type="text/javascript" src="/xuetang/Public/js/jquery.flot.symbol.js"></script>
<script>
  


$(function () {
  function showTooltip(x, y, contents) {
    $('<div id="tooltip">' + contents + '</div>').css( {
      position: 'absolute',
      display: 'none',
      top: y + 5,
      left: x + 15,
      border: '1px solid #000',
      padding: '4px 6px',
      color: '#fff',
      'background-color': '#333',
      opacity: 0.90
    }).appendTo("body").fadeIn(200);
  }

  /* -------------------------------- Grade detail bars -------------------------------- */
    
  
  
  var series = [{"color": "#666666", "data": [[17.25, 0]], "label": "Final Exam"}, {"color": "#600101", "data": [[15.75, 0.0]], "label": "Midterm Exam"}, {"color": "#b72121", "data": [[1, 0.0], [2, 0.0], [3, 0.0], [4, 0.0], [5, 0.0], [6, 0.0], [7, 0.0], [8, 0.0], [9, 0.0], [10, 0.3333333333333333], [11, 0.0], [12, 0.0], [13, 0.0], [14.25, 0.0303030303030303]], "label": "Homework"}, {"color": "#b72121", "data": [[18.75, 0.006060606060606061]], "label": "Homework-grade_breakdown"}];
  var ticks = [[1, "HW 01"], [2, "HW 02"], [3, "HW 03"], [4, "HW 04"], [5, "HW 05"], [6, "HW 06"], [7, "HW 07"], [8, "HW 08"], [9, "HW 09"], [10, "HW 10"], [11, "HW 11"], [12, "HW 12"], [13, "HW 13"], [14.25, "HW Avg"], [15.75, "Midterm"], [17.25, "Final"], [18.75, "Total"]];
  var bottomTicks = [];
  var detail_tooltips = {"Homework-grade_breakdown": ["Homework = 0.61% of a possible 20.00%"], "Final Exam": ["Final Exam = 0%"], "Midterm Exam": ["Midterm Exam = 0%"], "Homework": ["Homework 1 - ***ch01-u59cbu8ba1u7bc7-u4f5cu4e1a - 0% (0/5)", "Homework 2 - ***ch02-u4f5cu6218u7bc7-u4f5cu4e1a - 0% (0/4)", "Homework 3 - ***ch03-u8c0bu653bu7bc7-u4f5cu4e1a - 0% (0/5)", "Homework 4 - **ch04-u519bu5f62u7bc7-u4f5cu4e1a - 0% (0/5)", "Homework 5 - ***ch05-u5175u52bfu7bc7-u4f5cu4e1a - 0% (0/3)", "Homework 6 - ***ch06-u865au5b9eu7bc7-u4f5cu4e1a - 0% (0/6)", "Homework 7 - ***ch07-u519bu4e89u7bc7-u4f5cu4e1a - 0% (0/3)", "Homework 8 - ***ch08-u4e5du53d8u7bc7-u4f5cu4e1a - 0% (0/4)", "Homework 9 - ***ch09-u4e5du5730u7bc7-u4f5cu4e1a - 0% (0/4)", "Homework 10 - ***ch10-u5730u5f62u7bc7-u4f5cu4e1a - 33% (1/3)", "Homework 11 - ***ch11-u884cu519bu7bc7-u4f5cu4e1a - 0% (0/3)", "Homework 12 - ***ch12-u706bu653bu7bc7-u4f5cu4e1a - 0% (0/4)", "Homework 13 - ***ch13-u7528u95f4u7bc7-u4f5cu4e1a - 0% (0/3)", "Homework Average = 3%"], "Dropped Scores": ["u6210u7ee9u6700u4f4eu76842u6b21Homeworku5f97u5206u5c06u4e0du8ba1u5165u6700u7ec8u6210u7ee9u3002", "u6210u7ee9u6700u4f4eu76842u6b21Homeworku5f97u5206u5c06u4e0du8ba1u5165u6700u7ec8u6210u7ee9u3002"]};
  var droppedScores = [[12, 0.05], [13, 0.05]];
  var grade_cutoff_ticks = [[1, "100%"], [0, "0%"], [0.8, "A 80%"], [0.7, "B 70%"], [0.6, "C 60%"]]
  
  //Always be sure that one series has the xaxis set to 2, or the second xaxis labels won't show up
  series.push( {label: 'Dropped Scores', data: droppedScores, points: {symbol: "cross", show: true, radius: 3}, bars: {show: false}, color: "#333"} );
  
  // Allow for arbitrary grade markers e.g. ['A', 'B', 'C'], ['Pass'], etc.
  var ascending_grades = grade_cutoff_ticks.map(function (el) { return el[0]; }); // Percentage point (in decimal) of each grade cutoff
  ascending_grades.sort();

  var colors = ['#f3f3f3', '#e9e9e9', '#ddd'];
  var markings = [];
  for(var i=1; i<ascending_grades.length-1; i++) // Skip the i=0 marking, which starts from 0%
    markings.push({yaxis: {from: ascending_grades[i], to: ascending_grades[i+1]}, color: colors[(i-1) % colors.length]});

  var options = {
    series: {stack: true,
              lines: {show: false, steps: false },
              bars: {show: true, barWidth: 0.8, align: 'center', lineWidth: 0, fill: .8 },},
    xaxis: {tickLength: 0, min: 0.0, max: 19.75, ticks: ticks, labelAngle: 90},
    yaxis: {ticks: grade_cutoff_ticks, min: 0.0, max: 1.0, labelWidth: 100},
    grid: { hoverable: true, clickable: true, borderWidth: 1, markings: markings },
    legend: {show: false},
  };
  
  var $grade_detail_graph = $("#grade-detail-graph");
  if ($grade_detail_graph.length > 0) {
    var plot = $.plot($grade_detail_graph, series, options);
    
      var o = plot.pointOffset({x: 18.75 , y: 0.01});
      $grade_detail_graph.append('<div style="position:absolute;left:' + (o.left - 12) + 'px;top:' + (o.top - 20) + 'px">1%</div>');
  }
      
  var previousPoint = null;
  $grade_detail_graph.bind("plothover", function (event, pos, item) {
    $("#x").text(pos.x.toFixed(2));
    $("#y").text(pos.y.toFixed(2));
    if (item) {
      if (previousPoint != (item.dataIndex, item.seriesIndex)) {
        previousPoint = (item.dataIndex, item.seriesIndex);
            
        $("#tooltip").remove();
            
        if (item.series.label in detail_tooltips) {
          var series_tooltips = detail_tooltips[item.series.label];
          if (item.dataIndex < series_tooltips.length) {
            var x = item.datapoint[0].toFixed(2), y = item.datapoint[1].toFixed(2);
                
            showTooltip(item.pageX, item.pageY, series_tooltips[item.dataIndex]);
          }
        }

      }
    } else {
      $("#tooltip").remove();
      previousPoint = null;            
    }
  });
});

</script>


  <div style="display:none;"><script type="text/javascript" src="/xuetang/Public/js/analyse.js"></script></div>
</body>
</html>