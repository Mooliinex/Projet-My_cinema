
<?php
include "DBconnect.php";
if (!empty($Titre)) {
    $reponse = $conn->query("SELECT * FROM movie WHERE title LIKE '%$Titre%' LIMIT $limit");
    while ($recherche = $reponse->fetch_assoc()) {
        echo '<h2>' . $recherche['title'] . '</h2>';
        echo ' ' . $recherche['director'] .' -- '. $recherche['duration'] . ' min -- ' . $recherche['release_date'] . ' -- ' ;
        $validation = 1;
    }
    if ($validation != 1) {
        echo "Aucune recherche trouver";
    }
    
    $reponse->close();
}
