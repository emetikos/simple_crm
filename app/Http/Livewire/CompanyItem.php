<?php

namespace App\Http\Livewire;

use App\Services\CompanyManager;
use Livewire\Component;

class CompanyItem extends Component
{
    public $name;
    public $email;
    public $logo;
    public $website;
    public $comp_id;
    public $address;

    public function mount($company)
    {
        $this->comp_id = $company->id;
        $this->name = $company->name;
        $this->address = $company->address;
        $this->email = $company->email;
        $this->logo = $company->logo;
        $this->website = $company->website;

    }

    public function deleteCompany($id)
    {
        $isDeleted = CompanyManager::deleteCompany($id);

        if ($isDeleted) $this->emit('companyDeleted', $id);
    }
    public function render()
    {
        return view('livewire.company-item');
    }
}
