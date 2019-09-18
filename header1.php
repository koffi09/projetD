<?php include("include.php");?>
<?php include("connec.php");?>

<header >
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
                            <a class="navbar-brand" href="#" style="color:aliceblue;font-size:20px"> </a>
                        </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php" style="color:#d0bc00;font-size:20px">ACCUEIL</a></li>
                                <li class="dropdown">
                                    <a href="#"style="color:#d0bc00;font-size:20px"  class="dropdown-toggle" data-toggle="dropdown">PARFUMS <b
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
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00;font-size:20px"  data-toggle="dropdown">SENTEURS<b
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
                                    <a href="#" class="dropdown-toggle" style="color:#d0bc00;font-size:20px"  data-toggle="dropdown">MARQUES<b
                                            class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="marquee.php">Interieur du pays</a></li>
                                        <li><a href="marquei.php">Extérieures du pays</a></li>
                                        <!-- <li><a href="#">Something else here</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">Separated link</a></li>
                                          <li class="divider"></li>
                                          <li><a href="#">One more separated link</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown" style="text-align: center; margin-top: 10px">
                                   <form action="marecherche.php"   method="POST">
                                <input class="form-control " name="motcle" type="text" placeholder="Rechercher un produit" style="width: 200px" style="color: black">
                              </li>
                              <li class="dropdown" style="margin-top: 10px">
                                <button style="width: 150px" class="btfind" name="btsubmit"  type="submit" class="btn btn-primary">Recherche </button></a>
                              </li>
                         </form>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="panier.php" style="color:#d0bc00;font-size:20px;" ><span
                                class="glyphicon glyphicon-shopping-cart" style="color:yellowgreen"></span> <span id="countPanier">[<?=$Panier->countPanier()?>]Panier</span></a></li>
                                <li><a href="inscriptionconnection.php"style="color:#d0bc00;font-size:20px" ><i class="glyphicon glyphicon-user"></i> CONNEXION</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </div>
                    <!-- /.container-fluid -->
                </nav>
            </div>
</header>