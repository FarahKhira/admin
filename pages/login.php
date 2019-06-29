<?php
// ob_start(); 

// Start session to use to another page


include('includes/db.php');
session_start();

if(isset($_POST['login'])) {

    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if ($username == '' || $password == '') {
        echo "The username or password is empty";
        exit();
    } else {

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

        $execute = mysqli_query($connection, $sql);
        $check_user = mysqli_num_rows($execute);

        // Check user wether the user is exist or not
        if ($check_user == 0) {
            // Error message

            // echo "The user is not existed or the password is incorrect";
            // exit();

            // Pop message
            ?>
                <script>window.alert('The user is not existed or the password is incorrect');</script>
            <?php
        } else {

            $sql_query = mysqli_query($connection, "SELECT * FROM  users WHERE username = '$username' AND password = '$password'");

            //if(mysqli_num_rows($sql_query)){
                //$res = mysqli_fetch_array($sql_query);

                //$_SESSION['username'] = ['username'];
                //echo "<center>";
                //echo "You are now login. click <a href="index.php>here</a>" to go back to main chat window";
                //echo "</center>";
            //} else {

                //echo "<center>";
                //echo "No user found. please go <a href="index.php">back</a> and enter the correct login<br>";
                //echo "</center>";
            //}

            if(!$sql_query) {
                die('query failed' . mysqli_error($connection));
                exit();
            }
            while($row = mysqli_fetch_assoc($sql_query)) {

                $_SESSION['id'] = $row['id'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['mobile'] = $row['mobile'];
                $_SESSION['staffid'] = $row['staffid'];
                $_SESSION['initialname'] = $row['initialname'];
            }
            header('location: indexstaff.php');
        }

    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/login.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>
	<div class="loginbox">
		<img src="../vendor/datatables/images/avatar.jpg" class="avatar">
		<h1>Login Here</h1>
		<form name="form2" action="login.php" method="post">
			<p>Username</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="login" value="Login"><br>
			<a href="forgotpassword.php">Forgot your Password?</a><br>
		</form>
    </div>
    
</body>

</html>