<?php
  
  if(!isset($_SESSION)) 
  { 
      session_start(); 
  } 

   $use = $_SESSION['user_name'];

   if($use == true)
  {
      
  }

   else
  {
      header("location:http://localhost/AUF/c_login.php");
  } 


?>


<!DOCTYPE html>
<html lang="en">

<head>

 <title>Modifier Profile</title>
 
  <!-- Profile Block and Others -->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

   <!-- Real Time Show -->

 
  <script type="text/javascript"> 

  function display_c()
 {
   var refresh=1000; // Refresh rate in milli seconds
   mytime=setTimeout('display_ct()',refresh)
 }

  function display_ct() 
 {
   var x = new Date()
  document.getElementById('ct').innerHTML = x;
  display_c();
 }

</script>

</head>

<body>

<!----------------  Start Header  ---------------->

  <?php

   $menu = file_get_contents("menu.php") ;
   $base = basename($_SERVER['PHP_SELF']) ;

   $menu = preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu) ;

   include 'menu.php' ;

  ?>


    <!---------------- Page Container ------------------>


 <div class="w3-container w3-content" style="max-width:1450px;margin-top:30px">    

<!-------------------- The Grid ------------------->

<div class="w3-row">

  <!--------- Left Column ------------>

  <div class="w3-col m3">

    <!------------ Profile ---------->
  
  
    <div class="w3-card w3-round w3-white">
      <div class="w3-container">
      <hr>

      

       <h4 class="w3-center bold text-shadow: 2px 2px #FF0000" style="color:black" ;> Profile </h4> 
       <hr></hr>
      
       <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-large w3-text-teal"></i>


       <?php  include 'c_signup_info_db.php' ?>

       <?php
           
           echo '<tr> 
                   <td>'.$firstname.'</td>     
                   <td>'.$lastname.'</td>                                   
                </tr>';
       ?>

   <hr>
   
       <p><i class="fa fa fa-user fa-fw w3-margin-right w3-large w3-text-teal"></i>

<?php
    
    echo '<tr> 
            <td>'.$username.'</td>     
                                            
         </tr>';
?>

 </p>

 <!------------------ Email ------------------>

<p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i> <?php
    
    echo '<tr> 
            <td>'.$email.'</td>     
                                            
         </tr>';
?>  </p>

<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php
    
    echo '<tr> 
            <td>'.$phone.'</td>     
                                            
         </tr>';
?>  </p>


      </div>
    </div>
    <br>
    

    <!------------------ Accordion ---------------->

    <div class="w3-card w3-round">

      <div class="w3-white">

        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme-l1 w3-left-align w3-hover-white">
        <i class="fa fa-info-circle fa-fw w3-margin-right"></i> Plus D'Info</button>
        <div id="Demo1" class="w3-hide w3-container">

       <hr>
       <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Addresse : 
       
       <?php
    
         echo '<tr> 
            <td>'.$address.'</td>                                     
         </tr>';
     ?>
       </p>

       <p><i class="fa fa fa-registered fa-fw w3-margin-right w3-large w3-text-teal"></i>Date D'inscription : 

       <?php
    
          echo '<tr> 
                  <td>'.$reg_time.'</td>                                     
               </tr>';
       ?>
    </p>

      </div>
    
   <button onclick="window.location.href='#active';" class="w3-button w3-block w3-theme w3-left-align w3-hover-white">
   <i class="fa fa-edit fa-fw w3-margin-right"></i>Modifier Profile</button>
        <div id="Demo2" class="w3-hide w3-container">
        <div class="w3-row-padding">
  
       </div>
        </div>

          <!--------------------- Password Change Part with Popup Start using PHP  ---------------------------->

   <a onclick="window.location.href='#';" class="w3-bar-item w3-button w3-block w3-theme w3-left-align w3-hover-green" href="#" data-target="#changepassword" data-toggle="modal">

   <i class="fa fa-lock fa-fw w3-margin-right"></i> Changer Mot De Passe</a>
    <div id="Demo2" class="w3-hide w3-container">
     <div class="w3-row-padding">
     </div>
     </div>

          <!-------------------- Popup For Change Password-------------------->

     <div id="changepassword" class="modal fade" role="dialog">
        <div class="modal-dialog">
    
            <div class="modal-content">
              <div class="modal-body">                   
                                        
                  <div class="modal-body">

