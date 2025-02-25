<?php

use App\Jobs\Job1;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'ok: ' . config('app.mathias_test_1');
});

Route::get('/logs-cce0ed2e-5e61-4252-a9c5-964901a6e771', function () {
    logger("testing 123");
    logger()->info("testing 123");
    logger()->warning("testing 123");
    logger()->error("testing 123");

    return 'ok';
});

Route::get('/test-job', function () {
    for ($i = 0; $i < 100; $i++) {
        Job1::dispatch($i);
    }
});
