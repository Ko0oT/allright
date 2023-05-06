<?php
// показывать или нет выполненные задачи
$show_complete_tasks = rand(0, 1);

$projects = ['Входящие', 'Учеба', 'Работа', 'Домашние дела', 'Авто'];

$tasks = [
    ['title' => 'Собеседование в IT компании',
    'due_date' => '01.12.2019',
    'category' => 'Работа',
    'completed' => false,
    ],
    ['title' => 'Выполнить тестовое задание',
    'due_date' => '25.12.2019',
    'category' => 'Работа',
    'completed' => false,
    ],
    ['title' => 'Сделать задание первого раздела',
    'due_date' => '21.12.2019',
    'category' => 'Учеба',
    'completed' => true,
    ],
    ['title' => 'Встреча с другом',
    'due_date' => '22.12.2019',
    'category' => 'Входящие',
    'completed' => false,
    ],
    ['title' => 'Купить корм для кота',
    'due_date' => null,
    'category' => 'Домашние дела',
    'completed' => false,
    ],
    ['title' => 'Заказать пиццу',
    'due_date' => null,
    'category' => 'Домашние дела',
    'completed' => false,
    ],
];

$user_name = 'Сергей';