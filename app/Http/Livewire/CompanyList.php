<?php

namespace App\Http\Livewire;

use App\Models\Company;
use Livewire\Component;

class CompanyList extends Component
{
    public $compData;
    public $new_name;
    public $new_email;
    public $new_logo;
    public $new_website;

    public function mount()
    {
        $this->compData = Company::all();
    }

    public function addCompany()
    {

    }
    public function render()
    {
        return view('livewire.company-list');
    }
}
