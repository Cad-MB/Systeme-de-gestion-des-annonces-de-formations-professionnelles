

<?php
   
      include 'config.php';
      include 'connection.php';

      $conn = mysqli_connect("localhost","root","","AUF");
          
      $id = $_GET['content_id'];

      $sql = "DELETE FROM content WHERE b_content_id= $id LIMIT 1;".
              "DELETE FROM content_images WHERE content_id= $id LIMIT 1;".
               "DELETE FROM content_comments WHERE content_id= $id LIMIT 1;" ;


      if (mysqli_multi_query($conn, $sql))
     {   
         echo "Sucess" ;
         mysqli_close($conn);
         header('Location: admin_my_post.php'); 
         exit;
    } 
     
     else 
   {
      echo "Error";
   }


?>