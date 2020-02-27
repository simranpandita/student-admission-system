<?php

if(isset($_POST['submit'])) {
    session_start();
    include("connection.php");

    $fname=$_POST['fname'];
    
    $mname=$_POST['mname'];
    
    $lname=$_POST['lname'];
   
    $email=$_POST['id'];
    $gender=$_POST['gender'];
   
    $dob=$_POST['bday'];
    
    
    $phone=$_POST['phone'];
   
    $nationality=$_POST['nation'];
    $religion=$_POST['religion'];
    $username = $_SESSION['user'];
   
    $query="INSERT INTO personal_details VALUES('$username',' $fname',' $mname',' $lname',' $email',' $gender', '$dob', '$phone','$nationality','$religion')";
    
    mysqli_query($conn,$query);
    header("location: page2.php");
}
?>