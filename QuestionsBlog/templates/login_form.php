<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login form</title>
    <style>
        <?php include 'style/styles.css'; ?>
    </style>
</head>
<body>

<h1>Login form</h1>

<div class="logoutHeader">If you don't have an account, <a href="register.php">REGISTER</a> first.</div>

<form method="post">
    <p>Username:<input type="text" value="<?= $username; ?>" class="login" name="username"/><br/></p>
    <p>Password: <input type="password" value="<?= $password; ?>" class="login" name="password"/><br/></p>
    <input value="Log Me!" type="submit"/>
</form>

<div id="response">
    <?= $response; ?>
</div>

</body>
</html>