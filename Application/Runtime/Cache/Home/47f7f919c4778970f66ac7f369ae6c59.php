<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>我爱齐学网-个人中心</title>
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

					<div class="dialog_register_state"><input type="checkbox" name="state"/>我已阅读并同意<a href="/copyRight.html" target="_blank" class="dialog_register_agreement">用户协议</a></div>

					<button class="dialog_register_sub">注册</button>
				</form>
			</div>
		</div>
	</div>
<!-- 登录注册弹出面板 -->


<!-- 消息框 -->
	<div class="personal_mess">
		<div class="personal_mess_c">
			<!-- 信息 -->
			<span class="glyphicon glyphicon-volume-up"></span>

			<ul class="personal_mess_ul">
				<li><a href="#">新上线素材：html5 svg层叠图标旋转菜单动画特效s+css3九宫格按钮布局点击弹出窗口动画特效</a></li>
				<li><a href="#">jQuery+bootstrap响应式卡片布局代码s+css3九宫格按钮布局点击弹出窗口动画特效</a></li>
				<li><a href="#">html5canvas酷炫生日快乐主题烟花动画背景特效s+css3九宫格按钮布局点击弹出窗口动画特效</a></li>
				<li><a href="#">js+css3九宫格按钮布局点击弹出窗口动画特效s+css3九宫格按钮布局点击弹出窗口动画特效</a></li>
			</ul>
		</div>
	</div>
<!-- 消息框 -->

<!-- 个人中心界面 -->
	<div class="per_panel">
		<div class="per_con clearfix">
			<!-- 左侧导航 -->
			<div class="per_con_lt">
				<div class="per_con_lt1">
					<div class="per_lt1_details clearfix">

						<div class="per_lt1_d1"><img src="http://localhost/Application/Home/public/images/pers.png"></div>

						<div class="per_lt1_d2">
							
							<div class="per_lt1_d3">小齐</div>
							
							<div class="per_lt1_d4">
								<span class="glyphicon glyphicon-map-marker"></span>
								<span>湖北省宜昌市</span>
							</div>
						</div>

					</div>
					<div class="per_lt1_details1">积分<span>(50)</span></div>
				</div>
				<div class="per_con_lt2">
					<ul class="per_lt2_ul">
						<li class="per_select_li"><span class="glyphicon glyphicon-list"></span>我的主页</li>
						<li><span class="glyphicon glyphicon-check"></span>我的签到</li>
						<li><span class="glyphicon glyphicon-cloud-download"></span>下载记录</li>
						<li><span class="glyphicon glyphicon-open"></span>我的上传</li>
						<li><span class="glyphicon glyphicon-record"></span>我的收藏</li>
						<li><span class="glyphicon glyphicon-hand-right"></span>我的设置</li>
						<li><span class="glyphicon glyphicon-folder-open"></span>网站留言</li>
					</ul>
				</div>
			</div>


			<!-- 右侧内容 -->
			<div class="per_con_rt">
				<a href="#" class="per_con_rt1"><span class="glyphicon glyphicon-send"></span>上传资源</a>
				<div class="per_con_rt2">今天未签到，立即去<a href="#">签到</a>。本月已签到<span>0</span>次,签到满七天送200学习积分</div>

				<div class="per_con_rt3">
					<div class="per_con_rt4 clearfix">
						<div class="per_con_rt6">素材浏览指数</div>
						<div class="per_con_rt7"><a href="#">更多</a></div>
					</div>


					<div class="per_con_rt5">发布好的资源可获取更多积分，快去<a href="#">发布</a>吧。</div>
				</div>
			</div>
		</div>
	</div>
<!-- 个人中心 -->
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jquery.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jq.js"></script>
</body>
</html>