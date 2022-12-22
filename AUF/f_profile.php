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

 <title>Profile Formateur</title>
 
  <!-- Profile Block and Others -->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">

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
       <h4 class="w3-center bold text-shadow: 2px 2px #FF0000" style="color:black" ;>MON PROFILE : FORMATEUR</h4> 
       <hr></hr>
      
       <p><i class="fa fa-user-circle fa-fw w3-margin-right w3-large w3-text-teal"></i>


       <?php  include 'f_signup_info_db.php' ?>

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

 <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i> 
  <?php
    
    echo '<tr> 
            <td>'.$email.'</td>                                     
         </tr>';
 ?>  
</p>

<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>
<?php
    
    echo '<tr> 
            <td>'.$phone.'</td>                                      
         </tr>';
?>  
</p>


      </div>
    </div>
    <br>
    
    <!------------------ Flip for More Info ---------------->

    <div class="w3-card w3-round">

      <div class="w3-white">

        <button onclick="myFunction('Demo1')" class="w3-button w3-block w3-theme w3-left-align w3-hover-white">
        <i class="fa fa-info-circle fa-fw w3-margin-right"></i> Plus D'infos</button>
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
    
      <button onclick="window.location.href='f_profile_edit.php';" class="w3-button w3-block w3-theme w3-left-align w3-hover-white">
       <i class="fa fa-edit fa-fw w3-margin-right"></i>Modifier Le Profile</button>
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


<?php

include 'config.php' ;

$use = $_SESSION['user_name'];


$conn = mysqli_connect("localhost","root","","AUF");

$contentaved = FALSE;

if (isset($_POST['done'])) 
{
  
  $buyerName = isset($_POST['b_name']) ? $_POST['b_name'] : '';

  $buyerEmail = isset($_POST['b_email']) ? $_POST['b_email'] : '';
  
  $buyerPhone = isset($_POST['b_phone']) ? $_POST['b_phone'] : '';
 

  $cont_cat = isset($_POST['category']) ? $_POST['category'] : '';

  $Type = isset($_POST['type']) ? $_POST['type'] : '';

  $proName = isset($_POST['content_name']) ? $_POST['content_name'] : '';

  $Price = isset($_POST['est_price']) ? $_POST['est_price'] : '';

  $Quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';

  $Details = isset($_POST['cont_details']) ? $_POST['cont_details'] : '';

  $place = isset($_POST['de_place']) ? $_POST['de_place'] : '';



   if (empty($buyerName)) 
  {
      $errors[] = 'Entrez Votre Nom';
  }

   if (empty($buyerEmail)) 
  {
      $errors[] = 'Entrez Votre Email';
  }

   if (empty($buyerPhone)) 
  {
      $errors[] = 'Entrez Votre Number De Telephone';
  }
 

  if (empty($cont_cat)) 
  {
      $errors[] = 'Choisissez Une Categorie';
  }
 
 if (empty($Type)) 
  {
      $errors[] = 'Choisissez Un Type';
  }



    if (!is_dir(UPLOAD_DIR)) 
  {
      mkdir(UPLOAD_DIR, 0777, true);
  }

  
  $filenamesToSave = [];

  $allowedMimeTypes = explode(',', UPLOAD_ALLOWED_MIME_TYPES);

  
  if (!empty($_FILES)) {
      if (isset($_FILES['file']['error'])) {
          foreach ($_FILES['file']['error'] as $uploadedFileKey => $uploadedFileError) {
              if ($uploadedFileError === UPLOAD_ERR_NO_FILE) {
                  $errors[] = 'You did not provide any files.';
              } elseif ($uploadedFileError === UPLOAD_ERR_OK) {
                  $uploadedFileName = basename($_FILES['file']['name'][$uploadedFileKey]);

                  if ($_FILES['file']['size'][$uploadedFileKey] <= UPLOAD_MAX_FILE_SIZE) {
                      $uploadedFileType = $_FILES['file']['type'][$uploadedFileKey];
                      $uploadedFileTempName = $_FILES['file']['tmp_name'][$uploadedFileKey];

                      $uploadedFilePath = rtrim(UPLOAD_DIR, '/') . '/' . $uploadedFileName;

                      if (in_array($uploadedFileType, $allowedMimeTypes)) {
                          if (!move_uploaded_file($uploadedFileTempName, $uploadedFilePath)) {
                              $errors[] = 'The file "' . $uploadedFileName . '" could not be uploaded.';
                          } else {
                              $filenamesToSave[] = $uploadedFilePath;
                          }
                      } else {
                          $errors[] = 'The extension of the file "' . $uploadedFileName . '" is not valid. Allowed extensions: JPG, JPEG, PNG, or GIF.';
                      }
                  } else {
                      $errors[] = 'The size of the file "' . $uploadedFileName . '" must be of max. ' . (UPLOAD_MAX_FILE_SIZE / 1024) . ' KB';
                  }
              }
          }
      }
  }

  
   if (!isset($errors)) 
  {
      
      $sql = 'INSERT INTO content (b_username,b_name,b_email,b_phone,category,type,content_name,est_price,quantity,cont_details,de_place) VALUES ($buyerName,$buyerEmail,$buyerPhone,$cont_cat,$Type,$proName,$Price,$Quantity,$Details,$place)';
    
      $statement = $conn->prepare($sql);

      $statement->bind_param('sssssssdsss',$use,$buyerName,$buyerEmail,$buyerPhone,$cont_cat,$Type,$proName,$Price,$Quantity,$Details,$place);
      

      $statement->execute();

      $lastInsertId = $conn->insert_id;

      $statement->close();


      $sql_1 = 'INSERT INTO content_comments (content_id,formateur_username) VALUES (?, ?)';

      $st = $conn->prepare($sql_1);

      $st->bind_param('is', $lastInsertId, $use);

      $st->execute();

      $st->close();


       foreach ($filenamesToSave as $filename) 
      {
          $sql = 'INSERT INTO content_images (content_id,filename,img_user) VALUES (?, ?,?)';

          $statement = $conn->prepare($sql);

          $statement->bind_param('iss', $lastInsertId, $filename,$use);

          $statement->execute();

          $statement->close();


         


      }
        
      echo "<script>alert('Information Sauvegarde avec Succes'); 
      window.location='f_my_post.php'</script>";

      $conn->close();

      $contentaved = TRUE;

     
  }


  else{
           echo "<script>alert('Erreur .réessayer'); 
                  window.location='f_profile.php'</script>";
       }

}

?>



  </div>

  <!--------------------------  Right Column  ------------------->

  <div class="w3-col m2">

  <button onclick="window.location.href='c_search.php';" class="w3-button w3-block w3-theme-l1 w3-left-align w3-hover-green"> 
    <i class="fa fa-search fa-fw w3-margin-right"></i>Chercher Contenues</button>
       
    <button onclick="window.location.href='f_my_comment.php';" class="w3-button w3-block w3-theme w3-left-align w3-hover-green"> 
    <i class="fa fa-comment fa-fw w3-margin-right"></i>MES COMMENTAIRES</button>
   
    <button onclick="window.location.href='f_chat_to_admin.php';" class="w3-button w3-block w3-theme w3-left-align w3-hover-green"> 
    <i class="far fa-comment-alt-dots fa-fw w3-margin-right"></i>&nbsp &nbsp Chatter Avec L'admin </button>
    <br><br>
  
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




      


    <br />


        

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