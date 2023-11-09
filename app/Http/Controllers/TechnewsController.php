<?php

namespace App\Http\Controllers;

use App\Models\News;
use NewsdataIO\NewsdataApi;

class TechnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function getWeeklyTechNews()
    {
        $newsdataApiObj = new NewsdataApi("pub_3244212079438e87516b4e01dcf30f93c1ea7");
        $data = array("category" => "technology", "language" => "en", "country" => "us");

        return $newsdataApiObj->get_latest_news($data);
    }
}
