<?php
function task1()
{
    $arr_name = ['Sasha', 'Natasha', 'Sophia', 'Jenya', 'Vika'];
    return  $arr_name;
}


function task2(array $names)
{
    for ($i = 0; $i < 50; $i++) {
        $age = mt_rand(18, 45);
        $rand_keys = array_rand($names, 1);
        $name = $names[$rand_keys];
        $arr[] = [$i => 'id', 'name' => $name, 'age' => $age];
    }
    return ($arr);
}

function task3(array $arr_full)
{
    file_put_contents('../users.json', json_encode($arr_full));
}

function task4()
{
    $data =  file_get_contents('../users.json');
    $arr_name = json_decode($data, true);
    return ($arr_name);
}
function task5(array $names, array $after_json)
{
    $kol_names = [];

    for ($i = 0; $i < 5; $i++) {
        $kol_names[] = ['name' => $names[$i], 'kol' => '0'];
        foreach ($after_json as $k) {
            if ($k['name'] == $kol_names[$i]['name']) {
                $kol_names[$i]['kol'] += 1;
            };
        }
    }
    return $kol_names;
}

function task6(array $arr)
{
    $summ_age = 0;
    foreach ($arr as $k) {
        $summ_age += $k['age'];
    }
    $average = $summ_age / count($arr);
    return $average;
}
