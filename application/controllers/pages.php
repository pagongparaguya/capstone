<?php
class Pages extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('gayatin_model');
		$this->load->model('gayatin_appointment_model');
	}

	public function index(){
		$this->gayatin_appointment_model->reset_pending();
		$this->load->view('home');
	}

	public function appointment(){
		$this->load->view('appointment');
	}

	public function about_us(){
		$this->load->view('about_us');
	}

	public function clinic_sched(){
		$this->load->view('schedule/schedule_clinic');
	}

	public function clinic_timeslots(){
		$this->load->view('schedule/schedule_timeslots');
	}

	public function add_appointment(){
		$this->load->view('appointment/appointment_add');
	}

	public function services(){
		$this->load->view('services');
	}

}?>