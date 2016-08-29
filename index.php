<?php error_reporting(0); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<title>电驴资源搜索 - 天狼星の破晓</title>
<link rel="shortcut icon" href="./tpl/zm.gif"/>
<head>
<link rel="Stylesheet" type="text/css" href="./tpl/style.css" />
<script language="javascript" type="text/javascript" src="http://gentle.cdn.duapp.com/360tool/tool/toweto.min.js"></script>
<script language="javascript" type="text/javascript" src="http://gentle.cdn.duapp.com/360tool/tool/toweto.plugins.min.js"></script>
<LINK rel=stylesheet type=text/css href="http://gentle.cdn.duapp.com/360tool/skins/twitter.css" media=screen>
<script>function play(){art.dialog({title:'在线点播',content: '<iframe src="http://vod.apbest.info/?fv" width="950px" height="580px" marginwidth="0" marginheight="0" hspace="0" vspace="0" frameborder="0" scrolling="No"></iframe>'});};</script>
<script type="text/javascript" src="zeroclipboard/ZeroClipboard.js"></script><script language="JavaScript">var clip = null;function copy(key, cptext) {clip = new ZeroClipboard.Client();clip.addEventListener( "load", function(client) {client.movie.title="复制链接";});clip.addEventListener( "complete", function(){alert("链接复制成功！"); });clip.setText(cptext);clip.glue(key);}</script>
<style>#emotion{margin:5px 0;}input:focus::-webkit-input-placeholder,textarea:focus::-webkit-input-placeholder{color:transparent;}::-webkit-scrollbar-track-piece{background:#FFF;}::-webkit-scrollbar{width:8px;height:8px;}::-webkit-scrollbar-thumb{height:80px;background-color:#999;border:none;}::-webkit-scrollbar-thumb:hover{background-color:#666;}.readmore{display:none}</style>
</head>
<body style="background-image:url(http://img14.poco.cn/mypoco/myphoto/20130321/12/17338767320130321124216067.jpg)">
<div class="title" id="iia" name="iia" style="width:99.8%;height: 150px;position:absolute;left:0px;top:0px;background:White;border:1px solid #999;Z-index:1;">
<tr>
<td>
<a Title="狼视影院 - 天狼星の破晓" target="_blank" href="http://mv.gwfs.ml/" ><img src="./tpl/em.jpg" border="0" /></a>
</td>
<td>
<a Title="School Days - 天狼星の破晓" target="_blank" href="http://gentle.duapp.com/schooldays.html" ><img  src="./tpl/zm.gif" border="0" /></a>
</td>
<td>
<a Title="引擎切换 - 天狼星の破晓" onclick="openx()" href="javascript:;" ><img src="./tpl/sh.jpg" border="0" /></a>
</td>
<td>
<a Title="BT搜索 - 天狼星の破晓"  onclick="bt()" href="javascript:;"><img src="./tpl/bt.png" border="0" /></a>
</td>
</tr>
<div id="iis" name="iis" style="height: 50;background:White;">
<form action="v.php" method="get" target="iix">
<tr>
<td><a Title="电驴搜索引擎 - 天狼星の破晓" target="_top" href="javascript:;" onclick='document.getElementById("iix").src="./tpl/welcome.htm";document.getElementById("kw").value="请输入要搜索的关键字";document.title="电驴资源搜索 - 天狼星の破晓"' ><img  id="icc" src="./tpl/f.png" border="0" /></a></td>
<td><input class="keyword" type="text" id="kw" name="q" value="<?php if($_REQUEST['z']&&$_REQUEST['s']!='1'){echo $_REQUEST["z"];}else{echo '请输入要搜索的关键字';} ?>" x-webkit-speech="" x-webkit-grammar="builtin:translate" onwebkitspeechchange="document.getElementById('kw').value=document.getElementById('kw').value.replace('请输入要搜索的关键字','');" /></td>
<td><input type="submit" id="search" value="电驴搜索" onclick="var ix=0;if(encodeURIComponent(document.getElementById('kw').value).length<1){alert('至少1个字符！');return false;ix=0;}else{ix=1;}if(document.getElementById('kw').value=='请输入要搜索的关键字'){return false;ix=0;}else{ix=1}if(ix==1){document.title='搜索结果: '+document.getElementById('kw').value+' - 电驴搜索引擎 - 天狼星の破晓'}"/></td></tr>
</form>
</div>
<div id="iit" name="iit" style="height: 50;background:White;visibility: hidden;">
<form action="./kso.php" method="post" target="iix">
<a Title="快速搜索引擎 - 天狼星の破晓" target="_top" href="javascript:;" onclick='document.getElementById("iix").src="./tpl/welcome.htm";document.getElementById("query").value="请输入要搜索的关键字";document.title="快速搜索引擎 - 天狼星の破晓"' ><img id="icc" src="./tpl/lamp.png" border="0" /></a>
<input class="keyword" type="text" id="query" name="query" value="<?php if($_REQUEST['z']&&$_REQUEST['s']=='1'){echo $_REQUEST["z"];}else{echo '请输入要搜索的关键字';} ?>" x-webkit-speech="" x-webkit-grammar="builtin:translate" onwebkitspeechchange="document.getElementById('query').value=document.getElementById('query').value.replace('请输入要搜索的关键字','');" />
<input type="submit" id="search" value="快速搜索" onclick="var ix=0;if(encodeURIComponent(document.getElementById('query').value).length<1){alert('至少1个字符！');return false;ix=0;}else{ix=1;}if(document.getElementById('query').value=='请输入要搜索的关键字'){return false;ix=0;}else{ix=1}if(ix==1){document.title='搜索结果: '+document.getElementById('query').value+' - 快速搜索引擎 - 天狼星の破晓'}"/>
</form>
</div>
<div id="iib" name="iib" style="height: 50;background:White;visibility: hidden;">

