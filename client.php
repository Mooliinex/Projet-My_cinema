<?php
include "DBconnect.php";
if(!empty($NomMembre)){
    $reponse = $conn->query("SELECT * FROM user WHERE lastname LIKE '%$NomMembre%' LIMIT $limit");
    while ($recherche = $reponse->fetch_assoc()){
        
        echo 'NOM: ' . $recherche['lastname'] .' -- '.'PRENOM: '. $recherche['firstname'] . ' -- ' . $recherche['email']. ' -- ' .  $recherche['city'] . ' -- ' .  $recherche['country']. '<br />';
     
        $validation=1;
    }
    $reponse->close();
    if($validation!=1){
        echo "Aucun NOM à votre recherche";
    }
    
}

if(!empty($PrenomMembre)){
    $reponse = $conn->query("SELECT * FROM user WHERE firstname LIKE '%$PrenomMembre%' LIMIT $limit");
    while ($recherche = $reponse->fetch_assoc()){
        
        echo 'PRENOM: ' . $recherche['firstname'] .' -- '.'NOM: '. $recherche['lastname'] . ' -- ' . $recherche['email']. ' -- ' .  $recherche['city'] . ' -- ' .  $recherche['country']. '<br />';
     
        $validation=1;
    }
    $reponse->close();
    if($validation!=1){
        echo "Aucun PRENOM à votre recherche";
    }
    
}

