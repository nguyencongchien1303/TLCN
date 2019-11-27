<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

include 'UploadHandler.php';

class addProduct extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('product_model');
		$ketqua = $this->product_model->getAllData();
		$ketqua = array("mangketqua" => $ketqua);

		$this->load->view('admin/addProduct_view',$ketqua);
	}
	public function add_product()
	{
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$priceDiscount = $this->input->post('priceDiscount');
		$amount = $this->input->post('amount');

		// echo "$name,$priceDiscount,$price,$amount";
		// uploadImage
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["imageProduct"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["imageProduct"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		if ($_FILES["imageProduct"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) 
		{
		    echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["imageProduct"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["imageProduct"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$image = base_url()."Fileupload/". basename($_FILES["imageProduct"]["name"]);
		//$image = $this->input->post('image');
		//gọi model
		$this->load->model('product_model');
		$status = $this->product_model->insertDataProduct($name,$price,$priceDiscount,$amount,$image);
		if($status)
		{
			echo 'thành công';
		}
		else {
			echo 'chưa thành công';
		}
	}
	public function edit_product($idnhanvao)
	{
		$this->load->model('product_model');
	 	$ketqua = $this->product_model->getDataById($idnhanvao);
	 	$ketqua = array("mangketqua" => $ketqua);

	 	$this->load->view('admin/editProduct_view', $ketqua);
	}
	public function remove_product($idnhanvao)
	{
		$this->load->model('product_model');
		if($this->product_model->removeDataById($idnhanvao))
		{
			$this->load->view('admin/xoathanhcong_view');
		}
		else {
			echo 'xóa thất bại';
		}
	}
	public function updateProduct()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$priceDiscount = $this->input->post('priceDiscount');
		$amount = $this->input->post('amount');
		$category = $this->input->post('category');

		// uploadImage
		$target_dir = "Fileupload/";
		$target_file = $target_dir . basename($_FILES["imageProduct"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["imageProduct"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}
		if ($_FILES["imageProduct"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
		&& $imageFileType != "gif" ) {
		    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		    $uploadOk = 0;
		}
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    //echo "Sorry, your file was not uploaded.";
		// if everything is ok, try to upload file
		} else {
		    if (move_uploaded_file($_FILES["imageProduct"]["tmp_name"], $target_file)) {
		        echo "The file ". basename( $_FILES["imageProduct"]["name"]). " has been uploaded.";
		    } else {
		        echo "Sorry, there was an error uploading your file.";
		    }
		}
		$image = basename($_FILES["imageProduct"]["name"]);

		if($image) //nếu có ảnh upload 
		{
			$image = base_url()."Fileupload/". basename($_FILES["imageProduct"]["name"]);
		}
		else {
			$image = $this->input->post('image2');
		}

		$this->load->model('product_model');
		if($this->product_model->updataById($id,$name,$price,$priceDiscount,$amount,$image,$category))
		{
			$this->load->view('admin/updateProductSuccess_view');
		}else {
			echo 'thất bại';
		}
	}

	public function add_product_ajax()
	{
		$name = $this->input->post('name');
		$price = $this->input->post('price');
		$priceDiscount = $this->input->post('priceDiscount');
		$amount = $this->input->post('amount');
		// $image = 'http://localhost/1998collection/Fileupload/Untitled-1%20-%20Copy.png';
		$image = $this->input->post('image');
		$category = $this->input->post('category');
		//$image = $this->input->post('image');
		//gọi model
		// echo "<pre>";
		// var_dump($image);
		// echo "</pre>";
		$this->load->model('product_model');
		$status = $this->product_model->insertDataProduct($name,$price,$priceDiscount,$amount,$image,$category);
		if($status)
		{
			echo 'thành công';
		}
		else {
			echo 'chưa thành công';
		}
	}

	public function uploadfile()
	{
		$uploadfile = new UploadHandler();
	}
}

/* End of file addProduct.php */
/* Location: ./application/controllers/addProduct.php */