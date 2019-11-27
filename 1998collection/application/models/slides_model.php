<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class slides_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function layDuLieuSlide()
	{
		$this->db->select('*');
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		$dl =$this->db->get('slides');
		$dl = $dl->result_array();

		//foreach này để chỉ lấy ra cái cột giatrithuoctinh
		foreach ($dl as $value) {
			$tamthoi = $value['giatrithuoctinh'];
		}

		return $tamthoi;

		// echo "<pre>";
		// var_dump($tamthoi);
		// echo "</pre>";
	}
	public function updateDuLieuSlide($dulieucanupdate)
	{
		$chuanbidulieu = array(
			'tenthuoctinh' => 'slides_topbanner',
			'giatrithuoctinh' => $dulieucanupdate
		);
		$this->db->where('tenthuoctinh', 'slides_topbanner');
		return $this->db->update('slides', $chuanbidulieu);
	}

}

/* End of file slides_model.php */
/* Location: ./application/models/slides_model.php */