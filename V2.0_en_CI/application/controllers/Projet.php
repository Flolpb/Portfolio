<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projet extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Projet_model', 'projetManager');
	}

	public function projet($id)
	{
		// Traitement de la donnée :
		$projet = $this->projetManager->getProjet('*', 'id', $id, 'row');

		if ($projet) {
			$data['projet'] = $projet;
		}

		//Chargement des données
		$data['title'] = 'Description du Projet';
		$data['pageName'] = 'portfolio_projet/main';

		$this->load->view('front_office/start', $data);
	}

}

