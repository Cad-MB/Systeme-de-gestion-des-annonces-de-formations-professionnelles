
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

 <title>Contenu Posté</title>
 
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
  background: linear-gradient(to bottom, #009933 1%, #00cc66 65%);
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

          <th>ID Contenu</th>
          <th>Nom Contenu</th>
          <th>Image </th>
          <th>Categorie Contenu</th>
          <th>Prix</th>
          <th>Places</th>

          <th>Type <hr style="height:2px;border-width:0;color:black;background-color:#ddd">Lieu
          </th>

          <th>Temp Poste<hr style="height:2px;border-width:0;color:black;background-color:#ddd">Statut
          </th>
        
          <th>Details</th>
          <th>Supprimer</th>

        </tr> 

     <?php

      ini_set( "display_errors", 0);

      include 'config.php';
      include 'connection.php';

      $use = $_SESSION['user_name'];

      $conn = mysqli_connect("localhost","root","","AUF");
          
      
       $sql = "SELECT * FROM content LEFT JOIN content_images
                ON content_images.content_id = content.b_content_id LEFT JOIN 
                 content_comments ON content_comments.content_id = content.b_content_id 
                  LIMIT 5";
      
    
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
                  <td>".$row['b_content_id']."</td>
                  <td>".$row['content_name']."</td> 
                  <td> <img src=".$row['filename']." alt='Paris' style='width:130px;height:100px'></td>

                  <td>".$row['category']." </td>
                  <td>".$row['est_price']."</td>
                  <td> ".$row['quantity']."</td></td>

                  <td> ".$row['type']." <hr style='height:2px;border-width:0;color:black;background-color:black'> 
                         ".$row['de_place']." 
                  </td>

                  <td> ".$row['post_time']." <hr style='height:2px;border-width:0;color:black;background-color:black'>
                        <strong>".$row['content_status']."</strong>   
                  </td>

                  <td> <button class='btn btn-success btn-sm'><a href='admin_my_post_details.php?content_id=" .$row['b_content_id'] . "'>Consulter</a></button>
                  </td>

                 
                  <td><button class='btn btn-danger btn-sm'><a href='admin_delete_my_post.php?content_id=" .$row['b_content_id'] . "'>Supprimer</a></button>
                  </td>
           
                </tr> " ;
       
        }

        else "ERROR OCCURED" ;

     }
    
    }

      else 
    {  
        echo "&emsp;&emsp;<b>Table vide.</b><hr/>";
     }

     
  ?>

    </table>


        <br />
      <br />
    <hr/>



  <?php include 'footer.php'?>      

   
 </body>