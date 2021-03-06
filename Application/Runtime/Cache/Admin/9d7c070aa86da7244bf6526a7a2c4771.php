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
          <a href="javascript:;">导航管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">添加导航</a></dd>
          </dl>
        </li>

        <li class="layui-nav-item">
          <a href="javascript:;">文章管理</a>
          <dl class="layui-nav-child">
            <dd><a href="javascript:;">添加文章</a></dd>
          </dl>
        </li>

        <li class="layui-nav-item"><a href="">素材管理</a></li>
        <li class="layui-nav-item"><a href="">今日新注册</a></li>
        <li class="layui-nav-item"><a href="">留言管理</a></li>
        <li class="layui-nav-item"><a href="">用户管理</a></li>
        <li class="layui-nav-item"><a href="">信息通知</a></li>
        <li class="layui-nav-item"><a href="">评论管理</a></li>
      </ul>
    </div>
  </div>
  <div class="layui-body">

    <!-- 内容主体区域 -->
    <div style="padding: 15px;">
    <span class="layui-breadcrumb">
      <a href="home.html">控制台</a>
      <a href="adminM.html">管理员管理</a>
      <a><cite>添加管理员</cite></a>
    </span>

    <form class="layui-form" action="" style="padding: 20px;">
      <div class="layui-form-item">
        <label class="layui-form-label">管理员昵称</label>
        <div class="layui-input-block">
          <input type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入昵称" class="layui-input">
        </div>
      </div>
      <div class="layui-form-item">
        <label class="layui-form-label">密码</label>
        <div class="layui-input-block">
          <input type="text" name="username" lay-verify="required" placeholder="不填默认为123456" autocomplete="off" class="layui-input">
        </div>
      </div>
      
      <div class="layui-form-item">
        <div class="layui-inline">
          <label class="layui-form-label">验证手机</label>
          <div class="layui-input-inline">
            <input type="tel" name="phone" lay-verify="required|phone" autocomplete="off" class="layui-input">
          </div>
        </div>
        <div class="layui-inline">
          <label class="layui-form-label">验证邮箱</label>
          <div class="layui-input-inline">
            <input type="text" name="email" lay-verify="email" autocomplete="off" class="layui-input">
          </div>
        </div>
      </div>
      
          
      <div class="layui-form-item">
        <label class="layui-form-label">管理员类型</label>
        <div class="layui-input-block">
          <select name="interest" lay-filter="aihao">
            <option value=""></option>
            <option value="0">超级管理员</option>
            <option value="1">普通管理员</option>
          </select>
        </div>
      </div>
         
      
      <div class="layui-form-item" pane="">
        <label class="layui-form-label">权限</label>
        <div class="layui-input-block">
          <input type="checkbox" name="like1[write]" lay-skin="primary" title="管理员管理" checked="">
          <input type="checkbox" name="like1[read]" lay-skin="primary" title="文章管理">
          <input type="checkbox" name="like1[game]" lay-skin="primary" title="注册用户管理">
        </div>
      </div>
      
      <div class="layui-form-item layui-form-text">
        <label class="layui-form-label">管理员信息</label>
        <div class="layui-input-block">
          <textarea placeholder="关于管理员的备注信息" class="layui-textarea"></textarea>
        </div>
      </div>

      <div class="layui-form-item">
        <div class="layui-input-block">
          <button class="layui-btn" lay-submit="" lay-filter="demo1">立即提交</button>
          <button type="reset" class="layui-btn layui-btn-primary">重置</button>
        </div>
      </div>
    </form>
    </div>
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