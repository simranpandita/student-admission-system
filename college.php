<?php
if(isset($_POST['collegesubmit'])) {
    session_start();
    include("connection.php");

    $branch=$_POST['branch'];
    
    $pf1=$_POST['pf1'];
    
    $pf2=$_POST['pf2'];
   
    $pf3=$_POST['pf3'];
   
    $username = $_SESSION['user'];
   
    $query="INSERT INTO college_details VALUES('$username','$branch','$pf1','$pf2','$pf3')";
    
    mysqli_query($conn,$query);
    header("location: page2.php");
}
?>