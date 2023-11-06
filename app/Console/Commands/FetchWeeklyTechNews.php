<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\TechnewsController as TechnewsController;
use App\Models\News as News;

class FetchWeeklyTechNews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fetch-weekly-tech-news';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetches tech news using newsdata.io api';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $newsJson = TechnewsController::getWeeklyTechNews();

        $newsString = json_encode($newsJson);

        News::createNewsRecord($newsString);

        $this->info('Weekly tech news fetched and saved successfully.');
    }
}
