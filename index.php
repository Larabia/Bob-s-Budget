<?php
  
$annualExpenses = [
    "vacations" => 1000,
    "carRepairs" => 1000,    
];

$monthlyExpenses = [
    "rent" => 1500,
    "utilities" => 200,
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

$weeklyExpenses = [
    "gas" => 25,
    "food" => 90,
    "entertainment" => 47
];

$grossSalary = 48150;
$socialSecurity = $grossSalary * .062;

$incomeSegments = [[9700, .88], [29775, .78], [8675, .76]];

$netIncome = ($incomeSegments[0][0] * $incomeSegments[0][1]) + ($incomeSegments[1][0] * $incomeSegments[1][1]) + ($incomeSegments[2][0] * $incomeSegments[2][1]);

$annualIncome = $netIncome - $socialSecurity;

echo "ANUAL income (after taxes) : \n".$annualIncome;

$annualIncome -=$annualExpenses["vacations"];
$annualIncome -=$annualExpenses["carRepairs"];

echo "\nANUAL income (after taxes and annual expenses) : \n".$annualIncome;

$monthlyIncome = $annualIncome/12;

echo "\nMONTHLY income (after taxes and annual expenses) : \n".$monthlyIncome;

$monthlyIncome -= $monthlyExpenses["rent"];
$monthlyIncome -= $monthlyExpenses["utilities"];
$monthlyIncome -= $monthlyExpenses["healthInsurance"];

echo "\nMONTHLY income (after taxes and annual & monthly expenses) : \n".$monthlyIncome;

$weeklyIncome = $monthlyIncome/4.33;

echo "\nWEEKLY income (after taxes and annual & monthly expenses)) : \n".$weeklyIncome;

$weeklyIncome -= $weeklyExpenses["gas"];
$weeklyIncome -= $weeklyExpenses["food"];
$weeklyIncome -= $weeklyExpenses["entertainment"];

echo "\nWEEKLY income (after taxes and annual & monthly & weekly expenses) : \n".$weeklyIncome;

echo "\nBob can save $".round($weeklyIncome*52)." per year!";










