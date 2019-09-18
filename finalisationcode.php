<?php include("headersessionutilisateur.php");?>
<?php
$commune=$ville=$codePostale="";
  $villeError=$communeError="";
  $success=false;
  if(isset($_POST['submit'])){
    $commune = verifyInput($_POST['comunelivClient']);
    $ville= verifyInput($_POST['villelivClient']);
    $iduser= $_SESSION['id_client'];
    $codePostal=verifyInput($_POST['codePostal']);
    $success=true;
  //  Verification  PHP COTE CLIENT 
        if($commune!="commune"){
            $commune;
        }else{
            $communeError="Merci de preciser une commune";
            $success=false;
        }
        
        if($ville!="ville"){
            $ville;
        }else{
        $villeError="Merci de preciser une ville";
        $success=false;
        }
  

        if($ville!="ville"){
            $ville;
        }else{
        $villeError="Merci de preciser une ville";
        $success=false;
        }
  
 
///  END VERIFICATION PHP  COTE CLIENT///    
 if($success==true){
         $req=$BD->inscription("INSERT INTO commandes(id_client) VALUES(:id_client)", array('id_client'=>$ids));
        
         if($req==1){
           $req= $BD->query1("SELECT*FROM clients WHERE  Emailclient=:Emailclient", array('Emailclient'=>$email));
          $_SESSION['nomClient']=$req->nomClient;
          $_SESSION['prenomClient']=$req->prenomClient;
          $_SESSION['Emailclient']=$req->Emailclient;
          $_SESSION['id_client']=$req->id_client;
          header("Location:profils.php?r=".$_SESSION['id_client']);
        }else{
         $error="email ou mot de passe incorrecte";
        }
      }
?>  
