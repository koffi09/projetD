<?php include("headersessionutilisateur.php");?>
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

  
  <section id="dessinpanier">
        <div class="container">
            <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
            <b><h1 style="text-align:center;color:white;background-color:black;margin-top:90px"> Récaputulatif de mon panier </h1></b>
         </div>
   </div>
   </div>
  </section>
  <section id="panier" style="margin-top:100px">
  <div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produits</th>
                        <th>Quantité</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>         
                     <?php 
                      //requette pour affichier les elements du panier//
                      $ids = array_keys($_SESSION["panier"]);
                        if(empty($ids)){
                           $product= array();
                           //revient à un tableau vide après suppression //

                        }else{
                       $chaine = implode(',',$ids);
                       $product= $BD->query("SELECT * FROM produits WHERE id_prod IN (',',$chaine)");
                       }
                     ?>
                    <?php foreach($product as $products): ?>
                      <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <a class="thumbnail pull-left" href="#"> <img class="media-object" src="image/<?=$products->photo;?>" style="width: 72px; height: 72px;"> </a>
                            <div class="media-body">
                                <h4 class="media-heading"><a href="#"><?=$products->nomProduit;?></a></h4>
                                <!-- <h5 class="media-heading"> by <a href="#">Brand name</a></h5> -->
                                <span>Status: </span><span class="text-success"><strong>En Stock</strong></span>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                         <p> 
                          <?=$_SESSION['panier'][$products->id_prod]?></p>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?= number_format($products->prixProduit,2,',','');?>FCFA</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong><?=  number_format($products->prixProduit*$_SESSION['panier'][$products->id_prod],2,',','');?>FCFA</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="panier.php?delPanier=<?=$products->id_prod;?>"><button type="button" class="btn btn-danger">
                        <span class="glyphicon glyphicon-remove"></span> supprimer
                        </button></a></td>  
                    </tr>
                    <?php endforeach ?>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Sous-total</h5></td>
                        <td class="text-right"><h3><strong><?= number_format($Panier->soustotalProd(),2,',','');?>FCFA</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Frais de livraison</h5></td>
                        <td class="text-right"><h5><strong>1500FCFA</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h2 style="color:red"><strong><?= number_format($Panier->TotalGeneral(),2,',','');?>FCFA</strong></h2></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <button type="button" class="btn btn-default">
                            <a href="javascript:history.back()" style="text-decoration:none"><span class="glyphicon glyphicon-shopping-cart"></span> Continuer vos achats
                        </button> </a></td>
                        <td>
                        <a href="<?php if(isset($_SESSION['id_client'])){header('Location:facture.php');}else{ header('Location:inscriptionconnection.php');}?>"><button type="button" class="btn btn-success">
                            Continuer<span class="glyphicon glyphicon-play"></span>
                        </button></a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
<script src="js/script.js">  </script>

<?php  include("footer.php");?>
</body>
</html>