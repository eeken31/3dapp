<?php

class Controller {

    public $load;
    public $model;

    function __construct($pageURI = null){

        $this->load = new Load();
        $this->model = new Model();
        $this->$pageURI();
    }

    function home(){
        $this->load->view('viewMain');
    }

    function apiCreateTable() {
        $data = $this->model->dbCreateTable();
        $this->load->view('viewMessage', $data);
    }
    function apiInsertData() {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }
    function apiMain()  {
		$this->load->view('viewMain');	
	}
    function apiGetCokeData()   {
		$data = $this->model->dbGetData();
		echo json_encode($data);
	}  
}
?>