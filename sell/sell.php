<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <title>Sell</title>

    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" type="text/css" href="../wavestyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        crossorigin="anonymous" />

</head>

<body>
	<?php

// Initialize variables
$firstnameErr = $lastnameErr = $phoneErr = $emailErr = NULL;
$firstname = $lastname = $phone = $email = $wastetype = NULL;
$flag = true;

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Validate the first name field
	if (empty($_POST["firstname"])) {
		$firstnameErr = "First name is required";
		$flag = false;
	} else {
		$firstname = test_input($_POST["firstname"]);
	}

	// Validate the last name field
	if (empty($_POST["lastname"])) {
		$lastnameErr = "Last name is required";
		$flag = false;
	} else {
		$lastname = test_input($_POST["lastname"]);
	}

	// Validate the phone field
	if (empty($_POST["phone"])) {
		$phoneErr = "Phone is required";
		$flag = false;
	} else {
		$phone = test_input($_POST["phone"]);
	}

	// Validate the email field
	if (empty($_POST["email"])) {
		$emailErr = "Email is required";
		$flag = false;
	} else {
		$email = test_input($_POST["email"]);
	}

	// Get the waste type field
	if (!empty($_POST["wastetype"])) {
		$wastetype = test_input($_POST["wastetype"]);
	}

	// Get the location field
	if (!empty($_POST["location"])) {
		$location = test_input($_POST["location"]);
	}

	// Check if all fields are valid before inserting into database
	if ($flag) {

		// Create database connection
		$conn = new mysqli('localhost', "root", "", "waste");

		if ($conn->connect_error) {
			die("connection failed error: " . $conn->connect_error);
		}

		// Prepare SQL query
		$sql = "INSERT INTO garbageinfo (FirstName,LastName, mobile, email, wastetype, location,status) VALUES('$firstname','$lastname', '$phone', '$email', '$wastetype','$location','pending') ";

		// Execute query and display success/error message
		if ($conn->query($sql) === TRUE) {
			echo "<script> alert('Data saved successfully.');</script>";
			header("Location: /../waste/adminsignup/index1.php"); // redirect to index.html after successful submission
			exit;
		}
		else
		{
			echo "<script> alert('Something went wrong please try again later');</script>";	
		}

		// Close database connection
		$conn->close();
	}
}

// Function to sanitize user input
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
};

?>
<div class="header">

<!--Content before waves-->
<div class="inner-header flex">
	<!--Just the logo.. Don't mind this-->
	<svg version="1.1" class="logo" baseProfile="tiny" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
		xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" xml:space="preserve">
		<path fill="#FFFFFF" stroke="#000000" stroke-width="10" stroke-miterlimit="10" d="M57,283" />
		<g>
			<path fill="#fff"
				d="M250.4,0.8C112.7,0.8,1,112.4,1,250.2c0,137.7,111.7,249.4,249.4,249.4c137.7,0,249.4-111.7,249.4-249.4
C499.8,112.4,388.1,0.8,250.4,0.8z M383.8,326.3c-62,0-101.4-14.1-117.6-46.3c-17.1-34.1-2.3-75.4,13.2-104.1
c-22.4,3-38.4,9.2-47.8,18.3c-11.2,10.9-13.6,26.7-16.3,45c-3.1,20.8-6.6,44.4-25.3,62.4c-19.8,19.1-51.6,26.9-100.2,24.6l1.8-39.7		c35.9,1.6,59.7-2.9,70.8-13.6c8.9-8.6,11.1-22.9,13.5-39.6c6.3-42,14.8-99.4,141.4-99.4h41L333,166c-12.6,16-45.4,68.2-31.2,96.2	c9.2,18.3,41.5,25.6,91.2,24.2l1.1,39.8C390.5,326.2,387.1,326.3,383.8,326.3z" />
		</g>
	</svg>

	<div class="container">
		<div class="row">
			<div class="col-md-4 offset-md-4 form login-form">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h2 class="text-center" style="color:black;"> Sell </h2>
				
					<div class="form-group">
						<input class="form-control" type="text" name="firstname" placeholder="First Name"
							pattern="[A-z, ]{1,25}" required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="lastname" placeholder="Last Name"
							pattern="[A-z, ]{1,25}" required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="phone" placeholder="98 XXXX XXXX"
							maxlength="10" pattern="[7-9]{1}[0-9]{9}"
							title="Phone number must be a valid 10 digit and start with 7,8 or 9" required>
					</div>
					<div class="form-group">
						<input class="form-control" type="email" name="email" placeholder="Email Address"
							required>
					</div>
					<div class="form-group">
						<input class="form-control" type="text" name="location" placeholder="location"
							required>
					</div>
					<div class="form-group">
						<select class="form-control" name="wastetype">
							<option value=""> Make your choice</option>
							<option value="Dry Waste">Dry Waste</option>
							<option value="Wet Waste">Wet Waste</option>
							<option value="E-waste">E-waste</option>
							<option value="Medical Waste ">Medical Waste </option>
						</select>
					</div>
					
					<div class="form-group">
						<input class="form-control button" type="submit" name="submit" value="submit">
					</div>
				   
			</div>

			</form>

			
		</div>
	</div>



</div>
<!--Waves Container-->
<div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                        d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
        <!--Waves end-->

    </div>
    <!--Header ends-->
</body>

</html>