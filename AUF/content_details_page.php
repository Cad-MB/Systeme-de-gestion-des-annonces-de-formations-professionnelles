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

  <meta charset="utf-8">
  <title>S'inscrire & Former</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Your page description here" />
  <meta name="Himel" content="" />

  <!-- css -->

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

  <link href="https://fonts.googleapis.com/css?family=Handlee|Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet" />
  <link href="css/bootstrap-responsive.css" rel="stylesheet" />
  <link href="css/flexslider.css" rel="stylesheet" />
  <link href="css/prettyPhoto.css" rel="stylesheet" />
  <link href="css/camera.css" rel="stylesheet" />
  <link href="css/jquery.bxslider.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />


  <!-- Theme skin -->

  <link href="color/default.css" rel="stylesheet" />

  <!-- Fav and touch icons -->

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png" />
  <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="shortcut icon" href="ico/favicon.png" />


  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



  <style>
    @import url("bootstrap/bootstrap.min.css");
    @import url("bootstrap-override.css");
    @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");



    .gold {
      color: #FFBF00;
    }



    .content {
      border: 1px solid #dddddd;
      height: 321px;
    }

    .content>img {
      max-width: 230px;
    }

    .content-rating {
      font-size: 20px;
      margin-bottom: 25px;
    }

    .content-title {
      font-size: 20px;
    }

    .content-desc {
      font-size: 14px;
    }

    .content-price {
      font-size: 22px;
    }

    .content-stock {
      color: #74DF00;
      font-size: 20px;
      margin-top: 10px;
    }

    .content-info {
      margin-top: 50px;
    }



    .content-wrapper {
      max-width: 1140px;
      background: #fff;
      margin: 0 auto;
      margin-top: 25px;
      margin-bottom: 10px;
      border: 0px;
      border-radius: 0px;
    }

    .container-fluid {
      max-width: 1140px;
      margin: 0 auto;
    }

    .view-wrapper {
      float: right;
      max-width: 70%;
      margin-top: 25px;
    }

    .container {
      padding-left: 0px;
      padding-right: 0px;
      max-width: 100%;
    }



    .service1-items {
      padding: 0px 0 0px 0;
      float: left;
      position: relative;
      overflow: hidden;
      max-width: 100%;
      height: 321px;
      width: 130px;
    }

    .service1-item {
      height: 107px;
      width: 120px;
      display: block;
      float: left;
      position: relative;
      padding-right: 20px;
      border-right: 1px solid #DDD;
      border-top: 1px solid #DDD;
      border-bottom: 1px solid #DDD;
    }

    .service1-item>img {
      max-height: 110px;
      max-width: 110px;
      opacity: 0.6;
      transition: all .2s ease-in;
      -o-transition: all .2s ease-in;
      -moz-transition: all .2s ease-in;
      -webkit-transition: all .2s ease-in;
    }

    .service1-item>img:hover {
      cursor: pointer;
      opacity: 1;
    }

    .service-image-left {
      padding-right: 50px;
    }

    .service-image-right {
      padding-left: 50px;
    }

    .service-image-left>center>img,
    .service-image-right>center>img {
      max-height: 155px;
    }

    .dropbtn {
      background-color: white;
      color: black;
      padding: 10px;
      font-size: 14px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 200px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: green;
    }
  </style>


</head>


