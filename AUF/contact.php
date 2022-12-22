

<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>

 <title>Nous Contacter</title>
 
  
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

 
  
     
    <!-------------------  PHP Code Start and Data Inserted Into Databse contact_us Table  ------------->  

 <?php
        
     include 'config.php' ;
     include_once("connection.php");

     $conn = mysqli_connect("localhost","root","","AUF");

     $Saved = FALSE;


     if(isset($_POST['post']))
    {

       $Nname = isset($_POST['name']) ? $_POST['name'] : '';
       $Eemail = isset($_POST['email']) ? $_POST['email'] : '';
       $Ssubject = isset($_POST['subject']) ? $_POST['subject'] : '';
       $Mmessage = isset($_POST['message']) ? $_POST['message'] : '';

      
        if ( empty ($Nname) ) 
       {
         $errors[] = 'Please Enter Your Name';

       }

        if ( empty ($Eemail) )  
       {
         $errors[] = 'Please Enter Your Email';

       }

        if ( empty ($Ssubject) ) 
       {
         $errors[] = 'Please Enter Your Subject';
       }

        if ( empty ($Mmessage) ) 
       {
         $errors[] = 'Please Enter Your Message';
       }

      
     
       if ( !isset($errors) ) 
     {

        $contact_us_table = 'INSERT INTO contact_us (name,email,subject,message) VALUES (?,?,?,?)' ;
        
        $st = $conn->prepare($contact_us_table) ;

        $st->bind_param('ssss',$Nname,$Eemail,$Ssubject,$Mmessage) ;


        echo "<script>alert('Votre Requette envoye avec Suces'); 
                  window.location='index.php'</script>";

        
        $st->execute();
        $st->close();
        $conn->close();

        $Saved = TRUE;
       
     }


      else{
              echo "<script>alert('Erreur. Completez tout les cases et réessayer'); 
                      window.location='contact.php'</script>";
          }


      }



  ?>



  <!-------------------  PHP Code END and Data Inserted Into Databse contact_us Table  ------------->  



 <!-----------------------    Form     ------------------>

  <br>
  <h5 align="center">Quelconque Question ? Contactez Nous !</h5>

  <div class="card text-center">
    <div class="card-body">
     <hr>
      <div class="col-md-8 col-sm-8 marb20">
        <div class="contact-info">
          <div class="space">
             
    
              <form method="post" action="contact.php" class="contactForm" enctype="multipart/form-data">
              
              
                <input type="text" name="name" required placeholder="Votre Nom" value="<?php echo isset($Nname) ? $Nname : ''; ?>">

                <input type="email" name="email" required placeholder="Votre Email" value="<?php echo isset($Eemail) ? $Eemail : ''; ?>">
           
                <input type="text" name="subject" required placeholder="Sujet" value="<?php echo isset($Ssubject) ? $Ssubject : ''; ?>">
             
                <textarea name="message" placeholder="Message (Pas Plus De 100 lettres)"  rows="4" required value="<?php echo isset($Mmessage) ? $Mmessage : ''; ?>"></textarea>

              
                <button type="submit" id="post" name="post" class="btn btn-form">Envoyer Un Message</button>
                 <br></br>
           
            
              </form>

            </div>

          </div>
        </div>
     </div>
  </div>


  <br>
         
  <!-------------------  End of The form and Data Insertion Complete   ---------------->
        
  <?php include 'footer.php'?>
  
  </body>

 </html>


 

