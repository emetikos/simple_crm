<?php

namespace App\Services;

use App\Models\Company;

class CompanyManager
{
    /**
     * Save new company into the database.
     * Check if the company exists
     * @param $company
     * @return bool
     */
    public static function addCompany($company): bool
    {

        $exist = Company::where('name', $company['name'])->first();

        if (! $exist) {
            Company::create([
                'name' => $company['name'],
                'address' => $company['address'],
                'email' => $company['email'],
                'website' => $company['website'],
                'logo' => $company['logo'],
            ])->save();

            return true;
        }
        return false;
    }

    public static function deleteCompany($id)
    {
        $exist = Company::where('id', $id)->first();

        if ($exist) {
            $exist->delete();
//            Company::where('id', $id)->delete();
            return true;
        }

        return false;
    }
}