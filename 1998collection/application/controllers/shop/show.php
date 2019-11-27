<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class show extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('product_model');
		$ketqua = $this->product_model->getAllData();
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('shop/index',$ketqua);
	}
	public function shop()
	{
		$this->load->model('product_model');
		$ketqua = $this->product_model->getAllData();
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('shop/shop',$ketqua);
	}
	public function product_single()
	{
		$this->load->view('shop/product_single');
	}
	public function cart()
	{
		$this->load->view('shop/cart');
	}
	public function checkout()
	{
		$this->load->view('shop/checkout');
	}
	public function about()
	{
		$this->load->view('shop/about');
	}
	public function blog()
	{
		$this->load->view('shop/blog');
	}
	public function contact()
	{
		$this->load->view('shop/contact');
	}
	// public function addProduct()
	// {
	// 	$this->load->view('addProduct_view');
	// }


}

/* End of file show.php */
/* Location: ./application/controllers/show.php */