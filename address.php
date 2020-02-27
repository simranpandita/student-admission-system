<?php
if(isset($_POST['addresssubmit'])) {
    session_start();
    include("connection.php");
    $address=$_POST['address'];
    $district=$_POST['district'];
    $state=$_POST['state'];
    $city=$_POST['city'];
    $pincode=$_POST['code'];
    $username = $_SESSION['user'];
   
    $query="INSERT INTO address_details VALUES('$username', '$address', '$district', '$state', '$city', '$pincode')";
    mysqli_query($conn, $query);
    header("location: page2.php");
}
?>