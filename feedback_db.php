<?php
require_once("config.php"); /* Configuration File */

class DB{
	
	private $link;
	
	public function __construct(){
		$this->link = mysqli_connect(DB_SERVER, DB_USER, DB_PASS,DB_NAME);
		if (mysqli_connect_errno())
		    exit();
	}
	
	public function __destruct() {
		mysqli_close($this->link);
	}
	
	public function dbNewMessage($email,$name,$message, $category){
		$email 	 	= mysqli_real_escape_string($this->link,$email);
		$name 		= mysqli_real_escape_string($this->link,$name);		
		$message 	= mysqli_real_escape_string($this->link,$message);		
		$category 	= mysqli_real_escape_string($this->link,$category);		
		
		mysqli_autocommit($this->link,FALSE);
		
		$query = "INSERT INTO FEEDBACK(pk_contact,name,email,category,message) 
				  VALUES('NULL','$name','$email','$category','$message')";
		mysqli_query($this->link,$query);
		
		if(mysqli_errno($this->link))
			return -1;
		else{
			mysqli_commit($this->link);
			return 1;
		}	
	}   
};
?>
