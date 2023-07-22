<?php
	
	class Categorie
	{
		public $id;
		public $libelle;

		

		public static function getCtagorie()
		{
			$bdd = Connection::getInstance();
			$reponse = $bdd->query('SELECT * FROM Categorie');
			$data = $reponse->fetchAll(PDO::FETCH_CLASS, 'Categorie');
			$reponse->closeCursor();
			return $data;
		}

		
	}
?>