
<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "cinema";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }    

    $limit = $_GET['limit'];
    $Genre = $_GET['genre'];
    $Date = $_GET['date'];
    $Titre = $_GET['film'];
    $NomMembre = $_GET['nom'];
    $PrenomMembre = $_GET['prenom'];
    $Distributor = $_GET['distrib'];

 if (empty($Titre) && empty($Genre) && empty($Distributor) && empty($NomMembre) && empty($PrenomMembre) && empty($Date)) {
    echo '...';
}
    ?>