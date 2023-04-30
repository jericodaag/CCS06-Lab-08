<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <style>
    body {
      background-color: #1a1a1a;
      color: #fff;
    }
    table {
      margin: 0 auto;
      background-color: #333;
      color: #fff;
    }
    h1, h2 {
      text-align: center;
    }
  </style>
</head>
<?php

require "config.php";

use App\User;

// Only logged in user should be able to open this page
if (!isset($_SESSION['is_logged_in']) || !$_SESSION['is_logged_in']) {
    header('Location: login.php');
}

$user = User::getById($_SESSION['user']['id']);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome</title>
  <style>
		body {
			background-color: #0d1117;
			color: #c9d1d9;
			font-family: "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
			margin: 0;
			padding: 0;
		}
		
		h1, h2, {
			color: #f0f6fc;
			text-align: center;
		}
		
        h4 {
            margin-left: 40px;
			text-align: left; 
        }
        
		table {
			margin: 0 auto;
			background-color: #1f6feb;
			border-collapse: collapse;
			border-radius: 6px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
		}
		
		th, td {
			padding: 10px;
			text-align: left;
		}
		
		th {
			background-color: #0d1117;
			color: #f0f6fc;
			border-bottom: 1px solid #c9d1d9;
		}
		
		td {
			background-color: #0d1117;
			color: #c9d1d9;
			border-bottom: 1px solid #1f6feb;
		}
		
		a {
			color: #58a6ff;
		}
		
		a:hover {
			color: #79c0ff;
		}
		
		pre {
			color: #8b949e;
			background-color: #0d1117;
			padding: 10px;
			border-radius: 6px;
			box-shadow: 0 2px 4px rgba(0, 0, 0, 0.25);
			white-space: pre-wrap;
			word-wrap: break-word;
			font-size: 14px;
			line-height: 1.5;
		}
        a.logout-link {
            display: inline-block;
            margin: 20px auto;
            padding: 8px 16px;
            background-color: #24292e;
            color: #fff;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 14px;
            font-weight: 600;
        }

        a.logout-link:hover {
            background-color: #0366d6;
            color: #fff;
}

	</style>
</head>
<body>
    <br>
<h1>Welcome <?php echo $_SESSION['user']['fullname']; ?></h1>

<h2>User Information</h2>

<table bgcolor="gold" border="1" cellpadding="10">
    <tr>
        <td>User ID</td>
        <td>
            <strong>
                <?php echo $user->getId();?>
            </strong>
        </td>
    </tr>
    <tr>
        <td>First Name</td>
        <td>
            <strong>
                <?php echo $user->getFirstName();?>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Last Name</td>
        <td>
            <strong>
                <?php echo $user->getLastName();?>
            </strong>
        </td>
    </tr>
    <tr>
        <td>Email</td>
        <td>
            <strong>
                <?php echo $user->getEmail();?>
            </strong>
        </td>
    </tr>
</table>

<h4>Ecclesiastes 3:1-8</h4>

    <pre>
    There is a time for everything,
    and a season for every activity under the heavens:
     a time to be born and a time to die,
    a time to plant and a time to uproot,
     a time to kill and a time to heal,
    a time to tear down and a time to build,
     a time to weep and a time to laugh,
    a time to mourn and a time to dance,
     a time to scatter stones and a time to gather them,
    a time to embrace and a time to refrain from embracing,
     a time to search and a time to give up,
    a time to keep and a time to throw away,
     a time to tear and a time to mend,
    a time to be silent and a time to speak,
     a time to love and a time to hate,
    a time for war and a time for peace.
    </pre>

    <a href="logout.php" class="logout-link">LOGOUT</a>
    
</div>
</body>
</html>

<hr />
<pre>
SESSION DATA

<?php
var_dump($_SESSION);
?>
</pre>