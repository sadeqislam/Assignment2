<?php
$categoriesFile = 'data/categories.txt';

if (file_exists($categoriesFile)) {
    $categories = file($categoriesFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}