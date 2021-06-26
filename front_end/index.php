<!Doctype>
<html>
	<head>
		<title>Web Application Demo</title>
		<link  rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body class="body-color">
	
		<div class="content">
			<h1 class="title">Hello</h1>
			<form method='post' action='../back_end/DataBase_insert.php'>

				<?php 
					echo '<p class="info">Please enter your name</p>'; 
				?>
				<input type='text' name='name'>
				<input type='submit' value='submit'> 
			</form>
		</div>
	</body>
</html>