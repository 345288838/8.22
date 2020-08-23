<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-23 10:56:03
  from 'E:\wamp64\www\php\mvc\application\template\admin\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f424b43528d71_49103576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1aa1da5e605267e5f88496b625cf7434ecae8bc1' => 
    array (
      0 => 'E:\\wamp64\\www\\php\\mvc\\application\\template\\admin\\index.html',
      1 => 1598180161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f424b43528d71_49103576 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body,html{
            height:100%;width: 100%;
        }
        body{
            margin: 0;padding: 0;
        }
        ul,li{
            margin: 0;list-style: none;

        }
        a{
            text-decoration: none;
            color: #31b0d5;
            font-size: 20px;
        }
        .header{
            width:100%;min-height:25%;background: #68b1f5;text-align: center;padding-top:50px;box-sizing: border-box;

        }
        .main{
            margin-top: 0;
            width:100%;height:70%;
        }
        .left{

            width:20%;height: 100%;border-right:5px solid #68b1f5 ;box-sizing: border-box;float: left;
        }
        .right{
            width:80%;height: 100%;
            float: left;
        }
        .bottom{
            width:100%;min-height:10%;text-align: center;background: #68b1f5;padding-top: 30px;box-sizing: border-box;
        }
        .logininfo{
            font-size: 20px;
            float:right;margin-right: 30px;font-weight: bold;
        }

    </style>
    <title>Document</title>
</head>
<body>
<div class="header">
    <h1 style="color: #2f2a27">欢迎来到xx后台管理系统</h1>
    <div class="logininfo">
        <span style="">用户:<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
        <div style="margin-top: 20px">
        <span ><a href=" <?php echo ENTRY_ADD;?>
/admin/index/logout" style="color: #4c4848;">退出
            <img src="<?php echo IMG_ADD;?>
exit.png" alt="" style="width:30px;height:30px;vertical-align: middle;">
        </a></span></div>
    </div>
</div>
<div class="main">
    <div class="left">

   <ul style="font-size: 25px">
       <li>
           用户管理
           <ul>
               <li><a href="<?php echo APP_ADD;?>
template/admin/adduser.html" target="main">添加用户</a></li>
               <li><a href="<?php echo APP_ADD;?>
template/admin/edituser.html" target="main">修改用户</a></li>
           </ul>
       </li>
       <li>
           栏目管理
           <ul>
               <li><a href="">添加栏目</a></li>
               <li><a href="">修改栏目</a></li>
           </ul>
       </li>
       <li>
           内容管理
           <ul>
               <li><a href="">添加内容</a></li>
               <li><a href="">修改内容</a></li>
           </ul>
       </li>
   </ul>

    </div>
    <div class="right">
        <iframe src="" frameborder="0" name="main" style="width: 100%;height: 100%"></iframe>
    </div>
</div>
<div class="bottom">
    <span>XXX版权信息| XXX制作| 联系电话:XXXXXXXXXX</span>
</div>
</body>
</html><?php }
}
