<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>后台-导航管理</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost:83/Application/Admin/public/css/bootstrap.css">
	<style type="text/css">
		body{width:100%;height:100%;}
	</style>
</head>
<body>
<div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
          首页
        </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse">
      <div class="panel-body">
        内容
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
          导航
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse">
      <div class="panel-body">
        内容
      </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          导航
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse">
      <div class="panel-body">
        内容
      </div>
    </div>
  </div>
</div>
<script type="text/javascript" src="http://localhost:83/Application/Admin/public/js/jquery.min.js"></script>
<script type="text/javascript" src="http://localhost:83/Application/Admin/public/js/bootstrap.min.js"></script>
</body>
</html>