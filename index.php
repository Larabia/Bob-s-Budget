<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
    "healthInsurance" => 200
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$annualIncome = $netIncome - $socialSecurity;

echo "Bob's anual income (after taxes) is ".$annualIncome;

$annualIncome -=$annualExpenses["vacations"];
$annualIncome -=$annualExpenses["carRepairs"];

echo "\nBob's anual income (after taxes and annual expenses) is ".$annualIncome;


