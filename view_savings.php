<?php
$incomeFile = 'data/incomes.txt';
$expenseFile = 'data/expenses.txt';

$totalIncome = getTotalAmount($incomeFile);
$totalExpense = getTotalAmount($expenseFile);
$savings = $totalIncome - $totalExpense;

echo "Total income: $totalIncome\n";
echo "Total expenses: $totalExpense\n";
echo "Savings: $savings\n";

function getTotalAmount($file) {
    $total = 0;
    if (file_exists($file)) {
        $entries = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($entries as $entry) {
            list($amount, $category) = explode(',', $entry);
            $total += (float) $amount;
        }
    }
    return $total;
}
?>
