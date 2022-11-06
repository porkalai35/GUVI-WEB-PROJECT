<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Profile</title>
    <style> .alert-successs{background-color: #1eaf59;color: white;display: none}
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
                    <div>
                      <h1 class="my-5">Hi, Welcome to <span class="heading">GUVI Profile Page</span></h1>
                    
                        <img width="50 " src="https://pic.onlinewebfonts.com/svg/img_458502.svg"></div>
                        <!-- <img width="50 " src="IMAGES/profile.svg">  -->
                        
                    </center><br>
                    <h5 class="card-title text-center">UPDATE YOUR PROFILE</h5>
                    <div class="alert alert-successs" id="successMessage">Updated Successfully!!</div>
   
                    <form id="ajaxForm" action="" method="post">
                        <div class="form-label-group">
                            <label for="inputEmail">User Name<span class="required">*</span></label>
                            <input type="text" name="name" id="name" class="form-control"  placeholder="Name" autocomplete="off">
                            <div id="nameError" class="error-message">nameError</div>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">Email<span class="required">*</span></label>
                            <input type="text" name="email" id="email" class="form-control"  placeholder="Email" autocomplete="off">
                            <div id="emailError" class="error-message">emailError</div>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">Contact<span class="required">*</span></label>
                            <input type="text" name="contact" id="contact" class="form-control"  placeholder="Contact" maxlength="10" >
                            <div id="contactError" class="error-message">contactError</div>
                        </div> <br/>
                        <div class="form-label-group">
                            <label for="inputEmail">Password<span class="required">*</span></label>
                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password" autocomplete="off">
                            <div id="passwordError" class="error-message">passwordError</div>
                        </div> <br>
                        <div class="form-label-group">
                            <label for="inputEmail">Age<span class="required">*</span></label>
                            <input type="number" name="age" id="age" class="form-control"  placeholder="age" autocomplete="off">
                            <div id="ageError" class="error-message">ageError</div>
                        </div> <br>
                        <div class="form-label-group">
                            <label for="inputEmail">Gender<span class="required">*</span></label>
                            <input type="text" name="gender" id="gender" class="form-control"  placeholder="gender" autocomplete="off">
                            <div id="genderError" class="error-message">genderError</div>
                        </div> <br>

                        <button type="submit" name="submitBtn" id="submitBtn"  href="login.php" class="btn btn-md btn-primary btn-block text-uppercase" >Submit Form</button><br>
                        <center>
                        <a href="login.php" class="btn btn-danger ml-3" style="margin:10px;margin-left:450px">LOGOUT</a>
                        </center>
                    </form>
                    </div>
    </div>     
            
        </div>
    </div>
</div>

<script type="text/javascript">
  $("form#ajaxForm").on("submit",function (e) {
      e.preventDefault();
      var name = $("#name").val();
      var email = $("#email").val();
      var contact = $("#contact").val();
      var password = $("#password").val();
      var age = $("#age").val();
      var gender = $("#gender").val();
      if (name == ""){
          $("#nameError").show();
          $("#nameError").html("Please enter name");
          $("#nameError").fadeOut(4000);
          $("#name").focus();
      }else if (email == ""){
          $("#emailError").show();
          $("#emailError").html("Please enter email");
          $("#emailError").fadeOut(4000);
          $("#email").focus();
      }else if (!validateEmail(email)){
          $("#emailError").show();
          $("#emailError").html("Please enter valid email");
          $("#emailError").fadeOut(4000);
          $("#email").focus();
        
      }else if (contact == ""){
          $("#contactError").show();
          $("#contactError").html("Please enter contact");
          $("#contactError").fadeOut(4000);
          $("#contact").focus();
      }else if (!validatePhoneNumber(contact)){
          $("#contactError").show();
          $("#contactError").html("Please enter valid contact");
          $("#contactError").fadeOut(4000);
          $("#contact").focus();

        }else if (password == ""){
          $("#passwordError").show();
          $("#passwordError").html("Please enter password");
          $("#passwordError").fadeOut(4000);
          $("#password").focus();

        }else if (age == ""){
          $("#ageError").show();
          $("#ageError").html("Please enter age");
          $("#ageError").fadeOut(4000);
          $("#age").focus();

        }else if (gender == ""){
          $("#genderError").show();
          $("#genderError").html("Please enter gender");
          $("#genderError").fadeOut(4000);
          $("#gender").focus();
       
      }else{
          $("#submitBtn").hide('fast');
          $("#loader").show('fast');
          $.ajax({
              url:"ajax.php",
              data:{key:"saveData",name:name,email:email,contact:contact,password:password,age:age,gender:gender},
              method:"POST",
              success:function (response) {
                
                  var data = response.split('^');
                  if (data[1] == "saved") {
                      $("#submitBtn").show('fast');
                      $("#loader").hide('fast');
                      $("#successMessage").show('fast');
                      $("#successMessage").fadeOut(5000);
                      $("form#ajaxForm").each(function () {
                          this.reset();
                      });
                  }
              }
          });
      }
  });

  function validateEmail(inputText) {
      var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
      if(inputText.match(mailformat)) {
          return true;
      } else{
          return false;
      }
  }

  function validatePhoneNumber(inputtxt) {
      var phonenoPattern = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
      if( inputtxt.match(phonenoPattern) ) {
          return true;
      }
      else {
          return false;
      }
  }

  
</script>
</body>
</html>