<!---------------------------------   Input Form ( Change Password )  ---------------------------->

      <form method="post" action="c_profile_edit.php" >

        <table>
          <br>
          <br>
          <tr>
          <td>Mot De Passe Actuel :</td>
              <td><input type="password" size="15" id="oldpass" name="oldpass"></td> 
          </tr>

          <tr>
          <td>Nouveau Mot De Passe :</td>
              <td><input type="password" size="15" id="newpassword" name="newpassword"></td>
          </tr>

          <tr>
          <td>Confirmer Mot De Passe :</td>
              <td><input type="password" size="15" id="confirmnewpassword" name="confirmnewpassword"></td>
          </tr>

         <hr>
    
        </table>

        <button class="btn btn-primary pull-right" type="submit" name="done" > Sauvegarder</button>

        <div class="modal-footer">     
    
     </form>   

       <hr>

        <button class="btn btn-secondary pull-left" data-dismiss="modal">Fermer</button>
        <hr>

          <div class="form-group">
                            
                                      

                                  </div>                                                              
                                </div>
              
                             </form>
                        
                        </div>                           
                      </div>           
                  </div>
              </div>  
          </div>
            
            
        </li>   

        <!---------------------   Input Form End ( Change Password ) HTML ------------------------>
          
  <?php
    

    $conn = mysqli_connect("localhost","root","","AUF"); 

    $use = $_SESSION['user_name'];

     
      if($use)
     {

     }
     else
    {
      header("location:http://localhost/AUF/c_login.php");
    }


   if(isset($_POST['done']))
  {              
   
    $oldpass=$_POST['oldpass'];
    $newpassword=$_POST['newpassword'];
    $confirmnewpassword=$_POST['confirmnewpassword'];
    
   
    $sql = "SELECT password FROM client_signup WHERE username='$use'"; 
       
    $result = mysqli_query($conn,$sql) ;

     while ($row = mysqli_fetch_array($result)) 
    {

          $pass = $row['password'] ;

           if($pass == $oldpass)
          {
              
             if($newpassword == $confirmnewpassword)
            {

              $up ="UPDATE client_signup SET password='$confirmnewpassword' WHERE username='$use'";

              $upda = mysqli_query($conn, $up) ;


               if($upda)
              {
                  echo "<script>alert('Mot de passe mis a jours avec Succes'); 
                  window.location='c_login.php'</script>"; 

                  session_destroy();

              }
              else{
                    echo "<script>alert('Vos mots de passes (Nouveau et Confirmation) ne match pas.réessayer'); 
                    window.location='c_profile_edit.php'</script>";
                 }
              
            }

              echo "<script>alert('Vos mots de passes (Nouveau et Confirmation) ne match pas'); 
                 window.location='c_profile_edit.php'</script>";

              
           }
           else {

                   echo "<script>alert('Votre Ancient mot de passe est faux');  
                   window.location='c_profile_edit.php'</script>";
              }

    }

  }


?>


  <!----------------------------- End Of The Change Password Full Part  ---------------------------->

   <!------------------------- Account Delete -------------------------->

  <a onclick="window.location.href='c_account_delete.php';" class="w3-bar-item w3-button w3-block w3-theme w3-left-align w3-hover-red" href="#" data-target="#changepassword" data-toggle="modal">

  <i class="fa fa-lock fa-fw w3-margin-right"></i> Supprimer Compte</a>
   <div id="Demo2" class="w3-hide w3-container">
    <div class="w3-row-padding">
    </div>
    </div>

      </div>      
    </div>
    <br>
    
    <br>
    
  <!-------------- End Left Column ------------->

  </div>

<?php

    ini_set( "display_errors", 0);

?>

<!---------------------------------    Middle Column Start   ----------------------------->

<div class="w3-col m7">
    
    <div class="w3-row-padding">
      <div class="w3-col m12">
        <div class="w3-card w3-round w3-white">
          <div class="w3-container w3-padding w3-grayscale">
            
            <br>
            <h3 class="w3-opacity"><i class="fa fa fa-pencil"></i> Modifier Votre Profile</h3>
            <br>
           
            <form method="post" action="c_profile_edit.php" class="w3-container w3-card-4 w3-light-grey">
            <br>

            
            <div class="text">

            </div>
        
           <div class="form-group mx-sm-3 mb-2">
          
          
      
           <input type="text" class="form-control" placeholder="Prenom" name="first_name">

           <input type="text" class="form-control" placeholder="Nom" name="last_name">

           <input type="text" class="form-control" placeholder="Numero Tel" name="phone">

           <input type="text" class="form-control" placeholder="Addresse" name="address">

           <input type="text" class="form-control" placeholder="E-mail" name="email">
           
           <hr>
           
           </div>
            
           
        <button type="submit" name="save" class="w3-button w3-green"><i class="fa fa fa-save"></i> Save</button>
         <br></br>


          </form>
        </form>


          </div>
        </div>
      </div>

    </div>

  <!--------------------------------     End of Middle Column          ------------------------------->

  </div>

  <?php
    
     $conn = mysqli_connect("localhost","root","","AUF");

     $use = $_SESSION['user_name'];
     
   if(isset($_POST['save']))
  {              
    
    $up ="UPDATE client_signup SET firstname='$_POST[first_name]',lastname='$_POST[last_name]',phone='$_POST[phone]',
    address='$_POST[address]',email='$_POST[email]' WHERE username='$use'";

    $upda = mysqli_query($conn, $up) ;


      if($upda)
     {
        echo "<script>alert('Information mis a jours avec Succes'); 
                window.location='c_profile.php'</script>";

      }

        else{
               echo "<script>alert('Erreur .réessayer'); 
                    window.location='c_profile_edit.php'</script>";
            }
              
  }


?>

    
  <!----------------------------------- End Grid ------------------------------>
  
  <!--------------------------  Right Column  ------------------->

  <div class="w3-col m2">

  <button onclick="window.location.href='c_logout.php';" class="w3-button w3-block w3-theme w3-left-align w3-hover-red"> 
  <i class="fa fa-info fa-fw w3-margin-right"></i>deconnexion</button>
  <br />

    <div class="w3-card w3-round w3-white w3-center" style="width:220px">
      <div class="w3-container">

       <hr>
        <p><strong>Date</strong></p>
       
        <body onload=display_ct();>
            <span id='ct' ></span>
         </body>

         <hr>
      </div>

    </div>

    <br>
       
    </div>

    <br>

  <!-------------------  End Right Column  -------------->

  </div>
  
  <!--------------------  End Grid  -------------->

</div>

  <!--------------- End Page Container --------------->

</div>
<br>

<div>
<hr>
</div>

    <!--------------   Footer Starts ------------------>

   <?php include 'footer.php'?>


   <!-- javascript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
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
  
  
  <script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}


</script>

  <!-- Template Custom JavaScript File -->
  
  <script src="js/custom.js"></script>
  
  </body>