<?php
class calendar_model extends CI_Model{
var $conf;
function __construct(){
	parent::__construct();
	$this->load->helper('date');
$this->conf=array(
'start_day'=>'monday',
'show_next_prev'=>TRUE,
'next_prev_url'=>base_url().'calendar/display'
);
$this->conf['template'] = '

   {table_open}<table border="0" cellpadding="0" cellspacing="0" class="calendar" >{/table_open}

   {heading_row_start}<tr>{/heading_row_start}

   {heading_previous_cell}<th><div class ="leftarrow"><a href="{previous_url}">&lt;&lt;</a></div></th>{/heading_previous_cell}
   {heading_title_cell}<th colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th><div class ="rightarrow"><a href="{next_url}">&gt;&gt;</a></div></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr class = "days">{/cal_row_start}
   {cal_cell_start}<td  id="day" class ="day" >{/cal_cell_start}

   {cal_cell_content}
   <div class ="day_num">{day}</div>
   <div class="content hidden" 	>{content}</div>
   {/cal_cell_content}
   
   {cal_cell_content_today}
   <div class="day_num highlight" >{day}</div>
   <div class="content hidden"  >{content}</div>
   {/cal_cell_content_today}

   {cal_cell_no_content}<div class="day_num">{day}</div>{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="day_num highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';


}
public function getdays(){
$query=$this->db->select('date,status')->from('closed_dates')->get();
$ctr=0;
$closed=array();
foreach($query->result() as $row){
	if($row->status=="true" && $row->date >= date("Y-m-d")){
		$closed[$ctr]=$row->date;
			$ctr=$ctr+1;
		}
	}
	return array("closed"=>$closed,"ctr"=>$ctr);
}



/*public function getdays2($year,$month){
$query=$this->db->select('date,status')->from('closed_dates')->like('date',"$year-$month",'after')->get();
$ctr=0;
	$closed=array();
	$closed[$ctr]=0;
	foreach($query->result() as $row){
			if($row->status=="true"){
		$closed[$ctr]=substr($row->date,8,2);
		$ctr=$ctr+1;
		}
	}
return array("closed"=>$closed,"ctr"=>$ctr);
}*/

public function get_calendar_data($year,$month){
	$query=$this->db->select('date,status')->from('closed_dates')->like('date',"$year-$month",'after')->get();
		$ctr=0;
		
	$closed=array();
	$closed[$ctr]=0;
	foreach($query->result() as $row){
			if($row->status=="true"){
		$closed[$ctr]=(int)substr($row->date,8,2);
		$ctr=$ctr+1;
		}
	}
	
	
	$cal_data=array();
	$close="CLOSED";
	$max=days_in_month($month,$year);
		for($day=1,$itr=0;$day<=$max;$day++){
					
						
				
						
				$dt=date_format(date_create((string)$year.'-'.(string)$month.'-'.(string)$day), 'l');
						$nowdate=$year.'-'.$month.'-'.$day;
						
						
						$redirect=base_url()."appointment/new_appointment/$dt/".$nowdate;
							
						if( $closed[$itr]==$day || strcmp($dt,"Sunday")==0){
								$cal_data[$day]=$close;
									if($itr<$ctr-1 && $closed[$itr]==$day)
										$itr=$itr+1;
							}
						
						else
													$cal_data[$day]=$redirect;
														
				  
				  
		}
						 
						
						
							

		/*for($i=1;$i<=$max;$i++){
			$timestamp=strtotime(((string)$year)+"-",((string)$month)+"-",((string)$i));
			if( ($i%6==0) || ($i%7==0))
				$cal_data[$i]=base_url()."calendar/weekends";
					else
						$cal_data[$i]=base_url()."calendar/weekday";
		}	}						}*/
	return $cal_data;
}



public function add_calendar_data($date,$state){
	$data=$state;
	if($this->db->select('date')->from('closed_dates')->where('date',$date)->count_all_results()){
		$data=$state;
		$this->db->where('date',$date)
		->update('closed_dates',array(
		'date'=>$date,
		'status'=>$data
		));
	
	
	}
	else{
	
	$this->db->insert('closed_dates',array(
		'date'=>$date,
		'status'=>$data
		));
		}

}


public function generate($year,$month){
$this->load->library('calendar',$this->conf);
/*echo $this->calendar->generate($year,$month);*/;
$cal_data= $this->get_calendar_data($year,$month); 
return $this->calendar->generate($year,$month,$cal_data);
}


}
?>