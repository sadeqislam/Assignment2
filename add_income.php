<?php
echo "Enter amount: ";
$amount = trim(fgets(STDIN));

echo "Enter category: ";
$category = trim(fgets(STDIN));

$file = 'data/' . (basename(__FILE__) === 'add_income.php' ? 'incomes.txt' : 'expenses.txt');
$data = "$amount,$category\n";
file_put_contents($file, $data, FILE_APPEND);

echo "Income/Expense added successfully.\n";
?>
