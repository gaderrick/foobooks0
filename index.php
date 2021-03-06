<?php
require "helpers.php";
require "logic.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Foobooks 0</title>
    <meta charset="utf-8">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          rel="stylesheet"
          crossorigin="anonymous">

    <link href="styles.css" rel="stylesheet">
</head>

<body>
<h1>Foobooks 0</h1>
<form method="get" action="index.php">
    <label>Search for a book:
        <input type="text" name="searchTerm" value="<?= sanitize($searchTerm) ?>">
    </label>
    <input type="submit" value="Search">
</form>

<?php if ($searchTerm): ?>
    <p>You searched for <em><?= sanitize($searchTerm) ?></em></p>
<?php else: ?>
    <p>Welcome to foobooks0; enter a title above to search our library</p>
<?php endif; ?>

<?php if ($haveResults): ?>
    <?php foreach ($books as $title => $book): ?>
        <div class="book">
            <div class="title"> <?= $title ?></div>
            <div class="author">by <?= $book["author"] ?></div>
            <img src="<?= $book["cover_url"] ?>" alt="Cover photo for the book <?= $title ?>">
        </div>
    <?php endforeach ?>

<?php elseif ($searchTerm): ?>
    No results
<?php endif; ?>

<footer>
    <a href="http://github.com/gaderrick/foobooks0">View on Github</a>
</footer>

</body>
</html>