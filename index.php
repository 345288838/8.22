<?php
header("content-type:text/html;charset=utf8");
define("MVC",true);//记录一个口令
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);//应用文件夹  __DIR__当前程序运行的目录 在本地文件夹的地址

require_once "libs/start.php";

//echo __FILE__;  在本地文件地址
//echo __CLASS__;  当前类的名字
//echo __METHOD__;  当前函数的名字
//echo __LINE__; 当前程序所在行
// DIRECTORY_SEPARATOR ; 当前系统中所用的斜杠


//define("ENTRY",true);
//$action=isset($_GET["action"])?$_GET["action"]:"";
//if($action){
//    if(is_file($action.".php")){
//        include_once $action.".php";
//    }else{
//        echo "page not exit";
//    }}else{
//        echo "first page";
//}
?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--    <style>-->
<!--        ul,li{-->
<!--            padding: 0;-->
<!--            margin: 0;-->
<!--            list-style: none;-->
<!--        }-->
<!--        div{-->
<!--            width: 200px;-->
<!--            height: 200px;-->
<!--            border: 1px solid #00b3ff;-->
<!--        }-->
<!--    </style>-->
<!--</head>-->
<!--<body>-->
<!--   <div>-->
<!--       <ul>-->
<!--           --><?php
//             $data=include_once "database.php";
//             foreach ($data as $v){
//           ?>
<!--                 <li>--><?php
//                     echo $v["name"]
//                     ?><!--</li>-->
<!--           --><?php
//             }
//           ?>
<!--       </ul>-->
<!--   </div>-->
<!--</body>-->
<!--</html>-->
