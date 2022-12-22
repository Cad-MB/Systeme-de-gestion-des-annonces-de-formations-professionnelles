<?php 
    
    
     $conn = mysqli_connect("localhost","root","","AUF"); 

       $sql = "SELECT * FROM client_signup WHERE username='$use'"; 

         if($result = mysqli_query($conn,$sql))
      {

                 while ($row = $result->fetch_assoc()) 
               {     
                     $signup_id =$row["signup_id"]; 
                     $firstname = $row["firstname"];      
                     $lastname = $row["lastname"];
                     $username = $row["username"];  
                     $phone = $row["phone"]; 
                     $email = $row["email"];   
                     $reg_time = $row["reg_time"]; 
                     $address = $row["address"]; 

                     $pass_re_code= $row["pass_re_code"]; 


               }
      
       
         }
    
?>