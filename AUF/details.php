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

 <title>Details De Contenues</title>
 
 <style>

* {
  box-sizing: border-box;
}

/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 40px;
  height: 600px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

   

   
  </style>


</head>

<body>

  

<?php

   $menu = file_get_contents("menu.php") ;
   $base = basename($_SERVER['PHP_SELF']) ;

   $menu = preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu) ;

   include 'menu.php' ;

  ?>




    <br></br>
    <h2 class="set-title" align="center"><u> Specification De Contenues </h2></u>
    <br></br>
    



   


    
    <div class="row">


  <div class="column" style="background-color:#94b8b8;" >

  

  <?php


  include_once 'config.php';
  include 'connection.php';


   $p_id = $_GET['content_id'];

      
   $sql = "SELECT * FROM content ,content_images 
      WHERE content.b_content_id = content_images.content_id 
      AND content.b_content_id= $p_id LIMIT 1";


  if ($result = mysqli_query($conn, $sql)) 
 {

       while ($row = mysqli_fetch_assoc($result)) 
      {


        echo "  
               <center>
                 <img id='item-display' src='" . $row['filename'] . "' alt=''></img>
              </center> 
              
              <br />
              
              <h5><strong>Details Information : </strong> &nbsp; </h5>

              <h6 color='white'> " . $row['cont_details'] . "</h6>
              
              
              ";
      }
  }



       ?>
                  


  </div>

 

  <div class="column" style="background-color:#c2d6d6;">
   



  <?php


include 'connection.php';

$status = 'Going';
$status_1 = 'Complete';

$p_id = $_GET['content_id'];
//echo $p_id;

$sql = "SELECT * FROM content,content_images 
WHERE content.b_content_id=content_images.content_id 
AND content.b_content_id= $p_id LIMIT 1";

   if ($result = mysqli_query($conn, $sql)) 
  {

        while ($row = mysqli_fetch_assoc($result)) 
       {

      $_SESSION['content_name_ForBuyer'] = $row['content_name'];
      $_SESSION['content_id_ForBuyer'] = $row['b_content_id'];
     

      //  If content Condition is available or in stock then 


      $ps = $row['content_status'];

       if ($ps == $status) 
      {

        echo "

        <div class='content-title'><h2><b>content Name : " . $row['content_name'] . "</b></h2></div>
       
         <p>" . $row['category'] . "</p>
         <br>

         <h6>content ID : " . $row['b_content_id'] . "</h6>  
         <h6> Type : <b> <font color='#FF1493'> " . $row['type'] . " </font></b></h6> 

         <h6> Status : " . $row['content_status'] . "</h6> 
         <h6>Quantity : " . $row['quantity'] . "</h6>
         <h6>Post Time : " . $row['post_time'] . "</h6>

         <h6>Delivery Location : " . $row['de_place'] . "</h6>



         <hr>
         <div class='content-price'><h3>Estimated Price : <b><font color='#1E90FF'> " . $row['est_price'] . "</font></b></h3></div>


          <div class='content-stock'>
          <b><font color='#00802b'>Going On</font></div>
          </hr>


          ";



          echo " 
           <br>
          <hr>


          <div class='btn-group cart'>
          <a onclick='window.location.href='##';' href='####' data-target='#contact' data-toggle='modal'>
          <button type='button' class='btn btn-success'> CONTACT NOW (FOR BUYING)</button></a>
          </div>

          <div class='btn-group wishlist'>
          <button type='button' class='btn btn-danger'>ADD TO WISHLIST </button>
          </div>
      

          <br>
          <br>
          <br>


            </div>
          </div>
        </div>
      </div>
    </div>

                ";
        }
      
      
      
      elseif ($ps == $status_1) 
      {

        echo "
        <button class='btn btn-primary btn-danger btn-lg btn-block'>CLOSE</button>
        <br>
        <br>

       <div class='content-title'><h2><b>content Name : " . $row['content_name'] . "</b></h2></div>
        <br>

        <h6>content ID : " . $row['b_content_id'] . "</h6>  
        <h6> Type : <b> <font color='#FF1493'> " . $row['type'] . " </font></b></h6> 

        <h6> Status : " . $row['content_status'] . "</h6> 
        
        <hr>
         

        <div class='content-stock'>
        <b><font color='red'>COMPLETED</font></div>
        </hr>  

        <br>
        <hr>


        <br>
        
      
           </div>
         </div>
      </div>
    </div>
 </div>




                ";
      } 
      
      
      
      else 
      
      {


        echo " 

        <button class='btn btn-primary btn-danger btn-lg btn-block'>BLANK</button>
        <br>
        <br>
        
        <hr>
         
        <b><font color='red'>BLANK</font></div>
        </hr>  

        <br>
        <hr>


        <br>
        
      
           </div>
         </div>
      </div>
    </div>
 </div>




        ";
      }



    }
  }


    ?>





  </div>
