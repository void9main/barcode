<!doctype html>
<html class="no-js">
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

    <!--<ul class="am-avg-sm-1 am-avg-md-4 am-margin am-padding am-text-center admin-content-list ">
      <li><a href="#" class="am-text-success"><span class="am-icon-btn am-icon-file-text"></span><br/>新增页面<br/>2300</a></li>
      <li><a href="#" class="am-text-warning"><span class="am-icon-btn am-icon-briefcase"></span><br/>成交订单<br/>308</a></li>
      <li><a href="#" class="am-text-danger"><span class="am-icon-btn am-icon-recycle"></span><br/>昨日访问<br/>80082</a></li>
      <li><a href="#" class="am-text-secondary"><span class="am-icon-btn am-icon-user-md"></span><br/>在线用户<br/>3000</a></li>
    </ul>-->
    <!--<div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
          <input type="text" class="am-form-field">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">检索</button>
          </span>
        </div>
   </div>-->
    <div class="am-g">
      <div class="am-u-sm-12">
      	<h1>JDF文件生成</h1>
	<hr />
	<form action="function/make_jdf.php" method="post">
	<h2>基本信息</h2>
	<p>
	填写文件名称：
	<input type="text" name="name" value="" size="25">
	</p>
	<p>
	填文件路径：
	<input type="text" name="load" value="支持http和本地文件路径" size="120">
	</p>
	<p>
	填写打印数量：
	<input type="text" name="num" size="5">
	</p>
	<hr />
	<h2>纸张信息</h2>
    <p>
       选择纸张种类：
    <select name="type">
    	<option value="250tb">
    	250铜版纸
    	</option>
    	<option value="300yf">
    	300丽芙纸
    	</option>
    </select>
    &nbsp;&nbsp;&nbsp;&nbsp;
        添加纸张种类： 
    <input type="text" size="4"/>-
    <input type="text" size="4"/>
    <input type="submit" value="提交"/>
    </p>
    <p>
       打印面数：
    <select name="duplex">
    	<option value="">
    	 单层
    	</option>
    	<option value="TwoSidedFlipX">
    	 双层翻页
    	</option>
    	<option value="TwoSidedFlipY">
    	 双层不翻页
    	</option>
    </select>
    </p>
    <p>
       纸张尺寸：
    </p>
       长：<input type="text" name="x">	
       宽：<input type="text" name="y">	
    <hr />
    <p align="center">
    <input type="submit" name="submit" value="提交生成">
    </p>
	</form>
	<hr />
        <!--<table class="am-table am-table-bd am-table-striped admin-content-table">
          <thead>
          <tr>
                <th width="5%">ID</th>
                <th width="10%">编号</th>
                <th width="15%">源文件地址</th>
                <th width="8%">订单状态</th>
                <th width="8%">客户姓名</th>
                <th width="5%">订单印页</th>
                <th width="10%">客户联系方式</th>
                <th width="31%">客户地址</th>
                <th width="10%">操作</th>
          </tr>
          </thead>
          <tbody>
         <?
	       require "sql_data/conn.php";
	       require "sql_data/sql.php";
	       $res= page_id();
         $num = $res[0];
         $pagesize =8;
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
		<td>
		<?echo $row['pdf_url']?>	
		</td>
		<td>
		<?
			if($row['type']=="0"){
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
		<td >
	       <a href="function/barcode.php?id=<?
	       	echo $row['Id'];
	       ?>&sfile=<?
	       	echo $row['pdf_url'];
	       ?>&code=<?
	       	echo $row['barcode'];
	       ?>">点击生成</a>
		</td>
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
      	<form action="function/up_load.php" method="post" enctype="multipart/form-data">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-1'}">PDF源文件上传<span class="am-icon-chevron-down am-fr" ></span></div>
          <div class="am-panel-bd am-collapse am-in" id="collapse-panel-1">
            <ul class="am-list admin-content-file">
              <li>
                <strong><span class="am-icon-upload"></span>上传文件PDF文件到源文件夹</strong>
                <p><input type="file" name="file" value="点击选择上传文件"></p>
            </ul>
            <input type="submit" name="up_load" value="上传">
          </div>
        </div>
        </form>-->
        <!--<div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-2'}">浏览器统计<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-2" class="am-in">
            <table class="am-table am-table-bd am-table-bdrs am-table-striped am-table-hover">
              <tbody>
              <tr>
                <th class="am-text-center">#</th>
                <th>浏览器</th>
                <th>访问量</th>
              </tr>
              <tr>
                <td class="am-text-center"><img src="assets/i/examples/admin-chrome.png" alt=""></td>
                <td>Google Chrome</td>
                <td>3,005</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="assets/i/examples/admin-firefox.png" alt=""></td>
                <td>Mozilla Firefox</td>
                <td>2,505</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="assets/i/examples/admin-ie.png" alt=""></td>
                <td>Internet Explorer</td>
                <td>1,405</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="assets/i/examples/admin-opera.png" alt=""></td>
                <td>Opera</td>
                <td>4,005</td>
              </tr>
              <tr>
                <td class="am-text-center"><img src="assets/i/examples/admin-safari.png" alt=""></td>
                <td>Safari</td>
                <td>505</td>
              </tr>
              </tbody>
            </table>
          </div>
        </div>-->
      </div>

      <!--<div class="am-u-md-6">
        <div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-4'}">任务 task<span class="am-icon-chevron-down am-fr" ></span></div>
          <div id="collapse-panel-4" class="am-panel-bd am-collapse am-in">
            <ul class="am-list admin-content-task">
              <li>
                <div class="admin-task-meta"> Posted on 25/1/2120 by John Clark</div>
                <div class="admin-task-bd">
                  The starting place for exploring business management; helping new managers get started and experienced managers get better.
                </div>
                <div class="am-cf">
                  <div class="am-btn-toolbar am-fl">
                    <div class="am-btn-group am-btn-group-xs">
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                    </div>
                  </div>
                  <div class="am-fr">
                    <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                  </div>
                </div>
              </li>
              <li>
                <div class="admin-task-meta"> Posted on 25/1/2120 by 呵呵呵</div>
                <div class="admin-task-bd">
                  基兰和狗熊出现在不同阵营时。基兰会获得BUFF，“装甲熊憎恨者”。狗熊会获得BUFF，“时光老人憎恨者”。
                </div>
                <div class="am-cf">
                  <div class="am-btn-toolbar am-fl">
                    <div class="am-btn-group am-btn-group-xs">
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-check"></span></button>
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-pencil"></span></button>
                      <button type="button" class="am-btn am-btn-default"><span class="am-icon-times"></span></button>
                    </div>
                  </div>
                  <div class="am-fr">
                    <button type="button" class="am-btn am-btn-default am-btn-xs">删除</button>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>-->

        <!--<div class="am-panel am-panel-default">
          <div class="am-panel-hd am-cf" data-am-collapse="{target: '#collapse-panel-3'}">最近留言<span class="am-icon-chevron-down am-fr" ></span></div>
          <div class="am-panel-bd am-collapse am-in am-cf" id="collapse-panel-3">
            <ul class="am-comments-list admin-content-comment">
              <li class="am-comment">
                <a href="#"><img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96" alt="" class="am-comment-avatar" width="48" height="48"></a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta"><a href="#" class="am-comment-author">某人</a> 评论于 <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p>遵循 “移动优先（Mobile First）”、“渐进增强（Progressive enhancement）”的理念，可先从移动设备开始开发网站，逐步在扩展的更大屏幕的设备上，专注于最重要的内容和交互，很好。</p>
                  </div>
                </div>
              </li>

              <li class="am-comment">
                <a href="#"><img src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/96/h/96" alt="" class="am-comment-avatar" width="48" height="48"></a>
                <div class="am-comment-main">
                  <header class="am-comment-hd">
                    <div class="am-comment-meta"><a href="#" class="am-comment-author">某人</a> 评论于 <time>2014-7-12 15:30</time></div>
                  </header>
                  <div class="am-comment-bd"><p>有效减少为兼容旧浏览器的臃肿代码；基于 CSS3 的交互效果，平滑、高效。AMUI专注于现代浏览器（支持HTML5），不再为过时的浏览器耗费资源，为更有价值的用户提高更好的体验。</p>
                  </div>
                </div>
              </li>

            </ul>
            <ul class="am-pagination am-fr admin-content-pagination">
              <li class="am-disabled"><a href="#">&laquo;</a></li>
              <li class="am-active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">5</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>-->
      </div>
    </div>
  </div>
  <!-- content end -->

</div>

<a href="#" class="am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}">
  <span class="am-icon-btn am-icon-th-list"></span>
</a>

<footer>
  <hr>
  <p class="am-padding-left">条形码&JDF文件<small>生成检索系统---version1.1.0</small></p>
</footer>

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
