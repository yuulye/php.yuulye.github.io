<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Storage;

class httrack extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'httrack {url}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'httrack';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    function clean($path) {
        $lines = file($path);
        $endLine = count($lines) - 2;
        $indexes = [3,4,$endLine];
        $output = [];

        foreach ($indexes as $i) {
            if (@$lines[$i]) {
                $output[] = $lines[$i];
                unset($lines[$i]);
            }
        }

        dump($path, $output);
        file_put_contents($path, $lines);
        return $output;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info("laravel console: httrack...");
        $url = $this->argument('url');
        $this->info('starting on ' . $url);

        $storage = Storage::disk('httrack');
        $paths = $storage->allFiles();
        foreach ($paths as $path) {
            if ($path == "index.html") continue;
            $pathinfo = pathinfo($path);
            if (@$pathinfo['extension'] == 'html') {
                $p = 'httrack/'.$path;
                $this->clean($p);
                $files[] = $path;
            }
        }
    }
}
