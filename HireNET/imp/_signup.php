<?php
echo ' 
<head>
   <meta http-equiv="refresh" content="0,https://hirenet.orgfree.com/signup.html">
</head>
';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">';

include '_dbconnect.php';

$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$country = $_POST['country'];
$number = $_POST['number'];
$gender = $_POST['gender'];
$skills = $_POST['skills'];
$industries = $_POST['industries'];
$sql = "SELECT * FROM `users` WHERE username='$username' and email='$email'";
$result = mysqli_query($conn, $sql);
$num_rows = mysqli_num_rows($result);
if ($num_rows == 0) {
    if(($password == $cpassword)){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users`(`name`, `email`, `password`, `country`, `number`, `gender`, `skills`, `industries`, `dateTime`) VALUES ($username,$email,$hash,$country,$number,$gender,$skills,$industries,current_timestamp()";
        $result = mysqli_query($conn, $sql);
        if ($result){
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congrats! </strong> You account is created successfully. Go and <a href="https://hirenet.orgfree.com/login.html">Login</a> now.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            header("location: https://hirenet.orgfree.com/login.html");
        }
    }
    else{
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error! </strong> Passwords do not match.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
}
else{
    echo "<script>
    alert('The Username or E-mail is already in use. Try again with another Username.');
    </script>";
}

echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>';

?>