<?php
# 2level
$user = [
    'id' => 5,
    'name' => 'ahmed',
    'activities' => [
        'running', 'reading'
    ],
    'orders' => [
        '150 EGP', '100 EGP'
    ]
];
// print_r($user);
// echo "{$user['name']}, and his activities is: {$user['activities'][0]}, {$user['activities'][1]} and his orders is: {$user['orders'][0]}, {$user['orders'][1]} ";
#3levels
$users = [
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
        'id' => 5,
        'name' => 'mohamed',
        'activities' => [
            'swimming', 'running'
        ],
        'orders' => [
            '250 EGP', '200 EGP'
        ]
    ]
];

echo "{$users[1]['name']} and his activities is: {$users[1]['activities'][0]}, {$users[1]['activities'][1]} and his orders is: {$users[1]['orders'][0]}, {$users[1]['orders'][1]}";


