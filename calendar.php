<?php
	error_reporting(E_ALL);
	ini_set('display_errros', 1);

	class Calendar{
		private $month;
		private $year;
		private $days_of_week;
		private $num_days;
		private $date_info;
		private $day_of_week;

		public function __construct($month, $year, $days_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat')){
			$this->month = $month;
			$this->year = $year;
			$this->days_of_week = $days_of_week;
			$this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
			$this->date_info = getdate(strtotime('first day of', mktime(0,0,0, $this->month, 1, $this->year)));
			$this->day_of_week = $this->date_info['wday'];
		}
		
		public function show(){
			$output = '<table class="calendar">';
			$output .= '<caption>' .$this->date_info['month']. ' ' .$this->year. '<caption>';
			$output .= "<tr>";
			foreach ($this->days_of_week as $day) {
				$output .='<th class"header">' .$day. '</th>';			
			}
			$output .= '</tr><tr>';
			if($this->day_of_week > 0){
				$output .= '<td colspan ="' . $this->day_of_week. '"></td>';
			}
			$current_day = 1;
			while($current_day<= $this->num_days){
				if ($this->day_of_week == 7) {
					$this->day_of_week = 0;
					$output .= '</tr><tr>';
				}
				$endday = 15;	
				if ($current_day >= 11 && $current_day <= $endday) {
					$output .= '<td class="day" style ="background-color:green">' .$current_day. '</td>';
				}
				else{
					$output .= '<td class="day">' .$current_day. '</td>';
				}
				$current_day++;
				$this->day_of_week++;
			}
			if($this->day_of_week != 7){
				$remaining_days = 7 - $this->day_of_week;
				$output .= '<td colspan =">'. $remaining_days . '"></td>';
			}
			$output .='</tr>';
			$output .='</table>';
			echo $output;
		}
	}

?>