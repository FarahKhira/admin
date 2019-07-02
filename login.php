<?php include "includes/db.php"; ?>
<?php 

if (isset($_POST['login'])) {
	
	$username = $conn->real_escape_string($_POST['username']);
	$password = $conn->real_escape_string($_POST['password']);


	if (empty($username)) {
		echo "<script>alert('username is empty')</script>";
	} elseif(empty($password)){
		echo "<script>alert('password is empty')</script>";
	} else {

		$query = $conn->query("SELECT * FROM users WHERE username = '$username' AND password = '$password'");

		if ($query) {
			$verify_user = $query->num_rows;
			if ($verify_user == 0) {
				echo "<script>alert('invalid username or password')</script>";
			} else {

				while ($row = $query->fetch_assoc()) {

					$_SESSION['id'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					$_SESSION['role'] = $row['role'];
				}

				header('Location: index.php');
			}
		} else {
			die($conn->error);
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

    <title>Login Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-lg-4 mx-md-auto">
            <div class="login-panel card">
                <div class="card-header">
                    <h3 class="card-title">Please Sign In</h3>
                </div>
                <div class="card-body">
                    <form role="form" action="" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="" id="password">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="remember" value="Remember Me" id="showpass">
                                    Show Password</label>
                            </div>
                            <div class="form-group">
                            	<input type="submit" name="login" class="btn btn-primary btn-block btn-lg" value="Login">
                            </div>
                            <!-- Change this to a button or input when using this as a form --> <a href="index.html">Forget Password</a>

                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<!-- <script src="js/bootstrap.min.js"></script> -->

<!-- Custom Theme JavaScript -->
<!-- <script src="js/sb-admin-2.js"></script> -->
<script>
	var x = document.getElementById('password');
	var sp = document.getElementById('showpass');

	sp.addEventListener('click', function(){
		if (x.type === "password") {
		    x.type = "text";
		  } else {
		    x.type = "password";
		  }
	});
	
</script>
</body>

</html>