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

   {heading_previous_cell}<th><a href="{previous_url}">&lt;&lt;</a></th>{/heading_previous_cell}
   {heading_title_cell}<th class="text-center" colspan="{colspan}">{heading}</th>{/heading_title_cell}
   {heading_next_cell}<th class="pull-right"><a href="{next_url}">&gt;&gt;</a></th>{/heading_next_cell}

   {heading_row_end}</tr>{/heading_row_end}

   {week_row_start}<tr>{/week_row_start}
   {week_day_cell}<td>{week_day}</td>{/week_day_cell}
   {week_row_end}</tr>{/week_row_end}

   {cal_row_start}<tr class = "days">{/cal_row_start}
   {cal_cell_start}<td class = "day">{/cal_cell_start}

   {cal_cell_content}<div class ="day_num"><a href="{content}">{day}</a></div>{/cal_cell_content}
   {cal_cell_content_today}<div class="day_num highlight" ><a href="{content}">{day}</a></div>{/cal_cell_content_today}

   {cal_cell_no_content}{day}{/cal_cell_no_content}
   {cal_cell_no_content_today}<div class="highlight">{day}</div>{/cal_cell_no_content_today}

   {cal_cell_blank}&nbsp;{/cal_cell_blank}

   {cal_cell_end}</td>{/cal_cell_end}
   {cal_row_end}</tr>{/cal_row_end}

   {table_close}</table>{/table_close}
';


}

public function get_calendar_data($year,$month){
	/*$query=$this->db->select('date,data')->from('calendar')
	->like('date', "$year-$month", 'after')->get();
	$cal_data=array(
	);
	foreach ($query->result() as $row){
	$cal_data[substr($row->date,8,2)]=$row->data;
	}*/
	$cal_data=array();
	
	$max=days_in_month($month,$year);
		for($day=1;$day<=$max;$day++){
					
				
						
				$dt=date_format(date_create((string)$year.'-'.(string)$month.'-'.(string)$day), 'l');
						
						
							if(strcmp($dt,"Saturday")==0)
										
												$cal_data[$day]=base_url()."appointment/new_appointment/"."$dt/$year-$month-$day";
									
				else	if(strcmp($dt,"Sunday")!=0)
						
												$cal_data[$day]=base_url()."appointment/new_appointment/"."$dt/$year-$month-$day";
						
						}
						
							return $cal_data;

		/*for($i=1;$i<=$max;$i++){
			$timestamp=strtotime(((string)$year)+"-",((string)$month)+"-",((string)$i));
			if( ($i%6==0) || ($i%7==0))
				$cal_data[$i]=base_url()."calendar/weekends";
					else
						$cal_data[$i]=base_url()."calendar/weekday";
						}*/
	/*return $cal_data;*/

}

public function add_calendar_data($date,$data){
	if($this->db->select('date')->from('calendar')->where('date',$date)->count_all_results()){
		$this->db->where('date',$date)
		->update('calendar',array(
		'date'=>$date,
		'data'=>$data
		));
	
	
	}
	else{
	
	$this->db->insert('calendar',array(
		'date'=>$date,
		'data'=>$data
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