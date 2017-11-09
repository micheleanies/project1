<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans"/>
<head>
  <meta charset = "utf-8" />
  <title>Sign Up</title>
  <style type="text/css">
form {
 
}
input[type=text], input[type=password] {
    width: 20%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1.5px solid #ccc;
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
  <form class="form-horizontal" action="./db_add.php" method="POST" target="_blank">
  <h3><b><u>Create Account</u></b></h3>
 
    <input required type="text" id="fname" placeholder="First Name" name="firstname" required ><br>
    
    <input required type="text" id="lname" placeholder="Last Name" name="lastname" required><br>

    <input required type="text" id="email" placeholder="email@email.com" name="email" required><br>

    <input required type="password" id="password" placeholder="Password" name="email" required><br>

    <input required type="text" id="phone" placeholder="xxx-xxx-xxxx" name="phone" required><br>

    <input required type="text" id="birthday" placeholder="mm/dd/yyyy" name="birthday" required><br>

    <label><small>Gender:</small></label>
    <input type="radio" name="gender" value="male"><small>Male</small>
    <input type="radio" name="gender" value="female"><small>Female</small><br>

      <button type="submit" class="signupbutton" href=""><b>SIGN UP</b></button>
      <br>
    <center>
    </form>
<h3>
<b><u>Sign In</u></b>
<form class="form-horizontal" action="./db_login.php" method="POST" target="_blank">
</h3>
  <div class="container"> 
    <form class="form-horizontal" action="./db_add.php" method="POST" target="_blank">
       <div class="control-group">
         <label class="control-label"  for="username">Email</label>
            <div class="controls">
    <input required="" type="text" id="email" placeholder="Email" name="firstname" required ><br>
    
    <input required="" type="password" id="password" placeholder="Password" name="lastname" required><br>

    <div class="clearfix">

      <button type="submit" class="signupbutton" href=""><b>SIGN IN</b></button>
      <br>
  <center>
  </form>
  </div>
  </head>
</html>