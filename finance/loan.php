<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//error_reporting(0);

if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {


$fullname = strip_tags($_POST['fullname']);
$gender = strip_tags($_POST['gender']);
$email = strip_tags($_POST['email']);
$phone_no = strip_tags($_POST['phone_no']);
$address = strip_tags($_POST['address']);
$city = strip_tags($_POST['city']);
$state = strip_tags($_POST['state']);
$zipcode = strip_tags($_POST['zipcode']);
$loan_type = strip_tags($_POST['loan_type']);
$loan_aim = strip_tags($_POST['loan_aim']);
$loan_amount = strip_tags($_POST['loan_amount']);



session_start();
$userid_sess_data = htmlentities(htmlentities($_SESSION['uid3x'], ENT_QUOTES, "UTF-8"));
$fullname_sess_data = htmlentities(htmlentities($_SESSION['fullname3x'], ENT_QUOTES, "UTF-8"));
$photo_sess_data = $_SESSION['photo3x'];
$email_sess =  htmlentities(htmlentities($_SESSION['email3x'], ENT_QUOTES, "UTF-8"));

//date("Y-m-d H:i:s");
$loan_date = date("Y-m-d");
$mt_id= rand(0000,9999);

$credit_score =$mt_id; 



include('data6rst.php');

$timer  = time();
$statement = $db->prepare('INSERT INTO loan
(photo,userid,fullname,gender,email,phone_no,address,city,state,zipcode,loan_type,loan_aim,loan_amount,loan_date,credit_score)
 
                          values
(:photo,:userid,:fullname,:gender,:email,:phone_no,:address,:city,:state,:zipcode,:loan_type,:loan_aim,:loan_amount,:loan_date,:credit_score)');

$statement->execute(array( 
':photo' => $photo_sess_data,
':userid' => $userid_sess_data,
':fullname' => $fullname,
':gender' => $gender,
':email' => $email,
':phone_no' => $phone_no,
':address' => $address,
':city' => $city,
':state' => $state,
':zipcode' => $zipcode,
':loan_type' => $loan_type,
':loan_aim' => $loan_aim,
':loan_amount' => $loan_amount,
':loan_date' => $loan_date,
':credit_score' => $credit_score
));



if($statement){

echo "<div class='well'>
<div style='color:white;background:green;padding:10px;'>Loan Successfully Created.</div><br>

</div>";


echo "<script>
window.setTimeout(function() {
    window.location.href = 'dashboard.php';
}, 1000);
</script><br><br>";


}
else {
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Loan Cannot be Created.<br></div>";
                }

}


?>



