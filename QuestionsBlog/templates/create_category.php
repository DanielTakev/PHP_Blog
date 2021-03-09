<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create category</title>
    <style>
        <?php include 'style/styles.css'; ?>
    </style>
</head>
<body>
<?php include_once 'logged_in_header.php'; ?>

<a href="<?= url("categories.php"); ?>" class="backHeader">Back categories</a>
<br>
<br>
<div class="answerby">
    <form method="post">
        Name <input type="text" name="name"/><br/>
        <br>
        <input type="submit" value="Create it!"/>
    </form>
</div>
</body>
</html>