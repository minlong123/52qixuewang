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
        <a><cite>管理员管理</cite></a>
      </span>
       <div class="layui-form">
        <table class="layui-table">
          <colgroup>
            <col width="150">
            <col width="150">
            <col width="200">
            <col>
          </colgroup>
          <thead>
            <tr>
              <th>管理员</th>
              <th>上一次登录时间</th>
              <th>上一次登录地址</th>
              <th>权限</th>
              <th>操作</th>
            </tr> 
          </thead>
          <tbody>
            <tr>
              <td>贤心</td>
              <td>汉族</td>
              <td>1989-10-14</td>
              <td>人生似修行</td>
              <td>
                <button class="layui-btn layui-btn-disabled">超级管理员</button>
              </td>
            </tr>
            <tr>
              <td>张爱玲</td>
              <td>汉族</td>
              <td>1920-09-30</td>
              <td>于千万人之中遇见你所遇见的人，于千万年之中，时间的无涯的荒野里…</td>
              <td>
                 <div class="layui-btn-group">
                  <button class="layui-btn ">编辑</button>
                  <button class="layui-btn">删除</button>
                 </div>
              </td>
            </tr>
            <tr>
              <td>Helen Keller</td>
              <td>拉丁美裔</td>
              <td>1880-06-27</td>
              <td> Life is either a daring adventure or nothing.</td>
              <td>
                 <div class="layui-btn-group">
                  <button class="layui-btn ">编辑</button>
                  <button class="layui-btn">删除</button>
                 </div>
              </td>
            </tr>
            <tr>
              <td>岳飞</td>
              <td>汉族</td>
              <td>1103-北宋崇宁二年</td>
              <td>教科书再滥改，也抹不去“民族英雄”的事实</td>
              <td>
                 <div class="layui-btn-group">
                  <button class="layui-btn ">编辑</button>
                  <button class="layui-btn">删除</button>
                 </div>
              </td>
            </tr>
            <tr>
              <td>孟子</td>
              <td>华夏族（汉族）</td>
              <td>公元前-372年</td>
              <td>猿强，则国强。国强，则猿更强！ </td>
              <td>
                 <div class="layui-btn-group">
                  <button class="layui-btn ">编辑</button>
                  <button class="layui-btn">删除</button>
                 </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div id="test1" style="text-align:center;"></div>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
      备案相关信息
  </div>
</div>
<script src="http://localhost/Application/Admin/public/layui.all.js"></script>
<script>
layui.use('laypage', function(){
  var laypage = layui.laypage;
  
  //执行一个laypage实例
  laypage.render({
    elem: 'test1' //注意，这里的 test1 是 ID，不用加 # 号
    ,count: 50 //数据总数，从服务端得到
  });
});
</script>
</body>
</html>