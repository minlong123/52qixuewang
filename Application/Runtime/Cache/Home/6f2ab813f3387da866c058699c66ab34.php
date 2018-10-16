<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>文章</title>
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
<body>
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

	<!-- 内容区域 -->
	<div class="speart">
		<div class="speart_c">
			<div class="speart_c_cat">
				<span class="glyphicon glyphicon-home"></span>
				<span style="color:#000">当前位置 :</span>&nbsp;&nbsp;<a href="#">网页特效</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="#">当游戏</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="#">当简单的js弹球打砖块网页小游戏代码</a>
			</div>


			<div class="speart_c_con">
				<div class="speart_c_lt">
					<div class="speart_c_lts">
						<div class="speart_c_ltss">
							
							<h1 class="speart_lt_title">jQuery动态改变文字和背景颜色效果</h1>
							<div class="speart_lt_date">发表时间:2015-03-31 00:27</div>
							<div class="speart_lt_other clearfix">
								<div class="speart_lt_other1">
									<span class="glyphicon glyphicon-eye-open"><strong>5次</strong></span>
									<span class="glyphicon glyphicon-download-alt"><strong>10次</strong></span>
									<span class="glyphicon glyphicon-edit speart_lt_com"><a href="#">查看评论</a></span>
								</div>

								<div class="speart_lt_other2">
									<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_sqq" data-cmd="sqq" title="分享到QQ好友"></a><a href="#" class="bds_fbook" data-cmd="fbook" title="分享到Facebook"></a><a href="#" class="bds_youdao" data-cmd="youdao" title="分享到有道云笔记"></a></div>
<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
								</div>

							</div>

						</div>
					</div>

					<div class="speart_lt_descr">购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据购物车特效都可用，远程ajax.php是测试数据。</div>
					<div class="speart_lt_content">
						<div class="speart_lt_content1">
							<a href="#" target="_blank"  class="speart_lt_img"><img src="http://localhost/Application/Home/public/images/test.jpg"><span></span></a>
							<span class="speart_lt_content2"></span>
						</div>
					</div>

					<div class="speart_lt_download">
						<a href="#" class="glyphicon glyphicon-eye-open speart_lt_download1"><span>查看演示</span></a>
						<a href="#" class="glyphicon glyphicon-new-window speart_lt_download2"><span>立即下载</span></a>
					</div>

					<div class="speart_lt_font">程序员，你不是一个人；网站开发QQ群：436471830</div>


					<div class="speart_lt_method">
						<div class="speart_lt_method1">使用方法</div>
						<div class="speart_lt_method2">
							
							
	 <p>关于你</p>

　　 <p>关于你，我有太多东西关于你。</p>

　　 <p>清醒的时候放不下矜持，不敢说我喜欢你，只有在某个夜晚多愁善感又萦绕在心头，或是朋友聚会上的大醉，才敢借着情绪说，我喜欢你，喜欢了好久好久。</p>

　　<p>关于你，2012年的九月，那是我们认识的季节，在四十多平米的教室里，我认识了你。我们是同学，彼此都还不熟悉的同学。那一句个子还高嘛，是我关注你的开始，有意无意的从四组向一组瞟你，小心翼翼的眼神怕你发现，却又怕你不明白，一点点的喜欢不敢声张。后来的打过来骂过去，后来聊天的默契，互道的晚安，才明白原来就是喜欢，没有其他。确定是喜欢，可是还是不敢声张。只因当初在人群中你说了一句，从此，你便住在了心里。不敢轻易靠近打扰，是怕自己扰了你的生活步调；不敢轻易对你开口言爱，是怕那样做是一种冒犯，是一种伤害我们关系的因素。</p>

　　<p>关于你。就是因为我的害怕，我亲眼看你走向她。我喜欢你是事实，你有女朋友也是事实。我以为我不说出口就会保持这样的朋友关系，却还是她赶了个巧，那应该是个寒假，你有女朋友了，我还是听说，我那么爱，却还是无果。于是我和她之间就莫名其妙的就多少有了敌人的感觉，或许就是别人口中的那样，世界上完全不相干的两个女人，会因为一个男人要么很友好，要么是仇恨。关于她我做不到友好，但也不是仇恨，只是你选择了她，我就希望她好好爱你，照顾你，连我的份也一起爱了。自爱上你的那天起，思念便成了戒不掉的瘾。你的一言一笑，一颦一蹙，无不牵动我的心，百千尘思，唯念一缕；万千红颜，唯恋一人。我愿意一生漂泊浪迹在你的故事里，甘愿为你鞍前马后，马首是瞻，即使你从未给我一句承诺，即使你从未给我半分爱情，依然无悔无怨。</p>

