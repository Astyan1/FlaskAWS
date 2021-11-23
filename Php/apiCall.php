<html>
<head>
<title>RandomValues Generator</title>
</head>
<body>


	<h1>How Many Values do You want to Generate ? (Values are between 0 and 9)<h1>
		<form action="apiCall.php" methode="GET">
			<input type="text" name="n">
			<input type="submit" Value="Generate">
		</form>
	<h2>Random Generated Values : </h2>
	<h3>
	<?php
		error_reporting(0);
        	$ch = curl_init();
      		curl_setopt($ch,CURLOPT_URL, "https://gslcn9rh18.execute-api.us-east-2.amazonaws.com/default/randomValue?n=".$_GET['n']);
        	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        	$output = curl_exec($ch);
        	if ($output!='[]')
                	$len = strlen($output);
                	$output = substr($output,1,$len-2);
                	$output = explode(",",$output);
                	foreach ($output as $str) {echo "<br>".$str."</br>";}
        	curl_close($ch);	
	?></h3>
</body>
</html>
