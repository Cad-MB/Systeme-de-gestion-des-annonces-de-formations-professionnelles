
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
      header("location:http://localhost/AUF/admin_login.php");
  } 


?>


<!DOCTYPE html>
<html lang="en">

<head>

 <title>Chat</title>
 
  
  <style>
.center {
  
 
  align-items: center;
  height: 200px;
 
}

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
  background: linear-gradient(to bottom, #ff6666 48%, #ff5050 100%);
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

   <h2 align="center"> Messages</h2>

   <form method="post" action="chat_from_admin.php" align="center">
        
      <input type="text" name="in_id" placeholder=" ID chat" ><br />
        <textarea name="rep" placeholder="Ecrire votre message" style="height:50px"></textarea> <br />
        <button type="submit" id="submit" name="done" class="w3-button w3-theme"><i class="fa fa-pencil"></i> Post</button> 

  </form>

   
   <?php 

include 'connection.php';

  $use = $_SESSION['user_name'];

  

 $conn = mysqli_connect("localhost","root","","AUF");



  if(isset($_POST['done'])) 
 {
    $rep = $_POST['rep']; 
    $i_id = $_POST['in_id'];

  
     $sql = "UPDATE chat SET admin_reply='$rep' , admin_sent_time= now() WHERE id='$i_id' LIMIT 1 "; 
     
     $r = $conn->query($sql);

     $conn->close();

     echo "<script>alert('Message envoye avec Suces'); 
      window.location='chat_from_admin.php'</script>";


 }
 
 
 
?>
  
  
   <table id="my_post">
    
    <tr>
      
      <th>Chat ID</th>
      <th>Role</th>
      <th>Username</th>
      <th>Subjet</th>

      <th>Message recu<hr style="height:2px;border-width:0;color:black;background-color:#ddd">Temp Reception
      </th>

      <th>Ma Reponse<hr style="height:2px;border-width:0;color:black;background-color:#ddd">Temps envoi
      </th>
     
    </tr> 


    <?php

       ini_set( "display_errors", 0);


       include 'connection.php';

       $use = $_SESSION['user_name'];

    
       $conn = mysqli_connect("localhost","root","","AUF");
    

        $query = "SELECT * FROM chat ORDER BY id DESC ";
   
        $r = $conn->query($query);
  
        while($row = $r->fetch_array()) :

         if(isset($_SESSION['user_name']))
        {
            echo "
                  <tr>
                   <td style='color: green'><b>".$row['id']."</b></td>
                   
                   <td style='color: black'><b>".$row['role']."</b></td>
                   <td style='color: black'><b>".$row['name']."</b></td>
                   <td style='color: black'><b>".$row['subject']."</b></td>

                   <td><b style='color: blue'>".$row['msg']."</b> <hr style='height:2px;border-width:0;color:black;background-color:black'> 
                          ".$row['date']." 
                   </td>
 
                   <td><h6 style='color: red'>".$row['admin_reply']."</h6> <hr style='height:2px;border-width:0;color:black;background-color:black'>
                         <strong>".$row['admin_sent_time']."</strong>   
                   </td>
 
                 </tr> " ;
        
         }
 
         else "ERROR OCCURED" ;
 
  ?>

    
	
<?php endwhile; ?>

</table>


  <br />
<br />
<hr/>


   



  
      


     

   
             
    <!--------------   Footer Starts ------------------>

      <?php include 'footer.php'?>


   
  </body>