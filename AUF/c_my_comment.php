
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

 <title>MES COMMENTAIREs</title>
 
  
  <style>

   #my_post 
  {
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif ;
   border-collapse: collapse ;
   width: 96%;

   margin-left:auto ;
   margin-right:auto;

 }

 #my_post  td, #my_post  th 
 {
   border: 2px solid #ddd ;
   padding: 10px;
   font-size : 16px;
   text-align: center;
}

#my_post  tr:nth-child(even){background-color: #f2f2f2;}

#my_post  tr:hover {background-color: #ddd;}

#my_post  th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  font-size : 18px;
  background: linear-gradient(to bottom, #009933 0%, #00cc66 42%);
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

      <hr/>
       <br />
        
      <table id="my_post">
    
        <tr>

          <th>ID Contenu Commente</th>
          <th>Mon Nom <hr style="height:2px;border-width:0;color:black;background-color:#ddd">My Username
          </th>
          <th>Mon Tel</th>
          <th>Mon Commentaire</th>
          <th>Temp Commentaire</th>
    
          <th>ID Client</th>
          <th>Reponse Client</th>

        </tr> 


     <?php

      ini_set( "display_errors", 0);

      include 'config.php';
      include 'connection.php';

      $use = $_SESSION['user_name'];

      $conn = mysqli_connect("localhost","root","","AUF");
          
      $sql = "SELECT * FROM content_comments WHERE content_comments.client_username='$use' ";
      
        
      $data = mysqli_query($conn,$sql) ;
      $total = mysqli_num_rows($data) ;


        if($total>0)
      {

        while ($row=mysqli_fetch_assoc($data))
      {

           if(isset($_SESSION['user_name']))
         {
           echo "
                 <tr>
                  <td>".$row['content_id']."</td>
                  
                
                  <td> ".$row['client_name']." <hr style='height:2px;border-width:0;color:black;background-color:black'> 
                         ".$row['client_username']." 
                  </td>

                  <td>".$row['client_phone']."</td>
                  <td>".$row['client_comment']."</td>
                  <td>".$row['comment_time']."</td>

                  <td>".$row['formateur_username']."</td>
                  <td>".$row['formateur_reply']."</td>

                </tr> " ;
       
        }

        else "ERROR OCCURED" ;

     }
    
    }

      else 
    {  
        echo "&emsp;&emsp;<b>Empty Table.No Record Exist</b><hr/>";
     }

     
  ?>

    </table>


        <br />
      <br />
    <hr/>


   <?php include 'footer.php'?>      


 </body>






 
      
  