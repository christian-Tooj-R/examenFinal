<?php ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 /*
		functin de test
	 */
	public function getInfo(){
		$this->load->model('produit');
		$data = array();
		//$data['info'] = $this->produit->get_info();
		echo " mety";
		//$this->load->view('affiche2', $data);
	}
	 public function accueil($pseudo = ''){
		$data = array();
		$data['pseudo'] = $pseudo;
		$test = array();
		$test[] = "1";
		$test[] = "2";
		$test[] = "3";
		$test[] = "4";
		$data['liste'] = $test;
		$this->load->helper('html_helper');
		$this->load->helper('url_helper');
		
		$this->load->view('affichage', $data);
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}		

	public function bonjour($pseudo =''){
	
		$this->load->view('Salut à toi : ' . $pseudo);
	}
}
