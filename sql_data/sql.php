<?
require "conn.php";
function page_id(){                                   //分页
    $sql="select count(id) from  `barcode` ";
    $str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function changef_code(){                                      //修改封面type
	$sql="UPDATE `barcode`.`barcode` SET `type` = '1'";
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function changen_code(){
	$sql="UPDATE `barcode`.`barcode` SET `typen` = '1'";
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function InsDataToSql($barcode, $pdf_url, $name, $page, $phone, $address, $pdfn_url, $book_type,$log){
	$sql="INSERT INTO `barcode`.`barcode` (`Id`, `type`, `barcode`, `pdf_url`, `name`, `page`, `phone`, `address`, `pdfn_url`, `book_type`,`log`)
	 VALUES (NULL, '0', '$barcode', '$pdf_url', '$name', '$page', '$phone', '$address', '$pdfn_url', '$book_type','$log')";
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function InsDataToSql_data($barcode, $pdf_url, $name, $page, $phone, $address, $pdfn_url, $book_type,$log){
	$sql="INSERT INTO `barcode`.`barcode_data` (`Id`, `type`, `barcode`, `pdf_url`, `name`, `page`, `phone`, `address`, `pdfn_url`, `book_type`,`log`)
	 VALUES (NULL, '0', '$barcode', '$pdf_url', '$name', '$page', '$phone', '$address', '$pdfn_url', '$book_type','$log')";
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function delete_data(){
	$sql="delete from `barcode`";
//	$sql="truncate `barcode`";
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function get_name(){                                        //获取姓名
	$sql="select `name` from `barcode`";
	$str=@mysql_query($sql);
	return $str;
}
function get_page(){                                         //获取印页
	$sql="select `page` from `barcode`";
	$str=@mysql_query($sql);
	return $str;
}
function get_address(){                                       //获取发货地址
	$sql="select `address` from `barcode`";
	$str=@mysql_query($sql);
	return $str;
}
function get_phone(){                                         //获取联系电话
	$sql="select `name` from `barcode`";
	$str=@mysql_query($sql);
	return $str;
}
function get_furl(){                                         //获取封面地址
	$sql="SELECT `pdf_url` FROM `barcode` ";
    $str=@mysql_query($sql);
	return $str;
}
function get_nurl(){                                         //获取内页地址
	$sql="SELECT `pdfn_url` FROM `barcode` ";
    $str=@mysql_query($sql);
	return $str;
}
function get_booktype(){
	$sql="select `book_type` from `barcode`";                //获取book_type
	$str=@mysql_query($sql);
    return $str;
}
function get_barcode(){                                      //获取barcode
	$sql="select `barcode` from `barcode`";
	$str=@mysql_query($sql);
	return $str;
}
function get_barcode_ajax($q){                                      //获取barcode
	$sql="select * from where `barcode`='$q'";
	$str=@mysql_query($sql);
	return $str;
}
function get_log(){                                          //获取印刷数量
	$sql="select `log` from `barcode`";
	$str=@mysql_query($sql);
	return $str;
}
function changef_code_del(){
	$sql="UPDATE `barcode`.`barcode` SET `type` = '0'";      //封面记录删除
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
function changen_code_del(){
	$sql="UPDATE `barcode`.`barcode` SET `typen` = '0'";     //内页记录删除
	$str=@mysql_query($sql);
    $res=@mysql_fetch_row($str);
    return $res;
}
//-----------------------封面，内页，条形码
function add_data($id, $errorCode, $orderNo, $deliverNo, $deliverMsg, $orderMemo, $download, $pro_strat, $pro_end,$amount,$bindingStyle){   //插入主题数据
     $sql="INSERT INTO `barcode`.`order` (`Id`, `errorCode`, `orderNo`, `deliverNo`, `deliverMsg`, `orderMemo`, `download`, `pro_strat`, `pro_end`,`amount`,`bindingStyle`)
      VALUES 
     ('$id', '$errorCode', '$orderNo', '$deliverNo', '$deliverMsg', '$orderMemo', '0', '$pro_strat', '$pro_end','$amount','$bindingStyle')";
     $str=@mysql_query($sql);
     return $str;
}
	 function add_del_data($uid,$cover_url,$cover_md5,$content_url,$content_md5){             //插入详细数据
	 $sql="INSERT INTO `barcode`.`order_detail` (`Id`, `uid`, `cover_url`, `cover_md5`, `content_url`, `content_md5`) VALUES 
	 (NULL, '$uid', '$cover_url', '$cover_md5', '$content_url', '$content_md5')";
     $str=@mysql_query($sql);
	 return $str;
}
	 function update_down($uid){                                //修改下载状态
	 $sql="UPDATE `barcode`.`order` SET `download` = '1' WHERE `order`.`Id` ='$uid'";
	 $str=@mysql_query($sql);
}
	 function get_id_max(){                                        //取出最大的id值
	 $sql="select MAX(id) from `order`";
     $str=@mysql_query($sql);
	 $res=@mysql_fetch_array($str);
	 return $res;	
}
	 function get_down(){                                     //获取download状态压入数组
	 $sql="select `download` from `order`";
     $str=@mysql_query($sql);
	 return $str;
}
     function get_id(){                                        //获取d=0的id
     $sql="select `Id` from `order` where `download`='0' ";	
	 $str=@mysql_query($sql);
	 return $str;	
}
	 function get_pdf_covurl($uid){                              //获取封面的url
     $sql="select `cover_url` from `order_detail` where `uid`='$uid'";	
     $str=@mysql_query($sql);
     return $str; 	
}
	 function get_pdf_conurl($uid){                                  //获取内页的url
	 $sql="select `content_url` from `order_detail` where `uid`='$uid'";	
     $str=@mysql_query($sql);
     return $str; 	
}
	 function get_pdf_covmd5($uid){                                  //获取内页的url
	 $sql="select `cover_md5` from `order_detail` where `uid`='$uid'";	
     $str=@mysql_query($sql);
     return $str; 	
}
	 function get_pdf_conmd5($uid){                                  //获取内页的url
	 $sql="select `content_md5` from `order_detail` where `uid`='$uid'";	
     $str=@mysql_query($sql);
     return $str; 	
}
	 function get_orderNo($uid){
	 $sql="select `orderNo` from `order` where `Id`='$uid'";
	 $str=@mysql_query($sql);
	 $res=@mysql_fetch_array($str);
	 return $res;
}
	 function get_delivermsg($id){
	 $sql="select `deliverMsg` from `order` where `Id`='$id'";
	 $str=@mysql_query($sql);
	 $res=@mysql_fetch_array($str);
	 return $res;
}
	 function get_amount($id){
	 $sql="select `amount` from `order` where `Id`='$id'";
	 $str=@mysql_query($sql);
	 $res=@mysql_fetch_array($str);
	 return $res;
}
//---------------------------获取微信书
     function add_photo_data($id,$errorCode,$orderNo,$deliverNo,$deliverMsg,$orderMemo){
     $sql="INSERT INTO `barcode`.`order` (`Id`, `errorCode`, `orderNo`, `deliverNo`, `deliverMsg`, `orderMemo`, `download`, `pro_strat`, `pro_end`,`amount`,`bindingStyle`)
      VALUES 
     ('$id', '$errorCode', '$orderNo', '$deliverNo', '$deliverMsg', '$orderMemo', '0')";
	 $str=@mysql_query($sql);
	 $res=@mysql_fetch_array($str);
	 return $res;	
}
?>


