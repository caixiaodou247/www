window.onload = function () {

}


  //美食秘笈响应函数
  function showTips(){


    var xmlhttp;
  
  if (window.XMLHttpRequest){ 
    
    // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    }
  else{ 
    // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
  //alert(num);
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200)
       {
       
        document.getElementById("tips").innerHTML=xmlhttp.responseText;
       
      }
    }//"test01.php?q="+str,true
  var url = "index.php?route="+'tips';
  url = encodeURI(url);
  xmlhttp.open("GET",url,true);
  xmlhttp.send();
  
    var sWidth = document.body.scrollWidth;
    var sHeight = document.body.scrollHeight;
    //获取可视区域高度,宽度使用屏幕宽度
    var cHeight = document.documentElement.clientHeight;
    //创建一个div
    var Mask = document.createElement("div");
    Mask.id = "mask";
    Mask.style.height = sHeight  + "px";
    Mask.style.width = sWidth + "px";
    //尾部追加div
    document.body.appendChild(Mask);

    var detail = document.getElementById('tips');
    var out = document.getElementById('out-tips'); 

    detail.style.display = "block";
    out.style.display = "block";



    var mask = document.getElementById('mask'); 
    // var detialShow = document.getElementById('tb_detail'); 


    out.onclick = function () {
      document.body.removeChild(mask);
      detail.style.display = 'none';
      out.style.display = 'none';
    }

  }