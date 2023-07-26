<?php 
echo ' 
<head>
   <meta http-equiv="refresh" content="0,https://hirenet.orgfree.com/login.html">
</head>
';

include '_dbconnect.php';
$login = false;


$username = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$hash = password_hash($password, PASSWORD_DEFAULT);
$sql = 'SELECT * FROM `users` WHERE password="$hash"';
$result = mysqli_query($conn, $sql);
echo $result;
if ($result){
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("location: https://hirenet.orgfree.com");

} 

else{
     echo "<script>
    alert('Invalid Credentials. We are redirecting you back to login page.');
    </script>"; 
}




?>	