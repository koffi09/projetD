<?php include("include.php");?>
<header>

<div class="container-fluid">
            <div class="contenuentete" style="background-image: url('image/dore.jpg')">
                <div class="row">
                    <div class="col-md-6  col-lg-6 col-sm-6 col-xs-6 imageentete">
                        <img src="image/logo1.png" style="width:400px" height="150px">
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
                                <li class="active"><a href="index.php" style="color:#d0bc00;font-size:20px">ACCUEIL</a></li>
                                <li class="dropdown">
                                    <a href="#"style="color:#d0bc00 ;font-size:20px" class="dropdown-toggle" data-toggle="dropdown">PARFUMS <b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li style="font-size:20px" ><a href="homme.php">Hommes</a></li>
                                        <li style="font-size:20px" ><a href="femme.php">Femmes</a></li>
                              
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00;font-size:20px" data-toggle="dropdown">SENTEURS<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li style="" ><a href="maison.php">Maisons</a></li>
                                        <li style="" ><a href="voiture.php">Voitures</a></li>
                                     
                                    </ul>
                                </li>
                                <?php if(isset($_SESSION['id_client'])&&!empty($_SESSION['id_client'])){
                                    $name=$_SESSION['nomClient'];
                                  }
                                  ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00 ;font-size:20px"  data-toggle="dropdown">MARQUES<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li style="font-size:20px" ><a href="marquee.php">Interieur du pays</a></li>
                                        <li style="font-size:20px" ><a href="marquei.php">Extérieures du pays</a></li>
                                     
                                    </ul>
                                </li>
                                <li class="dropdown" style="text-align: center; margin-top: 10px">
                                <input class="form-control" type="text" placeholder="Rechercher un produit" style="width: 200px" style="color: black">
                              </li>
                              <li class="dropdown" style="margin-top: 10px">
                                <button style="width:200px"  type="submit" class="btn btn-primary">Recherche </button></a>
                              </li>
                              <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00;font-size:20px"  data-toggle="dropdown">Bonjour,<?=$name;?><b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu" style="width=300px;height=300px">
                                        <li style="font-size:20px"><a href="profils.php">VOTRE COMPTE</a></li>
                                        <li style="font-size:20px" ><a href="">VOS COMMANDES</a></li>
                                        <li style="font-size:20px" ><a href="marquei.php">DÉCONNEXION </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="panier.php" style="color:#d0bc00" ><span
                                class="glyphicon glyphicon-shopping-cart" style="color:yellowgreen"></span> <span id="countPanier"style="font-size:20px">[<?=$Panier->countPanier()?>]Panier</span></a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
</header>

