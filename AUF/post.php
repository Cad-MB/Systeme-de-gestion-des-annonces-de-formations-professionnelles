
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

 <title>MON HISTORIQUE DE POSTES</title>
 
  <!-- Profile Block and Others -->

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  

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
        
      <table align ="center" border="2px" style="width:98%" ; line-height:50px;">
      <tr>
         <th colspan="100%"><h4 class="title" align="center"><strong>MON HISTORIQUE DE POSTES : Formateur</strong></h4>
      </tr>
      
        <tr>

          <th>ID Contenu</th>
          <th>Nom Contenu</th>
          <th>Image </th>

          <th colspan="1">Categorie Contenu<hr style="height:1px;border-width:0;color:black;background-color:black">Prix
            <hr style="height:1px;border-width:0;color:black;background-color:black"> Places
          </th>


          <th>Type <hr style="height:1px;border-width:0;color:black;background-color:black">Lieu
          </th>

          <th>Temps de Poste<hr style="height:1px;border-width:0;color:black;background-color:black">Statut
          </th>
        
          <th>Details</th>
          <th>Mes Contactes</th> 
          <th>Commentaires Recus<hr style="height:1px;border-width:0;color:black;background-color:black">Votre Reponse
          </th>
          
          <th>Supprimer</th>

        </tr> 

     <?php

      ini_set( "display_errors", 0);

      include 'config.php';
      include 'connection.php';

      $use = $_SESSION['user_name'];

      $conn = mysqli_connect("localhost","root","","AUF");
          
       
      /* $sql = "SELECT * FROM user_demand_post ud INNER JOIN b_content_images img_t ON 
      ud.b_content_id=img_t.content_id WHERE ud.b_username=img_t.img_user LIMIT 5";
      */
      $sql = "SELECT * FROM content LEFT JOIN content_images  
      ON content_images.content_id = content.b_content_id LEFT JOIN 
      content_comments ON content_comments.content_id = content.b_content_id WHERE 
      content.b_username='$use' LIMIT 5";
      
    //  $comment_table = "SELECT * FROM  WHERE formateur_username='$use' LIMIT 5";
      // $sql = "SELECT * FROM content WHERE b_username='$use' LIMIT 5";
        
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
           <td rowspan='3' align ='center'>".$row['b_content_id']."</td>
          

          <tr>
           <td rowspan='3' align ='center'>".$row['content_name']."</td>
          </tr>
          
        
           <td rowspan='3' align ='center'> <img src=".$row['filename']." alt='Paris' style='width:130px;height:100px'></td>

           <td rowspan='3' align ='center'>".$row['category']." <hr style='height:1px;border-width:0;color:black;background-color:black'> ".$row['est_price']."
           <hr style='height:1px;border-width:0;color:black;background-color:black'> ".$row['quantity']."</td>
           
           <td rowspan='3' align ='center'> ".$row['type']." <hr style='height:1px;border-width:0;color:black;background-color:black'> ".$row['de_place']." </td>

           
           <td rowspan='3' align ='center'> 
           ".$row['post_time']." <hr style='height:1px;border-width:0;color:black;background-color:black'>
           
           <form method='post' action='f_my_post.php'>
           <input type='text' id='st' name='st'><br/>                              
           <button class='btn btn-success btn-sm' type='submit' name='yes' id='yes'>
           <a href='f_my_post.php?content_id=".$row['b_content_id'] ."'>
           <strong> UPDATE</strong></button></a><br/>".$row['content_status']."   
           </td>

           </form>
  
           <td rowspan='3' align ='center'> ".$row['cont_details']."</td> 
           <td rowspan='3' align ='center'>Name : ".$row['b_username']." </br> Email : ".$row['b_email']." </br> Phone : ".$row['b_phone']." </td>
           
           <td rowspan='3' align ='center'> ".$row['client_username']." | <strong>".$row['client_name']."</strong> | ".$row['client_phone']." <br>
            ".$row['client_comment']." <hr style='height:1px;border-width:0;color:black;background-color:black'>
            


           <form method='post' action='f_my_post.php'>
           <input type='text' id='reply_post' name='reply_post'><br/>                              
           <button class='btn btn-success btn-sm' type='submit' name='ok' id='ok'>
          
           
           <a href='f_my_post.php?content_id=" .$row['b_content_id'] . "'>REPLY</a></button></td>
           </form>

            
            </td>
           <td rowspan='3' align ='center'><button class='btn btn-danger btn-sm'><a href='f_delete_my_post.php?content_id=" .$row['b_content_id'] . "'>Delete</a></button></td>
           
           

       </tr>

</div>
</div> " ;


      }
      else "ERROR";
    }
    
    }

    else 
    {  
        echo "&emsp;&emsp;<b>No Record Exist</b><hr/>";
     }

     
  ?>

    </table>

    

    <?php
   
   
   include 'config.php';
   include 'connection.php';

   $conn = mysqli_connect("localhost","root","","AUF");


   $id = $_GET['content_id'];
   $p = $_POST['st'];


   if(isset($_POST['yes']))
   {              
 
      $sql =" UPDATE content SET content_status='$p' WHERE b_content_id='14' LIMIT 1 " ;

     if (mysqli_query($conn, $sql))
           {
               mysqli_close($conn);
               echo "<script>alert('Statut mis a jours avec Succes'); 
               window.location='f_profile.php'</script>";
               exit;

           }
           else{
                 echo "<script>alert('Erreur .réessayer'); 
                 window.location='f_my_post.php'</script>";
              }
           
              $conn->close();

    }



?>




<?php
   
   
   include 'config.php';
   include 'connection.php';

   $conn = mysqli_connect("localhost","root","","AUF");


   $id = $_GET['content_id'];
   $rep = $_POST['reply_post'];


   if(isset($_POST['ok']))
   {              
   
  
      $sql =" UPDATE content_comments SET formateur_reply ='$rep' WHERE content_id=$id LIMIT 1 " ;

            if (mysqli_query($conn, $sql))
           {
               mysqli_close($conn);
               echo "<script>alert('Reponse avec Succes'); 
                    </script>";

                    header('Location: f_profile.php'); 
                    exit;
            

           }

              else 
            {
               echo "Error Occured ! Try Again";
             }
           
              $conn->close();

    }


    
   
?>



      
             <div>
           </div>
          <br />
          <br />
          <br />
       <hr/>


  <?php include 'footer.php'?>      

   
  
    
 </body>




 
      
  