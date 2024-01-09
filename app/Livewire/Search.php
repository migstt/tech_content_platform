<?php

namespace App\Livewire;

use App\Models\Journal;
use Livewire\Component;

class Search extends Component
{
    public $search;

    public function render()
    {
        $searchValue = '%' . $this->search . '%';
        return view('livewire.search', [
            'resultsArticle' => Journal::where('title', 'LIKE', $searchValue)->get(),
        ]);
    }
}
