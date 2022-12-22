
<?php

ob_start(); 

include_once("connection.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>

 <title>Connexion Admin</title>

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

	 <section id="buyerlogin">
	
     <div class="c1 container">
        <div class="row">
          <div class="col-md-8">

            <form method="post">
              <div class="im1">
				      			  
                <br><br><br>
					          
               
					      <h3> <b>ADMIN CONNEXION</b></h3> 
					  
					        <div class="form-group">
                     <input type="text" required class="form-control" placeholder="Identifiant" name="u">
                  </div>
					 				 
                  <div class="form-group">
                     <input type="password" required class="form-control" placeholder="Mot de passe" name="p">
                  </div>
				   
				          <br>
				   
                  <button type="submit" name="submit" class="btn btn-primary">Soumettre</button>
                      
                  </div>
				  
		
              </form>
			         <br><br><br>

          </div>
		
       </div>
     </div>
  
  </section>



  <?php
        
   
        
       if(isset($_POST['submit']))
		 {

        $user = $_POST['u'];
        $pass = $_POST['p'];
           
        $login_table = "SELECT username,password FROM admin WHERE username='$user' AND password='$pass'";
            
        $res = mysqli_query( $conn,$login_table ) ;
        $count=mysqli_num_rows( $res ) ;
            
          if($count == 1)
         {
                
            $_SESSION['user_name']=$user;

            echo "<script>alert('Connexion Avec Succes. Welcome');
                   </script>";
               
            header("Location: http://localhost/AUF/admin_profile.php"); 

         }
            
          else{

                echo "<script>alert('Votre Identifiant ou Mot de passe est faux. réessayer');
                      </script>";
               
              }
            
      }

        
	   ob_end_flush() ;


   ?>
		
		
  
  
	  <!--------------   Footer Starts ------------------>

   <?php include 'footer.php'?>

   </body>


 </html>

 