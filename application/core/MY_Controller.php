<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
  protected $data = array();
  function __construct()
  {
    parent::__construct();
    $this->load->library('session');
    $this->data['pagetitle'] = 'CA - Timor leste NEP for Customs';
  }
 
  protected function render($the_view = NULL, $template = 'master', $output = NULL)
  {
	  
	  
	
    if(isset($output)){
      $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view, $output, TRUE);
      $this->load->view('templates/'.$template.'_view', $this->data);
    }else{
      $this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);
      $this->load->view('templates/'.$template.'_view', $this->data);
    }
  }
  
  protected function nepmail($to,$subject,$body)
  {   /*echo $to."<br>";
      echo $subject."<br>";
      echo $body."<br>";
      exit();*/

      $this->load->library('email');
      $this->email->set_mailtype("html");
      $this->email->from('nep@customs.com', 'Bangladesh NEP Support');
      $this->email->to($to);      
      $this->email->subject($subject);
      $this->email->message($body);
       
      $this->email->send();
  }
}