</div>



<div id="contact" class="modal fade" role="dialog">
     <div class="modal-dialog">
 
         <div class="modal-content">
           <div class="modal-body">                   
                                     
               <div class="modal-body">


          <div class="form-group">
            <form method="post" action="details_page.php" enctype="multipart/form-data">
              
              <table>


  <?php

   $status = 'Going';
   $status_1 = 'Complete';

   $p_id = $_GET['content_id'];


   $conn = mysqli_connect("localhost","root","","AUF"); 

   $use = $_SESSION['user_name'];


  $sql = "SELECT * FROM content,content_images 
        WHERE content.b_content_id=content_images.content_id 
       AND content.b_content_id= $p_id LIMIT 1";

       $result = mysqli_query($conn,$sql) ;

       while ($row = mysqli_fetch_assoc($result)) 
    {

        $_SESSION['content_name_ForBuyer'] = $row['content_name'];
        $_SESSION['content_id_ForBuyer'] = $row['b_content_id'];


        //  If content Condition is available or in stock then 


  
                echo "<h6> Status : " . $row['content_status'] . "</h6> 
                      <h6>Quantity : " . $row['quantity'] . "</h6>
                      <h6>Owner Name : " . $row['b_name'] . "</h6> 
                                  
                      <h6>Phone Number : " . $row['b_phone'] . "</h6>";


      }


      ?>
                       
      
              <tr>
              <td>Nom :</td>
              <td><input type="text" size="15" id="name" placeholder="Entrez Votre Nom" name="client_name"             
                  value="<?php echo isset($n_name) ? $n_name : ''; ?>">                         
              </td>    
              </tr>

              <tr>
              <td>Tel :</td>
              <td><input type="text" size="15" id="phone"  placeholder="Entrez votre numero de telephone" name="client_phone"
                   value="<?php echo isset($p_phone) ? $p_phone : ''; ?>"> 
              </td> 
              </tr>

              <tr>
              <td>Commentaire :</td>
              <td><textarea size="15" id="comment" placeholder="Votre commentaire" name="client_comment"
                     value="<?php echo isset($c_comment) ? $c_comment : ''; ?>">
              </textarea>
              </td> 
              </tr>

             <hr>
    
          </table>

              <button class="btn btn-primary pull-right" type="submit" name="ok" >OUI</button>
               <div class="modal-footer">     
    
         </form>   
         <hr>

          <button class="btn btn-secondary pull-left" data-dismiss="modal">Fermer</button>
         <hr>
            

      <?php

        
         $use = $_SESSION['user_name'];
         
        
         $conn = mysqli_connect("localhost","root","","AUF");

        
        if (isset($_POST['ok'])) 
       {
           
          

          $n_name = isset($_POST['client_name']) ? $_POST['client_name'] : '';
          $p_phone = isset($_POST['client_phone']) ? $_POST['client_phone'] : '';
          $c_comment = isset($_POST['client_comment']) ? $_POST['client_comment'] : '';
           
          $id = $_GET['content_id'];

         



             if (empty($n_name)) 
           {
              $errors[] = 'Please Enter Your Name';
           }

            if (empty($p_phone)) 
           {
              $errors[] = 'Please Enter Your Phone Number';
           }

           if (empty($c_comment)) 
          {
              $errors[] = 'Please Put Your Comment';
          }
 

        
  
        if (!isset($errors)) 
     { 
      
      
    
       $sql = 'INSERT INTO content_comments(client_username,client_name,client_phone,client_comment) 
                        VALUES (?,?,?,?)';
    
       $statement = $conn->prepare($sql);

       $statement->bind_param('ssss',$use,$n_name,$p_phone,$c_comment) ;

       $statement->execute();

       $statement->close();


       $sql_1 = 'INSERT INTO content_comments(cont_id) VALUES (?) ';



        //$lastInsertId = $conn->insert_id;

       
        $st = $conn->prepare($sql_1);

        $st->bind_param('i', $id);

        $st->execute();

        $st->close();


        echo "<script>alert('Information et commentaire envoye avec succes'); 
                window.location='c_profile.php'</script>";
      
     

      
      $conn->close();

   

     
  }


  else{
           echo "<script>alert('Erreur.réessayer'); 
                  window.location='details_page.php'</script>";

                  
       }

}

?>



    
    
                    </div>     
                  </div>
               </div>
             </div>
            </div>
         </div>
      </div>   
            


      

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
<hr/>

              <?php include 'footer.php'?>          

</body>

</html>