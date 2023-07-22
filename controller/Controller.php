<?php
	require_once 'modele/Article.php';
	require_once 'modele/Categorie.php';
	require_once 'modele/Connection.php';

	/**
	 *  controleur principal
	 */
	class Controller
	{
		
		function __construct()
		{
			
		}

		public function Accueil()
		{
			$articles = Article::getArticle();
			$categories = Categorie::getCategorie();

			require_once 'vue/accueil.php';
		}

	

		public function listeCategorie($id)
		{
			$articles = Article::getArticleCategory($id);
			$categories = Categorie::getCategorie();
			
			require_once 'vue/articleCategorie.php';
		}
	}
?>