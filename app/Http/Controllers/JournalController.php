<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJournalRequest;
use App\Http\Requests\UpdateJournalRequest;
use Illuminate\Http\Request;
use App\Models\Journal;
use Illuminate\Support\Str;
use Parsedown;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'contents' => 'required|string',
        ]);
        Journal::createNewJournal($request->title, $request->contents);
        return redirect()->route('home')->with('success', 'Journal entry created successfully');
    }

    public function transformMarkdown()
    {
        $markdowned = Str::markdown(Journal::getAllJournals());
        return $markdowned;
    }

    /**
     * Display the specified resource.
     */
    public function showSingleJournal($journalId)
    {

        $journal = Journal::find($journalId);
        $markdownContents = $journal->contents;
        $parsedown = new Parsedown();

        $parsedContents = $parsedown->text($markdownContents);

        return view('view-journal', ['parsedContents' => $parsedContents, 'journal' => $journal]);
    }

    /**
     * Show the form for editing the specified resource.
     */ 
    public function edit(Journal $journal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJournalRequest $request, Journal $journal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Journal $journal)
    {
        //
    }
}
