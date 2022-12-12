<?php
class order extends CI_Model
{
	public function insertorder($data)
	{
		$insert = $this->db->insert('orders', $data);
		return $insert;
	}
	
	public function alldata()
	{
		$query=$this->db->get('orders');
		return $query->result_array();
	}
	
	public function orderdetail($oid)
	{
		$this->db->where('oid', $oid);
		$query=$this->db->get('orders');
		return $query->result_array();
	}
	
	public function completestatus($oid,$data)
	{
		$this->db->where('oid', $oid);
		$query=$this->db->update('orders', $data);
		return $query;
	}
	
	public function updateorder($oid,$data)
	{
		$this->db->where('oid', $oid);
		$query=$this->db->update('orders', $data);
		return $query;
	}
	
	function delete_order($id){
		$this->db->where('oid', $id);
		$q=$this->db->delete('orders');
		return $q;
	}

}
?>