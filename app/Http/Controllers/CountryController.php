<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();
        echo $countries;
    }

    public function createCountry(Request $request)
    {
        $country = Country::create([
            'name' => $request->name,
            'iso_code' => $request->iso_code
        ]);
        echo $country;
    }

    public function updateCountry(Request $request, $id)
    {
        $country = Country::where('id', $id)
            ->update([
                'name' => $request->name,
                'iso_code' => $request->iso_code
            ]);
        echo $country;
    }

    public function deleteCountry($id)
    {
        Country::destroy($id);
    }
}
