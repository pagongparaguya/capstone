<?php
class Gayatin_record_model extends CI_Model{

	public function get_services($type){
		$this->db->where('procedure_type',$type);
		$q = $this->db->get('services');
		return $q->result();
	}

	public function get_price($name){
		$this->db->where('dental_procedure',$name);
		$q = $this->db->get('services');
		return $q->row();
	}
}

?>