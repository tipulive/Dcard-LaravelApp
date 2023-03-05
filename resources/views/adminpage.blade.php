<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Dashboard.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

<!--Menu Css-->
<style>
span.Formchange {
    /* width: 200px; */
    padding-top: 10px;
    padding-left: 2px;
    padding-right: 5px;
    outline: 0;
    border-bottom: 2px dashed #e0e0e0;
    /* border-width: 0 0 20px; */
    border-color: blue;
}
.Count_table{
    display: none;
}
/*loader*/
.cover-spin {
  position:fixed;
  width:100%;
  left:0;right:0;top:0;bottom:0;
  background-color: rgba(255,255,255,0.7);
  z-index:120000;

  }

  @-webkit-keyframes spin {
  from {-webkit-transform:rotate(0deg);}
  to {-webkit-transform:rotate(360deg);}
  }

  @keyframes spin {
  from {transform:rotate(0deg);}
  to {transform:rotate(360deg);}
  }
  .two_columns_75_25>.column1{
width: 100% !important;
  }
  .cover-spin::after {
  content:'';
  display:block;
  position:absolute;
  left:48%;top:40%;
  width:40px;height:40px;
  border-style:solid;
  border-color:black;
  border-top-color:transparent;
  border-width: 4px;
  border-radius:50%;
  -webkit-animation: spin .8s linear infinite;
  animation: spin .8s linear infinite;
  }
  /*loader*/
/*Navigation Menu */

.sidenav {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color:#0b1419f5;

        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
      }

      .sidenav a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-family: 'Poppins', sans-serif;
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 0.06em;
        color:#fff8f8c7;
        display: block;
        transition: 0.3s;
      }



      .sidenav a:hover {
        color: #f1f1f1;
      }

      .sidenav .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
      }
      @media screen and (max-height: 450px) {
        .sidenav {padding-top: 15px;}
        .sidenav a {font-size: 18px;}
      }
      @media only screen and (max-width : 785px) {
            .mob-logo,.sidenav{
                display: block !important;
            }
          .mob-logo{
              position: absolute;
              top: 5px;
              left:20px;
              z-index: 999999;
          }
            .logo.mymoblogo {
        position: absolute;
        top: 5px;
        left: 50%;
        transform: translate(-50%, -50%);
    }
    ul.menu-ul-center{
        display: none;
    }

        }
    /*navigation*/

</style>
<!--Menu Css-->
<!--style table -->
<style>

table {
  border: 1px solid #ccc;
  border-collapse: collapse;
  margin: 0;
  padding: 0;
  width: 100%;
  table-layout: fixed;
}

table caption {
  font-size: 1.5em;
  margin: .5em 0 .75em;
}

table tr {
  background-color: #f8f8f8;
  border: 1px solid #ddd;
  padding: .35em;
}

table th,
table td {
  padding: .625em;
  text-align: center;
}

table th {
  font-size: .85em;
  letter-spacing: .1em;
  text-transform: uppercase;
}


@media screen and (max-width: 800px) {
  table {
    border: 0;
  }

  table caption {
    font-size: 1.3em;
  }

  table thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  table tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }

  table td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }

  table td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }

  table td:last-child {
    border-bottom: 0;
  }
}




@media screen and (max-width: 4800px) {
  .mytable {
    border: 0;
  }

  .mytable caption {
    font-size: 1.3em;
  }

  .mytable thead {
    border: none;
    clip: rect(0 0 0 0);
    height: 1px;
    margin: -1px;
    overflow: hidden;
    padding: 0;
    position: absolute;
    width: 1px;
  }

  .mytable tr {
    border-bottom: 3px solid #ddd;
    display: block;
    margin-bottom: .625em;
  }

  .mytable td {
    border-bottom: 1px solid #ddd;
    display: block;
    font-size: .8em;
    text-align: right;
  }

  .mytable td::before {
    /*
    * aria-label has no advantage, it won't be read inside a table
    content: attr(aria-label);
    */
    content: attr(data-label);
    float: left;
    font-weight: bold;
    text-transform: uppercase;
  }

  .mytable td:last-child {
    border-bottom: 0;
  }
}














/* general styling */


</style>
<!--style table -->
<!--header-->
@include('components.header.header')
<!--header-->
<!--navigation Mobile-->
<div class="cover-spin"></div>
<span  style="font-size:30px;cursor:pointer" onclick="openNav()" class="mob-logo text-dark">&#9776; </span>
     <div id="mySidenav" class="sidenav" >
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

            <div class="app-sidebar sidebar-shadow bg-vicious-stance sidebar-text-light">

<div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu metismenu">
                        <li class="app-sidebar__heading">Report</li>
                            <li>
                                <a href="#View All Sales" onclick="return AllOpenSaleReport()">
                                    <i class="metismenu-icon pe-7s-graph2"></i> All Sales
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Profile</li>
                            <li>
                                <a href="#View All Sales" onclick="return UpdateProfileMenu()">
                                    <i class="metismenu-icon pe-7s-graph2"></i> Update
                                </a>
                            </li>
                        <li class="app-sidebar__heading">Users</li>
                            <li>
                                <a href="#View All Users" onclick="return ViewAllUsers()">
                                    <i class="metismenu-icon pe-7s-graph2"></i>View
                                </a>
                            </li>

                              <li class="app-sidebar__heading">Stocks</li>
                            <li class="mm-active">
                                <a href="#" aria-expanded="true">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Products
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>

                            </li>
                                <ul class="mm-collapse mm-show" style="">
                                    <li>
                                        <a href="#View All Products" onclick="return ViewAllProducts()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>View
                                        </a>
                                    </li>

                                    <li>
                                        <a  href="#Create Product" onclick="return CreateProductMenu()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Add New
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#View All Products" onclick="return ViewAllProductWithEdit()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Edit
                                        </a>
                                    </li>

                                    </li>




                                </ul>


                          <!--CardCode-->
                          <li class="app-sidebar__heading">Card</li>
                            <li class="mm-active">
                                <a href="#" aria-expanded="true">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Card
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                            </li>
                                <ul class="mm-collapse mm-show" style="">
                                    <li>
                                        <a href="#View All Products" onclick="return CreateMultipleCardMenu()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Generate
                                        </a>
                                    </li>

                                    <li>
                                        <a  href="/ViewCard" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Print Card
                                        </a>
                                    </li>


                                    </ul>

                                    <li class="app-sidebar__heading">Promotion</li>
                            <li class="mm-active">
                                <a href="#" aria-expanded="true">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Promotion
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                            </li>
                                <ul class="mm-collapse mm-show" style="">
                                    <li>
                                        <a href="#View All Products" onclick="return CreatePromotionEventMenu()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Create
                                        </a>
                                    </li>

                                    <li>
                                        <a  href="#Create Product" onclick="return GetAllPromotionEvent()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>View
                                        </a>
                                    </li>


                                    </ul>
                                    <li class="app-sidebar__heading">Others</li>
                            <li class="mm-active">
                                <a href="#" aria-expanded="true">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Others
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                            </li>
                                <ul class="mm-collapse mm-show" style="">
                                    <li>
                                        <a href="#View All Products" onclick="return GetAllParticipateEvent()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>View Events
                                        </a>
                                    </li>

                                    <li>
                                        <a  href="#Create Product" onclick="return GetAllBonus()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Bonus
                                        </a>
                                    </li>

                                    <li>
                                        <a  href="#Create Product" onclick="return GetAllBalance()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Balance
                                        </a>
                                    </li>


                                    </ul>

                                    <!--CardCode-->

                                      <!--SafariCode-->
                                 <li class="app-sidebar__heading">Safari</li>
                            <li class="mm-active">
                                <a href="#" aria-expanded="true">
                                    <i class="metismenu-icon pe-7s-rocket"></i>items Safari
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                            </li>
                                <ul class="mm-collapse mm-show" style="">
                                    <li>
                                        <a href="#View All Products" onclick="return CheckSafari()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Create
                                        </a>
                                    </li>

                                    <li>
                                        <a  href="#Create Product" onclick="return ViewSafari()" aria-expanded="false">
                                            <i class="metismenu-icon"></i>View
                                        </a>
                                    </li>


                                    </ul>

                                    <!--SafariCode-->
                                <li class="app-sidebar__heading mylogout" style="color:rgb(195 211 88);" onclick="logout()">

                                Logout<i class="fa text-white fa-power-off  pr-1 pl-1"></i>

                                </li>
                            </li>

                         <!--   <li class="app-sidebar__heading">Menu</li>
                            <li class="mm-active">
                                <a href="#" aria-expanded="true">
                                    <i class="metismenu-icon pe-7s-rocket"></i>Dashboards
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul class="mm-collapse mm-show" style="">
                                    <li>
                                        <a href="index.html" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Analytics
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboards-commerce.html" aria-expanded="false">
                                            <i class="metismenu-icon"></i>Commerce
                                        </a>
                                    </li>
                                    <li>
                                        <a href="dashboards-sales.html" aria-expanded="false">
                                            <i class="metismenu-icon">
                                            </i>Sales
                                        </a>
                                    </li>
                                    <li class="mm-active">
                                        <a href="#" aria-expanded="true">
                                            <i class="metismenu-icon"></i> Minimal
                                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                        </a>
                                        <ul class="mm-collapse mm-show" style="">
                                            <li>
                                                <a href="dashboards-minimal-1.html">
                                                    <i class="metismenu-icon"></i>Variation 1
                                                </a>
                                            </li>
                                            <li>
                                                <a href="dashboards-minimal-2.html">
                                                    <i class="metismenu-icon"></i>Variation 2
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="dashboards-crm.html" aria-expanded="false">
                                            <i class="metismenu-icon"></i> CRM
                                        </a>
                                    </li>
                                </ul>
                            </li>-->


                        </ul>
                    </div>

</div>

            <!--<li ><a href="#Search Product" onclick="return ViewSearchForm()">Create Facture</a></li>-->
           <!-- <li ><a href="#Display Order" onclick="return DisplayOrderData()">Display Order</a></li>-->
            <!--<li ><a href="#Create Contact" onclick="return CreateContactMenu()">Create Contact</a></li>-->

          </div>
        <!--navigation Mobile-->
</head>
<body>

<!--search form-->
<div class="container">
<!--form -->
<div class="main-card mb-3 card p-4">
<div class="MainbigTitle">



</div>
<div class="MainForm">




<!--Modal table-->

<div class="modal fade bd-example-modal-lg viewOrder" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content ">

<div class="modal-header MyTitleModal"></div>
      <!--Order Request table-->
<div class="ModalPassword">
    <table class="viewReqTable">

<thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Code</th>
    <th scope="col">qty</th>
    <th scope="col">pcs</th>
    <th scope="col">dz</th>

  </tr>
</thead>
<tbody>


</tbody>
</table>
</div>
                     <!--Order Request-->
      ...
    </div>
  </div>
</div>

<!--Modal table-->

<div class="Count_table">
<h6 class="text-center orderIdDsp"></h6>
<div class="float-left pt-2 pb-2">
<button type="button" class="btn btn-lg btn-danger" onclick="return DisplayOrderData()">Back</button>
</div>

</div>

            <!--Order Request table-->
            <div class="OrderDspTable">
            <table class="MyRequest_table">


  <tbody>


  </tbody>
</table>
</div>
                       <!--Order Request-->
        </div>
<!--form -->
</div>


<!--search form-->
@include('components.Footerjs.footerjs')
@include('Search')

<script>
//search page


