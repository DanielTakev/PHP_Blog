<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <style>
        <?php include 'style/styles.css'; ?>
    </style>
</head>
<body>
<?php include_once 'logged_in_header.php'; ?>
<br>
<br>
<br>
<div class="answer">
<?php if (hasRole($db, $userId, 'ADMIN')): ?>
    <a href="<?= url("create_category.php"); ?>">ADMIN ONLY: Create new category</a> |
<?php endif; ?>
</div>
<table border="1">
    <thead>
    <tr>
        <th>Name</th>
        <th>Questions Count</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $category): ?>
        <tr>
            <td>
                <a href="<?= url("category.php?id={$category['id']}"); ?>">
                    <?= $category['name']; ?>
                </a>
            </td>
            <td><?= $category['questions_count']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>