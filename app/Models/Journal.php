<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'contents', 'user_id', 'author'];
    public $table = "journals";
    public static function createNewJournal($title, $contents)
    {
        return self::create([
                'title' => $title,
                'contents' => $contents,
                'user_id' => auth()->user()->id,
                'author' => auth()->user()->name,
        ]);
    }

    public static function getAllJournal()
    {
        return self::orderBy('updated_at', 'DESC')->paginate(10);
    }

}
