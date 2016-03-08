  
<center>
  <form action="#">
    用户名：<input type="text" id="name" /><span id="nameTip"></span><br>
    密码：<input type="password" id="pas" /><span id="pas1Tip"></span><br>
    <input type="button" value="提交" id="but"/>
  </form>
</center>
<script type="text/javascript" src="/static/js/jquery-1.7.2.min.js"></script>
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