
Array.prototype.uniq = function() {  
    var temp = {};

    for(var i=0; i<this.length; i++)  {  
            temp[this[i]] = 1;
    }  

    this.length = 0;
    for(var e in temp) {  
        this.push(e);
    }  
    this.sort()

    return this;  
}  


function fold_switch(){
    var minheight=20;
    var key = document.getElementById("fold_key").innerText;
    if(key=="展开"){
        document.getElementById("fold_content").style.height="auto"
        document.getElementById("fold_key").innerText="关闭";
    }else{
        //关闭
        document.getElementById("fold_content").style.pixelHeight=minheight
        document.getElementById("fold_key").innerText="展开";
    }
}

function xmlencode(string) {
    return string.replace(/\&/g,'&'+'amp;').replace(/</g,'&'+'lt;')
        .replace(/>/g,'&'+'gt;').replace(/\'/g,'&'+'apos;').replace(/\"/g,'&'+'quot;');
}
