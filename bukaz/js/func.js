function rand(n){
    var r = Math.floor(Math.random()*n+1);
    return r;
}

function ymd(a,b,c){
    var date = new Date();
    var year = date.getFullYear();
    var month = date.getMonth()+1;
    var day = date.getDate();
    return year+a+month+b+day+c;
}
