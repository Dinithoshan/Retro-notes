<?php

namespace App\Livewire;

use App\Models\Note;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = "";
    public function render()
    {
        $results =[];
        if(strlen($this->search)>=1){
            $results = Note::where("heading","LIKE","%".$this->search.'%')->limit(7)->get();
        }
        return view('livewire.search-dropdown', [
            'outputs' => $results
        
        ]);
        
    }


    public function redirectToNote($output){
        return redirect()->route('note.show', $output);
    }
}
