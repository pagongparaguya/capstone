<?php
class Gayatin_appointment_model extends CI_Model{

	public function reset_pending(){
		$this->db->where('date <', date("Y-m-d"));
		$this->db->delete('appointment_queue');
	}

	public function add_appointment_queue($data){
		$this->db->insert('appointment_queue',$data);
	}

	public function get_pending_appointment(){
		$this->db->distinct();
		$this->db->select('date');
		$q = $this->db->get('appointment_queue');
		return $q->result();
	}

	public function get_pending_appointment_time($date){
		$this->db->where('date',$date);
		$q = $this->db->get('appointment_queue');
		return $q->result();
	}

	public function get_upcoming_appointment_timeslots($date){
		$this->db->where('date',$date);
		$q = $this->db->get('appointment_upcoming');
		return $q->result();
	}

	public function get_upcoming_appointments(){
		$this->db->distinct();
		$this->db->select('date');
		$q = $this->db->get('appointment_upcoming');
		return $q->result();
	}

	public function get_appointment_data($id){
		$this->db->where('id',$id);
		$q = $this->db->get('appointment_queue');
		return $q->result_array();
	}

	public function add_appointment($id){
		$this->db->where('id',$id);
		$q = $this->db->get('appointment_queue');
		$row = $q->row();
		   $uname=$row->username;
		   $fname=$row->firstname;
		   $lname=$row->lastname;
		   $mname=$row->middlename;
		   $mno=$row->mobileno;
		   $tno=$row->telno;
		   $ptype=$row->patienttype;
		   $date=$row->date;
		   $time=$row->time;
			$info = array('username'=>$uname,
						  'firstname'=>$fname,
						  'lastname'=>$lname,
						  'middlename'=>$mname,
						  'mobileno'=>$mno,
						  'patienttype'=>$ptype,
						  'date'=>$date,
						  'time'=>$time);
		$message1 = "Gayatin Dental Clinic: Your appointment reservation on ".date('F j, Y',strtotime($date))." at ".$time." is successful. Please come on time. Thank you.";
		$ret = $this->send_sms("APIJXX2UJO2IJ","APIJXX2UJO2IJJXX2U","09059217526",$mno,$message1);
		if($ret == 1){
			$this->db->insert('appointment_upcoming',$info);
			$this->db->where('id',$id);;
			$this->db->delete('appointment_queue');
			$usa = $this->get_queue_list($date,$time);
			foreach($usa as $usa){
				$usaid = $usa->id;
				$usafname = $usa->firstname;
				$usamno = $usa->mobileno;
				$usadate = $usa->date;
				$usatime = $usa->time;
				$message2 = "Gayatin Dental Clinic: Your appointment reservation on ".date('F j, Y',strtotime($usadate))." at ".$usatime." is unsuccessful. Please pick another schedule. Thank you.";
				$dump = $this->send_sms("APIJXX2UJO2IJ","APIJXX2UJO2IJJXX2U","09059217526",$usamno,$message2);
				$this->db->where('id',$usaid);
				$this->db->delete('appointment_queue');
				if($dump == 0){
					echo "<script>alert('SMS notification for '".$usafname." is not delivered.');</script>";
				}
			}

		}else{
			echo "<script>alert('Not enough credit to send SMS.');</script>";
		}
	}

	public function add_successful_appointment($id){
		$this->db->where('id',$id);
		$q = $this->db->get('appointment_upcoming');
		$row = $q->row();
		$uname=$row->username;
		   $fname=$row->firstname;
		   $lname=$row->lastname;
		   $mname=$row->middlename;
		   $mno=$row->mobileno;
		   $tno=$row->telno;
		   $ptype=$row->patienttype;
		   $date=$row->date;
		   $time=$row->time;
			$info = array('username'=>$uname,
						  'firstname'=>$fname,
						  'lastname'=>$lname,
						  'middlename'=>$mname,
						  'mobileno'=>$mno,
						  'createdby' => $this->session->userdata('firstname'),
						  'lastmodifiedby' => $this->session->userdata('firstname'),
						  'datecreated' => date("Y-m-d"),
						  'datemodified' => date("Y-m-d"));

		if($ptype == 'Old Patient'){
			$this->db->where('username',$uname);
			$query = $this->db->get('patients');
			$row = $query->row();
			$odata = array('patient_id'=>$row->id,
						   'date'=>$date,
						   'time'=>$time);
			$this->db->insert('appointment',$odata);
			$this->db->where('id',$id);
			$this->db->delete('appointment_upcoming');
		}else{
			$this->db->insert('patients',$info);
			$npid = $this->db->insert_id();
			$ndata = array('patient_id'=>$npid,
						   'date'=>$date,
						   'time'=>$time);
			$this->db->insert('appointment',$ndata);
			$this->db->where('id',$id);
			$this->db->delete('appointment_upcoming');
		}

	}

