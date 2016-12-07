<?php 


namespace Model;

use \PDO;
use W\Model\Model;

class ArtisteAccueilModel extends Model
{
	public function sixArtistes(){
		$requete = "SELECT 	illustration, nom_artiste FROM artiste ORDER BY nom_artiste ASC LIMIT 0,6  ";

		$stmt = $this->dbh->query($requete);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}