<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_CI extends CI_Controller{
    public function index(){
        //loading the model
		$this->load->model('Schedule_model');
		//Storing the return values of the display function in data array 
		$data['tbl'] = $this->Schedule_model->display();
		//passing the data array to the view 
		$this->load->view('public_view',$data);
	
	// 	$res = $this->Schedule_model->display();

	// 	// var_dump($res);
	// 	// die;
	// 	$data = array(
	// 		// $date  => $Description,
	// 		// 7  => 'http://example.com/news/article/2006/06/07/',
	// 		// 13 => 'http://example.com/news/article/2006/06/13/',
	// 		// 26 => 'http://example.com/news/article/2006/06/26/'
	// );

	// 	foreach($res as $row){
	// 		// var_dump($row['Description']);	
	// 		$date  = strtotime($row['Date']);
	// 		$day1   = intval(date('d',$date));
	// 		$month1 = intval(date('m',$date));
	// 		$year1  = intval(date('Y',$date));
	// 		if(($month1== date('m')) && ($year1 == date('y') ) ){
	// 			$data['arr'][] = array($day1 => $row['Description']);
	// 		// $data[$day]=$row['Description'];
	// 		}
			
	// 	}

		// // var_dump($data);
		// // die;
		
		
		// $prefs = array(
		// 	'start_day' => 'monday',
		// 	'month_type' => 'long',
		// 	'day_type' => 'short'
		// );

		// $this->load->library('calendar',$prefs);
		// // $data 
		// // $year = 2019;
		// // $month = 6;
		// echo $this->calendar->generate(date('y'), date('m'), $data);
		// $this->load->view('Date_View',$data);
    }
}

?>