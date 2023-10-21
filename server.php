<?php
session_start();

// initializing variables
$login = "";
$relaxes   = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'recipe');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $login = mysqli_real_escape_string($db, $_POST['login']);
  //$relaxes = mysqli_real_escape_string($db, $_POST['relaxes']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($login)) { array_push($errors, "login is required"); }
  //if (empty($relaxes)) { array_push($errors, "Relax is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same login and/or relaxes
  $user_check_query = "SELECT * FROM users WHERE login='$login' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['login'] === $login) {
      array_push($errors, "Login already exists");
    }

    //if ($user['relaxes'] === $relaxes) {
    //  array_push($errors, "relaxes already exists");
   // }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$pass = md5($password_1);//encrypt the pass before saving in the database

  	$query = "INSERT INTO users (login, pass) 
  			  VALUES('$login', '$pass')";
  	mysqli_query($db, $query);
  	$_SESSION['login'] = $login;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: lobby.php');
  }
}
// ... 

// LOGIN USER
if (isset($_POST['login_user'])) {
    $login = mysqli_real_escape_string($db, $_POST['login']);
    $pass = mysqli_real_escape_string($db, $_POST['pass']);
  
    if (empty($login)) {
        array_push($errors, "login is required");
    }
    if (empty($pass)) {
        array_push($errors, "Pass is required");
    }
  
    if (count($errors) == 0) {
        $pass = md5($pass);
        $query = "SELECT * FROM users WHERE login='$login' AND pass='$pass'";
        $results = mysqli_query($db, $query);
        //$relaxes = mysqli_query($db, "SELECT relaxes FROM users WHERE login='$login' AND pass='$pass'");
        if (mysqli_num_rows($results) == 1) {
          $_SESSION['login'] = $login;
          $_SESSION['success'] = "You are now logged in";
          header('location: lobby.php');
        }else {
            array_push($errors, "Wrong login/pass combination");
        } 
    }
  }
  
  ?>