<!DOCTYPE html>
<html>
<head>
    <title>Train Ticket</title>
    <style>
        <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url('vandebharat.jpeg') no-repeat center center fixed;
            background-size: cover;
        }
        
        header {
            font-family:system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-color: rgba(76, 175, 80, 0.9);
            color: white;
            padding: 15px 0;
            text-align: center;
            height:81px;
            overflow: hidden;
            width:98%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
        }

        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background-color: white;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
        }

        h1, h2 {
            color: #333;
        }

        h2 {
            margin-bottom: 20px;
        }

        .ticket-details {
            margin-bottom: 15px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .ticket-details p {
            margin: 5px 0;
            color: #666;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            font-size: 16px;
            color: white;
            background-color: #4CAF50;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a049;
        }
        .navbar {
            overflow: hidden;
            background-color: rgba(51, 51, 51, 0.9);
        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    
    </style>
</head>
<body>

<header>
    <h1>Your Train Ticket</h1>
</header>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="about1.html">About Us</a>
    <a href="contact.html">Contact</a>
</div>

<div class="container">
<?php
if(isset($_GET['train_id'])) {
    $train_id = $_GET['train_id'];
    
    $connection = mysqli_connect('localhost', 'root', '', 'trainbooking');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM trainbook WHERE train_id='$train_id'";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            echo "<h2>Train Ticket</h2>";
            echo "<p>Train Name: {$row['train_name']}";
        }
    }
}
?>