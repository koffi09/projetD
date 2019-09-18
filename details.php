<?php include("headersessionutilisateur.php");?>
<?php
  if(isset($_GET['nomProdu'])){
    $product =$BD->query1("SELECT * FROM produits WHERE nomProduit=:nomProduit", array('nomProduit'=>$_GET['nomProdu']));
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

<section id="presentation">
<div class="img-comp-container">
  <div class="img-comp-img">
    <img src="image/gugci.jpg" width="300" height="200">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="image/scandal.jpg" width="300" height="200">
  </div>
</div>
    </section>
<section id="details">
<div class="container-fluid">
   
 <div class="content-wrapper">	
		<div class="item-container">	
			<div class="container">	
				<div class="col-md-12">
					<div class="product col-md-3 service-image-left">
                        <div class="col-md-12">
							<img id="item-display" src="image/<?=$product->photo;?>" alt="" >
						</div>
					</div>
					
					<div class="container service1-items col-sm-2 col-md-2 pull-left">
						<center>
							<a id="item-1" class="service1-item">
								<img src="image/adidass.jpg" alt="">
							</a>
							<a id="item-2" class="service1-item">
								<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt="">
							</a>
							<a id="item-3" class="service1-item">
								<img src="http://www.corsair.com/Media/catalog/product/g/s/gs600_psu_sideview_blue_2.png" alt="">
							</a>
						</center>
					</div>
				</div>
					
				<div class="col-md-7">
					<div class="product-title"><b><?=$product->nomProduit;?></b></div>
					<div class="product-desc"><?=$product->detailsProduit?></div>
					<div class="product-rating"><i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star gold"></i> <i class="fa fa-star-o"></i> </div>
					<hr>
					<div class="product-price"><?=number_format($product->prixProduit,2,',','');?>FCFA</div>
					<div class="product-stock">stock limité</div>
					<hr>"
					<div class="btn-group cart">
					 <a href="addpanier.php?r=<?=$product->id_prod;?>" class="addpanier" name="show">	<button type="button" class="btn" style="background-color:orange;width:180px;height:50px">
							<span style="color:white;font-size:20px"> ajouter au panier </span>
						</button></a>
					</div>
				</div>
			</div> 
		</div>
		<div class="container-fluid">		
			<div class="col-md-12 product-info">
					<ul id="myTab" class="nav nav-tabs nav_tabs">
						
						<li class="active"><a href="#service-one" data-toggle="tab">DONNEZ VOTRE AVIS</a></li>
							
					</ul>
				<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade in active" id="service-one">
						 
							<section class="container product-info">
								<div class="container">
    <h1 class="well">VOTRE COMMENTAIRE</h1>
	<div class="col-lg-12 well">
	<div class="row">
			<form>
			 <div class="col-sm-12">
					<h4>Donnez votre avis sur ce parfum en laisser votre commentaire</h4>
				 <div class="form-group">
				  <fieldset>
                    <legend class="bt__form__sublegend">Comment avez-vous obtenu ce parfum ?</legend>
                     <div class="bt__form__group">
                       <div class="bt__form__radio">
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="achat">Je l'ai acheté
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="cadeau">On me l'a offert
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="test_bt">Je l'ai obtenu lors d'un test parfum sur kignon et senteur
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="test_hors_bt">Je l'ai obtenu lors d'un test parfum en dehors de kignon et senteur
                        </label></p>
                       </div>
                     </div>
                   </fieldset><br>
				   </div>	
				 <div class="form-group">
				  <fieldset>
                    <legend class="bt__form__sublegend">Comment avez-vous trouvez la presentation du parfum ?</legend>
                     <div class="bt__form__group">
                       <div class="bt__form__radio">
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="achat">mauvais
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="cadeau">passable
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="test_bt">bon
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="test_hors_bt">excellent
                        </label></p>
                       </div>
                     </div>
                   </fieldset><br>
				   </div>	
				 <div class="form-group">
				  <fieldset>
                    <legend class="bt__form__sublegend">Comment avez-vous trouvez le rapport qualité prix ?</legend>
                     <div class="bt__form__group">
                       <div class="bt__form__radio">
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="achat">passable
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="cadeau">correct
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="test_bt">bon 
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="test_hors_bt">excellent
                        </label></p>
                       </div>
                     </div>
                   </fieldset><br>
				   </div>
				 <div class="form-group">
				  <fieldset>
                    <legend class="bt__form__sublegend">recommandiez vous ce parfum a votre proche ?</legend>
                     <div class="bt__form__group">
                       <div class="bt__form__radio">
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="achat">oui
                        </label></p>
                        <p><label class="bt__form__radio">
                         <input type="radio" name="obtention" value="cadeau">non
                        </label></p>
                       </div>
                     </div>
                   </fieldset><br>
				   </div>
				   <div></div>
                   
<!-- Trigger/Open The Modal -->
<button id="myBtn">Enregistrer votre avis</button>									
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
  <script src="js/script.js"> </script>
<?php include("footer.php");?>
<?php include("configinscription.php");?> 

<style>

  
	/*********************************************
    			Call Bootstrap
*********************************************/

@import url("bootstrap/bootstrap.min.css");
@import url("bootstrap-override.css");
@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");

/*********************************************
        		Theme Elements
*********************************************/

.gold{
	color: #FFBF00;
}

/*********************************************
					PRODUCTS
*********************************************/

.product{
	border: 1px solid #dddddd;
	height: 321px;
}

.product>img{
	max-width: 230px;
}

.product-rating{
	font-size: 20px;
	margin-bottom: 25px;
}

.product-title{
	font-size: 20px;
}

.product-desc{
	font-size: 14px;
}

.product-price{
	font-size: 22px;
}

.product-stock{
	color: #74DF00;
	font-size: 20px;
	margin-top: 10px;
}

.product-info{
		margin-top: 50px;
}

/*********************************************
					VIEW
*********************************************/

.content-wrapper {
	max-width: 1140px;
	background: #d0cec3;
	margin: 0 auto;
	margin-top: 25px;
	margin-bottom: 10px;
	border: 0px;
	border-radius: 0px;
}

.container-fluid{
	margin: 0 auto;
}

.view-wrapper {
	float: right;
	max-width: 70%;
	margin-top: 25px;
}

.container {
	padding-left: 0px;
	padding-right: 0px;
	max-width: 100%;
}

/*********************************************
				ITEM 
*********************************************/

.service1-items {
	padding: 0px 0 0px 0;
	float: left;
	position: relative;
	overflow: hidden;
	max-width: 100%;
	height: 321px;
	width: 130px;
}

.service1-item {
	height: 107px;
	width: 120px;
	display: block;
	float: left;
	position: relative;
	padding-right: 20px;
	border-right: 1px solid #DDD;
	border-top: 1px solid #DDD;
	border-bottom: 1px solid #DDD;
}

.service1-item > img {
	max-height: 110px;
	max-width: 110px;
	opacity: 0.6;
	transition: all .2s ease-in;
	-o-transition: all .2s ease-in;
	-moz-transition: all .2s ease-in;
	-webkit-transition: all .2s ease-in;
}

.service1-item > img:hover {
	cursor: pointer;
	opacity: 1;
}

.service-image-left {
	padding-right: 50px;
}

.service-image-right {
	padding-left: 50px;
}

.service-image-left > center > img,.service-image-right > center > img{
	max-height: 155px;
}

</style>

  </body>
    </html>
    
 