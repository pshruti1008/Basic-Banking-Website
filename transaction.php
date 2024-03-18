<?php

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"spark");

// $s1 = "CREATE TABLE IF NOT EXISTS transfer1(Senders_Id INT, Receivers_Id INT, Transfer_amt FLOAT)";
// $r1 = mysqli_query($con, $s1);

// if (!$r1) {
//     die("Unable to Create Table transfer");
// }

// echo "<br>Transfer Table Created<br>"; 

$sname = $_POST['sname'];
$rname = $_POST['rname'];
$amt = $_POST['amt'];


$stmt = $con->prepare("UPDATE customer SET Current_Bal = Current_Bal - ? WHERE Cust_Id = ?");
$stmt->bind_param("di", $amt, $sname);

if ($stmt->execute()) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $stmt->error;
}

$stmt1 = $con->prepare("UPDATE customer SET Current_Bal = Current_Bal + ? WHERE Cust_Id = ?");
$stmt1->bind_param("di", $amt, $rname);

if ($stmt1->execute()) {
    //echo "Record updated successfully";
} else {
    echo "Error updating record: " . $stmt1->error;
}

// Prepare the INSERT statement
$stmt3 = $con->prepare("INSERT INTO transfer1 (Senders_Id, Receivers_Id, Transfer_amt) VALUES (?, ?, ?)");
$stmt3->bind_param("iid", $sname, $rname, $amt);

// Execute the INSERT statement
if ($stmt3->execute() === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $stmt3->error;
}

?>