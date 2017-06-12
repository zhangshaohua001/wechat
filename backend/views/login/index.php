<?php
use yii\helpers\Url;
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>管理系统后台登陆</title>
    <script src="/js/jquery-1.9.1.min.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/webmain.css">
    <style>
        .lmaisft{
            width:450px;border-radius:5px;
            text-align:left;
            background-color:#C4E0F4;
            background: rgba(255,255,255,0.3);
        }
    </style>

</head>
<body style="background:#66A8E5 url(/images/loginbg.jpg) top center no-repeat">
<div id="topheih" class="blank40" style="height: 141.5px;"></div>
<div align="center" style="margin-top: -60px;">
    <div class="ltoplog">
        <img src="/images/logo.png" align="absmiddle" style="margin-right:15px;" height="60" width="60">
        <b style="font-size:22px">后台管理系统</b></div>
    <div class="blank30"></div>
    <div class="lmaisft">

        <form style="padding:20px;padding-left:80px;" name="myform" action="<?=Url::toRoute('/login/login')?>" method="post">

            <div class="blank10"></div>
            <div>
                <div><input type="text" style="height:40px;width:300px" class="input" value=""  placeholder="请输入用户名" name="username" ></div>
            </div>

            <div class="blank30"></div>
            <div>
                <div><input  style="height:40px;width:300px" class="input"  name="password" id="adminpasss" type="password" placeholder="请输入密码"></div>
            </div>
            <div class="blank10"></div>
            <div align="left">
                <div class="checkbox"><label><input type="checkbox" checked name="rempass">记住密码</label>&nbsp; &nbsp;</div>
            </div>

            <div class="blank10"></div>
            <div align="left">
                <button type="submit" class="btn btn-success" name="button"><i class="glyphicon glyphicon-hand-up"></i> 登录</button>&nbsp;<span id="msgview"></span>
            </div>
        </form>

    </div>

    <div class="blank20"></div>
    <div align="center" style="height:30px;line-height:30px;color:#555555">
        Copyright &copy;2017 后台管理系统 &nbsp;&nbsp;
    </div>

</div>

</body>
</html>