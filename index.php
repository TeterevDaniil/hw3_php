<?php
require('src/functions.php');
$names = task1();
$arr_full = task2($names);
task3($arr_full);
$arr_after_json =  task4();
$count_dubling = task5($names,$arr_after_json);
$average_age = task6($arr_after_json);

foreach($count_dubling as $duble){
  echo 'Имя '.$duble['name']. ' всего повторений: ' . $duble['kol'].'<br>';
}

echo 'Средний возраст составяет: '. $average_age;