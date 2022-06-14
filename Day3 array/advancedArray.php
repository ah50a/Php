<?php

$categories = [
    'Id' => 1,
    'name' => 'mobiles',
    'subCategories' => [
        'samsung' => [
            (object)[
                'id' => 50,
                'name' => 'NOTE 10',
                'prices' => [5000, 6000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'black', 'secondaryColors' => ['red', 'blue']],
            ], (object)[
                'id' => 60,
                'name' => 'S20',
                'prices' => [7000, 8000],
                'madeIn' => ['china', 'germany'],
                'colors' => ['primary' => 'white', 'secondaryColors' => ['brown', 'orange']],
            ]
        ],
        'apple' => [
            (object)[
                'id' => 70,
                'name' => 'Iphone X',
                'prices' => 20000,
                'madeIn' => (object)['counrty' => 'china'],
                'colors' => ['red', 'green', 'black'],
            ], (object)[
                'id' => 80,
                'name' => 'Iphone 12',
                'prices' => 60000,
                'madeIn' => (object)['counrty' => 'china'],
                'colors' => [
                    (object)[ 
                        'primary' => 'black'
                    ],
                    (object)[
                        'secondaryColors' =>
                        [
                            'red',
                            'blue'
                        ]
                    ]
                ],
            ]
        ],
        'oppo' => [
            (object)[
                'id' => 90,
                'name' => 'Oppo F1',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ], (object)[
                'id' => 100,
                'name' => 'Oppo F2',
                'prices' => [],
                'madeIn' => [],
                'colors' => [],
            ]
        ]
    ]
];
  
// print_r($categories['subCategories']);
// print_r($categories['subCategories']['samsung'][0]->name);

// echo $categories['subCategories']['samsung'][1]->name . " madeIn {$categories['subCategories']['samsung'][1]->madeIn[0]}";

// echo $categories['subCategories']['apple'][1]->name . 
// " colors is {$categories['subCategories']['apple'][1]->colors[1]->secondaryColors[0]}" . " and {$categories['subCategories']['apple'][1]->colors[1]->secondaryColors[1]}";

