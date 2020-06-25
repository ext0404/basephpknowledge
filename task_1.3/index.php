<?php

$array = [
    [
        'sort' => '20',
        'name' => 'Mike'
    ],
    [
        'sort' => '10',
        'name' => 'Adam'
    ],
    [
        'sort' => '40',
        'name' => 'Stive'
    ],
    [
        'sort' => '300',
        'name' => 'Jane'
    ],
];


function myFunction($array)
{
    foreach ($array as $key => $value) {
        $sort = array_column($array, 'sort');
        array_multisort($sort, SORT_DESC, $array);
    }



    print_r($array);
}

myFunction($array);

