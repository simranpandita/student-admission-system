<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> Admission Status</title>
</head>
<style>
    body {font-family: Verdana, sans-serif;}
    .upperbody
    { 
        overflow:hidden;

        font-size:15px;
    
    }

    .upperbody a
    {
        float:left;
        padding:10px 10px;
        color:Black;
        text-align:center;
        text-decoration:none;
        font-size:20px;
    }	
    .upperbody a:hover
    {
        background-color: gainsboro;
        color:black;
    }
    .button {
    background-color: darkblue;
    border: none;
    color: white;
    padding: 30px;
    text-align: center;
    text-decoration: none;
    
    font-size: 20px;
    cursor: pointer;
    border-radius: 50%;
    
    }

    .b1{
        margin-left:10%;
    }
    .b2{
        margin-left:12.5%;
    }
    .b3{
        margin-left:13.5%;
    }
    .b4{
        margin-left:26%;
    }
    .b5{
        margin-left:15%;
    }
    .b6{
        margin-left:85%;   
    }
    
</style>
<body background="BG2.jpg">
        <div class="upperbody">
       
            <a href="page1.php" ><img width="415px" height="121px" src="img5.jpg"></a>
            <a href="page1.php"   style="margin-top: 50px">Home</a>
            <a href="listofclg.html"  style="margin-top: 50px">Colleges</a>	
            <a href="aboutus.html"  style="margin-top: 50px">About Us</a>
            <a href="contactus.html"  style="margin-top: 50px">Contact Us</a>
            </div>
        <br><br>

        <?php
            session_start();
            echo "Hello ".$_SESSION["user"];
        ?>
        
        <button class="b6" onclick="location.href='logout.php';">Log out</button>
        <br><br><br>
        <button class="button b1" onclick="location.href='personal_details.html';">Personal Details</button>
        <button class="button b2" onclick="location.href='address_details.html';">Address Details</button>
        <button class="button b3" onclick="location.href='educational_details.html';">Educational Details</button>
        <br><br><br><br>
        <button class="button b4"onclick="location.href='college_details.html';">College Details</button>
        <button class="button b5"onclick="location.href='#';">Admission Status</button>
        
</body>
</html>