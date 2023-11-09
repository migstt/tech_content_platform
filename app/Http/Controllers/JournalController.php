<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJournalRequest;
use App\Http\Requests\StoreJournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Journal;
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
        return view('blogs', ["journals" => Journal::getAllJournal(), "authors" => User::getAllUsers()]);
    }
    public function storeJournal(CreateJournalRequest $request)
    {
        Journal::createNewJournal($request->title, $request->contents);
        return redirect()->route('home');
    }

    public function transformMarkdown()
    {
        return Str::markdown(Journal::getAllJournals());
    }

    public function getParsedJournal($id)
    {
        $journal = Journal::getSingleJournal($id);
        $parsedJournal = Journal::journalContentParseToMarkdown($journal);
        return view('view-journal', ['parsedContents' => $parsedJournal, 'journal' => $journal]);
    }
}
