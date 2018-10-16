<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我爱齐学网-导航管理</title>
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
	.navs-lists{margin-right:50px;}
	.navs-cate{font-size:21px;}
	.navs-listss{font-size:24px;font-weight:bold;}
	.list-cate a{margin-right:20px;}
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
		    <a href="/index.php/Admin/Navs/addnav" class="gl-mess btn btn-default btn-lg">新增导航</a>

		    <?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="panel panel-default">
			      <div class="panel-heading" role="tab" id="collapseListGroupHeading1">
			        <h2 class="panel-title">

			          <a class="navs-lists label label-default navs-listss" data-toggle="collapse" data-idd="<?php echo ($vo["id"]); ?>" href="#collapseListGroup<?php echo ($vo["id"]); ?>"><?php echo ($vo["linkname"]); ?></a>

			          <span class="navs-lists">排序：<?php echo ($vo["sort"]); ?></span>
			          <span class="navs-lists">url：<?php echo ($vo["linkurl"]); ?></span>
			          <a href="/index.php/Admin/Navs/editnav/id/<?php echo ($vo["id"]); ?>" class="btn btn-danger btn-sm">修改导航</a>
			          <a href="SITE_URL/index.php/<?php echo ($vo["linkurl"]); ?>" class="btn btn-danger btn-sm">查看页面</a>
			        </h2>
			      </div>

			      <div id="collapseListGroup<?php echo ($vo["id"]); ?>" class="panel-collapse collapse">
			      	<ul class="list-group list-cate">
			      	</ul>
					<div class="panel-footer"><a href="#" class="btn btn-default btn-sm">新增分类</a></div>
			      </div>
			 </div><?php endforeach; endif; else: echo "" ;endif; ?>

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
	<script type="text/javascript">
		$(function(){
			var navs=$('.navs-listss');
			for(var i=0;i<navs.length;i++){
				navs[i].onclick=function(){
					var pid=$(this).data('idd');
					$('#collapseListGroup'+pid+' .list-cate').empty();
					$.post('/index.php/Admin/Navs/catelist',{pid:pid},function(result){
						var cats="";
						console.log(result);
						if(result){
							$.each(result,function(index,item){
					          cats+="<li class='list-group-item'>"
					          cats+="<span class='navs-lists navs-cate'>"+item['catename']+"</span>";
					          cats+="<span class='navs-lists'>排序："+item['sort']+"</span>";
					          cats+="<span class='navs-lists'>url："+item['url']+"</span>";
					          cats+="<a href=/index.php/Admin/Navs/editcate/id/"+item['id']+" class='btn btn-primary btn-sm'>修改该分类</a>";
					          cats+=" <a href='"+item['id']+"' class='btn btn-danger btn-sm' data-toggle='tooltip' data-placement='top' title='删除该分类，该分类下素材自动转到“其他”分类'>删除该分类</a>";
					          cats+="<a href='"+item['id']+"' class='btn btn-success btn-sm'>查看该分类所有素材 <span class='badge'>"+item['num']+"</span></a>";
					          cats+="</li>";
							})
						}
						$('#collapseListGroup'+pid+' .list-cate').append(cats);
					},'json');
					
				}
			}
		})
	</script> 
</body>
</html>