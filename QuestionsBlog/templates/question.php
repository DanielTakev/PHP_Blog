<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Question</title>
    <style>
        <?php include 'style/styles.css'; ?>
    </style>
</head>
<body>
<?php include_once 'logged_in_header.php'; ?>

<a href="<?=url("category.php?id={$question['category_id']}");?>" class="backHeader">Back to questions in this category</a>

<div class="question">
    <span>
        Title:
        <?= htmlspecialchars($question['title']); ?>
    </span>
    <br/>
    <span>
        <?= htmlspecialchars($question['body']); ?>
    </span>
    <br/>
    <br/>
    Asked by:
    <span><?= htmlspecialchars($question['author_name']); ?></span>
    <span><?= $question['created_on']; ?></span>
    <span><?= $question['category_name']; ?></span>
</div>
<hr/>
<?php foreach ($answers as $answer): ?>


    <hr/>
    <div class="answerby">Answer by: <?= htmlspecialchars($answer['author_name']); ?></div>
    <div class="answer"><?= htmlspecialchars($answer['body']); ?></div>
<?php endforeach; ?>
<br>
<hr>
<br>
<form method="post">
    <p>Give your answer here:</p>
    <textarea rows="4" cols="40" name="body"></textarea>
    <input type="submit" value="Answer!" name="answer"/>
</form>
</body>
</html>
