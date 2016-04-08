<meta charset="utf-8">
<?php 
$DST_DIR = '../source/';
if ($_FILES['file']['name'] != '') {
    if ($_FILES['file']['error'] > 0) {
       echo "<script>alert('上传失败！');location.href='../index.php'</script>";
    }
    else {
        if (move_uploaded_file($_FILES['file']['tmp_name'], $DST_DIR.$_FILES['file']['name'])) {
            echo "<script>alert('上传成功！');location.href='../index.php'</script>";
        }
        else {
            echo "<script>alert('上传失败!请重新上传');location.href='../index.php'</script>";
        }
    }
}
else {
    echo "<script>alert('请选择文件');location.href='../index.php'</script>";
}
