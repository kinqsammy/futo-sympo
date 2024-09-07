<?php
$email = $_GET['Sname'];
$email = $_GET['Fname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Success</title>
<script>
        setTimeout(function() {
            window.location.href = "index.html"; 
        }, 5000);
    </script>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div style="width:auto; height: auto; text-align: center;">
        <img src="images/tick.gif" width="240px"/>
        <h1>Dear <?php echo $_GET['Sname']; ?> <?php echo $_GET['Fname']; ?>,</h1>
        <h1>You're successfully registered</h1>
        <p>Thank you for registering!</p>
    </div>
</body>
</html>