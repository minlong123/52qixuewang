<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>素材后台管理系统</title>
  <link rel="stylesheet" href="http://localhost/Application/Admin/public/css/layui.css">
</head>
<body class="layui-layout-body">

<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">后台管理系统</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="/index.php/Admin/Index">控制台</a></li>
      <li class="layui-nav-item"><a href="">用户管理</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">系统信息配置</a></dd>
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
          闵龙
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">基本资料</a></dd>
          <dd><a href="">安全设置</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="">退出</a></li>
    </ul>
  </div>
  <div class="layui-side layui-bg-black">

    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree"  lay-filter="test">
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="/index.php/Admin/Adminme/index">管理员管理</a>
          <dl class="layui-nav-child">
            <dd><a href="/index.php/Admin/Adminme/add">添加管理员</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;">文章管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">添加文章</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="">管理员权限管理</a></li>
        <li class="layui-nav-item"><a href="">注册用户管理</a></li>
        <li class="layui-nav-item"><a href="">导航管理</a></li>
        <li class="layui-nav-item"><a href="">留言管理</a></li>
        <li class="layui-nav-item"><a href="">轮播图管理</a></li>
        <li class="layui-nav-item"><a href="">评论管理</a></li>
        <li class="layui-nav-item"><a href="">滚动信息框管理</a></li>
      </ul>
    </div>
  </div>
  <div class="layui-body">

    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
        管理员的修改
    </div>

    
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
      备案相关信息
  </div>
</div>
<script src="http://localhost/Application/Admin/public/layui.all.js"></script>
<script type="text/javascript">
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>