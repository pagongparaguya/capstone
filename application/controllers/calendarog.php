<?php	
class Calendar extends CI_Controller{
	
public function display($year=NULL,$month=NULL){
$this->load->model("calendar_model");
/*$this->calendar_model->generate($year,$month);*/
	if($year==NULL){
	$this->year=$year=date('Y');
	}
	if($month==NULL){
	$this->month=$month=date('m');
	}
	
/*
if($day=$this->input->post('day')){
	$this->calendar_model->add_calendar_data(
		"$year-$month-$day",
		$this->input->post('data'));
	}*/
	if($this->input->post('date')){
	$this->year=(int)substr($this->input->post('date'),1);
	$this->month=(int)substr($this->input->post('date'),5);
	
	}

	
		
	
$data["calendar"]=$this->calendar_model->generate($year,$month);
if($this->session->userdata('username')){
$data["date"]=$this->calendar_model->getdays();
}
$this->load->view("/schedule/schedule_clinic",$data);

}

public function closeday(){
 if($this->input->post('date')){
 $this->load->model("calendar_model");
 $this->calendar_model->add_calendar_data($this->input->post('date'),"true");
 }
 redirect(base_url()."calendar\display");
}

public function openday(){
if($this->input->post('date')){
 $this->load->model("calendar_model");
 $this->calendar_model->add_calendar_data($this->input->post('date'),"false")	;
}
redirect(base_url()."calendar\display");
}

public function retdays($year,$month){
$this->load->model("calendar_model");
$arr=$this->calendar_model->getdays($year,$month);
}

public function weekday(){
$this->load->view("/schedule/schedule_clinic");
}


public function weekends(){
$this->load->view("/schedule/schedule_clinic");
}
}
?>