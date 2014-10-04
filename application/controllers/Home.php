<?php 

use \Exception;

class Home extends Controller{
	
	
	public function index(){
		
		//var_dump($this->view);
		$this->response->setContentType("json");
		
		//throw new Exception("Something broke!");
		
		$this->display('{"user":"livingstonef","id":"234434134"}');
	}
	

}