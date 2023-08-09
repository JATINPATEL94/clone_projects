<?php
session_start();
echo '<img src="images/logo.webp" alt="logo">
<nav class="navbar">
    <ul class="navbar-list">
        <li><a href="/index.php" class="navbar-link Home">Home</a></li>
        <li><a href="/jobs.php" class="navbar-link ">Jobs</a></li>
        <li><a href="/index.php#Services" class="navbar-link ">About</a></li>
        <li><a href="/index.php#Services" class="navbar-link ">Services</a></li>
        <li><a href="/index.php#Contact" class="navbar-link ">Contact</a></li>';
        if ($_SESSION['loggedin']) {
            echo '<li><a href="/logout.php" class="navbar-link ">Logout</a></li>';
        }
        else {
            echo '<li><a href="/login.php" class="navbar-link ">Login</a></li>';
        }
        echo '</ul></nav>';
?>