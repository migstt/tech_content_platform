<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parsedown;

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

    public static function getSingleJournal($id)
    {
        return self::find($id);
    }

    public static function getAllJournal()
    {
        return self::orderBy('updated_at', 'DESC')->paginate(4);
    }

    public static function journalContentParseToMarkdown($journal)
    {
        $contents = $journal->contents;
        $parsedown = new Parsedown();
        return $parsedown->text($contents);
    }

    public static function getNextJournal($journalId)
    {
        $journal = self::getSingleJournal($journalId);
        $nextJournal = self::where('created_at', '>', $journal->created_at)
            ->orderBy('created_at', 'asc')
            ->first();
        if (!$nextJournal) {
            return null;
        }
        return $nextJournal;
    }

    public static function getPreviousJournal($journalId)
    {
        $journal = self::getSingleJournal($journalId);
        $previousJournal = self::where('created_at', '<', $journal->created_at)
            ->orderBy('created_at', 'desc')
            ->first();
        if (!$previousJournal) {
            return null;
        }
        return $previousJournal;
    }

}
