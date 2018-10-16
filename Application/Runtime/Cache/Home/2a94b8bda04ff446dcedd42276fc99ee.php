<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我爱齐学网—齐学习与分享</title>
	<meta charset="utf-8">
	<meta name="description" content="本站致力于促进个人成长,发挥所长,分享自身所学，帮助别人学习的过程,其实也是自己在学习的过程,希望大家一起努力,互相分享交流,技术越来越棒.">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="keywords" content="学习,分享,交流,促进">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/css/font.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/css/reset.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/css/common.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/Application/Home/public/swipter/swiper.min.css">
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
	<!-- 顶部 -->

	
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

	<!-- 轮播图 -->
	<div id="caousel">	
		<div class="cao_c">

			<div class="cao_lt">
				  <div class="swiper-container">
				    <div class="swiper-wrapper">
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/JCaItYtFZd8umuzHw2BP1Zg9rNdiYACvSssc1DHl15w!/b/dDEBAAAAAAAA&bo=kAEsAQAAAAACF48!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				     
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/TgqLY8r1KrVkMMocI3ksRzKOahM1rVZklZiVRz8n56M!/b/dDEBAAAAAAAA&bo=sAQsAgAAAAACZ9k!&rf=viewer_4"></a><a href="" class="swiper_title">抖动特效代码</a></div>

				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/H.xUn6eCQctsxLHJn9gyXP0v4TTJrpHBG5AXbIplVVA!/b/dCEBAAAAAAAA&bo=yADwAAAAAAACNys!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/Ik8tZMk837zrS5COjDEQSWSgU6MVp5EeXIv5IdSKLNI!/b/dDMBAAAAAAAA&bo=qQLCAQAAAAACZys!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/z9lRa4Vgaa.95pX6hKag.HNk1eLziGEDF4ZTOW5F0jQ!/b/dN8AAAAAAAAA&bo=9AH0AQAAAAACJwM!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/FDKKO.FUSrMNJ.jFNK*eAs*bMPJ0kQeiz5Qy5kz0zII!/b/dC8BAAAAAAAA&bo=cAO4AQAAAAACF*k!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/1uStQWXHYQ*BJm0ZhWmmsvbd6glAY9ug2NYH0Xod4Jw!/b/dIMAAAAAAAAA&bo=ZgJuAQAAAAACR2g!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/AYvjGObe3amFHmQx55vqzZ*.reSH.J7Q.bzsKcG3pCM!/b/dFUAAAAAAAAA&bo=CAV*AgAAAAACVwM!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/HKyX2rDJpvWj4EE0cfFKtQAW0HTlwbCqaZISOe1fYHA!/b/dDEBAAAAAAAA&bo=UQLyAQAAAAACR8M!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				      <div class="swiper-slide"><a href="#" class="caou_a"><img src="http://m.qpic.cn/psb?/V11onCqj1TJ1pE/VOpPH4zkTEqR8P0k0DwUojQ6GYoHEynrJvFmNVVyERA!/b/dDABAAAAAAAA&bo=HQO1AQAAAAACN7k!&rf=viewer_4"></a><a href="#" class="swiper_title">抖动特效代码</a></div>
				    </div>
				    <!-- Add Pagination -->
				    <div class="swiper-pagination"></div>
				    <!-- Add Arrows -->
				    <div class="swiper-button-next"></div>
				    <div class="swiper-button-prev"></div>
				  </div>
			</div>

			<div class="cao_rt">
				<div class="cao_rt1"></div>

				<div class="cao_rt_d">
					<div class="cao_rt_d1">网页特效</div>
					<ul class="cao_rt_d2 clearfix">
						<li><a href="/special_article.html">jquery特效</a></li>
						<li><a href="/special_article.html">导航菜单</a></li>
						<li><a href="/special_article.html">css3动画</a></li>
						<li><a href="/special_article.html">文字特效</a></li>
						<li><a href="/special_article.html">html5</a></li>
						<li><a href="/special_article.html">选项卡/滑动门</a></li>
						<li><a href="/special_article.html">手机特效</a></li>
						<li><a href="/special_article.html">回到顶部</a></li>
						<li><a href="/special_article.html">轮播图</a></li>
						<li><a href="/special_article.html">悬浮层/弹出层</a></li>
						<li><a href="/special_article.html">手风琴菜单</a></li>
						<li><a href="/special_article.html">文件树</a></li>
						<li><a href="/special_article.html">滚动加载</a></li>
						<li><a href="/special_article.html">抽奖</a></li>
						<li><a href="/special_article.html">投票</a></li>
						<li><a href="/special_article.html">其他特效</a></li>
					</ul>
					<div class="cao_rt_d3"></div>
				</div>

				<div class="cao_rt_d">
					<div class="cao_rt_d1">网站模版</div>
					<ul class="cao_rt_d2 clearfix">
						<li><a href="/special_article.html">企业模版</a></li>
						<li><a href="/special_article.html">行业模版</a></li>
						<li><a href="/special_article.html">商城模版</a></li>
						<li><a href="/special_article.html">后台模版</a></li>
						<li><a href="/special_article.html">响应式模版</a></li>
						<li><a href="/special_article.html">H5模版</a></li>
						<li><a href="/special_article.html">旅游酒店</a></li>
						<li><a href="/special_article.html">个人博客</a></li>
						<li><a href="/special_article.html">中文模版</a></li>
						<li><a href="/special_article.html">英文模版</a></li>
						<li><a href="/special_article.html">手机模版</a></li>
						<li><a href="/special_article.html">app模版</a></li>
						<li><a href="/special_article.html">小程序模版</a></li>
						<li><a href="/special_article.html">bootstrap模版</a></li>
						<li><a href="/special_article.html">rem手机适配模版</a></li>
						<li><a href="/special_article.html">其他模版</a></li>
					</ul>
				</div>

			</div>

		</div>
	</div>

	<!-- 最新代码展示 -->
	<div class="qxw_recent">
		<div class="qxw_recent_c">


			<div class="qxw_recent_c1">
				<span class="glyphicon glyphicon-eye-open"></span>
				<span>最近更新</span>
			</div>


			<div class="qxw_recent_c2">

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi1.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>


				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
		

			<div class="qxw_re_d">
				<div class="qxw_re_img">
					<img src="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
					<a href="#" class="glyphicon glyphicon-expand"></a>
				</div>
				<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
				<div class="qxw_re_mi">
					<a href="#">下载 <b class="b1">0次</b></a>
					<a href="#">浏览 <b class="b2">58次</b></a>
					<a href="#">上传者 <b class="b3">站长</b></a>
					<a href="#"><span class="glyphicon glyphicon-save"></span></a>
				</div>
			</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi4.jpg"/>

						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>


					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="qxw_recent_c3"><a href="#"><span class="glyphicon glyphicon-arrow-right"></span></a></div>
		</div>
	</div>
	<!-- 最新代码展示 -->

	<div class="clearfix"></div>
	<!-- 网页特效展示 -->
	<div class="qxw_recent">
		<div class="qxw_recent_c">


			<div class="qxw_recent_c1">
				<span class="glyphicon glyphicon-eye-open"></span>
				<span>网页特效</span>
			</div>


			<div class="qxw_recent_c2">

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>


				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi3.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
		

			<div class="qxw_re_d">
				<div class="qxw_re_img">
					<img src="http://localhost/Application/Home/public/images/xuexi1.jpg"/>
					<a href="#" class="glyphicon glyphicon-expand"></a>
				</div>
				<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
				<div class="qxw_re_mi">
					<a href="#">下载 <b class="b1">0次</b></a>
					<a href="#">浏览 <b class="b2">58次</b></a>
					<a href="#">上传者 <b class="b3">站长</b></a>
					<a href="#"><span class="glyphicon glyphicon-save"></span></a>
				</div>
			</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi3.jpg"/>

						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>


					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi2.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>

				<div class="qxw_re_d">
					<div class="qxw_re_img">
						<img src="http://localhost/Application/Home/public/images/xuexi4.jpg"/>
						<a href="#" class="glyphicon glyphicon-expand"></a>
					</div>
					<div class="qxw_re_tit">swiper.js手机触屏滑动列表项操作代码</div>
					<div class="qxw_re_mi">
						<a href="#">下载 <b class="b1">0次</b></a>
						<a href="#">浏览 <b class="b2">58次</b></a>
						<a href="#">上传者 <b class="b3">站长</b></a>
						<a href="#"><span class="glyphicon glyphicon-save"></span></a>
					</div>
				</div>
			</div>

			<div class="clearfix"></div>
			<div class="qxw_recent_c3"><a href="#"><span class="glyphicon glyphicon-arrow-right"></span></a></div>
		</div>
	</div>

	<!-- 网页特效展示 -->
	<!-- 文章板块 -->
	<div id="qxw_art">
		<div class="qxw_art_c">

			<div class="qxw_recent_c1">
				<span class="glyphicon glyphicon-eye-open hove_art"></span>
				<span class="hove_art">开发交流</span>
				<span class="art_fo">在这里你可以学习和下载有关网站运营，网站建设，网站模板，网站素材等各方面建站知识和素材。</span>
			</div>

			<div class="qxw_art_c1">
				<div class="qxw_art_c2">
					<div class="qxw_art_c3">
						<div class="art_c3_d">
							<span class="art_c3_sp">-</span>
							<span class="art_c3_sp1">建站教程</span>
							<a href="#" class="art_c3_a"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;更多</a>
						</div>

						<div class="art_c3_d1">
							<ul class="art_c3_d3">
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
							</ul>
						</div>
					</div>

					<div class="qxw_art_c3">
						<div class="art_c3_d">
							<span class="art_c3_sp">-</span>
							<span class="art_c3_sp1">建站交流</span>
							<a href="#" class="art_c3_a"><span class="glyphicon glyphicon-hand-right"></span>&nbsp;更多</a>
						</div>

						<div class="art_c3_d1">
							<ul class="art_c3_d3">
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
								<li><a href="/special_article.html">解决Discuz聚合标签自由增加的问题</a><span>2018-06-26</span></li>
							</ul>
						</div>
					</div>

					<div class="qxw_art_c6">
						<a href="/special_article.html" class="qxw_art_c5">
							<span><img src="http://localhost/Application/Home/public/images/art.jpg" width="167" height="160"/></span>
							<span>手机上拉刷新下拉加载</span>
						</a>

						<a href="/special_article.html" class="qxw_art_c5">
							<span><img src="http://localhost/Application/Home/public/images/art.jpg" width="167" height="160"/></span>
							<span>手机上拉刷新下拉加载</span>
						</a>

						<a href="/special_article.html" class="qxw_art_c5">
							<span><img src="http://localhost/Application/Home/public/images/art.jpg" width="167" height="160"/></span>
							<span>手机上拉刷新下拉加载</span>
						</a>

						<a href="/special_article.html" class="qxw_art_c5">
							<span><img src="http://localhost/Application/Home/public/images/art.jpg" width="167" height="160"/></span>
							<span>手机上拉刷新下拉加载</span>
						</a>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 文章板块 -->
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


	<!-- 返回顶部 -->
	<div id="qxw_retTop">
		<span class="glyphicon glyphicon-chevron-up"></span>
	</div>
	<!-- 返回顶部 -->

	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript">
			$('.qxw_recent_c2').masonry({
				  itemSelector:'.qxw_re_d',
				  columnWidth:4
			});
	</script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/swipter/swiper.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jq.js"></script>
	<script type="text/javascript">
      var swiper = new Swiper('.swiper-container', {
        pagination: {
          el: '.swiper-pagination',
          type: 'fraction',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        effect : 'flip',
        loop : true,
      autoplay: {
        delay: 4000,
        stopOnLastSlide:false,
        disableOnInteraction:false,
       }
      });
     	
	</script>
</body>
</html>