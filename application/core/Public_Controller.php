<?php //namespace Nep\BaseControllers;
 
class Public_Controller extends MY_Controller
{
  function __construct()
  {
    parent::__construct();
    // echo 'This is from public controller';
	
	//$this->load->library(array('session'));
	$this->load->library('session');
	
  }
}