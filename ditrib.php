<?php
include "DBconnect.php";
if(!empty($Distributor)){
			$reponse = $conn->query("SELECT *
            FROM distributor
            INNER JOIN movie ON movie.id_distributor = distributor.id
            WHERE distributor.name LIKE '%$Distributor%' LIMIT $limit");

			while ($recherche = $reponse->fetch_assoc()){
                echo '<h2>' . $recherche['title'] . '</h2>';
                echo 'DISTRIBUTOR: ' . $recherche['name'] .' -- '. $recherche['duration'] . ' min -- ' . $recherche['director'] . ' -- ' ;
				$validation=1;
			}
			if($validation!=1){
				echo "Aucun DISTRIBUTOR à votre recherche".'<br />';
				}
				$reponse->close();
			}
			