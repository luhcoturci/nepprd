<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*********************************************************************
 * Description: Tracks the number of website visits everyday. 
 * Version: 1.0.0
 * Date Created: January 09, 2015
 * Author: Glenn Tan Gevero
 * Website: http://app-arsenal.com
 * File: IP Tracker Library File
**********************************************************************/
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class Phpmailer_library
{
    public function __construct(){
        log_message('Debug', 'PHPMailer class is loaded.');
    }

    public function load(){
        // Include PHPMailer library files
        require_once APPPATH.'third_party/php-basic-mail/vendor/phpmailer/phpmailer/src/Exception.php';
        require_once APPPATH.'third_party/php-basic-mail/vendor/phpmailer/phpmailer/src/PHPMailer.php';
        require_once APPPATH.'third_party/php-basic-mail/vendor/phpmailer/phpmailer/src/SMTP.php';
        
        $mail = new PHPMailer;
        return $mail;
    }
}