<a Title="BT搜索引擎 - 天狼星の破晓" target="_top" href="javascript:;" onclick='document.getElementById("iix").src="./tpl/welcome.htm";document.getElementById("title").value="请输入要搜索的关键字";document.title="BT搜索引擎 - 天狼星の破晓"' ><img id="icc" src="./tpl/royal.png" border="0" /></a>
<input class="keyword" type="text" id="title" name="title" value="<?php if($_REQUEST['z']&&$_REQUEST['s']=='1'){echo $_REQUEST["z"];}else{echo '请输入要搜索的关键字';} ?>" x-webkit-speech="" x-webkit-grammar="builtin:translate" onwebkitspeechchange="document.getElementById('title').value=document.getElementById('title').value.replace('请输入要搜索的关键字','');" />
<input type="button" id="search" value="BT搜索" onclick="var ix=0;if(encodeURIComponent(document.getElementById('title').value).length<1){alert('至少1个字符！');return false;ix=0;}else{ix=1;}if(document.getElementById('title').value=='请输入要搜索的关键字'){return false;ix=0;}else{ix=1}if(ix==1){document.title='搜索结果: '+document.getElementById('title').value+' - BT搜索引擎 - 天狼星の破晓';document.getElementById('iix').src='http://gentle.cdn.duapp.com/so.html?'+(new Date).valueOf()+'#0|-|'+encodeURIComponent(document.getElementById('title').value);}"/>

</div>
<div id="iiz" name="iiz" style="width:370px;position:absolute;left:0px;bottom:0px;background:White;border:1px solid #999;visibility: hidden;">下载地址:<input id="ccx" value="" readonly="true" /><input  type=button onclick='
if(document.getElementById("ccx").value){
var popup = window.open(document.getElementById("ccx").value);
//popup.location.href=document.getElementById("ccx").value;
setTimeout(function() {popup.close();}, 100);}' value="打开"/>
<input  type=button id="copy102" name="copy102" onmouseover='copy("copy102", document.getElementById("ccx").value)
document.getElementById("ccx").focus();
document.getElementById("ccx").select();
' value="复制"/>
<a Title="电驴搜索引擎 - 天狼星の破晓" target="_top" href="javascript:;" onclick="iiz.style.visibility = 'hidden';" ><img  src="./tpl/x.png" style="margin: -5px 0" width="20" height="20"  border="0" /></a>
<a title="Play" href="javascript:play();"><img src="./tpl/royal.gif" height="20px" width="20px" border="0" /></a>
</div>
</div>
<script src="./tpl/float.js" type="text/javascript"></script>
<script src="./tpl/searchbox.js" type="text/javascript"></script>
<div align="center" style="width:99.8%;position:absolute;left:0px;top:150px;background:Black;border:1px solid #999;"><iframe id="iix" target="_self" name="iix" width="100%" height="72%" onload="this.height=this.contentWindow.document.documentElement.scrollHeight;reinitIframe();iiz.style.visibility = 'hidden';"  frameborder="0" src="<?php if($_REQUEST['z']){if($_REQUEST['s']!='1'){echo 'v.php?q='.$_REQUEST["z"];}else{echo 'kso.php?s='.$_REQUEST["z"];}}else{echo './tpl/welcome.htm';} ?>" ></iframe><br /><br />
<div align="center" id="foot" name="foot" style="width:99.8%;position:absolute;left:0px;bottom:0px;background:White;border:1px solid #999;"> Powered By <a href="http://www.godwolfs.asia" title="天狼星の破晓">GodWolfs</a>&nbsp;-&nbsp;Made By Gentle In 2012-2013 <a target="_blank" href="http://sighttp.qq.com/authd?IDKEY=0ca7b3e4800c05d19aa003259ac4195534e63bebb1eab4bb"><img border="0"  src="http://wpa.qq.com/imgd?IDKEY=0ca7b3e4800c05d19aa003259ac4195534e63bebb1eab4bb&pic=46" alt="有事联系作者-.-" title="有事联系作者-.-"></a></div>
<script src="./tpl/iframe.js" type="text/javascript"></script>
</div>
<?php
//if ($_REQUEST['s']=='1'){
echo '
<script  type="text/javascript">
var xs;
xs=null;
xs="'.$_REQUEST['s'].'";
if((document.location.hash==\'#donkey\')||((document.location.hash!=\'#verycd\')&&(document.location.hash!=\'#donkey\')&&(xs=="1"))){
document.title=\'快速搜索 - 天狼星の破晓\'
   document.getElementById("iix").height=window.screen.availHeight-285;
   is=1;
   iis.style.height="0";
   iit.style.height="50";
   iib.style.visibility = \'hidden\';
   iis.style.visibility = \'hidden\';
   iit.style.visibility = \'visible\';
	 //iiz.style.visibility = \'visible\';
	 }
	 if(document.location.hash==\'#bt\'){
   document.title=\'BT搜索 - 天狼星の破晓\'
   document.getElementById("iix").height=window.screen.availHeight-285;
   is=1;
   iis.style.height="0";
   iit.style.height="50";
   iis.style.visibility = \'hidden\';
   iib.style.visibility = \'visible\';
	 //iiz.style.visibility = \'visible\';
	 }
</script>';
//}
?>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=5&amp;mini=1&amp;pos=left&amp;uid=763827" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":0};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
<script type="text/javascript" src="http://js.tongji.linezing.com/2963920/tongji.js"></script><noscript><a href="http://www.linezing.com"><img src="http://img.tongji.linezing.com/2963920/tongji.gif"/></a></noscript>
</body></html>