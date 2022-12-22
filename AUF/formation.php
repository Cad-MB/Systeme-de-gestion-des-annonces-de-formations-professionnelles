


<?php

session_start();

 


?>



<!DOCTYPE html>
<html lang="en">

<head>

 <title>Formations</title>
 
 
 
  <style>
  
    .center {
  
 
  align-items: center;
  height: 200px;
 
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
   
  
   <section id="content">
      <div class="container">
        <div class="row">

          <div class="span4">

            <aside class="left-sidebar">

             

             
              <div class="widget">

                <h5 class="widgetheading">Video Explicative</h5>
                <div class="video-container">
                  <iframe width="850" height="450" src="https://www.youtube.com/embed/watch?v=e7BIcrKhaJk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> </div>
              </div>

              <div class="widget">

                <h5 class="widgetheading">Details</h5>
                <p>
                Plusieurs formations qui peuvent vous aider à vous enrichir et qui correspondent à votre niveau et à votre domaine d’études dans l’enseignement supérieur.
                </p>

              </div>
            </aside>
          </div>


          <div class="span8">

            <div class="row">
              <div class="span8">
                <h4 class="title"><strong>Formations</strong></h4>

                <div class="row">


                  <!--------------------- PHP CODE -------------------->


       <?php

         // AND content.Active = 1
          include 'config.php';
          include 'connection.php';

          $conn = mysqli_connect("localhost", "root", "", "AUF");

          $sql = "SELECT * FROM content,content_images 
            WHERE content.b_content_id = content_images.content_id AND content.category='Formation'
         
            ORDER BY content.post_time ";


           if ($result = mysqli_query($conn, $sql)) 
          {
               while ($row = mysqli_fetch_assoc($result)) 
              {

                      
                   echo "<div class='span3'>
                   <div class='item'>
                    <div class='flip-card'>
                     <div class='flip-card-inner' size='width:180px,height:160px'>
                      <div class='flip-card-front' >

                           <img src=" . $row['filename'] . " style='width:250px;height:200px'>

                         </div>

                         <div class='flip-card-back'>
                   
                            

                            <p>" . $row['content_name'] . "</p>
                            <p>Type de formation : " . $row['type'] . "</p>
                            <p>Prix : " . $row['est_price'] . "</p>
                            <p>Details : " . $row['cont_details'] . "</p>
                            <p><button class='btn btn-success btn-sm'><a href='details_page.php?content_id=" . $row['b_content_id'] . "'>Details</a></button></p>

                      </div>
                    </div>
                  </div>
                </div>
              </div> ";
                    }



                  
                  

                  }





                  ?>


                  <!--------------------------    PHP  ------------------------------>




                </div>



                <hr><br>

                <div id="pagination">
                  <span class="all">Page 1 sur 2</span>
                  <span class="current">1</span>

                  <a href="formation.php" class="inactive">2</a>


                </div>
              </div>
            </div>
          </div>
    </section>





    <!--------------   Footer Starts ------------------>

   <?php include 'footer.php'?>


  </body>