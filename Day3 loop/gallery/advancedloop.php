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

// foreach($categories['subCategories'] as $brand => $products){
//     echo $brand .' : ';
//     foreach ($products as $name => $product) {
//         # code...
//         echo $product -> name . ',';  
//     }
//     echo  '<br>';
// }
$res = '';
foreach ($categories['subCategories'] as $brand => $products) {
    # code...
    $res .= $brand;
    foreach ($products as $index => $product) {
        # code...
        $res .= $product->name . ' , ';
    }
    $res .= '<br>';
}
echo $res;
 


/* $users = [
    [
        'id' => 5,
        'name' => 'ahmed',
        'activities' => [
            'running', 'reading'
        ],
        'orders' => [
            '150 EGP', '100 EGP'
        ]
    ],
    [
        'id' => 3,
        'name' => 'mohamed',
        'activities' => [
            'swimming', 'running'
        ],
        'orders' => [
            '250 EGP', '200 EGP'
        ]
    ],
    [
        'id' => 2,
        'name' => 'omnia',
        'activities' => [
            'swimming'
        ],
        'orders' => [
            '250 EGP', '200 EGP'
        ]
    ]
];

// echo $users[0]['activities'][0] . ',' . $users[0]['activities'][1];
$res= '';
foreach ($users as $index => $user) {
    # code...
    $res .= $user['name'] . ' : ';
       
        $lastindex = count($user['activities']) -1;
    foreach ($user['activities'] as $index => $activity) {
        $res .= $activity ; 
        if ($lastindex != $index) {
            # code...
            $res .= ' , ';
        }
        
    } 
    $res .= '<br>';
}
// echo $res;*/
