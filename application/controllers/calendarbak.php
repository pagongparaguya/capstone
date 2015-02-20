<?php	
class Calendar extends CI_Controller{
public function display($year=NULL,$month=NULL){
$this->load->model("calendar_model");
/*$this->calendar_model->generate($year,$month);*/
	if(!$year){
	$year=date('Y');
	}
	if(!$month){
	$month=date('m');
	}
/*
if($day=$this->input->post('day')){
	$this->calendar_model->add_calendar_data(
		"$year-$month-$day",
		$this->input->post('data'));
	}*/
	if($this->input->post('date')){
	$year=(int)substr($this->input->post('date'),1);
	$month=(int)substr($this->input->post('date'),5);
	
	}

	
		
	
$data["calendar"]=$this->calendar_model->generate($year,$month);
$this->load->view("/schedule/schedule_clinic",$data);
}

public function weekday(){
$this->load->view("/schedule/schedule_clinic");
}


public function weekends(){
$this->load->view("/schedule/schedule_clinic");
}
}
?>