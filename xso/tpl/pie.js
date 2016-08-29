
<!-- pieHashes is a list of tuples [(hash, filename), ...] -->
function initPie(){
    pieHashes=store.get('pieHashes')
    if (undefined == pieHashes) { pieHashes=[] }
    refreshPieTable();
}

function startPie(){
    $.cookie("bakingPie",1);

    if (window.location.pathname=='/'){
        window.location.href='/search/'
    }
    else{
        document.location.reload(true)
    }
}

function dropPie(){
    $.cookie("bakingPie", null);
    clearPieHashes();
    url = document.location.href
    url = url.replace('pie=1', '')
    document.location.href=url
}

function clearPieHashes(){
    store.remove('pieHashes')
    pieHashes=[]
}

function bakePie(){
    if (pieHashes.length==0){ return;}

    var pieName=document.getElementById("pieName").value;
    if (''==pieName) {pieName='name';}
    url='/pie/'+pieName+'/'

    hashes=[];

    for (var i=0; i<pieHashes.length; i++){
        hashes.push(pieHashes[i][0]);
    }
    for (var i=0; i<hashes.length; i++){
        url+=hashes[i];
        url+='.';
    }

    clearPieHashes();
    window.location.href=url;

}

function addPieHash(hash, filename){
    pieHashes.push([hash,filename]);
    uniqPieHashes(); 

    store.set('pieHashes', pieHashes)
    refreshPieTable();
}

function delPieHash(hash, refresh){
    var todel=-1;
    for (var i=0; i<pieHashes.length; i++){
        if (hash == pieHashes[i][0]){
            todel=i;
            break;
        }
    }

    if (undefined==refresh){ refresh=true;}
    if (todel>=0){
        pieHashes.splice(todel,1);

        if (refresh){
            store.set('pieHashes', pieHashes)
            refreshPieTable();
        }
    }
}

function uniqPieHashes() {  
    var temp = {};

    for(var i=0; i<pieHashes.length; i++)  {  
            temp[pieHashes[i][0]] = pieHashes[i][1];
    }  

    pieHashes.length=0
    for(var e in temp) {  
        pieHashes.push([e, temp[e]]) 
    }  

    return this;  
}  

function redoSearch(str){
window.location.href="/search/"+str+"?cnonly=1&pie=1";
}

function refreshPieTable(){
    var tbl=document.getElementById("pie_table");

    $("#pie_table tr").remove();
    $('[rmbtn|="hash"]').remove();  // remove 移出驴排 button
    $('[addbtn="1"]').show();  // display 加入驴排 button
    $(".highlight").removeClass("highlight");

    for (var i=0; i<pieHashes.length; i++){
        var h = pieHashes[i][0]
        var filename = pieHashes[i][1]
        var newTr = tbl.insertRow();

        var newTd = newTr.insertCell();
        newTd.innerHTML="<a target='_blank' href='/detail/"+h+"'>"+filename+"</a>"

        var newTd = newTr.insertCell();
        newTd.innerHTML="<button onclick=\"redoSearch('"+xmlencode(filename)+"')\">�?</button>"        
        
        var newTd = newTr.insertCell();
        newTd.innerHTML="<button onclick=\"delPieHash('"+h+"')\">�?</button>"

        //highlit list item if any
        var searchrow=$('[hash="'+h+'"]');
        searchrow.addClass("highlight");
        searchrow.find('[addbtn="1"]').hide();
        searchrow.find('#btns').append('<button rmbtn="hash-'+h+'" onclick=\'delPieHash("'+h+'")\'>移出驴排</button>');
    }
    
}

