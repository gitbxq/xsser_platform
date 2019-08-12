<?php /* Smarty version 2.6.26, created on 2016-08-13 10:20:15
         compiled from register.html */ ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>XSS Platform</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/css/css.css">
<script src="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/js/jquery.min.js"></script>
<script src="<?php echo $this->_tpl_vars['url']['themePath']; ?>
/js/bootstrap.min.js"></script>
</head>
<body>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div class="container">
<form class="form-register" id="formRegister" action="<?php echo $this->_tpl_vars['url']['root']; ?>
/index.php?do=register&act=submit" method="post">
<div class="panel panel-default">
  <div class="panel-heading">注册</div>
  <div class="panel-body">
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-heart"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text" placeholder="请输入邀请码" id="key" name="key">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-user"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text" placeholder="请输入用户名 4-20个字符(字母、汉字、数字、下划线)" id="user" name="user">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-envelope"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text" placeholder="请输入邮箱 可以使用邮箱登录" id="email" name="email">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-phone"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="text" placeholder="请输入手机号 可以用来接收短信提醒（可空）" id="phone" name="phone">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-lock"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password" placeholder="请输入密码 6-20个字符(字母、数字、下划线)" id="pwd" name="pwd">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon">
<i class="glyphicon glyphicon-ok-sign"></i>
</span>
<input class="form-control ng-pristine ng-invalid ng-invalid-required valid" type="password" placeholder="请再次输入密码" id="pwd2" name="pwd2">
<iframe id="tmp_downloadhelper_iframe" style="display: none;"></iframe></div>
</div>
						
<button type="submit" class="btn btn-success" style="float:right;">提交注册</button>
</div>
</div>
</div>
</form>
	<!-- main End -->

<script type="text/javascript">
<?php echo '
function Register(){
	var errNum=0;
	var checkItems=[\'key\',\'user\',\'email\',\'pwd\',\'pwd2\'];
	for(var i=0;i<checkItems.length;i++){
		if($("#"+checkItems[i]).val()==""){
			errNum++;
			$("#"+checkItems[i]+"_check").addClass("error");
			$("#"+checkItems[i]+"_check").html("不能为空");
		}else{
			$("#"+checkItems[i]+"_check").addClass("correct");
			$("#"+checkItems[i]+"_check").html("√");
		}
	}
	/* 特殊判断 */
	//用户格式
	var user=$("#user").val();
	if(user!="")
	{
		if(!/^[\\w\\u4E00-\\u9FA5]{4,20}$/.test(user)){
			errNum++;
			$("#user_check").removeClass("correct");
			$("#user_check").addClass("error");
			$("#user_check").html("4-20个字符(字母、汉字、数字、下划线)");
		}else{
			$("#user_check").removeClass("error");
			$("#user_check").addClass("correct");
			$("#user_check").html("√");
		}
	}
	//邮箱格式
	var email=$("#email").val();
	if(email!=""){
		if(!/^(\\w+\\.)*?\\w+@(\\w+\\.)+\\w+$/.test(email)){
			errNum++;
			$("#email_check").removeClass("correct");
			$("#email_check").addClass("error");
			$("#email_check").html("邮箱格式不正确");
		}else{
			$("#email_check").removeClass("error");
			$("#email_check").addClass("correct");
			$("#email_check").html("√");
		}
	}
	//电话格式
	var phone=$("#phone").val();
	if(phone!=""){
		if(!/^(\\d{11})$/.test(phone)){
			errNum++;
			$("#phone_check").removeClass("correct");
			$("#phone_check").addClass("error");
			$("#phone_check").html("手机格式不正确");
		}else{
			$("#phone_check").removeClass("error");
			$("#phone_check").addClass("correct");
			$("#phone_check").html("√");
		}
	}
	//密码
	var pwd=$("#pwd").val();
	if(pwd!="")
	{
		if(!/^\\w{6,20}$/.test(pwd)){
			errNum++;
			$("#pwd_check").removeClass("correct");
			$("#pwd_check").addClass("error");
			$("#pwd_check").html("6-20个字符");
		}else{
			$("#pwd_check").removeClass("error");
			$("#pwd_check").addClass("correct");
			$("#pwd_check").html("√");
		}
	}
	//确认密码
	var pwd2=$("#pwd2").val();
	if(pwd2!="")
	{
		if(pwd2!=pwd){
			errNum++;
			$("#pwd2_check").removeClass("correct");
			$("#pwd2_check").addClass("error");
			$("#pwd2_check").html("两次输入密码不相同");
		}else{
			$("#pwd2_check").removeClass("error");
			$("#pwd2_check").addClass("correct");
			$("#pwd2_check").html("√");
		}
	}
	//提交注册
	if(errNum<=0){
		var key=$("#key").val();
		//判断用户/邮箱/key
		$.post("/index.php?do=register&act=checkue&r="+Math.random(),{"user":user,"email":email,"key":key},function(re){
			var reArr=re.split("|");
			if(reArr[0]==0 && reArr[1]==0 && reArr[2]==0){
				$("#formRegister").submit();
			}else{
				if(reArr[0]>0){
					$("#user_check").removeClass("correct");
					$("#user_check").addClass("error");
					$("#user_check").html("用户已存在");
				}
				if(reArr[1]>0){
					$("#email_check").removeClass("correct");
					$("#email_check").addClass("error");
					$("#email_check").html("邮箱已存在");
				}
				if(reArr[2]>0){
					$("#key_check").removeClass("correct");
					$("#key_check").addClass("error");
					$("#key_check").html("邀请码输入错误");
				}
			}
		});
	}
}
'; ?>

</script>
</body>
</html>