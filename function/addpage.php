<meta charset="utf-8" />
<?php
error_reporting(E_ALL ^ E_NOTICE);
set_time_limit(6000);
ini_set('memory_limit', '-1');
require "../class/fpdi.php";
require "../sql_data/sql.php";

	class PDF extends fpdi{}
	$res=get_nurl();
    while($row=@mysql_fetch_array($res)){            //封面地址数组
    	$arr[]=$row['pdfn_url'];                    
    }
    $ress=get_log();
	 while($row=@mysql_fetch_array($ress)){            //封面地址数组
    	$arrs[]=$row['log'];                    
    }
	   
    foreach($arr as $key => $val){                               //error can`t open
    $pdfd=new PDF();
	$pdfd->SetMargins(0,0,0);
	$pdfd->SetAutoPageBreak(1,1);                          
    $pdfd->AddGBFont();
	$pdfd->Open(); 
	$a1=154.2;
	$b1=217;
	$a2=148;
	$b2=210;
	$sfile=$arr[$key];
//	echo $arrs[$key];
	$pagecount = $pdfd->setSourceFile("{$sfile}");  //源文件pdf
	if($arrs[$key]==1){
		$name="";
	}else{
		$name="--".$arrs[$key]."book";
	}
//	$size=$pdfd->getTemplateSize($tplidx); 
	
//	$a=$size['w'];
//	$b=$size['h'];
//	$tplidx = $pdfd->ImportPage(1); //文件的第一页
//	$size=$pdfd->getTemplateSize($tplidx);          //源文件格式大小
//	$a=$size['w'];
//	$b=$size['h'];
    if($pagecount%2==0){
    $tplidx = $pdfd->ImportPage(1); //文件的第一页
	for($i=1;$i<=$pagecount;$i++){
	$tplidx = $pdfd->ImportPage($i); 
	$pdfd->AddPage('P',array($a1,$b1));   //纸张大小 7600	
	$pdfd->useTemplate($tplidx,5,5,$a2,$b2);
	}
	$fileout="../finish/".substr($sfile,10,-4).$name.".pdf";
	$pdfd->Output($fileout, 'F');
	$pdfd->close();
	unset($pdfd);
	}else{
//	$size=$pdfd->getTemplateSize($tplidx);          //源文件格式大小
//	$a=$size['w'];
//	$b=$size['h'];	
	$tplidx = $pdfd->ImportPage(1); //文件的第一页
	for($i=1;$i<=$pagecount-1;$i++){
	$tplidx = $pdfd->ImportPage($i); 
	$pdfd->AddPage('P',array($a1,$b1));   //纸张大小 7600	
	$pdfd->useTemplate($tplidx,5,5,$a2,$b2);
	}
	$fileout="../finish/".substr($sfile,10,-4).$name.".pdf";
	$pdfd->Output($fileout, 'F');
	$pdfd->close();
	unset($pdfd);
  }
}
//  $pdfd->useTemplate($tplidx,0,0,$a,$b);
//	$fileout="../finish/".substr($sfile,10,-4).".pdf";   //发送到指定的位置
//  $fileout="../finish/N.pdf";   //发送到指定的位置
//	$pdfd->Output($fileout, 'F');
//	$pdfd->close();
//	unset($pdfd);
    changen_code();
	echo "<script>alert('成功生成！');location.href='../index.php'</script>";
?>