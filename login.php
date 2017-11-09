<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
<head>
  <meta charset = "utf-8" />
  <title>Sign Up</title>
  <style type="text/css">
form{
border: 3px solid #f1f1f1;
}
input[type=text], input[type=password] {
    width: 20%;
    padding: 9px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

body {
  font-family: "Open Sans";
  font-size: 15px;
  font-style: normal;
  font-variant: normal;
  font-weight: 500;
  line-height: 26.4px;
  background-color: #f2f2f2;
}

/*signup button*/
button {
    color: black;
    background-color: #FBE1E1;
    padding: 8px 13px;
    margin: 8px 0;
    border: 1px solid #ccc;
    border-radius:;
    cursor: pointer;
    width: 20%;
}

 /*PUSHEEN need it*/
button:hover { 
  background-color: white;
}

 /*placeholder text size*/
input,
input::-webkit-input-placeholder {
    font-size: 13px;
    line-height: 1;
}

.signupbutton {
    float: center;
    width: 100%<br>;
}


.container {
    padding: 2px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}


@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}


</style>
<center>
<h3>
<b>Sign In</b>
</h3>
  <div class="container"> 
    <form class="form-horizontal" action="./db_add.php" method="POST" target="_blank">
       <div class="control-group">
         <label class="control-label"  for="username">Email</label>
            <div class="controls">
    <input required="" type="text" placeholder="Email" name="firstname" required ><br>
    
    <input required="" type="password" placeholder="Password" name="lastname" required><br>

    <div class="clearfix">

      <button type="submit" class="signupbutton" href=""><b>SIGN IN</b></button>
      <br>
    <label><small>Don't have an account?</small></label>
    <a class="b-blue-link" href="https://web.njit.edu/~maa222/project1/signup.php"><small>Create one!</small></span></a>
  <center>
  </div>
  </head>
</html>