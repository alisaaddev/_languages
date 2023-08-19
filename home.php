<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: signup.php"); 
    exit();
} 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="home.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>no name</title>
</head>
<body>
    <nav>

        <div class="container">
            <div class="div"> 
                  <a href="" class="home">home</a>
            </div>

            <div class="div2">
                <a href="about.html" class="about">about</a>
                <a href="logout.php" class="english">logout</a>
                <a href="com.html" class="communicate">communicate</a>
            </div>
        </div>
    </nav>
    <p class="text">learn any languge in 10 minutes daily for free !</p>
   <a href="start.html" class="start">start learning</a>
<style>
    a {
        text-decoration: none;
    }
    
</style>
</body>
</html>