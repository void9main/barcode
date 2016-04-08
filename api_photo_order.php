<meta charset="utf-8">
<?
date_default_timezone_set("ETC/GMT-8");
error_reporting(E_ALL ^ E_NOTICE);
require "class/order.class.php";                                 //$content初始化
require "class/download.class.php";

$id=0;
$order=new order(); 
$down=new download();
//---实例化
$time = time();
$keyword="SH7568GF-879A-45216-89FB-8796ABTH";
$command_getorder="getOrder";
$request = ['command' => $command_getorder,'id'=>$id,'reqtime'=>$time];
$key =$order->generate_sign($request, $keyword);
$request['key'] = $key;
//echo $key;
//echo $id;
$json=$down->get_URL("http://60.191.51.58:8195/api/trace/yinjie/notice?".http_build_query($request));
//---------------------接口地址
echo "http://60.191.51.58:8195/api/trace/yinjie/notice?".http_build_query($request);
echo $json;
$json_array_a=json_decode($json,true); 
if($json_array_a['errorCode']=="error"){
    exit;
}else if($json_array_a['errorCode']=="noid"){
	header("Location:function/order_noid.php?id='$id'");
    }else if($json_array_a['errorCode']=="nodata"){
   exit;               
	    }else if($json_array_a['errorCode']=="ok"){
	$errorCode=$json_array_a['errorCode'];                    
	$key=$json_array_a['key'];
	//------------第一层
	$json_array_data= $json_array_a['data'];
	foreach($json_array_data as $json_array_b){
	$id=$json_array_b['id'];
	$orderNo=$json_array_b['orderNo'];
	$deliverNo=$json_array_b['deliverNo'];
	$deliverMsg=$json_array_b['deliverMsg'];
	$orderMemo=$json_array_b['orderMemo'];
	//-----------第二层
	$json_array_data1=$json_array_b['orderDetail'];
	foreach ($json_array_data1 as $json_array_c){
    $productId=$json_array_c['productId'];
	$amount=$json_array_c['amount'];
	//-----------第三层
	$json_array_data2=$json_array_c['list'];
	foreach($json_array_data2 as $json_array_d){
	$url=$json_array_d['url'];
	$fileMd5=$json_array_d['fileMd5'];
	        }
	//-----------第四层
		}
	add_photo_data($id, $errorCode, $orderNo, $deliverNo, $deliverMsg, $orderMemo);
	//------插入数据到主表		 	
	}
}	
?>