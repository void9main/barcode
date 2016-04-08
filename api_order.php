<meta charset="utf-8">
<?
date_default_timezone_set("ETC/GMT-8");
error_reporting(E_ALL ^ E_NOTICE);
set_time_limit(0); 
ignore_user_abort(true); 
require "class/order.class.php";                                 //$content初始化
require "class/download.class.php";

//$i = 0 ; 
//while($i ++ < 200){ 
$res=get_id_max();
if($res[0]==""){
	$id=0;
}else{
	$id=$res[0]+1;
}
//--------------三维数组分割--------
//function array_merge_rec(&$array) {  // 参数是使用引用传递的
//  // 定义一个新的数组
//  $new_array = array ();
//  // 遍历当前数组的所有元素
//  foreach ( $array as $item ) {
//      if (is_array ( $item )) {
//          // 如果当前数组元素还是数组的话，就递归调用方法进行合并
//          array_merge_rec ( $item );
//          // 将得到的一维数组和当前新数组合并
//          $new_array = array_merge ( $new_array, $item );
//      } else {
//          // 如果当前元素不是数组，就添加元素到新数组中
//          $new_array [] = $item;
//      }
//  }
//  // 修改引用传递进来的数组参数值
//  $array = $new_array;
//}
//	array_merge_rec ($array);
//-----------三维数组分割---------------
$order=new order(); 
$down=new download();
$time = time();
$keyword="9574C6D4-201A-4FE6-BAFB-63836E29DB30";
$command_getorder="getOrder";
$request = ['command' => $command_getorder,'id'=>$id,'reqtime'=>$time];
$key =$order->generate_sign($request, $keyword);
$request['key'] = $key;
//echo $key;
//echo $id;
$json=$down->get_URL("http://qabook.indatou.com/printer/index?".http_build_query($request));
echo $json;
$json_array_a=json_decode($json,true);
//var_dump($json_array_a);
//is_array($json_array_a);
//echo $json_array_a['errorCode'];
if($json_array_a['errorCode']=="error"){
    exit;
}else if($json_array_a['errorCode']=="noid"){
	header("Location:function/order_noid.php?id='$id'");
    }else if($json_array_a['errorCode']=="nodata"){
   exit;               
	    }else if($json_array_a['errorCode']=="ok"){
	$errorCode=$json_array_a['errorCode'];                    
	$key=$json_array_a['key'];
	$json_array_data= $json_array_a['data'];
	//var_dump($json_array_data);
	foreach($json_array_data as  $json_array_b){
//		var_dump($json_array_b);
//		echo "-----------------";
	//------第一层		
	$uid=$json_array_b['id'];                    //id的值
	$id=$json_array_b['id'];
	//------id初始化
	$orderNo=$json_array_b['orderNo'];
	$orderMemo=$json_array_b['orderMemo'];
	$deliverNo=$json_array_b['deliverNo'];
	$deliverMsg=$json_array_b['deliverMsg'];
    $json_array_c=$json_array_b['orderDetail'][0];
//	var_dump($json_array_c);
    //------第二层
    $json_array_d=$json_array_c['pdf_info'];
	$amount=$json_array_c['amount'];
	$bindingStyle=$json_array_c['bindingStyle'];
//	var_dump($json_array_d);
    //------第三层
    foreach($json_array_d as $json_array_e){
    	$cover_url=$json_array_e['cover'];
    	$cover_md5=$json_array_e['cover_md5'];
		$content_url=$json_array_e['content'];
		$content_md5=$json_array_e['content_md5'];
    	add_del_data($uid, $cover_url, $cover_md5, $content_url, $content_md5);
    }
//    echo $id;
	//------第四层
	add_data($id, $errorCode, $orderNo, $deliverNo, $deliverMsg, $orderMemo, $download, $pro_strat, $pro_end, $amount, $bindingStyle);
	//------插入数据到主表		 
	}	
  }
//sleep(10); 
//} 
?>