<?
	class get_arr{
		function get_arr($res,$value){                   //参数：sql处理基本数值，字段值
		while($row=@mysql_fetch_array($res)){            //封面地址数组
    	$array[]=$row[$value];                    
        }
		return $array;
	}
}
?>