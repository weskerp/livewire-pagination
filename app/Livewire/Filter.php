<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\User;

class Filter extends Component
{
    use WithPagination;

    public $searchTerm;
    public $perPage = 10;

    public function render()
    {

        return view('livewire.filter', ['users' => User::where(function($sub_query){
            $sub_query->where('name', 'like', '%'.$this->searchTerm.'%')->orWhere('email', 'like', '%'.$this->searchTerm.'%');
        })->paginate($this->perPage)]);
    }
}
