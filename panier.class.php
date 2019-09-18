<?php
 class Panier{
 private $BD;
 public function __construct($BD){
     // si la session existe on la demarre//
  if(!isset($_SESSION)){
         session_start();
        }
  if(!isset($_SESSION['panier'])){
        $_SESSION["panier"] = array();
      }
   $this->BD = $BD;
      //diminuer element dans le panier
   if(isset($_GET['delPanier'])){
         $this->del($_GET['delPanier']);
      }
  }
    
   //  fonction ajouter au panier //
  public function addpanier($product_id){
       //  si le produit existe deja il faut l'incrémenter//
       if(isset($_SESSION['panier'][$product_id])){
          
        $_SESSION['panier'][$product_id]=$_SESSION['panier'][$product_id]+1;
        }else{
         $_SESSION["panier"][$product_id] =1; //initialiser le panier en session au moin 1 produit//
        }
    }
  //sous-total produit //
  public  function soustotalProd(){
    $totale =0;
    $ids = array_keys($_SESSION["panier"]);
      if(empty($ids)){
        $product= array() ;//revient à un tableau vide après suppression //
      }else{
     $chaine = implode(',', $ids);//  recuperer les element en une chaine
     $product= $this->BD->query("SELECT * FROM produits WHERE id_prod IN (',',$chaine)");
      }
     foreach($product as $products){
       $totale+= $products->prixProduit*$_SESSION['panier'][$products->id_prod];//  totale du produit//
    }
  return $totale;
}
  
 // Le nombre d'élément dans le panier est compté//
public function countPanier(){
  return array_sum($_SESSION['panier']);
 }

 //  totaGeneral produit //
public  function TotalGeneral(){
  $totalG =0;
  $soustot=0;
  $fraisLivr= 1500;
  $ids = array_keys($_SESSION["panier"]);
    if(empty($ids)){
      $product= array() ;//revient à un tableau vide après suppression //
    }else{
   $chaine = implode(',', $ids);//  recuperer les element en une chaine
   $product= $this->BD->query("SELECT * FROM produits  WHERE id_prod IN (',',$chaine)");
    }
   foreach($product as $products){
      $soustot+= $products->prixProduit*$_SESSION['panier'][$products->id_prod];
    $totalG=$soustot+$fraisLivr; //  totale du produit//
  }
return $totalG;
}

// fonction pour supprimer l'id du produit//
    public function del($product_id){   
      unset($_SESSION["panier"][$product_id]);
    }
  
  } 

?>