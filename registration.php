

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="">
<title>Dashboard signup</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
	font-family: TimesNewRoman;
	font-size: 17px;
	padding: 8px;
	background-image:url("lights.jpg");
}

* {
	box-sizing: border-box;
}




.container {
	background-color: #f2f2f2;
	padding: 5px 20px 15px 20px;
	border: 1px solid lightgrey;
	border-radius: 3px;
}

td{
	font-size:31px;
	color:black;
	
	font-weight:bold;
}
input[type=text], textarea {
	width: 100%;
	margin-bottom: 20px;
	padding: 12px;
	border: 1px solid #ccc;
	font-size:31px;
	border-radius: 3px;
}

input[type=password] {
	width: 100%;
	margin-bottom: 20px;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

input[type=number] {
	width: 100%;
	margin-bottom: 20px;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

input[type=email] {
	width: 100%;
	margin-bottom: 20px;
	padding: 12px;
	border: 1px solid #ccc;
	border-radius: 3px;
}

label {
	margin-bottom: 10px;
	display: block;
	color:white;
}

.icon-container {
	margin-bottom: 20px;
	padding: 7px 0;
	font-size: 24px;
}

.btn {
	background-color: #4CAF50;
	color: white;
	padding: 12px;
	margin: 10px 0;
	border: none;
	width: 100%;
	border-radius: 3px;
	cursor: pointer;
	font-size: 17px;
}

.btn:hover {
	background-color: #45a049;
}

a {
	color: #2196F3;
}

hr {
	border: 1px solid lightgrey;
}




</style>
</head>
<body>
	
	

	<div class="">

		<h2 style="font-size: 31px; text-align: centre;">
			WELCOME <br>Thank you for joining us
		</h2>

		<div align="center">
		<a href="login.php" style="color: #045D4D;font-size:31px">Already have an account ? Log In</a>
			
			<h1>Register Here </h1>


			<form  method="post" action="registration.php">

				<table align="center">
					<tr>
						<td>Username :</td>
						<td><input type="text" name="username" required="required" /></td>
					</tr>
					<tr>
						<td>Password :</td>
						<td><input type="password" name="password"
							required="required" /></td>
					</tr>
					<tr>
						<td>Name :</td>
						<td><input type="text" name="name" required="required" /></td>
					</tr>
				
					<tr>
						<td>Email :</td>
						<td><input type="email" name="email" required="required" /></td>
					</tr>
				
				
					<tr>
						<td align="center" colspan="2"><input type="submit" name="submit"
							value="Register" /></td>
					</tr>
				</table>
			</form>
		</div>
		<br /> <br /> <br /> <br />
	

	</div>
</body>
</html>