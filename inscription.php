<?php ob_start();?>
<?php session_start();?>
<?php include("config/function.php");?>
<?php include("header.php");?>
<?php
  $nom =$prenom=$email=$password=$contact="";
  $nomerror=$passworderror=$prenomerror=$emailerror=$contacterror="";
  $success=false;
     if(isset($_POST['submit'])){
    $nom = verifyInput($_POST['nomClient']);
    $prenom =verifyInput($_POST['prenomClient']);
    $email = verifyInput($_POST['Emailclient']);
    $password= verifyInput(sha1($_POST['Passwordclient']));
    $contact =verifyInput($_POST['contactClient']); 
    $success=true;
       //  Verification  PHP COTE CLIENT ///
    if(!empty($nom)){
        if(!is_numeric($nom)){
           $nom;
        }else{
          $nomerror="Valeur saisir incorrecte";
          $success=false;
        }
    }else{
       $nomerror="Entrer votre nom!";
       $success=false;
    }
  
    if(!empty($prenom)){
      if(!is_numeric($prenom)){
         $prennom;
      }else{
        $prenomerror ="Valeur saisir incorrecte";
        $success=false;
      }
  }else{
     $prenomerror ="Entrer votre prenom!";
     $success=false;
  }
  
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

  if(!empty($contact)){
      if(isPhone($contact)){
           $contact;
      }else{
        $contacterror ="Contact non valide";
        $success=false;
      }
  }else{
    $contacterror ="Entrer un contact";
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
         $req=$BD->verification("SELECT*FROM clients WHERE Emailclient=:Emailclient", array('Emailclient'=>$email));
         if($req==0){
          $insert=$BD->inscription("INSERT INTO clients(nomClient,prenomClient,Emailclient,Passwordclient,contactClient)   VALUES(:nomClient,:prenomClient,:Emailclient,:Passwordclient,:contactClient)", array('nomClient'=>$nom,'prenomClient'=>$prenom,'Emailclient'=>$email,'Passwordclient'=>$password,'contactClient'=>$contact));
          $req= $BD->query1("SELECT*FROM clients WHERE  Emailclient=:Emailclient", array('Emailclient'=>$email));
          $_SESSION['nomClient']=$req->nomClient;
          $_SESSION['prenomClient']=$req->prenomClient;
          $_SESSION['Emailclient']=$req->Emailclient;
          $_SESSION['id_client']=$req->id_client;
          header("Location:facture.php?r=".$_SESSION['id_client']);
        }else{
          echo"Désolé l'email esxiste deja";
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
<section id="login">
    <div class="container">
      <div class="row">
          <div class="col-xs-12">
              <div class="form-wrap">
                <h1 style="color:orange;text-align:center">Inscrivez pour valider votre achat</h1>
                    <form  action="" method="POST" id="formulaire" >
                        <div class="form-group">
                            <label for="prenom" class="sr-only">NOM</label>
                            <p class="error"> <?php  if(isset($nomerror)){echo($nomerror);}?> </p>
                            <input type="text" name="nomClient" id="nom" class="form-control" placeholder="nom" required>
                            
                        </div>
                        <div class="form-group">
                            <label for="prenom" class="sr-only">PRENOMS</label>
                            <p class="error"> <?php  if(isset($prenomerror)){echo($prenomerror);}?> </p>
                            <input  type="text" name="prenomClient" id="prenom" class="form-control" placeholder="prenom" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="email" class="sr-only">Email</label>
                            <p class="error">  <?php  if(isset($emailerror)){echo($emailerror);}?> </p>
                            <input type="text" name="Emailclient" id="email" class="form-control" placeholder="nom@example.com" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Password</label>
                            <p class="error"> <?php  if(isset($passworderror)){ echo($passworderror);}?> </p>
                            <input type="password" name="Passwordclient" id="key" class="form-control" placeholder="mot de passe" required>
                           
                        </div>
                        <div class="form-group">
                            <label for="key" class="sr-only">Contact</label>
                            <p class="error"> <?php  if(isset($contacterror)){echo($contacterror);}?> </p>
                            <input type="text" name="contactClient" id="key" class="form-control" placeholder="Contact" required>
                           
                        </div>
                        <div class="form-group">
                                <!-- <div class="col-md-12"><strong>VILLE DE LIVRAISON:</strong></div>
                                <div class="col-md-12">
                                   <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12"> -->
                                    <select class="form-control" name="ville">
                                        <option value="">ville</option>
                                        <option value="">cocody</option>
                                        <option value="01">abobo</option>
                                        <option value="02">adjamé</option>
                                    </select>
                                   </div>
                                
                            
                        <input type="submit"  name="submit" id="btn-login" class="btn btn-primary
                         btn-lg btn-block" value="valider">
                         <p style="text-align:center">   Deja un compte?  <a href="connexion.php"> connecter vous </a></p>
                    </form>
      
              </div>
        </div> <!-- /.col-xs-12 -->
      </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>
<?php include ('footer.php');?>
<script src="js/script.js">  </script>
</body>
</html> 

<div class="modal fade" id="squarespaceModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
      <h3 class="modal-title" id="lineModalLabel" style="text-align:center">Details de l'article <b></b></h3>
    </div>
    <div class="modal-body">
        <p> Les détails</p>
            <!-- content goes here -->
    </div>
  </div>
  </div>
</div>
   <!-- <script>
    $(document).ready(function(){
      $("#formulaire").submit(function(){
         nom = $(this).find("input[name=nomClient]").val();
         prenom =$(this).find("input[name=prenomClient]").val();
         email =$(this).find("input[name=Emailclient]").val();
         password= $(this).find("input[name=Passwordclient]").val();
         contact =$(this).find("input[name=contactClient]").val();
         $.post("configinscription.php",{nom :nom, prenom:prenom,email:email,password:password,contact:contact},function(data){
          if(data!="ok"){
            $('.error').empty().append(data);
          }
        
        })
         return false;
      });


    }); -->



  
   
<style>

/*    --------------------------------------------------
  :: Login Section
  -------------------------------------------------- */
#login {
    padding-top: 50px
}
#login .form-wrap {
    width: 30%;
    margin: 0 auto;
}
#login h1 {
    color: #1fa67b;
    font-size: 18px;
    text-align: center;
    font-weight: bold;
    padding-bottom: 20px;
}
#login .form-group {
    margin-bottom: 25px;
}
#login .checkbox {
    margin-bottom: 20px;
    position: relative;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
#login .checkbox.show:before {
    content: '\e013';
    color: #1fa67b;
    font-size: 17px;
    margin: 1px 0 0 3px;
    position: absolute;
    pointer-events: none;
    font-family: 'Glyphicons Halflings';
}
#login .checkbox .character-checkbox {
    width: 25px;
    height: 25px;
    cursor: pointer;
    border-radius: 3px;
    border: 1px solid #ccc;
    vertical-align: middle;
    display: inline-block;
}
#login .checkbox .label {
    color: #6d6d6d;
    font-size: 13px;
    font-weight: normal;
}
#login .btn.btn-custom {
    font-size: 14px;
  margin-bottom: 20px;
}
#login .forget {
    font-size: 13px;
  text-align: center;
  display: block;
}

.error{

  color:red;
}

.form-control {
    color: #212121;
}
.btn-custom {
    color: #fff;
  background-color: #1fa67b;
}
.btn-custom:hover,
.btn-custom:focus {
    color: #fff;
}

</style>