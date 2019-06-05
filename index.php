<?php

/*----------------------------------------------------------------------------------------
 * Copyright (c) Microsoft Corporation. All rights reserved.
 * Licensed under the MIT License. See LICENSE in the project root for license information.
 *---------------------------------------------------------------------------------------*/

function sayHello($name) {
	echo "Hello $name!";
}

function connect() {

	$db = new PDO('mysql:host=vscode-remote-try-php_devcontainer_db_1;dbname=database', 'admin', 'test');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$databaseTest = ($db->query('SELECT * FROM dockerSample'));
	foreach($databaseTest->fetchAll(PDO::FETCH_OBJ) as $row)
	{
		echo "$row->name";
	}
}

?>

<html>
	<head>
		<title>Visual Studio Code Remote :: PHP</title>
	</head>
	<body>
		<?php 
		
		sayHello('remote world');
		connect();
		phpinfo(); 
			
		?>
	</body>
</html>