<?php

	function dbConnect() 
	{
		return new mysqli("byteme.no.mysql", "byteme_no", "", "byteme_no");
	}
	
?>