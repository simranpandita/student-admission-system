<?php

if(isset($_POST['educationsubmit'])) {
    session_start();
    include("connection.php");
        $sscboard=$_POST['xb'];  
        $sscagg=$_POST['sscagg'];
        $sscper=$_POST['sscper'];
        $hscboard=$_POST['tb'];
        $hscagg=$_POST['hscagg'];
        $hscper=$_POST['hscper'];
        $cetp=$_POST['cetp'];
        $cetc=$_POST['cetc'];
        $cetm=$_POST['cetm'];
        $cett=$_POST['cett'];
        $appeared=$_POST['appeared'];
        $jeep=$_POST['jeep'];
        $jeec=$_POST['jeec'];
        $jeem=$_POST['jeem'];
        $jeet=$_POST['jeet'];
        $username = $_SESSION['user'];
        
    
    $query="INSERT INTO educational_details VALUES('$username','$sscboard','$sscagg','$sscper','$hscboard','$hscagg','$hscper','$cetp','$cetc','$cetm','$cett','$appeared','$jeep','$jeec','$jeem','$jeet')";
    
    mysqli_query($conn,$query);
    header("location: page2.php");
}
?>