<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign-Up</title>
	<style>
		*{
			box-sizing: border-box;
			padding: 0px;
			margin: 0px;
		}
		#signUpForm{
			height: 100vh;
			width: 100%;
			display: flex;
			align-items: center;
			justify-content: center;
		}
		table tr td{
			padding: 10px;
		}
		input[type=submit]{
			background-color: aquamarine;
			padding: 10px;
			margin: 0px auto 0px auto;
		}
	</style>
</head>
<body>
	
	<form action="signUpAct.php" id="signUpForm" method="POST" enctype="multipart/form-data">
		
		<table border="1">
			<tr>
				<td>User Name</td>
				<td>
					<input type="text" name="name" required>
				</td>
			</tr>
			<tr>
				<td>User Email</td>
				<td>
					<input type="email" name="email" required>
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender" value="male" checked>Male
					<input type="radio" name="gender" value="female">Female
				</td>
			</tr>
			<tr>
				<td>Date Of Birth</td>
				<td>
					<input type="date" name="dob" required>
				</td>
			</tr>
			<tr>
				<td>User Password</td>
				<td>
					<input type="password" name="password" required>
				</td>
			</tr>
			<tr>
				<td>User Image</td>
				<td>
					<input type="file" name="image" required>
				</td>
			</tr>
			<tr>
				<td>Course</td>
				<td>
					<input type="checkbox" name="course[]" value="HTML">HTML
					<input type="checkbox" name="course[]" value="CSS">CSS
					<input type="checkbox" name="course[]" value="JS">JS
				</td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="SignUp"></td>
			</tr>
		</table>

	</form>
</body>
</html>