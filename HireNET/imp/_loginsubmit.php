
<?php
echo ' 
<head>
   <meta http-equiv="refresh" content="0,https://hirenet.orgfree.com/login.html">
</head>';
include '_dbconnect.php';
$login = false;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `users` WHERE email='$email'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hash = $row['password'];
    if (password_verify($password, $hash)) {
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: https://hirenet.orgfree.com"); // Redirect to the main page on successful login
    } else {
        echo "<script>
            alert('Invalid Credentials. We are redirecting you back to the login page.');
            </script>";
        }
        // window.location.href = 'https://hirenet.orgfree.com/login.html';
} else {
    echo "<script>
        alert('Invalid Credentials. We are redirecting you back to the login page.');
    </script>";
}
?>
