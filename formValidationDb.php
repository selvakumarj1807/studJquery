<?php
// database connention
$con = new mysqli("localhost","root","","jqueryformdetails");


// insert into the table
$sql="insert into details(name,dob,mail,password,cpassword,contact) values ('{$_POST["name"]}','{$_POST["dob"]}','{$_POST["email"]}','{$_POST["pass"]}','{$_POST["cpass"]}','{$_POST["contact"]}')";

$con->query($sql);

?>