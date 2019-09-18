
<?php
include("models/panier.class.php");
include("config/db.class.php");
$BD =new DB();
$Panier = new Panier($BD);// initialiser la connexion à mysql dans le panier
?>