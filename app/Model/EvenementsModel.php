<?php 


namespace Model;

use \PDO;
use W\Model\Model;

class EvenementsModel extends Model
{
	public function quatreArtistes(){

		$requete = "SELECT evenement.*, artiste. nom_artiste FROM evenement JOIN artiste 
		 ON evenement. id_artiste = artiste.id LIMIT 0,4";

		$stmt = $this->dbh->query($requete);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}