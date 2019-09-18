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

<body style="background: gray">  
        </section>
    <section id="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element">
                          <h1 style="text-align:center; color:#d0bc00;background-color:black;margin-top:80px" > <b>PARFUMS FEMMES</b>
                          </h1>
                        </div>
                    </div>
                </div>
            </div>
    </section>

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

<?php  $produit = $BD->query("SELECT*FROM produits WHERE categories='femme'");?>
   <section id="contenu" style="margin-top:80px">
<div class="container">
    <div class="row">
       <?php  foreach($produit as $produits):?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid">
                <div class="product-image">
                    <a href="#">
                        <img class="pic-1" src="image/<?=$produits->photo;?>">
                        <img class="pic-2" src="image/adidasss.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="" data-tip="Ajouter au panier"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-new-label">Solde</span>
                    <span class="product-discount-label">20%</span>
                </div>
                <ul class="rating">
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star"></li>
                    <li class="fa fa-star disable"></li>
                </ul>
                <div class="product-content">
                    <h3 class="title"><?=$produits->nomProduit;?></h3>
                    <div class="price">8000cfa
                        <span>1500cfa</span>
                    </div>
                    <a class="add-to-cart"  href="details.php?nomProdu=<?=$produits->nomProduit;?>">Détail</a>
                </div>
            </div>
        </div>
            <?php endforeach ?>
            </div>
        </div>
        </div>
    </div>
</div>
<section>

<?php include("footer.php");?>
<style >
    h3.h3{text-align:center;margin:1em;text-transform:capitalize;font-size:1.7em;}

/********************* shopping Demo-1 **********************/
.product-grid{font-family:Raleway,sans-serif;text-align:center;padding:0 0 72px;border:1px solid rgba(0,0,0,.1);overflow:hidden;position:relative;z-index:1}
.product-grid .product-image{position:relative;transition:all .3s ease 0s}
.product-grid .product-image a{display:block}
.product-grid .product-image img{width:100%;height:auto}
.product-grid .pic-1{opacity:1;transition:all .3s ease-out 0s}
.product-grid:hover .pic-1{opacity:1}
.product-grid .pic-2{opacity:0;position:absolute;top:0;left:0;transition:all .3s ease-out 0s}
.product-grid:hover .pic-2{opacity:1}
.product-grid .social{width:150px;padding:0;margin:0;list-style:none;opacity:0;transform:translateY(-50%) translateX(-50%);position:absolute;top:60%;left:50%;z-index:1;transition:all .3s ease 0s}
.product-grid:hover .social{opacity:1;top:50%}
.product-grid .social li{display:inline-block}
.product-grid .social li a{color:#fff;background-color:#333;font-size:16px;line-height:40px;text-align:center;height:40px;width:40px;margin:0 2px;display:block;position:relative;transition:all .3s ease-in-out}
.product-grid .social li a:hover{color:#fff;background-color:#ef5777}
.product-grid .social li a:after,.product-grid .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;letter-spacing:1px;line-height:20px;padding:1px 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-20px;z-index:-1}
.product-grid .social li a:hover:after,.product-grid .social li a:hover:before{opacity:1}
.product-grid .product-discount-label,.product-grid .product-new-label{color:#fff;background-color:#ef5777;font-size:12px;text-transform:uppercase;padding:2px 7px;display:block;position:absolute;top:10px;left:0}
.product-grid .product-discount-label{background-color:#333;left:auto;right:0}
.product-grid .rating{color:#FFD200;font-size:12px;padding:12px 0 0;margin:0;list-style:none;position:relative;z-index:-1}
.product-grid .rating li.disable{color:rgba(0,0,0,.2)}
.product-grid .product-content{background-color:#fff;text-align:center;padding:12px 0;margin:0 auto;position:absolute;left:0;right:0;bottom:-27px;z-index:1;transition:all .3s}
.product-grid:hover .product-content{bottom:0}
.product-grid .title{font-size:13px;font-weight:400;letter-spacing:.5px;text-transform:capitalize;margin:0 0 10px;transition:all .3s ease 0s}
.product-grid .title a{color:#828282}
.product-grid .title a:hover,.product-grid:hover .title a{color:#ef5777}
.product-grid .price{color:#333;font-size:17px;font-family:Montserrat,sans-serif;font-weight:700;letter-spacing:.6px;margin-bottom:8px;text-align:center;transition:all .3s}
.product-grid .price span{color:#999;font-size:13px;font-weight:400;text-decoration:line-through;margin-left:3px;display:inline-block}
.product-grid .add-to-cart{color:#000;font-size:13px;font-weight:600}
@media only screen and (max-width:990px){.product-grid{margin-bottom:30px}
}
</style>