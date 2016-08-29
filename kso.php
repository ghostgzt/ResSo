<?php

$yun=strlen($_SERVER["HTTP_REFERER"]);
$ban=strlen(str_replace($_SERVER["HTTP_HOST"],'',$_SERVER["HTTP_REFERER"]));
if ($yun==$ban){
die("<script>window.open('".'http://'.$_SERVER["HTTP_HOST"].'/'."','_top')</script>");
}

$mefile="kso.php";
$geti="";
$getw="page=1&mode=list";
$geti=$_POST['query'];
$getm='mode=list';
function cleanzs($html){
preg_match_all('/<!--(.*?)-->/is', $html, $match);
$i=0;
while($match[1][$i]){
$html=str_replace($match[1][$i],'',$html);
$i=$i+1;
}
$html=str_replace('<!---->','',$html);
return $html;
}
if($_GET['w']){$getw=$_GET['w'];}
if(!$geti){$geti=$_GET['s'];}
if($_GET['mode']){$getm=$_GET['mode'];}
if ($geti){
$url="http://donkey4u.com/search/".$geti.'?'.$getw.'&mode='.$getm;
}else{
die("非法操作！");
}
$f = fopen($url,"r");
$html = "";
if($f){
while (!feof($f)) {
$html .= fgets($f);
}
if (!$html){die("<script>window.open('tpl/404.htm','_self')</script>");}
$htm = "http://";
$htm .= $_SERVER["HTTP_HOST"];
$htm .="/";
$html=str_replace('<img border="0"','<img border="0" src="/static/eeyore.icon.jpg"/><!--img border="0"',$html);
$html=str_replace('.jpg"/>','.jpg"/-->',$html);
$html=str_replace('<img class="thumbimg"','<img border="0" src="/static/hexie.jpg"/><!--img class="thumbimg"',$html);
$html=str_replace('<form action="/" method="post">','<form action="'.$htm.$mefile.'" method="post">',$html);
$html=str_replace('/-->首页','/>首页',$html);
$html=str_replace('<div class="menu">','<div class="menu"><ul><li><a href="'.$htm.$mefile.'"><img border="0" src="/static/eeyore.icon.jpg"/>首页</a></li></ul><br/></div><table width="100%"><br/></table><!--',$html);
$html=str_replace('<a href="/search/','<a href="'.$htm.$mefile.'?s=',$html);
$html=str_replace('<a href="?page=','<a href="'.$htm.$mefile.'?s='.$geti.'&w=page=',$html);
$html=str_replace('<td align="right">
问题和建议可发送至: <a href="mailto:admin@donkey4u.com">admin@donkey4u.com</a> , 或在<a href="http://www.douban.com/people/donkey4u/">我的豆瓣</a>上给我<a href="http://www.douban.com/people/donkey4u/board">留言</a> 
    </td>','',$html);
$html=str_replace('例如 
<a href="http://www.emule-project.net/" target="_blank">emule官方版本</a>,
<a href="http://www.amule.org/" target="_blank">amule</a>','',$html);
$html=str_replace('<head>','<head><!--',$html);
$html=str_replace('<script type="text/javascript" src="/static/google_analysis.js"></script> ','<script type="text/javascript" src="/static/google_analysis.js"></script> -->',$html);
$html=str_replace('<tr><td> 示例: </td></tr>','<tr><td><a Title="天狼星の破晓" target="_blank" href="http://www.godwolfs.asia/"><img  src="http://www.godwolfs.asia/template/godwolfs/img/logo.gif" /></a></td></tr><!--<tr><td> 示例: </td></tr>',$html);
$html=str_replace('document.write("<!--[if lte IE 6]><script>isIE6=true;</scr"+"ipt><![endif]-->");','',$html);
$html=str_replace('<table width="100%">','<table width="100%"><!--',$html);
$html=str_replace('people/donkey4u/board">留言</a> ','people/donkey4u/board">留言</a> -->',$html);
$html=str_replace('style="visibility: hidden">ED2K','>河蟹链',$html);
$html=str_replace('<B>电驴视频搜索</B>','',$html);
$html=str_replace("\r",'',$html);
$html=str_replace("\n",'',$html);
$html=str_replace("\t",'',$html);
$html=cleanzs($html);
$html=str_replace("/-->",'/>',$html);
$html=str_replace('<body >','<body ><!--',$html);
$html=str_replace("<table width='1024'>","--><table style='display:none;'>",$html);
$html=str_replace('href="ed2k','href="javascript:;" onclick=\'xc("ed2k',$html);
$html=str_replace('">ED2K</a>','",1)\'>ED2K</a>',$html);
$html=str_replace('" >河蟹链','",1)\' >河蟹链',$html);
$xxx='';
$html=str_replace('<body >','<body oncontextmenu="return false"><script type="text/javascript" src="'.$htm.'tpl/xc.js"></script><div align="center" style="background:White;">'.'<div class="FloatDIV" style="float:left;background:White;width:180px ;height:820px;border:1px solid #999;">下载地址:<input id="ccx" value="" readonly="true" /><input  type=button onclick=\'
if(document.getElementById("ccx").value){
var popup = window.open(document.getElementById("ccx").value);
//popup.location.href=document.getElementById("ccx").value;
setTimeout(function() {popup.close();}, 100);}
\' value="打开"><input  type=button onclick=\'
xc(document.getElementById("ccx").value,0);
\' value="复制"/><div align="center"><a title="Made By Gentle!<\+|+/>Click Me And Visit Gentle\'s Sina WeiBo!" href="javascript:;" onclick=\'window.open("http://weibo.com/u/1843533784","_blank");\'><img border="0" src="'.$htm.'tpl/zm.gif" height="120" width="120" /></a><iframe width="120" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" scrolling="no" border="0" src="http://widget.weibo.com/relationship/followbutton.php?language=zh_cn&amp;width=136&amp;height=24&amp;uid=1843533784&amp;style=2&amp;btn=red&amp;dpc=1">
</iframe></div><iframe src="'.$htm.'tpl/gad.htm" width="160" height="590" scrolling="no"></iframe></div><div style="width: 100%;">'.$xxx,$html);
$html=str_replace('</body>','--></div></div></body>',$html);
$html=str_replace('"/static/','"'.$htm.'tpl/',$html);
$html=str_replace('"http://lib.sinaapp.com/js/jquery/1.8/','"'.$htm.'tpl/',$html);
$html=str_replace('<link rel="stylesheet" href="'.$htm.'tpl/menu.css" type="text/css" charset="utf-8"/>','',$html);
$html=str_replace('<link rel="search" type="application/opensearchdescription+xml" href="'.$htm.'tpl/opensearch.xml" title="donkey4u Search" />','',$html);
$html=str_replace('="/','="http://donkey4u.com/',$html);
$html=str_replace('-->','<!---->',$html);
$html=cleanzs($html);
echo $html;
}else{
die("<script>window.open('tpl/404.htm','_self')</script>");
}
?>