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

<a href="<?= url("category.php?id={$_GET['category_id']}"); ?>" class="backHeader">Back to questions in this
    category</a>
<br>
<br>
<form method="post">
    <div class="answer">Title <input type="text" size="30" name="title"/>
    </div>

    <div class="question">Question: <br/>
        <textarea rows="6" cols="40" name="body"></textarea>
    </div>

    <div class="answer">Category:
        <select size="1" name="category">
            <?php foreach ($categories as $category): ?>
                <option <?= $category['id'] == $categoryId ? 'selected' : ''; ?>
                        value="<?= $category['id']; ?>"><?= $category['name']; ?> (<?= $category['questions_count']; ?>)
                </option>
            <?php endforeach; ?>
        </select>
    </div>

    <div class="answer">
        Tags:<br/>
        <select multiple="multiple" name="existing_tags[]">
            <?php foreach ($tags as $tag): ?>
                <option value="<?= $tag['id']; ?>"><?= $tag['name']; ?> (<?= $tag['questions_count']; ?>)</option>
            <?php endforeach; ?>
        </select>
        <br/>
    </div>

    <div class="answer">
        Add tags: <input type="text" size="30" name="new_tags" placeholder="Enter your tags separated by comma..."/>
        <br/>
        <br>
    </div>

    <div>
        <input type="submit" class="likeButton" value="Ask!"/>
    </div>
</form>
</body>
</html>