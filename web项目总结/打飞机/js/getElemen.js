function $(id){
    if(typeof id=="function"){
        window.onload=id;
    }else
    if(typeof id=="string"){
    return document.getElementById(id);
}
else if(typeof id=="object"){
return id;
}  
}