
 
 
 <head>

  <meta charset="utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="AUF" />
  <meta name="Himel" content="" />

  <!--------------------   CSS  --------------------->

  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  
  <link href="css/menubar.css" rel="stylesheet" />

 <!---------------------  Theme skin  ------------------>

  <link href="color/default.css" rel="stylesheet" />

  <!----------------- Fav and touch icons -------------->

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <link rel="shortcut icon" href="ico/favicon.png" />

   <!-----------------   Style for Logo  ------------------>
	 <style> 

    .logo-image
   {

    width: 80px;
    height: 35px;
    overflow: hidden;
    margin-top: -4px;
    opacity: 0.8;
    
  }
   

  .dropbtn 
  {
    background-color: white; 
    color: black;
    padding: 10px;
    font-size: 14px;
    border: none;
  }

   .dropdown 
  {
    position: relative;
    display: inline-block;
  }

  .dropdown-content 
 {
   display: none;
   position: absolute;
   background-color: #f1f1f1;
   min-width: 200px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
 }

 .dropdown-content a 
{
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: green;}



  </style>


</head>


<body>


<div id="wrapper">

<!------------------ Start Header ---------------->

  <header>

    <div class="top">
      <div class="container">
        <div class="row">

          <div class="span6">
          
          </div>
     
     <div class="span6">     

     <ul class="social-network">

     
     </ul>

      </div>

        </div>
      </div>
    </div>


    <div class="container">

      <div class="row nomargin">

        <div class="span3">

           <div class="logo-image" id="logo">
              <a href="#"><img src="img/logo/logo.png" class="img-fluid" /></a>
            </div>

        </div>

        <div class="span9">
          <div class="navbar navbar-static-top">

            <div class="navigation">

              <nav>
                <ul class="nav topnav">

                
                <li><a href="event.php">Evenement</a></li>
                 <li><a href="formation.php">Formation</a></li>


                
                 

             <?php
    
                  if(!isset($_SESSION)) 
                 { 
                    session_start(); 
                  } 

                  if(isset($_SESSION['username']))
                 {
         
   
             ?>

<!-------------------------------   After user login    ---------------------------->
                 
           <div class="dropdown"> 
             <button class="dropbtn">
               <i class="pe-7s-user"></i>

    <?php 
    
      $use = $_SESSION['username'];
     
      $conn = mysqli_connect("localhost","root","","AUF");

      $sql = "SELECT * FROM admin WHERE username='$use'";
      
     
       if($result = mysqli_query($conn,$sql))
      {

           while ($row = $result->fetch_assoc()) 
          {
                  
                $f = $row["username"];      
                    
                echo '<tr> 
                        <td>'.$f.'</td>                    
                      </tr>';

                echo"
                    </button>
                    <div class='dropdown-content'> 

                    <a href='admin_profile.php'>Admin Profile</a>
                    
                    <hr><a href='admin_logout.php' class='w3-bar-item w3-button w-3-padding-10px'>Logout</a></hr>
                    
                    </div>


                        " ;


                      
               }
       
         }


        
  ?>

     
                 
   <?php


  }

  else
 {
   

  ?>
     

    
     <li><a href="contact.php">Nous Contacter</a></li>

     
      <li>    
       
     <!------------------  Log In Pop Up  ---------------> 
        
       <a  href="##myModal" role="button" class="btn btn-large btn-primary"  data-target="#login" data-toggle="modal">Connexion</a>

         <div id="login" class="modal fade" role="dialog">
           <div class="modal-dialog">
  
             <div class="modal-content">
               <div class="modal-body">
                                               
                 <h3>Connexion</h3>
                                      
                  <div class="modal-body" "flip-card back">

                    <form action="menu.php" method="post">

                     <label for="Type">Choisir Un Type</label>

                      <select onchange="location = this.options[this.selectedIndex].value;">

                          <option value="1" selected>Choisir</option>
                          <option value="admin_login.php">Connexion Admin</option>
                         

                     </select>​


        </li>



 <?php

 }

?>


                </ul>
        
              </nav>
      
            </div>

            <!----------------------  End Navigation  --------------->

          </div>
        </div>
      </div>
    </div>

  </header>

  <!----------------  End Header  ---------------->

<!-----------   javascript ----------->

  
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.js"></script>

  <script src="js/modernizr.custom.js"></script>
  <script src="js/toucheffects.js"></script>
  <script src="js/google-code-prettify/prettify.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/camera/camera.js"></script>
  <script src="js/camera/setting.js"></script>

  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/portfolio/jquery.quicksand.js"></script>
  <script src="js/portfolio/setting.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/inview.js"></script>

  <!------------- Template Custom JavaScript File ------------>

  <script src="js/custom.js"></script>

</body>



















  