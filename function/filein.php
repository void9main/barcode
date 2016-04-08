<meta charset="utf-8">
<?php 
error_reporting(E_ALL ^ E_NOTICE);
require "../sql_data/sql.php";
require "../class/barcode.php";

$hostdir="../source";
//$hostdir=dirname(__FILE__);
//获取本文件目录的文件夹地址
$filesnames = scandir($hostdir);
//获取也就是扫描文件夹内的文件及文件夹名存入数组 $filesnames
  //print_r ($filesnames);
$a=1;

//------------删除同样的字符
function mbstringtoarray($str,$charset) {
  $strlen=mb_strlen($str);
  while($strlen){
    $array[]=mb_substr($str,0,1,$charset);
    $str=mb_substr($str,1,$strlen,$charset);
    $strlen=mb_strlen($str);
  }
  return $array;
}
function GetRandStr($length){
$str='0123456789';
$len=strlen($str)-1;
$randstr='';
for($i=0;$i<$length;$i++){
$num=mt_rand(0,$len);
$randstr .= $str[$num];
}
return $randstr;
}
//------------删除同样的字符

foreach ($filesnames as $name) {
//echo $name; 
//$url="http://www.****.com//".$name;
if($name!="."&$name!=".."){    //去除san函数的头
if(substr($name,-5)=="F.txt"){
$content=fopen("../source/$name","r");    //读取为数组
$string =fgets($content);
//$filestart=explode("P", $string);
$filecontent=explode("，", $string);

//  foreach($filestart as $newstr){
//      echo $newstr."</br>"; 
//  }

$barcode=GetRandStr(12);
	  $b=$a++;
//	$barcode=123456789012+$b;
	  $pdf_url="../source/".substr($name,0, -4).".pdf";       //封面pdf的地址
	  $pdfn_url="../source/".substr($name,0,-5)."N.pdf";      //内页pdf的地址
//    $page=$filestart[0];          
//	  echo $pdfn_url;
//	  echo $pdf_url;
    $namearr=explode("P", $filecontent[0]);                 //姓名页数数组
    $page=$namearr[0]."P";                                  //页数
    $names=$namearr[1];                                      //姓名
    $phone=$filecontent[1];                                 //电话
	  $address=$filecontent[2];                               //地址
	  if(strlen($names)>20){
	    $data=explode("作", $names);
		  foreach($data as $val){
		  $data1=explode("本", $val);
		  }
		  $data2=explode("-", $names);
//		data3=serialize($data2);
//	  echo $data3;
		  $log=$data1[0];                                       //备注
//		var_dump($data2);
//		echo $log;
      foreach($data2 as $data3){
		  $arr = mbstringtoarray($data3,"utf8"); //分割字符串
		  }
      $arr =array_unique($arr);          //过滤重复字符
      $name = implode('',$arr);            //合并数组  
//      echo $name;
//		  var_dump($data1);
	  }else{
	  	$name=$names;
		  $log="1";
	  }
//  echo strlen($name)."</br>";
	  //----获取文件大小种类
	  $pdf=new PDF_EAN13();
    $pagecount = $pdf->setSourceFile("{$pdf_url}");  //源文件pdf
	  $tplidx = $pdf->ImportPage(1);                 //文件的第一页
	  $size=$pdf->getTemplateSize($tplidx);          //源文件格式大小
	  $w=$size['w'];
	  if($w<400){
	  	$book_type="1";
	  }else{
	  	$book_type="2";
	  }
	  //-------
	  $res=InsDataToSql($barcode, $pdf_url, $name, $page, $phone, $address, $pdfn_url, $book_type,$log);   //插入数据  
	  $ress=InsDataToSql_data($barcode, $pdf_url, $name, $page, $phone, $address, $pdfn_url, $book_type, $log);    //插入数据到固定数据库
//  echo $name;
//  echo $page;
//  var_dump($namearr);
//  foreach($filecontent as $newstr){
//      echo $newstr."</br>"; 
//  }
//   echo $phone."</br>";
//   echo $address;
	   //echo $filecontent;
	   //var_dump($filecontent);
     //var_dump($content);
     //echo $content;
//   var_dump($filestart);
//   echo fgets($content);
//$aurl= "$name";
//echo $aurl . "<br/>";		
}
if(substr($name,-3)=="pdf"){
	
	
//$aurl= "$name";
//echo $aurl . "<br/>";	
}
}
}
if($res!=TRUE){
	  	echo "<script>alert('导入成功！');location.href='../index.php'</script>";
	  }else{
	  	echo "<script>alert('导入失败，重新导入！');location.href='../index.php'</script>";
	  }
?>