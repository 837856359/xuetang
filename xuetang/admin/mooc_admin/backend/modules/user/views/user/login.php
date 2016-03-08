  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml"><head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">



<title>学堂后台登陆</title>

<link href="css/login/login.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="css/login/jquery1.js"></script>

</head>

<body>

<form id="user-login-form" action="#" method="post">



	<div class="loginbg">

	  <div class="login">

      	<div style="margin-left:45px;">

		  <table cellpadding="0" cellspacing="0" border="0" width="100%">

			  <tbody><tr>

				<td align="right"><label for="LoginForm_用户名：">用户名：</label></td>

				<td align="left"><input name="LoginForm[username]" id="name" type="text" /> <span id="nameTip"><div class="errorMessage" id="LoginForm_username_em_" style="display:none"></div></span>

				</td>

			  </tr>

			  <tr>

				<td align="right"><label for="LoginForm_密&amp;nbsp;&amp;nbsp;码：">密&nbsp;&nbsp;码：</label></td>

				<td align="left"><input name="LoginForm[password]" id="pas" type="password" /> <span id="pas1Tip"><div class="errorMessage" id="LoginForm_password_em_" style="display:none"></div></span>

				</td>

			  </tr>

<!-- 			    <tr>

			    				<td align="right"><label for="LoginForm_验证码：">验证码：</label></td>

			    				<td align="left"><input tabindex="1" name="LoginForm[verifyCode]" id="LoginForm_verifyCode" type="text" /><span><div class="errorMessage" id="LoginForm_verifyCode_em_" style="display:none"></div></span>

			    				</td>

			                                    <td align='hine'><a href="index.php?r=login/s"><img alt="点击换图" title="点击换图" style="cursor:pointer" id="yw0" src="/admin/index.php?r=login/captcha&amp;v=56371dda5b69a" /></a></td>

			    			  </tr> -->

			  </tbody></table>

	<table style="padding-top:10px;" cellpadding="0" cellspacing="0" border="0" width="100%">

			  <tbody>

			   <tr>

				 <td align="left" width="200" colspan='2' >

					<input id="ytradio" type="hidden" value="0" name="LoginForm[rememberMe]" /><input style="float:left;margin-left:-12px;" id="radio" name="LoginForm[rememberMe]" value="1" type="checkbox" />				    <label style="float:left;margin-left:-66px;margin-top:-6px;" id="sub" for="LoginForm_记住我的信息">记住我的信息</label>				    <div class="errorMessage" id="LoginForm_rememberMe_em_" style="display:none"></div>					

				 </td>

			   </tr>

			    <tr>

				 <td align="right" width="200">

					 <input style="background:url(css/login/exambtn.gif) no-repeat;width:80px;height:34px;border:0;margin-right:-8px;" type="button" name="yt0" value="" id="but"/> 

				 </td>

				 <td align="left" width="200">

				     <input type="reset" value='' style="background:url(css/login/button2.gif) no-repeat;width:80px;height:34px;border:0;cursor:pointer;margin-left:25px;">

					

					

				 </td>

			   </tr>



			  

			  </tbody></table>

             </div>

	  </div>

	</div>

  </form>

</center>

<script type="text/javascript" src="css/login/jquery-1.7.2.min.js"></script>

<script>

	$("#but").click(function(){

		var name=$("#name").val();

		var pwd=$("#pas").val();

		if(name==""){

				alert("请填写账号");

		}else{

			if(pwd==""){

				alert("请填写密码");

			}else{

				$.ajax({

					   type: "POST",

					   url: "index.php?r=user/user/maain",

					   data: "name="+name+"&&pwd="+pwd,

					   success: function(msg){

					   	if(msg==1){

					   		alert("账号输入有误");

					   	}else if(msg==2){

					   		alert("密码输入有误");

					   	}else if(msg==0){

					   		alert("登陆成功");

					   		location.href="index.php?r=user/user/index";

					   	}

					     

					   }

					});

			}

		}

	})

</script>

