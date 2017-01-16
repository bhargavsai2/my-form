<!DOCTYPE HTML>  
<html>
<head>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Raleway">
</head>
<style type="text/css">

  body{
    background: url("img.jpg");
  
    background-size: cover;

  }
  form{
    margin-top: 120px;
  }
input[type=submit] {
    background-color: white;
    border:none;
    color: black;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  margin-bottom: 20px;
    margin-top:20px;
  /*  border: 2px solid #4CAF50;*/
   border: 2px solid #f05f40;
    cursor: pointer;
    border-radius: 25px;
    transition-duration: 0.4s;
}
fieldset{
  border:none;
  /*border-color:#4CAF50;*/
  /*background-color: #f2f2f2;*/
  /*color:teal;*/
  color: white;
  width: 30%;
  padding: 20px;
  margin: auto;
  border-radius: 25px;
  opacity: 0.8;
}
fieldset:hover{
  filter: blur(0px);
  opacity: 1;
  transition-duration: 0s;
}
input[type=submit]:hover{
  background-color: #f05f40;
/*background-color: #4CAF50;*/
color:white;
}
input[type=button] {
    background-color: #f05f40;
    border:none;
    color: white;
    padding: 10px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
  margin-bottom: 20px;
    margin-top:20px;
    border: 2px solid #f05f40;
    cursor: pointer;
    border-radius: 25px;
    transition-duration: 0.4s;
}
input[type=button]:hover{
background-color: white;
color:black;
}
input{
  border-radius: 5px;
  border:none;
}
legend{
  font-family: "Raleway", Arial, sans-serif;
  font-size: 30px;
}
*{
  font-family: "Raleway", Arial, sans-serif;
}
textarea{
  border-radius: 5px;
  border:none;
}
</style>
<body>  

<?php
// define variables and set to empty values
$name = $email  = $comment = $Gender = $website = $password = $confirm_password="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $Gender = test_input($_POST["gender"]);
  $password = test_input($_POST["password"]);
  $confirm_password=test_input($_POST["confirm_password"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="myform" onsubmit="return validateform()" align="center">  
<fieldset>
<legend>Register</legend>
  <input type="text" name="name" placeholder="Username" size="27"><br>
  <p id="n"></p>
  <input type="email" name="email" placeholder="example@gmail.com" size="27"><br>
    <p id="e"></p>
   <input type="password" name="password" placeholder="password" size="27"><br>
    <p id="p"></p>
  <input type="password" name="confirm_password" placeholder="confirm password" size="27"><br>
    <p id="cp"></p>
<input type="url" name="website" placeholder="something.com" size="27"><br>
    <p id="w"></p>
  <textarea name="comment" rows="5" cols="40" placeholder="have any feedbacks?"></textarea>
  <br>
  <p id="c"></p>

  <input type="radio" name="gender">Female
  <input type="radio" name="gender">Male
  <br>
  <input type="submit" id="b" name="submit" value="Submit">
  <input type="button" name="button" value="reload" onClick="window.location.reload()">
</fieldset>
 
</form>
<fieldset align="center">
<?php

if(isset($_POST['submit'])){ 
echo "<b>Thank you for register</b>";
echo "<br>";
echo "<em>we accept you</em>";
echo "<br>";
echo "Name: $name";
echo "<br>";
echo "Email: $email";
echo "<br>";
echo "Website: $website";
echo "<br>";
echo "Comment: $comment";
echo "<br>";
if($_POST["password"]!=$_POST["confirm_password"]){
  echo "two passwords do not match";
}
else{
  echo "password matched and submitted";
}
}
?> 
</fieldset>
</body>
<script>  
function validateform(){  
var name=document.myform.name.value;
var password=document.myform.password.value;    
var cpassword=document.myform.confirm_password.value;
var email=document.myform.email.value;
var comment=document.myform.comment.value;

if (name==""|| email==""||password==""||cpassword==""){ 
   document.getElementById('n').style.color="red";
   document.getElementById('e').style.color="red";
   document.getElementById('n').innerHTML="username cannot be empty";
   document.getElementById('e').innerHTML="please provide valid email";
  document.getElementById('p').style.color="red";
  document.getElementById('p').innerHTML="please input password";
  document.getElementById('cp').style.color="red";
  document.getElementById('cp').innerHTML="please input confirm password";
 // document.getElementById('c').style.color="red";
 // document.getElementById('c').innerHTML="are you sure?";
 // document.getElementById('cp').style.color="red";
 // document.getElementById('cp').innerHTML="please re-type your password";

  return false;  
}  
else{

  return true;
}
/* else if(name.length<3){
  document.getElementById('n').style.color="red";
  document.getElementById('n').innerHTML="username must be atleast of 3 characters";
  return false;
}
else if(name.length>3){
    document.getElementById('n').style.color="green";
    document.getElementById('n').innerHTML="username accepted";
    return true;
    }
 // else if(email.length==0){
   //       document.getElementById('e').style.color="red"
  //           document.getElementById('n').innerHTML="email cannot be empty";
  //           return false;
    if(password!=cpassword){
        document.getElementById('cp').style.color="red";
          document.getElementById('cp').innerHTML="password do not match";
          return false;
    }*/

  
  }

</script>
</body>
</html>
