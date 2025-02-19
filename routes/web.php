<?php

use App\Jobs\Job1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'ok';
});

Route::get('/test-job', function () {
    for ($i = 0; $i < 100; $i++) {
        Job1::dispatch($i);
    }
});
