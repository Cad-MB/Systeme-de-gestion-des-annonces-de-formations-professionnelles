


<!DOCTYPE html>
<html lang="en">

<head>

 <title>Home AUF</title>
 

</head>

<body>

  <!----------------  Start Header  ---------------->

  <?php

     $menu = file_get_contents("menu.php") ;
     $base = basename($_SERVER['PHP_SELF']) ;

     $menu = preg_replace("|<li><a href=\"".$base."\">(.*)</a></li>|U", "<li id=\"current\">$1</li>", $menu) ;


  ?>
  
  <?php

     include 'menu.php' ;
     
 ?>
  
  <!----------------  End Header  ---------------->

    <!--------------  Section Featured --------------->

     <section id="featured">

      <!----------- slideshow start here ------------>

      
       <!-- slide 1 here -->

        <div data-src="img/slides/camera/slide1/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">
                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>INFORMATION GÉNÉRALE <span class="colored"> CNFP</span> 
                  </strong></h2>
                  <p class="animated fadeInUp"> Le campus numérique francophone partenaire d’Oran (CNFPO), est un lieu d’accueil des chercheurs et des étudiants. Il met à leur disposition un ensemble de moyens et d’outils d’aide à la formation et à la recherche.</p>

										</a>
                  
                </div>
                <div class="span6">
                  <img src="img/slides/camera/slide1/buynsell.png" alt="image loading failed" class="animated bounceInDown delay1" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- slide 2 here -->

        <div data-src="img/slides/camera/slide2/img1.jpg">
          <div class="camera_caption fadeFromLeft">
            <div class="container">
              <div class="row">

                <div class="span6">
                  <img src="img/slides/camera/slide2/subscribe.jpg" alt="" />
                </div>

                <div class="span6">
                  <h2 class="animated fadeInDown"><strong>S'abonner a la<span class="colored"> NEWSLETTER</span></strong></h2>
                  <p class="animated fadeInUp"> L'occasion de rester a jours a propos de nos formations et evenements.</p>


              <form method="post" action="index.php">
              <div class="input-append">
               <input type="email" name="email" class="span3 input-large" value=""<?php echo isset($Eemail) ? $Eemail : ''; ?>" placeholder="Entrez Votre E-Mail">
               <button type="submit" id="post" name="post" class="btn btn-theme btn-large" >S'abonner</button>
              </div>
             </form>

             


             <?php
    

    $conn = mysqli_connect("localhost","root","","AUF"); 


    if(isset($_POST['post']))
    {

        $Eemail = isset($_POST['email']) ? $_POST['email'] : '';
       

        if ( empty ($Eemail) ) 
       {
         $errors[] = 'Please Enter Your Email';

       }

       
       if ( !isset($errors) ) 
     {

        $sql = 'INSERT INTO subscribe (subscribe_email) VALUES (?) LIMIT 1' ;
        
        $st = $conn->prepare($sql) ;

        $st->bind_param('s',$Eemail) ;


        echo "<script>alert('abonné avec Succes'); 
                  window.location='contact.php'</script>";

        
        $st->execute();
        $st->close();
        $conn->close();

     }


       else
      {
           echo "<script>alert('Erreur .réessayer'); 
                  window.location='index.php'</script>";
      }


    }



  ?>




                </div>

              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- slideshow end here -->

      <br/>
      <br/>
      <br/>


    </section>
    <!-- /section featured -->

    <section id="content">
      <div class="container">

        <div class="row">
          <div class="span12">
            <div class="row">

              <div class="span6">
                <div class="box flyLeft">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-star active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>NOTRE <strong> MISSON </strong></h4>
                    <p>
                    La mise en œuvre et le suivi des programmes de l'AUF susceptibles d'intéresser la communauté scientifique et éducative en Algérie.
                    </p>
                    
                  </div>
                </div>
              </div>

              <div class="span6">
                <div class="box flyIn">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-money active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>NOS <strong> FORMATIONS </strong></h4>
                    <p>
                    Vous pouvez avoir votre formation désirée ici à très bon rapport qualité-prix.
                    </p>
                    
                  </div>
                </div>
              </div>

              <div class="span6">
                <div class="box flyIn">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-time active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4>NOS <strong>EVÉNEMENTS</strong> </h4>
                    <p>
                    Des événements à la hauteur de leurs organisateurs. 
                      </p>
                    
                  </div>
                </div>
              </div>


              <div class="span6">
                <div class="box flyRight">
                  <div class="icon">
                    <i class="ico icon-circled icon-bgdark icon-user active icon-3x"></i>
                  </div>
                  <div class="text">
                    <h4> NOTRE <strong> AMBITION </strong></h4>
                    <p>
                    Mériter la confiance de notre clientèle.
                    </p>
                    
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

        <hr />

    
        <div class="row">
          <div class="span12">
            <div class="solidline"></div>
          </div>
        </div>
    </section>

    <section id="contentRequests">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">

              <div class="grid cs-style-6">

                <div class="span4">
                  <div class="item">


                   
    



           </div>
        </div>


                

        <div class="span4">
                  <div class="item">

        <?php






?>



   </div>
</div>


                
             </div>
            </div>
          </div>
        </div>
      </div>
    </section>

 <!--------------   Footer Starts ------------------>

  <?php include 'footer.php'?>

  
   </body>

 </html>


