
  
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

 <title>MES DETAILS DE POSTES</title>
  
  <style>

 /* ----- Variables ----- */
$color-primary: #4c4c4c;
$color-secondary: #a6a6a6;
$color-highlight: #ff3f40;

/* ----- Global ----- */
* {
	box-sizing: border-box;
}



h3 {
	font-size: 0.7em;
	letter-spacing: 1.2px;
	color: $color-secondary;
}

img {
	   max-width: 60%;
	   filter: drop-shadow(1px 1px 3px $color-secondary);
	}

/* ----- content Section ----- */
.content {
	display: grid;
	grid-template-columns: 0.9fr 1fr;
	margin: auto;
	padding: 2.5em 0;
	min-width: 400px;
	background-color: white;
	border-radius: 10px;
}

/* ----- Photo Section ----- */
.content__photo {
	position: relative;
   
   
}

.photo-container {
	position: absolute;
	left: 4.5em;
	display: grid;
	grid-template-rows: 1fr;
	width: 80%;
	height: 25%;
	border-radius: 10px;
	box-shadow: 5px 5px 25px -2px rgba(0, 0, 0, 0.3);
}


	img {
		position: left;
		left: 5.5em;
		top: 2em;
		max-width: 50%;
		filter: saturate(150%) contrast(120%) hue-rotate(10deg)
			drop-shadow(1px 20px 10px rgba(0, 0, 0, 0.3));
	}
}

.photo-album {
	padding: 0.7em 1em;
	border-radius: 0 0 6px 6px;
	background-color: #fff;

	ul {
		display: flex;
		justify-content: space-around;
	}

	li {
		float: left;
		width: 55px;
		height: 55px;
		padding: 7px;
		border: 1px solid $color-secondary;
		border-radius: 3px;
	}
}

/* ----- Informations Section ----- */
.content__info {
	padding: 0.8em 0;
}

.title {
	h1 {
		margin-bottom: 0.1em;
		color: $color-primary;
		font-size: 1.5em;
		font-weight: 900;
	}

	span {
		font-size: 0.7em;
		color: $color-secondary;
	}
}

.price {
	margin: 1.5em 0;
	color: $color-highlight;
	font-size: 1.2em;

	span {
		padding-left: 0.15em;
		font-size: 2.9em;
	}
}

.variant {
	overflow: auto;

	h3 {
		margin-bottom: 1.1em;
	}

	li {
		float: left;
		width: 35px;
		height: 35px;
		padding: 3px;
		border: 1px solid transparent;
		border-radius: 3px;
		cursor: pointer;

		&:first-child,
		&:hover {
			border: 1px solid $color-secondary;
		}
	}

	li:not(:first-child) {
		margin-left: 0.1em;
	}
}

.description {
	clear: left;
	margin: 2em 0;

	h3 {
		margin-bottom: 1em;
	}

	ul {
		font-size: 0.8em;
		list-style: disc;
		margin-left: 1em;
	}

	li {
		text-indent: -0.6em;
		margin-bottom: 0.5em;
	}
}

