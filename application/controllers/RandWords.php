<?php 

session_start();


class Randwords extends CI_Controller
{
	public $Word_Gen = "";

	public function Index(){
		$this->load->view('Word_Gen');

	}

	public function Generate(){
		if($this->session->userdata('counter')){
    		$counter = $this->session->userdata('counter');
    		$this->session->set_userdata('counter', $counter + 1);
       	}
    	else {
    	$this->session->set_userdata('counter', 1);
      	}
		$counter = $this->session->userdata('counter');

		$charachterArray = [
		"1",
		"2",
		"3",
		"4",
		"5",
		"6",
		"7",
		"8",
		"9",
		"0",
		"A",
		"B",
		"C",
		"D",
		"E",
		"F",
		"G",
		"H",
		"I",
		"J",
		"K",
		"L",
		"M",
		"N",
		"O",
		"P",
		"Q",
		"R",
		"S",
		"T",
		"U",
		"V",
		"W",
		"X",
		"Y",
		"Z",
		];

		for ($i = 0; $i < 14; $i++){
		$this->Word_Gen .= $charachterArray[rand(0, count($charachterArray)-1)];
		};

		$this->load->view('Word_Gen', ['randword' => $this->Word_Gen, 'count' => $counter]);
	}
	    public function reset() {
    	$this->session->sess_destroy();
        $this->load->view('Word_Gen');
    }
}

 ?>