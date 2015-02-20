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

	public function insert_new_appointment_record($data){
		$this->db->insert('appointment_record',$data);
		$this->db->where('id',$data['patient_id']);
		$arr = array('datemodified',date('Y-m-d'),
					 'lastmodifiedby',$this->session->userdata('firstname'));
		$this->db->insert('patients',$arr);
	}

	public function get_patient_appointment_record($id){
		$this->db->where('patient_id',$id);
		$q=$this->db->get('appointment_record');
		return $q->result();
	}
}

?>