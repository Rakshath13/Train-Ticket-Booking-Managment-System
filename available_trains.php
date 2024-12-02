<!DOCTYPE html>
<html>
<head>
    <title>Available Trains</title>
    <style>
        /* Add your CSS styling here */
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            background-color: #f9f9f9;
            margin-bottom: 10px;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        li:hover {
            background-color: #f1f1f1;
        }

        a {
            text-decoration: none;
            color: #4CAF50;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        p {
            color: #666;
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
    <h1>Available Trains</h1>
</header>
<div class="navbar">
    <a href="index.php">Home</a>
    <a href="about1.html">About Us</a>
    <a href="contact.html">Contact</a>
</div>
<div class="container">
<?php
if(isset($_POST['submit'])) {
    $from = $_POST['from']; 
    $to = $_POST['to'];
    $date = $_POST['date'];
    $passengers = $_POST['passengers'];
    
    $connection = mysqli_connect('localhost', 'root', '', 'trainbooking');
    if (!$connection) {
        die("Database connection failed: " . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM trainbook WHERE from_s='$from' AND to_s='$to' AND departure_d='$date' AND passengers>='$passengers'";
    $result = mysqli_query($connection, $query);
    
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            echo "<h2>Available Trains:</h2>";
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li><a href='ticket.php?train_id={$row['train_id']}'>{$row['train_name']} - Departure: {$row['departure_time']}, Arrival: {$row['arrival_time']}</a></li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No trains available for the selected route and date.</p>";
        }
    } else {
        echo "Error: " . mysqli_error($connection);
    }
    
    mysqli_close($connection);
}
?>
</div>

</body>
</html>