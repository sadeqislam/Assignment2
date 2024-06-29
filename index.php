<?php
// Main menu
echo "1. Add income\n";
echo "2. Add expense\n";
echo "3. View incomes\n";
echo "4. View expenses\n";
echo "5. View savings\n";
echo "6. View categories\n";
echo "Enter your option: ";

$option = trim(fgets(STDIN));

switch ($option) {
    case 1:
        include 'add_income.php';
        break;
    case 2:
        include 'add_expense.php';
        break;
    case 3:
        include 'view_incomes.php';
        break;
    case 4:
        include 'view_expenses.php';
        break;
    case 5:
        include 'view_savings.php';
        break;
    case 6:
        include 'view_categories.php';
        break;
    default:
        echo "Invalid option.\n";
        break;
}
?>
