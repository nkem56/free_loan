
<?php

include('data6rst.php');

$result = $db->prepare('SELECT * FROM loan order by id desc');
$result->execute(array());
$nosofrows = $result->rowCount();



if ($nosofrows > 0) {
    echo "<table class='table table-striped table-bordered table-hover table-responsive'>

<tr>
<th>Photo</th>
<th>Name</th>
<th>Loan Date</th>
<th >Gender</th>
<th>Email</th>
<th>Phone No</th>
<th>Address</th>
<th>City</th>
<th>State</th>
<th>ZipCode</th>
<th>Loan Type</th>
<th>Loan Aim</th>
<th>Loan Amount</th>
<th>Credit Score</th>
</tr>";

    while($row = $result->fetch()) {
$id = $row['id'];
$photo = $row['photo'];
$fullname = $row['fullname'];
$userid = $row['userid'];
$loan_date = $row['loan_date'];
$gender = $row['gender'];
$email = $row['email'];
$phone_no = $row['phone_no'];
$address = $row['address'];
$city = $row['city'];
$state = $row['state'];
$zipcode = $row['zipcode'];
$loan_type = $row['loan_type'];
$loan_aim = $row['loan_aim'];
$loan_amount = $row['loan_amount'];
$credit_score = $row['credit_score'];


        echo "<tr>

<td> <img src='$photo' width='60px' height='60px'></td>
<td> $fullname</td>
<td>$loan_date </td>
<td>$gender </td>
<td>$email </td>
<td>$phone_no </td>
<td>$address </td>
<td>$city </td>
<td>$state </td>
<td>$zipcode </td>
<td>$loan_type </td>
<td>$loan_aim </td>
<td>$loan_amount </td>
<td>$credit_score </td>

</tr>";
    }
    echo "</table>";

} else {
  echo "<br><div style='background:red;color:white;padding:10px;border:none;'>No Loan Credit has been Requested Yet</div>";
}




?>



