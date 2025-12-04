<?php

return [
    'milestones' => [
        'focus'   => [1, 3, 5, 10, 20, 50, 100],
        'streak'  => [3, 5, 7, 14, 30],
        'journal' => [1, 3, 5, 10, 25],
        'task'    => [5, 10, 25, 50, 100],
    ],

    'categories' => [
        'focus' => [
            'icon' => 'bi-lightbulb',
            'title' => 'Focus Master!',
            'description' =>
                'You stayed focused for :count hour(s) straight. That’s some real discipline, impressive!',
        ],

        'streak' => [
            'icon' => 'bi-trophy',
            'title' => 'Day Streak!',
            'description' =>
                'You’ve opened MINDTRACK for :count day(s) in a row. Keep shining!',
        ],

        'journal' => [
            'icon' => 'bi-journal-check',
            'title' => 'Journal Initiator!',
            'description' =>
                'You uploaded :count journals! Your journey of reflection begins here.',
        ],

        'task' => [
            'icon' => 'bi-check2-circle',
            'title' => 'Task Conqueror!',
            'description' =>
                'You completed :count tasks! Keep up the momentum and conquer more challenges!',
        ],
    ],
];
