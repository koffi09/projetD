<?php ob_start();?>
<?php session_start();?>
<?php include("config/function.php");?>
<?php include("header.php");?>
<?php
  $email=$password="";
  $nomerror=$passworderror=$prenomerror=$emailerror=$contacterror="";
  $success=false;
  
  if(isset($_POST['submit'])){
    $email = verifyInput($_POST['Emailclient']);
    $password= verifyInput(sha1($_POST['Passwordclient']));
    $success=true;
  //  Verification  PHP COTE CLIENT ///
  if(!empty($email)){
        if(Email($email)){
           $email;
        }else{
          $emailerror ="Adresse E-mail nom valide";
          $success=false;
        }
  }else{
    $emailerror ="Entrer une adresse e-mail";
    $success=false;
  }
  
 if(isset($password)){
       $password;
  }else{
     $password ="Entrer un mot de passe" ;
     $success=false;
  }

} 
///  END VERIFICATION PHP  COTE CLIENT///    
 if($success==true){
         $req=$BD->verification("SELECT*FROM clients WHERE Emailclient=:Emailclient && Passwordclient=:Passwordclient", array('Emailclient'=>$email,'Passwordclient'=>$password));
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


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-1.11.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <title> Acceuil|E-Commerce </title>
</head>

<body style="background: #827e7e">


    <section style="position: relative;">
      <div class="container">
       <div class="row">
        <div class="col-md-6">
        <h3></h3></br>
         <p style="color:red;text-align:center"> <?php if(isset($error)){echo($error);}?></p>
        <h2 style="color: orange">CONNEXION</h2>
         <form action="" method="POST">
          <div class="form-group">
            <label for="email" style="color: black">Email:</label>
              
            <input type="email" class="form-control" name="Emailclient" id="email" placeholder="Entrer email" name="email" >
          </div>
          <div class="form-group">
            <label for="pwd" style="color: black">Mot de passe:</label>
            <input type="password" name="Passwordclient" class="form-control" id="pwd" placeholder="Entrer password" name="pwd">
          </div>
          <div class="checkbox">
            <label style="color: black"><input type="checkbox" name="remember"> souvenez-vous de moi</label>
          </div>
          <button type="submit" name="submit" class="btn btn-default">Soumettre</button>
         </form>
         <p></p>
         <a href="javascript:;" class="forget" data-toggle="modal" data-target=".forget-modal">Mot de passe oubier?</a>
        </div>
        <div class="col-md-6">
        <h3></h3></br>
        <h3></h3></br>
        <h2 style="text-align: center; color:orange "> CREER UN COMPTE </h2>
        <p style="color: white;text-align: center">Créer votre compte client kignon et senteur en quelques clics! Vous pouvez vous inscrire soit en utilisant votre adresse e-mail,soit via votre compte Facebook.</p>
        <p style="text-align: center"><a href="inscription.php" style="color: black"><button style="width: 250px" type="submit" class="btn btn-primary">s'inscrire </button></a>  <a href="facebook.com" style="color: black"><button style="width: 250px"  type="submit" class="btn btn-primary">Facebook </button></a> </p>
        </div>
        </div>
        </div>   
      </div>
    </section>
    <?php include("footer.php");?>
</div>
</body>
</html> 