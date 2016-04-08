<?php
$conn = @ mysql_connect("localhost", "root", "root");    //数据库账号密码
mysql_select_db("barcode", $conn);     //数据库名
mysql_query("set names 'utf8'"); //使用utf中文编码;
?>