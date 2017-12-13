<script>
    //自动识别浏览器
    if(typeof XMLHttpRequest != 'undefined'){
        //主流方式
        var xhr = new XMLHttpRequest();
        //console.log(xhr);
        alert(xhr);
    }else{
          //ie浏览器（6/7/8）方式
        var xhr = new ActiveXObject('Microsoft.XMLHTTP');//最原始ajax对象
        var xhr = new ActiveXObject('Msxml2.XMLHTTP');
        var xhr = new ActiveXObject('Msxml2.XMLHTTP.3.0');
        var xhr = new ActiveXObject('Msxml2.XMLHTTP.6.0');
    }

//    var xhr = new XMLHttpRequest();
//    alert(xhr);
</script>
