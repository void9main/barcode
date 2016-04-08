<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<script type="text/javascript" src="../assets/js/base-loading.js" ></script>
	</head>
	<body>
<?php
require "../class/barcode.php";
require "../sql_data/sql.php";

    
    $pdf=new PDF_EAN13();
	$res=get_furl();
    while($row=@mysql_fetch_array($res)){            //封面地址数组
    	$arr[]=$row['pdf_url'];                    
    }
	$ress=get_booktype();                          //获取类型
	while($rows=@mysql_fetch_array($ress)){
		$arrs[]=$rows['book_type'];
	}
	$resss=get_barcode();                          
	while($rowss=@mysql_fetch_array($resss)){      //获取编码
		$arrss[]=$rowss['barcode'];
	}
	$ressss=get_log();                              //获取数量
	while($rowsss=@mysql_fetch_array($ressss)){
		$arrsss[]=$rowsss['log'];
	}
//	var_dump($arr);
//  -----------
foreach($arr as $key => $val){                            //循环
    
    $pagecount = $pdf->setSourceFile("{$arr[$key]}");  //源文件pdf
	$tplidx = $pdf->ImportPage(1);                 //文件的第一页
	$size=$pdf->getTemplateSize($tplidx);          //源文件格式大小
	//foreach($size as $value);
	$a=$size['w'];
	$b=$size['h'];
//	$pdf->AddPage('L',array($a,$b));
    if($arrsss[$key]==1){                            //判断生成的数量
    $pdf->AddPage('L',array($a,$b));
	}
//	echo $size['w'];
//	echo $size['h'];
//	foreach($size as $value)
//	{   
//		echo $value;
//	}
//    var_dump($size);
//    $pdf->AddPage('');
//   echo $arr[$key]."</br>";
//	 echo $arrs[$key]."</br>";
//	 echo $arrss[$key]."</br>";
//   echo $arrsss[$key]."</br>";
    if($arrsss[$key]==2){  
    if($arrs[$key]=="1"){
    $i=0;
    while($i<$arrsss[$key]){
    $pdf->AddPage('L',array($a,$b));                                 //经济精装版本
    $pdf->useTemplate($tplidx,0,0,$a,$b);                //拖进来覆盖
	$pdf->Image('../public/recover.jpg',109.5,191,30,30);  //用图片覆盖原来的条形码以及条形码所在的位置
	$x=111.5;
	$y=192;	
	$i++;
	$pdf->EAN13($x, $y, $arrss[$key]);
	}
//	echo $i;
//	echo $arrsss[$key]."</br>";
    }else if($arrs[$key]=="2"){
//  	if($arrsss[$key]!=1){
//      for($i=0;$i<$arrsss[$key];$i++){
	for($i=0;$i<$arrsss[$key];$i++){
	$pdf->AddPage('L',array($a,$b));                                       //文艺版本
    $pdf->useTemplate($tplidx,0,0,$a,$b);                //拖进来覆盖
	$pdf->Image('../public/recover.jpg',181.8,191,30,30);  //用图片覆盖原来的条形码以及条形码所在的位置
	$x=184.5;
	$y=192;	
	$pdf->EAN13($x, $y, $arrss[$key]);
//	echo $i;
//	echo $arrsss[$key]."</br>";
		}
//	  }else{
//	$pdf->useTemplate($tplidx,0,0,$a,$b);                //拖进来覆盖
//	$pdf->Image('../public/recover.jpg',181.8,191,30,30);  //用图片覆盖原来的条形码以及条形码所在的位置
//	$x=184.5;
//	$y=192;	
//	  }
	}
}else if($arrsss[$key]==1){
	if($arrs[$key]=="1"){
	$pdf->useTemplate($tplidx,0,0,$a,$b);                //拖进来覆盖
	$pdf->Image('../public/recover.jpg',109.5,191,30,30);  //用图片覆盖原来的条形码以及条形码所在的位置
	$x=111.5;
	$y=192;	
    }else if($arrs[$key]=="2"){                           //文艺版本
    $pdf->useTemplate($tplidx,0,0,$a,$b);                //拖进来覆盖
	$pdf->Image('../public/recover.jpg',181.8,191,30,30);  //用图片覆盖原来的条形码以及条形码所在的位置
	$x=184.5;
	$y=192;	
	}
  }
    $pdf->EAN13($x, $y, $arrss[$key]);
//    $fileout="../finish/".substr($arr[$key],10,-4).".pdf";
//	if($pagecount%2!=0){
//		$pdf->AddPage('');           //识别目前页数，然后选择奇数页变偶数
//	}
}
    $fileout="../finish/F.pdf";
    $pdf->Output($fileout, 'F');
 	changef_code();                           //修改状态
	$pdf->close();
	echo "<script>alert('成功生成！');location.href='../index.php'</script>";
?>
	</body>
</html>