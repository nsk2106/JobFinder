<?php 
require_once('server.php');
 ?>
 
<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
   	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/Styles.css">
</head>
<body>
    
    
    	<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="index.html"> Career Finder </a>
  </nav>
    <div>
        <form action="registration.php" method="post">
            <div class="container">
                
                    <div class="row">
                        <div class="col-sm-5">
                            <h1>Registration</h1>
                            <p>Fill up the form here.</p>
                            
                            <hr class="mb-3">
                            <label for="firstname"><b>First Name</b></label>
                            <input class="form-control" id="firstname" type="text" name="firstname" required>


                            <label for="lastname"><b>Last Name</b></label>
                            <input class="form-control" id="lastname" type="text" name="lastname" required>
                            
                            <label for="email"><b>Email Address</b></label>
                            <input class="form-control" id="email" type="email" name="email" required>


                            <label for="phonenumber"><b>Phone Number</b></label>
                            <input class="form-control" id="phonenumber" type="text" name="phonenumber" required>

                            <label for="password"><b>Password</b></label>
                            <input class="form-control" id="password" type="password" name="password" required>
                            
                            <hr class="mb-3">
                            <a href="indexnew.html"><input class="btn btn-primary" type="submit" id="register" name="create" value="Sign Up"></a>
                        </div>
                    </div>
            </div>
        </form>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script type="text/javascript">
    $(function(){
        $('#register').click(function(e){


            var valid = this.form.checkValidity();
            if(valid) {


                var firstname = $('#firstname').val();
                var lastname = $('#lastname').val();
                var email = $('#email').val();
                var phonenumber = $('#phonenumber').val();
                var password = $('#password').val();
                
                e.preventDefault();


                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname, lastname: lastname, email: email, phonenumber: phonenumber, password: password},
                    success: function(data) {
                    Swal.fire({
                                'title': 'Successful',
                                'text': data,
                                'type': 'success'
                            })
                    },
                    error: function(data) {
                    Swal.fire({
                                'title': 'Errors',
                                'text': 'There were errors while saving the data',
                                'type': 'error'
                            })
                    },
                });


                
            }
            else {
                
            }
            
        });
        
    });
</script>
</body>
</html>