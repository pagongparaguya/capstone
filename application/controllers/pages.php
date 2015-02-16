<?php
class Pages extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('gayatin_model');
		$this->load->model('gayatin_appointment_model');
	}

	public function index(){
		// $this->gw_send_sms("APIPOOJ52WDFQ", "APIPOOJ52WDFQPOOJ5", "09334079445", "09059217526", "wa sa GG");
		// $this->gw_send_sms("APIJXX2UJO2IJ", "APIJXX2UJO2IJJXX2U", "GDC", "09334079445", "Ohoy Fresh Meat !!!");
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

	function gw_send_sms($user,$pass,$sms_from,$sms_to,$sms_msg)  
            {           
                        $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
                        $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
                        $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
                        $url = "http://gateway.onewaysms.com.au:10001/".$query_string;       
                        // $fd = @implode ('', file ($url));
                        $fd =  @implode ('', file ($url));
                        if ($fd)  
                        {                       
				    if ($fd > 0) {
					Print("MT ID : " . $fd);
					$ok = "success";
				    }        
				    else {
					print("Please refer to API on Error : " . $fd);
					$ok = "fail";
				    }
                        }           
                        else      
                        {                       
                                    // no contact with gateway                      
                                    $ok = "fail";       
                        }           
                        return $ok;  
            }  

}?>