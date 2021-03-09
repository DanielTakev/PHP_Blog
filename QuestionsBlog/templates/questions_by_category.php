<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Questions</title>
    <style>
        <?php include 'style/styles.css'; ?>
    </style>
</head>
<body>
<?php include_once 'logged_in_header.php'; ?>

<a href="<?= url("categories.php?"); ?>" class="backHeader">Back to all categories</a>
|
<a href="<?= url("ask_question.php?category_id=$id"); ?>" class="backHeader">Ask new question</a>
<?php foreach ($questions as $question): ?>
    <hr/>
    <br>
    <div class="question">
    <span>
        <a href="<?= url("question.php?id={$question['id']}"); ?>">
            <?= htmlspecialchars($question['title']); ?>
        </a>
    </span>
        <span> (<?= $question['answers_count']; ?>)</span>
        <br/>
        <span><?= htmlspecialchars($question['author_name']); ?></span>
        <span><?= $question['created_on']; ?></span>
        <span><?= $question['category_name']; ?></span>
    </div>
    <div>
        <?php if (hasLiked($db, $userId, $question['id'])): ?>
            <a href="<?= url("category.php?id={$_GET['id']}&action=removeLike&question_id={$question['id']}"); ?>"
               class="likeButton">Remove like</a> (<?= $question['likes_count']; ?>)
        <?php else: ?>
            <a href="<?= url("category.php?id={$_GET['id']}&action=like&question_id={$question['id']}"); ?>"
               class="likeButton">Like</a> (<?= $question['likes_count']; ?>)
        <?php endif; ?>
    </div>
<?php endforeach; ?>
</body>
</html>