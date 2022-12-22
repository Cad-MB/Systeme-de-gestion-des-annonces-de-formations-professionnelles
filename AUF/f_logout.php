

 <?php 


  session_start();
  session_unset();
  session_destroy();
  ob_start();

  header('Location: http://localhost/AUF/index.php'); 
  ob_end_flush(); 

  include 'http://localhost/AUF/index.php';

  exit();


 ?>