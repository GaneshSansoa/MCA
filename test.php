<?php
class animal{
	function __construct(){
		echo "constructor called<br>";
	$type = "";
	$legs = "";
	}
	public function print($type,$legs){
		echo "The animal of type $type and having $legs legs";
	}



};

class sql {
	function __construct(){
	$host = "";
	$user = "";
	$pass = "";
	$db = "";
	$q = "";
	$_GLOBALS["conn"] = "";
//	$conn = "";
	}
function connect($host, $user, $pass,$db ="sam"){
	$this->conn =	mysqli_connect($host,$user,$pass,$db);
	if(!$this->conn){
		die ("Error: " . mysqli_connect_error())	;
	}
	}
	function query($q){
		//echo $this->conn;
	$sql = mysqli_query($this->conn,$q);
	if(!$sql){
		die("Error: " . mysqli_error($this->conn));
	}
	}
};
$obj = new animal();
$obj->print("dog",4);

$obj2 = new sql();
$obj2->connect("localhost","root","");

$sql = "select * from productss";
$obj2->query($sql);

?>