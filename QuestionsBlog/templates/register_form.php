<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        <h1>Register form</h1>
    </title>
    <style>
        <?php include 'style/styles.css'; ?>
    </style>
</head>
<body>
<h1>Register form</h1>
<div class="logoutHeader">
    Or go to <a href="login.php">LOGIN</a> if you have an account
</div>
<br>
<div class="login">
    <form method="post">
        Your Username:<input type="text" class="login" value="<?= $username; ?>" name="username"/><br/>
        Your Password: <input type="password" class="login" value="<?= $password; ?>" name="password"/><br/>
        <br>
        <input value="REGISTER ME!" type="submit"/>
    </form>
    <div id="response">
        <?= $response; ?>
    </div>
</div>
</body>
</html>