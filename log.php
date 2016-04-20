<?php
/**
* This  class is create or maintain the log file for your application, 
* where you  will create any log message for your application and store in log.txt file under the log directory,
* you also create the date wise log file with custom name .
*
* @author	      Ashok kashyap 
* @authoremail        ajayashok.01@gmail.com,ashok@yesweexpert.com
* @authorwebsite      http://yesweexpert.com
* @facebook          https://www.facebook.com/er.ashokkashyap, https://www.facebook.com/yesweexpert 
* @version          1.0
*/

define('DIR_PATH',dirname(__FILE__));
define('DIR_LOGS', DIR_PATH."/logs/");

class Log {
	private $filename;
	public $datewise;
	
	
	public function __construct($filename='log.txt',$flag=false) {
	$this->datewise=$flag;
	if ($this->datewise)
		$this->filename = date('d-m-Y')."__".$filename;
	else
		$this->filename =$filename;
		
	}
	
	public function write($message) {
		echo "<br>".$file = DIR_LOGS . $this->filename;
		
		$handle = fopen($file, 'a+'); 
		
		fwrite($handle,  "\n".date('Y-m-d G:i:s') . ' - ' . $message . "\n");
			
		fclose($handle); 
	}
}
