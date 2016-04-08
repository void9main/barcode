<meta charset="utf-8">
<?
require "../sql_data/sql.php";

$res=delete_data();
if($res!=true){
	echo "<script>alert('数据为空');location.href='../index.php'</script>";
}else{
	echo "<script>alert('数据清空失败');location.href='../index.php'</script>";
}
?>