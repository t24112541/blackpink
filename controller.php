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
	public function get_count(){
		$que=$this->conn->query("select * from db_sale");
		$count=$que->num_rows;
		$data['count']=$count;
		$json = json_encode($data); 
		return $json;
	}
	public function book(){
		// echo "<br>";
		$sqlshow = $this->conn->query('SELECT * FROM db_sale');
		$check = $sqlshow->num_rows;
		$ab = 0;
		$bol = false;
		do{
			$bol = false;
			$check++;
			$s_id= "BP000".$check;
			echo $s_id." ";
			foreach ($sqlshow as $key => $value){
				if($s_id == $value['s_id']){
					echo "not <br>";
					$bol = true;
				}
			}
		}while($bol);
		$que=$this->conn->query("insert into db_sale (s_id,t_id,s_date) values ('{$s_id}', '1', '".date('Y-m-d H:i:s')."')");
		if(!$que){echo "insert error:".$this->conn->error; $data["status"]=false;  }
		else{$data["status"]=true; }
		$json = json_encode($data); 
		return $json;
	}
}


$db=new controller();
echo "sh_ticket :";
print_r($db->sh_ticket());
$db->book();
$db->get_count();
?>
