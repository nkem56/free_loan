<?php
error_reporting(0); 
?>


<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid3x'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname3x'], ENT_QUOTES, "UTF-8"));
$photo_sess =  $_SESSION['photo3x'];
$email_sess =  htmlentities(htmlentities($_SESSION['email3x'], ENT_QUOTES, "UTF-8"));
$user_rank = $_SESSION['user_rank'];




?>




<!DOCTYPE html>
<html lang="en">

<head>
 <title>Welcome </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />




  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
	



.section_padding {
padding: 60px 40px;
}

.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}



  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:navy;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }



  
.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: navy;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: navy;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: navy;
padding: 6px;
color:white;
}

/*
modal_mobile_resize 

@media screen and (max-width: 600px) {
  .modal_mobile_resize {
    width: 100%;
    margin-top: 15%;
  }
}


*/


.category_post{
background-color: navy;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	




</style>




<script>
$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess ?>';
var fullname_sess_data = '<?php echo $fullname_sess ?>';
var username_sess_data = '<?php echo $userid_sess ?>';
var email_sess_data = '<?php echo $email_sess ?>';
var photo_sess_data = '<?php echo $photo_sess ?>';
var user_rank_sess_data = '<?php echo $user_rank ?>';



var rec = "<span>" +
"<img src=" + photo_sess_data +"  style='text-align:left;border-radius:50%;width:60px;max-width:60px;height:60px;max-height:60px;border-style: solid; border-width:3px; border-color: orange;'>" +
 "</span>";

$('.myd_photo_sess').html(rec);
$('.myd_fullname_sess').html(fullname_sess_data);
$('.myd_userid_sess').html(userid_sess_data);
$('.myd_username_sess').html(username_sess_data);



});

</script>



    </head>
    <body>

 
</head>
<body>












<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">


             

<li class="navgate">
<span class='myd_photo_sess'></span>

<li><a style='color:white' title='Logout' href="logout.php">Logout</a></li>


</li>



      </ul>



    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->


<div class="right-column-all">
<div  class="post_padding section_padding post_bgcolor">

 <div class="row">



<div style="font-size:30px;color:#800000;" > 
<center><br>

<button data-toggle='modal' data-target='#myModal_loan'  title='Request For Loans'   class='category_post'>
<i  style="color:white;font-size:20px;" class="fa fa-edit" aria-hidden="true"></i> Click to Request For Loans</button>
</center></div><br>

<h3> <center>Loan Seekers Management System</center></h3>

<style>



.title_css{
//background: green;
color:#0088cc;
cursor:pointer;
font-size:20px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #c1c1c1;
color:black
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: #c1c1c1;
color:black;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_cssa{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_cssa:hover{
background: black;
color:white;

}



</style>

<script>

$(document).ready(function(){
var appointment = 'appointment';
$("#loader-dashboard_post").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i> &nbsp;Please Wait,Loading Appointment Bookers...</div>');
var datasend = {appointment:appointment};


	
		$.ajax({
			
			type:'POST',
			url:'loan_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-dashboard_post").hide();
$("#result-dashboard_post").html(msg);
//setTimeout(function(){ $('#result-dashboard_post').html(''); }, 5000);				
	
}
			
		});
		
		

});


</script>
<br>
<div id="loader-dashboard_post"></div>
<div id="result-dashboard_post"></div>



<!--End loading posts-->








</div>
<!--end blog post row-->
</div>
<!--all post section ends-->









<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><span class='myd_title_header'></span></p>
<p class="footer_text2"><span class='myd_title_footer'></span></p>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->
	




<div>
  <!--end right column all-->    






   
</body>
</html>












<script>

// clear Modal div content on modal closef closed
$(document).ready(function(){
$('#myModal_loan').on('hidden.bs.modal', function() {
//alert('Modal Closed');
   $('.myform_loan').empty();  
 console.log("modal closed and content cleared");
 });
});

</script>



<!-- Loan Modal starts here --->


<div class="container_action">

  <div class="modal fade " id="myModal_loan" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>

          <h4 class="modal-title">Loan Credit Facility System</b></h4>
        </div>
        <div class="modal-body">
          



<!-- form START -->





<!-- start pForm  -->


<div style='background:#f1f1f1; padding:16px; color:black'>


<center><h4>Remotely Request for Loans.</h4></center>
<br>
<!--start form1-->


<script>

$(document).ready(function(){
$('#post_btn').click(function(){
		
var fullname = $("#fullname").val();
var gender = $("#gender").val();
var email = $("#email").val();
var phone_no = $("#phone_no").val();
var address  = $("#address").val();
var city = $("#city").val();
var state = $("#state").val();
var zipcode = $("#zipcode").val();
var loan_type = $("#loan_type").val();
var loan_aim = $("#loan_aim").val();
var loan_amount = $("#loan_amount").val();


if(fullname==""){
alert('Fullname cannot be Empty');
//return false;
}


else if(email==""){
alert('Email cannot be Empty');
//return false;
}


else if(phone_no==""){
alert('Phone No. cannot be Empty');
//return false;
}


else{

$('#loader_l2').fadeIn(400).html('<br><div style="color:white;background:#3b5998;padding:10px;"><img src="ajax-loader.gif">&nbsp;Please Wait, Appointments  is being created...</div>');
var datasend = {fullname:fullname, gender:gender,email:email, phone_no,phone_no, address:address, city:city, state:state, zipcode:zipcode,loan_type:loan_type, loan_aim:loan_aim, loan_amount:loan_amount};	
		$.ajax({
			
			type:'POST',
			url:'loan.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){			
$('#loader_l2').hide();
$('#result_l2').html(msg);
setTimeout(function(){ $('#result_l2').html(''); }, 5000);				
				
			}
			
		});
		
		}
		
	})
					
});




