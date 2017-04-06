<?php 
class ShareModel extends Model{
	public function Index(){
		$this->query('Select * from shares');
		$rows = $this->resultSet();
		// print_r($rows);	
	}
}