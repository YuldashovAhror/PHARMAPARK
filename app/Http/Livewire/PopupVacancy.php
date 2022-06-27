<?php

namespace App\Http\Livewire;

use App\Models\Vacation;
use Livewire\Component;

class PopupVacancy extends Component
{
    public $vacancy;

    public function mount($vacation)
    {
        $this->vacancy = Vacation::find($vacation);
    }
    public function render()
    {
        return view('livewire.popup-vacancy');
    }
}
