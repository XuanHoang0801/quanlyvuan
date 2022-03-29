function CheckAll(parent){
var ids = document.getElementsByTagName('input');
for(var i=0; i<ids.length; i++){
    if(ids[i].name == "check[]"){
        ids[i].checked = parent.checked;
    }
}
}