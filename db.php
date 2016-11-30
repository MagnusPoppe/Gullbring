<?php

	function dbConnect() 
	{
		return new mysqli("localhost:3306", "root", "", "byteme_no");
	}

?>