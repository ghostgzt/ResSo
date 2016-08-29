function xc(str,inn){
if (str){
var crr=prompt("播放下载地址:",str);
if(crr){
try{
window.open('http://www.okdvd.com/api.html?url='+str,'_blank');
   //window.clipboardData.setData("Text",crr); 
    //alert("复制成功!"); 
}catch(e){
    alert("请按Ctrl+C进行复制！"); 
}}else{
//alert("请按Ctrl+C进行复制！"); 
}
document.getElementById("ccx").value=str;
document.getElementById("ccx").focus();
document.getElementById("ccx").select();
if (inn){
parent.document.getElementById("iiz").style.visibility = "visible";
parent.document.getElementById("ccx").value=str;
parent.document.getElementById("ccx").focus();
parent.document.getElementById("ccx").select();
}
}
}