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

 <title>Chercher</title>
 
  
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
   
  
       <?php  include 'c_signup_info_db.php' ?>

       <body>
           

           <form action="c_search.php" method="post" align ="center">
            <h5 align="center">Entrez Lieu Ou Type</h5>
             <input name="search" type="search" autofocus placeholder ="Lieu / Type"><br/><input type="submit" name="button" color="green">

           </form>






<?php

$conn = mysqli_connect("localhost","root","","AUF"); 



  if(isset($_POST['button']))
{    //trigger button click

  $search=$_POST['search'];


  $query = "SELECT * FROM content where (de_place like '%{$search}%' ) OR ( type like '%{$search}%') ";
  //$row = mysqli_num_rows($query );

  $result = mysqli_query($conn,$query) ;

    
    if (mysqli_num_rows($result) > 0) 
  {

    echo "  <hr/>
    <br />
     
   <table align ='center' border='2px' style='width:98%' ; line-height:50px;'>
   <tr>
      <th colspan='100%'><h4 class='title' align='center'><strong>Results</strong></h4>
   </tr>
   
     <tr>

       <th>ID Contenu</th>
       <th>Nom Contenu</th>
      
       <th>Categorie</th>
       <th>Prix</th>
       <th>Places</th>
       <th>Type</th>
       <th>Lieu</th>
       <th>Statut </th>
       <th>Timing Poste</th>
       <th>Details</th>
       <th>Info Formateur</th>
      

     </tr> 
";

         while ($row = mysqli_fetch_array($result)) 
      {
         echo "
         
     
         
        <tr>
        <td align='center'>".$row['b_content_id']."</td>
        <td align='center'>".$row['content_name']."</td>

       
        <td align='center'>".$row['category']."</td>
        <td align='center'>".$row['est_price']."</td>
        <td align='center'> ".$row['quantity']."</td>
        <td align='center'> ".$row['type']."</td>
        <td align='center'> ".$row['de_place']."</td>
        
        <td align='center'>                                
        <strong> ".$row['content_status']."</strong>                  
        </td>

        <td align='center'> ".$row['post_time']."</td>
        <td align='center'> ".$row['cont_details']."</td> 
        <td >Name : ".$row['b_username']." </br> Email : ".$row['b_email']." </br> Phone : ".$row['b_phone']." </td>

    </tr>

   ";
         
      }
 echo " </table>";
 } 
 else
 {
    echo "<h5 align='center'><br><br> No Record Found<br><br></hr>";
  }

}



   mysqli_close ($conn);

?>




             
             <br />

               


           
    </div>      
            </div> 
            </div> 
            </div> 
            </div> 
            </div>          
                     
 

</div>
<br>

<div>
<hr>
</div>



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