<body>

  <div id="wrapper">

    <!--------------------------    Start Header  ----------------------->

    <header>

      <div class="top">
        <div class="container">
          <div class="row">

            <div class="span6">
              <p class="topcontact"><i class="icon-phone"></i> +880 1675695322</p>
            </div>
            <div class="span6">

              <ul class="social-network">

                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest  icon-white"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google +"><i class="icon-google-plus icon-white"></i></a></li>

              </ul>

            </div>
          </div>
        </div>
      </div>


      <div class="container">


        <div class="row nomargin">
          <div class="span3">

            <div class="logo">
              <a href="#"><img src="img/logo.jpg" alt="" />Buy & Sell</a>
            </div>

          </div>

          <div class="span9">
            <div class="navbar navbar-static-top">

              <div class="navigation">
                <nav>
                  <ul class="nav topnav">

                    <li>
                      <a href="index.php">Home</a>
                    </li>

                    <li>
                      <a href="buycontent.php">Buy content</a>
                    </li>

                    <li>
                      <a href="sellcontent.php">Sell content</a>
                    </li>

                    <li>
                      <a href="contactUs.php">Contact Us </a>
                    </li>

                    <li>
                      <a href="aboutUs.php">About Us</a>
                    </li>


                    <?php

                    //session_reset();
                    //session_start();

                    if (isset($_SESSION['user_name'])) {


                      ?>


                      <!------------------------------------      After user login     ------------------------------------>


                      <div class="dropdown">


                        <button class="dropbtn">

                          <i class="pe-7s-user"></i>
                          <?php

                            $use = $_SESSION['user_name'];
                            $conn = mysqli_connect("localhost", "root", "", "AUF");

                            $sql = "SELECT * FROM buyer_signup WHERE username='$use'";

                            $sql_1 = "SELECT * FROM seller_signup WHERE username='$use'";



                            if ($result = mysqli_query($conn, $sql)) {

                              while ($row = $result->fetch_assoc()) {
                                $firstname = $row["firstname"];

                                echo '<tr> 
                              <td>' . $firstname . '</td>                    
                          </tr>';



                                echo "
                            
                      </button>
                      <div class='dropdown-content'> 

                      <a href='buyer_profile.php'>My Profile</a>
                      <a href='buyer_own_post.php''>My content</a>
                      <a href='#''>My Bid</a>
                      <a href='buyer_wishlist.php'>My Wishlist</a>
                      <hr><a href='logout.php' class='w3-bar-item w3-button w-3-padding-10px'>Logout</a></hr>
                      
                     </div>

                          ";
                              }
                            }



                            if ($result = mysqli_query($conn, $sql_1)) {

                              while ($row = $result->fetch_assoc()) {
                                $firstname = $row["firstname"];

                                echo '<tr> 
                              <td>' . $firstname . '</td>                    
                          </tr>';


                                echo "
                            
                      </button>
                      <div class='dropdown-content'> 

                      <a href='seller_profile.php'>My Profile</a>
                      <a href='seller_own_post.php'>My content</a>
                      <a href='#''>My Bid</a>
                      <a href='seller_wishlist.php'>My Wishlist</a>
                      <hr><a href='logout_s.php' class='w3-bar-item w3-button w-3-padding-10px'>Logout</a></hr>
                      
                     </div>

                          ";
                              }
                            }



                            ?>



                        <?php


                        } else {




                          ?>


                          <li>

                            <a href="#myModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Sign Up</a>

                            <!-- Popup for Signup -->

                            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">


                              <div class="modal-header">
                                <button type="button" color="red" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h3 id="myModalLabel">Sign Up</h3>
                              </div>

                              <div class="modal-body" "flip-card back">

                                <form action="index.php" method="post">

                                  <label for="Type">Choose Your type</label>

                                  <select onchange="location = this.options[this.selectedIndex].value;">

                                    <option value="1" selected>Choose Here</option>
                                    <option value="buyer_signup.php">Buyer</option>
                                    <option value="seller_signup.php">Seller</option>

                                  </select>​



                                  <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  </div>

                                </form>
                              </div>


                            </div>

                          </li>




                          <li>

                            <!--Log In Pop Up-->

                            <a class="btn btn-large btn-primary" role="button" href="#" data-target="#login" data-toggle="modal">Se Connecter</a>

                            <div id="login" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <div class="modal-content">
                                  <div class="modal-body">

                                    <h4>Se Connecter</h4>

                                    <div class="modal-body" "flip-card back">

                                      <form action="index.php" method="post">

                                        <label for="Type">Choisir Un type</label>

                                        <select onchange="location = this.options[this.selectedIndex].value;">

                                          <option value="1" selected>Choisir</option>
                                          <option value="buyer_login.php">Client</option>
                                          <option value="seller_login.php">Formateur</option>

                                        </select>​

                                        <div class="modal-footer">

                                          <div class="form-group">

                                            <input name="recover-close" class="btn btn-lg btn-primary pull-left" value="Forgot Password" type="#">

                                            <button class="btn btn-secondary" data-dismiss="modal">Close</button>

                                          </div>

                                        </div>

                                      </form>

                                    </div>

                                  </div>

                                </div>

                              </div>
                            </div>


                          </li>







                        <?php
                        }

                        ?>





                  </ul>

                </nav>

              </div>

              <!--------------   End Navigation  ------------->

            </div>
          </div>
        </div>
      </div>
    </header>

    <!------------------------   End Header   --------------------------->




    <br></br>
    <h2 class="set-title" align="center"><u>Specification Contenu Desire </h2></u>
    <br></br>


    <div class="container-fluid">
      <div class="content-wrapper">
        <div class="item-container">
          <div class="container">
            <div class="col-md-12">
              <div class="content col-md-3 service-image-left">



                <?php


                include 'config.php';
                include 'connection.php';

                $conn = mysqli_connect("localhost", "root", "", "cse_499a");

                //echo $_GET['content_id'];

                $p_id = $_GET['content_id'];
                $type = $_GET['type'];
                //echo $type;

                if ($type == 0) {

                  //echo "Paisi";
                  $sql = "SELECT * FROM buy_content_demand,b_content_images 
               WHERE buy_content_demand.b_content_id=b_content_images.content_id 
               AND buy_content_demand.b_content_id= $p_id LIMIT 1";


                  if ($result = mysqli_query($conn, $sql)) {

                    while ($row = mysqli_fetch_assoc($result)) {


                      echo "  

            <center>
              <img id='item-display' src='" . $row['filename'] . "' alt=''></img>
            </center>

             ";
                    }
                  }
                }

                if ($type == 1) {
                  $sql = "SELECT * FROM sell_content_demand,s_content_images 
                WHERE sell_content_demand.s_content_id=s_content_images.content_id
                AND sell_content_demand.s_content_id=$p_id LIMIT 1";


                  if ($result = mysqli_query($conn, $sql)) {

                    while ($row = mysqli_fetch_assoc($result)) {


                      echo "  

    <center>
      <img id='item-display' src='" . $row['filename'] . "' alt=''></img>
    </center>

     ";
                    }
                  }
                }



                ?>


                <!--------------------------    PHP  ------------------------------>






              </div>

              <div class="container service1-items col-sm-2 col-md-2 pull-left">

              </div>

            </div>

            <div class="col-md-7">




              <?php



              include 'connection.php';

              $status = 'Going';
              $status_1 = 'Complete';

              $conn = mysqli_connect("localhost", "root", "", "cse_499a");

              $p_id = $_GET['content_id'];
              $type = $_GET['type'];

              if ($type == 0) {

                //echo "Paisi";
                $sql = "SELECT * FROM buy_content_demand,b_content_images 
             WHERE buy_content_demand.b_content_id=b_content_images.content_id 
             AND buy_content_demand.b_content_id= $p_id LIMIT 1";

                if ($result = mysqli_query($conn, $sql)) {

                  //echo $_SESSION['buyer_user_id'];


                  while ($row = mysqli_fetch_assoc($result)) {

                    $_SESSION['content_name_ForBuyer'] = $row['content_name'];
                    $_SESSION['content_id_ForBuyer'] = $row['b_content_id'];
                    $_SESSION['user_id_Forcontent'] = $row['buyer_user_id'];

                    //  If content Condition is available or in stock then 


                    $ps = $row['content_status'];

                    if ($ps == $status) {

                      echo "

                      <div class='content-title'><h2><b>content Name : " . $row['content_name'] . "</b></h2></div>
                     
                       <p>" . $row['category'] . "</p>
                       <br>

                       <h6>content ID : " . $row['b_content_id'] . "</h6>  
                       <h6> Type : <b> <font color='#FF1493'> " . $row['type'] . " </font></b></h6> 

                       <h6> Status : " . $row['content_status'] . "</h6> 
                       <h6>Quantity : " . $row['quantity'] . "</h6>


                       <hr>
                       <div class='content-price'><h3>Estimated Price : <b><font color='#1E90FF'> " . $row['estimated_price'] . "</font></b></h3></div>


                        <div class='content-stock'>
                        <b><font color='#00FF00'>Going On</font></div>
                        </hr>


                        ";


                      $typ = $row['type'];

                      if ($typ == 'Bid') {

                        echo "    

                        <br>
                        <hr>

                        
                        <form method='post'>

                        
                        <a onclick='window.location.href='#';'' href='#' data-target='#changepassword' data-toggle='modal'><button type='button'
                        class='btn btn-success'>BID</button></a>

        
             <div id='changepassword' class='modal fade' role='dialog'>
              <div class='modal-dialog'>
    
                <div class='modal-content'>
                 <div class='modal-body'>                   
                                        
                   <div class='modal-body'>


                 <!---------------------------   Input Form ( Price Update for Bid )  ------------------>

                 <form method='post' >

                 <table>


                 <tr>
                   <td>Bidding Price :</td>
                 <td><input type='text' name='bidding_price' class='form-control'></td>
               </tr>

        <hr>
    
        </table>

        <input type='submit' class='btn btn-success' name='bid_now_buyer' value='BID'/>

        <div class='modal-footer'>     
    
     </form>   

       <hr>

        <button class='btn btn-secondary pull-left' data-dismiss='modal'>Close</button>
        <hr>
            

          <div class='form-group'>
                            
                                      

                                     </div>                                                              
                                 </div>
              
                             </form>
                        
                        </div>                           
                      </div>           
                  </div>
              </div>  
          </div>

                        
                        <form method='post'>
                        <div class='btn-group wishlist'>
                        <input type='submit' class='btn btn-danger' name='wishlist_buyer' value='BID ADD TO WISHLIST'/>
                        </div>
                        </form>
                    

                        <br>
                        <br>
                        <br>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                           ?>
                        
                        </div>                           
                      </div>           
                  </div>
              </div>  
          </div>
            
            
        </li>

                              ";
                      }
                      
                      else {
                      
                      ?>
                      
                      <?php
                      
                        echo " 
                         <br>
                        <hr>

                        <div class='btn-group cart'>
                        <button type='button' class='btn btn-success'> BUY NOW </button>
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
                    } elseif ($ps == $status_1) {

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
                    } else {


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
                  ?>

                  <?php

                       include 'connection.php';
       
                       $conn = mysqli_connect("localhost", "root", "", "cse_499a");
       
                       //echo $_GET['content_id'];
       
                       $p_id = $_GET['content_id'];
                       //echo $p_id;
                       $type = $_GET['type'];
                       $user_id = $_SESSION['user_id'];
                       echo $user_id;
                       $content_name = $_SESSION['content_name_ForBuyer'];
                       //echo $content_name;
                       $content_id = $_SESSION['content_id_ForBuyer'];
                       //echo $content_id;
                       $user_id_Forcontent = $_SESSION['user_id_Forcontent'];
                       //echo $user_id_Forcontent;
                       

                      

                      


                      if (isset($_POST['bid_now_buyer'])) {
                        // echo $_SESSION['content_name_ForBuyer'];
                        // echo $_SESSION['user_id'];
                        
                        $bidding_price = $_POST['bidding_price'];
                        echo $bidding_price,$user_id,$user_id_Forcontent,$content_id;

                        // $bidlist_add_buyer = "INSERT INTO buyer_bidlist(bid_user_id,content_user_id,content_id,bid_price)
                        //                         VALUES('$user_id','$user_id_Forcontent','$content_id','$bidding_price')";

                          $sql = "INSERT INTO `buyer_bidlist` (`bid_user_id`, `content_user_id`, `content_id`, `bid_price`,`status`) 
                                                VALUES ($user_id,$user_id_Forcontent,$content_id,$bidding_price, '1')";
                          
                          if (mysqli_query($conn, $sql)) {

                            echo "<script>

                            window.location='sellcontent.php'</script>";

                         }

                        
                        
                         else{
                           echo "painai";
                         }



                       } 
                      
                      elseif (isset($_POST['wishlist_buyer'])) {

                                  echo "wishlist paise";
                                 if (mysqli_query($conn, $wishlist_add)) {
                                    echo "<script>

                                     window.location='sellcontent.php'</script>";

                                }

                  }


                      ?>


              <?php

                }
              }

              if ($type == 1) {

                $sql = "SELECT * FROM sell_content_demand,s_content_images 
      WHERE sell_content_demand.s_content_id=s_content_images.content_id
      AND sell_content_demand.s_content_id=$p_id LIMIT 1";


                if ($result = mysqli_query($conn, $sql)) {

                  while ($row = mysqli_fetch_assoc($result)) {


                    //  If content Condition is available or in stock then 


                    $ps = $row['content_status'];

                    if ($ps == $status) {

                      echo "

                      <div class='content-title'><h2><b>content Name : " . $row['content_name'] . "</b></h2></div>
                     
                       <p>" . $row['category'] . "</p>
                       <br>

                       <h6>content ID : " . $row['s_content_id'] . "</h6>  
                       <h6> Type : <b> <font color='#FF1493'> " . $row['type'] . " </font></b></h6> 

                       <h6> Status : " . $row['content_status'] . "</h6> 
                       <h6>Quantity : " . $row['quantity'] . "</h6>


                       <hr>
                       <div class='content-price'><h3>Estimated Price : <b><font color='#1E90FF'> " . $row['estimated_price'] . "</font></b></h3></div>


                        <div class='content-stock'>
                        <b><font color='#00FF00'>Going On</font></div>
                        </hr>


                        ";


                      $typ = $row['type'];

                      if ($typ == 'Bid') {

                        echo "    

                        <br>
                        <hr>

                        <form method='post'>
                        <div class='btn-group cart'>
                        <input type='submit' class='btn btn-success' name='bid_now_seller' value='BID NOW'/>
                        </div>

                        <div class='btn-group wishlist'>
                        <input type='submit' class='btn btn-danger' name='wishlist_seller' value='BID ADD TO WISHLIST'/>
                        </div>
                        </form>

                        <br>
                        <br>
                        <br>


                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                              ";
                      } else {


                        echo " 
                         <br>
                        <hr>

                        <div class='btn-group cart'>
                        <button type='button' class='btn btn-success'> BUY NOW </button>
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
                    } elseif ($ps == $status_1) {

                      echo "
                      <button class='btn btn-primary btn-danger btn-lg btn-block'>CLOSE</button>
                      <br>
                      <br>

                     <div class='content-title'><h2><b>content Name : " . $row['content_name'] . "</b></h2></div>
                      <br>

                      <h6>content ID : " . $row['s_content_id'] . "</h6>  
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
                    } else {


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
              }


              ?>

              <?php



              if (isset($_POST['bid_now_seller'])) {
                  
                echo $_SESSION['user_id'];
              
              } elseif (isset($_POST['wishlist_seller'])) {               
                  
                //echo "Paisi wish";
             
              }
              
              ?>





              <!--------------------------    PHP  ------------------------------>



            </div>
          </div>
          <div class="container-fluid">
            <div class="col-md-12 content-info">
              <ul id="myTab" class="nav nav-tabs nav_tabs">



                <?php



                include 'connection.php';

                $conn = mysqli_connect("localhost", "root", "", "cse_499a");

                $p_id = $_GET['content_id'];
                $type = $_GET['type'];


                if ($type == 0) {

                  $sql = "SELECT * FROM buy_content_demand,b_content_images 
            WHERE buy_content_demand.b_content_id=b_content_images.content_id 
            AND buy_content_demand.b_content_id= $p_id LIMIT 1";


                  if ($result = mysqli_query($conn, $sql)) {

                    while ($row = mysqli_fetch_assoc($result)) {

                      echo "  
              <li class='active'><a href='#service-one' data-toggle='tab'>DESCRIPTION</a></li>
            <li><a href='#service-two' data-toggle='tab'>REVIEWS & COMMENTS</a></li>
            
            </ul>
            <div id='myTabContent' class='tab-content'>
            <div class='tab-pane fade in active' id='service-one'>
             
              <section class='container content-info'> <div class='content-desc'><h4><b>Details : </b></h4><br><br>" . $row['content_details'] . "</div>
                
                <h3>  </h3>
                <li>   </li>
                <li>    </li>

              </section>
                      
            </div>

            <div class='tab-pane fade' id='service-two'>
            
            <section class='container'>
                
            </section>
            
           </div>

           <div class='tab-pane fade' id='service-three'>
                        
          </div>
          
        </div>
        <hr>
      </div>
    </div>
  </div>
</div> ";
                    }
                  }
                }


                if ($type == 1) {

                  $sql = "SELECT * FROM sell_content_demand,s_content_images 
                WHERE sell_content_demand.s_content_id=s_content_images.content_id
                AND sell_content_demand.s_content_id=$p_id LIMIT 1";


                  if ($result = mysqli_query($conn, $sql)) {

                    while ($row = mysqli_fetch_assoc($result)) {

                      echo "  
                 <li class='active'><a href='#service-one' data-toggle='tab'>DESCRIPTION</a></li>
               <li><a href='#service-two' data-toggle='tab'>REVIEWS & COMMENTS</a></li>
               
               </ul>
               <div id='myTabContent' class='tab-content'>
               <div class='tab-pane fade in active' id='service-one'>
                
                 <section class='container content-info'> <div class='content-desc'><h4><b>Details : </b></h4><br><br>" . $row['content_details'] . "</div>
                   
                   <h3>  </h3>
                   <li>   </li>
                   <li>    </li>
   
                 </section>
                         
               </div>
   
               <div class='tab-pane fade' id='service-two'>
               
               <section class='container'>
                   
               </section>
               
              </div>
   
              <?php 
                
                  
                  the_author_meta('description'); 
              
              
              ?>

              <div class='tab-pane fade' id='service-three'>
                           
             </div>
             
           </div>
           <hr>
         </div>
       </div>
     </div>
   </div> ";
                    }
                  }
                }


                ?>


                <!--------------------------    PHP  ------------------------------>








     <!--------------   Footer Starts ------------------>

     <?php include 'footer.php'?>



            <!-- javascript
    ================================================== -->
            <!-- Placed at the end of the document so the pages load faster -->



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

            <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

            <!-- Template Custom JavaScript File -->
            <script src="js/custom.js"></script>


            <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.1/js/bootstrap.min.js"></script>
            <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


            <script>
// Accordion
function myFunction(id) {
  var x = document.getElementById(id);
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
    x.previousElementSibling.className += " w3-theme-d1";
  } else { 
    x.className = x.className.replace("w3-show", "");
    x.previousElementSibling.className = 
    x.previousElementSibling.className.replace(" w3-theme-d1", "");
  }
}


</script>

  <!-- Template Custom JavaScript File -->

  <script src="js/custom.js"></script>
  



</body>

</html>