<?php
// success.php – show submitted info
$firstname = isset($_GET['firstname']) ? $_GET['firstname'] : '';
$lastname = isset($_GET['lastname']) ? $_GET['lastname'] : '';
$age = isset($_GET['age']) ? $_GET['age'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$course = isset($_GET['course']) ? $_GET['course'] : '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registration Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #667eea, #764ba2);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }
        a button {
            padding: 10px 20px;
            margin-top: 15px;
            border: none;
            border-radius: 5px;
            background: #48bb78;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        a button:hover {
            background: #38a169;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>✅ Registration Successful!</h2>
    <p><strong><?php echo htmlspecialchars($firstname.' '.$lastname); ?></strong></p>
    <p>Age: <?php echo htmlspecialchars($age); ?></p>
    <p>Email: <?php echo htmlspecialchars($email); ?></p>
    <p>Course: <?php echo htmlspecialchars($course); ?></p>
    <a href="form.php"><button>Register Another Student</button></a>
</div>
</body>
</html>