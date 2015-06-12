<?php
	require_once "../src/MySqlDB.php";
	require_once "../src/Favicon.php";
	
	$mySiteURL = "http://blog.lgk.io";
	$myFavicon = new Favicon($mySiteURL);	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		
		<style type="text/css">
			#base64-td {
				max-width: 200px;
				overflow-x: auto;
			}
		</style>
	</head>

	<body>
		<main class="container">
			<h1 class="page-header">Welcome to this demo!</h1>
			
			<table class="table">
				<thead>
					<tr>
						<th></th>
						<th>Site-URL</th>
						<th>Base64 code</th>
					</tr>
				</thead>
				
				<tbody>
					<tr>
						<td><img src="<?php echo $myFavicon->image; ?>" alt="Favicon"></td>
						<td><?php echo $mySiteURL; ?></td>
						<td id="base64-td"><?php echo $myFavicon->image; ?></td>
					</tr>
				</tbody>
			</table>
		</main>
	</body>
</html>