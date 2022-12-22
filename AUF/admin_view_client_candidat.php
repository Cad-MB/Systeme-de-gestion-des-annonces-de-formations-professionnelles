
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

 <title>HISTORIQUE DE POSTES</title>
 
  
  <style>

   #client_profile
  {
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif ;
   border-collapse: collapse ;
   width: 96%;

   margin-left:auto ;
   margin-right:auto;

 }

 #client_profile  td, #client_profile  th 
 {
   border: 2px solid #ddd ;
   padding: 10px;
   font-size : 16px;
   text-align: center;
}

#client_profile  tr:nth-child(even){background-color: #f2f2f2;}

#client_profile  tr:hover {background-color: #ddd;}

#client_profile  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  font-size : 18px;
  background: linear-gradient(to bottom, #ff0066 0%, #ff33cc 100%);
  color: white;
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
     <h2 align="center"> Decision</h2>

   <form method="post" action="admin_view_client_candidat.php" align="center">
        
      <input type="text" name="in_id" placeholder=" ID Inscription" ><br />
        <select name="rep" ><br />
        <option value="En cours" selected>En cours</option>
        <option value="Acceptation" >Acceptation</option>
                <option value="Refus">Refus</option></select>
                <br>
                
        <button type="submit" id="submit" name="done" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Post</button> 

  </form>



      <hr/>
       <br />
        
      <table id="client_profile">
    
        <tr>

          <th>ID D'INSCRIPTION</th>
          <th>Prenom <hr style="height:2px;border-width:0;color:black;background-color:#ddd">Nom
          </th>

          <th>Identifiant</th>
          <th>Telephone <hr style="height:2px;border-width:0;color:black;background-color:#ddd">E-mail
          </th>
          <th>Date D'inscription<hr style="height:2px;border-width:0;color:black;background-color:#ddd">Addresse
          </th>

          <th>ID contenue</th>
          <th>Etat</th>
         
          
        </tr> 


    <?php

      ini_set( "display_errors", 0);

      include 'connection.php';

      $use = $_SESSION['user_name'];

      $conn = mysqli_connect("localhost","root","","AUF");
          
      $sql = "SELECT * FROM client_signup "; 
    
      

      if ($result = mysqli_query($conn, $sql)) 
      {
           while ($row = mysqli_fetch_assoc($result)) 
          {
             if(isset($_SESSION['user_name']))
            {

                echo "
                 <tr>
                  <td>".$row['signup_id']."</td>
                  
                  <td> ".$row['firstname']." <hr style='height:2px;border-width:0;color:black;background-color:black'> 
                         ".$row['lastname']." 
                  </td>

                  <td>".$row['username']."</td>

                  <td> ".$row['phone']." <hr style='height:2px;border-width:0;color:black;background-color:black'> 
                  ".$row['email']." 
                  </td>

                  <td> ".$row['reg_time']." <hr style='height:2px;border-width:0;color:black;background-color:black'> 
                  ".$row['address']." 
                  </td>
                  

                  <td>".$row['id_content']."</td>
                  <td>".$row['state']."</td>



             
                   
                  <form method='post' action='admin_view_client_candidat.php'>
                      
                  <button type='submit' name='submit' ></button>
                          
                  </form>

                  
                 
                </tr> " ;
       
        }
      }
    }

        else "ERROR OCCURED" ;

    
     
  ?>

    </table>



    <?php
   
  
      include 'connection.php';

      $conn = mysqli_connect("localhost","root","","AUF");
      
    
       
      if (isset($_POST['Acceptation'])) 
     {
      
      $s_id = $_POST ['in_id'] ;
      
      
       $sql = "UPDATE client_signup SET state = 'Acceptation' WHERE signup_id= '$s_id'";

      if (mysqli_query($conn, $sql))
    {   
      echo "<script>alert('etat mis a jours avec succes'); 
      window.location='admin_view_client_candidat.php'</script>";
       mysqli_close($conn);
     
      exit;
 } 
  
  else 
{
  echo "<script>alert('Erreur maj code'); 
  window.location='admin_view_client_candidat.php'</script>";

}
   }




   else if (isset($_POST['Refus'])) 
   {
    
    $s_id = $_POST ['in_id'] ;
       
    
     $sql = "UPDATE client_signup SET state = 'Refus' WHERE signup_id='$s_id' ";

    if (mysqli_query($conn, $sql))
  {   
    echo "<script>alert('etat mis a jours avec succes'); 
    window.location='admin_view_client_candidat.php'</script>";
     mysqli_close($conn);
   
    exit;
} 

else 
{
echo "<script>alert('Erreur maj code'); 
window.location='admin_view_client_candidat.php'</script>";

}
 }
 else if (isset($_POST['En cours'])) 
   {
    
    $s_id = $_POST ['in_id'] ;
       
    
     $sql = "UPDATE client_signup SET state = 'En cours' WHERE signup_id='$s_id' ";

    if (mysqli_query($conn, $sql))
  {   
    echo "<script>alert('etat mis a jours avec succes'); 
    window.location='admin_view_client_candidat.php'</script>";
     mysqli_close($conn);
   
    exit;
} 

else 
{
echo "<script>alert('Erreur maj code'); 
window.location='admin_view_client_candidat.php'</script>";

}
 }

?>


        <br />
      <br />
    <hr/>


   <?php include 'footer.php'?>      


 </body>






 
      
  