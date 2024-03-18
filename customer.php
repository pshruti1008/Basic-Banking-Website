<?php

$con=mysqli_connect("localhost","root","");

// $s="create database spark";

// $r=mysqli_query($con,$s);
// if(!$r)
// {
//     die("Unable to Create Database");
// }

// echo "<br>Database Sparks Created<br>";

mysqli_select_db($con,"spark");

// $s1="create table customer(Cust_Id int primary key,Cust_Name varchar(50),Cust_Email varchar(50),Current_Bal float)";

// $r1=mysqli_query($con,$s1);

// if(!$r1)
// {
//     die("Unable to Create Table Customer");
// }

// echo "<br>Customer Table Created<br>"; 

// $s2="insert into customer(Cust_Id,Cust_Name,Cust_Email,Current_Bal) values (101,'Shruti Pachpimple','spachpimple@gmail.com',25000),(102,'Rutuja Bhor','rutu1325@gmail.com',15000),(103,'Trupti Muktapure','truptimuktapure@gmail.com',17350),(104,'Vaibhavi Shingade','vaibhavi12@gmail.com',30000),(105,'Keshu Garg','keshu3833@gmail.com',15500),(106,'Vaishnavi Chiddarwar','vschiddarwar@gmail.com',45200),(107,'Shruti Patil','shrutipatil07@gmail.com',25000),(108,'Priyamvada Singh','priya18@gmail.com',10000),(109,'Tanushree Pandhade','tanupandhade@gmail.com',13000)";

// $r2=mysqli_query($con,$s2);

// if(!$r2)
// {
//     die("Unable to Insert into Table Customer");
// }

// echo "<br>Inserted in Customer Table <br>";

echo "<html>
<head>
<style>
/* Style for the table */
table {
    width: 100%; /* Make the table take up the full width of its container */
    border-collapse: collapse; /* Collapse the borders into a single border */
    border-spacing: 0; /* Remove any spacing between table cells */
}

/* Style for table header */
th {
    background-color: #007bff; /* Blue background color */
    color: #fff; /* White text color */
    padding: 10px; /* Add padding */
    text-align: left; /* Align text to the left */
}

/* Style for table rows */
tr:nth-child(even) {
    background-color: #f2f2f2; /* Alternate row background color */
}

/* Style for table cells */
td {
    padding: 10px; /* Add padding */
    border-bottom: 1px solid #ddd; /* Add bottom border */
}

/* Style for hover effect on rows */
tr:hover {
    background-color: #cceeff; /* Light blue background color on hover */
}

/* Style for h1 element */
h1 {
    color: #007bff; /* Blue text color */
    font-size: 50px; /* Set font size */
    font-weight: bold; /* Set font weight to bold */
    text-align: center; /* Center align text */
    margin-top: 20px; /* Add some top margin */
    margin-bottom: 20px; /* Add some bottom margin */
}


</style></head>";

echo "<h1>Customer Details</h1>";

echo "<table border=1><tr><th>Cust_Id</th><th>Cust_Name</th><th>Cust_Email</th><th>Current_Balance</th></tr>";

$s3="select * from customer";

$r3=mysqli_query($con,$s3);
if(!$r3)
{
    die("Unable to Select From Table Customer");
}

while($row=mysqli_fetch_assoc($r3))
{
    echo "<tr><td>".$row['Cust_Id']."</td><td>".$row['Cust_Name']."</td><td>".$row['Cust_Email']."</td><td>".$row['Current_Bal']."</td></tr>";
}

echo "</table>";

?>