<?php
	function format($string)
	{
		$string=addslashes(strip_tags((trim($string))));
		return $string;
		
	}

?>