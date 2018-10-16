<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我爱齐学网-管理员登录</title>
	   <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=0">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Admin/public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Admin/public/css/common.css">
</head>
<body class="login-body">
	<div class="login">
		<div class="container">
			<h1 class="text-center">管理员登录</h1>
			<form class="form-horizontal" method="post">

			  <div class="form-group has-error has-feedback">
			    <label for="inputEmail3" class="col-sm-5 col-xs-12 control-label">用户名：</label>
			    <div class="col-sm-4 col-xs-6">
			      <input type="text" class="form-control input-lg" name="username" id="inputEmail3" placeholder="用户名">
			    </div>
			  </div>

			  <div class="form-group has-warning has-feedback">
			    <label for="inputPassword3" class="col-sm-5 col-xs-12 control-label">密码：</label>
			    <div class="col-sm-4 col-xs-6">
			      <input type="password" class="form-control input-lg" name="pass" id="inputPassword3" placeholder="Password">
			    </div>
			  </div>

			  <div class="form-group has-error has-feedback">
			    <label for="inputPassword4" class="col-sm-5 col-xs-12 control-label">确认密码：</label>
			    <div class="col-sm-4 col-xs-6">
			      <input type="password" class="form-control input-lg" name="passs" id="inputPassword4" placeholder="Password">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword5" class="col-sm-5 col-xs-12 control-label">验证码：</label>
			    <div class="col-sm-4 col-xs-6">
			      <input type="text" class="form-control input-lg" name="var" id="inputPassword5" placeholder="验证码">
			    </div>
			    <img class="verifyi" onclick='this.src="/index.php/Admin/Login/verify"' src="/index.php/Admin/Login/verify"/>
			  </div>


			  <div class="form-group sign-ins text-center">
			    <div class="col-sm-12">
			      <button type="submit" class="btn btn-default btn-lg">Sign in</button>
			    </div>
			  </div>
			</form>
		</div>		
	</div>
	<script type="text/javascript" src="http://localhost/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Admin/public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Admin/public/js/common.js"></script>
</body>
</html>