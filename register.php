<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
	<style>
    body {
      font-family: 'Verdana', sans-serif;
      background: #1f1f1f;
      color: #C9D1D9;
	  background-image: url('https://i.postimg.cc/wxJMPzST/pexels-shawn-stutzman-1010496.jpg');
		background-size: cover;
		background-position: center;
		display: flex;
		flex-direction: column;
		margin: 0;
		padding: 0;
		align-items: center;
		justify-content: center;
		height: 100vh;
    }
    
    h1 {
      font-size: 2rem;
      text-align: center;
      color: #58A6FF;
      margin: 50px 0 30px;
      letter-spacing: 2px;
    }

    form {
      max-width: 750px;
      width: 90%;
      margin: 0 auto;
      padding: 70px;
      background: #282828;
	    background-color: #161B22;
      border-radius: 15px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.15);
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
	  font-size: 18px;
	  line-height: 1.6;
	  letter-spacing: 1px;
    }

    input[type=text], 
    input[type=email], 
    input[type=password], 
    input[type=tel], 
    select, 
    textarea {
      width: 100%;
      margin-bottom: 20px;
      padding: 12px;
      border: none;
      border-radius: 10px;
      background: #3a3a3a;
      color: #C9D1D9;
      font-size: 14px;
      font-family: inherit;
      font-weight: 500;
      box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.05);
      transition: background-color 0.2s ease-in-out;
    }

    label {
      display: block;
      margin-bottom: 10px;
      color: #58A6FF;
      font-size: 1.25rem;
      font-weight: bold;
      letter-spacing: 1px;
      line-height: 1.4;
    }

    button {
      display: block;
      margin-left: 260px;
      margin-top: 20px;
      padding: 15px 25px;
      font-size: 1.25rem;
      font-family: inherit;
      font-weight: 600;
      letter-spacing: 2px;
      border: none;
      border-radius: 10px;
      background: #58A6FF;
      color: #FFFFFF;
      cursor: pointer;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      transition: background-color 0.2s ease-in-out;
    }

    button:hover {
      background: #268BD2;
    }

    @media screen and (max-width: 600px) {
      form {
        flex-direction: column;
      }
      
      input[type=text], 
      input[type=email], 
      input[type=password], 
      input[type=tel], 
      select, 
      textarea {
        margin-bottom: 10px;
      }
    }
  </style>

</head>
<body>
<h1>Register a User</h1>
<form action="save-registration.php" method="POST">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" required />	
	</div>
	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="Middle Name" />	
	</div>
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" required />	
	</div>
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" required />	
	</div>
	<div>
		<label>Password</label>
		<input type="password" name="password" placeholder="Password" minlength="8" required />	
	</div>
	<div>
		<label>Confirm Password</label>
		<input type="password" name="confirm_password" placeholder="Confirm Password" minlength="8" required />
	</div>
	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate" required />
	</div>
	<div>
		<label>Gender</label>
		<select name="gender" required>
			<option value="">Select Gender</option>
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select>
	</div> 
	<div>
		<label>Address</label>
		<textarea name="address" rows="1" cols="13" placeholder="Address" required></textarea>
	</div>
	<div>
		<label>Contact Number</label>
		<input type="tel" name="contact_number" placeholder="Contact Number" required />
	</div>
	<div>
		<button>
			Register User
		</button>	
	</div>
</form>
</body>
</html>