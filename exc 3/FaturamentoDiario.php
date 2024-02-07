<?php
// Lê o conteúdo do arquivo JSON
$jsonFile = file_get_contents("dados.json");
$data = json_decode($jsonFile, true);

// Verifica se o arquivo foi lido com sucesso
if ($data === null) {
    die("Erro ao ler o arquivo JSON.\n");
}

// Obtém o vetor de faturamento diário do arquivo JSON
$dailyBilling = array_column($data, 'valor');

// Verifica se há dados para processar
if (empty($dailyBilling)) {
    die("Não há dados de faturamento disponíveis.\n");
}

// Calcula o menor e o maior valor de faturamento
$minBilling = min($dailyBilling);
$maxBilling = max($dailyBilling);

// Calcula a média mensal, ignorando dias sem faturamento
$monthlyAverage = array_sum($dailyBilling) / count($dailyBilling);

// Conta o número de dias em que o faturamento foi superior à média mensal
$daysAboveAverage = count(array_filter($dailyBilling, function ($value) use ($monthlyAverage) {
    return $value > $monthlyAverage;
}));

// Exibe os resultados
echo "Menor faturamento diário: $minBilling\n";
echo "Maior faturamento diário: $maxBilling\n";
echo "Dias acima da média mensal: $daysAboveAverage\n";