.buy--btn {
	padding: 1.5em 3.1em;
	border: none;
	border-radius: 7px;
	font-size: 0.8em;
	font-weight: 700;
	letter-spacing: 1.3px;
	color: #fff;
	background-color: $color-highlight;
	box-shadow: 2px 2px 25px -7px $color-primary;
	cursor: pointer;

	&:active {
		transform: scale(0.97);
	}
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

  <div>


 <br />
  <br />
    <br />

   <section class="content">
	 <div class="content__photo">
		<div class="photo-container">
			<div class="photo-main">
				<div class="controls">
					
				</div>
				
       
        <?php


         include 'config.php';
         include 'connection.php';
 
        // $p_id = $_GET['content_id'];
         $p_id = isset($_POST['content_id']) ? $_POST['content_id'] : '';
         $p_id = isset($_GET['content_id']) ? $_GET['content_id'] : '';
         if(isset($p_id)){echo $p_id;}
        
       
         $sql = " SELECT * FROM content LEFT JOIN content_images 
                  ON content_images.content_id = content.b_content_id LEFT JOIN 
                   content_comments ON content_comments.content_id = content.b_content_id  LIMIT 1 ";
      
        

           if ($result = mysqli_query($conn, $sql)) 
         {

           while ($row = mysqli_fetch_assoc($result)) 
          {


             echo "  
                  <center>
                    <img id='item-display' src='" . $row['filename'] . "' alt=''></img>
                 </center> 
              
                </div>
                   <div class='photo-album'>
                  <ul>
                      
                    </ul>
                  </div>
                 </div>
               </div>
               
               <div class='content__info'>
               <div class='title'>

               <h1> " . $row['content_name'] . " </h1>
               <h5><span>Category : " . $row['category'] . "</span></h5>
         
               <h5><span> Type : <b> <font color='blue'> " . $row['type'] . " </font></b></span><br/> </h5>
               
               <h5>Quantity : " . $row['quantity'] . "</h5>
               <h5> Status : " . $row['content_status'] . "</h5> 

              <h5> Lieu : ".$row['de_place']."</h5><br/>
               <h5> Posté le :  ".$row['post_time']."</h5>
  
         
               </div>

               <div class='price'>
                  Prix : <b><font color='red'>" . $row['est_price'] . "</font></b><br/>
               </div>
               

           


             
               <div class='description'>
                  <h5>Details Contenu :</h5>
                  <ul>
                    <li>".$row['cont_details']."</li>
                 </ul>
               </div>

              <br>
              <hr>


              <h5>Commentaires Reçues :</h5> Comment Time : ".$row['comment_time']." <br /> Username : ".$row['formateur_username']." <br/>Name : <strong>".$row['formateur_name']."</strong> 
              <br/> Phone : ".$row['formateur_phone']." <br/> Comment : ".$row['formateur_comment']." 
              <hr style='height:1px;border-width:0;color:black;background-color:black'>


              

            <br />
            <hr />
            </div>
            </section>
           
              ";



           }
        
         }


			


?>

<?php error_reporting (E_ALL ^ E_NOTICE); ?>


<div id="update" class="modal fade" role="dialog">
     <div class="modal-dialog">
 
         <div class="modal-content">
           <div class="modal-body">                   
                                     
               <div class="modal-body">


             <div class="form-group">
             <form method="post" action="admin_my_post_details.php" enctype="multipart/form-data">
              
              <table>



              <?php

   
$p_id = $_GET['content_id'];


$conn = mysqli_connect("localhost","root","","AUF"); 

$use = $_SESSION['user_name'];


 $sql = "SELECT * FROM content,content_images
     WHERE content.b_content_id=content_images.content_id 
    AND content.b_content_id= $p_id LIMIT 1";

    $result = mysqli_query($conn,$sql) ;

     while ($row = mysqli_fetch_assoc($result)) 
   {

             echo "ID : $p_id <h6> Status : " . $row['content_status'] . "</h6> ";


   }


   ?>
                    
      
       <tr>
          <td><input type="text" placeholder="ID contenu" name="produ">                         
         </td>    
       </tr>

       <tr>
          <td><input type="text" placeholder="Entrez votre Statut" name="content_st">                         
         </td>    
       </tr>
          
         <hr>
 
       </table>

           <button class="btn btn-primary pull-right" type="submit" name="complete" >OUI</button>
            <div class="modal-footer">     
 
      </form>   
      <hr>

       <button class="btn btn-secondary pull-left" data-dismiss="modal">Fermer</button>
      <hr>
         

      <?php


         include 'connection.php';

        $conn = mysqli_connect("localhost","root","","AUF");
    
       //  $id = $_GET['content_id'];
       $p_id = isset($_POST['content_id']) ? $_POST['content_id'] : '';
       $p_id = isset($_GET['content_id']) ? $_GET['content_id'] : '';

      // $s= intval($p_id) ;

  if (isset($_POST['complete'])) 
 {
   
   $content_st = $_POST['content_st'];
   $prod = $_POST['produ'];

   //$p_id  = $_GET['content_id'] ;
  
    $sql = "UPDATE content SET content_status = '$content_st' WHERE b_content_id='$prod' ";

   if (mysqli_query($conn, $sql))
 {   
   echo "<script>alert('Statut mis a jours avec succes'); 
   window.location='c_profile.php'</script>";
    mysqli_close($conn);
  
   exit;
} 

else 
{
echo "<script>alert('Erreur. maj de statut'); 
window.location='admin_my_post_details.php'</script>";

}
}

?>

  
<?php


include 'connection.php';

$conn = mysqli_connect("localhost","root","","AUF");

//  $id = $_GET['content_id'];
$p_id = isset($_POST['content_id']) ? $_POST['content_id'] : '';
$p_id = isset($_GET['content_id']) ? $_GET['content_id'] : '';

// $s= intval($p_id) ;

if (isset($_POST['reply_done'])) 
{

$rep_post = $_POST['reply_post'];
$p = $_POST['pro'];


//$p_id  = $_GET['content_id'] ;


$sql = "UPDATE content_comments SET client_reply = '$rep_post' WHERE content_id='$p' LIMIT 1";

if (mysqli_query($conn, $sql))
{   
echo "<script>alert('Reponse avec succes'); 
window.location='c_profile.php'</script>";
mysqli_close($conn);

exit;
} 

else 
{
echo "<script>alert('Erreur. reponse'); 
window.location='admin_my_post_details.php'</script>";

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


<?php include 'footer.php'?>    
