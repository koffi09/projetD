<?php 
 include("models/panier.class.php");
 include("config/db.class.php");
 $BD = new DB();
 $Panier = new Panier($BD);
  $json=array('error'=>true);
  if(isset($_GET['r'])){
       $product=$BD->query("SELECT id_prod FROM produits WHERE id_prod=:id_prod",array("id_prod"=>$_GET['r']));
       if(empty($product)){
         $json['message']="le produit n'existe pas!";
       }
        // appelle à la fonction aapanier pour ajouter l'id du produit en session; 
       $Panier->addpanier($product[0]->id_prod);
       $json['error'] =false;
       $json['countPanier']=$Panier->countPanier();
       $json['message']='Le produit à bien été ajouter à votre  panier</a>';
  }else{
   $json['message']='Aucun produit selectionner';
 }
 echo (json_encode($json));
   ?>
   
   