<?php
include_once("C:/xampp/htdocs/temp/config.php");
include_once("C:/xampp/htdocs/temp/Model/commande.php");
class commandeC
{
    function afficherCommande(){
        $sql="SELECT * FROM commande ORDER BY DATE" ;
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
    }
    catch(Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
public function ajouterCommande($commande){
    $sql="insert into commande(date_cmd,adresse,prix,idClient) values(:date_cmd,:adresse,:prix,:idClient)";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'date_cmd'=>$commande->getDate_cmd(),
        'adresse'=>$commande->getAdresse(),
        'prix'=>$commande->getPrix(),
        'idClient'=>$commande->getIdClient()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}

public function modifierCommande($id,$commande){
    $sql="update commande set date_cmd=:date_cmd,adresse=:adresse,prix=:prix,idClient=:idClient where id =".$id;
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute([
        'date_cmd'=>$commande->getDate_cmd(),
        'adresse'=>$commande->getAdresse(),
        'prix'=>$commande->getPrix(),
        'idClient'=>$commande->getIdClient()
        ]);
        
    }
        catch(Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
}




public function afficherCommandeDetail(int $rech1)
    {
        $sql="select * from commande where id=".$rech1."";
        
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch(Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
public function supprimerCommande($id)
{
    $sql = "DELETE FROM commande WHERE id=".$id."";
    $db = config::getConnexion();
    $query =$db->prepare($sql);
    
    try {
        $query->execute();
    }
    catch(Exception $e){
        die('Erreur: '.$e->getMessage());

    }
}
}

?>