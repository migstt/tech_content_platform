<?php

namespace App\Models;

use DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['news_string'];

    public $table = "weekly_news";

    public static function createNewsRecord($newsString)
    {
        return self::create([
            'news_string' => $newsString
        ]);
    }

    public static function getNewsString()
    {
        return self::all();
    }

    public static function truncateNewsTable()
    {
        DB::table('weekly_news')->truncate();
    }
}
