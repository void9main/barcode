<?
set_time_limit (300);         //修该脚本处理时间
ini_set('memory_limit', '-1');
error_reporting(E_ALL ^ E_NOTICE);     //屏蔽警告
require "class/download.class.php";
require "class/order.class.php";

$order=new order();
$down=new download();
$keyword="9574C6D4-201A-4FE6-BAFB-63836E29DB30";
$command_getorder="orderDownload"; 
    
//--------------数据以及类的初始化
    $arr_id=get_id();
    while($row_id=@mysql_fetch_array($arr_id)){                //获取down=0的id
    	$arr_i[]=$row_id['Id'];                    
    }
	$a=0;
if(is_array($arr_i)){
foreach($arr_i as $uid){
	$id=$uid;
	//-------生成数字签名
	$arr_uid_cov=get_pdf_covurl($id);                               
	while($row_covurl=@mysql_fetch_array($arr_uid_cov)){             
    	$arr_cov_url[]=$row_covurl['cover_url'];
		//foreach($arr_cov_url as $value){
            $key_md5_cov=$down->fileMd5($arr_cov_url[$a]);   //数字签名  
			 
	// }                             
			$filec=$down->filedown($arr_cov_url[$a]);            //下载cover	
			$filename_s=$down->GetRandStr(15);
			$filename=mb_substr($filename_s,0,15);
			$row=get_delivermsg($id);
			$rows=get_amount($id);
            $newFile='source/'.$filename.'F.pdf'; //新目录
            copy($filec,$newFile); //拷贝到新目录
            $str=explode("|", $row['deliverMsg']);
            $files = fopen("source/".$filename."F.txt",'w');
            fwrite($files,"210P 制作".$rows['amount']."本-------".$str[1]."，".$str[2]."，".$str[3]);
            fclose($files);
            unlink($filec);
//          //-------添加txt解释文档
//         
            update_down($uid);
		                    
    } 
	//-------cover的url
    $arr_md5_cov=get_pdf_covmd5($uid);		
	while($row_covmd5=@mysql_fetch_array($arr_md5_cov)){
		$arr_cov_md5[]=$row_covmd5['cover_md5'];
	  foreach($arr_cov_md5 as $val){
		if($key_md5_cov==$val){
			$arr_no=get_orderNo($uid);
			$no=$arr_no[0];
			$time=time();
			$request = ['command' => $command_getorder,'id'=>$no,'reqtime'=>$time];
            $key = $order->generate_sign($request, $keyword);
            $json=$down->get_URL("http://qabook.indatou.com/printer/index?".http_build_query($request));
            //---------处理下载完成的json值
            $json_arr=json_decode($json,TRUE);
			  if($json_arr['errorCode']=="ok"){
			  	
			  }
            }else{
            header("Location:function/down_error.php");   	
           }
			//fclose($json);
	    }
	}
	//-------cover的md5
	$arr_uid_con=get_pdf_conurl($id);
	while($row_conurl=@mysql_fetch_array($arr_uid_con)){
		$arr_con_url[]=$row_conurl['content_url'];
//		foreach($arr_con_url as $values){
			$key_md5_con=$down->fileMd5($arr_con_url[$a]);  //数字签
		
			$filen=$down->filedown($arr_con_url[$a]);            //下载cover		
            $newFile='source/'.$filename.'N.pdf'; //新目录
            copy($filen,$newFile); //拷贝到新目录
            unlink($filen);
			update_down($uid);
//		 }   
	}
	//------content的url
	$arr_md5_con=get_pdf_conmd5($uid);
	while($row_conmd5=@mysql_fetch_array($arr_md5_con)){
		$arr_con_md5[]=$row_conmd5['content_md5'];
	  foreach($arr_con_md5 as $val){
		if($key_md5_con==$val){
		   $arr_no=get_orderNo($uid);
		   $no=$arr_no[0];
		   $time=time();
		   $request = ['command' => $command_getorder,'id'=>$no,'reqtime'=>$time];
           $key =$order->generate_sign($request, $keyword);
           $request['key'] = $key;	   
           $json=$down->get_URL("http://qabook.indatou.com/printer/index?".http_build_query($request));
//		   echo "http://notify.in66.cc:1180/printer/index?command=$command_getorder&id=$no&key=$key";
           $json_arr=json_decode($json,TRUE);
			  if($json_arr['errorCode']=="ok"){
			  	
			  }           
		   }else{
            header("Location:function/down_error.php");   	
           }
		   //fclose($json);
	    }
	 }
	$a++;
	//------content的md5
  }
}
//---------循环检索数据库
?>