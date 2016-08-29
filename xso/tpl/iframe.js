function reinitIframe(){
var iframe = document.getElementById("iix");
try{
iframe.height =  window.screen.availHeight-285;
iframe.height =  iframe.contentWindow.document.documentElement.scrollHeight;
}catch (ex){}
}
//window.setInterval("reinitIframe();stop();", 1000);
