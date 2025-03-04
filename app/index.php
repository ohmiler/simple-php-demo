<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <style>
        nav {
            background-color: #333;
            padding: 1rem;
            margin-bottom: 20px;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        
        nav li {
            float: left;
        }
        
        nav a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }
        
        nav a:hover {
            background-color: #111;
        }
        
        .content {
            padding: 20px;
        }
        
        .right {
            float: right;
        }
    </style>
</head>
<body>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <?php if (isset($_SESSION["user_id"])): ?>
                <li><a href="dashboard.php">Dashboard</a></li>
                <li class="right"><a href="logout.php">Logout</a></li>
            <?php else: ?>
                <li class="right"><a href="register.php">Register</a></li>
                <li class="right"><a href="login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>
    
    <div class="content">
        <h1>Welcome to Our Website</h1>
        <p>This is the home page.</p>
        <?php if (isset($_SESSION["username"])): ?>
            <p>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</p>
        <?php else: ?>
            <p>Please login or register to access more features.</p>
        <?php endif; ?>
    </div>
</body>
</html>