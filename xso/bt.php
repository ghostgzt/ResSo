<?php

$yun=strlen($_SERVER["HTTP_REFERER"]);
$ban=strlen(str_replace($_SERVER["HTTP_HOST"],'',$_SERVER["HTTP_REFERER"]));
if ($yun==$ban){
die("<script>window.open('".'http://'.$_SERVER["HTTP_HOST"].'/'."','_top')</script>");
}
$file="bt.php";
$htm = "http://".$_SERVER["HTTP_HOST"]."/so/";
$url="http://www.torrentkitty.com/";
$mode=$_GET['mod'];
if(!$mode){$mode='search';}
if (!$_GET['title']){
$html= file_get_contents($url.'search/');
}else{
$html= file_get_contents($url.$mode.'/'.$_GET['title'].'/'.$_GET['page']);}
if(!$html){die("<script>window.open('tpl/404.htm','_self')</script>");}
function cleandz($gz,$qb,$hb,$th,$html){
preg_match_all($gz, $html, $match);
$i=0;
while($match[1][$i]){
$html=str_replace($qb.$match[1][$i].$hb,$th,$html);
$i=$i+1;
}
return $html;
}
function gurl(){
return $htm.$file.'?mod='.$mode.'&title='.$_GET['title'].'&page=';
}
$html=cleandz('/<header>(.*?)<\/header>/is','<header>','</header>','',$html);
$html=cleandz('/<nav>(.*?)<\/nav>/is','<nav>','</nav>','',$html);
$html=cleandz('/<th\ colspan\=\"3\">(.*?)<\/th>/is','<th colspan="3">','</th>','',$html);
$html=cleandz('/<footer>(.*?)<\/footer>/is','<footer>','</footer>','',$html);
$html=cleandz('/<\/body>(.*?)<\/html>/is','','','',$html);
$html=cleandz('/<div\ style\=\"text\-align\:center\">(.*?)<\/div>/is','<div style="text-align:center">','</div>','',$html);
$html=cleandz('/<td\ rowspan\=\"5\">(.*?)<\/td>/is','<td rowspan="5">','</td>','',$html);


$html=cleandz('/<input\ id\=\"searchBox\"(.*?)<P><P>/is','<input id="searchBox"','','<p><iframe src="tpl/gad-h.htm" width="728px" height="90px" frameborder="0" scrolling="no"></iframe><p>',$html);


if($mode=='search'){
$html=str_replace('<a href="','<a href="\ttx$$',$html);
$html=str_replace('<a href="\ttx$$/search/','<a href="/search/',$html);
$html=str_replace('<a href="\ttx$$/information/','<a href="/information/',$html);
$html=str_replace('<a href="\ttx$$magnet:','<a href="magnet:',$html);
$html=str_replace('<a href="\ttx$$','<a href="'.gurl(),$html);
}
$html=str_replace('<body','<body oncontextmenu="return false"',$html);
$html=str_replace('href="/search/','href="'.$htm.$file.'?mod=search&title=',$html);
$html=str_replace('href="/information/','href="'.$htm.$file.'?mod=information&title=',$html);
$html=str_replace('>Open</a>','id="yun">Open</a><a href="javascript:vod(0);" onclick="window.open(\'http://www.yundianbo.tv/?u=\'+document.getElementById(\'yun\').href,\'_blank\');">云点播</a><!--',$html);
$html=str_replace('"></a>','"></a-->',$html);
$html=str_replace('728x90---->','728x90----><!--',$html);
$html=str_replace('300x250---->','300x250----><!--',$html);
$html=str_replace('</body>','</body>',$html);
$html=str_replace('<!--<a href="#" class="copy">Copy to Clipboard</a>-->','<a href="#" class="copy" id="copy102" onmouseover="copy(\'copy102\', document.getElementsByClassName(\'magnet-link\')[0].value)">Copy to Clipboard</a>',$html);
$html=str_replace('http://www.yun28.com/?link=','http://www.yundianbo.tv/?u=',$html);
$html=str_replace('http://www.torrentkitty.com/torrent/',$htm.$file.'?mod=torrent&title=',$html);
$html=str_replace("onclick=\"window.location.href = 'http://www.torrentkitty.com/search/' + encodeURI($('#searchBox').val()) + '/'","onclick=\"window.location.href = '".$htm.$file.'?mod=search&title='."' + encodeURI(
document.getElementById('searchBox').value) + '/'",$html);
$html=str_replace('<script>if(self != top) { top.location = self.location; }</script>','',$html);
$html=str_replace('</head>','<meta charset="utf-8"><link href="http://fonts.googleapis.com/css?family=Handlee|Galdeano|Give+You+Glory" rel="stylesheet" type="text/css"><link rel="stylesheet" href="http://www.torrentkitty.com/css/style.css"><script type="text/javascript" src="zeroclipboard/ZeroClipboard.js"></script><script language="JavaScript">var clip = null;function copy(key, cptext) {clip = new ZeroClipboard.Client();clip.addEventListener( "load", function(client) {client.movie.title="复制链接";});clip.addEventListener( "complete", function(){alert("链接复制成功！"); });clip.setText(cptext);clip.glue(key);}</script><link rel="shortcut icon" href="./tpl/bt.png"/>
</head>',$html);
echo $html;
?>