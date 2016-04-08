<?php function curl_fetch($url, $timeout=3){     
$ch = curl_init();     
curl_setopt($ch, CURLOPT_URL, $url);     
curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);     
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);     
$data = curl_exec($ch);     
$errno = curl_errno($ch);     
if ($errno>0) {         
$data = false;     
}     
curl_close($ch);     
return $data; 
} 
function microtime_float() 
{    
list($usec, $sec) = explode(" ", microtime());    
return ((float)$usec + (float)$sec); 
} 
$url_arr=array(      
"taobao"=>"api_order.php",      
"sohu"=>"api_down.php",          
);  
$time_start = microtime_float();  
$data=array();  
foreach ($url_arr as $key=>$val)  
{      
$data[$key]=curl_fetch($val);  
}  
$time_end = microtime_float();  
$time = $time_end - $time_start;  
echo "耗时:{$time}"; 
?> 
