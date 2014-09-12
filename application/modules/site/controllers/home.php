<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MX_Controller {

function __construct(){

parent::__construct();

}



	public function index()
	{


		$this->template->load('template','home');
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */