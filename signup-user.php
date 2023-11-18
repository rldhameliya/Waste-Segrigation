
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Full Name" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                   
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>


<?php
	// Establish a connection to the MySQL database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "waste";
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// Process the form submission
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		// Sanitize the user's input
		$name = mysqli_real_escape_string($conn, $_POST["name"]);
		$email = mysqli_real_escape_string($conn, $_POST["email"]);
		$pass = mysqli_real_escape_string($conn, $_POST["password"]);
			

		// Insert the user's input into the database
		$sql = "INSERT INTO user (email, password, Name) VALUES ('$email', '$pass', '$name')";
		if ($conn->query($sql) === TRUE) {
			echo "<script> alert('User Created Succesfully'); </script>";
            header('Location: login-user.php');
            exit;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
?>
