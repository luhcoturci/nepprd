<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Enquiry
{
    public function __construct() 
    {
        
        $this->load->model('enquiry_model');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation'));
    }
    
    /**
     * __call
     *
     * Acts as a simple way to call model methods without loads of stupid alias'
     *
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($method, $arguments)
    {
        if (!method_exists( $this->enquiry_model, $method) )
        {
            throw new Exception('Undefined method Admin::' . $method . '() called');
        }
        /*
        if($method == 'create_user')
        {
            return call_user_func_array(array($this, 'register'), $arguments);
        }
        if($method=='update_user')
        {
            return call_user_func_array(array($this, 'update'), $arguments);
        }
        */
        return call_user_func_array( array($this->admin_model, $method), $arguments);
    }
    
    /**
     * __get
     *
     * Enables the use of CI super-global without having to define an extra variable.
     *
     * I can't remember where I first saw this, so thank you if you are the original author. -Militis
     *
     * @access	public
     * @param	$var
     * @return	mixed
     */
    public function __get($var)
    {
        return get_instance()->$var;
    }
    
	public function create_enquiry()
	{
	    
	    
	    
	    
	    exit;
	    
	}
	
	public function create_reply()
	{
	    
	}
	
}