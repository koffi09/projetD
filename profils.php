<?php ob_start();?>
<?php include("headersession.php");?>
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
<?php  
if(isset($_SESSION['id_client'])&&!empty($_SESSION['id_client'])){
  ?>
    <?php 
      $ids =array_keys($_SESSION['panier']);
      if(!empty($ids)){ 
      $message="FINALISER VOS COMMANDES EN ATTENTE"; 
      }
    ?> 

<section id="Compte" style="margin-top:150px">
     <div class="container">
         <div class="row">
                <!-- <div class="col-lg-6">
                        <div class="thumbnail">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h3> <b>Votre compte KIGNON ET SENTEURS</b></h3>
                                 </div>
                                 <a href="#" style="text-decoration:none" ><button class="btns" ><h3 style="text-align:center"><span style="color:#fff">HISTORIQUE DE  VOS COMMANDES</span> </h3></a></button><br>
                                 <a href="facture.php"style="text-decoration:none"><button class="btns"><h3 style="text-align:center"><b><span style="color:#fff"> FINALISER MES COMMANDES EN ATTENTE</span></b></h3></a></button>
                                 <a href=""style="text-decoration:none" ><h3 style="text-align:center;color:orange"><b> <span class="glyphicon glyphicon-lock">DÉCONNEXION</b> </h3></a>
                            </div>
                        </div>
                    </div> -->
               <div class="col-lg-12">
                     <div class="thumbnail">
                        <h2>  Votre compte </h2>
                         <div class="col-md-12">
                              <div class="panel panel-default">
                                   <div class="panel-heading">
                                       <h3> <b>INFORMATIONS PERSONNELLES <a href="#"><span class="glyphicon glyphicon-pencil" style="color:orange"> </span></a>  </b></h3>
                                     </div>
                                      <div class="panel-body">
                                          <div class="form-group">
                                              <h3> <?=$_SESSION['nomClient'];?></h3>
                                              <h3> <?=$_SESSION['Emailclient'];?></h3>
                                              <h3><a href=""> MODIFIER VOTRE MOT DE PASSE </a></h3>
                                               </div>           
                                            </div>
                                         </div>
                                         </div>
                                         <div class="col-md-12">
                                                <div class="panel panel-default">
                                                     <div class="panel-heading">
                                                         <h3> <b>AJOUTER UNE ADRESSE</b></h3>
                                                       </div>
                                                        <div class="panel-body">
                                                            <div class="form-group">
                                                                <h3> Adresse par défaut : </h3>
                                                                <h3> Vous n'avez pas encore ajouté une adresse de livraison par défaut</h3>
                                                                 <h3><a href="">AJOUTER UNE ADRESSE</a></h3>
                                                            </div>           
                                                              </div>
                                                          </div>
                                                 </div>
                                        </div>
                                   </div>
                                   </div>
             
                                </div>
                             </div> 
                            </section>
                
                  <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                      <a href="facture.php"style="text-decoration:none"><button ><h3 style="text-align:center"><b><span style="color:#fff"> FINALISER MES COMMANDES EN ATTENTE</span></b></h3></a></button>
                 </div>
             </div>
    </div>
    </section>


                 <section id="contenu-article">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                        <div class="col-md-12">
                             <h2 >NOS PRODUITS POPULAIRES HOMMES ET FEMMES</h2>
                                </div>
                        <div class="panel-body">
                    <div id="Carousel" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel" data-slide-to="1"></li>
                            <li data-target="#Carousel" data-slide-to="2"></li> 
                            

                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">
                        

                            <?php  $produit = $BD->query("SELECT*FROM produits WHERE categories='femme'&& produit_populaire=1");?>

                            <div class="item active">
            
                                <div class="row">
                                    <?php foreach($produit as $produits):?>
                                    <div class="col-xs-12 col-sm-4 col-md-4 ">
                                        <article class="card-wrapper">
                                            <div class="image-holder">
                                                  
    
                                                <div class="image-liquid image-holder--original"
                                                    style="background-image: url('image/<?=$produits->photo;?>')">
                                                </div>
                                            </div>
                                            <div class="product-description">
                                            
                                                <h1 class="product-description__title">
                                                    <a href="#">
                                                       <?= $produits->nomProduit;?>
                                                  
                                                    </a>
                                                    
                                                </h1>

                                                <!-- category and price -->
                                                <div class="row">
                                                    <div
                                                        class="col-xs-12 col-sm-8 product-description__category secondary-text">
                                                        <?=$produits->categories;?>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 product-description__price">
                                                       <h5 class="price" > <?=number_format($produits->prixProduit,2,',','');?>FCFA</h5>
                                                    </div>
                                                </div>
                                                  
                                
                                                <!-- divider -->
                                                <hr />

                                                <a href="details.php?nomProdu=<?=$produits->nomProduit;?>"><button type="button" class="btn" style="background-color:orange;width:180px;height:50px"><span style="color:#fff"> Ajouter au panier </span></button></a>
                                               
                                            </div>

                                        </article>

                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                            <?php $produits = $BD->query('SELECT*FROM produits WHERE categories="homme"&&produit_populaire=1');?>
                            <div class="item">
                                <div class="row">
                                    <?php foreach($produits as $produit): ?>
                                    <div class="col-xs-12  col-sm-4 col-md-4">
                                        <article class="card-wrapper">
                                            <div class="image-holder">
                                                
                                             <div class="image-liquid image-holder--original"
                                                    style="background-image: url('image/<?=$produit->photo;?>')">
                                                </div>
                                            </div>

                                            <div class="product-description">
                                                <!-- title -->
                                                <h1 class="product-description__title">
                                                    <a href="#">
                                                        <?=$produit->nomProduit;?>
                                                    </a>
                                                </h1>

                                                <!-- category and price -->
                                                <div class="row">
                                                    <div
                                                        class="col-xs-12 col-sm-8 product-description__category secondary-text">
                                                        <?=$produit->categories;?>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 product-description__price">
                                                    <h5 class="price" ><?=number_format($produit->prixProduit,2,',','');?>FCFA</h5>
                                                    </div>
                                                </div>

                                                <!-- divider -->
                                                <hr />

                                                <a href="details.php?nomProdu=<?=$produit->nomProduit;?>"> <button type="button " class="btn btn-primary"><span
                                                        class="glyphicon glyphicon-shopping-cart"></span>
                                                    Ajouter au panied</button></a>
            
                                            </div>

                                        </article>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
             </div>
             </div>
            </div>
            </div>
        </div>
        <!--.container-->
    </section>
    <section id="contenu-article2" style="margin-top:20px">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                                <div class="panel-heading">
                                <div class="col-md-12">
                                    <h2>NOS PRODUITS POPULAIRE POUR MAISONS ET MAGASINS </h2>
    
                                </div>
                    <div id="Carousel2" class="carousel slide">

                        <ol class="carousel-indicators">
                            <li data-target="#Carousel2" data-slide-to="0" class="active"></li>
                            <li data-target="#Carousel2" data-slide-to="1"></li>
                             <li data-target="#Carousel2" data-slide-to="2"></li>
                             <li data-target="#Carousel2" data-slide-to="3"></li>
                        </ol>

                        <!-- Carousel items -->
                        <div class="carousel-inner">

                            <?php $produit = $BD->query("SELECT*FROM produits WHERE categories='voiture'&& produit_populaire=1");?>

                            <div class="item active">
                                <div class="row">
                                    <?php foreach($produit as $produits):?>
                                    <div class="col-xs-12 col-sm-4 col-md-4 ">
                                        <article class="card-wrapper">
                                            <div class="image-holder">

                                                <div class="image-liquid image-holder--original"
                                                    style="background-image: url('image/<?=$produits->photo;?>')">
                                                </div>
                                            </div>
                                            <div class="product-description">
                                                <!-- title -->
                                                <h1 class="product-description__title">
                                                    <a href="#">
                                                       <?= $produits->nomProduit;?>
                                                    </a>
                                                </h1>

                                                <!-- category and price -->
                                                <div class="row">
                                                    <div
                                                        class="col-xs-12 col-sm-8 product-description__category secondary-text">
                                                        <?=$produits->categories;?>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 product-description__price">
                                                    <h5 class="price" ><?=number_format($produits->prixProduit,2,',','');?>FCFA</h5>
                                                    </div>
                                                </div>

                                                <!-- divider -->
                                                <hr />

                                                <a href="details.php?nomProdu=<?=$produits->nomProduit;?>"> 
                                                <button type="button" class="btn" style="background-color:orange;width:180px;height:50px"> Ajouter au panier  </a>
                
                                            </div>

                                        </article>

                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>

                            <?php $produits = $BD->query('SELECT*FROM produits WHERE categories="maison"&& produit_populaire=1 ');?>
                            <div class="item">
                                <div class="row">
                                    <?php foreach($produits as $produit): ?>
                                    <div class="col-xs-12  col-sm-4 col-md-4">
                                        <article class="card-wrapper">
                                            <div class="image-holder">

                                                <div class="image-liquid image-holder--original"
                                                    style="background-image: url('image/<?=$produit->photo;?>')">
                                                </div>
                                            </div>

                                            <div class="product-description">
                                                <!-- title -->
                                                <h1 class="product-description__title">
                                                    <a href="#">
                                                        <?=$produit->nomProduit;?>
                                                    </a>
                                                </h1>

                                                <!-- category and price -->
                                                <div class="row">
                                                    <div
                                                        class="col-xs-12 col-sm-8 product-description__category secondary-text">
                                                        <?=$produit->categories;?>
                                                    </div>
                                                    <div class="col-xs-12 col-sm-4 product-description__price">
                                                    <h5 class="price" ><?=number_format($produit->prixProduit,2,',','');?>FCFA</h5>
                                                    </div>
                                                </div>

                                                <!-- divider -->
                                                <hr />

                                                <a href="details.php?nomProdu=<?=$produit->nomProduit;?>"> 
                                                <button type="button" class="btn" style="background-color:orange;width:180px;height:50px"> <span style="color:#fff"> Ajouter au paniers</span></button>
                                            </a>
            
                                            </div>

                                        </article>
                                    </div>
                                    <?php endforeach ?>
                                </div>
                            </div>
                        </div>
                        <!--.carousel-inner-->
                        <a data-slide="prev" href="#Carousel2" class="left carousel-control">‹</a>
                        <a data-slide="next" href="#Carousel2" class="right carousel-control">›</a>
                    </div>
                    <!--.Carousel-->

                </div>
            </div>
        </div>
   </div>
</div>
</div>
<!--.container-->
</div>



            
    <?php include("footer.php");?> 

  </body>
</html>
<script src="js/script.js">   </script>

<?php
}else{ header("Location:index.php");}
?>
 