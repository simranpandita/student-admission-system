<?php

    if(isset($_POST['registerbtn'])) {
        session_start();
        $_SESSION['user']=$_POST['rname'];
    }

    include("connection.php");
    $rname = $_POST['rname'];
    $rpwd = $_POST['rpwd'];

    $query = "SELECT id FROM users WHERE username='$uname'";
    $result = mysqli_query($conn, $query);
    $rows = mysqli_num_rows($result);

    if($rows >= 1) {

        echo "<script>
        alert('User Already Registered');
        window.location.href='page1.php';
        </script>"
    ;

    }
    else {

        $query2 = "INSERT INTO users VALUES(NULL, '$rname', '$rpwd')";
        mysqli_query($conn, $query2);

        echo "<script>
            alert('Registered Successfully');
            window.location.href='page2.php';
            
            </script>"
        ;

    }

?>