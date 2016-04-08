<meta charset="utf-8" />
<?
$name=$_POST['name'];      //名称
$load=$_POST['load'];      //路径
$num=$_POST['num'];        //数量
$type=$_POST['type'];      //纸张种类
$duplex=$_POST['duplex'];  //单双面
$x=$_POST['x'];            //长
$y=$_POST['y'];            //宽
$myfile = fopen("../JDF/$name.jdf", "w") or die("Unable to open file!");
$text="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
\n
<JDF Type=\"Combined\" xmlns=\"http://www.CIP4.org/JDFSchema_1_1\" ID=\"rootNodeId\" Status=\"Waiting\" 
JobPartID=\"000.cdp.797\" Version=\"1.2\"  Types=\"DigitalPrinting LayoutPreparation Gathering\" 
DescriptiveName=\"$name\">\n
<ResourcePool>\n
<Media Class=\"Consumable\" ID=\"M001\" Status=\"Available\" StockType=\"$type\" Dimension=\"$x $y\"/>\n
<DigitalPrintingParams Class=\"Parameter\" ID=\"DPP001\" Status=\"Available\"/>\n
<RunList ID=\"RunList_1\" Status=\"Available\" Class=\"Parameter\">\n
<LayoutElement>\n
<FileSpec MimeType=\"application/pdf\" URL=\"$load\"/>\n
</LayoutElement>\n
</RunList>\n
<LayoutPreparationParams Class=\"Parameter\" ID=\"LPP001\" Sides=\"$duplex\" Status=\"Available\">\n
</LayoutPreparationParams>\n
<FeedingParams Class=\"Parameter\" ID=\"FPS-DS\" Status=\"Available\">\n
<Feeder FeederType=\"Copy\" />\n
</FeedingParams>\n
<GatheringParams ID=\"GP01\" Class=\"Parameter\" Status=\"Available\">\n
<SourceResource>\n
<FeedingParamsRef rRef=\"FPS-DS\"/>\n
</SourceResource>\n
<Disjointing>\n
<InsertSheet SheetType=\"SeparatorSheet\" SheetUsage=\"Trailer\" SheetFormat=\"Standard\"/>\n
</Disjointing>\n
</GatheringParams>\n
 <Component ID=\"Component\" ComponentType=\"FinalProduct\" Status=\"Unavailable\" Class=\"Quantity\"> </Component>\n
</ResourcePool>\n
<ResourceLinkPool>\n
<MediaLink rRef=\"M001\" Usage=\"Input\"/>\n
<DigitalPrintingParamsLink rRef=\"DPP001\" Usage=\"Input\"/>\n
<RunListLink rRef=\"RunList_1\" Usage=\"Input\"/>\n
<LayoutPreparationParamsLink rRef=\"LPP001\" Usage=\"Input\"/>\n
<GatheringParamsLink rRef=\"GP01\" Usage=\"Input\"/>\n
<ComponentLink Amount=\"$num\" Usage=\"Output\" rRef=\"Component\"/>\n
</ResourceLinkPool>\n
</JDF>\n";
fwrite($myfile,$text);
echo "<script>alert('成功生成！储存于JDF文件夹');location.href='../make_jdf.php'</script>";
?>
