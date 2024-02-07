<?php
$billingStates = [
    'SP' => 67836.43,
    'RJ' => 36678.66,
    'MG' => 29229.88,
    'ES' => 27165.48,
    'Outros' => 19849.53,
];

$totalMonthly = array_sum($billingStates);

foreach ($billingStates as $state => $value) {
    $percentage = ($value / $totalMonthly) * 100;
    echo "$state: $percentage%\n";
}