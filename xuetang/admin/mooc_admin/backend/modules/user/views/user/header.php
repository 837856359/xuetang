<!DOCTYPE html>
<script src="/xuetang/static/js/jquery-1.7.2.min.js"></script>
<html lang="en"><head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">

		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="css/index_files/pager.css">

<title>八维学堂在线管理系统</title>

		<meta name="keywords" content="八维学堂在线管理系统">

		<meta name="description" content="八维学堂在线管理系统">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- basic styles -->

		<link href="/xuetang/admin/mooc_admin/backend/web/css/index_files/bootstrap.css" rel="stylesheet">



		<link rel="stylesheet" href="/xuetang/admin/mooc_admin/backend/web/css/index_files/font-awesome.css">

                

		<!--[if IE 7]>

		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />

		<![endif]-->



		<!-- page specific plugin styles -->



		<!-- fonts -->



		<!--<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />-->



		<!-- ace styles -->



		<link rel="stylesheet" href="css/index_files/ace.css"> 

		<link rel="stylesheet" href="css/index_files/ace-rtl.css">

		<link rel="stylesheet" href="css/index_files/ace-skins.css">

			<!-- http://www.six.com/xuetang/admin/mooc_admin/backend/web/ -->

		<!--[if lte IE 8]>

		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />

		<![endif]-->



		<!-- inline styles related to this page -->



		<!-- ace settings handler -->


		<script src="css/index_files/ace-extra.js"></script>



		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->



		<!--[if lt IE 9]>

		<script src="assets/js/html5shiv.js"></script>

		<script src="assets/js/respond.min.js"></script>

		<![endif]-->

  













	<script src="../../web/css/index_files/ruyiso.js" charset="utf-8" id="ruyisomain" type="text/javascript"></script><script src="css/index_files/b5m.js" charset="utf-8" id="b5mmain" type="text/javascript"></script><style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style><link type="text/css" href="css/index_files/rys-elfin.css" rel="stylesheet"></head>

	<body>

		<div class="navbar navbar-default" id="navbar">

			<script type="text/javascript">

				try{ace.settings.check('navbar' , 'fixed')}catch(e){}

			</script>



			<div class="navbar-container" id="navbar-container">

				<div class="navbar-header pull-left">

					<a href="#" class="navbar-brand">

						<small style="font-family:黑体;">

							<img src="css/index_files/log111.gif" alt="" height="22" border="0" width="22">

						        八维学堂在线管理系统

						</small>

					</a><!-- /.brand -->



				</div><!-- /.navbar-header -->

				

				<div class="navbar-header pull-right" role="navigation">

                                    

					<ul class="nav ace-nav">

                       

                                        

						<li class="light-blue">

							<a data-toggle="dropdown" href="#" class="dropdown-toggle">

								<img class="nav-user-photo" src="css/add_files/touxiang.png" alt="Jason's Photo">

								<span class="user-info">

									<small>欢迎光临</small>

													<?php echo $_SESSION['nickname']?>			</span>



								<i class="icon-caret-down"></i>

							</a>



							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								

								<li>

									<a href="javascript:">

										<i class="icon-user"></i>

											姓名:<?php echo $_SESSION['nickname']?></a>

								</li>

								<li>

									<a href="index.php?r=user/rbac/update">

										<i class="icon-user"></i>

											修改密码</a>

								</li>

								<li>

									<a href="index.php?r=user/user/logout">

										<i class="icon-off"></i>

										退出

									</a>

								</li>

							</ul>

						</li>

					</ul> 

                                       <!-- /.ace-nav -->  

				</div><!-- /.navbar-header -->

			</div><!-- /.container -->

		</div>

		<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">

  <div class="modal-dialog modal-sm">

    <div class="modal-content">

	<center>

      <form action="index.php?r=login/updatepass" method="post">

		您当前的用户是:<input id="username" name="username" value="jiaowu" type="text"><br>

		请您输入新密码:<input id="password" name="password" type="password"><br>

                		<button id="testClick" class="btn btn-lg btn-success" type="submit">确认修改</button>

                	  </form>

	  </center>

    </div>

  </div>

</div>

<!------------------------------------------------------------------------------>

