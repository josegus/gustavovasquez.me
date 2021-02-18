<?php

use Illuminate\Support\Str;

return [
    'production' => false,
    'baseUrl' => '',
    'title' => 'Gustavo Vasquez (local)',
    'selected' => function ($page, $section) {
        return Str::contains($page->getPath(), $section) ? 'border-b-2' : '';
    },
];
