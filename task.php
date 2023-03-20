<!DOCTYPE html>
<html lang="en">
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <title>Title of the document</title>
</head>
<script type="text/javascript">


/*GET THE PACK SIZE STARTS */


    /*CLICK ORDER BUTTON*/
    $(document).on("click","#btnOrder",function(){
  
        orderqnty=orderqnty=Number($("#txtOrder").val());
        /*Declared the variables*/
        var pack5000=0;var pack2000=0;var pack1000=0;var pack500=0;var pack250=0;

/*CHECK PACK SIZES*/
if(orderqnty>=5000){
    pack5000 = Math.trunc(orderqnty/5000);
    orderqnty=orderqnty-(pack5000*5000);
  } 
if(orderqnty>=2000){
    if(orderqnty>4750){
    pack5000++;
    orderqnty=0;

  } else
    pack2000 =Math.trunc(orderqnty/2000);
    orderqnty=orderqnty-(pack2000*2000);
  } 
  if(orderqnty>=1000){
     if(orderqnty>1750){
    pack2000++;
    orderqnty=0;
  } else
    pack1000 = Math.trunc(orderqnty/1000);
    orderqnty=orderqnty-(pack1000*1000);
  } 


  if(orderqnty>=500){
   if(orderqnty>500 && orderqnty>750){
    pack1000++;
    orderqnty=0;
  } else
    pack500 = Math.trunc(orderqnty/500);
    orderqnty=orderqnty-(pack500*500);
  } 
  
  if(orderqnty>=250 ){
if(orderqnty>250 && orderqnty<500){
    pack500++;
    orderqnty=0;
  } else
   pack250 = Math.trunc(orderqnty/250);
    orderqnty=orderqnty-(pack250*250);
    }
   if(orderqnty>0){
  //alert(orderqnty)
     pack250++;
   }
  
  pkgtxt="";
  pkg5000=pack5000>0?"5000 x "+ pack5000+ "<br>":"";
  pkg2000=pack2000>0?" 2000 x "+ pack2000+"<br>":"";
  pkg1000=pack1000>0?" 1000 x "+ pack1000+"<br>":"";
  pkg500=pack500>0?" 500 x "+ pack500+"<br>":"";
  pkg250=pack250>0?" 250 x "+ pack250+"<br>":"";
  pkgtxt='<div>'+pkg5000+ "\n"+pkg2000+ "\n"+pkg1000+ "\n"+pkg500+ "\n"+pkg250;

/*RETURN THE TEXT CONTENT*/
document.getElementById("pkgdetl").innerHTML = pkgtxt;
    })
 


/*GET THE PACK SIZE ENDS */


</script>
<body>
<div>
<h2>Enter Number of Order</h2>
<input type="text" name="txtOrder" id="txtOrder">
<button type="button" style="background-color: blue;color:white" id="btnOrder">Get Packs</button>
<div id="pkgdetl" style="font-size:18px;font-weight:bold;"></div>
    </div>
</div>
</body>
</html>
