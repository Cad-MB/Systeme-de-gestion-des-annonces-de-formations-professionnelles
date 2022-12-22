

  <?php

     ob_start(); 

     include_once("connection.php");

     session_start();

 ?>


<!DOCTYPE html>
<html lang="en">

<head>

 <title>Inscription Formateur</title>

</head>

<body>

  <!----------------  Start Header  ---------------->

  <?php

     $menu = file_get_contents("menu.php") ;
     $base = basename($_SERVER['PHP_SELF']) ;

     $menu = preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu) ;

     include 'menu.php' ;

  ?>

  
    <!----------------  End Header  ---------------->

  <br />


     <!------------------   Registration Form  ------------------->

  <section id="formateursignup"> 
  
  <div class="c11 container">
    <div class="row">

      <div class="card" id="Registration">
        <h5 class="card-header" class="py-5 text-center font-weight-bold"> <b>Inscription : Formateur </b></h5>

         <div class="row" class="card-body">

           <div class="col-md-8 box-1">

             <form method="post" enctype="multipart/form-data">

               <div class="text"></div>

                <div class="form-group">
                 <input type="text" required class="form-control" placeholder="Prenom" name="fname">
                </div>

                <div class="form-group">
                 <input type="text" required class="form-control" placeholder="Nom" name="lname">
                </div>

                <div class="form-group">
                 <input type="text" required class="form-control" placeholder="Identifiant" name="uname">
                </div>

                <div class="form-group">
                  <input type="text" required class="form-control" placeholder="Numero De Telephone" name="phone">
                </div>

                <div class="form-group">
                  <input type="text" required class="form-control" placeholder="Email" name="email">
                </div>


                <div class="form-group">
                  <input type="password" required class="form-control" placeholder="Mot De Passe" name="pass">
                </div>

                <br>

                <button type="submit" name="submit" class="btn btn-primary">Soumettre</button>

              </form>


   <!------------- PHP Code Started for Buyer Registration ---------------->


  <?php
      
      include_once("connection.php");
      
      $conn = mysqli_connect("localhost","root","","AUF"); 

       if(isset($_POST['submit']))
     {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $signup_table = "INSERT INTO formateur_signup(firstname,lastname,username,phone,email,password)
                VALUES('$fname','$lname','$uname','$phone','$email','$pass')";

               if(empty($fname) || empty($lname) || empty($uname) || empty($pass) || empty($phone) || empty($email) )
              {
                echo"<script>swal({
                    title: 'Complete all the fields',
                    text: 'Thank You',
                    icon: 'error',
                    timer: 4000,
                    button: false,
                    });</script>";
                }

                 elseif(!$res = mysqli_query($conn, $signup_table))
                {
                   echo"<script>swal({
                    title: 'Error Occured. Please Try again.',
                    text: 'Thank You',
                    icon: 'error',
                    timer: 4000,
                    button: false,
                    });</script>";
                }

                 else
                {

                  $res = mysqli_query($conn, $signup_table);

                  
                  echo"<script>swal({
                    title: 'Congratulation! Your Information Added Successfully',
                    text: 'Registration Complete.Thank You',
                    icon: 'success',
                    timer: 5000,
                    button: false,
                    });</script>";

                  echo "<script>
                  alert('Felicitation ! Inscription reussite');  
                  </script>";
                    
                   
                  header("Location: http://localhost/AUF/f_login.php");


                }

              }

  ?>

            </div>

          </div>
        </div>

    </div>

 </section>


	  <!--------------   Footer Starts ------------------>

    <?php include 'footer.php'?>


    <!--------------------------    javascript    --------------------->

 <script src="js/jquery.js"></script>
 <script src="js/jquery.easing.1.3.js"></script>
 <script src="js/bootstrap.js"></script>

 <script src="js/modernizr.custom.js"></script>
 <script src="js/toucheffects.js"></script>
 <script src="js/google-code-prettify/prettify.js"></script>
 <script src="js/jquery.bxslider.min.js"></script>
 <script src="js/camera/camera.js"></script>
 <script src="js/camera/setting.js"></script>

 <script src="js/jquery.prettyPhoto.js"></script>
 <script src="js/portfolio/jquery.quicksand.js"></script>
 <script src="js/portfolio/setting.js"></script>

 <script src="js/jquery.flexslider.js"></script>
 <script src="js/animate.js"></script>
 <script src="js/inview.js"></script>

 <!-- Template Custom JavaScript File -->

 <script src="js/custom.js"></script>

   </body>

 </html>

 