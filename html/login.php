<?php 
    session_start();
    if(isset($_SESSION['userlogin'])) {
        header("Location: index.php");
    }
 ?>


<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=devide-width, initial-scale=1.0x">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<title>Home Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../css/Styles.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div>
        <form>
            <div class="container">
                
                	<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="index.html"> Career Finder </a>
     </nav>
                  
                    <div class="row">
                        <div class="col-sm-3 ">
                            <h1>Login</h1>
                            
                            <hr class="mb-3">
                            <label for="email"><b>E-Mail</b></label>
                            <input class="form-control" id="email" type="email" name="email" required>


 
                            <label for="password"><b>Password</b></label>
                            <input class="form-control" id="password" type="password" name="password" required>
                            <hr class="mb-3">
                            <button type="button" name="button" id="login" class="btn btn-primary">Login</button>


                            <p>Don't have an account? <a href="registration.php">Sign Up</a></p>
                        </div>
                    </div>
                
                
            </div>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
    $(function(){
        $('#login').click(function(e){
           var valid = this.form.checkValidity();


            if(valid) {
                var email = $('#email').val();
                var password = $('#password').val();
            }


            e.preventDefault();


            $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data: {email: email, password: password},
                success: function(data) {
                    alert(data);
                    if($.trim(data) === "1"){
                        setTimeout('window.location.href = "index.php"', 2000);
                    }
                },
                error: function(data) {
                    alert('There were errors while logging in');
                }
            });


        });
    });
</script>


</body>
</html>