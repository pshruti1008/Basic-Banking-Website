<?php

$con=mysqli_connect("localhost","root","");

mysqli_select_db($con,"spark");

echo "<html><head> <style>
table {
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ddd;
    margin-top: 20px;
  }
  
  /* Styles for table header */
  th, td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }
  
  /* Alternate row background color*/ 
  tr:nth-child(even) {
    background-color: #f2f2f2;
  }
  
  /* Hover effect */
  tr:hover {
    background-color: #ddd;
  }
  
  /* Styles for table header */
  th {
    background-color: #4CAF50;
    color: white;
  }
  
  /* Styles for form input */
  input[type=text] {
    width: 100%;
    padding: 8px;
    margin: 5px 0;
    box-sizing: border-box;
  }
  
  /* Styles for form submit button */
  input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  /* Styles for form submit button on hover */
  input[type=submit]:hover {
    background-color: #45a049;
  }
  
      </style></head>";
echo "<table border=1><tr><th>Senders_Id</th><th>Receivers_Id</th><th>Transfer Money</th></tr>";

echo "<center><h1>Transaction History</h1></center>";

$s3="select * from transfer1";

$r3=mysqli_query($con,$s3);
if(!$r3)
{
    die("Unable to Select From Table Transfer");
}

while($row=mysqli_fetch_assoc($r3))
{
    echo "<tr><td>".$row['Senders_Id']."</td><td>".$row['Receivers_Id']."</td><td>".$row['Transfer_amt']."</td></tr>";
}


echo "</table>";

?>