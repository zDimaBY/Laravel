<?php
echo 'PHP Work!<br>';
$A[0] = [
    'name' => 'Иванов И.И.',
    'age' => '25',
    'coverage' => 'higher education',
    'experience' => '2',
];
$A[1] = [
    'name' => 'Андреев П.П.',
    'age' => '34',
    'coverage' => 'higher education',
    'experience' => '5',
];
$A[2] = [
    'name' => 'Бидоров С.С.',
    'age' => '47',
    'coverage' => 'secondary education',
    'experience' => '7',
];
$A[3] = [
    'name' => 'Тихонов A.A.',
    'age' => '37',
    'coverage' => 'secondary education',
    'experience' => '3',
];
$A[4] = [
    'name' => 'Лукин B.B.',
    'age' => '40',
    'coverage' => 'secondary education',
    'experience' => '6',
];
$count = 0;
sort($A);

//print_r($A);
//echo 'Возраст Остапа - ' . $A['0']['age'] . ' лет.';
?>

<div class="city_list">
    <?php foreach ($A as $row): ?>
    <div class="city_list-row" <?php if ($A[$count]['experience'] < 3) {
        echo 'style="background-color: #113301;"';
    } ?>>
        <?php echo 'Full name - '; ?> <div class="full-name" <?php if (
     $A[$count]['coverage'] === 'higher education'
 ) {
     echo 'style="font-weight:bold;"';
 } ?>> <?php echo $A[$count]['name']; ?>
        </div>
        <div class="Age" <?php if ($A[$count]['age'] < 30) {
            echo 'style="color:green;"';
        } elseif ($A[$count]['age'] < 40) {
            echo 'style="color:orange;"';
        } else {
            echo 'style="color:red;"';
        } ?>>
            <?php echo ' Age: ' . $A[$count]['age'] . ' year. '; ?>
        </div>
        <div class="Coverage">
            <?php echo ' Coverage -> ' . $A[$count]['coverage']; ?>
        </div>
        <div class="Experience">
            <?php echo ', Experience: ' . $A[$count]['experience']; ?>
        </div>
        <?php $count = $count + 1; ?>
    </div>
    <?php endforeach; ?>
</div>