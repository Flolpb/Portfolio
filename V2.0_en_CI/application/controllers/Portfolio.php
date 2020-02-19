<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('projet_model', 'projetManager');
	}
	public function index()
	{


		$data['pageName']= 'portfolio/main';
		$data['title'] = 'Portfolio';
		$data['projets'] = $this->projetManager->getProjet('*');


		$this->load->view('front_office/start', $data);
	}




}
