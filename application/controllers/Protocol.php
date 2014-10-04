<?php 

class Protocol extends Controller{
	
	public function browse($format = 'html'){
		echo "Browsing in {$format} format";
	}

	
	public function read($id, $format = 'html'){
		echo "Reading {$id} in {$format} format";
	}
			
	public function edit($id = 'new', $format = 'html'){
		echo "Editing {$id} in {$format} format";
	}
	
	public function add(){
		echo "Adding...";
	}
	
	public function delete(){
		echo "Delete...";
	}
	
	public function create(){
		echo "Creating...";
	}
	
	public function update(){
		echo "Updating...";
	}
	
	public function replace(){
		echo "Replacing...";
	}
	
	public function options(){
		echo "Options...";
	}
	
	
    // add the routes
    // $router->addGet('{format}','browse');
    // $router->addGet('/{id}{format}','read');
    // $router->addGet('{/id}/edit{format}','edit'); //if no id is set, return form for new
    // $router->addGet('/add','add');
    // $router->addDelete('/{id}','delete');
    // $router->addPost('','create');
    // $router->addPatch('/{id}','update');
    // $router->addPut('/{id}','replace');
    // $router->addOptions('','options');

}