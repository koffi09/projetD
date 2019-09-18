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

    <section>
    <h3></h3><br>
      <h3></h3><br>
      <div class="container-fluid"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
              <img src="image/bienvenue.jpg" alt="bienvenue" style="width:100%;height:300px">
            </div>

            <div class="item">
              <img src="image/solde.jpg" alt="solde" style="width:100%;height: 300px">
            </div>
    
            <div class="item">
              <img src="image/merci.jpg" alt="merci" style="width:100%;height: 300px">
            </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Précedent</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">suivant</span>
          </a>
        </div>
      </div>
    </section>
    <section id="presentation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="element">
                          <h1 style="text-align:center; color:#d0bc00 ; background-color: black" > <b>PARFUMS FEMME</b>
                          </h1>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section>
      <div class="container-fluid bg-3 text-center">    
  <h3></h3><br>
  <div class="row">
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
    <div class="col-sm-3"> 
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
    <div class="col-sm-3"> 
  
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
    <div class="col-sm-3">
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
  </div>
</div><br>

<div class="container-fluid bg-3 text-center">    
  <div class="row">
    <div class="col-sm-3">
  
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
    <div class="col-sm-3"> 
  
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
    <div class="col-sm-3"> 
  
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
    <div class="col-sm-3">
  
      <img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="parfum">
    </div>
  </div>
</div><br><br>
<ul class="pager">
    <li><a href="#">Précédent</a></li>
    <li><a href="#">suivant</a></li>
  </ul>
    </section>

<?php include("footer.php");?>
</div>
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

<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title"><b> votre commande a bien été enregistré</b></h4>
        </div>
        <div class="modal-body">
          <p>voulez-vous enregistrer la demande</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">confirmer la commande</button>
        </div>
      </div>
      
    </div>
  </div>
  
<!-- </div> -->