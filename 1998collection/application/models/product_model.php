<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class product_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function insertDataProduct($name,$price,$priceDiscount,$amount,$image,$category)
	{
		//xử lý và upload vào mysql
		$dulieu = array(
		    'name' => $name,
		    'price' => $price,
		    'priceDiscount' => $priceDiscount,
		    'amount' => $amount,
		    'image' => $image,
		    'category' =>$category
		);
		$this->db->insert('product', $dulieu);
		return $this->db->insert_id();
	}
	public function getAllData()
	{
		$this->db->select('*');
		$this->db->order_by('id', 'asc'); //lấy ra dữ liệu và sắp xếp từ trên xuống dưới
		$dulieu = $this->db->get('product');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function getDataById($key)
	{
		$this->db->select('*');
		$this->db->where('id', $key);
		$dulieu = $this->db->get('product');
		$dulieu = $dulieu->result_array();
		return $dulieu;
	}
	public function updataById($id,$name,$price,$priceDiscount,$amount,$image,$category)
	{
		//đóng gói các biến thành 1 cái mảng dữ liệu
		$data = array(
			'id' => $id,
		    'name' => $name,
		    'price' => $price,
		    'priceDiscount' => $priceDiscount,
		    'amount' => $amount,
		    'image' => $image,
		    'category' => $category
		);
		$this->db->where('id', $id);
		return $this->db->update('product', $data);
	}
	public function removeDataById($key)
	{
		$this->db->where('id', $key);
		return $this->db->delete('product');
	}
}

/* End of file product_model.php */
/* Location: ./application/models/product_model.php */