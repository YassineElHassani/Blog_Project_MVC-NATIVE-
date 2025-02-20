<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
</head>
<body>

    <h1>User Registration</h1>

    <?php if (isset($registerMessage)): ?>
        <p><?php echo $registerMessage; ?></p>
    <?php endif; ?>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <input type="password" name="password" placeholder="Your Password" required>
        <button type="submit">Register</button>
    </form>

</body>
</html>
