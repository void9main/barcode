<?
    $id=$_GET['id'];   //获取id
    $id++;            //id加1
    header("Location:../api_down.php?id=$id");
?>