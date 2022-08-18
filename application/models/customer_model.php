<?php
class customer_model extends CI_Model{

	public function new_customer($data)
	{
		return $this->db->insert('new_customers', $data);
	}

	public function getcustomer_data()
	{
		$this->db->select('*');
		$this->db->from('new_customers');
		$this->db->limit('10');
		$this->db->order_by('id','DESC');
		$query = $this->db->get();
		return $query->result();
	}

	public function deleteCustomer_details($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('new_customers');
	}

	public function get_customerData($id)
	{
		$this->db->where('id',$id);
		$query = $this->db->get('new_customers');
		return $query->result();
	}

}
?>