  function addListener(element,e,fn){    
        if(element.addEventListener){    
             element.addEventListener(e,fn,false);    
         } else {    
             element.attachEvent("on" + e,fn);    
          }    
   }
   function cl(id){
      var kw = document.getElementById(id);
   addListener(kw,"click",function(){
   if(kw.value=="请输入要搜索的关键字"){
    kw.value = "";}
   })
   addListener(kw,"blur",function(){
   if(kw.value==""){
    kw.value = "请输入要搜索的关键字";
    }
   })
   
   }
cl("kw");
cl("query");
cl("title");

   var is=0;
   function openx(){
   if(is==0){
     document.title='快速搜索 - 天狼星の破晓'
   document.getElementById("iix").src="./tpl/welcome.htm";
   document.getElementById("iix").height=window.screen.availHeight-285;
   is=1;
   iis.style.height="0";
      iit.style.height="50";
 iib.style.visibility = 'hidden';
   iis.style.visibility = 'hidden';
      iit.style.visibility = 'visible';
	   //iiz.style.visibility = 'visible';
	   document.location.hash='donkey';
	   document.getElementById("query").value = "请输入要搜索的关键字";
   }else{
         document.title='电驴搜索 - 天狼星の破晓'
      is=0;
    document.getElementById("iix").src="./tpl/welcome.htm";
    iis.style.height="50";
       iit.style.height="0";
      document.getElementById("iix").height=window.screen.availHeight-285;
      iis.style.visibility = 'visible';
      iit.style.visibility = 'hidden';
	    iib.style.visibility = 'hidden';
	   document.location.hash='verycd';
	   document.getElementById("kw").value = "请输入要搜索的关键字";
   }
   }
   
      iit.style.height="0";
  iit.style.visibility = 'hidden';
   iiz.style.visibility = 'hidden';
   function bt(){
     document.title='BT搜索 - 天狼星の破晓'
   document.getElementById("iix").src="./tpl/welcome.htm";
   document.getElementById("iix").height=window.screen.availHeight-285;
   is=3;
   iis.style.height="0";
      iib.style.height="50";
   iiz.style.visibility = 'hidden';
   iis.style.visibility = 'hidden';
      iit.style.visibility = 'hidden';
      iib.style.visibility = 'visible';
	   //iiz.style.visibility = 'visible';
	   document.location.hash='bt';
	   document.getElementById("title").value = "请输入要搜索的关键字";
   
   }
   
  iib.style.height="0";
  iib.style.visibility = 'hidden';