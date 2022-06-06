<?php
Include"../db_config.php";
// var_dump($_POST) ;
$email=$_POST['email'];
$password=$_POST['password'];

 // Check input errors before inserting in database
 //if (empty($name_err) && empty($email_err) && empty($password_err)) {
    // Prepare an insert statement
  // echo $sql = "INSERT INTO userdata (name, email, passsword) VALUES (:name, :email, :password)";
  $sql= "INSERT INTO `demo` ( `email` ,  `password`) VALUES (:email, :password)";

    if ($stmt = $pdo->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":email", $param_email);
        $stmt->bindParam(":password", $param_password);

        // Set parameters
        $param_email = $email;
        $param_password = $password;

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Records created successfully. Redirect to landing page
           // header("location: index.php");
           // exit();
           echo "sucess added in database";
           header("location: index.html");
           
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    unset($stmt);
//}

?>