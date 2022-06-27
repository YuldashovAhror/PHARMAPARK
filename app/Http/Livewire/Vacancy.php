<?php

namespace App\Http\Livewire;

use App\Models\Vacation;
use App\Models\VacationCategory;
use Livewire\Component;

class Vacancy extends Component
{
    public $vacancy, $n, $data, $category, $openPopup, $activeTab;

    public function mount()
    {
        $this->activeTab = 0;
        $this->n = 'name_'.session()->get('locale');
        $this->vacancy = Vacation::orderBy('created_at', 'desc')->first();
    }
    public function render()
    {
        $this->n = 'name_'.session()->get('locale');
        $this->data = Vacation::get(['id', $this->n, 'company']);
        $this->category = VacationCategory::all();
        return view('livewire.vacancy');
    }

    public function popup($id)
    {
        $this->openPopup = 'on';
        $this->vacancy = Vacation::find($id);
    }

    public function closePopup()
    {
        $this->openPopup = '';
        $this->vacancy = null;
    }

    public function active($id)
    {
        $this->activeTab = $id;
    }
}
