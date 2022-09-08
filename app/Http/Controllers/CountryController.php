<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function getCountries()
    {
        $countries = Country::all();
        return view('countries.list', [
            'countries' => $countries
        ]);
    }

    public function createCountry(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'iso_code' => 'required|max:2'
        ]);
        Country::create([
            'name' => $request->name,
            'iso_code' => $request->iso_code
        ]);
        return redirect('/paises');
    }

    public function updateCountry(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'iso_code' => 'required|max:2'
        ]);
        echo $validated;
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
