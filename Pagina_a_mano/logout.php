<?php
session_start();

	$_SESSION['currentuserx'];
    $_SESSION['name'];
    $_SESSION['sid'];
   	$_SESSION['ipa'] ;
    $_SESSION['game_date'] ;
      
session_destroy();
header("location: index.php");


?>