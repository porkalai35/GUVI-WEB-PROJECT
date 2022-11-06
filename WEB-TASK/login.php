<?php
$email = $password = "";

session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css"></link>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>
    <title>LOGIN</title>
    <style> 
            .required{color: #FF0000;}
            .error-message{font-size: 12px;color: red;display: none;}
    </style>
</head>
<body class="background">
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                

                <center>
                        <img width="50 " src="https://pic.onlinewebfonts.com/svg/img_458466.svg">
                        <!-- <img width="50 " src="IMAGES/login.svg">  -->
                    </center>
                    <h5 class="card-title text-center">LOGIN NOW</h5>
                    
                       <form id="ajaxForm" action="" method="post" autocomplete="off">
                        <div class="form-label-group">
                            <label for="inputEmail">Email<span class="required">*</span></label>
                            <input type="email" name="email" id="email" placeholder="email" autocomplete="off" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                            <div id="nameError" class="error-message">nameError</div>
                        </div> <br/>
                        
                        <div class="form-label-group">
                            <label for="inputEmail">Password<span class="required">*</span></label>
                            <input type="password" name="password" placeholder="Password" autocomplete="off" id="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                            <div id="passwordError" class="error-message">passwordError</div>
                        </div> <br/>
                        <div class="form-group">
                        <a class="btn btn-primary" href="profile.php" role="button">Login</a>
                        </div> 
                       
                        <br>
                        <p>Don't have an account? <a href="register.php">Register now</a>.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

 
</script>
</body>
</html>


























