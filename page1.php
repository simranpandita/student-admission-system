<!DOCTYPE html>
<html lang="en">
    <head>
         <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Default Page</title>
        <link rel="stylesheet" href="page1.css">
    </head>

    <style>
           * {box-sizing: border-box;}
              body {font-family: Verdana, sans-serif;}
              .mySlides {display: none;}
              img {vertical-align: middle;}

              /* Slideshow container */
              .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
              }
              
             .active {
                background-color: #717171;
              }

              /* Fading animation */
              .fade {
                -webkit-animation-name: fade;
                -webkit-animation-duration: 1.5s;
                animation-name: fade;
                animation-duration: 1.5s;
              }

              @-webkit-keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
              }

              @keyframes fade {
                from {opacity: .4} 
                to {opacity: 1}
              }

              /* On smaller screens, decrease text size */
              @media only screen and (max-width: 300px) {
                .text {font-size: 11px}
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
          <div class="slideshow-container">
            <div class="mySlides fade">        
                    <img src="final2.jpg" height="250px" width="100%" >
            </div>
                
            <div class="mySlides fade">       
                   <img src="imgr2.jpg" height="250px" width="100%">
            </div>

            <div class="mySlides fade">
                    <img src="imgrandom.jpg"height="250px" width="100%" >
            </div>
            <div class="mySlides fade">
                    <img src="img8.jpg"height="250px" width="100%" >
            </div>
            <div class="mySlides fade">
                    <img src="imgr4.jpg"height="250px" width="100%" >
            </div>
          </div>    
                  
          </div>
                <br>
          <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span> 
          </div>
                
        <button onclick="document.getElementById('id02').style.display='block'" class="b1">Register</button>     
        <button onclick="document.getElementById('id01').style.display='block'" class="b2" >Login</button>
        
        <div id="id01" class="modal">
            <form class="modal-content animate" action="login.php" method="post">
            <div class="imgcontainer">
                  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="img1.png" alt="Avatar" class="avatar">
            </div>
            
            <div class="register">
                 <label for="uname"><b>Enter User-Id</b></label>
                 <input style="margin-left: 5px" type="text" placeholder="Enter User-Id" name="uname" required>
                    <br><br>
                  <label for="psw"><b>Password</b></label>
                  <input style="margin-left: 35px" type="password" placeholder="Enter Password" name="psw" required>
                    <br><br>
                  <button type="submit" name="loginbtn">Login</button>
                  <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                  </label>
            </div>

            
            
            <div class="register" style="background-color:#f1f1f1">
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                  <span class="psw">New User <a href="page1.php">Sign Up</a></span>
            </div>
              </form>
            </div>
            
            <div id="id02" class="modal">
                    <form name="check" class="modal-content animate" onsubmit="return validateForm();" action="register.php" method="post">
                    <div class="imgcontainer">
                          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="img1.png" alt="Avatar" class="avatar">
                    </div>
                    
                    <div class="register">
                         <label for="uname"><b>Enter username</b></label>
                         <input style="margin-left: 5px" type="text" placeholder="Enter Username" name="rname" required>
                            <br><br>
                          <label for="pwd"><b>Password</b></label>
                          <input style="margin-left: 35px" type="password" placeholder="Enter Password" name="rpwd"  required>
                            <br><br>
                        <label for="confirmpwd"><b> Re-enter Password</b></label>
                        <input style="margin-left: 5px" type="password" placeholder="Re-Enter Password" name="repwd"  required>
                            <br><br>
                          <button type="submit" name="registerbtn">Sumbit</button>
                          
                    </div>

                    


            <script>
            // Get the modal
            var modal = document.getElementById('id01');
            var modal2 = document.getElementById('id02');
            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal ) {
                    modal.style.display = "none";
                    
                }
                if(event.target == modal2){
                    modal2.style.display="none";
                }
            }
          
      function validateForm() {
          var x = document.forms["check"]["rpwd"].value;
          var y = document.forms["check"]["repwd"].value;
          if(x != y) {
              alert("Passwords Does Not Match");
              return false;
          }
          if(x.length < 8) {
              alert("Password too short");
              return false;
          }
          if(x.length > 63) {
              alert("Password too long");
              return false;
          }
          return true;
      }
  
            
            
              var slideIndex = 0;
              showSlides();

              function showSlides() {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++) {
                  slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++) {
                  dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 2000); // Change image every 2 seconds
              }
</script>

        



    </body>
</html>