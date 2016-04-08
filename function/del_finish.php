<meta charset="utf-8" />
<?
require "../sql_data/sql.php";
	function del_DirAndFile($dirName){

    if(is_dir($dirName)){

        echo "<br /> ";

        if ( $handle = opendir( "$dirName" ) ) {  

          while ( false !== ( $item = readdir( $handle ) ) ) {  

              if ( $item != "." && $item != ".." ) {  

                  if ( is_dir( "$dirName/$item" ) ) {  

                      del_DirAndFile( "$dirName/$item" );  

                  } else {  

                      if( unlink( "$dirName/$item" ) );  

                  }  

              }  

          }  
      closedir( $handle );  
//     if( rmdir( $dirName ) ) echo "已删除目录: $dirName<br /> ";  

        }
    }
}
	del_DirAndFile('../finish/');
	changen_code_del();
	changef_code_del();
    echo "<script>alert('生成文件夹被清空');location.href='../index.php'</script>";
	
?>