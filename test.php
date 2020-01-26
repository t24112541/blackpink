<?php 
	function book()
	{
	include_once('controller.php');
	$t_id = $_POST['t_id'];
	$sqlshow = $conn->query('SELECT * FROM db_sale');
	$check = $sqlshow->num_rows;
	$ab = 0;
	$bol = false;
		do
		{
			$bol = false;
			$check++;
			echo "BP000".$check;
			//$bol = true;
			foreach ($sqlshow as $key => $value) 
			{
				if($check == $value['s_id'])
				{
					$bol = true;
				}
			}
			
		}while($bol);
	}
	book();
 ?>