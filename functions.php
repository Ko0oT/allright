<?php

/**
 * Пользовательская функция, считает количество задач в проекте
 */
function get_tasks_count (array $tasks, string $project) {
  $count = 0;
  foreach($tasks as $task) {
      if($task['category'] === $project) {
          $count += 1;
      }
  }
  return $count;
};

