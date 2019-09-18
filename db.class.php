<?php
 class DB {
    private $hostname ="localhost";
    private $username ="root";
    private $password="";
    private $database ="e-commerce";
    private $db;
   
    public   function  __construct($hostname = null, $username = null,  $password = null, $database = null)  {
       if($hostname!=null){
          $this->hostname =$hostname;
          $this->username = $username;
          $this->password=$password;
          $this->database=$database;
       }
       try{
         $this->db = new PDO("mysql:host=".$this->hostname.";dbname=".$this->database,$this->username,$this->password,array(
                     PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
                     PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
                    
                ));

     } catch(PDOExeption $e){
             echo 'Erreur'.$e->getMessage().'<br>';
             echo'numero'.$e->getCode();
               }
 }

 public function query($sql, $data=array()){
   $req= $this->db->prepare($sql);
    $req->execute($data);
   return $req->fetchAll(PDO::FETCH_OBJ);

  
}

 public function query1($sql, $data=array()){
    $req1= $this->db->prepare($sql);
    $req1->execute($data);
    return $req1->fetch(PDO::FETCH_OBJ);
 }


public function verification($sql,$data=array()){
     $req=$this->db->prepare($sql);
     $req->execute($data);
   return $req->rowCount();
   }
    
public function inscription($sql,$data=array()){
       $req=$this->db->prepare($sql);
       $req->execute($data); 
    }

    public function update($sql,$data=array()){
      $req=$this->db->prepare($sql);
      $req=execute($data);
}

 }
?>
