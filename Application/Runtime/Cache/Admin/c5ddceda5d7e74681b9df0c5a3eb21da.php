<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我爱齐学网-新增导航</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="http://localhost:83/Application/Admin/public/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="http://localhost:83/Application/Admin/public/css/common.css">
	<style type="text/css">
	.left-side>a:first-child+a+a+a+a{
			z-index: 2;
		    color: #fff;
		    background-color: #337ab7;
		    border-color: #337ab7;
	}
	.gl-mess{margin:25px 0 10px;}
	</style>
</head>
<body class="bod">
<!-- 导航 -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav nav-tabss">
	      	<li><a href="/index.php/Admin/Index">首页<span class="sr-only">(current)</span></a></li>
	        <li><a href="/index.php/Admin/Material">素材管理<span class="sr-only">(current)</span></a></li>
	        <li><a href="/index.php/Admin/AllUser">用户管理</a></li>
	        <li><a href="/index.php/Admin/Super">超级管理</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	 <li><a href="https://www.52qxw.com" target="_blank">访问网站</a></li>
	        <li><a href="javascript:void(0)">管理员：<?php echo $_SESSION['username'];?></a></li>
	        <li><a href="/index.php/Admin/Common/layout">退出</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
<!-- 导航 -->
	<article class="h-con">
		<div class="container-fluid">
			<!-- 左侧导航 -->
						<div class="list-group nav nav-tabs left-side">
			  <a href="/index.php/Admin/Index" class="list-group-item">首页</a>
			  <a href="/index.php/Admin/Upload" class="list-group-item">素材上传</a>
			  <a href="/index.php/Admin/Newusers" class="list-group-item">今日新注册</a>
			  <a href="/index.php/Admin/Messages" class="list-group-item">留言管理</a>
			  <a href="/index.php/Admin/Navs" class="list-group-item">导航管理</a>
			  <a href="/index.php/Admin/AllUser" class="list-group-item">用户管理</a>
			  <a href="/index.php/Admin/Notified" class="list-group-item">信息通知</a>
			  <a href="/index.php/Admin/Material" class="list-group-item">素材管理</a>
			  <a href="/index.php/Admin/Review" class="list-group-item">评论管理</a>
			</div>
			<!-- 左侧导航 -->
		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div class="tab-pane active">
			<ol class="breadcrumb">
			  <li><a href="/index.php/Admin/Navs/index">导航管理</a></li>
			  <li class="active">新增导航</li>
			</ol>

			<form class="form-horizontal" method="post">
			  <div class="form-group">
			    <label for="inputEmail3" class="col-sm-2 control-label">导航名：</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputEmail3" placeholder="导航名……" name="linkname">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">url：</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="inputPassword3" placeholder="url……" name="linkurl">
			    </div>
			  </div>

			  <div class="form-group">
			    <label for="inputPassword4" class="col-sm-2 control-label">导航排序：</label>
			    <div class="col-sm-10">
			      <input type="input" class="form-control" id="inputPassword4" placeholder="导航排序……" name="sort">
			    </div>
			  </div>


			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			      <button type="submit" class="btn btn-default">提交</button>
			    </div>
			  </div>
			</form>



		    </div>

		  </div>
		</div>
	</article>
	<!-- 底部信息 -->
		<footer class="foote">
		<div class="container">
			<div class="row">
				<ul class="row-list1">
					<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="/special_article.html">进入网站</a></li>
					<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="/special_article.html">关于我们</a></li>
					<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="copyRight.html">版权声明</a></li>
					<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="/special_article.html">赚钱指南</a></li>
					<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="/special_article.html">酷站欣赏</a></li>
					<li class="col-lg-2 col-md-2 col-sm-2 col-xs-2"><a href="/special_article.html">帮助中心</a></li>	
				</ul>
			</div>
			<div class="row">
				<ul class="row-list2 text-center">
					<li class="col-lg-3 col-md-3 col-sm-3 col-xs-4"><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=913885017&site=qq&menu=yes"><img border="0" src="http://localhost:83/Application/Admin/public/images/qq.jpg" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></a></li>
					<li class="col-lg-3 col-md-3 col-sm-3 col-xs-4">qq群：823167796</li>
					<li class="col-lg-3 col-md-3 hidden-sm hidden-xs">913885017@qq.com</li>
					<li class="col-lg-3 col-md-3 col-sm-3 col-xs-4">手机：13545774974</li>
				</ul>
			</div>
		</div>
		<div class="text-center row-list3">52齐学网专业提供网站模板，网页模板，教程培训，程序插件，网站素材等建站资源。我们致力于打造一个优秀的IT资源共享学习平台！</div>
		
		<div class="text-center row-list4">Copyright @ 2010-2018 52齐学网 版权所有 鄂ICP备17012302号</div>
	</footer>
	<!-- 底部信息 -->
	<script type="text/javascript" src="http://localhost:83/Application/Admin/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost:83/Application/Admin/public/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="http://localhost:83/Application/Admin/public/js/common.js"></script> 
</body>
</html>