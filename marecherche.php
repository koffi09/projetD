<?php 
 include("models/queryfunction.php");
 

 include("models/panier.class.php");
 $Panier = new Panier();
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

    <!-- police font-->
    <link href="https://fonts.googleapis.com/css?family=Patrick+Hand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <title> Acceuil|E-Commerce </title>
</head>

<body style="background: gray">
   
    <header>
        <div class="container-fluid">
            <div class="contenuentete" style="background-image: url('image/dore.jpg')">
                <div class="row">
                    <div class="col-md-6  col-lg-6 col-sm-6 col-xs-6 imageentete">
                        <img src="image/logo1.jpeg" style="width:400px" height="150px">
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
                    <h3 class="slogan"><marquee style="width:70%"> AVEC KIGNON & SENTEUR: LA FRAICHEUR AUX QUOTIDIENS</marquee></b></h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-wrap">
            <div class="container-fluid">
                <nav class="navbar navbar-inverse" role="navigation">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>  
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#" style="color:aliceblue"> </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php" style="color:#d0bc00">ACCUEIL</a></li>
                                <li class="dropdown">
                                    <a href="#"style="color:#d0bc00"  class="dropdown-toggle" data-toggle="dropdown">PARFUMS <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="homme.php">Hommes</a></li>
                                        <li><a href="femme.php">Femmes</a></li>
                                        <!-- <li><a href="#">Something else here</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">Separated link</a></li>
                                  <li class="divider"></li>
                                  <li><a href="#">One more separated link</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00"  data-toggle="dropdown">SENTEURS<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="maison.php">Maisons</a></li>
                                        <li><a href="voiture.php">Voitures</a></li>
                                        <!-- <li><a href="#">Something else here</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">Separated link</a></li>
                                      <li class="divider"></li>
                                      <li><a href="#">One more separated link</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00"  data-toggle="dropdown">MARQUES<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="marquee.php">Interieur du pays</a></li>
                                        <li><a href="marquei.php">Extérieur du pays</a></li>
                                        <!-- <li><a href="#">Something else here</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">One more separated link</a></li> -->
                                    </ul>
                                </li>
							
                              <li class="dropdown" style="text-align: center; margin-top: 10px">
							  <div id="formparf">
							      <form name="formparf" method="post" action="marecherche.php" >
								  
                                  <input class="form-control" name="motcle" type="text" placeholder="Rechercher un produit" style="width: 300px" style="color: black">
							</div>
                                  <div class="form-group">
			            
			
			</div>
                              </li>
                              <li class="dropdown" style="text-align: center">
                                <button class="btfind" style="width: 150px;margin-top: 10px;right: 20px; height: 34px"  type="submit" class="btn btn-primary" name="btsubmit">Recherche </button></a>
                              </li>
                                </form>
								
						

                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" style="color:#d0bc00" ><span
                                    class="glyphicon glyphicon-shopping-cart" style="color:yellowgreen"></span> [1]</a></li>

                                <li><a href="connexion.php" style="color:#d0bc00" ><i class="glyphicon glyphicon-user"></i> CONNEXION</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
    
    </header>
   <section id="presentation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="element">
                        <h1 style="text-align: center;color:#d0bc00;background-color: black" > <b>NOS PRODUITS</b><span
                                class="glyphicon glyphicon-heart-empty"></span></h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
	<p class="e-commerce"><h1 style="color:white;text-align:center "> Les Resultats de votre recherche </h1></p>
<div id="articles">
<?php 
   if (isset($_POST['btsubmit']) && !empty($_POST['btsubmit'])) {
    	$mc=$_POST['motcle'];
    	$reqSelect=$BD->query("SELECT * FROM produits WHERE nomProduit LIKE  '%$mc%'");
    } 
    else{
    	$reqSelect=$BD->query("SELECT * FROM produits");
    }
    
    $resultat=mysqli_query($connec,$reqSelect);
    $nbr=mysqli_num_rows($resultat);
    echo "<p><b>".$nbr."</b> Resultat(s) trouvé(s)...</p>";
    while ($ligne=mysqli_fetch_assoc($resultat) ) 
    {
    ?>
       <div id="parf">
       	<img src="image/<?php echo $ligne['photo'] ?>" /><br/>
       <td>Nom : </td><strong><?php echo $ligne['nomProduit']; ?></strong><br/>
       	<td>La marque: </td><strong><?php echo $ligne['marqProduit']; ?></strong><br/>
		<td>Categorie : </td><strong><?php echo $ligne['categories']; ?></strong><br/>
       	<td>Le prix : </td><strong><?php echo $ligne['prixProduit']; ?></strong>
       </div>


<?php } ?>

 <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
 <footer id="footer">
<div class="container">
 <div class="container_fluid">
 <div class="row">
 <div class="col-sm-4">
   <h3><a href="#" style="color: white"> Besoin d'aide ?</a></h3>
   <p><a href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"><span class="glyphicon glyphicon-earphone"></span></span> +22558585858</a></p>
   <p><a href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"><span class="glyphicon glyphicon-envelope"></span> monemail@gmail.com</a></p>
   <p><a href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"><span class="glyphicon glyphicon-home"></span> rue de prince-vallon</a></p>
 </div>
 <div class="col-sm-4">
   <h3 style="color: white">suivez-nous!</h3>
   <p><a href="href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"><img src="image/Facebook_Logo.png" class="img-circle" width="20" height="20"> Facebook</a></p>
   <p><a href="href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"><img src="image/twitter.png" class="img-circle" width="20" height="20">  Twitter</a></p>
   <p><a href="href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"><img src="image/insta.png" class="img-circle" width="20" height="20"> Instagram</a></p>
 </div>
 <div class="col-sm-4">
   <h3><a href="index.php" style="color: white">Accueil</a> </h3>        
   <p><a href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"> Notre service</a></p>
   <p><a href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"> Références</a></p>
   <p><a href="#" data-toggle="popover" data-placement="top" data-content="Content" style="color: white"> <span class="glyphicon glyphicon-phone"></span>Contactez-vous</a></p>
 </div>
</div>


</footer>   
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

</body>

</html>

<div class="modal fade"style="color:blue"  id="dataModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel" style="text-align:center">Details de l'article <b></b></h3>
            </div>
            <div class="modal-body"  id="details_article">
                  
                <!-- content goes here -->
            </div>
        </div>
    </div>
     
    <div class="modal fade"style="color:blue"  id="dataModal1" tabindex="-1" role="dialog" aria-labelledby="modalLabel"
    aria-hidden="true"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span
                        class="sr-only">Close</span></button>
                <h3 class="modal-title" id="lineModalLabel" style="text-align:center">Details de l'article <b></b></h3>
            </div>
            <div class="modal-body"  id="details_article1">
                  
                <!-- content goes here -->
            </div>
        </div>
    </div>


      <!--Requette Ajax ------>
    <script>
 $(document).ready(function(){
      $('.view_data').click(function(){
        var id_article =$(this).attr("id");
     $.ajax({
            url:"modaleconfig.php",
            method:"post",
            data:{id_article:id_article},
            success:function(data){
                $("#details_article").html(data);
                $('#dataModal').modal('show');
            }
        }); 
      });
    });
    </script>
    