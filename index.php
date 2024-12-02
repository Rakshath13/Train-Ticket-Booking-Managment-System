<!DOCTYPE html>
<html>
<head>
    <title>Train Ticket Booking</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-size: cover;
            margin: 0;
            padding: 0;
            height: 100vh; 
            background: url('WhatsApp Image 2024-05-26 at 5.18.36 PM (1).jpeg') no-repeat center center fixed;
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
        .footer {
            
             color: black;
             text-align: center;
             padding: 20px 0;
        }

        .footer a {
            color: black;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }

        .company_logo{
            width:auto;
            height:auto;
            max-height: 100px;
            

        }
        .navbar img {
            height: 30px; /* Reduced height */
            margin-right: 15px;
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

        .container {
            padding: 20px;
            max-width: 800px;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-top: 20px;
           
        }
       
        .booking-form {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group select,
        .form-group input[type="date"] {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }

        h1, h2 {
            color: #333;
        }

        h2 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<header>
   <h1>ExpressTracks</h1><br>
   <h4>Train travel simplified</h4>
</header>

<div class="navbar">
    
    <a href="index.php">Home</a>
    <a href="about1.html">About Us</a>
    <a href="contact.html">Contact</a>
</div>

<div class="container">
    <div class="booking-form">
        <center><h2>BOOK YOUR TICKETS</h2></center>
       
        <form action="available_trains.php" method="post">
            <div class="form-group">
                <label for="from">From:</label>
                <select id="from" name="from" required>
                    <option value="kundapura">Kundapura</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="to">To:</label>
                <select id="to" name="to" required>
                    <option value="udupi">Udupi</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="passengers">Passengers:</label>
                <select id="passengers" name="passengers" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Submit">
            </div>
        </form>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <p>&copy; 2024 ExpressTracks. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
    </div>
</footer>

</body>
</html>