</script>

<h3> Personal Informations</h3>

 <div class="form-group col-sm-6">
              <label style="" for="">
Fullname
</label>
              <input type="text" class="col-sm-12 form-control" id="fullname" name="fullname" value="<?php echo $fullname_sess; ?>">
            </div>

 <div class="form-group col-sm-6 ">
              <label style="" for="">
Email
</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" value="<?php echo $email_sess; ?>">
            </div>


 <div class="form-group col-sm-6">
              <label style="" for="">
Gender
</label>
              
              <select class="col-sm-12 form-control" id="gender" name="gender">
<option value=""></option>
<option value="Male">Male</option>
<option value="Female">Female</option>

</select>
            </div>

 <div class="form-group col-sm-6 ">
              <label style="" for="">
Phone Number
</label>
              <input type="text" class="col-sm-12 form-control" id="phone_no" name="phone_no" placeholder="Enter Phone No">
            </div>







<h3> Address Informations</h3>

 <div class="form-group col-sm-6">
              <label style="" for="">
Address
</label>
              <input type="text" class="col-sm-12 form-control" id="address" name="address" placeholder="Enter Addresses">
            </div>

 <div class="form-group col-sm-6 ">
              <label style="" for="">
City
</label>
              <input type="text" class="col-sm-12 form-control" id="city" name="city" placeholder="Enter City">
            </div>




 <div class="form-group col-sm-6 ">
              <label style="" for="">
State
</label>
              <input type="text" class="col-sm-12 form-control" id="state" name="state" placeholder="Enter State">
            </div>



 <div class="form-group col-sm-6 ">
              <label style="" for="">
Zip Code
</label>
              <input type="text" class="col-sm-12 form-control" id="zipcode" name="zipcode" placeholder="Enter ZipCode">
            </div>










<h3> Loan Informations</h3>

 <div class="form-group col-sm-6">
              <label style="" for="">
Pick Loan Type
</label>
              <select class="col-sm-12 form-control" id="loan_type" name="loan_type">
<option value=""></option>
<option value="Personal_Loan">Personal_Loan</option>
<option value="Business_Loan">Business_Loan</option>

</select>
            </div>

 <div class="form-group col-sm-6 ">
              <label style="" for="">
Loan Amount(USD)
</label>
              <input type="text" class="col-sm-12 form-control" id="loan_amount" name="loan_amount" placeholder="Enter Loan Amount">
            </div>


 <div class="form-group col-sm-12">
              <label style="" for="">
Purpose for the Loan
</label>
              <textarea class="col-sm-12 form-control" id="loan_aim" name="loan_aim" placeholder="Enter Purpose for the Loan"></textarea>
            </div>






<br>



<div class="col-sm-12 form-group">
                        <div id="loader_l2"></div>
                        <div id="result_l2"></div>
</div>


<button type="button" id="post_btn" class="post_btn category_post"  /> Submit Data</button>
</div>







<!--end form1-->


<br><br>
</div>




</div>



<!--   end pForm  -->








<br /><br />
<br /><br />
<br /><br />
</div>

<!--   form ENDS   -->



        </div>
        <div class="modal-footer modal_footer_color" style={{color:'black',background:'#ddd'}}>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



<!--  loan Modal ends here  -->