$(function() {
   // DisplayOrderData();
   //AllOpenSaleReport();
   $('.cover-spin').hide();
   //ViewSearchForm();

})
//CardCode
function CreateMultipleCardMenu(){
    $('.MainbigTitle').html("");
$('.MyRequest_table').html("");
    closeNav();
    $('.MainForm').html(`
    <h5 class="text-center">Generate Card</h5>
    <form class="formDataCreate" onsubmit="return CreateMultipleCard()">

<div class="form-group">
<label>Number <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="numberQr" required/>
</div>
<div class="form-group">

<button  class="btn btn-danger mycreateProduct" >Submit</button>
</div>


</form>
    `);




}
function CreateMultipleCard(){//Company
    $('.cover-spin').show();

       //
       var Usertoken=localStorage.getItem("Usertoken");

   $.ajax({

url:`./api/CreateMultipleCard`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
    dataType: "json",
data:$('.formDataCreate').serialize(),
success:function(data){
if(data.status){//return data as true

    //localStorage.setItem('Usertoken',data.token);
 //console.log(hashfunction);
 $('.cover-spin').hide();

 //ViewAllProducts();

    alert("Card generated Successfully");
    $('.formDataCreate :input').val("");
    $('.mycreateProduct').val("Submit");

   // LoadSavedComeFrom();

}
else{
alert("Something is wrong please contact system Admin");
$('.cover-spin').hide();

}



},
error:function(data){
    console.log(data);
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;

}


function CreatePromotionEventMenu(){
    $('.MainbigTitle').html("");
$('.MyRequest_table').html("");
    closeNav();
    $('.MainForm').html(`
    <h5 class="text-center">Create Promotion</h5>

    <form class="formDataCreate" onsubmit="return CreatePromotionEvent()">

<div class="form-group">
<label> Promotion Name <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="promoName" required/>
</div>
<div class="form-group">

<div class="form-group">
<label>Reach<span class="text-danger">*</span></label>
<input type="text" class="form-control Promo_reach" name="reach" value="0" required onchange="return changePromoMsg()" onkeyup="changePromoMsg()"/>
</div>

<div class="form-group">
<label>Bonus<span class="text-danger">*</span></label>
<input type="text" class="form-control Promo_gain" name="gain" value="0" required onchange="return changePromoMsg()" onkeyup="changePromoMsg()"/>
</div>
<p><span class="text-danger">First text</span> <span class="text-primary">Reach</span> <span class="text-info">second Text</span> <span class="text-success">gain</span> <span class="text-dark">third Text</span></p>
<h6><h6 class="Promo_txtmsg text-danger">If you reach 0 i will give you 0</h6> <span class="reqclass"></span></h6>
<hr>
<div class="form-group">
  <label for="exampleFormControlTextarea3">Message 1</label>
  <textarea class="form-control Promo_msg1" name="msg1" placeholder="Enter msg1" rows="2" onchange="return changePromoMsg()" onkeyup="changePromoMsg()">If you reach</textarea>
</div>

<div class="form-group">
  <label for="exampleFormControlTextarea3">Message 2</label>
  <textarea class="form-control Promo_msg2" name="msg2" placeholder="Enter Comment" rows="2" onchange="return changePromoMsg()" onkeyup="changePromoMsg()">i will give you</textarea>
</div>
<div class="form-group">
  <label for="exampleFormControlTextarea3">Message 2</label>
  <textarea class="form-control Promo_msg3" name="msg2" placeholder="Enter Comment" rows="2" onchange="return changePromoMsg()" onkeyup="changePromoMsg()">i will give you</textarea>
</div>
<div class="form-group d-none">
  <label for="exampleFormControlTextarea3">Message 3</label>
  <textarea class="form-control Promo_submit" name="promoMsg" placeholder="Enter Comment" rows="7" ></textarea>
</div>


<div class="form-group">
    <label for="">From Date-To</label>
    <input type="text" class="form-control" name="extended_date" id="extended_date">
    </div>

    <div class="form-group">
    <label for="">Choose Status</label>
<select id="Ultra" name="status"  class="form-control">
     <option value="on" selected>On</option>
     <option value="off">off</option>

</select>
</div>

<div class="form-group">

<button  class="btn btn-danger mycreateProduct" >Submit</button>
</div>


</form>
    `);


    flatpickr('#extended_date',{
    enableTime: true,
  mode: "range",
  minDate: "today",
    dateFormat: "d-m-Y H:i:s",
    time_24hr: true
    //defaultDate: [start_time, end_time]
});

}
function changePromoMsg(){
    var Promo_reach=$('.Promo_reach').val();
    var Promo_gain=$('.Promo_gain').val();
    var Promo_msg1=$('.Promo_msg1').val();
    var Promo_msg2=$('.Promo_msg2').val();
    var Promo_msg3=$('.Promo_msg3').val();
    $('.Promo_submit').val(`${Promo_msg1} ${Promo_reach} ${Promo_msg2} ${Promo_gain} ${Promo_msg3} `);
    $('.Promo_txtmsg').text(`${Promo_msg1} ${Promo_reach} ${Promo_msg2} ${Promo_gain} ${Promo_msg3}`);

}
function CreatePromotionEvent(){//Company
    $('.cover-spin').show();

       //
       var Usertoken=localStorage.getItem("Usertoken");

   $.ajax({

url:`./api/CreatePromotionEvent`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
    dataType: "json",
data:$('.formDataCreate').serialize(),
success:function(data){
if(data.status){//return data as true

    //localStorage.setItem('Usertoken',data.token);
 //console.log(hashfunction);
 $('.cover-spin').hide();

 //ViewAllProducts();

    alert("Promotion Created Successfully");
    $('.formDataCreate :input').val("");
    $('.mycreateProduct').val("Submit");

   // LoadSavedComeFrom();

}
else{
alert("Something is wrong please contact system Admin");
$('.cover-spin').hide();

}



},
error:function(data){
    console.log(data);
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;

}



//CardCode

//SafariCode Javascript//
function CheckSafari(){
    closeNav();

    $('.MainbigTitle').html("");
$('.MyRequest_table').html("");
$('.MainForm').html("");
    SafariForm();
    return false;
}
function LoadSafariAddItemBtnTemplate(data){
    $('.MainbigTitle').html(`
<h5 class="text-center d-none"> <button type="button" class="btn btn-danger" onclick="return FormCloseSafari('${data.safariuid}')">Close Safari</button></h5>
`);
$('.MyRequest_table').html("");
var getData=`
<hr>
<h6 class="text-center text-danger">${data.name}</h6>
<hr>
<div class="pb-2">
<button type="button" class="btn btn-dark" onclick="return FormAddItemSafari('${btoa(data.safariuid)}','${btoa(data.name)}')">Add Product Item</button>

<button type="button" class="btn btn-primary" onclick="return FormAddItemSafariSpent('${btoa(data.safariuid)}','${btoa(data.name)}')">Add Spending</button>
</div>
`;




$('.MainForm').html(getData);
}
function LoadSafariItemTemplate(data){
    //

    var resultDataInterest=data.CalculateInterest;
    var resultData=data.ProductResult;
    var resultDataSpend=data.OtherSpend;


$('.MainbigTitle').html(`
<h5 class="text-center d-none"> <button type="button" class="btn btn-danger" onclick="return FormCloseSafari('${data.safariuid}')">Close Safari</button></h5>
`);
$('.MyRequest_table').html("");

getSpending=`
<hr>
<h6 class="text-center text-danger">Spending Table</h6>
<hr>
<table class="viewReqTable mytable">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col" title="Price of All Qty Before any other spend">Price A</th>

<th scope="col">Comment</th>
<th scope="col">Created at</th>


</tr>
</thead>
<tbody>
`;
for(var i=0;i<resultDataSpend.length;i++){

getSpending+=`

<tr>
 <td data-label="#">${i+1}</td>
 <td data-label="Name">${resultDataSpend[i].name}</td>
 <td data-label="Price A" title="Price of All Qty Before any other spend">${resultDataSpend[i].price}</td>

 <td data-label="comment" >${resultDataSpend[i].comment}</td>
 <td data-label="created_at" >${resultDataSpend[i].created_at}</td>



</tr>`;

}
getSpending+=`
</tbody>
</table>`;

getData=`
<h6 class="text-center"><span class="text-primary">${data.name}</span></h6>
<h6 class="text-right"><span class="text-primary">Total Product:</span>${resultDataInterest.TotalBuyProduct} $</h6>

<h6 class="text-right"><span class="text-primary">Tot Sold Price:</span><span>${resultDataInterest.TotalSoldProduct} $</span></h6>
<h6 class="text-right"><hr></h6>
<h6 class="text-right"><span class="text-danger">Profit</span>:<span >${resultDataInterest.interest}</span></h6>
<div class="flex-center">


<div class="form-group">
<label>Safari Name:${data.name}</label>

</div>
<div class="form-group">
<label title="Total Qty of product">Total Qty:${data.TotalQtyProduct}</label>

</div>

<div class="form-group">
<label title="Total Of Price of Other Spending">Total Price:<span>${data.TotalPriceOtherSpend} $</span></label>

</div>



</div>

<div class="pb-2">

<button type="button" class="btn btn-primary" onclick="return FormAddItemSafariSpent('${btoa(data.safariuid)}','${btoa(data.name)}')">Add Spending</button>
</div>

${getSpending}

<hr>
<h6 class="text-center text-danger">Product Table</h6>
<hr>
<div class="pb-2">
<button type="button" class="btn btn-dark" onclick="return FormAddItemSafari('${btoa(data.safariuid)}','${btoa(data.name)}')">Add Product Item</button>
</div>
<table class="viewReqTable mytable">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Qty</th>
<th scope="col" title="Price of All Qty Before any other spend">Price A</th>
<th scope="col">PCS</th>
<th scope="col" title="Price per 1 pieces after any other spend">Price 1PC</th>
<th scope="col" title="Price per 1 Bds after any other spend">Price 1Bds</th>
<th scope="col" title="Price Per Qty after any other spend">Price SumQty</th>

<th scope="col" title="Price That Will Add After Spend">Price A</th>
<th scope="col" title="Add Margin Interest on Sold">Sold Int</th>
<th scope="col" title="Sold Price Per Piece">Sold Price 1PC</th>
<th scope="col" title="Sold Price Per 1BDS">Sold Price 1BDS</th>
<th scope="col" title="Sold Price Per Qty of BDS">Sold Price Qty</th>
<th scope="col">Comment</th>
<th scope="col">Created at</th>






<th scope="col">Action</th>

</tr>
</thead>
<tbody>
`;

for(var i=0;i<resultData.length;i++){

 getData+=`

 <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Items">${resultData[i].uid}</td>
  <td data-label="Qty">${resultData[i].qty}</td>
  <td data-label="Price A" title="Price of All Qty Before any other spend">${resultData[i].price}</td>
  <td data-label="PCS">${resultData[i].pcs}</td>
  <td data-label="Price 1PC" title="Price per 1 pieces after any other spend" class="text-primary">${resultData[i].pricePerPiece}</td>
  <td data-label="Price 1Bds" title="Price per 1 Bds after any other spend" class="text-primary">${resultData[i].ProductPriceOneQty}</td>
  <td data-label="Price ${resultData[i].qty}Bds" title="Price per ${resultData[i].qty} Bds after any other spend">${resultData[i].ProductPriceNumberQty}</td>

  <td data-label="Price A" title="Price That Will Add After Spend">${resultData[i].PriceToAdd}</td>
  <td data-label="Sold Int" title="Add Margin Interest on Sold"><span class="Formchange" id="CustomPrice_Add_1" onchange="return  OnChangeSoldInt(this,'${btoa(resultData[i].id)}','${btoa(resultData[i].uid)}','${btoa(resultData[i].safariuid)}','${btoa(resultData[i].qty)}','${btoa(resultData[i].price)}','${btoa(resultData[i].pcs)}','${btoa(resultData[i].comment)}','${btoa(data.name)}','${btoa(resultData[i].SoldInterestOneQty)}')" onkeyup="return OnChangeSoldInt(this,'${btoa(resultData[i].id)}','${btoa(resultData[i].uid)}','${btoa(resultData[i].safariuid)}','${btoa(resultData[i].qty)}','${btoa(resultData[i].price)}','${btoa(resultData[i].pcs)}','${btoa(resultData[i].comment)}','${btoa(data.name)}','${btoa(resultData[i].SoldInterest)}')" contenteditable="true">${resultData[i].SoldInterestOneQty}</span></td>
  <td data-label="Sold Price 1PC" title="Sold Price Per Piece" class="text-danger">${resultData[i].SoldPricePerPiece}</td>
  <td data-label="Sold Price 1BDS" title="Sold Price Per 1BDS" class="text-danger">${resultData[i].SoldPriceOneQty}</td>
  <td data-label="Sold Price${resultData[i].qty} Qty" title="Sold Price Per ${resultData[i].qty} Qty of BDS">${resultData[i].SoldPriceNumberQty}</td>
  <td data-label="comment" >${resultData[i].comment}</td>
  <td data-label="created_at" >${resultData[i].created_at}</td>


  <td data-label="Action"><i class="fas fa-edit text-primary mylogout" title="Edit this Items" onClick="return ViewEditItemSafari('${btoa(resultData[i].id)}','${btoa(resultData[i].uid)}','${btoa(resultData[i].safariuid)}','${btoa(resultData[i].qty)}','${btoa(resultData[i].price)}','${btoa(resultData[i].pcs)}','${btoa(resultData[i].comment)}','${btoa(data.name)}','${btoa(resultData[i].SoldInterestOneQty)}')"></i> <i class="fas fa-trash text-dark mylogout " title="Delete This Item" onClick="return DeleteItemSafari('${resultData[i].id}','${resultData[i].uid}','${resultData[i].name}','${data.profit}','${data.transpfees}')"></i></td>


</tr>`;

}
getData+=`
</tbody>
</table>`;

$('.MainForm').html(getData);


    //
}
function ViewEditItemSafari(id,uid,safariuid,qty,price,pcs,comment,name,SoldInterest){


    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Edit Item</strong></h5>`)
$('.ModalPassword').html(`

<form class="formEditItemSafari" onsubmit="return SafariEditItem()">
<div class="p-2">
<div class="form-group ">
<input type="hidden" class="form-control" name="id" value="${atob(id)}"/>
<input type="hidden" class="form-control" name="safariuid" value="${atob(safariuid)}"/>
<input type="hidden" class="form-control" name="name" value="${atob(name)}"/>
<input type="hidden" class="form-control" name="SoldInterest" value="${atob(SoldInterest)}"/>


</div>

<div class="form-group ">
<label>Item Name</label>
<input type="text" class="form-control item_nameAdd" autocomplete="off" name="uid" onkeyup="SafariautoCompleteTopItem(this,'${btoa('product')}')" value="${atob(uid)}" required/>
</div>
<ul class="list-group  autoCompleteTopItem">

</ul>
<div class="form-group ">
<label>qty</label>
<input type="number" class="form-control" name="qty" value="${atob(qty)}" required/>
</div>

<div class="form-group ">
<label>price</label>
<input type="text" class="form-control" name="price" value="${atob(price)}" required/>
</div>

<div class="form-group ">
<label>pcs in 1BDS</label>
<input type="text" class="form-control" name="pcs" value="${atob(pcs)}" required/>
</div>

<div class="form-group">
  <label for="exampleFormControlTextarea3">Enter Comment</label>
  <textarea class="form-control" name="comment" placeholder="Enter Comment" rows="7">${atob(comment)}</textarea>
</div>




<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`);
EmptyautoCompleteTopItem();
}
function OnChangeSoldInt(thisdata,id,uid,safariuid,qty,price,pcs,comment,name,SoldInterest){
   // $('.cover-spin').show();
  //console.log(thisdata.innerHTML);
  var solidData=Number(thisdata.innerHTML);
  if(isNaN(solidData)) {
  console.log("num is a number");
}
else{
    if(solidData=="")
    {
        console.log("empty");
    }
    else{
        //console.log(solidData);
        //
        var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/SafariEditItem`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
//dataType: "json",
data:{
    id:atob(id),
    uid:atob(uid),
    safariuid:atob(safariuid),
    qty:atob(qty),
    price:atob(price),
    pcs:atob(pcs),
    comment:atob(comment),
    name:atob(name),
    SoldInterest:solidData

},
success:function(data){
if(data.status){//return data as true
   // $('.cover-spin').hide();
    //console.log(`done $${CalculateDeclClass}`);
    $('.viewOrder').modal('hide');
    //var item_nameAdd=$('.item_nameAdd').val();
    var safariId=btoa(data.safariuid);
    var safariName=btoa(data.safariName);
    ViewItemSafari(safariId,safariName);
    //$(`.${CalculateDeclClass}`).click();
    //alert(` Item ${item_nameAdd} added `);
    /*$('.MainForm').html(`
    <h5 class="text-center">Order List</h5>
    `);*/
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
        //
    }

}
return false;
}
function SafariEditItem(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/SafariEditItem`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formEditItemSafari').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    //console.log(`done $${CalculateDeclClass}`);
    $('.viewOrder').modal('hide');
    //var item_nameAdd=$('.item_nameAdd').val();
    var safariuid=btoa(data.safariuid);
    var safariName=btoa(data.safariName);
    ViewItemSafari(safariuid,safariName);
    //$(`.${CalculateDeclClass}`).click();
    //alert(` Item ${item_nameAdd} added `);
    /*$('.MainForm').html(`
    <h5 class="text-center">Order List</h5>
    `);*/
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}
function DeleteItemSafari(id,uid,name,profit,transpfees){
    if(confirm(`Do you Want Delete ${name} in this Safari?`))
    {
        $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeleteItemSafari`,//close Safari
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    id:id,
    uid:uid,
    profit:profit,
    transpfees:transpfees
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();

   alert("Close Query Submitted Successfully")
   CheckSafari();

}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;

    }

}
function FormCloseSafari(uid){
    if(confirm('Do you Want to Close this Safari?'))
    {
        $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminCloseSafari`,//close Safari
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    uid:uid,
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();

   alert("Close Query Submitted Successfully")
   AllOpenSaleReport();

}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
    }

}
function SafariForm(){

    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Create Safari</strong></h5>`)
$('.ModalPassword').html(`
<form class="formSafariCreate" onsubmit="return formSafariCreate()">
<div class="p-2">
<div class="form-group ">
<label>Enter Name</label>
<input type="text" class="form-control" name="name" required/>
</div>

<div class="form-group">
  <label for="exampleFormControlTextarea3">Enter Comment</label>
  <textarea class="form-control" name="comment" placeholder="Enter Comment" rows="7"></textarea>
</div>



<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
}

function formSafariCreate(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/SafariCreate`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formSafariCreate').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    $('.viewOrder').modal('hide');
    LoadSafariItemTemplate(data);
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}


function FormAddItemSafariSpent(safariuid,safariName)
{

    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Add Item ${atob(safariName)}</strong></h5>`)
$('.ModalPassword').html(`

<form class="formAddItemSafari" onsubmit="return SafariAddItem()">
<div class="p-2">
<div class="form-group ">

<input type="hidden" class="form-control" name="safariuid" value="${atob(safariuid)}"/>
<input type="hidden" class="form-control" name="name" value="${atob(safariName)}"/>
<input type="hidden" class="form-control" name="typeData" value="spend"/>

</div>

<div class="form-group right-inner-addon">
<label>Item Name</label>
<input type="text" class="form-control item_nameAdd" autocomplete="off" name="uid" onkeyup="SafariautoCompleteTopItem(this,'${btoa('spend')}')" required/>
<span class="autocompleteIcon"></span>
</div>
<ul class="list-group  autoCompleteTopItem">

</ul>
<div class="form-group d-none">
<label>qty</label>
<input type="number" class="form-control" name="qty" value="0" />
</div>


<div class="form-group ">
<label>price</label>
<input type="text" class="form-control" name="price" required/>
</div>


<div class="form-group">
  <label for="exampleFormControlTextarea3">Enter Comment</label>
  <textarea class="form-control" name="comment" placeholder="Enter Comment" rows="7"></textarea>
</div>



<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
    //

}
function FormAddItemSafari(safariuid,safariName){

$('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Add Item ${atob(safariName)}</strong></h5>`)
$('.ModalPassword').html(`

<form class="formAddItemSafari" onsubmit="return SafariAddItem()">
<div class="p-2">
<div class="form-group ">


<input type="hidden" class="form-control" name="safariuid" value="${atob(safariuid)}"/>
<input type="hidden" class="form-control" name="name" value="${atob(safariName)}"/>
<input type="hidden" class="form-control" name="typeData" value="product"/>

</div>

<div class="form-group right-inner-addon">
<label>Item Name</label>
<input type="text" class="form-control item_nameAdd" autocomplete="off" name="uid" onkeyup="SafariautoCompleteTopItem(this,'${btoa("product")}')" required/>
<span class="autocompleteIcon"></span>
</div>
<ul class="list-group  autoCompleteTopItem">

</ul>
<div class="form-group ">
<label>qty</label>
<input type="number" class="form-control" name="qty" required/>
</div>
<div class="form-group ">
<label>Add Pcs in 1BDS</label>
<input type="text" class="form-control" name="pcs" />
</div>
<div class="form-group ">
<label>price</label>
<input type="text" class="form-control" name="price" required/>
</div>


<div class="form-group">
  <label for="exampleFormControlTextarea3">Enter Comment</label>
  <textarea class="form-control" placeholder="Enter Comment" rows="7"></textarea>
</div>


<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
}


function EmptyautoCompleteTopItem(){
    $('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();
    $('.autocompleteIcon').html("");
}
function SafariautoCompleteTopItem(thisdata,typeData){
//

if(thisdata.value=="") return EmptyautoCompleteTopItem();
//

var Usertoken=localStorage.getItem("Usertoken");
   //search products
   $.ajax({

url:`./api/SafariItemSearch`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    ItemName:thisdata.value,
    typeData:atob(typeData)
},
success:function(data){
if(data.status){//return data as true

    $('.autoCompleteTopItem').show();

var data=data.result;
 var getdata="";
 for(var i=0;i<data.length;i++){

    getdata+=`
    <li class="list-group-item d-flex justify-content-between align-items-center mylogout myhover" onclick="return addItemDeclar('${data[i].uid}')">
    ${data[i].uid}
    <span class="badge "></span>
  </li>
    `;

 }

 $('.autoCompleteTopItem').html(getdata);
 $(`.autocompleteIcon`).html(`<i class="fa fa-times-circle text-danger" onclick="return EmptyautoCompleteTopItem()"></i>`);



}
else{
    /*$('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();*/
    EmptyautoCompleteTopItem();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
//
//
}
function addItemDeclar(itemName){
    $('.item_nameAdd').val(itemName);
    $('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();
}
function SafariAddItem(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/SafariAddItem`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formAddItemSafari').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    $('.viewOrder').modal('hide');
    console.log(`done $${CalculateDeclClass}`);

    $('.formAddItemSafari .form-control').val("");
    //var item_nameAdd=$('.item_nameAdd').val();
    var safariuid=btoa(data.safariuid);
    var safariName=btoa(data.safariName);
    ViewItemSafari(safariuid,safariName);
    //$(`.${CalculateDeclClass}`).click();
    //alert(` Item ${item_nameAdd} added `);
    /*$('.MainForm').html(`
    <h5 class="text-center">Order List</h5>
    `);*/
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}



function AdminSafariCalculate(uid,plaque,transpfees,profit,totClass){
    var totalqty=$(`.${totClass}`).text();
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminSafariCalculate`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    uid:uid,
    plaque:plaque,
    transpfees:transpfees,
    profit:profit,
    totalqty:totalqty
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    console.log(data.xdata);
    CheckSafari();
 //console.log(hashfunction);


}
else{
    alert("already updated");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}

function ViewSafari(){
    var Usertoken=localStorage.getItem("Usertoken");

$.ajax({

url:`./api/SafariGetAll`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true


var resultData=data.result;


$('.MainbigTitle').html(`
<h5 class="text-center"> Safaris</h5>
`);
$('.MyRequest_table').html("");
getData=`


<table class="viewReqTable">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Comment</th>
<th scope="col">Created At</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>
`;

for(var i=0;i<resultData.length;i++){

 getData+=`

 <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Name">${resultData[i].name}</td>
  <td data-label="Comment">${resultData[i].comment}</td>
  <td data-label="CreatedAt">${resultData[i].created_at}</td>
  <td data-label="Action"><i class="fas fa-eye text-primary mylogout" title="View Safari Items Load" onClick="return ViewItemSafari('${btoa(resultData[i].uid)}','${btoa(resultData[i].name)}')"></i> <i class="fas fa-edit text-primary mylogout" title="Edit this Safari" onClick="return ViewEditSafari('${btoa(resultData[i].uid)}','${btoa(resultData[i].name)}','${btoa(resultData[i].comment)}','${btoa(resultData[i].uidCreator)}','${btoa(resultData[i].subscriber)}')"></i> <i class="fas fa-trash text-dark mylogout " title="Delete This Safari" onClick="return DeleteSafari('${btoa(resultData[i].uid)}','${btoa(resultData[i].name)}','${btoa(resultData[i].comment)}','${btoa(resultData[i].uidCreator)}','${btoa(resultData[i].subscriber)}')"></i></td>


</tr>`;

}
getData+=`
</tbody>
</table>`;

$('.MainForm').html(getData);



//console.log(hashfunction);
//TableDisplayOrderTemplate(data)




}
else{

$('.MyRequest_table').html("");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}
function ViewEditSafari(uid,name,comment,uidCreator,subscriber){
    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Edit Safari</strong></h5>`)
$('.ModalPassword').html(`
<form class="formSafariEdit" onsubmit="return SafariEdit()">
<div class="p-2">
<div class="form-group ">
<label>Name</label>
<input type="hidden" class="form-control" name="uid" value="${atob(uid)}" required/>
<input type="text" class="form-control" name="name" value="${atob(name)}" required/>
</div>

<div class="form-group ">
<label for="exampleFormControlTextarea3">Enter Comment</label>
  <textarea class="form-control" name="comment" placeholder="Enter Comment" rows="7">${atob(comment)}</textarea>

</div>





<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
}
function SafariEdit(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/SafariEdit`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formSafariEdit').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    ViewSafari();
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}
function DeleteSafari(uid,name,comment,uidCreator,subscriber){
    if(confirm(`Do you Want to Delete this Safari that has this Plaque ${atob(name)}`))
    {

        $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/SafariDelete`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    uid:atob(uid),
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    ViewSafari();
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
    }
}
function ViewItemSafari(uid,name){

    var Usertoken=localStorage.getItem("Usertoken");

$.ajax({

url:`./api/SafariCalculate`,
type:'get',
data: {
safariuid:atob(uid),
name:atob(name)
},
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true

LoadSafariItemTemplate(data);



}
else{
    LoadSafariAddItemBtnTemplate(data);
$('.MyRequest_table').html("");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}

//End SafariCode Javascript//


//Declaration


function CheckDeclaration(){
    closeNav();

    var Usertoken=localStorage.getItem("Usertoken");

    $.ajax({

url:`./api/AdminCheckDeclaration`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },

success:function(data){


if(data.status){//return data as true

    LoadDeclarationItemTemplate(data);



}
else{
    $('.MainbigTitle').html("");
$('.MyRequest_table').html("");
$('.MainForm').html("");
    DeclarationForm();

}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
}
function LoadDeclarationItemTemplate(data){
    //
    var resultData=data.result;

var totClass=data.plaque+'_'+data.uid;
var totAmountDec="amount"+data.plaque+'_'+data.uid;
var totAll="all"+data.plaque+'_'+data.uid;
CalculateDeclClass="calc"+data.plaque+'_'+data.uid;
$('.MainbigTitle').html(`
<h5 class="text-center"> <button type="button" class="btn btn-danger" onclick="return FormCloseDeclaration('${data.uid}')">Close Declaration</button></h5>
`);
$('.MyRequest_table').html("");
getData=`

<h6 class="text-right"><span class="text-primary">Transport:</span>${data.transpfees}</h6>
<h6 class="text-right"><span class="text-primary">Profit:</span>${data.profit}</h6>
<h6 class="text-right"><span class="text-primary">Tot Price:</span><span class="${totAmountDec}"></span></h6>
<h6 class="text-right"><hr></h6>
<h6 class="text-right"><span class="text-danger">Total ALL</span>:<span class="${totAll}"></span></h6>
<div class="flex-center">


<div class="form-group">
<label>Plaque:${data.plaque}</label>

</div>
<div class="form-group">
<label>Exchange:${data.exchangerate}</label>

</div>

<div class="form-group">
<label>TotalQty:<span class="${totClass}"></span></label>

</div>



</div>
<button type="button" class="d-none btn btn-dark  ${CalculateDeclClass} " onclick="return AdminDeclarationCalculate('${data.uid}','${data.plaque}','${data.transpfees}','${data.profit}','${totClass}')">Calculate</button>
<div class="pb-2">
<button type="button" class="btn btn-dark" onclick="return FormAddItemDeclaration('${data.uid}','${data.plaque}','${data.transpfees}','${data.profit}','${totClass}')">Add Item</button>
<button type="button" class="btn btn-primary" onclick="return ResultExcel('${data.uid}','${data.plaque}','${data.exchangerate}')">Result</button>
</div>
<table class="viewReqTable">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Name</th>
<th scope="col">Qty</th>
<th scope="col">Price</th>
<th scope="col">Total</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>
`;
var qtyTotalDec = 0;
var TotalPriceDec=0;
for(var i=0;i<resultData.length;i++){
qtyTotalDec+=parseInt(resultData[i].qty);
TotalPriceDec+=parseFloat(resultData[i].price);
 getData+=`

 <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Items">${resultData[i].name}</td>
  <td data-label="Qty">${resultData[i].qty}</td>
  <td data-label="Price">${resultData[i].price}</td>
  <td data-label="Total">${resultData[i].total}</td>
  <td data-label="Action"><i class="fas fa-edit text-primary mylogout" title="Edit this Items" onClick="return ViewEditItemDeclaration('${resultData[i].id}','${resultData[i].uid}','${resultData[i].name}','${resultData[i].qty}','${resultData[i].price}','${data.profit}','${data.transpfees}')"></i> <i class="fas fa-trash text-dark mylogout " title="Delete This Item" onClick="return DeleteItemDeclaration('${resultData[i].id}','${resultData[i].uid}','${resultData[i].name}','${data.profit}','${data.transpfees}')"></i></td>


</tr>`;

}
getData+=`
</tbody>
</table>`;

$('.MainForm').html(getData);

$(`.${totClass}`).text(qtyTotalDec);
$(`.${totAmountDec}`).text(TotalPriceDec);
$(`.${totAll}`).text(TotalPriceDec+parseFloat(data.profit)+parseFloat(data.transpfees));

//console.log(hashfunction);
//TableDisplayOrderTemplate(data)


    //
}
function ViewEditItemDeclaration(id,uid,name,qty,price,profit,transpfees){


    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Edit Item</strong></h5>`)
$('.ModalPassword').html(`

<form class="formEditItemDeclaration" onsubmit="return AdminDeclarationEditItem()">
<div class="p-2">
<div class="form-group ">
<input type="hidden" class="form-control" name="id" value="${id}"/>
<input type="hidden" class="form-control" name="uid" value="${uid}"/>

<input type="hidden" class="form-control" name="transpfees" value="${transpfees}" />
<input type="hidden" class="form-control" name="profit" value="${profit}" />

</div>

<div class="form-group ">
<label>Item Name</label>
<input type="text" class="form-control item_nameAdd" autocomplete="off" name="name" onkeyup="autoCompleteTopItem(this)" value="${name}" required/>
</div>
<ul class="list-group  autoCompleteTopItem">

</ul>
<div class="form-group ">
<label>qty</label>
<input type="number" class="form-control" name="qty" value="${qty}" required/>
</div>

<div class="form-group ">
<label>price</label>
<input type="text" class="form-control" name="price" value="${price}" required/>
</div>





<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`);
EmptyautoCompleteTopItem();
}
function AdminDeclarationEditItem(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeclarationEditItem`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formEditItemDeclaration').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    //console.log(`done $${CalculateDeclClass}`);
    $('.viewOrder').modal('hide');
    //var item_nameAdd=$('.item_nameAdd').val();
    CheckDeclaration();
    //$(`.${CalculateDeclClass}`).click();
    //alert(` Item ${item_nameAdd} added `);
    /*$('.MainForm').html(`
    <h5 class="text-center">Order List</h5>
    `);*/
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}
function DeleteItemDeclaration(id,uid,name,profit,transpfees){
    if(confirm(`Do you Want Delete ${name} in this Declaration?`))
    {
        $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeleteItemDeclaration`,//close Declaration
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    id:id,
    uid:uid,
    profit:profit,
    transpfees:transpfees
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();

   alert("Close Query Submitted Successfully")
   CheckDeclaration();

}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;

    }

}
function FormCloseDeclaration(uid){
    if(confirm('Do you Want to Close this Declaration?'))
    {
        $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminCloseDeclaration`,//close Declaration
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    uid:uid,
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();

   alert("Close Query Submitted Successfully")
   AllOpenSaleReport();

}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
    }

}
function DeclarationForm(){

    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Create Declaration</strong></h5>`)
$('.ModalPassword').html(`
<form class="formDeclarationCreate" onsubmit="return formDeclarationCreate()">
<div class="p-2">
<div class="form-group ">
<label>Enter Plaque Number</label>
<input type="text" class="form-control" name="plaque" required/>
</div>

<div class="form-group ">
<label>Enter Profit</label>
<input type="number" class="form-control" name="profit" required/>
</div>

<div class="form-group ">
<label>Enter Transport Fees</label>
<input type="text" class="form-control" name="transpfees" required/>
</div>

<div class="form-group ">
<label>Enter Exchange Rate</label>
<input type="num" class="form-control" name="exchangerate" required/>
</div>



<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
}

function formDeclarationCreate(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeclarationCreate`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formDeclarationCreate').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    $('.viewOrder').modal('hide');
    CheckDeclaration();
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}


function ResultExcel(uid,plaque,exchangerate)
{

   //
   $('.cover-spin').show();
var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/ResultExcel`,
type:'get',

//dataType: "json",
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
data: {
    uid:uid,
    plaque:plaque,
    exchangerate:exchangerate
},
success:function(data){
    console.log(data);

    if(data.status){//return data as true

$('.cover-spin').hide();
//console.log(data);
window.location.href = `./api/ExportCsv?uid=${uid}&uidLink=${data.uidLink}&TokenLink=${data.TokenLink}&plaque=${plaque}&exchangerate=${exchangerate}`;

/*var a = document.createElement('a');
            var url = window.URL.createObjectURL(data);
            a.href = url;
            a.download = 'myfile.pdf';
            document.body.append(a);
            a.click();
            a.remove();
            window.URL.revokeObjectURL(url);*/

//alert("Successfully created");
//var data=data.result[0];
//var data=;
//console.log(hashfunction);



}
else{

    alert("alert something wrong please contact system Admin");
$('.cover-spin').hide();
}




},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;
    //

}
function FormAddItemDeclaration(uid,plaque,transpfees,profit,totClass){

$('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Add Item</strong></h5>`)
$('.ModalPassword').html(`

<form class="formAddItemDeclaration" onsubmit="return AdminDeclarationAddItem()">
<div class="p-2">
<div class="form-group ">

<input type="hidden" class="form-control" name="uid" value="${uid}"/>
<input type="hidden" class="form-control" name="plaque" value="${plaque}" />
<input type="hidden" class="form-control" name="transpfees" value="${transpfees}" />
<input type="hidden" class="form-control" name="profit" value="${profit}" />
<input type="hidden" class="form-control" name="totalqty" value="${totClass}" />
</div>

<div class="form-group right-inner-addon">
<label>Item Name</label>
<input type="text" class="form-control item_nameAdd" autocomplete="off" name="name" onkeyup="autoCompleteTopItem(this)" required/>
<span class="autocompleteIcon"></span>
</div>
<ul class="list-group  autoCompleteTopItem">

</ul>
<div class="form-group ">
<label>qty</label>
<input type="number" class="form-control" name="qty" required/>
</div>

<div class="form-group ">
<label>price</label>
<input type="text" class="form-control" name="price" required/>
</div>





<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
}


function EmptyautoCompleteTopItem(){
    $('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();
    $('.autocompleteIcon').html("");
}
function autoCompleteTopItem(thisdata){
//

if(thisdata.value=="") return EmptyautoCompleteTopItem();
//

var Usertoken=localStorage.getItem("Usertoken");
   //search products
   $.ajax({

url:`./api/AdminSearchDeclarationItem`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    ItemName:thisdata.value,
},
success:function(data){
if(data.status){//return data as true

    $('.autoCompleteTopItem').show();

var data=data.result;
 var getdata="";
 for(var i=0;i<data.length;i++){

    getdata+=`
    <li class="list-group-item d-flex justify-content-between align-items-center mylogout myhover" onclick="return addItemDeclar('${data[i].name}')">
    ${data[i].name}
    <span class="badge "></span>
  </li>
    `;

 }

 $('.autoCompleteTopItem').html(getdata);
 $(`.autocompleteIcon`).html(`<i class="fa fa-times-circle text-danger" onclick="return EmptyautoCompleteTopItem()"></i>`);



}
else{
    /*$('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();*/
    EmptyautoCompleteTopItem();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
//
//
}
function addItemDeclar(itemName){
    $('.item_nameAdd').val(itemName);
    $('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();
}
function AdminDeclarationAddItem(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeclarationAddItem`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formAddItemDeclaration').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    $('.viewOrder').modal('hide');
    console.log(`done $${CalculateDeclClass}`);

    $('.formAddItemDeclaration .form-control').val("");
    //var item_nameAdd=$('.item_nameAdd').val();
    CheckDeclaration();
    //$(`.${CalculateDeclClass}`).click();
    //alert(` Item ${item_nameAdd} added `);
    /*$('.MainForm').html(`
    <h5 class="text-center">Order List</h5>
    `);*/
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}



function AdminDeclarationCalculate(uid,plaque,transpfees,profit,totClass){
    var totalqty=$(`.${totClass}`).text();
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeclarationCalculate`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    uid:uid,
    plaque:plaque,
    transpfees:transpfees,
    profit:profit,
    totalqty:totalqty
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    console.log(data.xdata);
    CheckDeclaration();
 //console.log(hashfunction);


}
else{
    alert("already updated");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}

function ViewDeclaration(){
    var Usertoken=localStorage.getItem("Usertoken");

$.ajax({

url:`./api/AdminDeclarationLoad`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true


var resultData=data.result;


$('.MainbigTitle').html(`
<h5 class="text-center"> Declarations</h5>
`);
$('.MyRequest_table').html("");
getData=`


<table class="viewReqTable">
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Plaque</th>
<th scope="col">Profit</th>
<th scope="col">Transport</th>
<th scope="col">Exchange Rate</th>
<th scope="col">Status</th>
<th scope="col">Created At</th>
<th scope="col">Action</th>

</tr>
</thead>
<tbody>
`;

for(var i=0;i<resultData.length;i++){

 getData+=`

 <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Plaque">${resultData[i].plaque}</td>
  <td data-label="Profit">${resultData[i].profit}</td>
  <td data-label="Transport">${resultData[i].transpfees}</td>
  <td data-label="Exchange Rate">${resultData[i].exchangerate}</td>
  <td data-label="Status">${resultData[i].closeallstatus!='open'?'Close':resultData[i].closeallstatus}</td>
  <td data-label="CreatedAt">${resultData[i].created_at}</td>
  <td data-label="Action"><i class="fas fa-eye text-primary mylogout" title="View Declaration Items Load" onClick="return ViewItemDeclaration('${resultData[i].uid}','${resultData[i].plaque}','${resultData[i].exchangerate}','${resultData[i].profit}','${resultData[i].transpfees}')"></i> <i class="fas fa-edit text-primary mylogout" title="Edit this Declaration" onClick="return ViewEditDeclaration('${resultData[i].uid}','${resultData[i].plaque}','${resultData[i].profit}','${resultData[i].transpfees}','${resultData[i].exchangerate}')"></i> <i class="fas fa-trash text-dark mylogout " title="Delete This Declaration" onClick="return DeleteDeclaration('${resultData[i].uid}','${resultData[i].plaque}')"></i></td>


</tr>`;

}
getData+=`
</tbody>
</table>`;

$('.MainForm').html(getData);



//console.log(hashfunction);
//TableDisplayOrderTemplate(data)




}
else{

$('.MyRequest_table').html("");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}
function ViewEditDeclaration(uid,plaque,profit,transpfees,exchangerate){
    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Edit Declaration</strong></h5>`)
$('.ModalPassword').html(`
<form class="formDeclarationEdit" onsubmit="return AdminEditDeclaration()">
<div class="p-2">
<div class="form-group ">
<label>Plaque Number</label>
<input type="hidden" class="form-control" name="uid" value="${uid}" required/>
<input type="text" class="form-control" name="plaque" value="${plaque}" required/>
</div>

<div class="form-group ">
<label>Profit</label>
<input type="text" class="form-control" name="profit" value="${profit}" required/>
</div>

<div class="form-group ">
<label>Transport Fees</label>
<input type="text" class="form-control" name="transpfees" value="${transpfees}" required />
</div>

<div class="form-group ">
<label>Exchange Rate</label>
<input type="text" class="form-control" name="exchangerate" value="${exchangerate}" required/>
</div>



<div class="form-group">

<input type="submit" class="btn btn-danger"  value="submit" />
</div>
</div>
</form>

`)
}
function AdminEditDeclaration(){
    $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminEditDeclaration`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formDeclarationEdit').serialize(),
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    ViewDeclaration();
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
}
function DeleteDeclaration(uid,plaque){
    if(confirm(`Do you Want to Delete this Declaration that has this Plaque ${plaque}`))
    {

        $('.cover-spin').show();
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminDeleteDeclaration`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:{
    uid:uid,
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    ViewDeclaration();
 //console.log(hashfunction);


}
else{
    alert("something Went Wrong ");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

return false;
    }
}
function ViewItemDeclaration(uid,plaque,exchangerate,profit,transpfees){

    var Usertoken=localStorage.getItem("Usertoken");

$.ajax({

url:`./api/AdminItemDeclarationLoad`,
type:'get',
data: {
uid:uid,
plaque:plaque,
exchangerate:exchangerate,
profit:profit,
transpfees:transpfees
},
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true

LoadDeclarationItemTemplate(data);



}
else{

$('.MyRequest_table').html("");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}
//Declaration
function checkPlatform(platform){
    if(platform==='{{env('PLATFORM3')}}')
   {
    window.location.href ="user";
   }
   else{
       return true;
   }
}
function TableDisplayOrderTemplate(data){

 //console.log(hashfunction);
 getData=`

 <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">OrderId</th>
      <th scope="col">Total</th>
      <th scope="col">status</th>
      <th scope="col">Created_at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
 `;

 for(var i=0;i<data.length;i++){
     ReceivedBtn=`<button type="button" class="btn btn-dark" onclick="return ReceivedOrder('${data[i].uid}')">Received?</button>`;
     DispatchBtn=`<button type="button" class="btn btn-success" onclick="return ViewDispatchOrder('${data[i].uid}')">Dispatch</button>`;
     ReceivedIcon=`<i class="fas fa-check text-success"></i>`;
     BtnDisplayCheck=data[i].status!='Request'?DispatchBtn:ReceivedBtn;//it means that on receiv show Dispatch else show Received
     getData+=` <tr>
      <td data-label="#">${i+1}</td>
      <td data-label="OrderId">${data[i].uid}</td>
      <td data-label="Total">${data[i].custom_total}</td>
      <td data-label="Status">${data[i].status=='Received'?ReceivedIcon:data[i].status}</td>
      <td data-label="Created_at">${data[i].created_at}</td>
      <td data-label="Action">${BtnDisplayCheck}| <button type="button" class="btn btn-primary" onclick="return View_order('${data[i].uid}')">View</button></td>
    </tr>`;

 }
 $('.MyRequest_table').html(getData);
}
function DisplayOrderData(){
    closeNav();

    $('.MainForm').html(`
    <h5 class="text-center">Order List</h5>
    `);
    $('.Count_table').css("display", "none");
    $('.OrderDspTable').css("display", "block");
    $.ajax({

url:`./api/ViewOrderRequest`,
type:'get',

success:function(data){


if(data.status){//return data as true

    var data=data.result;
 //console.log(hashfunction);
 TableDisplayOrderTemplate(data)




}
else{
    $('.MyRequest_table').html("");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
}

function ReceivedOrder(OrderId) {
    if(confirm('Have you received this order?'))
    {
//
var Usertoken=localStorage.getItem("Usertoken");
$('.cover-spin').show();


$.ajax({

url:`./api/AdminReceivedOrder`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
data:{
uid:OrderId,
},
success:function(data){
if(data.status){//return data as true

DisplayOrderData();


$('.cover-spin').hide();


}
else{
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
//
    }


    return false;
//
}
function dispatch(myid){


}


function View_order(orderid){
//
var Usertoken=localStorage.getItem("Usertoken");
    $('.viewOrder').modal('show');
    $('.MyTitleModal').html(`<h5 class="text-center">Order ID#:${orderid}</h5>`)
    $('.cover-spin').show();

    $.ajax({

url:`./api/viewOrder`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    uid:orderid,
},
success:function(data){
if(data.status){//return data as true
    $('.cover-spin').hide();
    var data=data.result;
 //console.log(hashfunction);
 getData="";

 for(var i=0;i<data.length;i++){
     getData+=` <tr>
      <td data-label="#">${i+1}</td>
      <td data-label="OrderId">${data[i].productCode}</td>
      <td data-label="Qty">${data[i].qty}</td>
      <td data-label="PCS">${data[i].pcs}</td>
      <td data-label="dz">${(data[i].pcs/12).toFixed(2)}</td>

    </tr>`;

 }
 $('.viewReqTable tbody').html(getData);





}
else{
    $('.cover-spin').hide();

}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
//
}

function ViewDispatchOrder(orderid){
    $('.MainForm').html(``);
    $('.Count_table').css("display", "block");
    //$('.OrderDspTable').css("display","none");
    $('.orderIdDsp').text(`Order ID #:${orderid}`);
    $('.cover-spin').show();
//
var Usertoken=localStorage.getItem("Usertoken");
   // $('.viewOrder').modal('show');


    $.ajax({

url:`./api/viewOrder`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    uid:orderid,
},
success:function(data){
if(data.status){//return data as true

    $('.cover-spin').hide();
    var data=data.result;
 //console.log(hashfunction);
 getData=`
 <thead>
  <tr>
    <th scope="col">#</th>
    <th scope="col">Item</th>
    <th scope="col">pcs</th>
    <th scope="col">qty</th>
    <th scope="col">qty(Count)</th>
    <th scope="col">qty(Left)</th>
    <th scope="col">Action</th>
</tr>
</thead>
 `;

 for(var i=0;i<data.length;i++){
    var trackInput=`Count_${data[i].id}`;
    var qtyCountID=`qty_${trackInput}`;
    var inputQty=` <input type="number" class="form-control ${qtyCountID}" value="${data[i].qty_count}" >`;
    var btnCount=`<button type="button" class="btn btn-dark" onclick="return Approved('${qtyCountID}','${data[i].uid}','${data[i].productCode}','${data[i].price}','${data[i].custom_price}')">Count</button>`;
    var checkIcon=`<i class="fas fa-check text-success"></i>`;
    var checkQtyToQtyCount=data[i].qty==data[i].qty_count?checkIcon:btnCount;
     getData+=` <tr>
      <td data-label="#">${i+1}</td>
      <td data-label="Item">${data[i].productCode}</td>
      <td data-label="pcs">${data[i].pcs}</td>
      <td data-label="qty">${data[i].qty}</td>

      <td data-label="qty(Count)">${data[i].qty_count}
     ${data[i].qty==data[i].qty_count?'':inputQty}
      </td>
      <td data-label="qty(Left)">${data[i].qty-data[i].qty_count==0?'0'+checkIcon:data[i].qty-data[i].qty_count}</td>
      <td data-label="Action">${checkQtyToQtyCount}</td>

    </tr>`;

 }
 $('.MyRequest_table').html(getData);





}
else{
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
//
}
function Approved(qtyCountID,OrderId,productCode,price,custom_price) {//count


    $('.cover-spin').show();

var qty_countValue=$(`.${qtyCountID}`).val();

var Usertoken=localStorage.getItem("Usertoken");
//console.log(OrderId);
//search products
$.ajax({

url:`./api/AdminApprovedCount`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
data:{
uid:OrderId,
productCode:productCode,
price:price,
qty_count:qty_countValue,
custom_price:custom_price,
},
success:function(data){

if(data.status){//return data as true

   ViewDispatchOrder(OrderId);

   $('.cover-spin').hide();

}
else{
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return true;

}

function ViewApprovedOrder() {//count
    closeNav();
    $('.MainForm').html(`
    <h5 class="text-center">Approved Order</h5>
    `);


    $('.cover-spin').show();

var Usertoken=localStorage.getItem("Usertoken");
//console.log(OrderId);
//search products
$.ajax({

url:`./api/ViewOrderApproved`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
success:function(data){


if(data.status){//return data as true
    var data=data.result;
 TableDisplayOrderTemplate(data);


 $('.cover-spin').hide();


}
else{
    $('.MyRequest_table').html("");
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
}

function TrackdOrderForm(){
    closeNav();
    $('.MyRequest_table').html("");

    $('.MainForm').html(`
    <h5 class="text-center">Track Your Order</h5>
<div class="form-inline">
  <input class="form-control mr-sm-2 trackId" type="search" placeholder="Enter OrderID" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit" onclick="return TrackdOrder()">Search</button>
</div>

    `);

    return false;
}

function TrackdOrder(){

    var OrderId=$('.trackId').val();
var Usertoken=localStorage.getItem("Usertoken");
$('.cover-spin').show();
//console.log(OrderId);
//search products
$.ajax({

url:`./api/TrackOrder`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
data:{
uid:OrderId,

},
success:function(data){

if(data.status){//return data as true
    $('.cover-spin').hide();
    var data=data.result;
 //console.log(hashfunction);
 TableDisplayOrderTemplate(data);



}
else{
    $('.MyRequest_table').html(`
    <h5 class="text-center">Order Id Not Found</h5>
    `);

    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return true;
}


function  UserAddInvoice(userid,name){
    //ViewSearchForm();
    MyUserid=userid;
    Myname=name;

    create_order();

    $('.MainbigTitle').html(`
<h5 class="text-center mainTitle">Acc:(<strong>${name}</strong>)</h5>

`);

    $('.useridAccount').val(userid);



}
function AdminClosedSales(){
    if(confirm('Are you Sure you want to Close This Sales?'))
    {
        //

        $('.cover-spin').show();

//
var Usertoken=localStorage.getItem("Usertoken");
//console.log(OrderId);
//search products
$.ajax({

url:`./api/AdminClosedSales`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formData').serialize(),
success:function(data){
if(data.status){//return data as true

//localStorage.setItem('Usertoken',data.token);
//console.log(hashfunction);
$('.cover-spin').hide();
$('.MainbigTitle').html(`
<div class="alert alert-primary" role="alert">
Query Submitted Successfully
</div>
`);


}
else{
    alert("Password is incorrect please try again");
    $('.cover-spin').hide();

}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});

        //

    }
    return false;

}
function AdminAddPassword(userid,name) {

    $('.viewOrder').modal('show');

    $('.MyTitleModal').html(`<h5 class="text-center">Close  <strong>${name}</strong></h5>`)
    $('.ModalPassword').html(`
    <form class="formData" >
<div class="p-2">
<div class="form-group ">
<label>Enter Your Password</label>
<input type="password" class="form-control" name="password" />
<input type="hidden" class="form-control" name="userid" value="${userid}"/>
</div>

<div class="form-group">

<input type="submit" class="btn btn-danger" onclick="return AdminClosedSales('${userid}','${name}')" value="submit" />
</div>
</div>
</form>

    `)

    //$('.cover-spin').show();

}
function  ReportChoice(thisdata,userid,name)
{
    if(thisdata.value=='1')
    {
        console.log(thisdata.value);
        UserReport(userid,name);
    }
    else{
        console.log(thisdata.value);
        ViewSecondSalesReport(userid,name);
    }
    return false;
}

function ViewSecondSalesReport(userid,name){

    MyUserid=userid;
    Myname=name;
    $('.MyRequest_table').html("");
//
$('.cover-spin').show();
var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/UserSecondSaleReport`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
    data: {
userid:userid,
    },
success:function(data){


if(data.status){//return data as true
    $('.cover-spin').hide();
//var data=data.result[0];
//var data=;
//console.log(hashfunction);
var data=data.result;
var TotalReport=0;
var TotalNo=0;
var TotalQty=0;
console.log(data);
 var getdata=``;

 for(var i=0;i<data.length;i++){
    TotalReport+=parseFloat(data[i].total_order);
    TotalNo=data.length;
    TotalQty+=parseFloat(data[i].qty);
    var datatobrr=data[i].ProductConcat.split(',');
    var getDetail="";
    for(var u=0;u<datatobrr.length;u++)
    {
        getDetail+=`
<li class="list-group-item">${u+1} ${parantesis} ${datatobrr[u]}</li>
`;
   }

   var TrueSubmitIcon=`<i  class="fas fa-pen text-success mylogout" title="Edit Permission Orders" onclick="return EditPermissionOrder('${data[i].uid}','${trueV}','${data[i].qty}','${data[i].total_order}')"></i>`;
   var FalseSubmitIcon=`<i  class="fas fas fa-ban text-danger mylogout" title="Edit Permission Orders" onclick="return EditPermissionOrder('${data[i].uid}','${falseV}','${data[i].qty}','${data[i].total_order}')"></i>`;
   var permissionChange=data[i].permission===trueV?TrueSubmitIcon:FalseSubmitIcon;
    getdata+=`

<ul class="list-group pt-1 ">

  <li class="list-group-item bg-dark text-white">No # ${data[i].uid} ${permissionChange} <span class="float-center"></span><span class=" float-right"><span class="text-success">(${data[i].qty}) Total</span>=$${data[i].total_order}</span></li>
  ${getDetail}
</ul>
<hr/>
    `;

 }
 $('.MainbigTitle').html(`

 <h5 class="text-center mainTitle">
 ${name}
 <div class="pt-1">
<button type="button" class="btn btn-danger" onclick="return AdminAddPassword('${userid}','${name}')">Close Sales</button>
</div>
<div class="pt-1">
<select id="Ultra" onchange="return ReportChoice(this,'${userid}','${name}')" class="form-control-sm">
     <option value="2">Report View 2</option>
     <option value="1">Report View 1</option>

</select>
</div>


 </h5>

<h6 class="text-right"><span class="text-danger">Total</span>:$${TotalReport}</h6>
<h6 class="text-right"><span class="text-primary">Qty</span>:${TotalQty}</h6>
<h6 class="text-right"><span class="text-success">Facture</span>:${TotalNo}</h6>

${@include('components.Search.Search.SearchFactureNo')}
 `);


$('.MainForm').html(getdata);


}
else{
$('.MyRequest_table').html("");
$('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;



}

function EditPermissionOrder(OrderId,permission,qty,totalOrder) {//qty:number of qty in this facture to be edited,totalOrder:is total amount of that facture,this will be saved on history edit
    var permissionValue=permission===trueV?falseV:trueV;

    if(confirm(`Do you want to change permission of ${OrderId} to:${permissionValue}?`))
    {
//
var Usertoken=localStorage.getItem("Usertoken");
$('.cover-spin').show();


$.ajax({

url:`./api/AdminEditPermissionOrder`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
data:{
OrderId:OrderId,
permissionValue:permissionValue,
qty:qty,
totalOrder:totalOrder,
PrevQueryData:`"{

    "OrderId":"${OrderId}",
    "PrevPermission":"${permission}"


}"`,

},
success:function(data){
if(data.status){//return data as true

    alert("Permission has been changed");

    ViewSecondSalesReport(MyUserid,Myname);


$('.cover-spin').hide();


}
else{
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
//
    }


    return false;
//
}

function ComeFromallsale(){
    countryComeFrom=$('.catComeFrom option:selected').val();

    AllOpenSaleReport();


}
function  AllOpenSaleReport(){
    closeNav();
    $('.MyRequest_table').html("");


    $('.cover-spin').show();
var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminAllOpenReport`,
type:'get',
data:{
countryComeFrom:countryComeFrom
},
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },


success:function(data){

    platform=data.platform;
    userProfileName=data.name;

   // console.log(data);
if(checkPlatform(platform))
{
//
if(data.status){//return data as true
    $('.cover-spin').hide();

//var data=data.result[0];
//var data=;
//console.log(hashfunction);
var data=data.result;
var MyallTotal=0;
var totalColi=0;

var getData=`
<ul class="list-group pt-3 displayViewAll">
<li class="list-group-item bg-dark text-white">LIST YIBYAFASHWE <span class=" float-right"><span class="text-success">Qty:</span><span class="totalqtycoli"></span></span></li>

`;

for(var i=0;i<data.length;i++){
//it means that on receiv show Dispatch else show Received
MyallTotal+=parseFloat(data[i].all_total);
totalColi+=parseFloat(data[i].qty);

 getData+=`
<li class="list-group-item">${i+1} ${parantesis} ${data[i].qty} ${data[i].productCode}= ${data[i].all_total}</li>

`;



}


getData+=`</ul>`;
$('.MainbigTitle').html(`
<h5 class="text-center mainTitle">
Report All Sales
<div class="form-group ">
<h6 class="text-center pt-1">Show From</h6>

<select class="form-control-sm catComeFrom" name="cat" onchange="ComeFromallsale()">

</select>

</div>



</h5>
<div class="text-right UserBtnTotal"><h6 class="text-right">Total:${MyallTotal}</h6></div>



    `);
    selectComeFrom();


$('.MainForm').html(getData);
$('.totalqtycoli').text(totalColi);
//$('.MyRequest_table').html(getData);
//console.log(MyallTotal);
/*$('.UserBtnTotal').html(`

<h6 class="text-right">Total:${MyallTotal}</h6>
`);*/


}
else{
    if(platform==='{{env('PLATFORM1')}}')
    {
$('.MyRequest_table').html("");
$('.MainForm').html("No data Found");
$('.cover-spin').hide();
    }
    else{
        alert("Something Wrong With Your Account Please Contact System Admin");
    logout();
    }


}
//
}



},
error:function(data){

//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;
    //


}

function  UserReport(userid,name){
    $('.MyRequest_table').html("");
   // MyUserid=userid;

   MyUserid=userid;
    Myname=name;
    //$('.MainForm').html("");
    /*$('.mainTitle').html(`${name}

    <div class="pt-1">
<button type="button" class="btn btn-danger" onclick="return AdminAddPassword('${userid}','${name}')">Close Sales</button>
</div>
<div>
<select id="Ultra" onchange="return ReportChoice(this,'${userid}','${name}')">
     <option value="1">Report1</option>
     <option value="2">Report2</option>

</select>
</div>
    `);*/

    //
    $('.cover-spin').show();
var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/UserSaleReport`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
    data: {
userid:userid,
countryComeFrom:countryComeFrom
    },

success:function(data){


if(data.status){//return data as true
    $('.cover-spin').hide();
//var data=data.result[0];
//var data=;
//console.log(hashfunction);
var data=data.result;
var MyallTotal=0;
var totalColi=0;

var getData=`
<ul class="list-group pt-3 displayViewAll">
<li class="list-group-item bg-dark text-white">LIST YIBYAFASHWE <span class=" float-right"><span class="text-success">Qty:</span><span class="totalqtycoli"></span></span></li>


`;

for(var i=0;i<data.length;i++){
//it means that on receiv show Dispatch else show Received
MyallTotal+=parseFloat(data[i].all_total);
totalColi+=parseFloat(data[i].qty);
 getData+=`
<li class="list-group-item">${i+1} ${parantesis}  ${data[i].qty} ${data[i].productCode}= ${data[i].all_total}</li>

`;



}
getData+=`</ul>`;
$('.MainbigTitle').html(`
<h5 class="text-center mainTitle">
Acc:(<strong>${name}</strong>)
<div class="pt-1">
<button type="button" class="btn btn-danger" onclick="return AdminAddPassword('${userid}','${name}')">Close Sales</button>
</div>
<div class="pt-1">
<select id="Ultra" class="form-control-sm" onchange="return ReportChoice(this,'${userid}','${name}')">
     <option value="1">Report View 1</option>
     <option value="2">Report View 2</option>

</select>
</div>
<div class="form-group">
<h6>Search From</h6>
<select class="form-control-sm catComeFrom" name="cat" onchange="ComeFromaUserSale()">

</select>
<div>
</h5>
<div class="text-right UserBtnTotal"><h6 class="text-right">Total:${MyallTotal}</h6></div>



    `);

    selectComeFrom();

$('.MainForm').html(getData);
$('.totalqtycoli').text(totalColi);
//$('.MyRequest_table').html(getData);
//console.log(MyallTotal);
/*$('.UserBtnTotal').html(`

<h6 class="text-right">Total:${MyallTotal}</h6>
`);*/


}
else{
$('.MyRequest_table').html("");
$('.MainForm').html(`
<h6 class="text-center">No Sales Found on this Acc:<strong>${name}</trong></h6>
`);
$('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;
    //


}
function ComeFromaUserSale(){
    countryComeFrom=$('.catComeFrom option:selected').val();
    UserReport(MyUserid,Myname);

}
function ViewAllUsers(){

closeNav();
$('.MainbigTitle').html(`
<h5 class="text-center mainTitle">Users</h5>
<div class="text-right UserBtnTotal"></div>
`);
$('.MainForm').html("");

//
$('.cover-spin').show();
var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminViewUsers`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true
$('.cover-spin').hide();



var data=data.result;


getData=`

<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Name</th>
  <th scope="col">Created</th>
  <th scope="col">Actions</th>
</tr>
</thead>
`;

for(var i=0;i<data.length;i++){
//it means that on receiv show Dispatch else show Received
var banIcon=`  <i class="fas fa-ban text-danger btn" onclick="changePlatform('${data[i].name}','${data[i].userid}','${data[i].platform}')"></i>`;
var checkIcon=`  <i class="fas fa-check text-success btn" onclick="changePlatform('${data[i].name}','${data[i].userid}','${data[i].platform}')"></i>`;
var platformcheck=data[i].platform==='user'?checkIcon:banIcon;
 getData+=` <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Name">${data[i].name}</td>
  <td data-label="Created_at">${data[i].created_at}</td>
  <td data-label="Actions"><button type="button" class="btn btn-dark" onclick="return UserAddInvoice('${data[i].userid}','${data[i].name}')">Invoice</button>|<button type="button" class="btn btn-dark" onclick="return UserReport('${data[i].userid}','${data[i].name}')">Report</button>${platformcheck}</td>

</tr>`;

}
$('.MyRequest_table').html(getData);


}
else{
$('.MyRequest_table').html("");
$('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}

function changePlatform(name,ThisUserid,userPlatform) {
    var checkAct=userPlatform==='user'?'to be Inactive':'to be Active';
 var checkPlatformSubmit=userPlatform==='user'?'client':'user';
    if(confirm(`Do you Want ${name}  ${checkAct} `))
    {
//
var Usertoken=localStorage.getItem("Usertoken");
$('.cover-spin').show();


$.ajax({

url:`./api/AdminChangePlatform`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
data:{
userid:ThisUserid,
platform:checkPlatformSubmit,
},
success:function(data){
if(data.status){//return data as true

    ViewAllUsers();


$('.cover-spin').hide();


}
else{
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
//
    }


    return false;
//

}
function EmpytyAdjustDisplay(){
    $('.adjustqtyDisplay').html("");
}
function adjustqty(thisdata,qty){

    if(thisdata.value=="") return EmpytyAdjustDisplay();

if(!isNaN(thisdata.value))
{

        $('.adjustqtyDisplay').html(
        `<strong class="text-success">=>Stock</strong>:<strong class="text-danger">${parseFloat(thisdata.value)+parseFloat(qty)}</strong>`
    );




}
else{
    $('.adjustqtyDisplay').html(
        `<strong class="text-success">=>Please Type numeric value</strong>`
    );
}


}

function AdjustThisProduct() {//Admin
    $('.cover-spin').show();

       //
       var Usertoken=localStorage.getItem("Usertoken");
    //console.log(OrderId);
   //search products
   $.ajax({

url:`./api/AdjustProduct`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
    dataType: "json",
data:$('.formData').serialize(),
success:function(data){

if(data.status){//return data as true

    //localStorage.setItem('Usertoken',data.token);
 //console.log(hashfunction);
 $('.cover-spin').hide();
 $('.viewOrder').modal('hide');
    alert("Product Adjusted Successfully");
    ViewAllProductWithEdit();

}
else{
    $('.cover-spin').hide();
    alert(data.result);

}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;

}

function EditThisProduct() {//Admin
    $('.cover-spin').show();

       //
       var Usertoken=localStorage.getItem("Usertoken");
    //console.log(OrderId);
   //search products
   $.ajax({

url:`./api/EditProduct`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
    dataType: "json",
data:$('.formData').serialize(),
success:function(data){
if(data.status){//return data as true

    //localStorage.setItem('Usertoken',data.token);
 //console.log(hashfunction);
 $('.cover-spin').hide();

 $('.viewOrder').modal('hide');
    alert("Product Edited Successfully");
    ViewAllProductWithEdit();

}
else{

}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;

}
function AdminChangeAdjustProduct(id,productCode,price,qty,total,tags,created_at,cat){
    $('.viewOrder').modal('show');
    $('.MyTitleModal').html(`<h5 class="text-center">Adjust <strong>${atob(productCode)}</strong></h5>`);
    $('.ModalPassword').html(`
  <div class="p-2">
    <form class="formData"  enctype="multipart/form-data">
<div class="form-group d-none">
<label>Common Name</label>
<input type="text" class="form-control" name="tags"  value="${atob(tags)}"/>
</div>

<div class="form-group d-none">
<label>Come From</label>
<div class="form-group ComeFromLoader">

</div>
<input type="hidden" class="form-control catName" name="catName" />

</div>
<div class="form-group d-none">
<input type="hidden" class="form-control " name="prevPrice" value="${price}"/>
<input type="hidden" class="form-control " name="prevQty" value="${qty}"/>
<textarea class="form-control" name="PrevQueryData">
{
    "id":"${id}",
    "productCode":"${atob(productCode)}",
    "price":"${price}",
    "qty":"${qty}",
    "tags":"${atob(tags)}",
    "cat":"${cat}",
    "created_at":${created_at},
}

</textarea>
</div>
<div class="form-group d-none">
<label>Product Code</label>
<input type="text" class="form-control" name="productCode" value="${atob(productCode)}"/>
<input type="hidden" class="form-control" name="id" value="${id}" />
</div>
<div class="form-group d-none">
<label>Image</label>
<input type="file" class="form-control" change="imagechange(this)" name="files[]" />
</div>
<div class="form-group d-none">
<label>From</label>
<input type="text" class="form-control"  />
</div>
<div class="form-group">
<label>Price (Current Price:${price})</label>
<input type="text" class="form-control" value="${price}"name="price"/>
</div>
<div class="form-group">
<label>qty (Current Qty:${qty})<span class="adjustqtyDisplay"></span></label>
<input type="text" class="form-control adjustqty" name="qty" placeholder="Enter Adjust Qty" onkeyup="adjustqty(this,'${qty}')"  autocomplete="off"/>

</div>
<div class="form-group d-none">
<label>Pieces</label>
<input type="text" class="form-control" name="pcs" />
</div>
<div class="form-group d-none">
<label>Factories Price</label>
<input type="text" class="form-control" name="fact_price" />
</div>


<div class="form-group d-none">
<label>active</label>
<input type="text" class="form-control" name="active" />
</div>

<div class="form-group d-none">
<label>Description</label>
<input type="text" class="form-control" name="description" />
</div>
<div class="form-group">

<input type="submit" class="btn btn-danger" onclick="return AdjustThisProduct()" value="submit" />
</div>


</form>
</div>
    `);
   // $('.MyRequest_table').html("");
   datacomeFrom(cat);

}
function AdminChangeProduct(id,productCode,price,qty,total,tags,created_at,cat){
    $('.viewOrder').modal('show');
    $('.MyTitleModal').html(`<h5 class="text-center">Edit <strong>${atob(productCode)}</strong></h5>`);
    $('.ModalPassword').html(`
  <div class="p-2">
    <form class="formData"  enctype="multipart/form-data">
<div class="form-group">
<label>Common Name</label>
<input type="text" class="form-control" name="tags"  value="${atob(tags)}"/>
</div>

<div class="form-group">
<label>Come From</label>
<div class="form-group ComeFromLoader">

</div>
<input type="hidden" class="form-control catName" name="catName" />

</div>
<div class="form-group d-none">
<textarea class="form-control" name="PrevQueryData">
{
    "id":"${id}",
    "productCode":"${atob(productCode)}",
    "price":"${price}",
    "qty":"${qty}",
    "tags":"${atob(tags)}",
    "cat":"${cat}",
    "created_at":${created_at},
}

</textarea>
</div>
<div class="form-group d-none">
<label>Product Code</label>
<input type="text" class="form-control" name="productCode" value="${atob(productCode)}"/>
<input type="hidden" class="form-control" name="id" value="${id}" />
</div>
<div class="form-group d-none">
<label>Image</label>
<input type="file" class="form-control" change="imagechange(this)" name="files[]" />
</div>
<div class="form-group d-none">
<label>From</label>
<input type="text" class="form-control"  />
</div>
<div class="form-group">
<label>Price</label>
<input type="text" class="form-control" value="${price}"name="price"/>
</div>
<div class="form-group">
<label>qty</label>
<input type="text" class="form-control"  value="${qty}" name="qty" />
</div>
<div class="form-group d-none">
<label>Pieces</label>
<input type="text" class="form-control" name="pcs" />
</div>
<div class="form-group d-none">
<label>Factories Price</label>
<input type="text" class="form-control" name="fact_price" />
</div>


<div class="form-group d-none">
<label>active</label>
<input type="text" class="form-control" name="active" />
</div>

<div class="form-group d-none">
<label>Description</label>
<input type="text" class="form-control" name="description" />
</div>
<div class="form-group">

<input type="submit" class="btn btn-danger" onclick="return EditThisProduct()" value="submit" />
</div>


</form>
</div>
    `);
   // $('.MyRequest_table').html("");
   datacomeFrom(cat);

}
function SearchDateChange(thisdata)
{
    console.log(thisdata.value);
    //
    var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/searchPreviousRecord`,
type:'get',
data: {
    SearchDate:thisdata.value
},
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true
$('.cover-spin').hide();
//var data=data.result[0];
//var data=;
//console.log(hashfunction);
var data=data.result;


getData=`

<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Code</th>
  <th scope="col">Name</th>
  <th scope="col">Price</th>
  <th scope="col">Qty</th>

  <th scope="col">Status</th>
  <th scope="col">From</th>
  <th scope="col">Created</th>
  <th scope="col">Action</th>
</tr>
</thead>
`;

for(var i=0;i<data.length;i++){
//it means that on receiv show Dispatch else show Received
tags=data[i].tags===null?'N/A':data[i].tags;
 getData+=` <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Code">${data[i].productCode}</td>
      <td data-label="Name">${tags}</td>
  <td data-label="Price">${data[i].price}</td>
  <td data-label="qty">${data[i].qty}</td>

  <td data-label="Status">${data[i].actionName}</td>
  <td data-label="From">${data[i].catName}</td>
  <td data-label="Created_at">${data[i].created_at}</td>
  <td data-label="Action">
<div class="d-none d-lg-block">
  <span ><i class="fas fa-adjust text-danger mylogout" title="Adjust Product" onclick="return AdminChangeAdjustProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')"></i></span> | <span><i  class="fas fa-edit text-success mylogout" title="Edit Product" onclick="return AdminChangeProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')"></i></span>
</div>
<div class="d-md-none">
  <span ><button class="btn btn-danger mylogout" title="Adjust Product" onclick="return AdminChangeAdjustProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')">Adjust</button></span> | <span><button class="btn btn-dark mylogout" title="Edit Product" onclick="return AdminChangeProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')">Edit</button></span>
</div>
  </td>

</tr>`;

}
$('.MyRequest_table').html(getData);



}
else{
$('.MyRequest_table').html("");
$('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;


    //
}
async function datacomeFrom(cat){
    let mydata=await LoadSettingComeFrom();
    var data=mydata.result;

    getData=`<select class="form-control catComeFrom" name="cat" id="box1" onchange="CatComeChange()">`;

for(var i=0;i<data.length;i++){
    getData+=`<option value="${data[i].id}">${data[i].comeFrom}</option>`;
}


getData+=`</select>`;


    $('.ComeFromLoader').html(getData);

   $(`.catComeFrom option[value="${cat}"]`).attr("selected",true);
   var sel = document.getElementById("box1");
var catName= sel.options[sel.selectedIndex].text;
    //console.log(text);
   $('.catName').val(catName) ;
}
function CatComeChange(){
   // var catName=$('.catComeFrom option:selected').text();
   var sel = document.getElementById("box1");
var catName= sel.options[sel.selectedIndex].text;
    //console.log(text);
   $('.catName').val(catName) ;
}

function ComeFromProductEdit(){
    countryComeFrom=$('.catComeFrom option:selected').val();
    ViewAllProductWithEdit();
}
function ViewAllProductWithEdit(){
    var chooseSearchBy="1";
    var ClassfieldName="searchProductEditTable";

closeNav();

$('.MainbigTitle').html(`

<h5 class="text-center mainTitle">
Stocks
<div class="form-group ">
<h6 class="text-center pt-1">Show From</h6>

<select class="form-control-sm catComeFrom" name="cat" onchange="ComeFromProductEdit()">


</select>

</div>



</h5>


`);

/*$('.SearchDate').flatpickr(
    {

    dateFormat: "Y-m-d ",
}
);*/

selectComeFrom();

$('.MainForm').html(`


<form class="Form_order">
            <!--My Form-->






<div class="form-group">

    <label for="">Search Your Product<span class="text-danger">*</span></label>
    <div class="input-group mb-3">
  <div class="input-group-prepend">
    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">By</button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#SearchByCode" onclick="return chooseSearch('${choose1}','${ClassfieldName}')">Code</a>
      <a class="dropdown-item" href="#SearchByName" onclick="return chooseSearch('${choose2}','${ClassfieldName}')">name</a>
      <a class="dropdown-item" href="#SearchByDate" onclick="return chooseSearchDate('${ClassfieldName}')">Date</a>
    </div>
  </div>

  <input type="text" class="form-control searchProductEditTable" aria-label="Text input with dropdown button" placeholder="Search by Code" onkeyup="return searchProductEditTable(this)">
</div>






</div>
<!--search Form -->
</form>


`);
//
$('.cover-spin').show();



var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/AdminViewAllProduct`,
type:'get',
data: {
    countryComeFrom:countryComeFrom
},
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},

success:function(data){


if(data.status){//return data as true
$('.cover-spin').hide();
//var data=data.result[0];
//var data=;
//console.log(hashfunction);
var data=data.result;


getData=`

<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Code</th>
  <th scope="col">Name</th>
  <th scope="col">Price</th>
  <th scope="col">Qty</th>

  <th scope="col">Qty Left</th>
  <th scope="col">From</th>
  <th scope="col">Created</th>
  <th scope="col">Action</th>
</tr>
</thead>
`;

for(var i=0;i<data.length;i++){
//it means that on receiv show Dispatch else show Received
tags=data[i].tags===null?'N/A':data[i].tags;
 getData+=` <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Code">${data[i].productCode}</td>
      <td data-label="Name">${tags}</td>
  <td data-label="Price">${data[i].price}</td>
  <td data-label="qty">${data[i].qty}</td>

  <td data-label="Qty_left">${parseInt(data[i].qty)-parseInt(data[i].qty_sold)}</td>
  <td data-label="From">${data[i].catName}</td>
  <td data-label="Created_at">${data[i].created_at}</td>
  <td data-label="Action">
<div class="d-none d-lg-block">
  <span ><i class="fas fa-adjust text-danger mylogout" title="Adjust Product" onclick="return AdminChangeAdjustProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')"></i></span> | <span><i  class="fas fa-edit text-success mylogout" title="Edit Product" onclick="return AdminChangeProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')"></i></span>
</div>
<div class="d-md-none">
  <span ><button class="btn btn-danger mylogout" title="Adjust Product" onclick="return AdminChangeAdjustProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')">Adjust</button></span> | <span><button class="btn btn-dark mylogout" title="Edit Product" onclick="return AdminChangeProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}','${data[i].cat}')">Edit</button></span>
</div>
  </td>

</tr>`;

}
$('.MyRequest_table').html(getData);



}
else{
$('.MyRequest_table').html("");
$('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}

function searchProductEditTable(thisdata){
//
if(thisdata.value=="") return $('.search_append').html("");
//


searchProd=chooseSearchBy==='1'?'SearchByProduct':'SearchByTags';//first is search by code second by tags
console.log(chooseSearchBy);
var Usertoken=localStorage.getItem("Usertoken");
$.ajax({

url:`./api/${searchProd}`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    productCode:thisdata.value,
},
success:function(data){
    if(data.status){//return data as true
$('.cover-spin').hide();
//var data=data.result[0];
//var data=;
//console.log(hashfunction);
var data=data.result;


getData=`

<thead>
<tr>
  <th scope="col">#</th>
  <th scope="col">Code</th>
  <th scope="col">Name</th>
  <th scope="col">Price</th>
  <th scope="col">Qty</th>
  <th scope="col">Total</th>
  <th scope="col">Qty Left</th>
  <th scope="col">Created</th>
  <th scope="col">Action</th>
</tr>
</thead>
`;

for(var i=0;i<data.length;i++){
//it means that on receiv show Dispatch else show Received
tags=data[i].tags===null?'N/A':data[i].tags;
 getData+=` <tr>
  <td data-label="#">${i+1}</td>
  <td data-label="Code">${data[i].productCode}</td>
      <td data-label="Name">${tags}</td>
  <td data-label="Price">${data[i].price}</td>
  <td data-label="qty">${data[i].qty}</td>
  <td data-label="Total">${data[i].total}</td>
  <td data-label="Qty_left">${parseInt(data[i].qty)-parseInt(data[i].qty_sold)}</td>
  <td data-label="Created_at">${data[i].created_at}</td>
  <td data-label="Action"><span class="d-none d-md-block"><i class="fas fa-adjust text-danger mylogout" title="Adjust Product" onclick="return AdminChangeAdjustProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}')"></i></span> | <span><i  class="fas fa-edit text-success mylogout" title="Edit Product" onclick="return AdminChangeProduct('${data[i].id}','${btoa(data[i].productCode)}','${data[i].price}','${data[i].qty}','${data[i].total}','${btoa(data[i].tags)}','${data[i].created_at}')"></i></span></td>

</tr>`;

}
$('.MyRequest_table').html(getData);



}
else{
$('.MyRequest_table').html("");
$('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
//
}


function autoCompleteTopProductName(thisdata)
{
    //
    if(thisdata.value=="") return EmptyautoCompleteTopItem();
//

var Usertoken=localStorage.getItem("Usertoken");
   //search products
   $.ajax({

url:`./api/SearchByProduct`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    productCode:thisdata.value,
},
success:function(data){
if(data.status){//return data as true

    $('.autoCompleteTopItem').show();

var data=data.result;
 var getdata="";
 for(var i=0;i<data.length;i++){

    getdata+=`
    <li class="list-group-item d-flex justify-content-between align-items-center mylogout myhover" onclick="return addItemDeclar('${data[i].name}')">
    ${data[i].productCode}=>${data[i].tags}
    <span class="badge "></span>
  </li>
    `;

 }

 $('.autoCompleteTopItem').html(getdata);
 $(`.autocompleteIcon`).html(`<i class="fa fa-times-circle text-danger" onclick="return EmptyautoCompleteTopItem()"></i>`);



}
else{
    /*$('.autoCompleteTopItem').html("");
    $('.autoCompleteTopItem').hide();*/
    EmptyautoCompleteTopItem();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;
    //

}


function CreateProductMenu(){
    $('.MainbigTitle').html("");
$('.MyRequest_table').html("");
    closeNav();
    $('.MainForm').html(`
    <h5 class="text-center">ONGERAMO IBISHYA</h5>
    <form class="formDataCreate" onsubmit="return CreateProduct()">
<div class="form-group right-inner-addon">
<label>Product Code <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="productCode" autocomplete="off" onkeyup="autoCompleteTopProductName(this)" required/>
<span class="autocompleteIcon"></span>
</div>
<ul class="list-group  autoCompleteTopItem">

</ul>
<div class="form-group">
<label>Common Name</label>
<input type="text" class="form-control" name="tags" />
</div>
<div class="form-group d-none">
<label>Image</label>
<input type="file" class="form-control" change="imagechange(this)" name="files[]" />
</div>
<div class="form-group ComeFromLoader">

</div>
<div class="form-group">
<label>Price <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="price" required/>
</div>
<div class="form-group">
<label>qty <span class="text-danger">*</span></label>
<input type="text" class="form-control" name="qty" required/>
</div>
<div class="form-group d-none">
<label>Pieces</label>
<input type="text" class="form-control" name="pcs" />
</div>
<div class="form-group d-none">
<label>Factories Price</label>
<input type="text" class="form-control" name="fact_price" />
</div>


<div class="form-group d-none">
<label>active</label>
<input type="text" class="form-control" name="active" />
</div>

<div class="form-group d-none">
<label>Description</label>
<input type="text" class="form-control" name="description" />
</div>
<div class="form-group">

<button  class="btn btn-danger mycreateProduct" >Submit</button>
</div>


</form>
    `);


    LoadSavedComeFrom();

}
function ResetSettingComeFrom(){

    //var catComeFrom=$('.catComeFrom').val();
    //console.log(catComeFrom);
    localStorage.removeItem("comeFromSaved");
    LoadSavedComeFrom();
}
function SaveSettingComeFrom(){
var catComeFrom=$('.catComeFrom').val();
var catComeFromText=$('.catComeFrom option:selected').text();
localStorage.setItem('comeFromSaved',catComeFrom);
alert(`${catComeFromText} Saved as Default`);
//LoadSavedComeFrom();

$(`.catComeFrom option[value="${catComeFrom}"]`).attr("selected",true);

}
async function LoadSavedComeFrom(){
    var comeFromSaved=localStorage.getItem("comeFromSaved");

    if(comeFromSaved)
    {
       /* $('.ComeFromLoader').html(`
    <label>From</label>
<span><i class="fas fa-undo text-danger mylogout"  title="Reset this Setting" onClick="return ResetSettingComeFrom()"></i> <i class="fas fa-cog text-dark mylogout" title="Setting" onClick="return SettingComeFrom()"></i></span>
<select class="form-control catComeFrom" name="cat" >
<option value="${comeFromSaved}">${comeFromSaved}</option>
</select>

    `);*/

    await LoadComeFrom();

    $(`.catComeFrom option[value="${comeFromSaved}"]`).attr("selected",true);
    }
    else{
        LoadComeFrom();
    }

    var sel = document.getElementById("box1");
var catName= sel.options[sel.selectedIndex].text;
    //console.log(text);
   $('.catName').val(catName) ;
}
function SettingComeFrom(){
    $('.viewOrder').modal('show');

$('.MyTitleModal').html(`<h5 class="text-center">  <strong>Settings</strong></h5>`)
$('.ModalPassword').html(`
<div class="pl-1 pr-1 pt-1">
<div class="input-group mb-3">
  <input type="text" class="form-control settingComeFromAddClass" placeholder="Enter From Country" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary" type="button">Add</button>
  </div>
</div>

<ul class="list-group SettingComeFromLoad">



</ul>
</div>

`);
DispSettingComeFrom();
}
function DispSettingComeFrom(){
    //
    var Usertoken=localStorage.getItem("Usertoken");
$('.cover-spin').show();


$.ajax({

url:`./api/AdminProductComeFrom`,
type:'get',
headers: {
    "Content-Type": "application/json;charset=UTF-8",
    "Authorization": `Bearer ${Usertoken}`
},
success:function(data){
if(data.status){//return data as true
    var data=data.result;
    getData=``;

for(var i=0;i<data.length;i++){
    getData+=`
    <li class="list-group-item d-flex justify-content-between align-items-center">
    ${data[i].comeFrom}
    <span class="badge "><i class="fas fa-check text-success"></i>|<i class="fas fa-check text-success"></i></span>
  </li>
    `;
}



    $('.SettingComeFromLoad').html(getData);


$('.cover-spin').hide();


}
else{
    $('.cover-spin').hide();
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    //
}
function AdminAddComeFrom(){
    //settingComeFromAddClass
}


async function LoadComeFrom(){
    let mydata=await LoadSettingComeFrom();
    var data=mydata.result;

    getData=`<label>From</label>
<span><i class="fas fa-save text-success mylogout" title="Save this Setting" onClick="return SaveSettingComeFrom()"></i> <i class="fas fa-cog text-dark mylogout d-none" title="Setting" onClick="return SettingComeFrom()"></i></span>
<input type="hidden" class="form-control catName" name="catName" />
<select class="form-control catComeFrom" name="cat"  id="box1" onchange="CatComeChange()">`;

for(var i=0;i<data.length;i++){
    getData+=`<option value="${data[i].id}">${data[i].comeFrom}</option>`;
}


getData+=`</select>`;


    $('.ComeFromLoader').html(getData);
    //

   // data=comeFromTableArr;
    //

}
function SearchUserByName(thisdata) {

   //
if(thisdata.value=="") return $('.searchUser_Append').html("");

//
var Usertoken=localStorage.getItem("Usertoken");
   //search products
   $.ajax({

url:`./api/SearchUserByName`,
type:'get',
headers: {
        "Content-Type": "application/json;charset=UTF-8",
        "Authorization": `Bearer ${Usertoken}`
    },
data:{
    name:thisdata.value,
},
success:function(data){
if(data.status){//return data as true



var data=data.result;
 var getdata="";
 for(var i=0;i<data.length;i++){

    getdata+=`
    <li class="list-group-item" onclick="return ViewUserName('${data[i].userid}','${data[i].name}','${data[i].tel}','${data[i].email}','${data[i].country}')">${data[i].name}</li>
    `;

 }

 $('.searchUser_Append').html(getdata);



}
else{
    $('.searchUser_Append').html("");
}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;

//
}

function ViewUserName(userid,name,tel,email,country){
    $('.SearchUserByName').val(name);
    $('.searchUser_Append').html("");

    $('.formContactAppend').html(`
    <div class="form-group">
<label>Image</label>
<input type="hidden" value="${userid}" class="form-control" name="ContactID" />
</div>
<div class="form-group">
<label>Phone</label>
<input type="text" value="${tel}" class="form-control" name="tel" />
</div>
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control" value="${email}" name="email" />
<input type="hidden" class="form-control" value="1" name="password" />

</div>
<div class="form-group">
<label>Other Phone</label>
<input type="text" class="form-control" name="otherPhone" placeholder="Enter another phone number" />
</div>
<div class="form-group">
<label>address</label>
<input type="text" class="form-control" value="${country}" name="address" />
</div>
<div class="form-group">
<label>comment</label>
<input type="text" class="form-control" name="comment" />
</div>
    `);
}

function CreateContactMenu(){
    closeNav();

$('.MainForm').html(`
<h5 class="text-center">Create Contact</h5>
<form class="formData">
<div class="form-group">
<label>Enter Name</label>
<input type="text" class="form-control SearchUserByName"  name="name"  onkeyup="return SearchUserByName(this)"/>
</div>
<ul class="list-group searchUser_Append">

</ul>
<div class="formContactAppend">

<div class="form-group">
<label>Image</label>
<input type="hidden"  class="form-control" name="ContactID" />
</div>
<div class="form-group">
<label>Phone</label>
<input type="text"  class="form-control" name="tel" />
</div>
<div class="form-group">
<label>Email</label>
<input type="text" class="form-control"  name="email" />
<input type="hidden" class="form-control"  name="password" value="1" />
</div>
<div class="form-group">
<label>Other Phone</label>
<input type="text" class="form-control" name="otherPhone" placeholder="Enter another phone number" />
</div>
<div class="form-group">
<label>address</label>
<input type="text" class="form-control"  name="address" />
</div>
<div class="form-group">
<label>comment</label>
<input type="text" class="form-control" name="comment" />
</div>

</div>

<div class="form-group">

<input type="submit" class="btn btn-danger" onclick="return CreateContact()" value="submit" />
</div>


</form>
`);

}
function imagechange(event){
/*for(let i=0;i<this.$refs.files.files.length;i++)
{
  this.images.push(this.$refs.files.files[i]);
  console.log(this.images);
}*/

//

 var input = event.target;
      var count = input.files.length;
     // var count = 1;
      var index = 0;
      if (input.files) {
        while(count --) {
          var reader = new FileReader();
          reader.onload = (e) => {
            this.preview_list.push(e.target.result);

          }
          this.image_list.push(input.files[index]);

          reader.readAsDataURL(input.files[index]);
          index ++;
        }
	}
//
console.log(image_list);
      }



function CreateProduct() {//Admin
    $('.cover-spin').show();

       //
       var Usertoken=localStorage.getItem("Usertoken");
    //console.log(OrderId);
   //search products
   $.ajax({

url:`./api/CreateProduct`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
    dataType: "json",
data:$('.formDataCreate').serialize(),
success:function(data){
if(data.status){//return data as true

    //localStorage.setItem('Usertoken',data.token);
 //console.log(hashfunction);
 $('.cover-spin').hide();

 //ViewAllProducts();

    alert("Product Created Successfully");
    $('.formDataCreate :input').val("");
    $('.mycreateProduct').val("Submit");

    LoadSavedComeFrom();

}
else{
alert("Product Code exists already,Please add New Product Code");
$('.cover-spin').hide();

}



},
error:function(data){
    console.log(data);
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
    return false;

}

function CreateContact() {//Admin
    $('.cover-spin').show();
//
var Usertoken=localStorage.getItem("Usertoken");
//console.log(OrderId);
//search products
$.ajax({

url:`./api/CreateContact`,
type:'post',
beforeSend: function (xhr) {
xhr.setRequestHeader('Authorization', `Bearer ${Usertoken}`);
},
dataType: "json",
data:$('.formData').serialize(),
success:function(data){
if(data.status){//return data as true

//localStorage.setItem('Usertoken',data.token);
//console.log(hashfunction);
$('.cover-spin').hide();
    $('.MainForm').html(`
    <div class="alert alert-primary" role="alert">
  Contact Created Successfully
</div>
    `);

}
else{

}



},
error:function(data){
//alert("errors occured please retry this process again or contact system Admin");
//window.location.href = "./login";
}
});
return false;

}
</script>




</body>
</html>
