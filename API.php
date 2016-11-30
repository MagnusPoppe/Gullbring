<?php
	require_once "db.php";
	
	function getTop5Wish( )
	{
		$query = SELECT spill from Onskeliste;
		$db = dbConnect();
		$result = db->query( $query ); 
		$output = "";
		while ($row = $result->fetch_object())
		{
			$output = "<input type='checkbox' name='spill".$i++."' value='".$row[0]."''>".$row[0]."<br>";
		}
		return $output;
	}
?>