　　 <p>关于你。一场高考，考散了我们，毕业了会不会就是终生最后一见，很高兴，我们不是。各奔东西了，你们继续上了大学，值得欣慰的是，你们也是异地，这样不能算是我心机，只能说是恰巧，你们的安排恰合我意。后来也有听说，她从她的城市去看你，而那时的我能说什么呢。她是真心爱你，这是事实。我也曾和闺蜜说过，一生至少该有一次，为了某个人而忘了自己，不求有结果，不求同行，不求曾经拥有，甚至不求你爱我，只求在我最美的年华里，遇到你。今生遇见你，我觉得是幸福的，尽管这幸福交杂着万般痛苦。我也曾幻想着悄悄地去到你的学校，在某个阳光明媚的下午，在你去教室的路上和你来场偶遇，精心准备的偶遇，。可是我还来不及去和你偶遇，你们就毕了业。爱是种很玄的东西，说不清，道不明，剪不断，理还乱。世上，有种爱明知没有结果，却依然坚守原地，不舍离去，哪怕握不住你的一丝余温，依然选择默默为你守候。一路来去，心门只为你独开，山城只为你独驻，白天只为你旖旎，黑夜只为你流连。因为爱你，哪怕心入住荒岛，还是会以最深情的眼神，看着你幸福。</p>
							
						</div>
					</div>
					<div class="speart_lt_method">
						<div class="speart_lt_method1">评论(3)</div>
						<div class="speart_lt_c">
							<form id="fm">
								<textarea cols="100%" rows="7" placeholder="您有什么想法要说的吗？帮助他人、分享技术会获得奖励！"></textarea>
								<div>
									<button>重置</button>
									<button>发表评论</button>
								</div>
							</form>
						</div>
						<!-- 评论记录 -->
						<div class="speart_lt_record clearfix">

							<div class="speart_lt_record1"><img src="http://localhost/Application/Home/public/images/pers.png"></div>
							<div class="speart_lt_record2">
								<div class="speart_lt_record3">
									<div>小齐</div>
									<div>2017/3/7 15:38:37</div>
								</div>
								<div class="speart_lt_record4">学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看</div>
							</div>
						</div>

						<div class="speart_lt_record clearfix">

							<div class="speart_lt_record1"><img src="http://localhost/Application/Home/public/images/pers.png"></div>
							<div class="speart_lt_record2">
								<div class="speart_lt_record3">
									<div>小齐</div>
									<div>2017/3/7 15:38:37</div>
								</div>
								<div class="speart_lt_record4">学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看</div>
							</div>
						</div>
						<div class="speart_lt_record clearfix">

							<div class="speart_lt_record1"><img src="http://localhost/Application/Home/public/images/pers.png"></div>
							<div class="speart_lt_record2">
								<div class="speart_lt_record3">
									<div>小齐</div>
									<div>2017/3/7 15:38:37</div>
								</div>
								<div class="speart_lt_record4">学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看学习看看</div>
							</div>
						</div>
						<!-- 评论记录 -->
					</div>



				</div>

				<div class="speart_c_rt">
					<div class="speart_rt_auther">
						<div class="speart_rt_auther1">PROMULGATOR</div>
						<div class="speart_rt_auther2"><img src="http://localhost/Application/Home/public/images/pers.png"></div>
						<div class="speart_rt_auther3">昵称：小齐</div>
						<div class="speart_rt_auther4"><span class="glyphicon glyphicon-search"></span><a href="#">查看素材(325)</a></div>
						<div class="speart_rt_auther5"><span class="glyphicon glyphicon-heart-empty"></span><a href="#">收藏此素材</a></div>
					</div>

					<!-- 相关特效 -->
					<div class="speart_c_relati">

						<div class="speart_c_relati2">
							<div class="speart_c_relati3">相关特效&nbsp;<span>/Relative</span></div>
							<div class="speart_c_relati4"><a href="#">更多 ></a></div>
						</div>
						<div class="clearfix"></div>

						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
					</div>
					<!-- 相关特效 -->


					<!-- 推荐特效 -->
					<div class="speart_c_relati">

						<div class="speart_c_relati2">
							<div class="speart_c_relati3">推荐特效&nbsp;<span>/Relative</span></div>
							<div class="speart_c_relati4"><a href="#">更多 ></a></div>
						</div>
						<div class="clearfix"></div>

						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
					</div>
					<!-- 推荐特效 -->

					<!-- 最新特效 -->
					<div class="speart_c_relati">

						<div class="speart_c_relati2">
							<div class="speart_c_relati3">最新特效&nbsp;<span>/Relative</span></div>
							<div class="speart_c_relati4"><a href="#">更多 ></a></div>
						</div>
						<div class="clearfix"></div>

						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
						<div class="speart_c_relati5">
							<a href="#">html5 canvas简单跑酷……</a>
							<span>06-26</span>
						</div>
					</div>

					<!-- 最新特效 -->
				</div>
			</div>

		</div>
	</div>
	<!-- 内容区域 -->

	<div class="clearfix"></div>

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
	<script type="text/javascript" src="http://localhost/Application/Home/public/js/jq.js"></script>
</body>
</html>