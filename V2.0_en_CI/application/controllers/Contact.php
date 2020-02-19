<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Message_model','msgManager');
		$this->load->library('email');
	}

	public function index()
	{
		$data['pageName']= 'contact/main';
		$data['title'] = 'Me Contacter';
		$this->load->view('front_office/start', $data);
	}

	public function sendMsg(){

		$this->load->library('email');

		$dataRecues = $this->input->post();

		$rulesArray = array(
			array(
				'field' => 'inputPrenom',
				'label' => 'Prénom',
				'rules' => 'trim|required|min_length[2]'
			),
			array(
				'field' => 'inputNom',
				'label' => 'Nom',
				'rules' => 'trim|required|min_length[3]'
			),
			array(
				'field' => 'inputMail',
				'label' => 'Mail',
				'rules' => 'trim|required|valid_email'
			),
			array(
				'field' => 'inputMessage',
				'label' => 'Message',
				'rules' => 'trim|required|min_length[10]'
			)
		);

		$this->form_validation->set_rules($rulesArray);

		if ($this->form_validation->run() === FALSE) {
			$errorsArray = validation_errors();

			header('Content-type:application/json');
			echo json_encode(array(
				'error' => $errorsArray
			));

		} else {



			$data['prenom'] = $this->input->post('inputPrenom');
			$data['nom'] = $this->input->post('inputNom');
			$data['mail'] = $this->input->post('inputMail');
			$data['message'] = $this->input->post('inputMessage');


			$CI = get_instance();
			$CI->load->library('email');
			$config = array();
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.googlemail.com';
			$config['smtp_port'] = 465;
			$config['smtp_user'] = 'email';
			$config['smtp_pass'] = 'motdepasse';

			$CI->email->initialize($config);

			$CI->email->from($data['mail'], $data['prenom'].' '.$data['nom']);
			$CI->email->to('chabin.florent@gmail.com');
			$CI->email->subject('Email de ton site');
			$CI->email->message($data['message']);
			$CI->email->send(TRUE);
			if($this->email->send()){
				echo json_encode(array(
					'success' => 'Votre message a bien été par mail !'
				));
			}else{
				echo json_encode(array(
					'error' => 'Votre message n\'a pas été envoyé par mail !'
				));
			}


			$this->db->insert('contact', $data);

			if ($this->db->affected_rows() > 0) {
				echo json_encode(array(
					'success' => 'Votre message a bien été envoyé !'
				));
			} else {
				echo json_encode(array(
					'error' => 'Erreur lors de l\'envoi du message !'
				));
			}


		}




	}




}
