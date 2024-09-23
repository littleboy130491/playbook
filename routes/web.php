<?php

use Illuminate\Support\Facades\Route;
use App\Models\Content;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__ . '/auth.php';

Route::get('/{slug}', function (string $slug) {
    return Content::find($slug);
});