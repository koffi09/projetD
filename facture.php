 <?php include("headersessionutilisateur.php");?>
 <?php include("config/function.php");?>
<?php
$commune=$ville=$codePostale="";
  $villeError=$communeError="";
  $success=false;
  if(isset($_POST['submit'])){
    $commune = verifyInput($_POST['comunelivClient']);
    $ville= verifyInput($_POST['ville']);
    $iduser= $_SESSION['id_client'];
    $produit=$_SESSION['panier'];
    $codePostal=verifyInput($_POST['codePostal']);
    $success=true;
  //  Verification  PHP COTE CLIENT ///
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
  

        if(empty($codePostal)){
            if(is_numeric($codePostal)){
                $codePostal;
            }else{
                $codePostalErreur="Entrer un code valide";
            }
        }else{
        $codePostalErreur="Merci de preciser un code postal";
        $success=false;
        }
        
    }      
///  END VERIFICATION PHP  COTE CLIENT///    
 if($success==true){
         $req=$BD->inscription("INSERT INTO commandes(id_client,panier) VALUES(:id_client,:panier)", array('id_client'=>$iduser,'id_produit'=>$produit));
         $requtte=$BD->update("UPDATE  clients SET(comunelivClient,ville) WHERE comunelivClient=:comunelivClient AND ville=:ville", array('comunelivClient'=>$commune,'ville'=>$ville));
        }else{
            // echo "erreur";
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
 
<body style="background: gray">
  <section id="facture" style="font-family:colibri">
 <div class="container wrapper">
            <div class="row cart-head">
                <div class="container">
                <div class="row">
                    <p></p>
                </div>
                <div class="row">
                    <div style="display: table; margin: auto;">
                        <h1 style="color:black"> <b>Finalisation de la commande </b></p>
                    </div>
                </div>
                <div class="row">
                    <p></p>
                </div>
                </div>
            </div>    
            <div class="row cart-body">
                <form class="form-horizontal" method="post" action="">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-push-6 col-sm-push-6">
                    <!--REVIEW ORDER-->
                               <?php 
                                    $ids= array_keys($_SESSION['panier']);
                                 if(empty($ids)){
                                     $req =array();
                                    // $error ="Votre panier est vide";
                                    }else{
                                      $tab = implode(',',$ids);
                                      $req= $BD->query("SELECT*FROM produits WHERE id_prod IN(',',$tab)",array("id_prod"=>$tab));
                                   }
                                 ?>
                <table class="table table-striped  table-condensed">
                <caption>  <h1 style="color:black"><b>MES COMMANDES</b> </h1></caption> 
                <?php  foreach($req as $reqs):?> 
                        <td><h2><?=$reqs->nomProduit;?></h2> </td>
                        <td><h2><?=$_SESSION['panier'][$reqs->id_prod];?><h2></td>
                        <td><h2><img src="image/classe.jpg" width=30px><h2></td>  
                        <td> <h2><?=  number_format($reqs->prixProduit*$_SESSION['panier'][$reqs->id_prod],2,',','');?>FCFA</h2></td>
    
                    </tr>
                    <?php endforeach ?>
                </table>
                <h2> TotalTTC: <span style="color:orange"><?=number_format($Panier->TotalGeneral(),2,',','');?> FCFA</span> </h2>
                    <!--REVIEW ORDER END-->
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading"> <span style="font-size:30px">Addresse</span></div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <h2>Adresse de livraison</h2>
                                </div>
                            </div>
                                <?php  
                                if(isset($_SESSION['id_client'])&&!empty($_SESSION['id_client'])){
                                  $req= $BD->query1("SELECT*FROM clients WHERE id_client=:id_client", array('id_client'=>$_SESSION['id_client']));
                                    if(!empty($req)){
                                 }else{
                                   echo "erreur";
                                  }
                                 }

                                ?>
                              <div class="form-group">
                                <div class="col-md-6 col-xs-12">
                                    <strong>NOM:</strong>
                                    <input type="text" name="nomClient" class="form-control" value="<?=$req->nomClient;?>" />
                                </div>
                                <div class="span1"></div>
                                <div class="col-md-6 col-xs-12">
                                    <strong>PRENOM:</strong>
                                    <input type="text" name="prenomClient" class="form-control" value="<?=$req->prenomClient;?>" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>COMMUNE DE LIVRAISON :</strong></div>
                                <div class="col-md-12">
                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <select class="form-control" name="comunelivClient">
                                        <option value="commune"> commune</option>
                                        <option value="">cocody</option>
                                        <option value="01">abobo</option>
                                        <option value="02">adjamé</option>
                                        <option value="03">toumodi</option>
                                        <option value="04">yamoussoukro</option>
                                        <option value="05">bassam</option>
                                        <option value="06">treicheville</option>
                                        <option value="07">bingerville</option>
                                </select>
                                </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>VILLE DE LIVRAISON:</strong></div>
                                <div class="col-md-12">
                                   <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                    <select class="form-control" name="ville">
                                        <option value="">ville</option>
                                        <option value="">cocody</option>
                                        <option value="01">abobo</option>
                                        <option value="02">adjamé</option>
                                    </select>
                                   </div>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <div class="col-md-12"><strong> CODE POSTAL(facultatif):</strong></div>
                                <div class="col-md-12">
                                    <input type="text" name="codePostal" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>NUMERO DE TELEPHONE:</strong></div>
                                <div class="col-md-12"><input type="text" name="contactClient class="form-control" value="<?=$req->contactClient;?>" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>ADRESSE EMAIL:</strong></div>
                                <div class="col-md-12"><input type="text" name="Emailclient" class="form-control" value="<?=$req->Emailclient;?>" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <button type="submit" name="submit" class="btn btn-primary btn-submit-fix" style="width: 520px">FINALISER MA COMMANDE</button>
                              </div>
                        </div>
                    </div>
                </div>
              
                </form>
            </div>
            <div class="row cart-footer">
        
            </div>
       </div>
</section>
    <?php include("footer.php");?>
</body>
    </html>
  