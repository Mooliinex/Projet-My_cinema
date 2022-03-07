<?php
include "DBconnect.php";
if(!empty($Date)){
			$reponse = $conn->query("SELECT *
            FROM movie_schedule
            INNER JOIN movie ON movie.id = movie_schedule.id_movie
			WHERE date_begin>=$Date LIKE '%$Date%' LIMIT $limit");

			while ($recherche = $reponse->fetch_assoc()){
                echo '<h2>' . $recherche['title'] . '</h2>';
                echo 'DATE DE PROJECTION: ' . $recherche['date_begin'] .' -- '. $recherche['duration'] . ' min -- ' . $recherche['director'] . ' -- ' ;
				$validation=1;
			}
			if($validation!=1){
				echo "Aucun DATE à votre recherche".'<br />';
				}
				$reponse->close();
			}
			
		