	public function get_successful_appointments($id){
		$date = date("Y-m-d");
		$this->db->select('appointment.*, patients.firstname, patients.middlename, patients.lastname');
        $this->db->from('appointment');
        $this->db ->join('patients', 'appointment.patient_id = patients.id');
        $this->db ->where(array('appointment.date'=>$date,'appointment.patient_id'=>$id));
		$query = $this->db->get();
		return $query->result();
	}

	

	public function get_queue_list($date,$time){
		$this->db->where(array('date'=>$date,'time'=>$time));
		$query = $this->db->get('appointment_queue');
		return $query->result();
	}

	public function remove_pending_appointment($id){
		$this->db->where('id',$id);
		$this->db->delete('appointment_queue');
	}

	public function remove_upcoming_appointment($id){
		$this->db->where('id',$id);
		$this->db->delete('appointment_upcoming');
	}

	public function check_scheduled_appointment($data){
		$this->db->where(array('date'=>$data['date'],'time'=>$data['time']));
		$query = $this->db->get('appointment');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_onqueue($date,$time){
		$this->db->where(array('date'=>$date,'time'=>$time));
		$query = $this->db->get('appointment_queue');
		return $query->num_rows();
	}

	public function check_username($uname){
		$this->db->where('username',$uname);
		$query = $this->db->get('appointment_queue');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_duplicate_pending_appointment($uname,$date){
		$this->db->where(array('date'=>$date,'username'=>$uname));
		$query = $this->db->get('appointment_queue');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_duplicate_upcoming_appointment($uname,$date){
		$this->db->where(array('date'=>$date,'username'=>$uname));
		$query = $this->db->get('appointment_upcoming');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_username_upcoming($uname){
		$this->db->where('username',$uname);
		$query = $this->db->get('appointment_upcoming');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_duplicate_pending_appointment_newu($uname,$date){
		$this->db->where(array('date'=>$date,'username'=>$uname));
		$query = $this->db->get('appointment_queue');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_duplicate_pending_appointment_newp($data,$date){
		$this->db->where(array('date'=>$data['date'],'firstname'=>$data['firstname'], 'lastname'=>$data['lastname'], 'middlename'=>$data['middlename']));
		$query = $this->db->get('appointment_queue');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_duplicate_upcoming_appointment_newu($uname,$date){
		$this->db->where(array('date'=>$date,'username'=>$uname));
		$query = $this->db->get('appointment_upcoming');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function check_duplicate_upcoming_appointment_newp($data,$date){
		$this->db->where(array('date'=>$data['date'],'firstname'=>$data['firstname'], 'lastname'=>$data['lastname'], 'middlename'=>$data['middlename']));
		$query = $this->db->get('appointment_upcoming');
		if($query->num_rows()>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function get_timeslots($day){
		if($day == 'Saturday'){
			$this->db->where('type','e');
		}
		else{
			$this->db->where('type','d');
		}
		$query = $this->db->get('timeslot');
		return $query->result();
	}

	public function get_reserved($date){
		$this->db->where('date',$date);
		$query = $this->db->get('appointment_upcoming');
		return $query->result();
	}

	public function send_sms($user,$pass,$sms_from,$sms_to,$sms_msg){           
        $query_string = "api.aspx?apiusername=".$user."&apipassword=".$pass;
        $query_string .= "&senderid=".rawurlencode($sms_from)."&mobileno=".rawurlencode($sms_to);
        $query_string .= "&message=".rawurlencode(stripslashes($sms_msg)) . "&languagetype=1";        
        $url = "http://gateway.onewaysms.com.au:10001/".$query_string; 
        $fd =  @implode ('', file ($url));
        if ($fd){                       
    		if ($fd > 0){
				$ok = "1";
		    }        
		    else {
				$ok = "0";
		    }
        }           
        else{                                           
            $ok = "0";       
        }           
        return $ok;  
    }  
}