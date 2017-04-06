<?php 
class ShareModel extends Model{
	public function Index(){
		$this->query('Select * from shares');
		$rows = $this->resultSet();
		// print_r($rows);	
		return $rows;
	}

	public function Add(){
		//sanitize post
		$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['link'] == ''){
				Messages::setMsg('Please fill in all fields', 'error');
			}  else {
				$this->query('INSERT INTO shares (title, body, link, user_id) values (:title, :body, :link, :user_id)');
				$this->bind(':title', $post['title']);
				$this->bind(':body', $post['body']);
				$this->bind(':link', $post['link']);
				$this->bind(':user_id', 1);
				$this->execute();

				if($this->lastInsertId()){
					//REDIRECT
					header('Location: '.ROOT_URL.'shares');

				}
			}
		}
		return ;
	}
}