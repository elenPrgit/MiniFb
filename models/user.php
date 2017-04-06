<?php 
class UserModel extends Model{
	public function register(){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);
		if($post['submit']){

			if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
				Messages::setMsg('Please fill in all fields', 'error');
			}  else {
				// die('Submitted');
				$this->query('INSERT INTO users (name, email, password) values (:name, :email, :password)');
				$this->bind(':name', $post['name']);
				$this->bind(':email', $post['email']);
				$this->bind(':password', $password);
				$this->execute();

				if($this->lastInsertId()){
					//REDIRECT
					header('Location: '.ROOT_URL.'users/login');

				}
			}
			
		}
	}

	public function login (){
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		$password = md5($post['password']);
		// echo $password;
		if($post['submit']){
			// die('Submitted');
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
 			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();

			$row = $this->single();
			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_data'] = array(
					"id" => $row['id'],
					"name" => $row['name'],
					"email" => $row['email']
					);
				header('Location: '.ROOT_URL.'shares');

			} else {
				Messages::setMsg('Incorect Login', 'error');
			}
				//REDIRECT
				//header('Location: '.ROOT_URL.'users/login');

		
		}
		// return;
	}
}
