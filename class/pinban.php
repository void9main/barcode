<?php
error_reporting(E_ALL ^ E_NOTICE);
require('fpdi.php');
	class PDF extends fpdi{}
    $zzk=320;$zzg=464;
    $cx=3;
	$pdfd=new PDF();
	$pdfd->SetMargins(0,0,0);
	$pdfd->SetAutoPageBreak(1,1);
    $pdfd->AddGBFont();
	$pdfd->Open();
	$pdfd->SetFont('GB','B',8);
	$pdfd->AliasNbPages();
	$pdfd->AddPage('L',array($zzk,$zzg));   //纸张大小 7600	
	$sfile="W67208A5010724967208N.pdf";
    if (substr($sfile,-3)=="pdf") {
		$pagecount = $pdfd->setSourceFile("{$sfile}");  //源文件pdf
		$tplidx = $pdfd->ImportPage(1); //文件的第一页
		$pdfd->useTemplate($tplidx,0,0,429,303);
//		if($pagecount%2!=0){
//		$pdfd->AddPage();
//	    }
	} elseif (substr($sfile,-3)=="jpg" or substr($sfile,-3)=="png") {
    	list($width, $height, $type, $attr) = getimagesize($sfile);
        $lmargin=($zzk - $width  )/2;   //左右居中
		$tmargin=($zzg - $height  )/2;;  //顶部留空
		$pdfd->Image($sfile, $lmargin,$tmargin,$width,$height);
        //裁切线
        for ($ii=0;$ii<=$ksl;$ii++) {
			$pdfd->line($lmargin+$width*$ii-$cx,$tmargin,$lmargin+$width*$ii-$cx,$tmargin-3);
			$pdfd->line($lmargin+$width*$ii,$tmargin,$lmargin+$width*$ii,$tmargin-3);
			$pdfd->line($lmargin+$width*$ii+$cx,$tmargin,$lmargin+$width*$ii+$cx,$tmargin-3);
			$pdfd->line($lmargin+$width*$ii-$cx,$tmargin+$mpg*$gsl,$lmargin+$width*$ii-$cx,$tmargin+$height*$gsl+3);
			$pdfd->line($lmargin+$width*$ii,$tmargin+$mpg*$gsl,$lmargin+$width*$ii,$tmargin+$height*$gsl+3);
			$pdfd->line($lmargin+$width*$ii+$cx,$tmargin+$mpg*$gsl,$lmargin+$width*$ii+$cx,$tmargin+$height*$gsl+3);
		}
		for ($ii=0;$ii<=$gsl;$ii++) {
			$pdfd->line($lmargin-3,$tmargin+$height*$ii-$cx,$lmargin,$tmargin+$height*$ii-$cx);
			$pdfd->line($lmargin-3,$tmargin+$height*$ii,$lmargin,$tmargin+$height*$ii);
			$pdfd->line($lmargin-3,$tmargin+$height*$ii+$cx,$lmargin,$tmargin+$height*$ii+$cx);
			$pdfd->line($lmargin+$mpk*$ksl+3,$tmargin+$height*$ii-$cx,$lmargin+$width*$ksl,$tmargin+$height*$ii-$cx);
			$pdfd->line($lmargin+$mpk*$ksl+3,$tmargin+$height*$ii,$lmargin+$width*$ksl,$tmargin+$height*$ii);
			$pdfd->line($lmargin+$mpk*$ksl+3,$tmargin+$height*$ii+$cx,$lmargin+$width*$ksl,$tmargin+$height*$ii+$cx);
		}
	}
    $pdfd->setxy(8,$tmargin+$height+$cx);  //输出文字位置
	$pdfd->cell(0,5,mb_convert_encoding("$sfile","gbk","utf8"),0,1);
    $fileout="aa.pdf";
	$pdfd->Output($fileout, 'F');
	$pdfd->close();
	unset($pdfd);
