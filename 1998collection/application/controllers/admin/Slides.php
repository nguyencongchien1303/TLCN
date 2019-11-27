<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('slides_model');
	}

	public function index()
	{
		$this->load->view('admin/addSlide_view');
	}
	public function addSlide()
	{
		//lấy dữ liệu từ trừng tên là slides_topbanner ra
		$dulieu = $this->slides_model->layDuLieuSlide();
		//giải mã json thành mảng
		$dulieu = json_decode($dulieu,true);
		if($dulieu == null)
		{
			$dulieu = array();
		}
		//lấy dữ liệu từ view về
		//lấy file thì search từ w3school
		$target_dir = "UploadImageSlide/";
		$target_file = $target_dir . basename($_FILES["slide_image"]["name"]);
		$uploadOk = 1;
		$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["slide_image"]["tmp_name"]);
		    if($check !== false) {
		        echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		$title =$this->input->post('title');
		$description = $this->input->post('description');
		$button_link = $this->input->post('button_link');
		$button_text = $this->input->post('button_text');
		$slide_image = base_url(). "UploadImageSlide/".basename($_FILES["slide_image"]["name"]);

		echo "<pre>";
		var_dump($slide_image);
		echo "</pre>";
		

		//thêm nội dung vào json bằng array push
		$motslideanh = array(
			'title' => $title,
			'description' => $description,
			'button_link' => $button_link,
			'button_text' => $button_text,
			'slide' => $slide_image
		);
		array_push($dulieu, $motslideanh);

		// echo "<pre>";
		// var_dump($dulieu);
		// echo "</pre>";

		//mã hóa mảng lại thành json
		$dulieu = json_encode($dulieu);

		//đưa dữ liệu mới vào, rồi update lại dữ liệu
		// if($this->slides_model->updateDuLieuSlide($dulieu))
		// {
		// 	$this->load->view('admin/thanhcong');
		// }
	}

}

/* End of file Slides.php */
/* Location: ./application/controllers/Slides.php */