<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我爱齐学网—网页特效</title>
	<meta charset="utf-8">
	<meta name="description" content="本站致力于促进个人成长,发挥所长,分享自身所学，帮助别人学习的过程,其实也是自己在学习的过程,希望大家一起努力,互相分享交流,技术越来越棒.">
	<meta name="keywords" content="学习,分享,交流,促进">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/css/font.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/css/common.css">
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
<script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "https://hm.baidu.com/hm.js?e91cb001f54b72d3f275adda49ad14b6";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>

</head>
<body class="f4f4">
	<!-- 导航 -->
	<div id="qxw_top" class="fff">
		<div class="qxw_top_con">
			<a href="/" class="qxw_top_lt"></a>
			<div class="qxw_top_rt">
				<form>
					<input type="text" name="search" placeholder="请输入搜索内容" class="sear_input">
					<a href="#">搜索</a>
					<span class="glyphicon glyphicon-search search_sp"></span>
				</form>
			</div>
		</div>
	</div>
	<div id="qxw_nav">
		<div class="qxw_nav_con">
			<ul>
				<li class="sel"><a href="/">首页</a></li>
				<li><a href="/index.php/Home/Special/index">网页特效</a></li>
				<li><a href="#">HTML5+CSS3</a></li>
				<li><a href="/phpMysq.html">PHP+MYSQL</a></li>
				<li><a href="/mobile.html">移动开发</a></li>
				<li><a href="/move.html">视频教程</a></li>
				<li><a href="/template.html">整站模版</a></li>
				<li><a href="/assistant.html">开发助手</a></li>
				<li><a href="/contact.html">联系我们</a></li>
			</ul>
			<div class="qxw_nav_login"><span class="glyphicon glyphicon-user"></span><a href="#" class="cd-signin">注册/登录</a></div>
		</div>
	</div>



<!-- 登录注册弹出面板 -->
	<div class="dialog">
		<div class="dialog_modal"></div><!--  模态 -->
		<span class="dialog_close glyphicon glyphicon-remove"></span>
		<div class="dialog_panel">
			<div class="dialog_panel_c">
				<span class="dialog_login">用户登录</span>
				<span class="dialog_register">注册新用户</span>
			</div>

			<!-- 切换的登录组件 -->
			<div class="dialog_modal_login">
				<form>
					<div class="dialog_login_user">
						<span class="glyphicon glyphicon-user"></span>
						<input type="text" name="username" placeholder="输入用户名"/>
					</div>

					<div class="dialog_login_user">
						<span class="glyphicon glyphicon-tag"></span>
						<input type="password" name="password" placeholder="输入密码"/>
					</div>

					<div class="dialog_login_ver">
						<strong>验证码</strong>
						<input type="text" name="verCode"/>
						<span class="dia_verification"></span>
					</div>

					<div class="dialog_login_state"><input type="checkbox" name="state"/>记住登录状态</div>

					<button class="dialog_login_sub">登录</button>
				</form>

			</div>
			<!-- 切换的注册组件 -->
			<div class="dialog_modal_register">
				<form>
					<div class="dialog_register_user">
						<span class="glyphicon glyphicon-user"></span>
						<input type="text" name="username" placeholder="输入用户名"/>
					</div>

					<div class="dialog_register_user">
						<span class="glyphicon glyphicon-tag"></span>
						<input type="password" name="password" placeholder="输入密码"/>
					</div>

					<div class="dialog_register_user">
						<span class="glyphicon glyphicon-tag"></span>
						<input type="password" name="password" placeholder="确认密码"/>
					</div>

					<div class="dialog_register_user">
						<span class="glyphicon glyphicon-envelope"></span>
						<input type="password" name="password" placeholder="输入邮箱"/>
					</div>

					<div class="dialog_register_ver">
						<strong>验证码</strong>
						<input type="text" name="verCode"/>
						<span class="dia_verification1"></span>
					</div>

					<div class="dialog_register_state"><input type="checkbox" name="state"/>我已阅读并同意<a href="/index.php/Home/Index/copyRight" target="_blank" class="dialog_register_agreement">用户协议</a></div>

					<button class="dialog_register_sub">注册</button>
				</form>
			</div>
		</div>
	</div>
