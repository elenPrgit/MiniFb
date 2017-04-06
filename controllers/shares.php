<?php

class Shares extends Controller{
	protected function Index(){
		$viewModel = new ShareModel();
		$this->ReturnView($viewModel->Index(), true);
		
	}

	protected function Add(){
        if (!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'shares');
		} else {
			$viewModel = new ShareModel();
			$this->ReturnView($viewModel->Add(), true);
		}	
	
		
	}
}