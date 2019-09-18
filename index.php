<?php include("headersessionutilisateur.php");?>

   
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link re="stylesheet" href="dist/css/iziToast.min.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset='UTF-8'>
    <meta name="robots" content="noindex">
    <link rel="shortcut icon" type="image/x-icon">

    <!-- police font-->
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <title> Acceuil|E-Commerce </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

/* Button used to open the chat form - fixed at the bottom of the page */
.open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 100px;
}

/* The popup chat - hidden by default */
.chat-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width textarea */
.form-container textarea {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
  resize: none;
  min-height: 200px;
}

/* When the textarea gets focus, do something */
.form-container textarea:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/send button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
</head>
<h3></h3></br>

<body style="background: gray" >
    <section id="recherche" class="container">

            
                    
                </form>
            </div>
            <div class="row" id="products">

            </div>
        </div>
    </section>
    </div>

    <section id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-xs-12">
                    <div class="element">
       
                        <h1 style="text-align:center; color:#d0bc00 ; background-color: black"> <b>NOS PRODUITS</b><span
                                class="glyphicon glyphicon-heart-empty"></span></h1>
            
                        </h1>
                    </div>
                </div>
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
<section>
<button class="open-button" onclick="openForm()">En ligne</button>

<div class="chat-popup" id="myForm">
  <form action="/action_page.php" class="form-container">
    <h1>assistance</h1>

    <label for="msg"><b>chat en direct</b></label>
    <textarea placeholder="saisir votre preoccupati.." name="msg" required></textarea>

    <button type="submit" class="btn">envoyer le message</button>
    <button type="button" class="btn cancel" onclick="closeForm()">fermer la section</button>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
</section>

        <script src="js/jquery-1.11.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="dist/js/iziToast.min.js"></script>
        <?php include("footer.php");?>

        <!--  le boutton de scrolling-->
        <div id="scrolling">
            <div class="image_scroll">
                <img src="image/top.png">
            </div>
        </div>
        <!--  Debut chargement de javascript-->
        <script src="js/script.js">  </script>

        <!--  Styles-->
        <style>
            /* carousel*/
            .carousel-control {
                left: -12px;
                height: 40px;
                width: 40px;
                background: none repeat scroll 0 0 #222222;
                border: 4px solid #FFFFFF;
                border-radius: 23px 23px 23px 23px;
                margin-top: 90px;
            }

            .carousel-control.right {
                right: -45px;
            }

            .carousel-control.left {
                left: -45px;
            }

            /* les indications */
            .carousel-indicators {
                right: 50%;
                top: auto;
                bottom: -10px;
                margin-right: -19px;
            }

            /* The colour of the indicators */
            .carousel-indicators li {
                background: #cecece;
            }

            .carousel-indicators .active {
                background: #428bca;
            }

            @media(max-width: 805px) {

                .carousel-control.right {
                    right: -30px;
                }

                .carousel-control.left {
                    left: -30px;
                }
            }
        </style>

        <style>
            .popup {
                position: fixed;
                width: 500px;
                height: 200px;
                display: none;
                z-index: 9999;
                padding: 20px;
                border-radius: 10px;
                background-color: white;
                border: 1px solid grey;
            }

            #modal {
                width: 600px;
                height: 150px;
            }
            .price{
                font-size:15px;
                color:black;
            }
            .prices{
                font-size:20px;
                color:black;
            }
        </style>

</body>

</html>


        <!--Requette Ajax ------>
        <!-- <script>
        
            $(document).ready(function () {
                $('.view_data').click(function () {
                    var id_article = $(this).attr("id");
                    $.ajax({
                        url: "modaleconfig.php",
                        method: "post",
                        data: { id_article: id_article },
                        success: function (data) {
                            $("#details_article").html(data);
                            $('#dataModal').modal('show');
                        }
                    });
                });
            });
        </script> -->