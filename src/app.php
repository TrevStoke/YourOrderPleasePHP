<?php
require_once "Order.php";
use YourOrderPlease\Order;

print("Ordering App\n");

$inputs = [
    "",
    "4of Fo1r pe6ople g3ood th5e the2",
    "d4o dru7nken sh2all w5ith s8ailor wha1t 3we a6",
    "3 6 4 2 8 7 5 1 9",
    "twelve12 eleven11 ten10 nine9 eight8 seven7 six6 five5 four4 three3 two2 one1",
];

foreach ($inputs as $input)
{
    $yield = Order::order($input);
    printf("\nInput: %s\nYields: %s", $input, $yield);
}