
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
      header("location:http://localhost/AUF/f_login.php");
  } 


?>


<!DOCTYPE html>
<html lang="en">

<head>

 <title>Suppression Compte Formateur</title>
 
  <!-- Profile Block and Others -->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
 
  <style>
.center {
  
 
  align-items: center;
  height: 200px;
 
}
</style>
  

</head>

<body>

<!----------------  Start Header  ---------------->

  <?php

   $menu = file_get_contents("menu.php") ;
   $base = basename($_SERVER['PHP_SELF']) ;

   $menu = preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu) ;

   include 'menu.php' ;

  ?>

 
  
   <hr/>
   
  
       <?php  include 'f_signup_info_db.php' ?>

       <?php
           
           echo '<span style="color:green;text-align:center;">
                 <tr> <h5 style="color:green;">
                  <b> <td>'.$firstname.'</td>     
                   <td>'.$lastname.'</td> </b>                                  
                   </h5></tr></span>
                   
                   <h5 style="text-align:center;">with username</h5>                        
                   <h5 style="color:blue;text-align:center;"><td>'.$username.'</td> </h5>
                   
                  ' ;
       ?>
   
              <h5 style=text-align:center;>Sure De Supprimer Votre Compte ? 
              <a onclick="window.location.href='##';"class="btn btn-lg btn-center btn-danger " href="####" data-target="#delete_account" data-toggle="modal">
               <button type="button">Oui</button></h5></a>
             
             <br />

               


    <div id="delete_account" class="modal fade" role="dialog">
     <div class="modal-dialog">
 
         <div class="modal-content">
           <div class="modal-body">                   
                                     
               <div class="modal-body">


      <div class="form-group">
        <form method="post" action="f_account_delete.php" >

        <table>

          <tr>
          <td>Mot De Passe :</td>
              <td><input type="password" size="15" id="oldpass" name="oldpass"></td> 
          </tr>

          <hr>
    
        </table>
        <button class="btn btn-primary pull-right" type="submit" name="ok" >OUI</button>
        <div class="modal-footer">     
    
       </form>   

       <hr>

        <button class="btn btn-secondary pull-left" data-dismiss="modal">Fermer</button>
        <hr>
            

                           

  <?php
  

  $conn = mysqli_connect("localhost","root","","AUF"); 

  $use = $_SESSION['user_name'];

  
  if(isset($_POST['ok']))
  {              
   
    $oldpass=$_POST['oldpass'];
    
    
    $sql = "SELECT * FROM formateur_signup WHERE username='$use'"; 

    
       
    $result = mysqli_query($conn,$sql) ;

     while ($row = mysqli_fetch_array($result)) 
    {

          $pass = $row['password'] ;

           if($pass == $oldpass)
          {

            
              $up =  "DELETE FROM formateur_signup WHERE username='$use';". 
                      "DELETE FROM content WHERE b_content_id= $id LIMIT 1;".
                        "DELETE FROM content_images WHERE content_id= $id LIMIT 1;".
                          "DELETE FROM content_comments WHERE content_id= $id LIMIT 1;" ;
          
              $upda = mysqli_query($conn, $up) ;


               if($upda)
              {
                  echo "<script>alert('Compte supprime'); 
                  window.location='f_login.php'</script>"; 

                  session_destroy();

              }

              else{
                    echo "<script>alert('Erreur.réessayer'); 
                    window.location='f_account_delete.php'</script>";
                 }
              
            }

            else {

                   echo "<script>alert('Faux mot de passe');  
                   window.location='f_account_delete.php'</script>";
              }

    }

  }

    $conn->close();

 ?>       
    

                     </div>

                  </div> 
                </div> 
               </div> 
             </div> 
            </div>          
                     
        </div>
       <br>
    <div>
   <hr />
 </div>

        <h5  style=text-align:center;>Non , Je Refuse 
            <a onclick="window.location.href='f_profile.php'; "class = btn btn-lg btn-center btn-success">
          <button type="button">Aller A Mon Profile</button></a></h5>
           
       <div>

     <hr />
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