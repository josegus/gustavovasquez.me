<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Gustavo Vasquez (local)',
    'isSelected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section);
    },
];
