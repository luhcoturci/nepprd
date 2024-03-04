<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	
    function __construct()
    {
        parent::__construct();

        header("Cache-Control: no-cache, must-revalidate, max-age=0"); //HTTP 1.1
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
	$this->load->helper('text');
        $this->load->library(array('iptracker'));
	$this->load->library('email');
        //$this->load->model('home_model');
	$this->load->library('session');
        $collectSecondSegmentForRemovingTermSessionData = $this->uri->segment(2);
        if($collectSecondSegmentForRemovingTermSessionData != "check_enquiry" && $this->session->has_userdata('term')){
        	$this->session->unset_userdata('term');
        	$this->session->unset_userdata('validationCheck');
        }
    }
    
	function changeLanguage($lang1){
    	$this->load->library('session');
        $lg=$lang1;
       	
	$this->session->set_userdata('languages', $lg);	   

	redirect($_SERVER['HTTP_REFERER']);		
    
	}
	
	public function index()
	{	
		$this->load->helper('text');
		$this->load->helper('url');
		$this->load->library('session');
		
		$languages = $this->session->userdata('languages');	
		$lg=$languages;
		if($lg=='en'){
			$this->lang->load('nep','english');
		}
			elseif($lg=='tt'){
			$this->lang->load('nep','tetun');
		}elseif($lg=='id'){
			$this->lang->load('nep','indonesia');
		}elseif($lg=='pt'){
			$this->lang->load('nep','portugues');
		}else{
			$this->lang->load('nep','tetun');

		}	
	     
		$this->render('public/enquiry_form');
	}
	
	public function check_enquiry()
	{	ini_set('display_errors', 0);

		$languages = $this->session->userdata('languages');
		$lg=$languages;
		if($lg=='en'){
			$this->lang->load('nep','english');
		}
			elseif($lg=='tt'){
			$this->lang->load('nep','tetun');
		}elseif($lg=='id'){
			$this->lang->load('nep','indonesia');
		}elseif($lg=='pt'){
			$this->lang->load('nep','portugues');
		}	
		
	    $config = array(
	        array(
	            'field' => 'inputName',
	            'label' => 'Name',
	            'rules' => 'trim|required'
	        ),
	        array(
	            'field' => 'inputEmail',
	            'label' => 'Email',
	            'rules' => 'trim|required|valid_email'
	        ),
	        array(
	            'field' => 'inputEnquiry',
	            'label' => 'Enquiry',
	            'rules' => 'trim|required',
	            'errors' => array(
	                'required' => 'What is your %s?'
	            )
	        )
	    );
	    
	    $this->form_validation->set_rules($config);
	    $this->form_validation->set_error_delimiters('<div class="label label-danger">', '</div>');
	     
	    if ($this->form_validation->run() == FALSE && !$this->session->has_userdata('validationCheck'))
	    {
	        $this->render('public/enquiry_form');	         
	    }

	    if(substr_count($this->input->post('inputEnquiry'), "?") > 1 || str_word_count($this->input->post('inputEnquiry')) > 100){
	    	$this->session->set_flashdata('query_error', '<div class="label label-danger">'.$this->lang->line('flashdata2').'</div>');
	    	$this->render('public/enquiry_form');
	    }
	    else
	    {
	    	$this->session->set_userdata('validationCheck','passed');	    	
	       
	        if(!$this->session->has_userdata('term')){
	        		$this->session->set_userdata('term',$this->input->post('inputEnquiry'));
				$this->session->set_userdata('autor',$this->input->post('inputName'));
				$this->session->set_userdata('email',$this->input->post('inputEmail'));
				$this->session->set_userdata('phone',$this->input->post('inputPhone'));
				$this->session->set_userdata('company',$this->input->post('inputCompany'));
	       			//session_write_close();
	        }

		
			$curl = curl_init();

			curl_setopt_array($curl, array(
  			CURLOPT_URL => 'https://nepapi.tlictprojects.com/api/enquiry/add',
  			CURLOPT_RETURNTRANSFER => true,
  			CURLOPT_ENCODING => '',
  			CURLOPT_MAXREDIRS => 10,
  			CURLOPT_TIMEOUT => 0,
  			CURLOPT_FOLLOWLOCATION => true,
  			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  			CURLOPT_CUSTOMREQUEST => 'POST',
  			CURLOPT_POSTFIELDS => 'name='.$this->input->post('inputName').'&email='.$this->input->post('inputEmail').'&phone='.$this->input->post('inputPhone').'&enquiry='.$this->input->post('inputEnquiry'),
  			CURLOPT_HTTPHEADER => array(
    			'Content-Type: application/x-www-form-urlencoded'
  			),
			));

		$response = curl_exec($curl);

		curl_close($curl);

		$r=json_decode($response, TRUE);
	

  			if($r['result']==200){
			
				//$this->render('/public/verificaction');
				redirect('verification');


			}else{

 			$this->session->set_flashdata('error', $this->lang->line('flashdata3'));

			$this->render('public/enquiry_form');
			//$this->render('/public/verificaction');
			//redirect('check');	
			//redirect('verification');

			}
		}	    
	    
}

		

	public function verification(){
		$languages = $this->session->userdata('languages');
		$lg=$languages;
		if($lg=='en'){
			$this->lang->load('nep','english');
		}
			elseif($lg=='tt'){
			$this->lang->load('nep','tetun');
		}elseif($lg=='id'){
			$this->lang->load('nep','indonesia');
		}elseif($lg=='pt'){
			$this->lang->load('nep','portugues');
		}
			
		$this->render('/public/verificaction');
	}

	public function verification_submit(){
		
		$languages = $this->session->userdata('languages');
		$lg=$languages;
		if($lg=='en'){
			$this->lang->load('nep','english');
		}
			elseif($lg=='tt'){
			$this->lang->load('nep','tetun');
		}elseif($lg=='id'){
			$this->lang->load('nep','indonesia');
		}elseif($lg=='pt'){
			$this->lang->load('nep','portugues');
		}		$code = $this->input->post('code');
		//$id   = $this->input->post('id');
		//echo $code;

		$config = array(
	        array(
	            'field' => 'code',
	            'label' => 'Code',
	            'rules' => 'trim|required'
	        )
	    );
	    
	    $this->form_validation->set_rules($config);
	    $this->form_validation->set_error_delimiters('<div class="label label-danger">', '</div>');
	     
	    if ($this->form_validation->run() == FALSE)
	    {
	    	$this->session->set_flashdata('code', validation_errors());
	        redirect('verification/');	         
	    }
	    else
	    {
			
		$curl = curl_init();

		curl_setopt_array($curl, array(
 		CURLOPT_URL => 'https://nepapi.tlictprojects.com/api/enquiry/'.$code,
  		CURLOPT_RETURNTRANSFER => true,
  		CURLOPT_ENCODING => '',
  		CURLOPT_MAXREDIRS => 10,
  		CURLOPT_TIMEOUT => 0,
  		CURLOPT_FOLLOWLOCATION => true,
  		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  		CURLOPT_CUSTOMREQUEST => 'GET',
		));

		$response = curl_exec($curl);
		curl_close($curl);
		$r=json_decode($response, TRUE);
	

  		if($r['result']==200){			

			$this->session->set_flashdata('success', $this->lang->line('verification5'));

			//$this->render('public/enquiry_form');
 			redirect('home/');	

		}else{

 		$this->session->set_flashdata('code', $this->lang->line('flashdata3'));
			redirect('verification');



		//$this->render('/public/verificaction');
		}
	    	
	    }

	}

	
		
}


