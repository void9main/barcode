<?
require "./sql_data/sql.php";
	class download{
		function down_file($filename,$name){                               //下载函数1
        $file  =  fopen($filename, "rb"); 
        Header( "Content-type:  application/octet-stream "); 
        Header( "Accept-Ranges:  bytes "); 
        Header( "Content-Disposition:  attachment;  filename= ../source/$name.doc"); 
        $contents = "";
        while (!feof($file)) {
        $contents .= fread($file, 8192);
         }
        echo $contents;
        fclose($file); 
    }
//---------------------------------下载文件
		function filedown($url, $file="", $timeout=60) {
         $file = empty($file) ? pathinfo($url,PATHINFO_BASENAME) : $file;
         $dir = pathinfo($file,PATHINFO_DIRNAME);
         !is_dir($dir) && @mkdir($dir,0755,true);
          $url = str_replace("source/","%20",$url);
 
         if(function_exists('curl_init')) {
          $ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, $url);
          curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
          $temp = curl_exec($ch);
          if(@file_put_contents($file, $temp) && !curl_error($ch)) {
            return $file;
          } else {
             return false;
          }
         } else {
         $opts = array(
            "http"=>array(
            "method"=>"GET",
            "header"=>"",
            "timeout"=>$timeout)
         );
          $context = stream_context_create($opts);
         if(@copy($url, $file, $context)) {
            //$http_response_header
            return $file;
          } else {
            return false;
          }
       }
    }
//--------------------------远程下载文件方案2
function getFile($url,$save_dir='',$filename='',$type=0){
  if(trim($url)==''){
   return false;
  }
  if(trim($save_dir)==''){
   $save_dir='./';
  }
  if(0!==strrpos($save_dir,'/')){
   $save_dir.='/';
  }
  //创建保存目录
  if(!file_exists($save_dir)&&!mkdir($save_dir,0777,true)){
   return false;
  }
 //获取远程文件所采用的方法
 if($type){
  $ch=curl_init();
  $timeout=5;
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
  $content=curl_exec($ch);
  curl_close($ch);
 }else{
  ob_start();
  readfile($url);
  $content=ob_get_contents();
  ob_end_clean();
}
 $size=strlen($content);
 //文件大小
 $fp2=@fopen($save_dir.$filename,'a');
 fwrite($fp2,$content);
 fclose($fp2);
 unset($content,$url);
 return array('file_name'=>$filename,'save_path'=>$save_dir.$filename);
}
//--------------------------下载文件名，分割
		function expl_name($str,$string,$length){                        
	    $text=explode($str, $string);
	    return $text[$length];	
	} 	
//----------------生成数字签名的函数
		function fileMd5($file){
	    $ct = file_get_contents($file);
        return md5($ct);
    } 		
	   function get_URL($url)//获得url地址的网页内容
       {
         $ch = curl_init();
         $timeout = 5; 
         curl_setopt ($ch, CURLOPT_URL,$url);
         curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1); 
         curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
         $file_contents = curl_exec($ch);
         curl_close($ch);
         return $file_contents;
    }

//-------------- 随机生成10位的名字
	function GetRandStr($len) 
{ 
    $chars = array( 
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",  
        "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v",  
        "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G",  
        "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R",  
        "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2",  
        "3", "4", "5", "6", "7", "8", "9" 
    ); 
    $charsLen = count($chars) - 1; 
    shuffle($chars);   
    $output = ""; 
    for ($i=0; $i<$len; $i++) 
    { 
        $output .= $chars[mt_rand(0, $charsLen)]; 
    }  
    return $output;  
  }
}
?>