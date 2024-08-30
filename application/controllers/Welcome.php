<?php

class Welcome extends CI_Controller {

	public function index()
	{
	
		$mesin     = $this->example_model->getAllMesin();
		$operator  = $this->example_model->getAllOperator();
		$site      = $this->example_model->getAllSite();
		$activity  = $this->example_model->getAllActivity();
		$month     = $this->example_model->getAllMonth();

		
		$data = [
			'mesin'    => $mesin,
			'operator' => $operator,
			'site'     => $site,
			'activity' => $activity,
			'month'    => $month,
		];
		
		$this->load->view('index', $data);
	}

	public function fetch_data() {
		$mesin = $this->input->get('mesin');
		$month = $this->input->get('month');
		$site = $this->input->get('site');
		$operator = $this->input->get('operator');
		$activity = $this->input->get('activity');
	
		$this->db->select('*');
		$this->db->from('transaction');
	

		if($mesin) {
			$this->db->where('mesin', $mesin);
		}
		if($month) {
			$this->db->where('MONTH(submitted_when)', $month);
		}
		if($site) {
			$this->db->where('site_code', $site);
		}
		if($operator) {
			$this->db->where('submitted_by', $operator);
		}
		if($activity) {
			$this->db->where('activity', $activity);
		}
	
		$clone_db = clone $this->db;
		$recordsTotal = $clone_db->count_all_results();
	
		$length = $this->input->get('length');
		$start = $this->input->get('start');
		if($length != -1) {
			$this->db->limit($length, $start);
		}
	
		$query = $this->db->get();
		$data = array();
	
		if($query->num_rows() > 0){
			foreach ($query->result_array() as $key => $row) {
				$row['no'] = $key+1;
				$row['submitted_by'] = $row['submitted_by'];
				$row['submitted_when'] = date('d F Y', strtotime($row['submitted_when']));
				$row['site_code'] = $row['site_code'];
				$row['activity'] = $row['activity'];
				$row['action'] = '<a href="#" class="btn btn-primary">Edit</a>';
				$row['uom'] = $row['uom'];
				$row['block'] = $row['block'];
				$row['task'] = $row['task'];
				$row['start'] = $row['start'];
				$row['end'] = $row['end'];
				$row['mesin'] = $row['mesin'];
				$row['fuel'] = $row['fuel'];
				$row['check_by'] = $row['check_by'];
				$row['when_check'] = $row['when_check'];
				$row['verified_by'] = $row['verified_by'];
				$row['verified_when'] = $row['verified_when'];
				$row['duty'] = $row['duty'];
				$row['reason'] = $row['reason'];
				$data[] = $row;
			}
		}
	
		$response = array(
			"draw" => intval($this->input->get('draw')),
			"recordsTotal" => intval($recordsTotal),
			"recordsFiltered" => intval($recordsTotal),
			"data" => $data
		);
	
		echo json_encode($response);
	}
	
	
}
