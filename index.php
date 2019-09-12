<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="" onsubmit="return validate()">
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" id="name"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="text" name="password" id="password"></td>
		</tr>
		<tr>
			<td>Conferm Password</td>
			<td><input type="text" name="c_password" id="c_password"></td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><input type="text" name="number" id="number"></td>
		</tr>
		<tr>
			<td><input type="submit" name="s" value="Submit"></td>
		</tr>
	</table>
</form>
<script type="text/javascript">
	function validate()
	{
		var name=document.getElementById("name").value;
		var password=document.getElementById("password").value;
		var c_password=document.getElementById("c_password").value;
		var number=document.getElementById("number").value;
		//https://regex101.com/
		var namecheck= /^[A-Za-z. ]{3,15}$/;
		var	passwordcheck= /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{8,16}$/ ;
		var emailcheck= /^[A-Za-z0-9_.-]{3,}@[A-Za-z]{3,}[.]{1}[A-Za-z.]{2,}$/;
		var numbercheck= /^[6789][0-9]{9}$/;

		if(namecheck.test(name))
		{

		}
		else
		{
			alert("Not valid");
			return false;
		}

		//End name

		if(passwordcheck.test(password))
		{

		}
		else
		{
			alert("Password Not valid");
			return false;
		}
		//End Password

		if(password.match(c_password))
		{

		}
		else
		{
			alert("Password not Match");
		}
		//End Conferm Password



	}
</script>
</body>
</html>
