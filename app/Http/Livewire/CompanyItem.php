<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CompanyItem extends Component
{
    public $name;
    public $email;
    public $logo;
    public $website;
    public $comp_id;

    public function mount($company)
    {
        $this->comp_id = $company->id;
        $this->name = $company->name;
        $this->email = $company->email;
        $this->logo = $company->logo;
        $this->website = $company->website;

    }
    public function render()
    {
        return view('livewire.company-item');
    }
}
