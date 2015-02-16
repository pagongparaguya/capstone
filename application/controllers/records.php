<?php  
	Class Records extends CI_Controller {

		public function view_history_of_appointments(){
			$this->load->view('appointment_record/appointment_record_history');
		}		

		public function view_appointment_record(){
			$this->load->view('appointment_record/appointment_record_view');
		}
	}	
?>