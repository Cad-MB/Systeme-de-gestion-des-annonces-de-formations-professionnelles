<?php

        
         $conn = mysqli_connect("localhost","root","","AUF");

      
         if (isset($_POST['ok'])) 
        {
           
          $Type = isset($_POST['client_name']) ? $_POST['client_name'] : '';
         
          
         if (!isset($errors)) 
        { 

    
             $sql = 'INSERT INTO content_comments(client_name) VALUES (?)';
    
             $statement = $conn->prepare($sql);

             $statement->bind_param('s',$Type) ;

             echo "<script>alert('Information et commentaire envoye avec succes'); 
                     window.location='c_profile.php'</script>";
      
                  $statement->execute();

                $statement->close();

                $conn->close();

     
          }


  else{
           echo "<script>alert('Erreur .réessayer'); 
                  window.location='details_page.php'</script>";

                 
       }

}

?>


            <form method="post" action="">
              <input type="text" name="name">
              <button type="submit" name="ok" >YES</button>
            </form>   
         
        

    