<?php 
class controller {
	private $host="localhost";
	private $user="root";
	private $pass="";
	private $db="db_blackpink";
	private $conn;
	public function __construct(){
		$this->conn=new mysqli($this->host,$this->user,$this->pass,$this->db);
		if(!$this->conn){echo "this->connect error:".$this->conn->error;}
		$this->conn->set_charset("utf8");
	}
	public function sh_ticket(){
		$que=$this->conn->query("select * from db_ticket");
		$data=[];
		foreach ($que->fetch_assoc() as $key => $value) {
			$data[$key]=$value;
		}
		$json = json_encode($data); 
		return $json;
	}
}


$db=new controller();
echo "sh_ticket :";
print_r($db->sh_ticket());

?>