<!-- 登录注册弹出面板 -->

	<!-- 分类 -->
	<div id="spe_cate">
		<div class="spe_cate1">

			<div class="spe_cate_c">
				<span class="glyphicon glyphicon-map-marker"></span>
				<span style="color:#000">当前位置 :</span>&nbsp;&nbsp;<a href="#">网页特效</a>
			</div>

			<div class="spe_cate_c1">
				<ul class="spe_cate_sp clearfix">
					<li class="spe_hover"><a href="#" class="glyphicon glyphicon-pushpin">&nbsp;热门标签</a></li>

					<li><a href="#">插件</a></li>
					<li><a href="#">星际评分</a></li>
					<li><a href="#">图片滚动</a></li>
					<li><a href="#">图片切换</a></li>
					<li><a href="#">图标放大</a></li>
					<li><a href="#">下拉菜单</a></li>
					<li><a href="#">全屏</a></li>
					<li><a href="#">文字滚动</a></li>
					<li><a href="#">表单验证</a></li>
					<li><a href="#">select框美化</a></li>
					<li><a href="#">提示框</a></li>
					<li><a href="#">浮动层</a></li>
					<li><a href="#">弹出层</a></li>
					<li><a href="#">在线客服</a></li>
					<li><a href="#">瀑布流</a></li>
					<li><a href="#">滚动条</a></li>
					<li><a href="#">进度条</a></li>
					<li><a href="#">日期</a></li>
					<li><a href="#">倒计时</a></li>
					<li><a href="#">表格</a></li>
					<li><a href="#">图片无缝滚动</a></li>
					<li><a href="#">广告</a></li>
					<li><a href="#">鼠标悬停</a></li>
					<li><a href="#">固定层</a></li>
					<li><a href="#">无缝滚动</a></li>
					<li><a href="#">返回顶部</a></li>
					<li><a href="#">响应式</a></li>
					<li><a href="#">搜索框</a></li>
					<li><a href="#">放大镜</a></li>
					<li><a href="#">渐隐</a></li>
					<li><a href="#">视频</a></li>
					<li><a href="#">鼠标滚动</a></li>
					<li><a href="#">手机</a></li>
					<li><a href="#">酷炫</a></li>
					<li><a href="#">幻灯片</a></li>
					<li><a href="#">评论</a></li>
					<li><a href="#">跟随鼠标</a></li>
					<li><a href="#">百度</a></li>
					<li><a href="#">九宫格</a></li>
					<li><a href="#">焦点图</a></li>
					<li><a href="#">翻转</a></li>
					<li><a href="#">网格布局</a></li>
					<li><a href="#">滚屏</a></li>
					<li><a href="#">手风琴</a></li>
					<li><a href="#">仿淘宝</a></li>
					<li><a href="#">图片悬停</a></li>
					<li><a href="#">选择器</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 分类 -->


	<!-- 内容 -->
	<div class="qxw_recent spec_recent">
		<div class="qxw_recent_c">

			<div class="qxw_recent_c2">

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi1.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>


				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi1.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>

						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>


					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi1.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img class="lazyload" data-original="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="/index.php/Home/Special/special_art">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<style type="text/css">
				.spec_c3{width:100%;text-align:center;margin-top:33px;}
				.spec_c3>ul{display:table;margin:0 auto;}
				.spec_c3>ul>li{float:left;}
				.spec_c3>ul>li:first-child a{margin-left:0;}
				.spec_c3>ul>li a{display:block;padding:20px 30px;background:#FFF;margin-left:10px;color:#666;font-size:17px;}
				.spec_c3>ul>.page_hover a{background:#A52A2A;color:#fff;}
			</style>
			<div class="spec_c3">
				<ul>
					<li><a href="#">上一页</a></li>
					<li class="page_hover"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">下一页</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- 最新代码展示 -->
	<!-- 内容 -->


	<!-- 底部信息 -->
	<div id="qxw_footer">
		<div class="qxw_footer_c">
			<div class="qxw_footer_c1">
				<ul>
					<li><a href="/special_article.html">联系我们</a></li>
					<li><a href="/special_article.html">关于我们</a></li>
					<li><a href="copyRight.html">版权声明</a></li>
					<li><a href="/special_article.html">招纳贤士</a></li>
					<li><a href="/special_article.html">酷站欣赏</a></li>
					<li><a href="/special_article.html">帮助中心</a></li>
				</ul>
			</div>

			<div class="qxw_footer_c5">
				<ul>
					<li><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=913885017&site=qq&menu=yes"><img border="0" src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/9cU6JrR2Al5MTFIH*62KV3b0bV.38X4iflrGBIC5TaI!/b/dD8BAAAAAAAA&bo=XAAWAAAAAAADB2g!&rf=viewer_4" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></li>
					<li>qq群：823167796</li>
					<li>913885017@qq.com</li>
					<li>手机：13545774974</li>
				</ul>
			</div>
			<div class="qxw_footer_c2">52齐学网专业提供网站模板，网页模板，教程培训，程序插件，网站素材等建站资源。我们致力于打造一个优秀的IT资源共享学习平台！</div>
			
			<div class="qxw_footer_c3">Copyright @ 2010-2018 52齐学网 版权所有 鄂ICP备17012302号</div>
			
			<div class="qxw_footer_c4">
				<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","weixin","fbook","sqq","youdao"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
			</div>
		</div>
	</div>
	<!-- 底部信息 -->

	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jquery.lazyload.min.js"></script>
	<script type="text/javascript">
	$(function() {
		function f_masonry() {
			$('.qxw_recent_c2').masonry({
				gutterWidth:4,
				itemSelector:'.qxw_re_d',
				isAnimated: true
			});
		}
	    f_masonry();
	    $(".lazyload").lazyload({
			effect:"fadeIn",
			failurelimit:40,
			load:f_masonry
		});
	});
	</script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jq.js"></script>
</body>
</html>