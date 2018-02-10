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
<?php foreach ($books as $title => $book): ?>
    <div class="book">
        <div class="title"> <?= $title ?></div>
        <div class="author">by <?= $book["author"] ?></div>
        <img src="<?= $book["cover_url"] ?>" alt="Cover photo for the book <?= $title ?>">
    </div>
<?php endforeach ?>

<footer>
    <a href="http://github.com/gaderrick/foobooks0">View on Github</a>
</footer>

</body>
</html>