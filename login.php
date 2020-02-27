<?php

    if(isset($_POST['loginbtn'])) {
        session_start();
        $_SESSION["user"]=$_POST['uname'];
    }

    include("connection.php");
    $uname = $_POST['uname'];
    $pwd = $_POST['psw'];

    $query = "SELECT id FROM users WHERE username='$uname' AND pass='$pwd'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);

    if($rows == 1) {

        echo "<script>
            window.location.href='page2.php';
            </script>"
        ;
    
    }
    else {

        echo "<script>
            alert('invalid username or password');
            window.location.href='page1.php';
            </script>"
        ;

    }
?>