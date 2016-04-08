<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">  
<html>  
 <head>  
  <title> 加载等待效果 </title>  
  <meta name="Generator" content="EditPlus">  
  <meta name="Author" content="">  
  <meta name="Keywords" content="">  
  <meta name="Description" content="">  
  <meta charset="utf-8" />
 </head>  
  
 <body>  
 <form id="form" name="form">  
  <table border="0" width="100%" height="100%">  
    <tr>   
    <td align=center>   
        <p><font id="context">正在登录，检查环境.......</font></p>  
        <p>  
            <input type="text" name="chart" size="46" style="font-family:Arial; font-weight:bolder; color:gray;background-color:white; padding:0px; border-style:none;">  
            <br>  
            <input type="text" name="percent" size=46 style="font-family:Arial; color:gray; text-align:center; border-width:medium; border-style:none;">  
            <script>var bar = 0;   
            var line = "||" ;  
            var amount ="||" ;  
            count() ;  
            function count(){   
                bar= bar+2 ;  
                amount =amount + line;   
                document.form.chart.value=amount ;  
                document.form.percent.value=bar+"%";      
                if (bar<99)   
                    {setTimeout("count()",100);}   
                else   
                    {window.location = "http://www.baidu.com/";}   
            }  
  
            </script>  
        </p>  
    </td>  
</tr>  
</table>  
</form>  
 </body>  
</html>  