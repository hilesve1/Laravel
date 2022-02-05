<?php

namespace App\Console\Commands;

use App\Components\importDataAlbum;
use Illuminate\Console\Command;

class importJsonPlaceholderCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'import:jsonplaceholder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $import = new importDataAlbum();
        $response = $import->client->request('GET', '');
        dd(json_decode($response->getBody()->getContents()));
    }
}
