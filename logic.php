<?php
$booksJson = file_get_contents("books.json");

$books = json_decode($booksJson, true);

$haveResults = false;

# Version 1
//if (isset($_GET["searchTerm"])) {
//    $searchTerm = $_GET["searchTerm"];
//} else {
//    $searchTerm = false;
//}

# Version 2
$searchTerm = isset($_GET["searchTerm"]) ? $searchTerm = $_GET["searchTerm"] : $searchTerm = "";

# Version 3 - null coalescing operator
//$searchTerm = $_GET["searchTerm"] ?? "";

if ($searchTerm) {
    $searchTerm = $_GET["searchTerm"];

    foreach ($books as $title => $book) {
        if ($title != $searchTerm) {
            unset($books[$title]);
        }
    }

    if (count($books) > 0) {
        $haveResults = true;
    }
}

