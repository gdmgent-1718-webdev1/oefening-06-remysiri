<?php

	function seizoen($date="")
	{
		$datum = date('j-F');
		$testdatum = strtotime($datum);
		$seizoenen = ['Winter', 'Lente', 'Zomer', 'Herfst'];

		if (strtotime($datum) >= strtotime($testdatum.'21-3') && strtotime($datum) <= strtotime($testdatum.'20-6'))
		{
			return $seizoenen[1];
		}
		
		if (strtotime($datum) >= strtotime($testdatum.'21-6') && strtotime($datum) <= strtotime($testdatum.'20-9'))
		{
			return $seizoenen[2];
		}

		if (strtotime($datum) >= strtotime($testdatum.'21-9') && strtotime($datum) <= strtotime($testdatum.'20-12'))
		{
			return $seizoenen[3];
		}
		
		if (strtotime($datum) >= strtotime($testdatum.'21-12') && strtotime($datum) <= strtotime($testdatum.'20-3'))
		{
			return $seizoenen[0];
		}
	}

echo date('j F'), PHP_EOL;
echo seizoen("18-10");

?>