<?php
	
	class Article
	{
		public $id;
		public $categorie;
		public $titre;
		public $contenu;
	

		public static function getArticle()
		{
			$bdd = Connection::getInstance();
			$data = $bdd->query('SELECT * FROM Article');
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'Article');
			$data->closeCursor();
			return $articles;
		}



		public static function getArticleCategorie($id)
		{
			$bdd = Connection::getInstance();
			$data = $bdd->query('SELECT * FROM Article WHERE categorie = '.$id);
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'Article');
			$data->closeCursor();
			return $articles;
		}
	}
?>