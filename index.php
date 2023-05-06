<?php

require_once 'helpers.php';
require_once 'data.php';
require_once 'functions.php';

$page_content = include_template('main.php', [
    'show_complete_tasks' => $show_complete_tasks,
    'projects' => $projects,
    'tasks' => $tasks,
]);

$layout = include_template('layout.php', [
    'content' => $page_content,
    'title' => 'Дела в порядке',
    'user_name' => $user_name,
]);

print($layout);
