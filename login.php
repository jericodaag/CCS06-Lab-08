<?php

require "config.php";

// If the session variable is already set, automatically redirect the user to index page
if (isset($_SESSION['is_logged_in'])) {
	if ($_SESSION['is_logged_in']) {
		header('Location: index.php');
	}
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
	<style>
		body {
			background-image: url('https://i.postimg.cc/wxJMPzST/pexels-shawn-stutzman-1010496.jpg');
			background-size: cover;
			background-position: center;
			color: #C9D1D9;
			font-family: 'Verdana', sans-serif;
			margin: 0;
			padding: 0;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: 100vh;
		}
		h1 {
			color: #58A6FF;
			font-size: 48px;
			margin-bottom: 30px;
			text-align: center;
		}
		form {
			background-color: #161B22;
			border-radius: 15px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
			padding: 50px;
			max-width: 550px;
			width: 90%;
			display: flex;
			flex-direction: column;
			align-items: center;
			font-size: 18px;
			line-height: 1.6;
			letter-spacing: 1px;
		}
		input[type=email], input[type=password] {
			width: 100%;
			padding: 12px;
			border: none;
			border-radius: 10px;
			resize: vertical;
			font-size: 14px;
			font-family: inherit;
			box-sizing: border-box;
			margin-bottom: 20px;
			background-color: #0D1117;
			color: #C9D1D9;
			transition: background-color 0.2s ease-in-out;
			font-weight: 500;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.05);
		}
		label {
			font-weight: bold;
			margin-bottom: 10px;
			display: block;
			color: #58A6FF;
			font-size: 20px;
			line-height: 1.4;
			letter-spacing: 1px;
			align-self: flex-start;
			margin-left: 10px;
		}
		button {
			background-color: #58A6FF;
			color: #FFFFFF;
			padding: 10px 20px;
			border: none;
			border-radius: 10px;
			cursor: pointer;
			font-size: 20px;
			font-family: inherit;
			margin-top: 20px;
			transition: background-color 0.2s ease-in-out;
			letter-spacing: 2px;
			font-weight: 600;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
			align-self: flex-end;
			margin-right: 10px;
		}
		button:hover {
			background-color: #268BD2;
		}
	</style>
</head>
<body>
<h1>Login</h1>

<form action="attempt-login.php" method="POST">
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" />	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" />	
	</div>
	<div>
		<button>
			Login
		</button>	
	</div>
</form>
</body>
</html>