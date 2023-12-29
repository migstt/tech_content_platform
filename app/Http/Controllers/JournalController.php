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
use Symfony\Component\ErrorHandler\ThrowableUtils;

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

    public static function parseSingleJournal($id)
    {
        $journal = Journal::getSingleJournal($id);
        $markdownContent = Journal::journalContentParseToMarkdown($journal);

        // Limit
        $lines = explode("\n", $markdownContent);
        return implode("\n", array_slice($lines, 0, 1));
    }

    public static function getParsedJournal($id)
    {
        $journal = Journal::getSingleJournal($id);
        $parsedJournal = Journal::journalContentParseToMarkdown($journal);

        // Generate index with IDs for headers
        $indexResult = self::generateIndexHTML($parsedJournal);
        $parsedJournalWithIDs = $indexResult['html'];
        $tableOfContents = $indexResult['index'];

        return view('view-journal', [
            "parsedJournalContents" => $parsedJournal,
            "journal" => $journal,
            "journals" => Journal::getAllJournal(),
            "parsedJournalContentsv2" => $parsedJournalWithIDs,
            "tableOfContentsv2" => $tableOfContents,
            "tableOfContents" => self::generateIndexHTML($tableOfContents),
            "previousJournal" => Journal::getPreviousJournal($id),
            "nextJournal" => Journal::getNextJournal($id),
        ]);
    }

    // FOR TABLE OF CONTENTS with HTML TYPE HEADERS
    public static function generateIndexHTML($journalContents)
    {
        preg_match_all('/<h[1-3][^>]*>(.*?)<\/h[1-6]>/i', $journalContents, $matches);
    
        $index = "<ul class='max-w-md space-y-1 text-gray-500 list-none list-inside dark:text-gray-400'>";
    
        foreach ($matches[0] as $i => $match) {
            $text = trim(strip_tags($matches[1][$i])); // Strip HTML tags from header text
            $slug = strtolower(str_replace("--", "-", preg_replace('/[^\da-z]/i', '-', $text)));
            $id = 'section-' . $slug;
    
            // Add id attribute to the corresponding header tag
            $headerWithId = str_replace('<h', '<h2 id="' . $id . '"', $match);
            $journalContents = str_replace($match, $headerWithId, $journalContents);
    
            $index .= '<li class="toc-item" data-target="' . $id . '"><a href="#' . $id . '">' . $text . '</a></li>';

        }
    
        $index .= "</ul>";
    
        return ["html" => $journalContents, "index" => $index];
    }
}
