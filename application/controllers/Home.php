<?php 

use \Exception;

class Home extends Controller{
	
	
	public function index(){
		
		//var_dump($this->view);
		//$this->response->setContentType("pdf");
		
		//throw new Exception("Something broke!");
		//var_dump($this->response);
		//echo "what about this";
		
		$this->view->setData("name", "Livingstone");
		
		$this->display('Views\Index');
		//$this->render();
	}
	

}