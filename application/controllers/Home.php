<?php 


class Home extends Controller{
	
	
	public function index(){
		
		//var_dump($this->view);
		$this->response->setContentType("json");
		
		$this->display('{"user":"livingstonef","id":"234434134"}');
	}
	

}