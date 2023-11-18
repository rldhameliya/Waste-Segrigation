
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter new password</p>
                  
                    <div class="form-group">
                        <input class="form-control" type="text" name="password" >
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Continue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>


<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pass = $_POST["password"];
    $connect = mysqli_connect('localhost', 'root', '', 'waste');
    $query = "SELECT * FROM user WHERE email='$username'";
    $result = mysqli_query($connect, $query);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        $q1 = "UPDATE adminlogin SET password = '$pass' WHERE username ='admin'"; 
        if (mysqli_query($connect, $q1)) {
            echo "<script> alert('Password reset successfully'); </script>";
            header("Location: index.php");
        } else {
            echo "Error updating password: " . mysqli_error($connect);
        }
    } else {
        echo "<p class='error'>Invalid email.</p>";
    }
}
?>
