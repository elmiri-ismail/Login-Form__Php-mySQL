<?php
  
   $username = "";
   $email = "";
   $errors = array();

//connect to database
$db = mysqli_connect('localhost','root','Miriismail2002','registration');

// if the register button is clicked
if (isset($_POST['register'])) {
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password_1 = ($_POST['password_1']);
    $password_2 = ($_POST['password_2']);
// ensure that form fields are filled properly
if (empty($username)) {
    array_push($errors ,"Username is required"); // add error to errors array
} 
if (empty($email)) {
    array_push($errors ,"email is required");
}
if (empty($password_1)) {
    array_push($errors ,"password is required");
}

    if ($password_1 != $password_2) { 
     array_push($errors, "The two passwords do not match");
    }
//if there are no errors , save user to database
if(count($errors)== 0) {
$password = md5($password_1); // encrypt password before storing in database (security)
$sql = "INSERT INTO users (username,email,password) 
    VALUES('$username','$email','$password')";
mysqli_query($db , $sql);
}
}

        
  




?>