<?php
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
        header("location: https://hirenet.orgfree.com");
    } else {
        echo "<script>
            alert('Invalid Credentials. We are redirecting you back to the login page.');
            window.location.href = '_login.html';
        </script>";
    }
} else {
    echo "<script>
        alert('Invalid Credentials. We are redirecting you back to the login page.');
        window.location.href = '_login.html';
    </script>";
}
?>
