<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Print Card</title>
    <link rel="stylesheet" href="css/Qrstyle.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Zen+Dots&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body>
  <button onclick="return print()">Print</button>
<div class="cardDisplay" id="myDiv"></div>





<script src="dashboard/vendor/jquery-3.2.1.min.js"></script>
    <!--<script src="script.js"></script>-->
    <script>
    $(function(){
        PrintCard();
    });

    function PrintCard(){
    var Usertoken=localStorage.getItem("Usertoken");

$.ajax({

url:`./api/PrintCard`,

type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true

    var resultData=data.result;
    getData=``;

    for(var i=0;i<resultData.length;i++){

getData+=`

<div class="container">
      <div class="card-mode-icon"  onclick="print()">
        <span class="material-symbols-outlined print" > light_mode </span>
      </div>
      <div class="card-wrapper">
        <div class="map">
          <img src="images/map.png" class="card-map" alt="map">
        </div>
        <h2 class="card-type">Dcard</h2>
        <div class="chip">
          <img src="https://i.postimg.cc/VsCYcM46/chip.png" class="card-chip" alt="card-chip">
        </div>
        <div class="card-left">
          <h3 class="card-bin-number">${splitNumber(resultData[i].CardNumber)}</h3>
          <p class="card-date">valid through <span>09/2025</span></p>
          <!--<p class="card-owner">Eric Ford</p>-->
        </div>
        <div class="card-circle-right">


        </div>
        <div class="myQr">
        <img src="images/Qr/${resultData[i].filename}.png">
        </div>
      </div>
      <hr>

    </div>`;


}

$('.cardDisplay').html(getData);



}
else{

//alert("something is Wong");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}
function print(){
        window.print();
        return false;
    }
function splitNumber(num) {
  var numStr = num.toString(); // Convert number to string
  var numArr = numStr.split(""); // Split string into array of digits
  var groups = [];

  // Loop through digits and group them into sets of 4
  for (var i = numArr.length - 1; i >= 0; i -= 4) {
    var group = numArr.slice(Math.max(i - 3, 0), i + 1);
    groups.unshift(group.join(""));
  }

  return groups.join(" ");
}
   // window.print();
    </script>
  </body>

</html>
