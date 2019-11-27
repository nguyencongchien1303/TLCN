<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EditSlide extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('slides_model');
		$dl = $this->slides_model->layDuLieuSlide();
		$dl = json_decode($dl,true);
		$dl = array('mangdl' => $dl);
		echo "<pre>";
		var_dump($dl);
		echo "</pre>";

		$this->load->view('admin/editSlide_view', $dl, FALSE);
	}

}

/* End of file EditSlide.php */
/* Location: ./application/controllers/EditSlide.php */