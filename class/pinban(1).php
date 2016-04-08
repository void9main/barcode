<?php
require('fpdi.php');
class PDF_EAN13 extends fpdi    //PDF_Chinese
{
function EAN13($x, $y, $barcode, $h=8, $w=.35)             //高度宽度
{        $this->Barcode($x,$y,substr($barcode,0,12),$h,$w,13);}
function UPC_A($x, $y, $barcode, $h=16, $w=.35)
{        $this->Barcode($x,$y,$barcode,$h,$w,12);}
function GetCheckDigit($barcode)
{        //Compute the check digit
        $sum=0;
        for($i=1;$i<=11;$i+=2) $sum+=3*$barcode[$i];
        for($i=0;$i<=10;$i+=2) $sum+=$barcode[$i];
        $r=$sum%10;
        if($r>0) $r=10-$r;
        return $r;
}
function TestCheckDigit($barcode)
{        //Test validity of check digit
        $sum=0;
        for($i=1;$i<=11;$i+=2) $sum+=3*$barcode[$i];
        for($i=0;$i<=10;$i+=2) $sum+=$barcode[$i];
        return ($sum+$barcode[12])%10==0;
}
function Barcode($x, $y, $barcode, $h, $w, $len)
{        //Padding
        $barcode=str_pad($barcode,$len-1,'0',STR_PAD_LEFT);
        if($len==12) $barcode='0'.$barcode;
        //Add or control the check digit
        if(strlen($barcode)==12) 
			$barcode.=$this->GetCheckDigit($barcode);
        elseif(!$this->TestCheckDigit($barcode))
                $this->Error('Incorrect check digit:'.$barcode);
        //Convert digits to bars
        $codes=array(
                'A'=>array(
                        '0'=>'0001101','1'=>'0011001','2'=>'0010011','3'=>'0111101','4'=>'0100011',
                        '5'=>'0110001','6'=>'0101111','7'=>'0111011','8'=>'0110111','9'=>'0001011'),
                'B'=>array(
                        '0'=>'0100111','1'=>'0110011','2'=>'0011011','3'=>'0100001','4'=>'0011101',
                        '5'=>'0111001','6'=>'0000101','7'=>'0010001','8'=>'0001001','9'=>'0010111'),
                'C'=>array(
                        '0'=>'1110010','1'=>'1100110','2'=>'1101100','3'=>'1000010','4'=>'1011100',
                        '5'=>'1001110','6'=>'1010000','7'=>'1000100','8'=>'1001000','9'=>'1110100')
                );
        $parities=array(
                '0'=>array('A','A','A','A','A','A'),
                '1'=>array('A','A','B','A','B','B'),
                '2'=>array('A','A','B','B','A','B'),
                '3'=>array('A','A','B','B','B','A'),
                '4'=>array('A','B','A','A','B','B'),
                '5'=>array('A','B','B','A','A','B'),
                '6'=>array('A','B','B','B','A','A'),
                '7'=>array('A','B','A','B','A','B'),
                '8'=>array('A','B','A','B','B','A'),
                '9'=>array('A','B','B','A','B','A')
                );
        $code='101';
        $p=$parities[$barcode[0]];
        for($i=1;$i<=6;$i++)
                $code.=$codes[$p[$i-1]][$barcode[$i]];
        $code.='01010';
        for($i=7;$i<=12;$i++)
                $code.=$codes['C'][$barcode[$i]];
        $code.='101';
        //Draw bars
        for($i=0;$i<strlen($code);$i++)
        {
                if($code[$i]=='1')
                        $this->Rect($x+$i*$w,$y,$w,$h,'F');
        }
        //Print text uder barcode
        //$this->SetFont('Arial','',12);
        //$this->Text($x,$y+$h+11/$this->k,substr($barcode,-$len));
}
}
//$pdf=new PDF_EAN13();
//$pdf->EAN13($x,$y,$ss);  
//$ss为12位数字

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
    if (substr($sfile,-3)=="pdf") {
		$pagecount = $pdfd->setSourceFile("{$sfile}");  //源文件pdf
		$tplidx = $pdfd->ImportPage(1); //文件的第一页
		$pdfd->useTemplate($tplidx,0,0,429,303);                      //覆盖文件的大小和具体的位置
	} elseif (substr($sfile,-3)=="jpg" or substr($sfile,-3)=="png") { //判断图片传入的格式通过substr函数来进行判断
    	list($width, $height, $type, $attr) = getimagesize($scfile);  //获取目前传入的图片的大小
        $lmargin=($zzk - $width  )/2;   //左右居中
		$tmargin=($zzg - $height  )/2;;  //顶部留空
		$pdfd->Image($sfile, $lmargin,$tmargin,$width,$height);      
        //裁切线
        for ($ii=0;$ii<=$ksl;$ii++) {                    //裁切线
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
	$fileout="kk.pdf";
	$pdfd->Output($fileout, 'F');
	$pdfd->close();
	unset($pdfd);
