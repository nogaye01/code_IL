<?php
	require_once 'controller/Controller.php';

	$controller = new Controller();

	if (!isset($_GET['action']))
	{
		$controller->Accueil();
	}
	else
	{
		 if (strtolower($_GET['action']) === 'categorie')
		{
			if (isset($_GET['id']))
			{
				$controller->listeCategorie($_GET['id']);
			}
			
		}
		else
		{
			$controller->Accueil();
		}
	}
?>