

<?php

session_start();


?>



<!DOCTYPE html>
<html lang="en">

<head>

 <title>Qui Sommes Nous ?</title>
 
  <style>
.center {
  
 
  align-items: center;
  height: 200px;
 
}


*{
	margin: 0;
	padding: 0;
	font-family: sans-serif;
}

.team-section{
	overflow: hidden;
	text-align: center;
	background: white;
	padding: 60px;
}

.team-section h1{
	text-transform: uppercase;
	margin-bottom: 20px;
	color: black;
	font-size: 30px;
}

.border{
	display: block;
	margin: auto;
	width: 600px;
	height: 5px;
	background: #3498db;
	margin-bottom: 40px;
}

.ps{
	margin-bottom: 0px;
}

.ps a {
	display: inline-block;
	margin: 0px;
	width: 750px;
	height: 750px;
	overflow: hidden;
	
}

.ps a img{
	width: 100%;
	transition: 0.4s all;
}

.ps a:hover > img{
	filter: none;
}

.section{
	width: 600px;
	margin: auto;
	font-size:20px;
	color: black;
	text-align: justify;
	margin-bottom: 35px;
}

.section:target {
	height: auto;	
}

.name{
	display: block;
	margin-bottom: 30px;
	text-align: center;
	text-transform: uppercase;

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

 
    <!-------------------  About Us Information HTML  ------------->  

    <div>

 <br />
  <br />
  <div class="team-section">

  <h1 class="set-title" align="center" ><u>CNFp d’Oran</h1></u>
   <br></br>
    <br></br>

     <div class="ps">
       <a href="#p2"><img src="cnf.jpg" alt="face"></a>
    </div>

      <div class="section" id="p2">
  	   <span class="name">Informations</span>
  	      <span class="border"></span>
          <p>
		  Le CNFp d’Oran est un espace d’accueil des chercheurs et des étudiants. Il a pour mission la mise en œuvre et le suivi des programmes de l’AUF susceptibles d’intéresser la communauté scientifique et éducative en Algérie.Plus spécifiquement, il met à leur disposition un ensemble de moyens et d’outils d’aide à la formation.<br/>
            <br/> · Organisation à but non lucratif <br>
			· Établissement d’enseignement supérieur <br/><br/><br />
			Site  : http://www.dz.auf.org/spip.php?article225 
			<br>
			Email : asmaa.bengueddach@gmail.com
  	      	
  	      </p>
  </div>

</div>


  <br/>
  <br/>
  <br/>
         
  <!---------------  End of The form and Data Insertion Complete   ---------------->
        
  <?php include 'footer.php'?>
  
  </body>

 </html>


 

