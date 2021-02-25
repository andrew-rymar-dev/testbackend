<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient extends CI_Controller {

	public function index()
	{
        
	}

    public function read_patient(){
        $patientInfo = array(
            'patientName'=> 'name',
            'birthday'=> '1980-03-05',
            'patientKey'=> $this->input->get('patientKey', TRUE)
        );
        echo json_encode($patientInfo);
    }

}
