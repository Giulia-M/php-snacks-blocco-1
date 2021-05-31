<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo
stesso numero più di una volta -->


<?php
$listNumbers = [];

for ($i = 0; $i < 15; $i++) {
    $randomNumber = rand(0, 100);

    if (!in_array($randomNumber, $listNumbers)) {
        array_push($listNumbers, $randomNumber);

    } else {
        //
        $i--;
    }
}

$comma_separated = implode(", ", $listNumbers);

?>

<p><strong>listNumbers: </strong><?php echo $comma_separated ?></p>
<p><strong>listNumbers Length: </strong><?php echo count($listNumbers) ?> numeri.</p>