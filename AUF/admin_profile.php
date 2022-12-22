
 <?php
  
  session_start();

  $use = $_SESSION['user_name'];

   if($use == true)
  {
      
  }

   else
  {
      header("location:http://localhost/AUF/admin_login.php");
  } 


?>



<!DOCTYPE html>
<html lang="en">

<head>

 <title>ADMIN</title>
 
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
       <h4 class="w3-center bold text-shadow: 2px 2px #FF0000" style="color:red" ;>PROFILE ADMIN</h4> 
       <hr></hr>
      
     

       <?php 
    
    $conn = mysqli_connect("localhost","root","","AUF"); 

      $sql = "SELECT * FROM admin WHERE username='$use'"; 

        if($result = mysqli_query($conn,$sql))
     {

                while ($row = $result->fetch_assoc()) 
              {     
                    $admin_id =$row["admin_id"]; 
                   
                    $username = $row["username"];  
                    $phone = $row["phone"]; 
                    $email = $row["email"];   
                  
                  


              }
     
      
        }
   
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

       
        <div id="Demo1" class="w3-hide w3-container">


       <hr>

       <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>Addresse : 
       
      
       
       
       </p>

      
       <p><i class="fa fa fa-registered fa-fw w3-margin-right w3-large w3-text-teal"></i>Date D'inscription: 

     

   
    </p>

        </div>
    
  
   

        <div id="Demo2" class="w3-hide w3-container">
        <div class="w3-row-padding">
  
       
         
       </div>
        </div>


          <!--------------------- Password Change Part with Popup Start using PHP  ---------------------------->



  
      </div>      
    </div>
    <br>
    
  
    <br>
    
   
  
  <!-------------- End Left Column ------------->


  </div>



<?php

    ini_set( "display_errors", 0);

?>


<!------------------------  Middle Column  -------------------------->


          
<div class="w3-col m7">
  
    <div class="w3-row-padding">
      <div class="w3-col m12">
      
      <div class="w3-card w3-round w3-white">
      <div class="w3-container w3-padding w3-cyan w3-opacity-min">
          <h3 style="color:white" ;><b>Poster Du Contenu</b></h3>

          <br>
          <h6 style="color:white" ;><b>Information Contenu :</b></h6>
         
          <form method="post" action="admin_profile.php" class="w3-container w3-card-4 w3-light-grey" enctype="multipart/form-data">
          <br>
          
            <input type="text" name="b_name"  placeholder="nom" value="<?php echo isset($buyerName) ? $buyerName : ''; ?>">

            <input type="text" name="b_email"  placeholder="Email" value="<?php echo isset($buyerEmail) ? $buyerEmail : ''; ?>">

            <input type="text" name="b_phone"  placeholder="numero de telephone"  value="<?php echo isset($buyerPhone) ? $buyerPhone : ''; ?>">
          

           <p><label>Categorie</label></p>

             <select class="form-control" name="category" value="<?php echo isset($cont_cat) ? $cont_cat: ''; ?>">
                <option value="Event" selected>Evenement</option>
                <option value="Formation">Formation</option>

                
            </select>

         
         <br></br>
          
         <p><label>Type </label></p>

              <select class="form-control" name="type" value="<?php echo isset($Type) ? $Type: ''; ?>">
                <option value="présentiel" selected>présentiel</option>
                <option value="distanciel">distanciel</option>
              </select>
        
        

         <br></br>

          <input type="text" name="content_name"  placeholder="Nom Contenu" value="<?php echo isset($proName) ? $proName: ''; ?>">

          <input type="text" name="est_price"  placeholder="Prix" value="<?php echo isset($Price) ? $Price: ''; ?>">

          <input type="text" name="quantity"   placeholder="Places" value="<?php echo isset($Quantity) ? $Quantity: ''; ?>">

         <br></br>

        <label for="file">Images</label>
        <input type="file" id="file" name="file[]" multiple>

        <br></br>

        <textarea class="w3-input w3-border" name="cont_details" type="text" placeholder="Details Contenu" value="<?php echo isset($pDetails) ? $pDetails: ''; ?>"></textarea>

        <hr>

        <input type="text" name="de_place"  placeholder="Lieu" value="<?php echo isset($place) ? $place: ''; ?>">

        <br></br>

        <button type="submit" id="submit" name="done" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Post</button> 
        <br></br>

         </form>
     </form>

        </div>
      </div>
      
      <div class="w3-card w3-round w3-white">
          <div class="w3-container w3-padding w3-cyan w3-opacity-min">
            <h3 style="color:white" ;><b>Paneau Admin</b></h3>

            <button onclick="window.location.href='admin_my_post.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Table Contenu</button>

            <br /> 
             <br />

               <h5 style="color:white" ;><b>Info Client :</b></h5>

             <button onclick="window.location.href='admin_view_client_profile.php';" class="w3-button  w3-medium w3-theme w3-left-align w3-hover-red" style="width:30%" > 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Profile Client </button> 

               <button onclick="window.location.href='admin_view_client_candidat.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Table Candidats Client</button>



              
               <br /> 
             <br />

               <h5 style="color:white" ;><b>Info Formateur :</b></h5>

             <button onclick="window.location.href='admin_view_formateur_profile.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Profile Formateur</button>

               <button onclick="window.location.href='admin_view_formateur_candidat.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Table Candidats Formateur</button>


     
            <br></br>


            <h5 style="color:white" ;><b>Nous Contacter :</b></h5>

             <button onclick="window.location.href='chat_contact_us_admin.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Visiteurs</button>
             
               <button onclick="window.location.href='subscriber_admin.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Abonnés</button>

               <button onclick="window.location.href='chat_from_admin.php';" class="w3-button w3-theme w3-left-align w3-hover-red" style="width:30%"> 
               <i class="fa fa-info fa-fw w3-margin-right"></i>Chat</button>

           </form>
       </form>



          </div>
        </div>
      </div>


    </div>



  <!------------------------  End Middle Column  ----------------->

  </div>


  <!--------------------------  Right Column  ------------------->


 
  

  <div class="w3-col m2">

  
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
      $errors[] = 'Please Enter Your Name';
  }

   if (empty($buyerEmail)) 
  {
      $errors[] = 'Please Enter Your Email';
  }

   if (empty($buyerPhone)) 
  {
      $errors[] = 'Please Enter Your Phone Number';
  }
 

  if (empty($cont_cat)) 
  {
      $errors[] = 'Please Choose a Category';
  }
 
 if (empty($Type)) 
  {
      $errors[] = 'Please Choose Your Type';
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
      
      $sql = 'INSERT INTO content (b_username,b_name,b_email,b_phone,category,type,content_name,est_price,quantity,cont_details,de_place,content_status) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)';
    
      $statement = $conn->prepare($sql);

      $statement->bind_param('ssssssssdssss',$use,$buyerName,$buyerEmail,$buyerPhone,$cont_cat,$Type,$proName,$Price,$Quantity,$Details,$place,'En cours');

      echo "<script>alert('Information sauvegarde avec Succes'); 
                window.location='admin_my_post.php'</script>";
      
      $statement->execute();

      $lastInsertId = $conn->insert_id;

      $statement->close();


      $sql_1 = 'INSERT INTO content_comments (content_id,client_username) VALUES (?, ?)';

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

      $conn->close();

      $contentaved = TRUE;

     
  }


  else{
  echo "<script type='text/javascript'> alert(".json_encode($errors).") </script>";
                  
       }

}

?>




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