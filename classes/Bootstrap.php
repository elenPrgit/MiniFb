<?php 
class Bootstrap {
	private $controller;
	private $action;
	private $request;


	public function __construct($request){
		$this->request = $request;
		if($this->request['controller'] == ""){
			$this->constroller = "home";
		} else {
			$this->controller = $request["controller"];
		}

		if($this->request["action"] == ""){
			$this->action = "index";
		} else {
			$this->action = $this->request["action"];
		}
	}

	public function createController(){
		if(class_exists($this->controller)){
			$parents = class_parents($this->controller);
			//Check extend
			if(in_array("Controller", $parents)){
				if(method_exists($this->controller, $this->action)){
					return new $this->controller($this->action, $this->request);
				} else {
					echo '<h1> Method does not exist</h1>';
					return;
				}
			} else {
				echo '<h1> Base controller does not exist</h1>';
				return;
			}
		} else {
			echo '<h1> Controller class does not exist</h1>';
			return;
		}
	}
}