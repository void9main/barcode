<meta charset="utf-8" />
<?php
error_reporting(E_ALL ^ E_NOTICE);

require "../class/fpdi.php";
require "../sql_data/sql.php";

	class PDF extends fpdi{}
	$res=get_nurl();
    while($row=@mysql_fetch_array($res)){            //封面地址数组
    	$arr[]=$row['pdfn_url'];                    
    }
      
    foreach($arr as $sfile){                               //error can`t open
    $pdfd=new PDF();
	$pdfd->SetMargins(0,0,0);
	$pdfd->SetAutoPageBreak(1,1);                          
    $pdfd->AddGBFont();
	$pdfd->Open(); 
	$size=$pdfd->getTemplateSize($tplidx); 
	$a=$size['w'];
	$b=$size['h'];
	$pagecount = $pdfd->setSourceFile("{$sfile}");  //源文件pdf
	$tplidx = $pdfd->ImportPage(1); //文件的第一页
	$tplidx = $pdfd->ImportPage($i); 
	$pdfd->AddPage('P',array($a,$b));   //纸张大小 7600	
	$pdfd->useTemplate($tplidx,0,0,$a,$b);
	$fileout="../finish/N.pdf";
	$pdfd->Output($fileout, 'F');
	$pdfd->close();
	unset($pdfd);
  }
}
	echo "<script>alert('成功打包！');location.href='../index.php'</script>";
?>
