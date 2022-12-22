
<?php

ob_start(); 

include_once("connection.php");

session_start();
  
if(!empty($_SESSION))
{
  
  header("Location: index.php");
}
else
{
}

?>



<!DOCTYPE html>
<html lang="en">

<head>

 <title>RECHERCHE</title>
 
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
   
  
    
       <body>
           

           <form action="search_all_page.php" method="post" align ="center">
            <h5 align="center">CHERCHER ISI</h5>
             <input name="search" type="search" autofocus placeholder ="Entrer votre lieu"><br/><input type="submit" name="button" color="green">

           </form>






<?php

  $conn = mysqli_connect("localhost","root","","AUF"); 

  if(isset($_POST['button']))
 {    //trigger button click

  $search=$_POST['search'];
   
  $query = "SELECT * FROM content WHERE * LIKE '%{$search}%'";
  //$row = mysqli_num_rows($query );

  $result = mysqli_query($conn,$query) ;

    
   if (mysqli_num_rows($result) > 0) 
  {

    echo "  <hr/>
    <br />
     
   <table align ='center' border='2px' style='width:98%' ; line-height:50px;'>
   <tr>
      <th colspan='100%'><h4 class='title' align='center'><strong>Search Result</strong></h4>
   </tr>
   
     <tr>

       <th>content ID</th>
       <th>content Name</th>
      
       <th>Category</th>
       <th>Price</th>
       <th>Quantity</th>
      

     </tr> 
";

         while ($row = mysqli_fetch_array($result)) 
      {
         echo "
         
     
         
        <tr>
        <td align='center'>".$row['b_content_id']."</td>
        <td align='center'>".$row['content_name']."</td>

       
      
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