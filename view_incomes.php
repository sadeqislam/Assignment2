<?php
$file = 'data/' . (basename(__FILE__) === 'view_incomes.php' ? 'incomes.txt' : 'expenses.txt');

if (file_exists($file)) {
    $entries = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($entries as $entry) {
        list($amount, $category) = explode(',', $entry);
        echo "Amount: $amount, Category: $category\n";
    }
} else {
    echo "No data available.\n";
}
?>
