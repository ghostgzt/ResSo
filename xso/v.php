<base href="http://www.verycd.com/" />

            	
            	
            	<link type="text/css" href="http://v4.vcimg.com/css/global/stylesheets/style.css,base/stylesheets/style.css,global/javascripts/ymPrompt/skin/simple/ymPrompt.css,global/javascripts/poshytip/tip-verycd/tip-verycd.css,global/javascripts/poshytip/tip-dig/tip-dig.css?v=53671,53095,41269,52369,52369" rel="stylesheet" />
            	<link type="text/css" href="http://v4.vcimg.com/css/base/stylesheets/search.css?v=53433" rel="stylesheet" />
            	<link type="text/css" href="http://v4.vcimg.com/css/global/stylesheets/topbar_0.css?v=53112" rel="stylesheet" />
            	<link type="text/css" href="http://v4.vcimg.com/css/base/stylesheets/list.css?v=45806" rel="stylesheet" />
            	
            	
<?php
$yun=strlen($_SERVER["HTTP_REFERER"]);
$ban=strlen(str_replace($_SERVER["HTTP_HOST"],'',$_SERVER["HTTP_REFERER"]));
if ($yun==$ban){
die("<script>window.open('".$htm.''."','_top')</script>");
}
            	
            	function curl_get($url, $gzip=false){
try{
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
        if($gzip) curl_setopt($curl, CURLOPT_ENCODING, "gzip"); // 关键在这里
        $content = curl_exec($curl);
        curl_close($curl);
		}catch(Exception $e){die('<script>window.reload();</script>');}
        return $content;
}
$mfile="v.php";
$htm = "http://";
$htm .= $_SERVER["HTTP_HOST"];
$htm .="/".'so/';
if($_GET['q']){
$url='http://www.verycd.com/search/entries/'.urlencode($_GET['q']);
}else{
$url='http://www.verycd.com/'.$_SERVER['QUERY_STRING'];}
if($url=='http://www.verycd.com/')
{die(非法操作！！！);}
$html=curl_get($url, false);
$html=str_replace("_src=",'src=',$html);
$html=str_replace('<a href="/search','<a href="'.$htm.''.$mfile.'?search',$html);
$html=str_replace('<a class="next" href="/','<a class="next" href="'.$htm.''.$mfile.'?',$html);
preg_match_all('/page\_content">(.*?)<div class="aside">/is', $html, $match);
            	//echo $html;
           echo '<br/><br/><div id="page_content">'.$match	[1][0].'<div class="aside"><iframe width="120" scrolling="no" height="600" frameborder="no" framespacing="0" src="'.$htm.'tpl/gad.htm'.'"></iframe></div>';
            	
            	 ?>
            	
