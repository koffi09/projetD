<?php ob_start();?>
<?php  session_start();?>
<?php
 if(!isset($_SESSION['id_client'])){
    include("header.php"); 
}else{
     include("headersession.php");
   }
?>