<!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>微信书对接</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Amaze UI 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar admin-header">
  <div class="am-topbar-brand">
    <strong>微信书</strong> <small>对接组</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li>
      <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul>
      </li>
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <!--<li><a href="admin-index.html"><span class="am-icon-home"></span> 首页</a></li>-->
        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav'}"><span class="am-icon-file"></span>功能 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav">
            <li><a href="index.php" class="am-cf"><span class="am-icon-check"></span>文件处理</a></li>
            <li><a href="api_down.php"><span class="am-icon-puzzle-piece"></span>单号查询</a></li>
            <li><a href="make_jdf.php"><span class="am-icon-puzzle-piece"></span>JDF文件</a></li>
            <li><a href="api_photo_order.php"><span class="am-icon-puzzle-piece"></span>获取照片</a></li>
            <li><a href="api_order.php"><span class="am-icon-puzzle-piece"></span>获取文件</a></li>
            <li><a href="api_down.php"><span class="am-icon-puzzle-piece"></span>文件下载</a></li>
            <!--<li><a href="admin-gallery.html"><span class="am-icon-th"></span> 相册页面<span class="am-badge am-badge-secondary am-margin-right am-fr">24</span></a></li>-->
            <li><a href="admin-log.html"><span class="am-icon-calendar"></span>日志系统</a></li>
          </ul>
        </li>
        <!--<li><a href="admin-table.html"><span class="am-icon-table"></span> 表格</a></li>
        <li><a href="admin-form.html"><span class="am-icon-pencil-square-o"></span> 表单</a></li>
        <li><a href="#"><span class="am-icon-sign-out"></span> 注销</a></li>-->
      </ul>
    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
   <div class="admin-content">

    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">列表</strong> / <small>基础信息</small></div>
    </div>
    <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <!--<input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">检索 </button>
          </span>-->
        </div>
   </div>
            <a href="function/filein.php">
            <button  type="button">一键导入数据</button>
            </a>
            <a href="function/delete_data.php">
            <button  type="button">一键清空数据</button>
            </a>
            <small>导入文件一次即可，请勿重复导入</small>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="function/barcode.php">
            <button  type="button">一键生成封面</button>
            </a>
           <!-- <INPUT name="pclog" type="button" value="一键生成内页" onClick="location.href='function/addpage.php'">-->
           	<!--<button onclick="window.open('function/addpage.php');">打开两个新窗口</button>-->
            <a href="function/addpage.html">
            <button  type="button">一键生成内页</button>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="function/del_finish.php">
            <button  type="button">清空生成文件夹</button>
            </a>
            <a href="function/del_source.php">
            <button  type="button">清空源文件夹</button>
            </a>
            <small>所有清空均为文件删除操作，请谨慎操作</small>
    <div class="am-g">
      <div class="am-u-sm-12">
        <table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
                <th>ID</th>   
                <th>编码</th>
               <!-- <th >源文件地址</th>-->
                <th>封面</th>
                <th>内页</th>
                <th>客户姓名</th>
                <th>印页</th>
                <th>联系方式</th>
                <th>客户地址</th>
                <th>文件种类</th>
                <th>制作数量</th>
               <!-- <th width="21%">操作</th>-->
          </tr>
          </thead>
          <tbody>
         <?
	       require "sql_data/conn.php";
	       require "sql_data/sql.php";
	       $res= page_id();
         $num = $res[0];
         $pagesize =13;
         $pages = ceil($num/$pagesize);
         $page =@$_GET['page'];
         $page = (isset($page))?($page):(1);
         $up= ($page-1)*$pagesize;
         $sql="select * from `barcode` ORDER BY `id` DESC LIMIT ".$up." , ".$pagesize."";
         $str = mysql_query($sql);
         while($row = @mysql_fetch_array ($str)){
	     ?>
	    <tr>
		<td >
		<?echo $row['Id']?>
		</td>
		<td >
		<?echo $row['barcode']?>	
		</td>
		<!--<td>
		<?echo $row['pdf_url']?>	
		</td>-->
		<td>
		<?
			if($row['type']=="0"){
				echo "<font color='red'>未生成</font>";
			}else{
                echo "<font color='blue'>已生成</font>";
			}
		?>	
		</td>
		<td>
		<?
			if($row['typen']=="0"){
				echo "<font color='red'>未生成</font>";
			}else{
				echo "<font color='blue'>已生成</font>";
			}
		?>
		</td>
		<td >
		<?echo $row['name'];?>
		</td>
		<td align="center">
		<?echo $row['page']?>
		</td>
		<td>
		<?echo $row['phone']?>
		</td>
		<td>
		<?echo $row['address']?>
		</td>
		<td>
		<?
		if($row['book_type']=="1"){
			echo "精装，经济版";
		}else if($row['book_type']=="2"){
			echo "文艺版";
		}
		?>
		</td>
		<td>
		<?
			echo $row['log']."本";
		?>
		</td>
		<!--<td >
	       <a href="function/barcode.php?id=<?
	       	echo $row['Id'];
	       ?>&sfile=<?
	       	echo $row['pdf_url'];
	       ?>&code=<?
	       	echo $row['barcode'];
	       ?>&book_type=<?
	       	echo $row['book_type'];
	       ?>">点击生成封面</a>
	       <a href="function/addpage.php?sfile=<?
	       	echo $row['pdfn_url'];
	       ?>">点击生成内页</a>
		</td>-->
	</tr>
	<?
	 }
	?>
          </tbody>
        </table>
        <div>共<i><?php echo $num; ?></i>条记录，当前显示第<i><?php  echo $page; //和数据分页不同的s?>&nbsp;</i>页</div>
      </div>
      <div class="am-fr">
      <ul class="am-pagination">
      <li><a href="index.php?page=<?echo ($page>1)?($page-1):(1) ?>">«</a></li>
      <li><a href="index.php?page=<?echo ($page<$pages)?($page+1):($pages)?>">»</a></li>
      </ul>
      </div>
    </div>

    <div class="am-g">
      <div class="am-u-md-6">
      </div>
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>
