<?php

use Budkit\Routing\Controller;
use Budkit\Dependency\Container as Application;

class Stream extends Controller {

    public function __construct(Application $application) {
        parent::__construct($application);
    }

    public function index($format = 'html') {
        //echo "Browsing in {$format} format";

        $this->display('Views\Index');
    }


    public function read($id, $format = 'html') {
        echo "Reading {$id} in {$format} format";
    }

    public function edit($id = 'new', $format = 'html') {
        echo "Editing {$id} in {$format} format";
    }

    public function add() {
        echo "Adding...";
    }

    public function delete() {
        echo "Delete...";
    }

    public function create() {
        echo "Creating...";
    }

    public function update() {
        echo "Updating...";
    }

    public function replace() {
        echo "Replacing...";
    }

    public function options() {
        echo "Options...";
    }
}