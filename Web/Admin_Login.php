<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Customer_Login.css">
    <link rel="stylesheet" href="css/nav_bar.css">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="nav-bar-div">
            <nav class="nav-bar">
                <div class="title">Bus Ticket Booking</div>
                    <a href="#" class="toggle-button">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                    </a>
                <div class="nav-links">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="Admin_Login.php">Admin Login</a></li>
                        <li><a href="Customer_Login.php">Customer Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    <div class="form_content" id="2">
        <div class="form_text">
            <form onsubmit="false" action="" method="POST">
                <h3>Admin Login</h3>
                <input type="text" required="" class="input" name="email" placeholder="Email Id" id="email" >
                <input type="password" required="" class="input" name="password" placeholder="Password" id="password">
                <div>
                    <button class="button" id="submit">Submit</button>
                </div>
                <br>
                <br>
                <div>
                    <span id="exist" class="input span"></span>
                </div>
            </form>     
        </div>
    </div>
    <script src="js/login_admin.js"></script>
</body>
</html>