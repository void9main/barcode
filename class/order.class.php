<?
	class order{
	function generate_sign(array $attributes, $key, $encryptMethod = 'md5')
     {
    ksort($attributes);
    $attributes['key'] = $key;
    $urldecode = urldecode(http_build_query($attributes));
    return strtoupper(call_user_func_array($encryptMethod, [$urldecode]));
  }
}
?>