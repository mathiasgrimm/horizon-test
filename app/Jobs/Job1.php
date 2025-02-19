<?php

namespace App\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class Job1 implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct(public $value)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger('starting hostname: '.(gethostname())." value: {$this->value}");
        sleep(1);
        //logger('finished hostname: '.(gethostname())." value: {$this->value}");
    }
}
