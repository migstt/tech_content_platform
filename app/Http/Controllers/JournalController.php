<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJournalRequest;
use App\Http\Requests\StoreJournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Journal;
use App\Models\News;
use Illuminate\Support\Str;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public static function returnCreateJournalView()
    {
        return view('create-journal');
    }
    public static function getAllJournal()
    {
        return view('blogs', [
            "journals" => Journal::getAllJournal(),
            "authors" => User::getAllUsers(),
            "news" => News::getNewsString(),
        ]);
    }
    public function storeJournal(CreateJournalRequest $request)
    {
        Journal::createNewJournal(
            $request->title,
            $request->contents,
        );
        return redirect()->route('home');
    }

    public function transformMarkdown()
    {
        return Str::markdown(Journal::getAllJournals());
    }

    public static function getParsedJournal($id)
    {
        $journal = Journal::getSingleJournal($id);
        $parsedJournal = Journal::journalContentParseToMarkdown($journal);

        return view('view-journal', [
            "parsedContents" => $parsedJournal,
            "journal" => $journal,
            "journals" => Journal::getAllJournal(),
        ]);
    }
    public static function parseSingleJournal($id)
    {
        $journal = Journal::getSingleJournal($id);
        $markdownContent = Journal::journalContentParseToMarkdown($journal);

        // Limit
        $lines = explode("\n", $markdownContent);
        return implode("\n", array_slice($lines, 0, 1));
    }

    // FOR TABLE OF CONTENTS
    public static function generateIndex($journalContents)
    {

        preg_match_all('/^#{1,3}\s+(.*?)$/m', $journalContents, $matches);

        $index = "<ul class='max-w-md space-y-1 text-gray-500 list-none list-inside dark:text-gray-400'>";

        foreach ($matches[0] as $i => $match) {
            $text = trim($matches[1][$i]);
            $slug = strtolower(str_replace("--", "-", preg_replace('/[^\da-z]/i', '-', $text)));
            $id = 'section-' . $slug;

            // Add id attribute to the corresponding section
            $anchor = '<a id="' . $id . '">' . $text . '</a>';
            $journalContents = str_replace($match, $anchor, $journalContents);

            $index .= '<li><a href="#' . $id . '">' . $text . '</a></li>';
        }

        $index .= "</ul>";

        return ["html" => $journalContents, "index" => $index];

    }
}
